<?php
// ==================== 1. HTTPS FORCING ====================
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === 'off') {
    $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $redirect);
    exit;
}
// Send HSTS header (tell browsers to always use HTTPS for the next year)
header('Strict-Transport-Security: max-age=31536000; includeSubDomains; preload');

// ==================== 2. START OUTPUT BUFFERING ====================

$title = "Sign Up - Success";
include 'database/conn.php';
include 'include/header.php';

// ==================== 3. UNICODE NORMALIZATION HELPER ====================
function normalizeUnicode($string) {
    if (function_exists('Normalizer::normalize')) {
        $normalized = \Normalizer::normalize($string, \Normalizer::FORM_C);
        if ($normalized !== false) {
            return $normalized;
        }
    }
    return $string; // fallback if intl extension missing
}

$error_message = '';
$registration_success = false;

// ==================== 4. PROCESS FORM SUBMISSION ====================
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    // Get and normalize Unicode fields
    $email    = trim($_POST['email'] ?? '');
    $username = normalizeUnicode(trim($_POST['Username'] ?? ''));
    $name     = normalizeUnicode(trim($_POST['Name'] ?? ''));
    $password = $_POST['password'] ?? '';

    // Basic validation
    if (empty($email) || empty($username) || empty($name) || empty($password)) {
        $error_message = 'All fields are required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = 'Invalid email format.';
    } elseif (strlen($password) < 6) {
        $error_message = 'Password must be at least 6 characters.';
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $role_id = 1; // Default role

        // Attempt insertion – no SELECT beforehand → race condition safe
        $result = $crud->insertuser($username, $email, $hashed_password, $role_id, $name);

        if ($result === true) {
            $registration_success = true;
        } else {
            // $result contains errorInfo array from PDO
            if (is_array($result) && isset($result[1])) {
                switch ($result[1]) {
                    case 1062: // MySQL duplicate entry
                        // Detect which column caused the duplicate
                        if (strpos($result[2], 'username') !== false) {
                            $error_message = 'Username already taken. Please choose another.';
                        } elseif (strpos($result[2], 'email') !== false) {
                            $error_message = 'Email already registered. Please use a different email.';
                        } else {
                            $error_message = 'Account already exists. Please try again.';
                        }
                        break;
                    default:
                        // Log real error for admin, show generic message to user
                        error_log("Signup DB error: " . print_r($result, true));
                        $error_message = 'A system error occurred. Please try again later.';
                        break;
                }
            } else {
                error_log("Unexpected signup result: " . print_r($result, true));
                $error_message = 'A system error occurred. Please try again later.';
            }
        }
    }
}

// ==================== 5. HANDLE ERRORS (NO LEAKED DETAILS) ====================
if (!empty($error_message)) {
    // Clean the message for JavaScript output (prevent XSS)
    $safe_message = addslashes(htmlspecialchars($error_message, ENT_QUOTES, 'UTF-8'));
    echo "<script>alert('{$safe_message}'); window.location.href='signup.php';</script>";
    exit;
}

// If success, show the success page (only reaches here if $registration_success === true)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="shortcut icon" href="./images/logo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
    <!-- Auto redirect to login.php after 3 seconds -->
    <meta http-equiv="refresh" content="3;url=login.php">
    <style>
        .success-message { text-align: center; }
        .success-message .icon { font-size: 64px; margin-bottom: 15px; color: #28a745; }
        .success-message h3 { margin-bottom: 10px; color: #155724; }
        .success-message p { margin-bottom: 20px; color: #0c5460; }
        .redirect-note { font-size: 0.9rem; margin-top: 15px; }
        .redirect-note a { color: var(--primary-color, #007bff); text-decoration: underline; }
    </style>
</head>
<body>
<div class="change-password-container">
    <div class="success-message">
        <div class="icon material-icons-sharp">check_circle</div>
        <h2>✅ Registration Successful!</h2>
        <h3>Your account has been created</h3>
        <p>You will be redirected to the login page in 3 seconds.</p>
        <div class="redirect-note">
            If you are not redirected automatically, <a href="login.php">click here to log in</a>.
        </div>
    </div>
</div>
</body>
</html>

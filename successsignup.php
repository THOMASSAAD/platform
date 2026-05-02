<?php


$title = "Sign Up - Success";
include 'database/conn.php';
include 'include/header.php';

$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $email    = trim($_POST['email'] ?? '');
    $username = trim($_POST['Username'] ?? '');
    $name     = trim($_POST['Name'] ?? '');
    $password = $_POST['password'] ?? '';

    // Basic validation
    if (empty($email) || empty($username) || empty($name) || empty($password)) {
        $error_message = 'All fields are required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = 'Invalid email format.';
    } elseif (strlen($password) < 6) {
        $error_message = 'Password must be at least 6 characters.';
    } else {
        // Check for existing username or email
        $resultuser = $crud->getuser($username);
        $resultemail = $crud->getemail($email);

        if ($resultuser) {
            $error_message = 'Username already exists. Please choose a different username.';
        } elseif ($resultemail) {
            $error_message = 'Email already exists. Please use a different email.';
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $role = 1; // Default role
            $issuccess = $crud->insertuser($username, $email, $hashed_password, $role, $name);

            if (!$issuccess) {
                 $errorInfo = $crud->db->errorInfo(); // assuming $crud->db is public
                    echo "Database error: " . print_r($errorInfo, true);
                    exit;
            } else {
                // Success – we will show the success message and auto-redirect
                $registration_success = true;
            }
        }
    }
}

// If there's an error, show it and stop further output of success page
if (!empty($error_message)) {
    echo "<script>alert('" . addslashes($error_message) . "'); window.location.href='signup.php';</script>";
    exit;
}
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
        .success-message {
            text-align: center;
        }
        .success-message .icon {
            font-size: 64px;
            margin-bottom: 15px;
            color: #28a745;
        }
        .success-message h3 {
            margin-bottom: 10px;
            color: #155724;
        }
        .success-message p {
            margin-bottom: 20px;
            color: #0c5460;
        }
        .redirect-note {
            font-size: 0.9rem;
            margin-top: 15px;
        }
        .redirect-note a {
            color: var(--primary-color, #007bff);
            text-decoration: underline;
        }
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

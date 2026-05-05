<?php
session_start(); // Start session to store error messages
$title = "Edit User";
include 'include/header.php';
include 'database/conn.php';

// Check if user_id is provided in URL
if (!isset($_GET['user_id']) || empty($_GET['user_id'])) {
    $_SESSION['error_message'] = "No user ID specified.";
    header("Location: admin.php");
    exit();
}

$userid = $_GET['user_id'];
$res = $crud->getuserbyid($userid);

// Check if user exists
if (!$res || empty($res)) {
    $_SESSION['error_message'] = "User with ID $userid does not exist.";
    header("Location: admin.php");
    exit();
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="shortcut icon" href="./images/logo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
</head>

<div class="change-password-container">
    <form action="succedit.php" method="POST" id="signup-form">
        <h2><?php echo $title; ?></h2>
        <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($res['user_id']); ?>">
        <div class="box">
            <p class="text-muted">Email</p>
            <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($res['email']); ?>" required>
        </div>
        <div class="box">
             <p class="text-muted">Role</p>
            <select name="role_value" id="role" required>
                <option value="1"  <?php echo ($res['role_name'] == 'user') ? 'selected' : ''; ?>>User</option>
                <option value="2"  <?php echo ($res['role_name'] == 'admin') ? 'selected' : ''; ?>>Admin</option>
            </select>
        </div>
        <div class="box">
            <p class="text-muted">Username</p>
            <input type="text" name="Username" id="Username" value="<?php echo htmlspecialchars($res['username']); ?>" required>
        </div>
        <div class="box">
            <p class="text-muted">Name</p>
            <input type="text" name="Name" id="Name" value="<?php echo htmlspecialchars($res['name']); ?>" required>
        </div>
        <div class="button">
            <button type="submit" name="submit" value="Save" class="btn">Edit User</button>
        </div>
    </form>
</div>
<?php
include 'database/conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $name     = trim($_POST['Name'] ?? '');
    $role_id  = $_POST['role_value'] ?? '';
    $userid   = $_POST['user_id'] ?? ''; // Basic validation
    $res = $crud->updateuser($userid, $role_id, $name);
    if ($res === true) {
       header("Location: admin.php");
    } else {
        $error_message = 'An error occurred while updating the user.';
        echo "<script>alert('$error_message'); window.location.href='admin.php';</script>";
    }
}
?>

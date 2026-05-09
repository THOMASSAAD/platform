<?php
include 'database/conn.php';
include 'include/session.php';

echo "ksksksksk";
print_r($_POST);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    echo "ksksksksk";
    $role_id  = $_POST['role_value'];
    $user_id  = $_POST['user_id'];
    $name     = $_POST['Name'];
    $email    = $_POST['email'];
    $username = $_POST['Username'];

    $res= $crud->updateuser($user_id, $role_id, $name, $email, $username);    
    if ($res === true) {
        header("Location:admin.php");
    } else {
        $error_message = 'An error occurred while updating the user.';
        echo "<script>alert('$error_message'); window.location.href='admin.php';</script>";
    }
}
?>

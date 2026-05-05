<?php
include 'database/conn.php';

// Check if user_id is provided
if (!isset($_GET['user_id']) || empty($_GET['user_id'])) {
    header("Location: admin.php?error=missing_id");
    exit();
}

$userid = $_GET['user_id'];

// Check if user exists (optional but recommended)
$user = $crud->getuserbyid($userid);
if (!$user || empty($user)) {
    header("Location: admin.php?error=not_found&id=" . urlencode($userid));
    exit();
}

// Attempt to delete
$deleted = $crud->deleteuser($userid);
if ($deleted) {
    header("Location: admin.php?success=deleted");
} else {
    header("Location: admin.php?error=delete_failed");
}
exit();
?>
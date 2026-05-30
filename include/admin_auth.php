<?php
/**
 * Admin Authentication & Authorization Check
 * Include this file at the top of all admin pages to restrict access to authenticated admin users only
 */

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    // User not logged in, redirect to login
    header("Location: login.php?error=unauthorized");
    exit();
}

// Check if user has admin role
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    // User is not an admin, deny access
    header("Location: index.php?error=access_denied");
    exit();
}

// Admin access granted
?>

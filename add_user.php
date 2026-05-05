<?php
include 'database/conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // --- Input sanitisation & validation ---
    $fullName = trim($_POST['full_name'] ?? '');
    $email    = trim($_POST['email'] ?? '');
    $username = trim($_POST['username'] ?? '');
    $roleId   = filter_input(INPUT_POST, 'role_id', FILTER_VALIDATE_INT);
    $password = password_hash('123456', PASSWORD_DEFAULT);

    $errors = [];
    if (empty($fullName))               $errors[] = 'Full name is required.';
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Valid email is required.';
    if (empty($username))               $errors[] = 'Username is required.';
    if (!$roleId || $roleId <= 0)       $errors[] = 'Valid role ID is required.';

    if (!empty($errors)) {
        // Show validation errors as HTML
        echo '<!DOCTYPE html><html><head><title>Error</title></head><body>';
        echo '<h1>Validation Error</h1><ul>';
        foreach ($errors as $err) echo '<li>' . htmlspecialchars($err) . '</li>';
        echo '</ul><a href="admin.php">← Back</a></body></html>';
        exit;
    }

    // --- Secure insertion (relies on UNIQUE constraints for race condition protection) ---
    $crud = new crud($pdo);
    $result = $crud->insertuser($username, $email, $password, $roleId, $fullName);

    if ($result === true) {
        // ✅ SUCCESS – Show HTML confirmation to admin
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>User Added Successfully</title>
            <style>
                body { font-family: Arial, sans-serif; margin: 40px; text-align: center; }
                .success { background: #d4edda; color: #155724; padding: 20px; border-radius: 5px; display: inline-block; text-align: left; }
                a { display: inline-block; margin-top: 20px; color: #007bff; text-decoration: none; }
            </style>
        </head>
        <body>
            <div class="success">
                <h1>✅ User Added Successfully</h1>
                <p><strong>Full Name:</strong> <?php echo htmlspecialchars($fullName); ?></p>
                <p><strong>Username:</strong> <?php echo htmlspecialchars($username); ?></p>
                <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
                <p><strong>Default Password:</strong> 123456 (change on first login)</p>
                <a href="admin.php">← Back to Admin Panel</a>
            </div>
        </body>
        </html>
        <?php
        exit;
    } else {
        // ❌ FAILURE – Could be duplicate user (race condition prevented) or other error
        // Assume duplicate if username/email already exist (thanks to UNIQUE constraints)
        echo '<!DOCTYPE html><html><head><title>Error Adding User</title></head><body>';
        echo '<div style="text-align:center;margin-top:40px;color:#721c24;background:#f8d7da;padding:20px;display:inline-block;width:100%;box-sizing:border-box;">';
        echo '<h1>⚠️ Failed to Add User</h1>';
        echo '<p>A user with the same <strong>username</strong> or <strong>email</strong> may already exist.</p>';
        echo '<p>No duplicate users allowed – race condition avoided.</p>';
        echo '<a href="admin.php">← Try again</a>';
        echo '</div></body></html>';
        exit;
    }
}
?>

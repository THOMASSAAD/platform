<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard - Reset Password</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="shortcut icon" href="./images/logo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">


</head>
<?php include 'include/header.php'; ?>

    <div class="change-password-container">
        <form action="">
            <h2>Reset Password</h2>
            <div class="box">
                <p class="text-muted">Email</p>
                <input type="email" id="email" required>
            </div>

            <div class="button">
                <button type="submit" value="Save" class="btn">Reset Password</button>
            </div>
            <p class="text-muted" style="text-align: center; margin-top: 1rem; margin-bottom: 0.5rem;"><a href="login.php" style="color: inherit; text-decoration: underline;">Back to Sign In</a></p>
        </form>    
    </div>

</body>

<script src="app.js"></script>

</html>

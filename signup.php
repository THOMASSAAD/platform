<!DOCTYPE html>
<html lang="en">
<?php
    $title = "Sign Up";
    include 'database/conn.php';
    include 'include/header.php';
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="shortcut icon" href="./images/logo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">


</head>
<body>
   

    <div class="change-password-container">
        <form action="successsignup.php" method="POST" id="signup-form">
            <h2>Sign Up</h2>
            <div class="box">
                <p class="text-muted">Email</p>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="box">
                <p class="text-muted">Username</p>
                <input type="text" name="Username" id="Username" required>
            </div>
            <div class="box">
                <p class="text-muted">Name</p>
                <input type="text" name="Name" id="Name"  required>
            </div>

            <div class="box">
                <p class="text-muted">Password</p>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="box">
                <p class="text-muted">Confirm Password</p>
                <input type="password" name="confirm_password" id="confirm-password" required>
            </div>
            


            <div class="button">
                <button type="submit" name="submit" value="Save" class="btn">Create Account</button>
            </div>
            <div style="text-align: center; margin-top: 15px;">
                <a href="login.php" class="text-muted" style="text-decoration: underline; font-size: 0.9rem;">Already have an account? Log in.</a>
            </div>
        </form>    
    </div>

</body>

<script src="app.js"></script>
<script>
    document.getElementById('signup-form').addEventListener('submit', function(event) {
        var password = document.getElementById('password').value;
        var confirmPassword = document.getElementById('confirm-password').value;

        if (password !== confirmPassword) {
            event.preventDefault();
            alert('Passwords do not match. Please try again.');
        }
    });
</script>
</html>

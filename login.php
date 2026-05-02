<!DOCTYPE html>
<html lang="en">
<?php
        $title = "Sign In";
        include 'database/conn.php';
        include 'include/header.php';
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="shortcut icon" href="./images/logo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">


</head>
<body>
    

    <div class="change-password-container">
        <form action="">
            <h2>Sign In</h2>
            <div class="box">
                <p class="text-muted">Email</p>
                <input type="email" id="email">
            </div>

            <div class="box">
                <p class="text-muted">Password</p>
                <input type="password" id="password">
            </div>


            <div class="button">
                <button type="submit" value="Save" class="btn">Log In</button>
            </div>
            <p class="text-muted" style="text-align: center; margin-top: 1rem; margin-bottom: 0.5rem;"><a href="reset.html" style="color: inherit; text-decoration: underline;">Forgot Password?</a></p>
            <p class="text-muted" style="text-align: center; margin-top: 0.5rem;">Don't have an account? <a href="signup.html" style="color: inherit; text-decoration: underline;">Sign Up</a></p>
        </form>    
    </div>

</body>

<script src="app.js"></script>

</html>
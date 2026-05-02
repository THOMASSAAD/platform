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
<body>
    <header>
        <div class="logo" title="University Management System">
            <h2>Hacker</h2>
        </div>
        <div class="navbar">
            <a href="index.html" >
                <span class="material-icons-sharp">home</span>
                <h3>Home</h3>
            </a>
            <a href="academy.html">
                <span class="material-icons-sharp">grid_view</span>
                <h3>Academy</h3>
            </a>
            <a href="Labs.html" class=""> 
                <span class="material-icons-sharp">science</span>
                <h3>Labs</h3>
            </a>
            <a href="signup.html">
                <span class="material-icons-sharp">person_add</span>
                <h3>Sign Up</h3>
            </a>
            <!-- <a href="#">
                <span class="material-icons-sharp" onclick="">logout</span>
                <h3>Logout</h3>
            </a> -->
        </div>
        <div id="profile-btn">
            <span class="material-icons-sharp">person</span>
        </div>
        <div class="theme-toggler">
            <span class="material-icons-sharp active">light_mode</span>
            <span class="material-icons-sharp">dark_mode</span>
        </div>
        
    </header>

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
            <p class="text-muted" style="text-align: center; margin-top: 1rem; margin-bottom: 0.5rem;"><a href="login.html" style="color: inherit; text-decoration: underline;">Back to Sign In</a></p>
        </form>    
    </div>

</body>

<script src="app.js"></script>

</html>

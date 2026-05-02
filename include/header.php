<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="shortcut icon" href="./images/logo.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo" title="University Management System">
            <h2>Hacker</h2>
        </div>
        <div class="navbar">
            <a href="index.php" >
                <span class="material-icons-sharp">home</span>
                <h3>Home</h3>
            </a>
            <a href="academy.php">
                <span class="material-icons-sharp">grid_view</span>
                <h3>Academy</h3>
            </a>
            <a href="Labs.php">
                <span class="material-icons-sharp">science</span>
                <h3>Labs</h3>
            </a>
            <a href="Rank.php">
                <span class="material-icons-sharp">leaderboard</span>
                <h3>Rank</h3>
            </a>
            <a href="#">
                <span class="material-icons-sharp" onclick="">logout</span>
                <h3>Logout</h3>
            </a>
            <a href="login.php">
                <span class="material-icons-sharp" onclick="">login</span>
                <h3>Sign In</h3>
        </a>
        </div>
        <div id="profile-btn">
            <span class="material-icons-sharp">person</span>
        </div>
        <div class="theme-toggler">
            <span class="material-icons-sharp active">light_mode</span>
            <span class="material-icons-sharp">dark_mode</span>
        </div>
        
    </header>
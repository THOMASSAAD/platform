<!DOCTYPE html>
<html lang="en">
<?php
        $title = "Sign In";
        include 'database/conn.php';
        include 'include/header.php';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $email = strtolower(trim($_POST['email']));
            $password = $_POST['password'];

            $user = $crud->getemail($email);

            if ($user && password_verify($password, $user['password'])) {

                $_SESSION['username'] = $user['username'];
                $_SESSION['role_id'] = $user['role_id'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['role'] = $user['role_id'] == 1 ? 'user' : 'admin';
                header("Location: index.php");
                exit();

            } else {
                echo '
                <div class="error-message">
                    Invalid email or password
                </div>
                ';
            }
        }

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="shortcut icon" href="./images/logo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
    <style>
        .error-message {
            background: #ffebee;
            color: #c62828;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ef9a9a;
            margin-top: 15px;
            font-family: Arial, sans-serif;
        }
    </style>


</head>
<body>
    

    <div class="change-password-container">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <h2>Sign In</h2>
            <div class="box">
                <p class="text-muted">Email</p>
                <input type="email" id="email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" required>
            </div>

            <div class="box">
                <p class="text-muted">Password</p>
                <input type="password" id="password" name="password" required>
            </div>


            <div class="button">
                <button type="submit" value="submit" class="btn">Log In</button>
            </div>
            <p class="text-muted" style="text-align: center; margin-top: 1rem; margin-bottom: 0.5rem;"><a href="reset.php" style="color: inherit; text-decoration: underline;">Forgot Password?</a></p>
            <p class="text-muted" style="text-align: center; margin-top: 0.5rem;">Don't have an account? <a href="signup.php" style="color: inherit; text-decoration: underline;">Sign Up</a></p>
        </form>    
    </div>

</body>

<script src="app.js"></script>

</html>
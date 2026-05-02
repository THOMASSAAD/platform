<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="shortcut icon" href="./images/logo.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <?php include 'include/header.php'; ?>
    <div class="container">
    <?php include 'include/aside.php'; ?>


        <main>
            <h1>Ranking Users</h1>
            <div class="recent-users">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Points</th>
                            <th>Solved Labs</th>
                            <th>Rank</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Abdulrahman Hussien Ahmed</td>
                            <td>1500</td>
                            <td>15</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Abdulrahman Hussien Ahmed</td>
                            <td>1500</td>
                            <td>15</td>
                            <td>1</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <script src="app.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Dashboard</title>
    <link rel="shortcut icon" href="./images/logo.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <header>
        <div class="logo" title="Admin Control Panel">
            <h2>Admin<span class="danger">Panel</span></h2>
        </div>
        <div class="navbar">
            <a href="index.html">
                <span class="material-icons-sharp">home</span>
                <h3>Home</h3>
            </a>
            <a href="academy.html">
                <span class="material-icons-sharp">grid_view</span>
                <h3>Academy</h3>
            </a>
            <a href="Labs.html">
                <span class="material-icons-sharp">science</span>
                <h3>Labs</h3>
            </a>
            <a href="admin.html" class="active">
                <span class="material-icons-sharp">admin_panel_settings</span>
                <h3>Admin</h3>
            </a>
            <a href="signup.html">
                <span class="material-icons-sharp">person_add</span>
                <h3>Sign Up</h3>
            </a>
            <a href="#">
                <span class="material-icons-sharp" onclick="">logout</span>
                <h3>Logout</h3>
            </a>
            <a href="login.html">
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
    
    <div class="container">
        <aside>
            <div class="profile">
                <div class="top">
                    <div class="profile-photo">
                        <img src="./images/profile-1.jpg" alt="Admin Profile">
                    </div>
                    <div class="info">
                        <p>Hey, <b>Administrator</b> </p>
                    </div>
                </div>
                <div class="about">
                    <h5>Role</h5>
                    <p class="danger">Super Admin</p>
                </div>
            </div>

            <!-- Admin Sidebar Navigation -->
            <div class="sidebar">
                <a href="#" class="active">
                    <span class="material-icons-sharp">dashboard</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">people</span>
                    <h3>Users</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">security</span>
                    <h3>Vulnerabilities</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">receipt_long</span>
                    <h3>Logs</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">settings</span>
                    <h3>Settings</h3>
                </a>
            </div>
        </aside>

        <main>
            <h1>Dashboard Overview</h1>
            <p class="text-muted" style="margin-bottom: 1rem;">Welcome to the vulnerable Admin Panel. Monitor and manage system resources below.</p>

            <div class="stats">
                <div class="primary">
                    <span class="material-icons-sharp">people</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Users</h3>
                            <h1>1,248</h1>
                        </div>
                    </div>
                </div>
                <div class="success">
                    <span class="material-icons-sharp">analytics</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Active Sessions</h3>
                            <h1>84</h1>
                        </div>
                    </div>
                </div>
                <div class="danger">
                    <span class="material-icons-sharp">warning</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Vulnerabilities</h3>
                            <h1>36</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="recent-users">
                <h2>Manage Users</h2>
                <table>
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#1001</td>
                            <td>Abdulrahman Hussien</td>
                            <td>unknown@gmail.com</td>
                            <td class="primary">Student</td>
                            <td>
                                <button class="action-btn edit-btn" title="Edit"><span class="material-icons-sharp">edit</span></button>
                                <button class="action-btn delete-btn" title="Delete"><span class="material-icons-sharp">delete</span></button>
                            </td>
                        </tr>
                        <tr>
                            <td>#1002</td>
                            <td>John Doe</td>
                            <td>john@example.com</td>
                            <td class="primary">Student</td>
                            <td>
                                <button class="action-btn edit-btn" title="Edit"><span class="material-icons-sharp">edit</span></button>
                                <button class="action-btn delete-btn" title="Delete"><span class="material-icons-sharp">delete</span></button>
                            </td>
                        </tr>
                        <tr>
                            <td>#1003</td>
                            <td>Jane Smith</td>
                            <td>jane@example.com</td>
                            <td class="warning">Instructor</td>
                            <td>
                                <button class="action-btn edit-btn" title="Edit"><span class="material-icons-sharp">edit</span></button>
                                <button class="action-btn delete-btn" title="Delete"><span class="material-icons-sharp">delete</span></button>
                            </td>
                        </tr>
                        <tr>
                            <td>#1004</td>
                            <td>Alice Wonderland</td>
                            <td>alice@example.com</td>
                            <td class="primary">Student</td>
                            <td>
                                <button class="action-btn edit-btn" title="Edit"><span class="material-icons-sharp">edit</span></button>
                                <button class="action-btn delete-btn" title="Delete"><span class="material-icons-sharp">delete</span></button>
                            </td>
                        </tr>
                        <tr>
                            <td>#1005</td>
                            <td>Admin User</td>
                            <td>admin@system.local</td>
                            <td class="danger">Admin</td>
                            <td>
                                <button class="action-btn edit-btn" title="Edit"><span class="material-icons-sharp">edit</span></button>
                                <button class="action-btn delete-btn" title="Delete"><span class="material-icons-sharp">delete</span></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <script src="app.js"></script>
</body>
</html>

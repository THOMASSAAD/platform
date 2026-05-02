<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Dashboard</title>
    <link rel="shortcut icon" href="./images/logo.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="admin.css">
        <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
        <div class="logo" title="Admin Control Panel">
            <h2>Admin<span class="danger">Panel</span></h2>
        </div>
        <div class="navbar">
            <a href="index.php">
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
            <a href="admin.php" class="active">
                <span class="material-icons-sharp">admin_panel_settings</span>
                <h3>Admin</h3>
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
                <a href="#" class="active" data-target="dashboard-section">
                    <span class="material-icons-sharp">dashboard</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="#" data-target="academy-section">
                    <span class="material-icons-sharp">science</span>
                    <h3>Academy</h3>
                </a>
                <a href="#" data-target="vulnerabilities-section">
                    <span class="material-icons-sharp">security</span>
                    <h3>Vulnerabilities</h3>
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

            <div class="recent-users tab-content" id="dashboard-section">
                <div class="add-user-form">
        <h3>Add New User</h3>
        <form id="newUserForm">
            <div class="form-group">
                <input type="text" id="userName" placeholder="Full Name" required>
                <input type="email" id="userEmail" placeholder="Email Address" required>
                <select id="userRole">
                    <option value="Student">User</option>
                    <option value="Admin">Admin</option>
                </select>
                <button type="submit" class="btn-primary">
                    <span class="material-icons-sharp">add</span>
                    Add User
                </button>
            </div>
        </form>
    </div>
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
                        
                    </tbody>
                </table>
            </div>

            <div class="recent-users tab-content" id="academy-section">
            <div class="add-user-form">
        <h3>Add New Bug</h3>
        <form id="newUserForm">
            <div class="form-group">
                <input type="text" id="bugName" placeholder="bug Name" required>
                <input type="text" id="textBug" placeholder="textBug" required>
                <select id="catogreyBug">
                    <option value="Injection">Injection</option>
                    <option value="Server-Side">Server-Side</option>
                    <option value="Client-Side">Client-Side</option>
                    <option value="Authentication">Authentication</option>
                    <option value="Access Control">Access Control</option>
                </select>
                <button type="submit" class="btn-primary">
                    <span class="material-icons-sharp">add</span>
                    Add User
                </button>
            </div>
        </form>
    </div>
                <h2>Manage acadmey</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Bug ID</th>
                            <th>Name</th>
                            <th>catogrey</th>
                            <th>text</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#1001</td>
                            <td>hamza</td>
                            <td>unknown@gmail.com</td>
                            <td>text</td>
                            <td>
                                <button class="action-btn edit-btn" title="Edit"><span class="material-icons-sharp">edit</span></button>
                                <button class="action-btn delete-btn" title="Delete"><span class="material-icons-sharp">delete</span></button>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>

            <div class="recent-users tab-content" id="vulnerabilities-section">
            <div class="add-user-form">
        <h3>Add New Vlun</h3>
        <form id="newUserForm">
            <div class="form-group">
                <input type="text" id="flagname" placeholder="Full Name" required>
                <input type="text" id="Flag" placeholder="Flag" required>
                <input type="text" id="hint" placeholder="hint" required>
                <select id="userRole">
                    <option value="Student">Easy</option>
                    <option value="Admin">Meduim</option>
                    <option value="Admin">Hard</option>
                </select>
                <button type="submit" class="btn-primary">
                    <span class="material-icons-sharp">add</span>
                    Add vlun
                </button>
            </div>
        </form>
    </div>
                <h2>Manage vulnerabilities</h2>
                <table>
                    <thead>
                        <tr>
                            <th>flag ID</th>
                            <th>Name</th>
                            <th>hint</th>
                            <th>Difficulty level</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#1001</td>
                            <td>Abdo</td>
                            <td>unknown@gmail.com</td>
                            <td class="primary">Student</td>
                            <td>
                                <button class="action-btn edit-btn" title="Edit"><span class="material-icons-sharp">edit</span></button>
                                <button class="action-btn delete-btn" title="Delete"><span class="material-icons-sharp">delete</span></button>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>




<div id="editModal" class="modal-overlay " >
    <div class="modal-content">
        <span class="close-modal material-icons-sharp">close</span>
        <h2 id="modalTitle">Edit Information</h2>
        <hr>
        <div id="modalFormContainer">
            
            <!-- 1. قسم المستخدمين (Dashboard) -->
            <div id="form-dashboard" class="modal-form-section" style="display: none;">
                <div class="input-group">
                    <label>User ID</label>
                    <input type="text" id="updateIdUser" readonly class="readonly-input">
                </div>
                <div class="input-group">
                    <label>Name</label>
                    <input type="text" id="updateName">
                </div>
                <div class="input-group">
                    <label>Email</label>
                    <input type="email" id="updateEmail">
                </div>
                <div class="input-group">
                    <label>Role</label>
                    <select id="updateRole">
                        <option value="Student">User</option>
                        <option value="Admin">Admin</option>
                    </select>
                </div>
            </div>

            <!-- 2. قسم الأكاديمية (Academy/Bugs) -->
            <div id="form-academy" class="modal-form-section" style="display: none;">
                <div class="input-group">
                    <label>Bug ID</label>
                    <input type="text" id="updateIdBug" readonly class="readonly-input">
                </div>
                <div class="input-group">
                    <label>Bug Name</label>
                    <input type="text" id="updateBugName">
                </div>
                <div class="input-group">
                    <label>Category</label>
                    <input type="text" id="updateCategory">
                </div>
                <div class="input-group">
                    <label>Details</label>
                    <input type="text" id="updateBugText">
                </div>
            </div>

            <!-- 3. قسم الثغرات (Vulnerabilities) -->
            <div id="form-vulnerabilities" class="modal-form-section" style="display: none;">
                <div class="input-group">
                    <label>Vlun ID</label>
                    <input type="text" id="updateIdVlun" readonly class="readonly-input">
                </div>
                <div class="input-group">
                    <label>Vulnerability Name</label>
                    <input type="text" id="updateVlunName">
                </div>
                <div class="input-group">
                    <label>Flag</label>
                    <input type="text" id="updateFlag">
                </div>
                <div class="input-group">
                    <label>Role Required</label>
                    <input type="text" id="updateRoleVlun">
                </div>
            </div>

            <button class="btn-primary-full" onclick="closeModal()">Update Changes</button>
        </div>
    </div>
</div>
        </main>
    </div>

    <script src="app.js"></script>
</body>
</html>

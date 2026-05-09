<?php
include_once 'database/conn.php';
$adminMessage = '';
$adminError = '';
$editVulnerability = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['vulnerability_action'] ?? '';

    if ($action === 'add') {
        $title = trim($_POST['title'] ?? '');
        $category = trim($_POST['category'] ?? '');
        $content = trim($_POST['content'] ?? '');

        if ($title === '' || $category === '' || $content === '') {
            $adminError = 'All vulnerability fields are required.';
        } else {
            $inserted = $crud->insertVulnerability($title, $category, $content);
            if ($inserted === true) {
                header('Location: admin.php?success=added#vulnerabilities-section');
                exit();
            }
            $adminError = 'Unable to add vulnerability.';
        }
    }

    if ($action === 'update') {
        $vulnerability_id = $_POST['vulnerability_id'] ?? '';
        $title = trim($_POST['title'] ?? '');
        $category = trim($_POST['category'] ?? '');
        $content = trim($_POST['content'] ?? '');

        if ($vulnerability_id === '' || $title === '' || $category === '' || $content === '') {
            $adminError = 'All edit fields are required.';
        } else {
            $updated = $crud->updateVulnerability($vulnerability_id, $title, $category, $content);
            if ($updated === true) {
                header('Location: admin.php?success=updated#vulnerabilities-section');
                exit();
            }
            $adminError = 'Unable to update vulnerability.';
        }
    }
}

if (isset($_GET['delete_vulnerability_id'])) {
    $deleteId = intval($_GET['delete_vulnerability_id']);
    $deleted = $crud->deleteVulnerability($deleteId);
    if ($deleted === true) {
        header('Location: admin.php?success=deleted#vulnerabilities-section');
        exit();
    }
    $adminError = 'Unable to delete vulnerability.';
}

if (isset($_GET['edit_vulnerability_id'])) {
    $editId = intval($_GET['edit_vulnerability_id']);
    $editVulnerability = $crud->getVulnerabilityById($editId);
    if (!$editVulnerability) {
        $adminError = 'Vulnerability not found.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<?php
$title = "Admin Dashboard"; 
include 'include/header.php';
echo '<div class="container">';
include 'include/aside.php';
?>

<!-- <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="shortcut icon" href="./images/logo.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="style.css">

</head> -->

<!-- <body> -->
    <!-- <header>
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
    </header> -->

    <!-- <div class="container"> -->
        <!-- <aside>
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
            <!-- <div class="sidebar">
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
        </aside> --> 
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
        <main>
            <h1>Dashboard Overview</h1>
            <p class="text-muted" style="margin-bottom: 1rem;">Welcome to the vulnerable Admin Panel. Monitor and manage system resources below.</p>

            <div class="stats">
                <div class="primary">
                    <span class="material-icons-sharp">people</span>
                    <div class="middle">
                        <div class="left">
                            <?php
                            $totalUsers = $crud->gettotalusers();
                            ?>
                            <h3>Total Users</h3>
                            <h1><?php echo $totalUsers; ?></h1>
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
                            <?php
                            $totalVulners = $crud->gettotalvulners();
                            ?>
                            <h3>Vulnerabilities</h3>
                            <h1><?php echo $totalVulners; ?></h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="recent-users tab-content" id="dashboard-section">
                <div class="add-user-form">
                    <h3>Add New User</h3>
                    <form method="POST" action="add_user.php">
                        <div class="form-group">
                            <input type="text" name="username" id="username" placeholder="Username" required>
                            <input type="email" name="email" id="email" placeholder="Email Address" required>
                            <input type="text" name="full_name" id="name" placeholder="Full Name" required>

                            <select name="role_id" id="userRole" required>
                                <option value="">-- Select Role --</option>
                                <?php
                                $roles = $crud->getAllRoles();
                                foreach ($roles as $role) {
                                    $roleId = htmlspecialchars($role['role_id']);
                                    $roleName = htmlspecialchars($role['role_name']);
                                    echo "<option value=\"{$roleId}\">{$roleName}</option>";
                                }
                                ?>
                            </select>

                            <button type="submit" class="btn-primary">
                                <span class="material-icons-sharp">add</span>
                                Add User
                            </button>
                        </div>
                    </form>
                    <h2>Manage Users</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Role</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <?php
                        // Fetch all users using your pre‑implemented function
                        $users = $crud->getAllUsers();

                        if ($users !== false && !empty($users)) {
                            foreach ($users as $user) {
                                // Escape output to prevent XSS
                                $userId   = htmlspecialchars($user['user_id'] ?? '');
                                $fullName = htmlspecialchars($user['name'] ?? '');
                                $email    = htmlspecialchars($user['email'] ?? '');
                                $username  = htmlspecialchars($user['username'] ?? '');
                                $roleId   = $user['role_id'] ?? 0;
                                $roleName = match ($roleId) {
                                    1 => 'user',
                                    2 => 'admin',
                                    default => 'Unknown'
                                };

                                echo '<tr>';
                                echo "<td>$userId</td>";
                                echo "<td>$fullName</td>";
                                echo "<td>$email</td>";
                                echo "<td>$username</td>";
                                echo "<td class=\"primary\">$roleName</td>";
                                echo ' <td><a href="edituser.php?user_id=' . $userId .'" class="action-btn edit-btn" title="Edit"><span class="material-icons-sharp">edit</span></a>';
                                echo '<a href="deleteuser.php?user_id=' . $userId .'" class="action-btn delete-btn" title="Delete"><span class="material-icons-sharp">delete</span></a>';
                                echo '</tr>';
                            }
                        } else {
                            // Show a message if no users exist or an error occurred
                            echo '<tr><td colspan="5">No users found or database error.</td></tr>';
                        }
                        ?>


                    </table>
                </div>
            </div>

            <div class="recent-users tab-content" id="academy-section">
                <div class="add-user-form">
                    <h3>Add New Bug</h3>
                    <form id="newvulnForm">
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
                <?php
                if (!empty($adminError)) {
                    echo '<div class="alert alert-danger">' . htmlspecialchars($adminError) . '</div>';
                }

                if (!empty($adminMessage) || isset($_GET['success'])) {
                    $successText = $adminMessage;
                    if ($successText === '') {
                        $status = $_GET['success'] ?? '';
                        $successText = match ($status) {
                            'added' => 'Vulnerability added successfully.',
                            'updated' => 'Vulnerability updated successfully.',
                            'deleted' => 'Vulnerability deleted successfully.',
                            default => 'Action completed successfully.',
                        };
                    }
                    echo '<div class="alert alert-success">' . htmlspecialchars($successText) . '</div>';
                }
                ?>
                <div class="add-user-form">
                    <h3><?php echo $editVulnerability ? 'Edit Vulnerability' : 'Add New Vulnerability'; ?></h3>
                    <form method="POST" action="admin.php#vulnerabilities-section">
                        <input type="hidden" name="vulnerability_action" value="<?php echo $editVulnerability ? 'update' : 'add'; ?>">
                        <?php if ($editVulnerability): ?>
                            <input type="hidden" name="vulnerability_id" value="<?php echo htmlspecialchars($editVulnerability['vulnerability_id']); ?>">
                        <?php endif; ?>
                        <div class="form-group">
                            <input type="text" name="title" placeholder="Title" value="<?php echo $editVulnerability ? htmlspecialchars($editVulnerability['title']) : ''; ?>" required>
                            <select name="category" required>
                                <option value="">-- Select Category --</option>
                                <option value="Injection" <?php echo ($editVulnerability['category'] ?? '') === 'Injection' ? 'selected' : ''; ?>>Injection</option>
                                <option value="Server-Side" <?php echo ($editVulnerability['category'] ?? '') === 'Server-Side' ? 'selected' : ''; ?>>Server-Side</option>
                                <option value="Client-Side" <?php echo ($editVulnerability['category'] ?? '') === 'Client-Side' ? 'selected' : ''; ?>>Client-Side</option>
                                <option value="Authentication" <?php echo ($editVulnerability['category'] ?? '') === 'Authentication' ? 'selected' : ''; ?>>Authentication</option>
                                <option value="Access Control" <?php echo ($editVulnerability['category'] ?? '') === 'Access Control' ? 'selected' : ''; ?>>Access Control</option>
                            </select>
                            <textarea name="content" placeholder="Content" required><?php echo $editVulnerability ? htmlspecialchars($editVulnerability['content']) : ''; ?></textarea>
                            <button type="submit" class="btn-primary">
                                Add vulnerability
                            </button>
                        </div>
                    </form>
                </div>
                <h2>Manage Vulnerabilities</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Vulnerability ID</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Content Preview</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $vulnerabilities = $crud->getAllVulnerabilities();
                        if ($vulnerabilities !== false && !empty($vulnerabilities)) {
                            foreach ($vulnerabilities as $vuln) {
                                $id = htmlspecialchars($vuln['vulnerability_id']);
                                $title = htmlspecialchars($vuln['title']);
                                $category = htmlspecialchars($vuln['category']);
                                $content = htmlspecialchars(substr($vuln['content'], 0, 50)) . (strlen($vuln['content']) > 50 ? '...' : '');
                                echo '<tr>';
                                echo "<td>$id</td>";
                                echo "<td>$title</td>";
                                echo "<td>$category</td>";
                                echo "<td>$content</td>";
                                echo ' <td>  <button class="action-btn edit-btn" title="Edit"><span class="material-icons-sharp">edit</span></button>
                                <a href="admin.php?delete_vulnerability_id=' . $id . '#vulnerabilities-section" class="action-btn delete-btn" title="Delete"><span class="material-icons-sharp">delete</span></a>';
                                echo '</tr>';
                            }
                        } else {
                            echo '<tr><td colspan="5">No vulnerabilities found or database error.</td></tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>




            <div id="editModal" class="modal-overlay ">
                <div class="modal-content">
                    <span class="close-modal material-icons-sharp">close</span>
                    <h2 id="modalTitle">Edit Information</h2>
                    <hr>
                    <div id="modalFormContainer">

                        <div id="form-dashboard" class="modal-form-section" style="display: none;">
                            <form action="succedit.php" method="POST">
                                <h2>Edit User</h2>

                                <div class="input-group">
                                    <label>User ID</label>
                                    <input type="text" name="user_id" id="updateIdUser" readonly class="readonly-input">
                                </div>

                                <div class="input-group">
                                    <label>Name</label>
                                    <input type="text" name="Name" id="updateName" required>
                                </div>

                                <div class="input-group">
                                    <label>Email</label>
                                    <input type="email" name="email" id="updateEmail" readonly required>
                                </div>

                                <div class="input-group">
                                    <label>Username</label>
                                    <input type="text" name="Username" id="updateusername" required>
                                </div>

                                <div class="input-group">
                                    <label>Role</label>
                                    <select name="role_value"  id="updateRole">
                                        <option value="1">User</option>
                                        <option value="2">Admin</option>
                                    </select>
                                    
                                </div>

                                <button type="submit" name="submit" class="btn-primary-full" >Update Changes</button>
                            </form>
                        </div>

                        <div id="form-academy" class="modal-form-section" style="display: none;">
                            <div class="input-group">
                                <label>text ID</label>
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

<div id="form-vulnerabilities" class="modal-form-section" style="display: none;">
    <!-- بداية الفورم -->
    <form action="admin.php#vulnerabilities-section" method="POST">
        <!-- هيدن أكشن عشان السيرفر يعرف إننا بنعدل ثغرة -->
        <input type="hidden" name="vulnerability_action" value="update">

        <div class="input-group">
            <label>Vlun ID</label>
            <!-- لازم ندي اسم (name) للحقل عشان يتبعت للـ PHP -->
            <input type="text" name="vulnerability_id" id="updateIdVlun" readonly class="readonly-input">
        </div>

        <div class="input-group">
            <label>Title</label>
            <input type="text" name="title" id="updateVlunName" required>
        </div>

        <div class="input-group">
            <label>Category</label>
            <select name="category" id="updateCategoryVlun" required>
                <option value="">-- Select Category --</option>
                <option value="Injection">Injection</option>
                <option value="Server-Side">Server-Side</option>
                <option value="Client-Side">Client-Side</option>
                <option value="Authentication">Authentication</option>
                <option value="Access Control">Access Control</option>
            </select>
        </div>

        <div class="input-group">
            <label>Content Preview</label>
            <textarea name="content" id="updateContentVlun" rows="4" required></textarea>
        </div>

        <!-- زرار الحفظ داخل الفورم -->
        <div class="input-group">
            <button type="submit" name="save_vulnerability" class="btn-primary-full">
                Save Changes
            </button>
        </div>
    </form>
</div>


                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="app.js"></script>
</body>

</html>
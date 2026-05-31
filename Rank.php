<?php
// Start session and check login
include 'include/session.php';
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$title = "Rank";
include 'include/header.php';
include 'database/conn.php'; // provides $crud object

// Get ranking data using the method
$all_users = $crud->getRanking();
if ($all_users === false) {
    $all_users = [];
}

// Filter out users who have not solved any flags (Foundedflags == 0)
$users = array_filter($all_users, function($user) {
    return $user['Foundedflags'] > 0;
});
// Re-index array to maintain order
$users = array_values($users);
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <div class="container">
        <?php include 'include/aside.php'; ?>
        <!-- Modal (unchanged, keep as is) -->
        <div id="editModal" class="modal-overlay">
            <div class="modal-content">
                <span class="close-modal material-icons-sharp">close</span>
                <h2 id="modalTitle">Edit Information</h2>
                <hr class="modal-divider" />
                <div id="modalFormContainer">
                    <div id="form-profile" class="modal-form-section">
                        <div class="profile-upload-container">
                            <div class="image-wrapper">
                                <img id="modalPreviewImg" src="./images/profile-1.jpg" alt="Profile Preview" />
                                <label for="file-input" class="upload-badge">
                                    <span class="material-icons-sharp">photo_camera</span>
                                </label>
                            </div>
                            <input id="file-input" type="file" accept="image/*" class="file-input-hidden" />
                            <span class="change-photo-text">Change Photo</span>
                        </div>
                        <div class="input-group">
                            <label for="inputProfileName">Full Name</label>
                            <input type="text" id="inputProfileName" placeholder="Enter your name" />
                        </div>
                        <button type="button" id="saveProfileBtn" class="btn-primary-full">
                            Save Changes
                        </button>
                    </div>
                </div>
            </div>
        </div>
        </aside>

        <main>
            <h1>Ranking Users</h1>
            <div class="recent-users">
                <table>
                    <thead>
                        <tr>
                            <th>Rank</th>
                            <th>Name</th>
                            <th>Solved Flags</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($users)): ?>
                            <tr>
                                <td colspan="3">No users have solved any flags yet.</td>
                            </tr>
                        <?php else: ?>
                            <?php 
                            $current_rank = 1;
                            $prev_flags = -1;
                            $display_rank = 1;
                            foreach ($users as $user):
                                // Handle ties: same number of flags get same rank
                                if ($user['Foundedflags'] != $prev_flags) {
                                    $display_rank = $current_rank;
                                }
                                $prev_flags = $user['Foundedflags'];
                            ?>
                                <tr>
                                    <td><?php echo $display_rank; ?></td>
                                    <td><?php echo htmlspecialchars($user['name']); ?></td>
                                    <td><?php echo (int)$user['Foundedflags']; ?></td>
                                </tr>
                            <?php 
                                $current_rank++;
                            endforeach; 
                            ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <script src="app.js"></script>
</body>
</html>
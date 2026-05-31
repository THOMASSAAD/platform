<!DOCTYPE html>
<?php 
    // Start session and check login
    include 'include/session.php';
    if (!isset($_SESSION['user_id'])) {
        header('Location: login.php');
        exit;
    }

    $title = "Student Dashboard";
    include 'database/conn.php';
    $user_id = $_SESSION['user_id'];

    // Get total counts per level
    $easy_total   = count($crud->getFlagsByLevel(1));
    $medium_total = count($crud->getFlagsByLevel(2));
    $hard_total   = count($crud->getFlagsByLevel(3));

    // Get user's found counts per level
    $easy_found   = count($crud->getUserFlagsByLevel($user_id, 1));
    $medium_found = count($crud->getUserFlagsByLevel($user_id, 2));
    $hard_found   = count($crud->getUserFlagsByLevel($user_id, 3));

    // Calculate percentages (avoid division by zero)
    $easy_percent   = ($easy_total > 0) ? round(($easy_found / $easy_total) * 100) : 0;
    $medium_percent = ($medium_total > 0) ? round(($medium_found / $medium_total) * 100) : 0;
    $hard_percent   = ($hard_total > 0) ? round(($hard_found / $hard_total) * 100) : 0;
?>
<?php include 'include/header.php'; ?>
    <div class="container">
        <?php include 'include/aside.php'; ?>
        <!-- Modal -->
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
            <h1>Progress</h1>
            <div class="subjects">
                <!-- Easy Level -->
                <div class="eg w-50">
                    <h3>Easy</h3>
                    <h2><?php echo $easy_found; ?>/<?php echo $easy_total; ?></h2>
                    <div class="progress">
                        <svg><circle cx="38" cy="38" r="36"></circle></svg>
                        <div class="number"><p><?php echo $easy_percent; ?>%</p></div>
                    </div>
                </div>

                <!-- Medium Level -->
                <div class="eg w-50">
                    <h3>Medium</h3>
                    <h2><?php echo $medium_found; ?>/<?php echo $medium_total; ?></h2>
                    <div class="progress">
                        <svg><circle cx="38" cy="38" r="36"></circle></svg>
                        <div class="number"><p><?php echo $medium_percent; ?>%</p></div>
                    </div>
                </div>

                <!-- Hard Level -->
                <div class="eg w-100">
                    <h3>Hard</h3>
                    <h2><?php echo $hard_found; ?>/<?php echo $hard_total; ?></h2>
                    <div class="progress">
                        <svg><circle cx="38" cy="38" r="36"></circle></svg>
                        <div class="number"><p><?php echo $hard_percent; ?>%</p></div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="app.js"></script>
</body>
</html>
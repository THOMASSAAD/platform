<?php
// Start session first, before any output
include 'include/session.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$title = "Labs";
include 'database/conn.php';
include 'include/header.php';

$user_id = $_SESSION['user_id'];

// Get all flags organized by level
$easy_flags = $crud->getFlagsByLevel(1);
$medium_flags = $crud->getFlagsByLevel(2);
$hard_flags = $crud->getFlagsByLevel(3);

// Get user's found flags
$user_flags = $crud->getUserFlags($user_id);
$user_flag_ids = array_column($user_flags, 'flag_id');

// Organize user found flags by level
$user_easy_flags = $crud->getUserFlagsByLevel($user_id, 1);
$user_medium_flags = $crud->getUserFlagsByLevel($user_id, 2);
$user_hard_flags = $crud->getUserFlagsByLevel($user_id, 3);

?>

<!DOCTYPE html>
<html lang="en">

<body>

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
      <div class="sections">
        <!-- Easy Level Flags -->
        <article class="section">
          <div class="section__title">
            <h2 class="section__title__text">Easy (<?php echo count($easy_flags); ?> Flags)</h2>
            <span><i class="fa-solid fa-arrow-down" style="color: #7380ce; font-size: large"></i></span>
          </div>

          <div class="section__text">
            <div class="link-web" style="padding: 15px; font-family: sans-serif; display: inline-block;">
              <span style="color: #555; font-size: 16px; font-weight: bold;">go to website </span>
              <a href="../easy-Level/" style="color: #007bff; font-weight: bold; text-decoration: none; font-size: 16px;">web-easy</a>
            </div>

            <!-- Input Section for Easy Level -->
            <div class="inputsolution" style="padding: 15px; background-color: #f9f9f9; border-radius: 5px; margin-bottom: 20px;">
              <form class="flag-form" data-level="1">
                <div class="label">
                  <label style="font-size: 16px; font-weight: bold;">What is the flag?</label>
                </div>
                <div class="buttons" style="display: flex; gap: 10px; margin-top: 10px;">
                  <input type="text" placeholder="Enter flag..." style="flex: 1; padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;" />
                  <button type="button" class="submit" style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; font-weight: bold;">Submit</button>
                  <button type="button" class="hint" style="padding: 10px 20px; background-color: #ffc107; color: black; border: none; border-radius: 4px; cursor: pointer; font-weight: bold;">💡 Hint</button>
                </div>
              </form>
            </div>

            <!-- Users who found flags in Easy level -->
            <h4 style="margin-top: 20px; color: #333;">Found Flags:</h4>
            <table style="width: 100%; border-collapse: collapse; border: 1px solid #dee2e6; font-family: sans-serif; font-size: 14px;">
              <thead>
                <tr style="background-color: #f8f9fa;">
                  
                  
                  <th style="padding: 12px; border: 1px solid #dee2e6; text-align: left;">Flag Value</th>
                  <th style="padding: 12px; border: 1px solid #dee2e6; text-align: left;">Found at</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $displayed = false;
                foreach ($user_easy_flags as $flag):
                  $displayed = true;
                ?>
                    <tr> 
                      <td style="padding: 12px; border: 1px solid #dee2e6;"><?php echo htmlspecialchars($flag['flag_value']); ?></td>
                      <td style="padding: 12px; border: 1px solid #dee2e6;"><?php echo date('Y-m-d H:i', strtotime($flag['found_at'])); ?></td>
                    </tr>
                <?php 
                endforeach;
                if (!$displayed):
                ?>
                  <tr>
                    <td colspan="4" style="padding: 12px; border: 1px solid #dee2e6; text-align: center; color: #999;">No flags found yet</td>
                  </tr>
                <?php endif; ?>
              </tbody>
            </table>
          </div>
        </article>

        <!-- Medium Level Flags -->
        <article class="section">
          <div class="section__title">
            <h2 class="section__title__text">Medium (<?php echo count($medium_flags); ?> Flags)</h2>
            <span><i class="fa-solid fa-arrow-down" style="color: #7380ce; font-size: large"></i></span>
          </div>

          <div class="section__text">
            <div class="link-web" style="padding: 15px; font-family: sans-serif; display: inline-block;">
              <span style="color: #555; font-size: 16px; font-weight: bold;">go to website </span>
              <a href="../Egypt_Arch-master/" style="color: #007bff; font-weight: bold; text-decoration: none; font-size: 16px;">web-medium</a>
            </div>

            <!-- Input Section for Medium Level -->
            <div class="inputsolution" style="padding: 15px; background-color: #f9f9f9; border-radius: 5px; margin-bottom: 20px;">
              <form class="flag-form" data-level="2">
                <div class="label">
                  <label style="font-size: 16px; font-weight: bold;">What is the flag?</label>
                </div>
                <div class="buttons" style="display: flex; gap: 10px; margin-top: 10px;">
                  <input type="text" placeholder="Enter flag..." style="flex: 1; padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;" />
                  <button type="button" class="submit" style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; font-weight: bold;">Submit</button>
                  <button type="button" class="hint" style="padding: 10px 20px; background-color: #ffc107; color: black; border: none; border-radius: 4px; cursor: pointer; font-weight: bold;">💡 Hint</button>
                </div>
              </form>
            </div>
            <!-- Users who found flags in Medium level -->
            <h4 style="margin-top: 20px; color: #333;">Found Flags:</h4>
            <table style="width: 100%; border-collapse: collapse; border: 1px solid #dee2e6; font-family: sans-serif; font-size: 14px;">
              <thead>
                <tr style="background-color: #f8f9fa;">
                
                  <th style="padding: 12px; border: 1px solid #dee2e6; text-align: left;">Flag Value</th>
                  <th style="padding: 12px; border: 1px solid #dee2e6; text-align: left;">Found at</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $displayed = false;
                foreach ($user_medium_flags as $flag):
                  $displayed = true;
                ?>
                    <tr>
                      <td style="padding: 12px; border: 1px solid #dee2e6;"><?php echo htmlspecialchars($flag['flag_value']); ?></td>
                      <td style="padding: 12px; border: 1px solid #dee2e6;"><?php echo date('Y-m-d H:i', strtotime($flag['found_at'])); ?></td>
                    </tr>
                <?php 
                endforeach;
                if (!$displayed):
                ?>
                  <tr>
                    <td colspan="4" style="padding: 12px; border: 1px solid #dee2e6; text-align: center; color: #999;">No flags found yet</td>
                  </tr>
                <?php endif; ?>
              </tbody>
            </table>
          </div>
        </article>

        <!-- Hard Level Flags -->
        <article class="section">
          <div class="section__title">
            <h2 class="section__title__text">Hard (<?php echo count($hard_flags); ?> Flags)</h2>
            <span><i class="fa-solid fa-arrow-down" style="color: #7380ce; font-size: large"></i></span>
          </div>

          <div class="section__text">
            <div class="link-web" style="padding: 15px; font-family: sans-serif; display: inline-block;">
              <span style="color: #555; font-size: 16px; font-weight: bold;">go to website </span>
              <a href="../hard-level/" style="color: #007bff; font-weight: bold; text-decoration: none; font-size: 16px;">web-hard</a>
            </div>

            <!-- Input Section for Hard Level -->
            <div class="inputsolution" style="padding: 15px; background-color: #f9f9f9; border-radius: 5px; margin-bottom: 20px;">
              <form class="flag-form" data-level="3">
                <div class="label">
                  <label style="font-size: 16px; font-weight: bold;">What is the flag?</label>
                </div>
                <div class="buttons" style="display: flex; gap: 10px; margin-top: 10px;">
                  <input type="text" placeholder="Enter flag..." style="flex: 1; padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;" />
                  <button type="button" class="submit" style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; font-weight: bold;">Submit</button>
                  <button type="button" class="hint" style="padding: 10px 20px; background-color: #ffc107; color: black; border: none; border-radius: 4px; cursor: pointer; font-weight: bold;">💡 Hint</button>
                </div>
              </form>
            </div>

            <!-- Users who found flags in Hard level -->
            <h4 style="margin-top: 20px; color: #333;">Found Flags:</h4>
            <table style="width: 100%; border-collapse: collapse; border: 1px solid #dee2e6; font-family: sans-serif; font-size: 14px;">
              <thead>
                <tr style="background-color: #f8f9fa;">
                 
                  <th style="padding: 12px; border: 1px solid #dee2e6; text-align: left;">Flag Value</th>
                  <th style="padding: 12px; border: 1px solid #dee2e6; text-align: left;">Found at</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $displayed = false;
                foreach ($user_hard_flags as $flag):
                  $displayed = true;
                ?>
                    <tr>
                      
                      <td style="padding: 12px; border: 1px solid #dee2e6;"><?php echo htmlspecialchars($flag['flag_value']); ?></td>
                      <td style="padding: 12px; border: 1px solid #dee2e6;"><?php echo date('Y-m-d H:i', strtotime($flag['found_at'])); ?></td>
                    </tr>
                <?php 
                endforeach;
                if (!$displayed):
                ?>
                  <tr>
                    <td colspan="4" style="padding: 12px; border: 1px solid #dee2e6; text-align: center; color: #999;">No flags found yet</td>
                  </tr>
                <?php endif; ?>
              </tbody>
            </table>
          </div>
        </article>

      </div>
    </main>
  </div>

  <script src="app.js"></script>
  <script src="section-toggle.js"></script>
  <script src="flag_handler.js"></script>
</body>

</html>
<!DOCTYPE html>
<?php 
    $title = "Student Dashboard";
    include 'database/conn.php';

    
?>
<?php include 'include/header.php'; ?>
    <div class="container">
<?php  include 'include/aside.php'; ?>
<!-- Modal -->
  <div id="editModal" class="modal-overlay"  >
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
                
                
                <div class="eg w-50">
                    <h3>Easy</h3>
                    <h2>12/14</h2>
                    <div class="progress">
                        <svg><circle cx="38" cy="38" r="36"></circle></svg>
                        <div class="number"><p>86%</p></div>
                    </div>
                </div>

                <div class="eg w-50">
                    <h3>Meduim</h3>
                    <h2>12/14</h2>
                    <div class="progress">
                        <svg><circle cx="38" cy="38" r="36"></circle></svg>
                        <div class="number"><p>86%</p></div>
                    </div>
                </div>
                
                

                <div class="eg w-100">
                    <h3>Hard</h3>
                    <h2>12/14</h2>
                    <div class="progress">
                        <svg><circle cx="38" cy="38" r="36"></circle></svg>
                        <div class="number"><p>86%</p></div>
                    </div>
                </div>
                
                
                </div>
        </main>
    </div>

    <script src="app.js"></script>
</body>
</html>
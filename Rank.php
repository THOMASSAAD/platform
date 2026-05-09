<!DOCTYPE html>
<html lang="en">

<body>
    <?php 
     $title = "Rank";
    include 'include/header.php';
       
    
    ?>
    <div class="container">
    <?php include 'include/aside.php'; ?>
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
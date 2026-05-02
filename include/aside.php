     <aside>
        <div class="profile">
          <div class="top">
            <div class="profile-photo">
              <img src="./images/profile-1.jpg" alt="" />
            </div>
            <div class="info">
              <p>Hey, <b>Abdulrahman Hussien Ahmed </b></p>
            </div>
          </div>
          <div class="about">
            <h5>Email</h5>
            <p>unknown@gmail.com</p>
          </div>

          <button id="openProfileModal" class="btn-primary-full">
            <span class="material-icons-sharp">manage_accounts</span>
            Edit Profile
          </button>
        </div>

        <div id="editModal" class="modal-overlay">
    <div class="modal-content">
        <span class="close-modal material-icons-sharp">close</span>
        <h2 id="modalTitle">Edit Information</h2>
        <hr class="modal-divider" />
        
        <div id="modalFormContainer">
            <div id="form-profile" class="modal-form-section">
                
                <div class="profile-upload-container">
                    <div class="image-wrapper">
                        <img src="./images/profile-1.jpg" id="modalPreviewImg" alt="Profile Preview" />
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
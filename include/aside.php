<aside>
  <div class="profile">
    <?php 
      $profileName = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
      $profileEmail = isset($_SESSION['email']) ? $_SESSION['email'] : 'unknown@gmail.com';
    ?>
    <div class="top">
      <div class="profile-photo">
        <img id="profileImage" src="./images/profile-1.jpg" alt="Profile picture" />
      </div>
      <div class="info">
        <p>Hey, <b id="profileName"><?php echo $profileName; ?></b></p>
      </div>
    </div>
    <div class="about">
      <h5>Email</h5>
      <p id="profileEmail"><?php echo $profileEmail; ?></p>
    </div>
    <button id="openProfileModal" class="btn-primary-full">
      <span class="material-icons-sharp">manage_accounts</span>
      Edit Profile
    </button>
  </div>
  
    <div class="sidebar">
        <!-- <a href="#" class="active" data-target="dashboard-section">
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
         </a> -->
        

</div>

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

<script>
  (function() {
    // DOM elements
    const modal = document.getElementById('editModal');
    const openBtn = document.getElementById('openProfileModal');
    const closeBtn = document.querySelector('.close-modal');
    const saveBtn = document.getElementById('saveProfileBtn');
    const fileInput = document.getElementById('file-input');
    const modalPreview = document.getElementById('modalPreviewImg');
    const profileImage = document.getElementById('profileImage');
    const profileNameSpan = document.getElementById('profileName');
    const inputName = document.getElementById('inputProfileName');

    // Open modal
    openBtn.addEventListener('click', () => {
      // Pre-fill the form with current profile data
      inputName.value = profileNameSpan.innerText;
      modalPreview.src = profileImage.src; // reset preview to current image
      modal.classList.add('active');  // use a CSS class to show modal
    });

    // Close modal (X button)
    closeBtn.addEventListener('click', () => {
      modal.classList.remove('active');
    });

    // Close modal when clicking outside the modal content
    modal.addEventListener('click', (e) => {
      if (e.target === modal) {
        modal.classList.remove('active');
      }
    });

    // Preview new image when a file is selected
    fileInput.addEventListener('change', (e) => {
      const file = e.target.files[0];
      if (file && file.type.startsWith('image/')) {
        const reader = new FileReader();
        reader.onload = (event) => {
          modalPreview.src = event.target.result;
        };
        reader.readAsDataURL(file);
      }
    });

    // Save changes: update profile name and image
    saveBtn.addEventListener('click', () => {
      const newName = inputName.value.trim();
      if (newName !== '') {
        profileNameSpan.innerText = newName;
      }
      // If a new image was selected, update the main profile image
      if (fileInput.files.length > 0) {
        const file = fileInput.files[0];
        if (file && file.type.startsWith('image/')) {
          const reader = new FileReader();
          reader.onload = (event) => {
            profileImage.src = event.target.result;
          };
          reader.readAsDataURL(file);
        }
      }
      // Close modal after saving
      modal.classList.remove('active');
      // Optionally show a success message
      alert('Profile updated successfully!');
    });

    // Optional: if you want to send data to a backend, add an AJAX call inside the save button
  })();
</script>

<!-- Minimal CSS to make the modal work (add to your existing stylesheet) -->
<style>
  .modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    visibility: hidden;
    opacity: 0;
    transition: visibility 0.2s, opacity 0.2s;
    z-index: 1000;
  }
  .modal-overlay.active {
    visibility: visible;
    opacity: 1;
  }
  .modal-content {
    background: white;
    width: 90%;
    max-width: 500px;
    border-radius: 12px;
    padding: 1.5rem;
    position: relative;
  }
  .close-modal {
    position: absolute;
    top: 1rem;
    right: 1rem;
    cursor: pointer;
    font-size: 24px;
  }
  .profile-upload-container {
    text-align: center;
    margin-bottom: 1rem;
  }
  .image-wrapper {
    position: relative;
    display: inline-block;
  }
  .image-wrapper img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    object-fit: cover;
  }
  .upload-badge {
    position: absolute;
    bottom: 0;
    right: 0;
    background: #007bff;
    border-radius: 50%;
    padding: 5px;
    cursor: pointer;
    color: white;
    display: flex;
  }
  .file-input-hidden {
    display: none;
  }
  .change-photo-text {
    display: block;
    font-size: 0.8rem;
    margin-top: 5px;
    cursor: pointer;
  }
  .input-group {
    margin-bottom: 1rem;
  }
  .input-group label {
    display: block;
    margin-bottom: 0.25rem;
  }
  .input-group input {
    width: 100%;
    padding: 0.5rem;
  }
  .btn-primary-full {
    background: #007bff;
    color: white;
    border: none;
    padding: 0.5rem 1rem;
    width: 100%;
    cursor: pointer;
    border-radius: 8px;
  }
</style>
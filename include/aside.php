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
  
   
        



  <!-- Modal -->
  


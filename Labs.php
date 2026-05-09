<!DOCTYPE html>
<html lang="en">
<?php
    $title = "Labs";
    include 'database/conn.php';
    include 'include/header.php';
?>

  <body>
    
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
        <div class="sections">
          <article class="section">
            <div class="section__title">
              <h2 class="section__title__text">Easy</h2>
              <span
                ><i
                  class="fa-solid fa-arrow-down"
                  style="color: #7380ce; font-size: large"
                ></i
              ></span>
            </div>

            <div class="section__text">

              <div class="inputsolution">
                <form action="">
                <div class="label">
                  <label for="flag">What is the flag1?</label>
                  <button class="easy">Easy</button>
                </div>

                <div class="buttons">
                  <input type="text" id="flag" value=""/>
                  <button class="submit">submit</button>
                  <button class="hint">💡 Hint</button>
                </div>
                </form>
                </div>


                
              <div class="inputsolution">
                <form action="">
                <div class="label">
                  <label for="flag">What is the flag2?</label>
                  <button class="easy">Easy</button>
                </div>

                <div class="buttons">
                  <input type="text" id="flag" value=""/>
                  <button class="submit">submit</button>
                  <button class="hint">💡 Hint</button>
                </div>
                </form>
                </div>


              <div class="inputsolution">
                <form action="">
                <div class="label">
                  <label for="flag">What is the flag3?</label>
                  <button class="easy">Easy</button>
                </div>

                <div class="buttons">
                  <input type="text" id="flag" value=""/>
                  <button class="submit">submit</button>
                  <button class="hint">💡 Hint</button>
                </div>
                </form>
                </div>


              </div>
          </article>


          <article class="section">
            <div class="section__title">
              <h2 class="section__title__text">Meduim</h2>
              <span
                ><i
                  class="fa-solid fa-arrow-down"
                  style="color: #7380ce; font-size: large"
                ></i
              ></span>
            </div>

            <div class="section__text">

              <div class="inputsolution">
                <form action="">
                <div class="label">
                  <label for="flag">What is the flag1?</label>
                  <button class="easy">Easy</button>
                </div>

                <div class="buttons">
                  <input type="text" id="flag" value=""/>
                  <button class="submit">submit</button>
                  <button class="hint">💡 Hint</button>
                </div>
                </form>
                </div>

              </div>
          </article>


          <article class="section">
            <div class="section__title">
              <h2 class="section__title__text">Hard</h2>
              <span
                ><i
                  class="fa-solid fa-arrow-down"
                  style="color: #7380ce; font-size: large"
                ></i
              ></span>
            </div>

            <div class="section__text">

              <div class="inputsolution">
                <form action="">
                <div class="label">
                  <label for="flag">What is the flag1?</label>
                  <button class="easy">Easy</button>
                </div>

                <div class="buttons">
                  <input type="text" id="flag" value=""/>
                  <button class="submit">submit</button>
                  <button class="hint">💡 Hint</button>
                </div>
                </form>
                </div>

              </div>
          </article>
          
        </div>
      </main>
    </div>

    <script src="app.js"></script>
    <script src="section-toggle.js"></script>
  </body>
</html>

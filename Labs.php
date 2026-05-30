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
        <article class="section">
          <div class="section__title">
            <h2 class="section__title__text">Easy</h2>
            <span><i
                class="fa-solid fa-arrow-down"
                style="color: #7380ce; font-size: large"></i></span>
          </div>

          <div class="section__text">
            <div class="link-web" style="padding: 15px;  font-family: sans-serif; display: inline-block;">
              <span style="color: #555; font-size: 16px; font-weight: bold;">go to website </span>
              <a href="#" style="color: #007bff; font-weight: bold; text-decoration: none; font-size: 16px; ">web-easy</a>
            </div>
            <div class="inputsolution">
              <form action="">
                <div class="label ">
                  <label for="flag " style=" font-size: 16px; font-weight: bold;">What is the flag?</label>

                </div>

                <div class="buttons">
                  <input type="text" id="flag" value="" />
                  <button class="submit">submit</button>
                  <button class="hint">💡 Hint</button>
                </div>
              </form>
            </div>
                      <table style="width: 100%; border-collapse: collapse; border: 1px solid #dee2e6; font-family: sans-serif; font-size: 18px;">
            <thead>
              <tr style="background-color: #f8f9fa;">
                <th style="padding: 12px; border: 1px solid #dee2e6; text-align: left;">#</th>
                <th style="padding: 12px; border: 1px solid #dee2e6; text-align: left;">First</th>
                <th style="padding: 12px; border: 1px solid #dee2e6; text-align: left;">Last</th>
                <th style="padding: 12px; border: 1px solid #dee2e6; text-align: left;">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th style="padding: 12px; border: 1px solid #dee2e6; text-align: left;" scope="row">1</th>
                <td style="padding: 12px; border: 1px solid #dee2e6;">Mark</td>
                <td style="padding: 12px; border: 1px solid #dee2e6;">Otto</td>
                <td style="padding: 12px; border: 1px solid #dee2e6;">@mdo</td>
              </tr>
              <tr>
                <th style="padding: 12px; border: 1px solid #dee2e6; text-align: left;" scope="row">2</th>
                <td style="padding: 12px; border: 1px solid #dee2e6;">Jacob</td>
                <td style="padding: 12px; border: 1px solid #dee2e6;">Thornton</td>
                <td style="padding: 12px; border: 1px solid #dee2e6;">@fat</td>
              </tr>
              <tr>
                <th style="padding: 12px; border: 1px solid #dee2e6; text-align: left;" scope="row">3</th>
                <td style="padding: 12px; border: 1px solid #dee2e6;">Larry</td>
                <td style="padding: 12px; border: 1px solid #dee2e6;">the Bird</td>
                <td style="padding: 12px; border: 1px solid #dee2e6;">@twitter</td>
              </tr>
            </tbody>
          </table>
          </div>

        </article>


        <article class="section">
          <div class="section__title">
            <h2 class="section__title__text">Medium</h2>
            <span><i
                class="fa-solid fa-arrow-down"
                style="color: #7380ce; font-size: large"></i></span>
          </div>

          <div class="section__text">
            <div class="link-web" style="padding: 15px;  font-family: sans-serif; display: inline-block;">
              <span style="color: #555; font-size: 16px; font-weight: bold;">go to website </span>
              <a href="#" style="color: #007bff; font-weight: bold; text-decoration: none; font-size: 16px; ">web-medium</a>
            </div>
            <div class="inputsolution">
              <form action="">
                <div class="label ">
                  <label for="flag " style=" font-size: 16px; font-weight: bold;">What is the flag?</label>

                </div>

                <div class="buttons">
                  <input type="text" id="flag" value="" />
                  <button class="submit">submit</button>
                  <button class="hint">💡 Hint</button>
                </div>
              </form>
            </div>
                      <table style="width: 100%; border-collapse: collapse; border: 1px solid #dee2e6; font-family: sans-serif; font-size: 18px;">
            <thead>
              <tr style="background-color: #f8f9fa;">
                <th style="padding: 12px; border: 1px solid #dee2e6; text-align: left;">#</th>
                <th style="padding: 12px; border: 1px solid #dee2e6; text-align: left;">First</th>
                <th style="padding: 12px; border: 1px solid #dee2e6; text-align: left;">Last</th>
                <th style="padding: 12px; border: 1px solid #dee2e6; text-align: left;">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th style="padding: 12px; border: 1px solid #dee2e6; text-align: left;" scope="row">1</th>
                <td style="padding: 12px; border: 1px solid #dee2e6;">Mark</td>
                <td style="padding: 12px; border: 1px solid #dee2e6;">Otto</td>
                <td style="padding: 12px; border: 1px solid #dee2e6;">@mdo</td>
              </tr>
              <tr>
                <th style="padding: 12px; border: 1px solid #dee2e6; text-align: left;" scope="row">2</th>
                <td style="padding: 12px; border: 1px solid #dee2e6;">Jacob</td>
                <td style="padding: 12px; border: 1px solid #dee2e6;">Thornton</td>
                <td style="padding: 12px; border: 1px solid #dee2e6;">@fat</td>
              </tr>
              <tr>
                <th style="padding: 12px; border: 1px solid #dee2e6; text-align: left;" scope="row">3</th>
                <td style="padding: 12px; border: 1px solid #dee2e6;">Larry</td>
                <td style="padding: 12px; border: 1px solid #dee2e6;">the Bird</td>
                <td style="padding: 12px; border: 1px solid #dee2e6;">@twitter</td>
              </tr>
            </tbody>
          </table>
          </div>

        </article>

        <article class="section">
          <div class="section__title">
            <h2 class="section__title__text">Hard</h2>
            <span><i
                class="fa-solid fa-arrow-down"
                style="color: #7380ce; font-size: large"></i></span>
          </div>

          <div class="section__text">
            <div class="link-web" style="padding: 15px;  font-family: sans-serif; display: inline-block;">
              <span style="color: #555; font-size: 16px; font-weight: bold;">go to website </span>
              <a href="#" style="color: #007bff; font-weight: bold; text-decoration: none; font-size: 16px; ">web-hard</a>
            </div>
            <div class="inputsolution">
              <form action="">
                <div class="label ">
                  <label for="flag " style=" font-size: 16px; font-weight: bold;">What is the flag?</label>

                </div>

                <div class="buttons">
                  <input type="text" id="flag" value="" />
                  <button class="submit">submit</button>
                  <button class="hint">💡 Hint</button>
                </div>
              </form>
            </div>
                      <table style="width: 100%; border-collapse: collapse; border: 1px solid #dee2e6; font-family: sans-serif; font-size: 18px;">
            <thead>
              <tr style="background-color: #f8f9fa;">
                <th style="padding: 12px; border: 1px solid #dee2e6; text-align: left;">#</th>
                <th style="padding: 12px; border: 1px solid #dee2e6; text-align: left;">First</th>
                <th style="padding: 12px; border: 1px solid #dee2e6; text-align: left;">Last</th>
                <th style="padding: 12px; border: 1px solid #dee2e6; text-align: left;">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th style="padding: 12px; border: 1px solid #dee2e6; text-align: left;" scope="row">1</th>
                <td style="padding: 12px; border: 1px solid #dee2e6;">Mark</td>
                <td style="padding: 12px; border: 1px solid #dee2e6;">Otto</td>
                <td style="padding: 12px; border: 1px solid #dee2e6;">@mdo</td>
              </tr>
              <tr>
                <th style="padding: 12px; border: 1px solid #dee2e6; text-align: left;" scope="row">2</th>
                <td style="padding: 12px; border: 1px solid #dee2e6;">Jacob</td>
                <td style="padding: 12px; border: 1px solid #dee2e6;">Thornton</td>
                <td style="padding: 12px; border: 1px solid #dee2e6;">@fat</td>
              </tr>
              <tr>
                <th style="padding: 12px; border: 1px solid #dee2e6; text-align: left;" scope="row">3</th>
                <td style="padding: 12px; border: 1px solid #dee2e6;">Larry</td>
                <td style="padding: 12px; border: 1px solid #dee2e6;">the Bird</td>
                <td style="padding: 12px; border: 1px solid #dee2e6;">@twitter</td>
              </tr>
            </tbody>
          </table>
          </div>

        </article>

      </div>
    </main>
  </div>

  <script src="app.js"></script>
  <script src="section-toggle.js"></script>
</body>

</html>
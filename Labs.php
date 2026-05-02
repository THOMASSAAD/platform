<!DOCTYPE html>
<html lang="en">
<?php
    $title = "Labs";
    include 'database/conn.php';
    include 'include/header.php';
?>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./images/logo.png" />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
      integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    
    <div class="container">
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

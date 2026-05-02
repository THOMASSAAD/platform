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

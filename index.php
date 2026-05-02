<!DOCTYPE html>
<?php 
    $title = "Student Dashboard";
    include 'database/conn.php';

    
?>
<?php include 'include/header.php'; ?>
    <div class="container">
<?php include 'include/aside.php'; ?>


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
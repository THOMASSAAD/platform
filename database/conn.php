<?php

   $host = "localhost";
   $user = "root";
   $pass = "root";
   $charset = "utf8mb4";
   $db = "hackacdemora";
   $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
   try {
    $pdo = new PDO($dsn, $user, $pass);

   } catch (PDOException $th) {
    throw new PDOException($th->getMessage());
   }

   include 'crud.php';
   $crud = new crud($pdo);
   
?>
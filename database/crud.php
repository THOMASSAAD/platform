<?php
    class crud{ 
        private $db;
        function __construct($conn){
            $this->db = $conn;
        }
        public function insertuser($username,$email,$password,$role_id,$name){
            try {
                $sql = "INSERT INTO users (username, email, password, role_id, name) VALUES (:username, :email, :password, :role_id, :name)";
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(':username',$username);
                $stmt->bindParam(':email',$email);
                $stmt->bindParam(':password',$password);
                $stmt->bindParam(':role_id',$role_id);
                $stmt->bindParam(':name',$name);
                $stmt->execute();
                return true;
            } catch (PDOException $th) {
                echo $th->getMessage();
                return false;
            }
        }
        public function getuser($username){
            try {
                $sql = "SELECT * FROM users WHERE username=:username";
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(':username',$username);
                $stmt->execute();
                return $stmt->fetch(PDO::FETCH_ASSOC);
            } catch (PDOException $th) {
                echo $th->getMessage();
                return false;
            }
        }
        public function getemail($email){
            try {
                $sql = "SELECT * FROM users WHERE email=:email";
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(':email',$email);
                $stmt->execute();
                return $stmt->fetch(PDO::FETCH_ASSOC);
            } catch (PDOException $th) {
                echo $th->getMessage();
                return false;
            }
        }












    }

?>
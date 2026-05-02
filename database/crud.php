<?php
    class crud{ 
        private $db;
        function __construct($conn){
            $this->db = $conn;
        }
        public function insertuser($username, $email, $password, $role_id, $name) {
            try {
                $this->db->beginTransaction();
                $sql = "INSERT INTO users (username, email, password, role_id, name) 
                        VALUES (?, ?, ?, ?, ?)";
                $stmt = $this->db->prepare($sql);
                $stmt->execute([$username, $email, $password, $role_id, $name]);
                $this->db->commit();
                return true;
            } catch (PDOException $e) {
                $this->db->rollBack();
                // Return the full errorInfo so the caller can detect duplicates
                return $e->errorInfo;
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
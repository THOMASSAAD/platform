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

        public function gettotalusers(){
            try {
                $sql = "SELECT COUNT(*) as total FROM users";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt->fetch(PDO::FETCH_ASSOC)['total'];
            } catch (PDOException $th) {
                echo $th->getMessage();
                return false;
            }
        }
        public function gettotalvulners(){
            try {
                $sql = "SELECT COUNT(*) as total FROM vulnerabilities";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt->fetch(PDO::FETCH_ASSOC)['total'];
            } catch (PDOException $th) {
                echo $th->getMessage();
                return false;
            }
        }
        public function getAllRoles() {
            try {
                $sql = "SELECT * FROM roles";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $th) {
                echo $th->getMessage();
                return false;
            }
        }
        public function getAllUsers() {
            try {
                $sql = "SELECT * FROM users";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $th) {
                echo $th->getMessage();
                return false;
            }
        }
        public function getuserbyid($user_id){
            try {
                $sql = "SELECT users.*, roles.role_name AS role_name FROM users LEFT JOIN roles ON users.role_id = roles.role_id WHERE users.user_id = :user_id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(':user_id',$user_id);
                $stmt->execute();
                return $stmt->fetch(PDO::FETCH_ASSOC);
            } catch (PDOException $th) {
                echo $th->getMessage();
                return false;
            }
        }
       public function updateuser($user_id, $role_id, $name) {
            try {
                $sql = "UPDATE users SET role_id = ?, name = ? WHERE user_id = ?";
                $stmt = $this->db->prepare($sql);
                $stmt->execute([$role_id, $name, $user_id]);
                return true;
            } catch (PDOException $th) {
                echo $th->getMessage();
                return false;
            }
        }
        Public function deleteuser($user_id) {
            try {
                $sql = "DELETE FROM users WHERE user_id = ?";
                $stmt = $this->db->prepare($sql);
                $stmt->execute([$user_id]);
                return true;
            } catch (PDOException $th) {
                echo $th->getMessage();
                return false;
            }
        }

        public function getAllVulnerabilities() {
            try {
                $sql = "SELECT * FROM vulnerabilities";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $th) {
                echo $th->getMessage();
                return false;
            }
        }

        public function getVulnerabilityById($vulnerability_id) {
            try {
                $sql = "SELECT * FROM vulnerabilities WHERE vulnerability_id = ?";
                $stmt = $this->db->prepare($sql);
                $stmt->execute([$vulnerability_id]);
                return $stmt->fetch(PDO::FETCH_ASSOC);
            } catch (PDOException $th) {
                echo $th->getMessage();
                return false;
            }
        }

        public function updateVulnerability($vulnerability_id, $title, $category, $content) {
            try {
                $sql = "UPDATE vulnerabilities SET title = ?, category = ?, content = ? WHERE vulnerability_id = ?";
                $stmt = $this->db->prepare($sql);
                $stmt->execute([$title, $category, $content, $vulnerability_id]);
                return true;
            } catch (PDOException $th) {
                echo $th->getMessage();
                return false;
            }
        }

        public function deleteVulnerability($vulnerability_id) {
            try {
                $sql = "DELETE FROM vulnerabilities WHERE vulnerability_id = ?";
                $stmt = $this->db->prepare($sql);
                $stmt->execute([$vulnerability_id]);
                return true;
            } catch (PDOException $th) {
                echo $th->getMessage();
                return false;
            }
        }

        public function insertVulnerability($title, $category, $content) {
            try {
                $sql = "INSERT INTO vulnerabilities (title, category, content) VALUES (?, ?, ?)";
                $stmt = $this->db->prepare($sql);
                $stmt->execute([$title, $category, $content]);
                return true;
            } catch (PDOException $th) {
                echo $th->getMessage();
                return false;
            }
        }
        

    }

?>
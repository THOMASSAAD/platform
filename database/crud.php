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
public function updateuser($user_id, $role_id, $name, $email, $username) {
    try {
        // تحديث كل الحقول المطلوبة
        $sql = "UPDATE users SET role_id = ?, name = ?, email = ?, username = ? WHERE user_id = ?";
        $stmt = $this->db->prepare($sql);
        
        // ترتيب المتغيرات في المصفوفة يجب أن يطابق ترتيب علامات الاستفهام (?)
        $stmt->execute([$role_id, $name, $email, $username, $user_id]);
        
        return true;
    } catch (PDOException $th) {
        // في بيئة الإنتاج يفضل تسجيل الخطأ بدلاً من طباعته مباشرة
        error_log($th->getMessage());
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
        public function getuserlogin($username, $password){
            try {
                $sql = "SELECT * FROM users WHERE username=:username AND password=:password";
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(':username',$username);
                $stmt->bindParam(':password',$password);
                $stmt->execute();
                return $stmt->fetch(PDO::FETCH_ASSOC);
            } catch (PDOException $th) {
                echo $th->getMessage();
                return false;
            }
        }

        // Flag Management Methods
        public function getFlagByValue($flag_value) {
            try {
                $sql = "SELECT * FROM flags WHERE flag_value = ?";
                $stmt = $this->db->prepare($sql);
                $stmt->execute([$flag_value]);
                return $stmt->fetch(PDO::FETCH_ASSOC);
            } catch (PDOException $th) {
                error_log($th->getMessage());
                return false;
            }
        }

        public function addUserFlag($user_id, $flag_id) {
            try {
                // Check if user already has this flag
                $sql = "SELECT * FROM user_flags WHERE user_id = ? AND flag_id = ?";
                $stmt = $this->db->prepare($sql);
                $stmt->execute([$user_id, $flag_id]);
                
                if ($stmt->rowCount() > 0) {
                    return ['status' => 'duplicate', 'message' => 'You have already found this flag'];
                }

                // Add the flag to user_flags
                $sql = "INSERT INTO user_flags (user_id, flag_id) VALUES (?, ?)";
                $stmt = $this->db->prepare($sql);
                $stmt->execute([$user_id, $flag_id]);

                // Update user's found flags count
                $sql = "UPDATE users SET number_found_flags = number_found_flags + 1 WHERE user_id = ?";
                $stmt = $this->db->prepare($sql);
                $stmt->execute([$user_id]);

                return ['status' => 'success', 'message' => 'Flag added successfully'];
            } catch (PDOException $th) {
                error_log($th->getMessage());
                return ['status' => 'error', 'message' => 'Database error'];
            }
        }

        public function getAllFlags() {
            try {
                $sql = "SELECT * FROM flags ORDER BY level ASC, flag_id ASC";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $th) {
                error_log($th->getMessage());
                return false;
            }
        }

        public function getFlagsByLevel($level) {
            try {
                $sql = "SELECT * FROM flags WHERE level = ? ORDER BY flag_id ASC";
                $stmt = $this->db->prepare($sql);
                $stmt->execute([$level]);
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $th) {
                error_log($th->getMessage());
                return false;
            }
        }

        public function getUserFlags($user_id) {
            try {
                $sql = "SELECT f.*, uf.found_at FROM flags f 
                        INNER JOIN user_flags uf ON f.flag_id = uf.flag_id 
                        WHERE uf.user_id = ? 
                        ORDER BY f.level ASC, f.flag_id ASC";
                $stmt = $this->db->prepare($sql);
                $stmt->execute([$user_id]);
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $th) {
                error_log($th->getMessage());
                return false;
            }
        }

        public function getUserFlagsByLevel($user_id, $level) {
            try {
                $sql = "SELECT f.*, uf.found_at FROM flags f 
                        INNER JOIN user_flags uf ON f.flag_id = uf.flag_id 
                        WHERE uf.user_id = ? AND f.level = ? 
                        ORDER BY f.flag_id ASC";
                $stmt = $this->db->prepare($sql);
                $stmt->execute([$user_id, $level]);
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $th) {
                error_log($th->getMessage());
                return false;
            }
        }

        public function getFlagById($flag_id) {
            try {
                $sql = "SELECT * FROM flags WHERE flag_id = ?";
                $stmt = $this->db->prepare($sql);
                $stmt->execute([$flag_id]);
                return $stmt->fetch(PDO::FETCH_ASSOC);
            } catch (PDOException $th) {
                error_log($th->getMessage());
                return false;
            }
        }

        public function getUsersWithFlag($flag_id) {
            try {
                $sql = "SELECT u.user_id, u.name, u.username, uf.found_at FROM users u 
                        INNER JOIN user_flags uf ON u.user_id = uf.user_id 
                        WHERE uf.flag_id = ? 
                        ORDER BY uf.found_at ASC";
                $stmt = $this->db->prepare($sql);
                $stmt->execute([$flag_id]);
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $th) {
                error_log($th->getMessage());
                return false;
            }
        }
        public function getRanking() {
            try {
                $sql = "
                    SELECT 
                        u.user_id,
                        u.name,
                        u.username,
                        u.number_found_flags AS Foundedflags
                    FROM users u
                    ORDER BY u.number_found_flags DESC, u.name ASC
                ";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $th) {
                error_log($th->getMessage());
                return false;
            }
        }

    }

?>
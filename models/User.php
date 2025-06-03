<?php 
require_once __DIR__ . '/../config/Database.php'; 
 
class User 
{ 
    public $id; 
    public $username; 
    public $password; 
 
    public function __construct($id, $username, $password) 
    { 
        $this->id = $id; 
        $this->username = $username; 
        $this->password = $password; 
    } 
 
    public static function findByUsername($username) 
    { 
        $db = Database::getInstance()->getConnection(); 
        $stmt = $db->prepare("SELECT * FROM users WHERE username = 
:username"); 
        $stmt->bindParam(':username', $username); 
        $stmt->execute(); 
        $row = $stmt->fetch(PDO::FETCH_ASSOC); 
        if ($row) { 
            // Debug output 
            error_log("User found: " . print_r($row, true)); 
            return new User($row['id'], $row['username'], 
$row['password']); 
        } 
        error_log("User not found for username: " . $username); 
        return null; 
    } 
 
    public static function findById($id) 
    { 
        $db = Database::getInstance()->getConnection(); 
        $stmt = $db->prepare("SELECT * FROM users WHERE id = :id"); 
        $stmt->bindParam(':id', $id); 
        $stmt->execute(); 
        $row = $stmt->fetch(PDO::FETCH_ASSOC); 
        if ($row) { 
            return new User($row['id'], $row['username'], 
$row['password']); 
        } 
        return null; 
    } 
 
public function updatePassword($newPassword) 
{ 
$db = Database::getInstance()->getConnection(); 
$hashedPassword = password_hash($newPassword, 
PASSWORD_DEFAULT); 
$stmt = $db->prepare("UPDATE users SET password = :password 
WHERE id = :id"); 
$stmt->bindParam(':password', $hashedPassword); 
$stmt->bindParam(':id', $this->id); 
$stmt->execute(); 
$this->password = $hashedPassword; 
} 
} 
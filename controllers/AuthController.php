<?php 
require_once '../models/User.php'; 
 
class AuthController 
{ 
    public function login() 
    { 
        if (session_status() == PHP_SESSION_NONE) { 
            session_start(); 
        } 
        if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
            $username = $_POST['username'] ?? ''; 
            $password = $_POST['password'] ?? ''; 
 
            $user = User::findByUsername($username); 
            if ($user && password_verify($password, $user->password)) 
{ 
                $_SESSION['user_id'] = $user->id; 
                header('Location: 
index.php?controller=auth&action=dashboard'); 
                exit(); 
            } else { 
                $error = 'Invalid username or password'; 
                include '../views/auth/login.php'; 
            } 
        } else { 
            include '../views/auth/login.php'; 
        } 
    } 
 
    public function dashboard() 
    { 
        if (session_status() == PHP_SESSION_NONE) { 
            session_start(); 
        } 
        if (!isset($_SESSION['user_id'])) { 
            header('Location: 
index.php?controller=auth&action=login'); 
            exit(); 
        } 
        include '../views/auth/dashboard.php'; 
    } 
 
    public function changePassword() 
    { 
        if (session_status() == PHP_SESSION_NONE) { 
            session_start(); 
        } 
        if (!isset($_SESSION['user_id'])) { 
            header('Location: 
index.php?controller=auth&action=login'); 
            exit(); 
        } 
 
        if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
            $currentPassword = $_POST['current_password'] ?? ''; 
            $newPassword = $_POST['new_password'] ?? ''; 
            $confirmPassword = $_POST['confirm_password'] ?? ''; 
 
            $user = User::findById($_SESSION['user_id']); 
            if (!$user || !password_verify($currentPassword, 
$user->password)) { 
                $error = 'Current password is incorrect'; 
                include '../views/auth/change_password.php'; 
                return; 
            } 
 
            if ($newPassword !== $confirmPassword) { 
                $error = 'New password and confirmation do not match'; 
                include '../views/auth/change_password.php'; 
                return; 
            } 
 
            $user->updatePassword($newPassword); 
            $success = 'Password changed successfully'; 
            include '../views/auth/change_password.php'; 
        } else { 
            include '../views/auth/change_password.php'; 
        } 
    } 
 
    public function logout() 
    { 
        if (session_status() == PHP_SESSION_NONE) { 
            session_start(); 
        } 
        session_destroy(); 
        header('Location: index.php?controller=auth&action=login'); 
        exit(); 
    } 
}
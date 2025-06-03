<?php 
    session_start(); 
    $controller = $_GET['controller'] ?? 'auth'; 
    $action = $_GET['action'] ?? 'login'; 
    $allowedControllers = ['Menu', 'Auth']; 
    $allowedActions = [ 
    'Menu' => ['index', 'create', 'delete', 'edit'], 
    'Auth' => ['login', 'dashboard', 'changePassword', 'logout'] 
    ]; 
    if (!in_array(ucfirst($controller), $allowedControllers)) { 
    $controller = 'Menu'; 
    } 
    $controller = ucfirst($controller); 
    if (!in_array($action, $allowedActions[$controller])) { 
    $action = $allowedActions[$controller][0]; 
    } 
    require_once "../controllers/" . $controller . "Controller.php"; 
    $controllerName = $controller . "Controller"; 
    $controllerObj = new $controllerName(); 
    $controllerObj->$action(); 
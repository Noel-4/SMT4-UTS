<?php 
require_once '../models/Menu.php'; 
class MenuController 
{ 
    public function index() 
    { 
        $menuList = Menu::all(); 
        include '../views/menu/index.php'; 
    } 
    public function create() 
    { 
        if ($_SERVER["REQUEST_METHOD"] == "POST") { 
            Menu::create( 
                $_POST['nama'], 
                $_POST['kategori'], 
                $_POST['harga'] 
            ); 
            header("Location:index.php?controller=menu&action=index"); 
        } else { 
            include '../views/menu/create.php'; 
        } 
    } 
 
    public function edit() 
    { 
        if (!isset($_GET['id'])) { 
            header("Location:index.php?controller=menu&action=index"); 
            exit(); 
        } 
        $id = $_GET['id']; 
        if ($_SERVER["REQUEST_METHOD"] == "POST") { 
            Menu::update( 
                $id, 
                $_POST['nama'], 
                $_POST['kategori'], 
                $_POST['harga'] 
            ); 
            header("Location:index.php?controller=menu&action=index"); 
            exit(); 
        } else { 
            $menu = Menu::findById($id); 
            if (!$menu) { 
                
header("Location:index.php?controller=menu&action=index"); 
                exit(); 
            } 
            include '../views/menu/edit.php'; 
        } 
    } 
 
    public function delete() 
    { 
        if (isset($_GET['id'])) { 
            $id = $_GET['id']; 
            Menu::delete($id); 
        } 
        header("Location:index.php?controller=menu&action=index"); 
    } 
}
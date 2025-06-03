<?php 
require_once __DIR__ . '/../config/Database.php'; 
 
class Menu 
{ 
    public $id; 
    public $nama; 
    public $kategori; 
    public $harga; 
 
    public function __construct($id, $nama, $kategori, $harga) 
    { 
        $this->id = $id; 
        $this->nama = $nama; 
        $this->kategori = $kategori; 
        $this->harga = $harga; 
    } 
 
    public static function all() 
    { 
        $db = Database::getInstance()->getConnection(); 
        $stmt = $db->prepare("SELECT * FROM menu"); 
        $stmt->execute(); 
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC); 
 
        $menuList = []; 
        foreach ($results as $row) { 
            $menuList[] = new Menu($row['id'], $row['nama'], 
$row['kategori'], $row['harga']); 
        } 
        return $menuList; 
    } 
 
    public static function create($nama, $kategori, $harga) 
    { 
        $db = Database::getInstance()->getConnection(); 
        $stmt = $db->prepare("INSERT INTO menu (nama, kategori, 
harga) VALUES (:nama, :kategori, :harga)"); 
        $stmt->bindParam(':nama', $nama); 
        $stmt->bindParam(':kategori', $kategori); 
        $stmt->bindParam(':harga', $harga); 
        $stmt->execute(); 
    } 
 
    public static function findById($id) 
    { 
        $db = Database::getInstance()->getConnection(); 
        $stmt = $db->prepare("SELECT * FROM menu WHERE id = :id"); 
        $stmt->bindParam(':id', $id); 
        $stmt->execute(); 
        $row = $stmt->fetch(PDO::FETCH_ASSOC); 
        if ($row) { 
            return new Menu($row['id'], $row['nama'], 
$row['kategori'], $row['harga']); 
        } 
        return null; 
    } 
 
    public static function update($id, $nama, $kategori, $harga) 
    { 
        $db = Database::getInstance()->getConnection(); 
        $stmt = $db->prepare("UPDATE menu SET nama = :nama, kategori 
= :kategori, harga = :harga WHERE id = :id"); 
        $stmt->bindParam(':nama', $nama); 
        $stmt->bindParam(':kategori', $kategori); 
        $stmt->bindParam(':harga', $harga); 
        $stmt->bindParam(':id', $id); 
        $stmt->execute(); 
    } 
 
    public static function delete($id) 
    { 
        $db = Database::getInstance()->getConnection(); 
        $stmt = $db->prepare("DELETE FROM menu WHERE id = :id"); 
        $stmt->bindParam(':id', $id); 
        $stmt->execute(); 
    } 
} 
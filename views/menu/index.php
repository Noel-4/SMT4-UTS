<!DOCTYPE html> 
<html lang="en">  
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Daftar Menu</title> 
    <!-- Bootstrap CSS CDN --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> 
</head> 
<body> 
    <div class="container mt-4"> 
        <h1 class="mb-4">Daftar Menu</h1> 
        <a href="index.php?controller=menu&action=create" class="btn btn-primary mb-3">Tambah Menu</a> 
        <a href="index.php?controller=auth&action=dashboard" class="btn btn-secondary mb-3 ms-2">Kembali ke Dashboard</a> 
        <table class="table table-striped table-bordered"> 
            <thead> 
                <tr> 
                    <th>ID</th> 
                    <th>Nama</th> 
                    <th>Kategori</th> 
                    <th>Harga</th> 
                    <th>Aksi</th> 
                </tr> 
            </thead> 
            <tbody> 
                <?php foreach ($menuList as $menu): ?> 
                    <tr> 
                        <td><?php echo htmlspecialchars($menu->id); ?></td> 
                        <td><?php echo htmlspecialchars($menu->nama); ?></td> 
                        <td><?php echo htmlspecialchars($menu->kategori); ?></td> 
                        <td><?php echo htmlspecialchars($menu->harga); ?></td> 
                        <td> 
                            <a href="index.php?controller=menu&action=edit&id=<?php echo urlencode($menu->id); ?>" class="btn btn-warning btn-sm">Edit</a> 
                            <a href="index.php?controller=menu&action=delete&id=<?php echo urlencode($menu->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus menu ini?');">Delete</a> 
                        </td> 
                    </tr> 
                <?php endforeach; ?> 
            </tbody> 
        </table> 
    </div> 
    <!-- Bootstrap JS Bundle CDN (optional, for interactive components) --> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> 
</body> 
</html> 
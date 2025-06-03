<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Daftar Menu</title>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #a8d8ff, #d0f0ff, #ffffff);
            background-size: 400% 400%;
            animation: gradientMove 20s ease infinite;
            min-height: 100vh;
            margin: 0;
            padding: 2rem;
        }

        @keyframes gradientMove {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .table-container {
            background-color: #fff;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 2rem;
        }

        .action-buttons {
            display: flex;
            gap: 1rem;
            margin-bottom: 1.5rem;
            justify-content: center;
        }
    </style>
</head>  
<body>  
    <div class="container table-container">
        <h1>Daftar Menu</h1>

        <div class="action-buttons">
            <a href="index.php?controller=menu&action=create" class="btn btn-primary">Tambah Menu</a>  
            <a href="index.php?controller=auth&action=dashboard" class="btn btn-secondary">Kembali ke Dashboard</a>  
        </div>

        <table class="table table-striped table-bordered">  
            <thead class="table-dark">  
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
                        <a href="index.php?controller=menu&action=edit&id=<?php echo ($menu->id); ?>" class="btn btn-sm btn-warning">Edit</a>  
                        <a href="index.php?controller=menu&action=delete&id=<?php echo ($menu->id); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus menu ini?')">Hapus</a>  
                    </td>  
                </tr>  
                <?php endforeach; ?>  
            </tbody>  
        </table>  
    </div>  
</body>  
</html>

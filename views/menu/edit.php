<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Edit Menu</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> 

    <style>
        body {
            background: linear-gradient(-45deg, #d0f0fd, #fce1ff, #e5e0ff, #fdf7e3);
            background-size: 400% 400%;
            animation: gradientFlow 12s ease infinite;
            min-height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        @keyframes gradientFlow {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            max-width: 600px;
            width: 100%;
        }

        h1 {
            text-align: center;
            margin-bottom: 1.5rem;
        }
    </style>
</head> 
<body> 
    <div class="container"> 
        <h1>Edit Menu</h1> 
        <form method="POST" action=""> 
            <div class="mb-3"> 
                <label for="nama" class="form-label">Nama :</label> 
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo htmlspecialchars($menu->nama); ?>" required> 
            </div> 
            <div class="mb-3"> 
                <label for="kategori" class="form-label">Kategori :</label> 
                <select class="form-control" id="kategori" name="kategori" value="<?php echo htmlspecialchars($menu->kategori); ?>" required> >
                    <option value="Makanan Berat">Makanan Berat</option>
                    <option value="Makanan Ringan">Makanan Ringan</option>
                    <option value="Minuman">Minuman</option>
                </select>
            </div> 
            <div class="mb-3"> 
                <label for="harga" class="form-label">Harga:</label> 
                <input type="number" class="form-control" id="harga" name="harga" value="<?php echo htmlspecialchars($menu->harga); ?>" required> 
            </div> 
            <button type="submit" class="btn btn-primary">Update</button> 
            <a href="index.php?controller=menu&action=index" class="btn btn-secondary ms-2">Kembali ke List</a> 
        </form> 
    </div> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> 
</body> 
</html>

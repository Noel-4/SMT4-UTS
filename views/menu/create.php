<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Tambah Menu</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> 

    <style>
        body {
            background: linear-gradient(to right, #fff59d, #ffe082, #ffffff);
            background-size: 400% 400%;
            animation: yellowMove 20s ease infinite;
            min-height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }

        @keyframes yellowMove {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .form-container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 600px;
        }

        h1 {
            text-align: center;
            margin-bottom: 2rem;
        }
    </style>
</head> 

<body> 
    <div class="form-container"> 
        <h1>Tambah Menu</h1> 
        <form method="POST" action=""> 
            <div class="mb-3"> 
                <label for="nama" class="form-label">Nama :</label> 
                <input type="text" class="form-control" id="nama" name="nama" required> 
            </div> 
            <div class="mb-3"> 
                <label for="kategori" class="form-label">Kategori :</label> 
                <input type="text" class="form-control" id="kategori" name="kategori" required> 
            </div> 
            <div class="mb-3"> 
                <label for="harga" class="form-label">Harga :</label> 
                <input type="number" class="form-control" id="harga" name="harga" required> 
            </div> 
            <button type="submit" class="btn btn-primary w-100">Simpan</button> 
        </form> 
        <a href="index.php?controller=menu&action=index" class="btn btn-secondary w-100 mt-3">Kembali ke List</a> 
    </div> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> 
</body> 
</html>

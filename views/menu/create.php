<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Tambah Menu</title> 
    <!-- Bootstrap CSS CDN --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> 
</head> 
 
<body> 
    <div class="container mt-4"> 
        <h1 class="mb-4">Tambah Menu</h1> 
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
            <button type="submit" class="btn btn-primary">Simpan</button> 
        </form> 
        <a href="index.php?controller=menu&action=index" class="btn btn-secondary mt-3">Kembali ke List</a> 
    </div> 
    <!-- Bootstrap JS Bundle CDN (optional, for interactive 
components) --> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> 
</body> 
 
</html> 
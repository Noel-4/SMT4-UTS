<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8" /> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
    <title>Dashboard</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" /> 
</head> 
<body> 
    <div class="container mt-5"> 
        <h2>Dashboard</h2> 
        <p>Welcome to your dashboard!</p> 
        <a href="index.php?controller=buku&action=index" class="btn btn-primary mb-3">Manage Buku</a> 
        <br /> 
        <a href="index.php?controller=auth&action=changePassword" class="btn btn-warning">Change Password</a> 
        <a href="index.php?controller=auth&action=logout" class="btn btn-danger">Logout</a> 
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> 
</body> 
</html> 
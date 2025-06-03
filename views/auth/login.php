<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8" /> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
    <title>Login</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" /> 
</head> 
<body> 
    <div class="container mt-5"> 
        <h2>Login</h2> 
        <?php if (!empty($error)): ?> 
            <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div> 
        <?php endif; ?> 
        <form method="POST" action=""> 
            <div class="mb-3"> 
                <label for="username" class="form-label">Username:</label> 
                <input type="text" id="username" name="username" class="form-control" required /> 
            </div> 
            <div class="mb-3"> 
                <label for="password" class="form-label">Password:</label> 
                <input type="password" id="password" name="password" class="form-control" required /> 
            </div> 
            <button type="submit" class="btn btn-primary">Login</button> 
        </form> 
    </div> 
    <script 
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> 
</body> 
</html>
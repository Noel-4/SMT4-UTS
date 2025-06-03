<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8" /> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
    <title>Change Password</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" /> 
</head> 
<body> 
    <div class="container mt-5"> 
        <h2>Change Password</h2> 
        <?php if (!empty($error)): ?> 
            <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div> 
        <?php endif; ?> 
        <?php if (!empty($success)): ?> 
            <div class="alert alert-success"><?php echo htmlspecialchars($success); ?></div> 
        <?php endif; ?> 
        <form method="POST" action=""> 
            <div class="mb-3"> 
                <label for="current_password" class="form-label">Current Password:</label> 
                <input type="password" id="current_password" name="current_password" class="form-control" required /> 
            </div> 
            <div class="mb-3"> 
                <label for="new_password" class="form-label">New Password:</label> 
                <input type="password" id="new_password" name="new_password" class="form-control" required /> 
            </div> 
            <div class="mb-3"> 
                <label for="confirm_password" class="form-label">Confirm New Password:</label> 
                <input type="password" id="confirm_password" name="confirm_password" class="form-control" required /> 
            </div> 
            <button type="submit" class="btn btn-primary">Change Password</button> 
        </form> 
        <a href="index.php?controller=auth&action=dashboard" class="btn btn-secondary mt-3">Back to Dashboard</a> 
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> 
</body> 
</html>
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8" /> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
    <title>Change Password</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" /> 

    <style>
        body {
            background: linear-gradient(135deg, #3a7bd5, #8e44ad, #ffffff);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .password-container {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 500px;
        }

        .btn-back {
            margin-top: 1rem;
        }
    </style>
</head> 
<body> 
    <div class="password-container"> 
        <h2 class="text-center mb-4">Change Password</h2> 

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
                <label for="confirm_password" class="form-label">Confirm Password:</label> 
                <input type="password" id="confirm_password" name="confirm_password" class="form-control" required /> 
            </div> 
            <button type="submit" class="btn btn-primary w-100">Change Password</button> 
        </form> 

        <a href="index.php?controller=auth&action=dashboard" class="btn btn-secondary w-100 btn-back">Kembali ke Dashboard</a>
    </div> 
</body> 
</html>

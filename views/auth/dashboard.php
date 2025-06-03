<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        body {
            background: linear-gradient(135deg, #d9a7c7, #fffcdc, #a18cd1);
            background-size: 400% 400%;
            animation: animatedBG 20s ease infinite;
            min-height: 100vh;
            margin: 0;
            padding: 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        @keyframes animatedBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .dashboard-container {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 500px;
        }

        .dashboard-container h2 {
            text-align: center;
            margin-bottom: 1rem;
            font-weight: bold;
        }

        .dashboard-container p {
            text-align: center;
            margin-bottom: 2rem;
            color: #555;
        }

        .dashboard-container .btn {
            padding: 0.75rem;
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <h2>Dashboard</h2>
        <p>Selamat Datang di Beranda Anda!</p>
        <div class="d-grid gap-3">
            <a href="index.php?controller=menu&action=index" class="btn btn-primary">Manage Menu</a>
            <a href="index.php?controller=auth&action=changePassword" class="btn btn-warning">Change Password</a>
            <a href="index.php?controller=auth&action=logout" class="btn btn-danger">Logout</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

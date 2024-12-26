<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Perpustakaan</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            /* background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); */
            background-color: whitesmoke;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Arial', sans-serif;
        }

        .container {
            margin: 10px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 450px;
        }

        .login-container {
            display: flex;
            flex-direction: row;
        }

        .login-form {
            padding: 40px;
            width: 100%;
        }

        .logo {
            width: 100%;
            max-width: 200px;
            margin-bottom: 20px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .login-title {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
        }

        .form-control {
            border-radius: 20px;
            padding: 12px 20px;
        }

        .btn-primary {
            border-radius: 20px;
            padding: 12px 20px;
            background-color: #4e73df;
            border: none;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #2e59d9;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="login-container">
        <div class="login-form">
            <img src="img/logo3.png" alt="logo" class="logo">
            <h2 class="login-title">Admin</h2>
            <form action="conn.php" method="POST">
                <div class="mb-3">
                    <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
                </div>
                <div class="mb-3">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100" name="login">
                    <i class="fas fa-sign-in-alt me-2"></i> Login
                </button>
            </form>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

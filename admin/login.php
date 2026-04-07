<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Veda's Admin Panel</title>
    <style>
        body {
            background: linear-gradient(to right, #3498DB, #2C3E50);
            font-family: 'Montserrat', sans-serif;
        }
        .login-box {
            width: 400px;
            margin: 100px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.3);
        }
        .login-box h2 {
            color: #A51D2B;
            text-align: center;
            margin-bottom: 30px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .btn-login {
            background: #A51D2B;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            width: 100%;
            cursor: pointer;
            font-size: 16px;
        }
        .btn-login:hover {
            background: #6B0F1A;
        }
        .info-text {
            text-align: center;
            margin-top: 20px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Veda's Admin Login</h2>
        <form action="login_process.php" method="POST">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="ved@gmail.com" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn-login" name="admin_login">Login</button>
        </form>
        <div class="info-text">
            <p>Demo Credentials:</p>
            <p>Email: ved@gmail.com</p>
            <p>Password: 123456789</p>
        </div>
    </div>
</body>
</html>
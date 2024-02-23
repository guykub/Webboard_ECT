<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body{
            font-family: sans-serif;
        }
        .text-center{
            text-align: center;
        }
        table{
            border: 2px solid black;
        }
    </style>
</head>
<body>
    <h1 class="text-center">Webboard</h1>
    <div class="container mt-3">
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#home"><i class="bi bi-house-door-fill"></i> Home</a>
            <form class="d-flex">
                <a href="login.php" class="navbar-brand"><i class="bi bi-box-arrow-in-left"></i> เข้าสู่ระบบ</a>
            </form>
        </div>  
    </nav><br>
    <!-- alert -->
    <?php
        if(isset($_SESSION["error"])){
            echo "<div class='container mt-3' style='width: 26.5rem;'><div class='alert alert-danger'><span>ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง</span></div></div>";
            unset($_SESSION["error"]);
        }
    ?>
    <div class="d-flex justify-content-center">
        <form action="verify.php" method="POST">
            <div class="card"  style="width: 25rem;">
                <div class="card-header text-center">เข้าสู่ระบบ</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="user" class="form-label">Login:</label>
                        <input type="text" name="user" id="user" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="pwd" class="form-label">Password:</label>
                        <input type="password" id="pwd" class="form-control"name="password" placeholder="Password" required>
                    </div>
                    <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-secondary m-1">Login</button>
                    <button type="reset" class="btn btn-secondary m-1">Reset</button>
                    </div>
                </div>
            </div><br>
            <p class="text-center">ถ้ายังไม่ได้เป็นสมาชิก <a href="register.php">กรุณาสมัครสมาชิก</a></p>
        </div>
    </div>
</body>
</html>
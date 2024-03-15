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
            <a class="navbar-brand" href="index.php"><i class="bi bi-house-door-fill"></i> Home</a>
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
                        <div class="input-group">
                            <input type="password" id="pwd" class="input form-control" name="pwd" placeholder="Password" required>
                                <span class="input-group-text" onclick="password_show_hide();">
                                    <i class="bi bi-eye-fill" id="show_eye"></i>
                                    <i class="bi bi-eye-slash-fill d-none" id="hide_eye"></i>
                                </span>
                        </div>                       
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
<script>
    function password_show_hide() {
    var x = document.getElementById("pwd");
    var show_eye = document.getElementById("show_eye");
    var hide_eye = document.getElementById("hide_eye");
    hide_eye.classList.remove("d-none");
    if (x.type == "password") {
    x.type = "text";
    show_eye.style.display = "none";
    hide_eye.style.display = "block";
    } else {
    x.type = "password";
    show_eye.style.display = "block";
    hide_eye.style.display = "none";
    }
}
</script>
</html>
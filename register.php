<?php  include "conn.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body{
            font-family: sans-serif;
        }
        h1{
            text-align: center;
        }
        table{
            border: 2px solid black;
        }
    </style>
</head>
<body>
        <div class="container">
            <h1 class="mt-3 text-center">Webboard</h1>
            <nav class="navbar bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#home"><i class="bi bi-house-door-fill"></i> Home</a>
                    <form class="d-flex">
                        <a href="login.php" class="navbar-brand"><i class="bi bi-box-arrow-in-left"></i> เข้าสู่ระบบ</a>
                    </form>
                </div>
            </nav><br>
            <div class="row mt-4">
                <div class="col-lg-3 col-md-2 col-sm-1"></div>
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <?php
                    if(isset($_SESSION['add_user'])){
                        if($_SESSION['add_user']=="error"){
                            echo "<div class='alert alert-danger'>ชื่อบัญชีซ้ำหรือฐานข้อมูลมีปัญหา</div>";
                        }else{
                            echo "<div class='alert alert-success'>เพิ่มบัญชีเรียบร้อย</div>";
                        }
                        unset($_SESSION['add_user']);
                    }
                    ?>
                    <div class="card border-primary">
                        <div class="card-header bg-primary text-white">เข้าสู่ระบบ</div>
                        <div class="card-body">
                            <form action="register_save.php" method="post">
                                <div class="row">
                                    <label for="user" class="col-lg-3 col-form-label">ชื่อบัญชี</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="user" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-lg-3 col-form-label" for="pwd">รหัสผ่าน : </label>
                                    <div class="col-lg-9">
                                        <input type="password" name="pwd" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-lg-3 col-form-label" for="name">ชื่อ - นามสกุล : </label>
                                    <div class="col-lg-9">
                                        <input type="text" name="name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-lg-3 form-label">เพศ : </label>
                                    <div class="col-lg-9">
                                        <div class="form-check">
                                            <input type="radio" name="gender" value="m" class="form-check-input">
                                            <label  class="form-check-label">ชาย</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="gender" value="f" class="form-check-input">
                                            <label class="form-check-label">หญิง</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="gender" value="o" class="form-check-input">
                                            <label class="form-check-label">อื่นๆ</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="email" class="col-lg-3 col-form-label">อีเมล : </label>
                                    <div class="col-lg-9">
                                        <input type="email" name="email" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-12 d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary btn-sm me-2"><i class="bi bi-save"></i> สมัครสมาชิก</button>
                                        <button type="reset" class="btn btn-danger btn-sm"><i class="bi bi-x-square"></i> ยกเลิก</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md col-sm-1"></div>
            </div>
        </div>
</body>
</html>
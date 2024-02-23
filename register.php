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
    <h1>สมัครสมาชิก</h1>
    <div class="d-flex justify-content-center">
        <form action="verify.php" method="POST">
            <div class="card">
                <div class="card-header text-center">เข้าสู่ระบบ</div>
                <div class="card-body">
                    <div class="row g-3 align-item-center">
                        <div class="col-2   ">
                            <label for="user" class="col-form-label">ชื่อบัญชี : </label>
                        </div>
                        <div class="col-9">
                            <input type="text" id="user" class="form-control" require>
                        </div>
                        <div class="col-2   ">
                            <label for="pwd" class="col-form-label">รหัสผ่าน : </label>
                        </div>
                        <div class="col-9">
                            <input type="password" id="pwd" class="form-control" require>
                        </div>
                        <div class="col-2">
                            <label for="name" class="col-form-label">ชื่อ - นามสกุล : </label>
                        </div>
                        <div class="col-9">
                            <input type="password" id="name" class="form-control" require>
                        </div>
                        </div>
                    </div>
                </div>
            </div><br>
        </div>
    </div>
    <center>
        <form>
    <table>
        <tr>
            <td style="background-color: #6CD2FE; text-align: center;" colspan="2">เข้าสู่ระบบ</td>
        </tr>
        <tr>
            <td>ชื่อบัญชี : </td>
            <td><input type="text" name="user"></td>
        </tr>
        <tr>
            <td>รหัสผ่าน : </td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td>ชื่อ - นามสกุล : </td>
            <td><input type="text" name="fname"></td>
        </tr>
        <tr>
            <td rowspan="3">เพศ</td>
            <td><input type="radio" name="man">ชาย</td>
        </tr>
        <tr>
            <td><input type="radio" name="woman">หญิง</td>
        </tr>
        <tr>
            <td><input type="radio" name="other">อื่นๆ</td>
        </tr>
        <tr>
            <td>อีเมล : </td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td style="text-align: center;" colspan="2" ><input type="button" value="สมัครสมาชิก"></td>
        </tr>
    </table>
        </form>
        <p><a href="index.html">กลับไปหน้าหลัก</a></p>
    </center>
</body>
</html>
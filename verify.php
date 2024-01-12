<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
    <style>
        body{
            font-family: sans-serif;
        }
        h1,p,a{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Webboard KakKak</h1>
    <hr>
    <p>เข้าสู้ระบบด้วย</p>
    <?php
        $login=$_POST["user"];
        $pwd=$_POST["password"];
        if($login=="admin" && $pwd=="ad1234"){
            echo "<p>เข้าสู่ระบบด้วย Admin";
        }elseif($login=="member" && $pwd=="mem1234"){
            echo "<p>เข้าสู้ระบบด้วย MEMBER";
        }else{
            echo "<p>ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
        }
    ?>
    <p>Login = <?php echo $_POST['user']; ?></p>
    <p>Password = <?php echo $_POST['password']; ?></p>
    <p><a href="index.php">กลับไปหน้าหลัก</a></p>
</body>
</html>
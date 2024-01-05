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
        h1,p{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Webboard KakKak</h1>
    <hr>
    <p>เข้าสูระบบด้วย</p>
    <p>Login = <?php echo $_POST['user']; ?></p>
    <p>Password = <?php echo $_POST['password']; ?></p>
</body>
</html>
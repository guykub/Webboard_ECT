<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webboard</title>
    <style>
        body{
            font-family: sans-serif;
        }
        h1{
            text-align: center;
        }
        a.login{
            float: right;
            padding-right: 20px;
        }
    </style>
</head>
<body>
    <h1>Webboard</h1>
    <hr>
    <form action="post.php" method="get">
    <p style="padding-left: 20px;">หมวดหมู่ : 
    <select>
        <option value="all">-- ทั้งหมด --</option>
        <option value="general">เรื่องทั่วไป</option>
        <option value="study">เรื่องเรียน</option>
    </select>
        <a class="login" href="login.html">เข้าสู่ระบบ</a></p>
    </form>
    <ul>
    <?php
    $i = 1;
    while($i<=10){
    echo "<li><a href='post.php?id=$i'>กระทู้ที่ $i</a></li>
    ";
    $i++; }?>
    </ul>
</body>
</html>
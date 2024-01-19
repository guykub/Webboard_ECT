<?php
session_start();
?>
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
        .login{
            float: right;
            padding-right: 20px; 
        } 
    </style>
</head>
<?php if (!isset($_SESSION['id'])) { ?>
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
                echo "<li><a href='post.php?id=$i'>กระทู้ที่ $i</a></li>";
        $i++; }?>
    </ul>
    <?php }else{ ?>
        <h1>Webboard</h1>
        <hr>
        <form action="post.php" method="get">
        <div style="padding-left: 20px;">หมวดหมู่ : 
        <select>
            <option value="all">-- ทั้งหมด --</option>
            <option value="general">เรื่องทั่วไป</option>
            <option value="study">เรื่องเรียน</option>
        </select>
            <?php echo "<div class='login'>ผู้ใช้งานระบบ : $_SESSION[username] &nbsp;&nbsp<a class='login' href='logout.php'>ออกจากระบบ</a></div>"; ?>
        </form>
        <p style="padding-left: 20px;"><a href="newpost.php">สร้างกระทู้ใหม่</a></p>
        <ul>
        <?php
            $i = 1;
            while($i<=10){
                echo "<li><a href='post.php?id=$i'>กระทู้ที่ $i</a>";
            if(isset ($_SESSION['id']) && $_SESSION['role']=='a'){
                echo "&nbsp&nbsp;<a href=delete.php?id=$i>ลบ</a> </li>";
            }
        $i++; }?>
    <?php }?>
</body>
</html>
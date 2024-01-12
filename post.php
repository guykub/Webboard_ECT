<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <style>
        body{
            font-family: sans-serif;
        }
        h1,p{
            text-align: center;
        }
        table{
            border: 2px solid black;
        }
    </style>
</head>
<body>
    <h1>Webboard KakKak</h1>
    <hr>
    <?php 
    $id = ($_GET['id']);
    $i = $id%2;
    echo "<p>ต้องการกระทู้หมายเลข $id</p>";
    if($i==1){
        echo "<p>เป็นกระทู้หมายเลขคี่";
    }else{
        echo "<p>เป็นกระทู้หมายเลขคู่";
    }
    
    ?>
    <center>
    <form action="">
        <table>
        <tr>
            <td style="background-color: #6CD2FE; text-align: center;" colspan="2">แสดงความคิดเห็น</td>
        </tr>
        <tr>
            <td><textarea></textarea></td>
        </tr>
        <tr>
            <td style="text-align: center;"><input type="submit" value="ส่งข้อความ"></td>
        </tr>
        </table>
    </form>
    <p><a href="index.php">กลับไปหน้าหลัก</a></p>
    </center>
</body>
</html>
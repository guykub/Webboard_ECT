<?php
session_start();
if(!isset($_SESSION['id'])){
    header("location: index.php");
    die();
}
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
    </style>
</head>
<body>
    <h1>Webboard</h1>
    <hr>
    <form action="#">
        <table>
            <tr>
                <td>ผู้ใช้ : </td>
                <?php echo "<td>$_SESSION[username]</td>" ?>
            </tr>
            <tr>
                <td>หมวดหมู่ : </td>
                <td>
                    <select name="category">
                    <option value="general">เรื่องทั่วไป</option>
                    <option value="study">เรื่องเรียน</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>หัวข้อ</td>
                <td><input type="text" name="new-head"></td>
            </tr>
            <tr>
                <td>เนื้อหา : </td>
                <td><textarea name="" id="" cols="21" rows="5"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="บันทึกข้อความ">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
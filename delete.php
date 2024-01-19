<?php
session_start();
if(isset($_SESSION['id']) && $_SESSION['role']=='a'){
    $id = ($_GET['id']);
    echo "ลบกรทู้ที่ $id";
    header("refresh:1; url=index.php");
    die();
}else{
    header("location: index.php");
}
?>
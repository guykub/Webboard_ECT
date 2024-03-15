<?php
include "conn.php";
if(isset($_SESSION['id']) && $_SESSION['role']=='a'){
    if(isset($_GET['del'])){
        $del_id = $_GET['del'];
        $sql = "DELETE FROM `post` WHERE id='$del_id'";
        $query = $conn->query($sql);
        $sql = "DELETE FROM `comment` WHERE post_id='$del_id'";
        $query = $conn->query($sql);
        if($query){
            echo "<script> 
            alert('ลบกระทู้สำเร็จ');
            window.location.href='index.php';
            </script>";
        }else{
            echo "<script> 
            alert('ลบกระทู้ไม่สำเร็จ');
            window.location.href='index.php';
            </script>";
        }
    }
}
?>
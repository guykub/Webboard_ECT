<?php include "conn.php" ?>
<?php
if(isset($_POST['user'])){
    $user = $_POST['user'];
    $password = sha1($_POST['pwd']);
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];

    $sql = "SELECT * FROM `user` WHERE `user`='$user'";
    $result=$conn->query($sql);
    if($result->rowCount()==1){
        $_SESSION['add_user']="error";

    }else if($_POST['pwd']!=$_POST['pwd2']){
        $_SESSION['add_user']="error";
    }else{
    $sql1 = "INSERT INTO `user`(`user`, `password`, `name`, `gender`, `email`, `role`) VALUES ('$user','$password','$name','$gender','$email','m')";
    $conn->exec($sql1);
    $_SESSION['add_user'] = "success";
    }
    $conn = null;
    header("location:register.php");
    die();
}
?>
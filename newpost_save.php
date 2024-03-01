<?php include "conn.php"; ?>
<?php 
if(isset($_POST['topic']) && isset($_SESSION['id'])){
    $cat = $_POST['category'];
    $topic = $_POST['topic'];
    $comment = $_POST['comment'];
    $sql = "INSERT INTO `post`(`title`, `content`, `post_date`, `cat_id`, `user_id`) VALUES ('$topic','$comment',NOW(),'$cat','$_SESSION[user_id]')";
    $conn->exec($sql);
    header("location:index.php");
    die();
}
else{
    header("location:login.php");
    die();
}
?>
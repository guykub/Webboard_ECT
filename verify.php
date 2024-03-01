<?php include "conn.php";?>
<?php 
if(isset($_SESSION['id'])){
    header("location: index.php");
    die();
}
$user = $_POST['user'];
$password = $_POST['pwd'];
$sql = "SELECT * FROM user where user='$user' and password=sha1('$password')";
$result = $conn->query($sql);
if($result->rowCount()==1){
    $data = $result->fetch(PDO:: FETCH_ASSOC);
    $_SESSION['user'] = $data['user'];
    $_SESSION['role'] = $data['role'];
    $_SESSION['user_id'] = $data['id'];
    $_SESSION['id'] = session_id();
    header("location:index.php");
    die();
}else{
    $_SESSION['error'] = "error";
    header("location:login.php");
    die();
}
$conn=null;
?>
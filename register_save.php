<?php
    $user = $_POST['user'];
    $password = $_POST['pwd'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];

    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");

    $sql = "INSERT INTO (user,password,name,gender,email,role) values ('$user','$password','$name','$gender','$email','m')";

    $conn->exec($sql);
    $conn = null;
?>
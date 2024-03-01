<?php
include "conn.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            font-family: sans-serif;
        }

        .text-center {
            text-align: center;
        }

        .login {
            float: right;
            padding-right: 20px;
        }
    </style>
</head>
<?php if (!isset($_SESSION['id'])) { ?>

    <body>
        <h1 class="text-center">Webboard</h1>
        <form action="post.php" method="get">
        <div class="container">
            <nav class="navbar bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#home"><i class="bi bi-house-door-fill"></i> Home</a>
                    <form class="d-flex">
                        <a href="login.php" class="navbar-brand"><i class="bi bi-box-arrow-in-left"></i> เข้าสู่ระบบ</a>
                    </form>
                </div>
            </nav><br>
                <nav class="nav navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse">
                            <span class="navbar-text">หมวดหมู่ : </span>
                            <ul class="navbar-nav">
                                <li class="nav-item-dropdown">
                                    <button href="#" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">ทั้งหมด</button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" class="dropdown-item">ทั้งหมด</a></li>
                                        <?php
                                        $sql="SELECT * FROM `category`";
                                        foreach($conn->query($sql) as $row){
                                            echo "<li><a class=dropdown-item href=#>$row[name]</a></li>";
                                        }
                                        $conn=null;
                                        ?>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav><br>
                <table class="table table-striped">
                    <?php 
                    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
                    $sql1="SELECT t3.name,t1.title,t1.id,t2.user,t1.post_date FROM `post` as t1 INNER JOIN `user` as t2 ON (t1.user_id=t2.id) INNER JOIN `category` as t3 ON (t1.cat_id=t3.id) ORDER BY t1.post_date DESC";
                    $result = $conn->query($sql1);
                    while($row = $result->fetch()){
                        echo "<tr><td>[$row[0]]<a href=post.php?id=$row[2] style=text-decoration:none>$row[1]</a><br>$row[3] - $row[4]</td></tr>";
                    }
                    $conn=null;
                    ?>
                </table>
            </form>
        </div>
        <!-- user&admin -->
    <?php } else { ?>
        <h1 class="text-center">Webboard</h1>
        <form action="post.php" method="get">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><i class="bi bi-house-door-fill"></i> Home</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo "<i class='bi bi-people-fill'></i> $_SESSION[user]" ?></a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="logout.php">ออกจากระบบ</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
                <nav class="nav navbar-expand-lg mt-3">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse">
                            <span class="navbar-text">หมวดหมู่ : </span>
                            <ul class="navbar-nav">
                                <li class="nav-item-dropdown">
                                    <button href="#" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">ทั้งหมด</button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" class="dropdown-item">ทั้งหมด</a></li>
                                        <?php
                                        $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
                                        $sql="SELECT * FROM `category`";
                                        foreach($conn->query($sql) as $row){
                                            echo "<li><a class=dropdown-item href=#>$row[name]</a></li>";
                                        }
                                        $conn=null;
                                        ?>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item dropdown">
                                    <a href="newpost.php" class="btn btn-success">สร้างกระทู้ใหม่</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav><br>
                <table class="table table-striped">
                <?php 
                    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
                    $sql1="SELECT t3.name,t1.title,t1.id,t2.user,t1.post_date FROM `post` as t1 INNER JOIN `user` as t2 ON (t1.user_id=t2.id) INNER JOIN `category` as t3 ON (t1.cat_id=t3.id) ORDER BY t1.post_date DESC";
                    $result = $conn->query($sql1);
                    while($row = $result->fetch()){
                        echo "<tr><td class='col-11'>[$row[0]]<a href=post.php?id=$row[2] style=text-decoration:none>$row[1]</a><br>$row[3] - $row[4]</td>";
                        if (isset($_SESSION['id']) && $_SESSION['role'] == 'a') {
                            echo "<td class='col-1'><a href='delete.php?id=$row[2]' class='btn btn-danger'>ลบ</a></td></tr>";
                    }
                }
                    $conn=null;
                    ?>
                        <?php } ?>
                </table>
            </form>
        </body>
</html>
<?php
    include "conn.php";
    $stmt = $conn->prepare("SELECT post.title,post.content,post_date,user.user FROM post INNER JOIN user ON post.user_id=user.id where post.id=$_GET[id]");
    $stmt->execute();
    $rs = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
    <div class="container-lg">
        <div class="mt-3"><h1>Webboard KakKak</h1></div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php"><i class="bi bi-house-door-fill"></i> Home</a>
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
            <?php foreach($rs as $row){ ?>
            <div class="row mt-4">
                <div class="col-lg-3 col-md-2 col-sm-1"></div>
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <div class="card border-primary">
                        <div class="card-header bg-primary text-white"><?=$row['title'];?></div>
                        <div class="card-body">
                            <form action="post_save.php" method="post">
                                <input type="hidden" name="post_id" value="<?=$_GET['id'];?>">
                                <div class="row mb-3">
                                    <div><?=$row['content']?></div>
                                </div>
                                <div class="row">
                                    <div><?=$row['user'];?> <?=$row['post_date']?></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-lg-3 col-md-2 col-sm-1"></div>
            </div><?php }?>
            <?php foreach($rs as $row){ ?>
            <div class="row mt-4">
                <div class="col-lg-3 col-md-2 col-sm-1"></div>
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <div class="card border-info">
                        <div class="card-header bg-info text-white"><?=$row['title'];?></div>
                        <div class="card-body">
                            <form action="post_save.php" method="post">
                                <input type="hidden" name="post_id" value="<?=$_GET['id'];?>">
                                <div class="row mb-3">
                                    <div><?=$row['content']?></div>
                                </div>
                                <div class="row">
                                    <div><?=$_SESSION['user'];?> <?=$row['post_date']?></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-lg-3 col-md-2 col-sm-1"></div>
            </div><?php }?>
            <div class="row mt-4">
                <div class="col-lg-3 col-md-2 col-sm-1"></div>
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <div class="card border-success">
                        <div class="card-header bg-success text-white">แสดงความคิดเห็น</div>
                        <div class="card-body">
                            <form action="post_save.php" method="post">
                                <input type="hidden" name="post_id" value="<?=$_GET['id'];?>">
                                <div class="row mb-3 justify-content-center">
                                    <div class="col-lg-10"><textarea name="comment" rows="8" class="form-control" required></textarea></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 d-flex justify-content-center">
                                        <button type="submit" class="btn btn-success btn-sm text-white me-2"><i class="bi bi-box-arrow-up-right"></i> ส่งข้อความ</button>
                                        <button type="reset" class="btn btn-success btn-sm text-white"><i class="bi bi-x-square"></i> ยกเลิก</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-lg-3 col-md-2 col-sm-1"></div>
            </div>
</body>
</html>
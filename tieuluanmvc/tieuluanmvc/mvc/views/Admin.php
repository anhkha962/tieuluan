<!DOCTYPE html>
<html lang="en">
<?php 
    if(!isset($_SESSION['username'])){
        header('Location:./Dangnhap');
    }
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/tieuluanmvc/mvc/public/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="/tieuluanmvc/mvc/public/bootstrap.css">

    <title>Admin</title>
</head>

<body>
    <body id="body-pd" class="body-pd">
        <?php require_once "./mvc/views/AdminPages/".$data["Header"].".php"; ?>
        <?php require_once "./mvc/views/AdminPages/".$data["Menu"].".php"; ?>
        <?php require_once "./mvc/views/AdminPages/".$data["Content"].".php"; ?>
    </body>
    <script src="assets/lib/jquery-3.5.1.min.js"></script>
    <script src="assets/lib/bootstrap.js"></script>
    <script src="assets/js/main.js"></script>
</html>
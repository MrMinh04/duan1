<?php
session_start();
if (!$_SESSION['username']) {
    header("location: login.php");
    die;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMD store</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div class="container">
        <?php if (isset($_SESSION['username'])) : ?>
            <div>
                WELCOME <b><?= $_SESSION['username'] ?></b>
                <a href="logout.php">Thoát</a>
            </div>
        <?php endif ?>

        <div style="color: green;">
            <?= $_COOKIE['message'] ?? '' ?>
        </div>
        <header>
            <h1>ADMIN</h1>
            <nav>
                <a href="index.php">Trang chủ</a>
                <a href="index.php?act=list_danh_muc">Danh mục</a>
                <a href="index.php?act=list_san_pham">Sản phẩm</a>
                <a href="index.php?act=list_don_hang">Đơn hàng</a>
                <a href="index.php?act=account">Account</a>
                <a href="../view/index.php">Vào trang web</a>
            </nav>
        </header>
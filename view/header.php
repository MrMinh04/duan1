<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMĐ STORE</title>
    <link rel="stylesheet" href="index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<div style="color: green;">
        <?= $_COOKIE['message'] ?? '' ?>
</div>
    <div class="container">
        <header>
            <section class="logo">
                <img src="../images/logo_nen_den.png" alt="" height="50px">
            </section>
            <nav class="menu">
                <a id="home" href="index.php">Home</a>
                <a href="#">About</a>
                <a href="#">Join us</a>
                <a href="#">Help</a>
                <a href="#">Cart</a>
                <a href="#">Account</a>
            </nav>
        </header>
        <section class="thanhDieuHuong">
            <section class="logo2">
                <img src="../images/logo_nen-trang.png" alt="" height="50px">
            </section>
            <nav class="menu2">
                <a href="index.php?act=men" class="men">Men</a>
                <a href="index.php?act=women" class="women">Women</a>
                <a href="index.php?act=kid" class="kid">Kid</a>
                <a href="index.php?act=sale" class="sale">Sale</a>
            </nav>
            <section class="timKiem">
                    <form action="" method="get" class="form" required>
                        <input type="text" required class="input">
                        <i class="icon"><i class='bx bx-search'></i></i>
                    </form>
                    <a href="index.php?act=cart_home" class="icon" id="cart"><i class='bx bx-cart'></i></a>
            </section>
        </section>
        
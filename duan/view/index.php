<?php
session_start();
include "../model/pdo.php";
$sql_new_product = "SELECT * FROM product ";
$new_product = pdo_query($sql_new_product);
$sql_what_hot = "SELECT * FROM product WHERE product_category=2";
$what_hot = pdo_query($sql_what_hot);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                <img src="images/logo_nen_den.png" alt="" height="50px">
            </section>
            <nav class="menu">
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Join us</a>
                <a href="#">Help</a>
                <a href="#">Cart</a>
                <a href="#">Account</a>
            </nav>
        </header>
        <section class="thanhDieuHuong">
            <section class="logo2">
                <img src="images/logo_nen-trang.png" alt="" height="50px">
            </section>
            <nav class="menu2">
                <a href="men.php">Men</a>
                <a href="#">Women</a>
                <a href="#">Kid</a>
                <a href="#">Sale</a>
            </nav>
            <section class="timKiem">
                    <form action="" method="get" class="form" required>
                        <input type="text" required class="input">
                        <i class="icon"><i class='bx bx-search'></i></i>
                    </form>
                    <a href="" class="icon" id="cart"><i class='bx bx-cart'></i></a>
            </section>
        </section>
        <section class="banner" style="position: relative;">
            <img id="slider"src="images/banner5.jpg" alt="">
            <div onclick="back()" style="position: absolute;" class="back">
                <i class='bx bx-chevron-left'></i>
            </div>
            <div onclick="next()" style="position: absolute;" class="next">
                <i class='bx bx-chevron-right'></i>
            </div>
        </section>
        <section class="tieuDe">
            <h2>NEW PRODUCT</h2>
        </section>
        <section class="content">
            <?php foreach ($new_product as $key => $value): ?>
            <section class="sp">
                <img style="height: 270px; width: 270px;" src="images/<?=$value['product_image']?>" alt="">
                <section class="thongTin">
                    <h2><?=$value['product_name']?></h2>
                    <h3><?=$value['product_price']?></h3>
                    <p><?=$value['product_describe']?></p>
                    <div class="buy_cart">
                    <button class="buy"><h4>Buy now</h4></button>
                    <a href="" class="icon" id="addCart"><i class='bx bx-cart'></i></a></h4>
                    </div>
                </section>
            </section>
            <?php endforeach ?>
        </section>
        <section class="tieuDe">
            <h2>COMING SOON</h2>
        </section>
        <section class="coming_soon">
            <img src="images/coming soon.png" alt="">
        </section>
        <section class="tieuDe">
            <h2>WHAT'S HOT</h2>
        </section>
        <section class="content2">
            <?php foreach ($what_hot as $key => $value): ?>
            <section class="sp">
                <img style="height: 270px; width: 270px;" src="images/<?=$value['product_image']?>" alt="">
                <section class="thongTin">
                    <h2><?=$value['product_name']?></h2>
                    <h3><?=$value['product_price']?></h3>
                    <p><?=$value['product_describe']?></p>
                    <div class="buy_cart">
                    <button class="buy"><h4>Buy now</h4></button>
                    <a href="" class="icon" id="addCart"><i class='bx bx-cart'></i></a>
                    </div>
                </section>
            </section>
            <?php endforeach ?>
        </section>
        <section class="tieuDe">
            <h2>WHO ARE YOU SHOPPING FOR?</h2>
        </section>
        <section class="menu3">
            <div class="menu3_con" style="position: relative;">
                <img src="images/Rectangle 8.png" alt="">
                <a href="women.php"><button class="menu3_chau" style="position: absolute;">Women's</button></a>
            </div>
            <div class="menu3_con" style="position: relative;">
                <img src="images/Rectangle 9.png" alt="">
                <a href="men.php"><button class="menu3_chau" style="position: absolute;">Men's</button></a>
            </div>
            <div class="menu3_con" style="position: relative;">
                <img src="images/Rectangle 10.png" alt="">
                <a href="kid.php"><button class="menu3_chau" style="position: absolute;">Chidrent's</button></a>
            </div>
        </section>
        <footer>
            <div class="footer1">
                <div class="footer1_con">
                    <div class="a"><a href="#">FIND A STORE</a><br></div>
                    <div class="a"><a href="#">BECOME A MEMBER</a><br></div>
                    <div class="a"><a href="#">Send Us Feedback</a><br></div>
                </div>
                <div class="footer1_con">
                    <div class="a"><a href="#">GET HELP</a><br></div>
                    <div class="aa"><a href="#">Delivery</a><br></div>
                    <div class="aa"><a href="#">Order Status</a><br></div>
                    <div class="aa"><a href="#">Returns</a><br></div>
                    <div class="aa"><a href="#">Payment Options</a><br></div>
                    <div class="aa"><a href="#">Contact Us</a><br></div>
                </div>
                <div class="footer1_con">
                    <div class="a"><a href="#">ABOUT HMĐ STORE</a><br></div>
                    <div class="aa"><a href="#">News</a><br></div>
                    <div class="aa"><a href="#">Careers</a><br></div>
                    <div class="aa"><a href="#">Investors</a><br></div>
                    <div class="aa"><a href="#">Sustainability</a><br></div>
                </div>
                <div class="rong" style="width: 20px;">
                </div>
                <div class="mxh">
                    <a href="https://www.facebook.com/mr.minh04" class="icon" id="aaa">
                        <i class='bx bxl-facebook-circle'></i></a>
                    <a href="https://www.instagram.com/mr_minh04/" class="icon" id="aaa">
                        <i class='bx bxl-instagram'></i></a>
                    <a href="https://www.youtube.com/channel/UCrZOlzK3dPIoGZW6zdTDEoA" class="icon" id="aaa">
                        <i class='bx bxl-youtube'></i></a>
                    <a href="https://www.tiktok.com/@mr_minh04" class="icon" id="aaa">
                        <i class='bx bxl-tiktok' ></i></a>
                </div>
            </div>
        </footer>
    </div>
    <script>
        var images = ["images/banner5.jpg","images/banner6.jpg","images/banner7.jpg","images/banner3.jpg"];
        var num = 0;
        function next(){
            var silder = document.getElementById("slider");
            num++;
            if(num >= images.length){
                num = 0;
            }
            silder.src = images[num];
        }
        function back(){
            var silder = document.getElementById("slider");
            num--;
            if(num < 0){
                num = images.length-1;
            }
            slider.src = images[num];
        }
        setInterval(next,4000);
    </script>
</body>
</html>
<?php
session_start();
require_once "admin/connection.php";
$sql_men_product = "SELECT * FROM men_product";
$sql_men_featured = "SELECT * FROM men_featured";
$men_product = $conn -> query($sql_men_product)->fetchAll();
$men_featured = $conn -> query($sql_men_featured)->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="men.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <header>
            <section class="logo">
                <img src="images/logo_nen_den.png" alt="" height="50px">
            </section>
            <nav class="menu">
                <a href="index.php">Home</a>
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
                <a href="women.php">Women</a>
                <a href="kid.php">Kid</a>
                <a href="sale.php" style="text-decoration: underline 2px black;">Sale</a>
            </nav>
            <section class="timKiem">
                    <form action="" method="get" class="form">
                        <input type="text" required class="input">
                        <i class="icon"><i class='bx bx-search'></i></i>
                    </form>
                    <a href="" class="icon" id="cart"><i class='bx bx-cart'></i></a>
            </section>
        </section>
        <section class="banner" style="position: relative;">
            <img id="slider"src="images/banner_men.jpg" alt="">
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
            <?php foreach ($men_product as $key => $value): ?>
            <section class="sp">
                <img style="height: 270px; width: 270px;" src="images/<?=$value['men_product_image']?>" alt="">
                <section class="thongTin">
                    <h2><?=$value['men_product_name']?></h2>
                    <h3><?=$value['men_product_price']?></h3>
                    <p><?=$value['men_product_describe']?></p>
                    <div class="buy_cart">
                    <button class="buy"><h4>Buy now</h4></button>
                    <a href="" class="icon" id="addCart"><i class='bx bx-cart'></i></a></h4>
                    </div>
                </section>
            </section>
            <?php endforeach ?>
        </section>
        <section class="tieuDe">
            <h2>FEATURED</h2>
        </section>
        <section class="content2">
            <?php foreach ($men_featured as $key => $value): ?>
            <section class="sp">
                <img style="height: 270px; width: 270px;" src="images/<?=$value['men_featured_image']?>" alt="">
                <section class="thongTin">
                    <h2><?=$value['men_featured_name']?></h2>
                    <h3><?=$value['men_featured_price']?></h3>
                    <p><?=$value['men_featured_describe']?></p>
                    <div class="buy_cart">
                    <button class="buy"><h4>Buy now</h4></button>
                    <a href="" class="icon" id="addCart"><i class='bx bx-cart'></i></a>
                    </div>
                </section>
            </section>
            <?php endforeach ?>
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
        var images = ["images/banner_men.jpg","images/banner_men2.jpg","images/banner_men3.jpg"];
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
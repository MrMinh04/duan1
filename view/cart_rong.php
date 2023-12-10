<head>
<link rel="stylesheet" href="giohang.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<?php
$tong=0;
?>
<center>
<div class="boxto_rong">
    <img width="500px" src="../images/cart_rong.png" alt="">
</div>
</center>
<section class="tieuDe">
    <h2>NEW PRODUCT</h2>
</section>
<section class="content">
    <?php foreach ($new_product as $key => $value): ?>
    <a href="index.php?act=sanphamct&product_id=<?=$value['product_id']?>">
    <section class="sp">
        <img style="height: 270px; width: 270px;" src="../images/<?=$value['product_image']?>" alt="">
        <section class="thongTin">
            <h2><?=$value['product_name']?></h2>
            <h3><?=$value['product_price']?></h3>
            <p><?=$value['product_describe']?></p>
            <div class="seemore">
                <a href="index.php?act=sanphamct&product_id=<?=$value['product_id']?>"><h4>See more</h4></a>
            </div>
        </section>
    </section>
    </a>
    <?php endforeach ?>
</section>



   
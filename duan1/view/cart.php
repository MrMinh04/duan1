<head>
<link rel="stylesheet" href="giohang.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<?php
$tong=0;
$i = 0;
?>
<div class="boxto">
  <div class="boxtrai">
    <h2 style="margin-bottom: 10px;">YOUR CART</h2>
    <div>
    <?php foreach(($_SESSION['my_cart']) as $cart ):?>
    <div class="sanpham">
    <?php
    $tong = $tong + $cart['5'];
    
    ?>
      <div>
        <img src="../images/<?= $cart['3']?>" alt="">
      </div>
      <div class="tt">
        <h3><?= $cart['1']?></h3><br>
        <h4><?= $cart['2']?> VND</h4><br>
        <h5>Kích cỡ: <?= $cart['7']?></h5><br>
        <h5>Màu sắc: <?= $cart['6']?></h5><br>
        <h5>Số lượng: <?= $cart['4']?></h5><br>
        <h4 style="border-bottom: 1px solid gray;">Thành tiền: <?= $cart['5']?> VND</h4>
      </div>
      <div>
      <a href="index.php?act=delcart&idcart=<?=$i?>"><i style="font-size: 20px;" class='bx bxs-message-square-x'></i></a>
      </div>
      
    </div>
    <?php $i+=1?>
    <?php endforeach?>
    </div>
  </div>
  <div class="boxphai">
    <center><h2 style="margin-top: 10px;">SUMMARY</h2></center><br>
    <h3>Tóm tắt đơn hàng</h3><br>
    <h4>Thành tiền sản phẩm: <?= $tong?> VND</h4><br>
    <h4>Phí vận chuyển: MIỄN PHÍ</h4><br>
    <h4>Tổng cộng: <?= $tong?> VND</h4><br>
    <a href="index.php?act=checkout"><button class="checkout">Guest Checkout <i class='bx bxs-cart'></i></button></a>
  </div>
</div>

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



   
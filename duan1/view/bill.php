<head>
    <link rel="stylesheet" href="bill.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<div class="boxto">
    <div class="box1">
        <h2>Thông tin đơn hàng</h2>
        <?php foreach ($orderr as $or) : ?>
        <h3>Mã đơn hàng: FPL-DA1-<?= $or['order_id']?></h3>
        <h3>Người nhận: <?= $or['receive_name']?></h3>
        <h3>Số điện thoại: <?= $or['receive_sdt']?></h3>
        <h3>Địa chỉ: <?= $or['receive_address']?></h3>
        <h3>Ngày đặt hàng: <?= $or['order_date']?></h3>
        <h3>Phương thức thanh toán: <?= $or['order_pttt']?></h3>
        <?php endforeach ?>
    </div>
    <div class="box2">
        <div class="ttHang">
            <div>
                <h2>Sản phẩm của bạn</h2>
                            <?php foreach ($orderr_cart as $orc ):?>
                <div class="sanpham">
                            <?php $product_id = $orc['product_id']?>
                            <?php $orderr_cart_product = select_orderr_cart_product($product_id)?>
                            <?php foreach ($orderr_cart_product as $orcp):?>
                    <div>
                        <img src="../images/<?= $orcp['product_image']?>" alt="">
                    </div>
                    <div class="tt">
                        <h3 style="font-weight: 900;"><?= $orcp['product_name']?></h3>
                        <h4 style="font-weight: 600;" ><?= $orcp['product_price']?> VND</h4>
                       
                            <?php endforeach?>
                    <h5>Kích cỡ: <?= $orc['product_size']?></h5>
                    <h5>Màu sắc: <?= $orc['product_color']?></h5>
                    <h5>Số lượng: <?= $orc['product_quantity']?></h5>
                    <h4 style="font-weight: 600;">Thành tiền: <?= $orc['product_thanhtien']?> VND</h4>
                    </div>
                           
                </div>
                            <?php endforeach?>
            </div>
            <?php foreach ($orderr as $or) : ?>
            <h3 style="font-weight: 600;">Tổng tiền phải trả: <?= $or['totol']?> VND</h3>
            <?php endforeach ?>

        </div>

    </div>
</div>
      
<section class="tieuDe">
    <h2>ALL SHOES</h2>
</section>
<section class="content2">
    <?php foreach ($product_view as $key => $value): ?>
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
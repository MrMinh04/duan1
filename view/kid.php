<style>
    .kid {
        text-decoration: underline;
    }
</style>
        <section class="banner" style="position: relative;">
            <img id="slider"src="../images/banner_kid4.jpg" alt="">
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
            <?php foreach ($kid_product as $key => $value): ?>
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
        <section class="tieuDe">
            <h2>FEATURED</h2>
        </section>
        <section class="content2">
            <?php foreach ($kid_featured as $key => $value): ?>
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
<script>
    var images = ["../images/banner_kid4.jpg","../images/banner_kid2.jpg","../images/banner_kid7.png","../images/banner_kid.jpg"];
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
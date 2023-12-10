<style>
    #home {
        color: rgb(185, 21, 21);
        font-weight: 900;
    }
</style>

<section class="banner" style="position: relative;">
            <img id="slider"src="../images/banner10.png" alt="">
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
        <section class="allShoes">
            <a href="index.php?act=allsanpham">All SHOES</a>
        </section>
        <section class="tieuDe">
            <h2>COMING SOON</h2>
        </section>
        <section class="coming_soon">
            <img src="../images/coming soon.png" alt="">
        </section>
        <section class="tieuDe">
            <h2>Don't Miss</h2>
        </section>
        <section class="banner_video">
            <video controls autoplay loop src="../images/b.mp4"></video>
        </section>
        <section class="tieuDe">
            <h2>WHAT'S HOT</h2>
        </section>
        <section class="content2">
            <?php foreach ($what_hot as $key => $value): ?>
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
            <h2>WHO ARE YOU SHOPPING FOR?</h2>
        </section>
        <section class="menu3">
            <div class="menu3_con" style="position: relative;">
                <img src="../images/Rectangle 8.png" alt="">
                <a href="index.php?act=women"><button class="menu3_chau" style="position: absolute;">Women's</button></a>
            </div>
            <div class="menu3_con" style="position: relative;">
                <img src="../images/Rectangle 9.png" alt="">
                <a href="index.php?act=men"><button class="menu3_chau" style="position: absolute;">Men's</button></a>
            </div>
            <div class="menu3_con" style="position: relative;">
                <img src="../images/Rectangle 10.png" alt="">
                <a href="index.php?act=kid"><button class="menu3_chau" style="position: absolute;">Chidrent's</button></a>
            </div>
        </section>

<script>
    var images = ["../images/banner10.png","../images/banner8.png","../images/banner11.png","../images/banner12.png", "../images/banner13.png"];
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
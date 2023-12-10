<head>
<link rel="stylesheet" href="chitietsp.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<section class="boxto">
<?php foreach ($update as $up): ?>
      <section class="box1">
        <div class="box1_1">
            <div class="product">
              <img src="../images/<?= $up['product_image']?>" alt="">
            </div>
            <div class="product">
              <img src="../images/<?= $up['product_image2']?>" alt="">
            </div>
        </div>
        <div class="box1_1">
            <div class="product">
              <img src="../images/<?= $up['product_image3']?>" alt="">
            </div>
            <div class="product">
              <img src="../images/<?= $up['product_image4']?>" alt="">
            </div>
        </div>
      </section>
      <?php endforeach?>
      <section class="box2">
        <div class="noidung">
        
          <?php foreach ($update as $up): ?>
            <h1><?= $up['product_name']?></h1><br>
            <h3 style="color: red;"><?= $up['product_price']?></h3><br>
            <p><?= $up['product_describe']?></p><br>
            <?php endforeach?>
          <!-- <h3>Kích cỡ:</h3><br>
          <table border="1">
            <tr>
              <td>36</td>
              <td>37</td>
              <td>38</td>
            </tr>
            <tr>
              <td>39</td>
              <td>40</td>
              <td>41</td>
            </tr>
            <tr>
              <td>42</td>
              <td>43</td>
              <td>44</td>
            </tr>
          </table> -->
          
          <?php foreach ($update as $up): ?>
          <form action="index.php?act=cart" method="post">
            <input type="hidden" name="product_id" value="<?= $up['product_id']?>">
            <input type="hidden" name="product_name" value="<?= $up['product_name']?>">
            <input type="hidden" name="product_image" value="<?= $up['product_image']?>">
            <input type="hidden" name="product_price" value="<?= $up['product_price']?>">

            <h3>Các màu có sẵn:</h3>
            <?php foreach ($color as $cl): ?>
            <input type="radio" name="color" id="" value="<?= $cl['color_name']?>" required><?= $cl['color_name']?>
            <?php endforeach?>

            <h3>Kích cỡ:</h3>
            <?php foreach ($size as $si): ?>
            <input type="radio" name="size" id="" value="<?= $si['size_name']?>" required><?= $si['size_name']?>
            <?php endforeach?><br>

            <h3>Số lượng:</h3>
            <input type="number" name="sl" style="border: 1px solid black;" min="1" required>
            
            <input type="submit" name="addtocart" value="Add to cart">
          </form>
          <?php endforeach?>
          <br>
          
        </div>
  
      </section>
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
<script>
  var color =document.getElementsByName('color');
</script>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật Sản Phẩm</title>
</head>

<body>
    
    <h2>Cập nhật Sản Phẩm</h2>
    <form action="index.php?act=update_san_pham" method="post" enctype="multipart/form-data">
        <?php foreach ($update as $up): ?>
        Product_ID: <?= $up['product_id']?>
        <br>
        Product_Name: <input type="text" required name="product_name" id="" value="<?= $up['product_name']?>">
        <br>
        product_image: <input type="file" required name="product_image" id="">
        <img src="../images/<?= $up['product_image'] ?>" width="110">
        <br>
        product_price: <input type="number" required name="product_price" id="" value="<?= $up['product_price']?>">
        <br>
        product_describe: <textarea name="product_describe" id="" cols="90" rows="10"><?= $up['product_describe']?></textarea>
        <br>
        product_quantity: <input type="number" required name="product_quantity" id="" value="<?= $up['product_quantity']?>">
        <br>
        <?php endforeach ?>
        <br>
        Category:
        <select name="product_category" id="product_category">
            <?php foreach ($category as $ct) : ?>
                <option value="<?= $ct['category_id'] ?>"><?= $ct['category_name'] ?></option>
            <?php endforeach ?>
        </select>
        <br>
        <input type="hidden" name="product_id" value="<?= $up['product_id']?>">
        <input type="submit" name="update_product" value="Cập nhật sản phẩm">
        <input type="reset" value="Nhập lại"> 
        <a href="index.php?act=list_san_pham"><input type="button" value="Danh sách sản phẩm"></a>
        <?php if(isset($thongbao)&&($thongbao!=""))
            echo $thongbao; 
        ?>
    </form>
</body>

</html>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sản Phẩm</title>
</head>

<body>
    
    <h2>Thêm Sản Phẩm</h2>
    <form action="index.php?act=add_san_pham" method="post" enctype="multipart/form-data">

        Product_ID: <input type="number" name="product_id" id="">
        <br>
        Product_Name: <input type="text" required name="product_name" id="">
        <br>
        product_image: <input type="file" required name="product_image" id="">
        <br>
        product_price: <input type="number" required name="product_price" id="">
        <br>
        product_describe: <textarea name="product_describe" id="" cols="90" rows="10"></textarea>
        <br>
        product_quantity: <input type="number" required name="product_quantity" id="">
        <br>
        Category:
        <select name="product_category" id="product_category">
            <?php foreach ($category as $ct) : ?>
                <option value="<?= $ct['category_id'] ?>"><?= $ct['category_name'] ?></option>
            <?php endforeach ?>
        </select>
        <input type="submit" name="add_product" value="Thêm mới">
        <?php if(isset($thongbao)&&($thongbao!=""))
            echo $thongbao; 
        ?>
    </form>
</body>

</html>
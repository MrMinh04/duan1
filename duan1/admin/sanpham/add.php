<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sản Phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
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
        product_describe: <textarea name="product_description" id="" cols="90" rows="10"></textarea>
        <br>
        product_quantity: <input type="number" required name="product_quantity" id="">
        <br>
        product_color: <select name="product_color" id="product_color">
            <?php foreach ($color as $cl) : ?>
                <option value="">Chọn màu</option>
                <option value="<?= $cl['color_id'] ?>"><?= $cl['color_name'] ?></option>
            <?php endforeach ?>
        </select>
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
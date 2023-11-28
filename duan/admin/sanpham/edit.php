<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật Sản Phẩm</title>
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
    
    <h2>Cập nhật Sản Phẩm</h2>
    <form action="index.php?act=update_san_pham" method="post" enctype="multipart/form-data">
        <?php foreach ($update as $up): ?>
        Product_ID: <input type="number" name="product_id" id="" value="<?= $up['product_id']?>">
        <br>
        Product_Name: <input type="text" required name="product_name" id="" value="<?= $up['product_name']?>">
        <br>
        product_image: <input type="file" required name="product_image" id="" value="<?= $up['product_image']?>">
        <br>
        product_price: <input type="number" required name="product_price" id="" value="<?= $up['product_price']?>">
        <br>
        product_describe: <textarea name="product_describe" id="" cols="90" rows="10" value="<?= $up['product_describe']?>"></textarea>
        <br>
        product_quantity: <input type="number" required name="product_quantity" id="" value="<?= $up['product_quantity']?>">
        <br>
        <?php endforeach ?>
        


        
        product_color: <select name="product_color" id="product_color">
            <?php foreach ($color as $cl) : ?>
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
        
        <input type="submit" name="update_product" value="Cập nhật sản phẩm">
        <input type="reset" value="Nhập lại"> 
        <a href="index.php?act=list_san_pham"><input type="button" value="Danh sách sản phẩm"></a>
        <?php if(isset($thongbao)&&($thongbao!=""))
            echo $thongbao; 
        ?>
    </form>
</body>

</html>
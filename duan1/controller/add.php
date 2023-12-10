<?php
session_start();
require_once "connection.php";
if (!$conn) {
    die("Kết nối đến CSDL thất bại: " . $conn->errorInfo()[2]);
}
$sqlCategory = "SELECT * FROM category";
$stmtCategory = $conn->query($sqlCategory);
$category = $stmtCategory->fetchAll(PDO::FETCH_ASSOC);

$sqlColor = "SELECT * FROM color";
$stmtColor = $conn->query($sqlColor);
$color = $stmtColor->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $productName = $_POST["product_name"];
    $productImage = $_POST["product_image"];
    $productPrice = $_POST["product_price"];
    $productDescribe = $_POST["product_describe"];
    $productQuantity = $_POST["product_quantity"];
    $productColor = $_POST["product_color"];
    $productCategory = $_POST["product_category"]; 

    $productImage = $_FILES["product_image"]["name"];
    $targetDirectory = "images/";
    $targetFilePath = $targetDirectory . $productImage;
    move_uploaded_file($_FILES["product_image"]["tmp_name"], $targetFilePath);

    try {
        
        $sql = "INSERT INTO product (product_name, product_image, product_price, product_describe, product_quantity, product_color, product_category) 
            VALUES (:product_name, :product_image, :product_price, :product_describe, :product_quantity, :product_color, :product_category)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':product_name', $productName);
        $stmt->bindParam(':product_image', $productImage);
        $stmt->bindParam(':product_price', $productPrice);
        $stmt->bindParam(':product_describe', $productDescribe);
        $stmt->bindParam(':product_quantity', $productQuantity);
        $stmt->bindParam(':product_color', $productColor);
        $stmt->bindParam(':product_category', $productCategory);

        
        if ($stmt->execute()) {
            $_SESSION['message'] = "Thêm sản phẩm thành công!";
        } else {
            $_SESSION['message'] = "Lỗi khi thêm sản phẩm!";
        }

    } catch (PDOException $e) {
        $_SESSION['message'] = "Lỗi PDO: " . $e->getMessage();
    }

    header("location: add_product.php");
    exit();
}

?>



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
    <form action="" method="post" enctype="multipart/form-data">

        Product_ID: <input type="number" name="product_id" id="">
        <br>
        Product_Name: <input type="text" name="product_name" id="">
        <br>
        product_image: <input type="file" name="product_image" id="">
        <br>
        product_price: <input type="number" name="product_price" id="">
        <br>
        product_describe: <textarea name="description" id="" cols="90" rows="10"></textarea>
        <br>
        product_quantity: <input type="number" name="product_quantity" id="">
        <br>
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
        <button type="submit">Thêm Sản Phẩm</button>
    </form>
</body>

</html>
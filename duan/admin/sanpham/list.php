<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duan1</title>
    <style>
        body {
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: small;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
            font-size: 14px;
        }

        th {
            background-color: green;
            color: white;
            
        }

        td img {
            max-width: 100px;
            max-height: 100px;
        }

        div.message {
            color: green;
            margin-bottom: 10px;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php if (isset($_SESSION['username'])) : ?>
            <div>
                WELCOME <b><?= $_SESSION['username'] ?></b>
                <a href="logout.php">Thoát</a>
            </div>
        <?php endif ?>

        <div style="color: green;">
            <?= $_COOKIE['message'] ?? '' ?>
        </div>
    <table border="1">
        <tr>
            <th>product_id</th>
            <th>product_name</th>
            <th>product_image</th>
            <th>product_price</th>
            <th>product_describe</th>
            <th>product_quantity</th>
            <th>product_color</th>
            <th>product_category</th>
            <th>
                <a href="index.php?act=add_san_pham">Thêm</a>
            </th>
        </tr>
        <?php foreach ($product as $pr) : ?>
            <tr>
                <td><?= $pr['product_id'] ?></td>
                <td><?= $pr['product_name'] ?></td>
                <td>
                    <img src="../images/<?= $pr['product_image'] ?>" width="110">
                </td>
                <td><?= $pr['product_price'] ?></td>
                <td><?= $pr['product_describe'] ?></td>
                <td><?= $pr['product_quantity'] ?></td>
                <td><?= $pr['product_color'] ?></td>
                <td><?= $pr['product_category'] ?></td>
                <td>
                    <a href="index.php?act=edit_san_pham&product_id=<?= $pr['product_id'] ?>">Sửa</a>
                    <a onclick="return confirm('Bạn có muốn xóa không?')" href="index.php?act=delete_san_pham&product_id=<?= $pr['product_id'] ?>">Xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
        
        
    </table>
</body>
</html>

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
    <div style="color: green;">
        <?= $_COOKIE['message'] ?? '' ?>
    </div>
    <h2>Danh sách danh mục</h2>
    <table border="1">
        <tr>
            <th>category_ID</th>
            <th>category_name</th>
            <th>
                <a href="index.php?act=add_danh_muc">Thêm</a>
            </th>
        </tr>
        <?php foreach ($category as $ct) : ?>
            <tr>
                <td><?= $ct['category_id'] ?></td>
                <td><?= $ct['category_name'] ?></td>
                <td>
                    <a href="index.php?act=edit_danh_muc&category_id=<?= $ct['category_id'] ?>">Sửa</a>
                    <a onclick="return confirm('Bạn có muốn xóa không?')" href="index.php?act=delete_danh_muc&category_id=<?= $ct['category_id'] ?>">Xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
        
    </table>
</body>
</html>
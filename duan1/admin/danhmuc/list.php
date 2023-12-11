<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duan1</title>
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
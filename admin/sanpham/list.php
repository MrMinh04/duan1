<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duan1</title>
</head>
<body>
    <div>
    <h2>Tất cả sản phẩm</h2>
    <form action="index.php?act=list_san_pham" method="post" class="form" required>
        Tìm kiếm sản phẩm:
        <input type="text" required name="kw">
    </form>
    </div>
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
            <th>product_category</th>
            <th>
                <a href="index.php?act=add_san_pham">Thêm</a>
            </th>
        </tr>
        <?php foreach ($product_view as $pr) : ?>
            <tr>
                <td><?= $pr['product_id'] ?></td>
                <td><?= $pr['product_name'] ?></td>
                <td>
                    <img src="../images/<?= $pr['product_image'] ?>" width="110">
                </td>
                <td><?= $pr['product_price'] ?></td>
                <td><?= $pr['product_describe'] ?></td>
                <td><?= $pr['product_quantity'] ?></td>
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

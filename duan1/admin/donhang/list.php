<div>
    <h2>Tất cả đơn hàng</h2>
    </div>
        <div style="color: green;">
            <?= $_COOKIE['message'] ?? '' ?>
        </div>
    <table border="1">
        <tr>
            <th>Mã đơn hàng</th>
            <th>Người nhận</th>
            <th>Số điện thoại</th>
            <th>Địa chỉ</th>
            <th>Thời gian đặt hàng</th>
            <th>Phương thức thanh toán</th>
            <th>Tổng tiền</th>
        </tr>
        <?php foreach ($order as $ord) : ?>
            <tr>
                <td><?= $ord['order_id'] ?></td>
                <td><?= $ord['receive_name'] ?></td>
                <td><?= $ord['receive_sdt'] ?></td>
                <td><?= $ord['receive_address'] ?></td>
                <td><?= $ord['order_date'] ?></td>
                <td><?= $ord['order_pttt'] ?></td>
                <td><?= $ord['totol'] ?></td>
                <!-- <td>
                    <a href="index.php?act=edit_san_pham&product_id=<?= $ord['product_id'] ?>">Sửa</a>
                    <a onclick="return confirm('Bạn có muốn xóa không?')" href="index.php?act=delete_san_pham&product_id=<?= $ord['product_id'] ?>">Xóa</a>
                </td> -->
            </tr>
        <?php endforeach ?>
        
        
    </table>
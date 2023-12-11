<div>
    <h2>Tất cả tài khoản</h2>
    </div>
        <div style="color: green;">
            <?= $_COOKIE['message'] ?? '' ?>
        </div>
    <table border="1">
        <tr>
            <th>Mã tài khoản</th>
            <th>User</th>
            <th>Password</th>
            <th>Số điện thoại</th>
            <th>Email</th>
            <th>Địa chỉ</th>
        </tr>
        <?php foreach ($account as $acc) : ?>
            <tr>
                <td><?= $acc['account_id'] ?></td>
                <td><?= $acc['account_user'] ?></td>
                <td><?= $acc['account_pass'] ?></td>
                <td><?= $acc['account_sdt'] ?></td>
                <td><?= $acc['account_email'] ?></td>
                <td><?= $acc['account_address'] ?></td>
                
                <td>
                    <!-- <a href="index.php?act=edit_san_pham&product_id=<?= $ord['product_id'] ?>">Sửa</a> -->
                    <a onclick="return confirm('Bạn có muốn xóa không?')" href="index.php?act=delete_account&account_id=<?= $acc['account_id'] ?>">Xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
        
        
    </table>
<?php
session_start();
include "../model/pdo.php";

// Kiểm tra xem giỏ hàng có sản phẩm không
if (empty($_SESSION['giohang'])) {
    echo "Giỏ hàng của bạn trống. Vui lòng thêm sản phẩm vào giỏ hàng trước khi thanh toán.";
    exit();
}

// Xử lý khi người dùng nhấn nút "Đặt hàng"
if (isset($_POST['dongydathang'])) {
    // Lấy thông tin nhận hàng từ form
    $hoten = $_POST['hoten'];
    $diachi = $_POST['diachi'];
    $dienthoai = $_POST['dienthoai'];
    $email = $_POST['email'];

    // Tạo đơn hàng và lưu vào cơ sở dữ liệu (ở đây bạn cần triển khai logic lưu đơn hàng vào cơ sở dữ liệu)

    // Hiển thị thông báo hoặc chuyển hướng đến trang cảm ơn
    echo "Đơn hàng của bạn đã được đặt thành công. Cảm ơn bạn đã mua sắm!";
    // Hoặc có thể chuyển hướng đến trang cảm ơn
    // header("Location: thank_you_page.php");
    // exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="giohang.css">
</head>

<body>
    <div class="container">
        <header>
            <!-- Header content -->
        </header>
        <section class="thanhDieuHuong">
            <!-- Navigation content -->
        </section>
        <div class="boxcenter">
            <div class="row mb header">
                <h1>Thanh toán</h1>
            </div>
            <div class="row mb menu">
                <!-- Menu content -->
            </div>
            <div class="row mb ">
                <div class="boxtrai mr" id="bill">
                    <form action="cart.php" method="post">
                        <!-- Form thông tin nhận hàng -->
                        <div class="row">
                            <h1>Thông tin nhận hàng</h1>
                            <table class="thongtinnhanhang">
                                <!-- Các trường thông tin nhận hàng -->
                            </table>
                        </div>
                        <!-- Danh sách sản phẩm trong giỏ hàng -->
                        <div class="row mb">
                            <h1>Giỏ hàng của bạn</h1>
                            <table>
                                <!-- Hiển thị danh sách sản phẩm trong giỏ hàng -->
                            </table>
                        </div>
                        <div class="row mb">
                            <!-- Nút xác nhận đặt hàng -->
                            <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang">
                            <!-- Nút xóa giỏ hàng -->
                            <a href="cart.php?delcart=1"><input type="button" value="XÓA GIỎ HÀNG"></a>
                            <!-- Nút tiếp tục mua sắm -->
                            <a href="index.php"><input type="button" value="TIẾP TỤC MUA SẮM"></a>
                        </div>
                    </form>
                </div>
                <!-- Sidebar content -->
            </div>
            <div class="row mb footer">
                <!-- Footer content -->
            </div>
        </div>
    </div>

</body>

</html>

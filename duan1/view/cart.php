<?php
session_start();
include "../model/pdo.php"; // Bao gồm tệp chứa kết nối đến cơ sở dữ liệu

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action'])) {
    $action = $_GET['action'];

    switch ($action) {
        case 'add':
            addToCart($conn);
            break;

        // Thêm các trường hợp khác nếu cần
    }
}

function addToCart($conn) {
    if (isset($_GET['product_id'])) {
        $productId = $_GET['product_id'];

        // Sử dụng prepared statement để tránh tấn công SQL injection
        $sql = "INSERT INTO cart (product_id, quantity) VALUES (?, 1)";
        $stmt = $conn->prepare($sql);

        // Kiểm tra lỗi prepare
        if ($stmt === false) {
            die('Error preparing statement');
        }

        $stmt->bind_param('i', $productId);
        
        // Thực hiện truy vấn
        if ($stmt->execute()) {
            // Sản phẩm đã được thêm vào giỏ hàng thành công
            $_SESSION['message'] = 'Sản phẩm đã được thêm vào giỏ hàng thành công';
        } else {
            // Xử lý lỗi nếu cần
            $_SESSION['message'] = 'Lỗi khi thêm sản phẩm vào giỏ hàng';
        }

        $stmt->close();

        // Chuyển hướng người dùng về trang chính
        header('Location: index.php');
        exit();
    }
}

// Đóng kết nối đến cơ sở dữ liệu

?>

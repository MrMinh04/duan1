<?php
session_start();
require_once "connection.php";

if (!$conn) {
    die("Kết nối đến CSDL thất bại: " . $conn->errorInfo()[2]);
}

if (isset($_GET['product_id'])) {
    $productId = $_GET['product_id'];

    try {
        $sql = "DELETE FROM product WHERE product_id = :product_id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':product_id', $productId);

        if ($stmt->execute()) {
            $_SESSION['message'] = "Xóa sản phẩm thành công!";
        } else {
            $_SESSION['message'] = "Lỗi khi xóa sản phẩm!";
        }
    } catch (PDOException $e) {
        $_SESSION['message'] = "Lỗi PDO: " . $e->getMessage();
    }
}

header("location: index.php");
exit();
?>

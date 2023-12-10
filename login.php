<?php
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $conn = new mysqli('localhost', 'username', 'password', 'du_an_1');

    if ($conn->connect_error) {
        die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
    }

    
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($user_id, $hashed_password);
    $stmt->fetch();
    $stmt->close();

    // Kiểm tra mật khẩu
    if (password_verify($password, $hashed_password)) {
        $_SESSION['user_id'] = $user_id;
        header('Location: index.php');
        exit();
    } else {
        echo "Thông tin đăng nhập không đúng!";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>
<body>
    <h2>Đăng nhập</h2>
    <form method="post" action="index.php?act=login.php">
        <label for="username">Tên người dùng:</label>
        <input type="text" id="username" name="username" required><br>
        
        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Đăng nhập">
    </form>
</body>
</html>

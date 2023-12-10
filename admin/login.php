<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin' && $password == '123') {
        //Đăng nhập thành công
        //Lưu lại thông tin của người dùng vào session
        $_SESSION['username'] = $username;
        header("location: index.php");
        die;
    } else {
        $errors = "Tên đăng nhập hoặc mật khẩu không đúng";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div style="color: red;">
        <?= $errors ?? '' ?>
    </div>
    <form action="" method="post">
        Username: <input type="text" name="username" id="">
        <br><br>
        Passowrd: <input type="password" name="password" id="">
        <br><br>
        <button type="submit">Login</button>
    </form>
</body>

</html>
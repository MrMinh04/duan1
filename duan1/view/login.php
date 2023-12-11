<head>
    <link rel="stylesheet" href="account.css">
</head>
<center>
<div class="account">
    <img src="../images/logo_nen-trang.png" alt="">
    <h2>YOUR ACCOUNT<br> FOR EVERYTHING NIKE</h2>
    <form action="index.php?act=login" method="post">
        <input type="text" name="account_user" placeholder="User" required><br>
        <input type="password" name="account_pass" placeholder="Password" required>
    <div class="phu">
        <a href="">Forgotten your password?</a>
        <a href="index.php?act=register">Register</a>
    </div>
    <p>By logging in, you agree to Privacy Policy <br> and Terms of Use.</p>
        <input type="submit" name="login" value="Login">
    </form>
    <h2 style="color: red;"><?= $thongbao?></h2>
</div>
</center>
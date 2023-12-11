<head>
    <link rel="stylesheet" href="account.css">
</head>
<center>
<div class="account">
    <img src="../images/logo_nen-trang.png" alt="">
    <h2>BECOME A NIKE MEMBER</h2>
    <p>Create your Nike Member profile and get first <br> access to the very best of Nike products, inspiration <br>and community.</p>
    <form action="index.php?act=register" method="post">
        <input name="account_sdt" type="text" placeholder="Tel" required><br>
        <input name="account_email" type="text" placeholder="Email" required><br>
        <input name="account_address" type="text" placeholder="Address" required><br>
        <input name="account_user" type="text" placeholder="User" required><br>
        <input name="account_pass" type="password" placeholder="Password" required>
    
    <div class="phu">
        <a href="">Forgotten your password?</a>
        <a href="index.php?act=login">Login</a>
    </div>
    <p>By Register, you agree to Privacy Policy <br> and Terms of Use.</p>
        <input type="submit" name="register" value="Register">
    </form>
    <h2 style="color: red;"><?= $thongbao?></h2>
</div>
</center>




<!-- <script>
    function registerUser() {
        
        var username = document.getElementById('username').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;

        
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "register.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                
                var response = xhr.responseText;
                alert(response); 
            }
        };

        
        var data = "username=" + username + "&email=" + email + "&password=" + password;
        xhr.send(data);
    }
</script> -->



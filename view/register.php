
<script>
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
</script>



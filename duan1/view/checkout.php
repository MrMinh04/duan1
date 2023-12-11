<head>
    <link rel="stylesheet" href="thanhtoan.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
</head>
<div class="tong">
<div class="thongTin">
          <h1 style="text-align: center; font-size: 24px;"> <strong>THÔNG TIN GIAO HÀNG</strong></h1><br>
          <form action="index.php?act=checkoutsuccess" method="post" class="form1">
                <label for="name">Họ và tên:</label>
                <input type="text" name="receive_name" id="name" placeholder="Họ và tên của bạn" required>
                <br>
                <label for="sdt">Số điện thoại :</label>
                <input type="tel" name="receive_sdt" id="sdt" placeholder="Số điện thoại" required pattern="\d{10}"><br>

                <label for="email">Email:</label>
                <input type="email" name="receive_email" id="email" placeholder="Email" required><br>
            
                <label for="address">Địa chỉ:</label>
                <div>
                  <select name="receive_address_tinh" class="form-select form-select-sm mb-3" id="city" aria-label=".form-select-sm" required>
                  <option value="" selected>Chọn tỉnh thành</option>           
                  </select>
                            
                  <select name="receive_address_huyen" class="form-select form-select-sm mb-3" id="district" aria-label=".form-select-sm" required>
                  <option value="" selected>Chọn quận huyện</option>
                  </select>
                  
                  <select name="receive_address_xa" class="form-select form-select-sm" id="ward" aria-label=".form-select-sm" required>
                  <option value="" selected>Chọn phường xã</option>
                  </select>
                  <input name="receive_address_thon" type="text" id="sonha" placeholder="Nhập số nhà, tên đường/phố của bạn" required>
                </div>    
                  <h2>Thông tin vận chuyển: MIỄN PHÍ</h2>
                  <h2>Phương thức thanh toán</h2><br>
                  <input type="radio" name="order_pttt" id="cod" value="Thanh toán khi nhận hàng" required>
                  <label for="cod">Thanh toán khi nhận hàng</label>
                  <input type="radio" name="order_pttt" id="prepaid" value="Thanh toán trước khi nhận hàng" required>
                  <label for="prepaid">Thanh toán trước khi nhận hàng</label><br>
                  <input type="checkbox" name="agreement" id="agreement" required>
                  <label for="agreement">Tôi đã đọc, hiểu và chấp thuận Chính sách và bảo mật và Các điều khoản và Điều kiện </label><br>
                  <input type="submit" name="checkout" value="Checkout">
                
              </form>
</div>
<div class="ttHang">
<div>
   <h2>SẢN PHẨM CỦA BẠN</h2>
    <?php
    $tong=0;

    ?>
    <?php foreach(($_SESSION['my_cart']) as $cart ):?>
    <div class="sanpham">
    <?php
    $tong = $tong + $cart['5'];
    ?>
      <div>
        <img src="../images/<?= $cart['3']?>" alt="">
      </div>
      <div class="tt">
        <h3><?= $cart['1']?></h3>
        <h4><?= $cart['2']?></h4>
        <h5>Kích cỡ: <?= $cart['7']?></h5>
        <h5>Màu sắc: <?= $cart['6']?></h5>
        <h5>Số lượng: <?= $cart['4']?></h5>
        <h4>Thành tiền: <?= $cart['5']?></h4>
      </div>
    </div>
    <?php endforeach?>
    </div>
    <h2>Tổng tiền phải trả: <?= $tong?> VND</h2>
</div>
</div>
<script>
    var citis = document.getElementById("city");
    var districts = document.getElementById("district");
    var wards = document.getElementById("ward");
    var Parameter = {
        url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json", 
        method: "GET", 
        responseType: "application/json", 
        };
    var promise = axios(Parameter);
    promise.then(function (result) {
      renderCity(result.data);
    });
    
    function renderCity(data) {
      for (const x of data) {
        citis.options[citis.options.length] = new Option(x.Name, x.Id);
      }
      citis.onchange = function () {
        district.length = 1;
        ward.length = 1;
        if(this.value != ""){
          const result = data.filter(n => n.Id === this.value);
    
          for (const k of result[0].Districts) {
            district.options[district.options.length] = new Option(k.Name, k.Id);
          }
        }
      };
      district.onchange = function () {
        ward.length = 1;
        const dataCity = data.filter((n) => n.Id === citis.value);
        if (this.value != "") {
          const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;
    
          for (const w of dataWards) {
            wards.options[wards.options.length] = new Option(w.Name, w.Id);
          }
        }
      };
    }
    function validateForm() {
        var phoneNumber = document.getElementById("sdt").value;
        var paymentMethod = document.querySelector('input[name="order_pttt"]:checked');
        var agreement = document.getElementById("agreement");
        var city = document.getElementById("city");
        var district = document.getElementById("district");
        var ward = document.getElementById("ward");
        var address = document.getElementById("sonha").value;

        if (!/^\d{10}$/.test(phoneNumber)) {
            alert("Vui lòng nhập một số điện thoại hợp lệ.");
            return false;
        }

        if (!paymentMethod) {
            alert("Vui lòng chọn một phương thức thanh toán.");
            return false;
        }

        if (!agreement.checked) {
            alert("Vui lòng chấp thuận các điều khoản và điều kiện.");
            return false;
        }

        if (city.value === "" || district.value === "" || ward.value === "" || address.trim() === "") {
            alert("Vui lòng nhập đầy đủ thông tin địa chỉ.");
            return false;
        }

        return true; 
    }
</script>
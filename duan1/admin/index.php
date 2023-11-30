<?php
include("../model/pdo.php");
include("header.php");



if(isset($_GET["act"])){
    $act=$_GET["act"];
    switch($act){

//Danh mục
        case "list_danh_muc":
            $sql = "SELECT * FROM category";
            $category = pdo_query($sql);
            include("danhmuc/list.php");
            break;
        case "add_danh_muc":
            if (isset($_POST["add_category"]) && $_POST["add_category"]){
                $category_id = $_POST["category_id"];
                $category_name = $_POST["category_name"];
                $sql = "INSERT INTO category VALUES('$category_id','$category_name')";
                pdo_execute($sql);
                $thongbao = "Thêm thành công";
            }
            include("danhmuc/add.php");
            break;

        case "delete_danh_muc":
            if (isset($_GET["category_id"]) && $_GET["category_id"]>0){
            $category_id = $_GET['category_id'];
            $sql = "DELETE FROM category WHERE category_id=$category_id";
            pdo_execute($sql);
            }
            $sql = "SELECT * FROM category";
            $category = pdo_query($sql);
            include("danhmuc/list.php");
            break;
        case "update_danh_muc":
            if (isset($_GET["category_id"]) && $_GET["category_id"]>0){
                $category_id = $_GET['category_id'];
                $sql = "SELECT * FROM category WHERE category_id=$category_id";
                $update = pdo_query($sql);
            }
            include("danhmuc/update.php");
            break;


// Sản phẩm
        case "list_san_pham":
            $sql = "SELECT * FROM product";
            $product = pdo_query($sql);
            include("sanpham/list.php");
            break;
        case "add_san_pham":
            $sql = "SELECT * FROM color";
            $color = pdo_query($sql);
            $sql = "SELECT * FROM category";
            $category = pdo_query($sql);
            if (isset($_POST["add_product"]) && $_POST["add_product"]){
                $product_id = $_POST["product_id"];
                $product_name = $_POST["product_name"];
                $product_price = $_POST["product_price"];
                $product_description = $_POST["product_description"];
                $product_quantity = $_POST["product_quantity"];
                $product_color = $_POST["product_color"];
                $product_category = $_POST["product_category"];
                //Lấy file
                $file = $_FILES['product_image'];
                //lấy tên file
                $product_image = $file['name'];
                //Upload
                move_uploaded_file($file['tmp_name'], "../images/" . $product_image);
                $sql = "INSERT INTO product VALUES('$product_id','$product_name','$product_image','$product_price', '$product_description','$product_quantity','$product_color','$product_category')";
                pdo_execute($sql);
                $thongbao = "Thêm thành công";
            }
            include("sanpham/add.php");
            break;
        case "delete_san_pham":
            if (isset($_GET["product_id"]) && $_GET["product_id"]>0) {
            $product_id = $_GET['product_id'];
            $sql = "DELETE FROM product WHERE product_id=$product_id";
            pdo_execute($sql);
            }
            $sql = "SELECT * FROM product";
            $product = pdo_query($sql);
            include("sanpham/list.php");
            break;

//Đơn hàng
        case "list_don_hang":
            include("donhang/list.php");
            break;


//Bình luận
        case "list_binh_luan":
            include("binhluan/list.php");
            break;


//Thống kê
        case "thong_ke":
            include("thongke/list.php");
            break;
        default:
        include("home.php");
        break;
    }
}else{
    include ("home.php");
}


include("footer.php");
?>
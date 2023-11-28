<?php
include("../model/pdo.php");
include("header.php");
include("../model/danhmuc.php");



if(isset($_GET["act"])){
    $act=$_GET["act"];
    switch($act){

//Danh mục
        case "list_danh_muc":
            $category = display_danhmuc();
            include("danhmuc/list.php");
            break;
        case "add_danh_muc":
            if (isset($_POST["add_category"]) && $_POST["add_category"]){
                $category_id = $_POST["category_id"];
                $category_name = $_POST["category_name"];
                insert_danhmuc($category_id,$category_name);
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
            $category = display_danhmuc();
            include("danhmuc/list.php");
            break;
        case "edit_danh_muc":
            if (isset($_GET["category_id"]) && $_GET["category_id"]>0){
                $category_id = $_GET['category_id'];
                $sql = "SELECT * FROM category WHERE category_id=$category_id";
                $update = pdo_query($sql);
            }
            include("danhmuc/edit.php");
            break;
        case "update_danh_muc":
            if (isset($_POST["update_category"]) && $_POST["update_category"]){
                $category_id = $_POST["category_id"];
                $category_name = $_POST["category_name"];
                $sql = "UPDATE category set category_id = '".$category_id."', category_name = '".$category_name."' where category_id =".$category_id;
                pdo_execute($sql);
            }
            $sql = "SELECT * FROM category order by category_id asc";
            $category = pdo_query($sql);
            include("danhmuc/list.php");
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
                $product_describe = $_POST["product_describe"];
                $product_quantity = $_POST["product_quantity"];
                $product_color = $_POST["product_color"];
                $product_category = $_POST["product_category"];
                //Lấy file
                $file = $_FILES['product_image'];
                //lấy tên file
                $product_image = $file['name'];
                //Upload
                move_uploaded_file($file['tmp_name'], "../view/images/" . $product_image);
                $sql = "INSERT INTO product VALUES('$product_id','$product_name','$product_image','$product_price', '$product_describe','$product_quantity','$product_color','$product_category')";
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

        case "edit_san_pham":
            $sql = "SELECT * FROM color";
            $color = pdo_query($sql);
            $sql = "SELECT * FROM category";
            $category = pdo_query($sql);
            if (isset($_GET["product_id"]) && $_GET["product_id"]>0){
                $product_id = $_GET['product_id'];
                $sql = "SELECT * FROM product WHERE product_id=$product_id";
                $update = pdo_query($sql);
            }
            include("sanpham/edit.php");
            break;
        case "update_san_pham":
            if (isset($_POST["update_product"]) && $_POST["update_product"]){
                $product_id = $_POST["product_id"];
                $product_name = $_POST["product_name"];
                $sql = "UPDATE product set product_id = '".$product_id."', product_name = '".$product_name."' where product_id =".$product_id;
                pdo_execute($sql);
            }
            $sql = "SELECT * FROM product order by product_id asc";
            $product = pdo_query($sql);
            include("danhmuc/list.php");
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
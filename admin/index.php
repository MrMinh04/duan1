<?php
include("../model/pdo.php");
include("header.php");
include("../model/danhmuc.php");
include("../model/sanpham.php");
include("../model/khac.php");



if(isset($_GET["act"])){
    $act=$_GET["act"];
    switch($act){



//DANH MỤC -----------------------------------------------------------------------

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
            delete_danh_muc($category_id);
            }
            $category = display_danhmuc();
            include("danhmuc/list.php");
            break;
        case "edit_danh_muc":
            if (isset($_GET["category_id"]) && $_GET["category_id"]>0){
                $category_id = $_GET['category_id'];
                $update = load_1_danh_muc($category_id);
            }
            include("danhmuc/edit.php");
            break;
        case "update_danh_muc":
            if (isset($_POST["update_category"]) && $_POST["update_category"]){
                $category_name = $_POST["category_name"];
                $hiden = $_POST["hiden"];
                update_danh_muc($category_name,$hiden);
            }
            $category = display_danhmuc();
            include("danhmuc/list.php");
            break;



// SẢN PHẨM--------------------------------------------------------------------------------------

        case "list_san_pham":
            if (isset($_POST["kw"]) && $_POST["kw"]!=""){
                $kw = $_POST['kw'];
            }else{
                $kw = "";
            }
            $product_view = display_sanpham_view($kw);
            include "sanpham/list.php";
            break;    
        case "add_san_pham":
            $category = display_danhmuc();
            if (isset($_POST["add_product"]) && $_POST["add_product"]){
                $product_id = $_POST["product_id"];
                $product_name = $_POST["product_name"];
                $product_price = $_POST["product_price"];
                $product_describe = $_POST["product_describe"];
                $product_quantity = $_POST["product_quantity"];
                $product_category = $_POST["product_category"];
                //Lấy file
                $file = $_FILES['product_image'];
                //lấy tên file
                $product_image = $file['name'];

                $file2 = $_FILES['product_image2'];
                //lấy tên file
                $product_image2 = $file2['name'];

                $file3 = $_FILES['product_image3'];
                //lấy tên file
                $product_image3 = $file3['name'];

                $file4 = $_FILES['product_image4'];
                //lấy tên file
                $product_image4 = $file4['name'];
                //Upload
                move_uploaded_file($file['tmp_name'], "../images/" . $product_image);
                move_uploaded_file($file['tmp_name'], "../images/" . $product_image2);
                move_uploaded_file($file['tmp_name'], "../images/" . $product_image3);
                move_uploaded_file($file['tmp_name'], "../images/" . $product_image4);
                insert_sanpham($product_id,$product_name,$product_image,$product_image2,$product_image3,$product_image4,$product_price,$product_describe,$product_quantity,$product_category);
                $thongbao = "Thêm thành công";
            }
            include("sanpham/add.php");
            break;
        case "delete_san_pham":
            if (isset($_GET["product_id"]) && $_GET["product_id"]>0) {
            $product_id = $_GET['product_id'];
            delete_san_pham($product_id);
            }
            if (isset($_POST["kw"]) && $_POST["kw"]!=""){
                $kw = $_POST['kw'];
            }else{
                $kw = "";
            }
            $product_view = display_sanpham_view($kw);
            include "sanpham/list.php";
            break;  
            
        case "edit_san_pham":
            $category = display_danhmuc();
            if (isset($_GET["product_id"]) && $_GET["product_id"]>0){
                $product_id = $_GET['product_id'];
                $update = load_1_san_pham($product_id);
            }
            include("sanpham/edit.php");
            break;
        case "update_san_pham":
            if (isset($_POST["update_product"]) && $_POST["update_product"]){
                $product_name = $_POST["product_name"];
                $product_price = $_POST["product_price"];
                $product_describe = $_POST["product_describe"];
                $product_quantity = $_POST["product_quantity"];
                $product_category = $_POST["product_category"];
                $product_id = $_POST["product_id"];
                //Lấy file
                $file = $_FILES['product_image'];
                //lấy tên file
                $product_image = $file['name'];
                //Upload
                move_uploaded_file($file['tmp_name'], "../images/" . $product_image);
                update_san_pham($product_id,$product_name,$product_price,$product_describe,$product_quantity,$product_category,$product_image);
            }
            if (isset($_POST["kw"]) && $_POST["kw"]!=""){
                $kw = $_POST['kw'];
            }else{
                $kw = "";
            }
            $product_view = display_sanpham_view($kw);
            include "sanpham/list.php";
            break;  

//Đơn hàng
        case "list_don_hang":
            $order = display_don_hang();
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
<?php
session_start();
include "../model/pdo.php";
include "../model/sanpham.php";
include("../model/khac.php");
// session_destroy();

if (!isset($_SESSION['my_cart'])) $_SESSION['my_cart']=[];
$product = display_sanpham();
$what_hot = display_what_hot();
$new_product = display_new_product();
$men_product = display_men_product();
$men_featured = display_men_featured();
$women_product = display_women_product();
$women_featured = display_women_featured();
$kid_product = display_kid_product();
$kid_featured = display_kid_featured();
$sale_product = display_sale_product();
$sale_featured = display_sale_featured();
include "header.php";
if((isset($_GET['act'])) && ($_GET['act'])!=""){
    $act = $_GET['act'];
    switch ($act) {
        case 'men':
            include "men.php";
            break;
        case 'women':
            include "women.php";
            break;
        case 'kid':
            include "kid.php";
            break;
        case 'sale':
            include "sale.php";
            break;
        case 'allsanpham':
            if (isset($_POST["kw"]) && $_POST["kw"]!=""){
                $kw = $_POST['kw'];
            }else{
                $kw = "";
            }
            $product_view = display_sanpham_view($kw);
            include "allsanpham.php";
            break;    
        case 'sanphamct':
            if (isset($_GET["product_id"]) && $_GET["product_id"]>0){
                $product_id = $_GET['product_id'];
                $update = load_1_san_pham($product_id);
                foreach ($update as $up):
                if ((isset($up['product_image2'])) && ($up['product_image2'])!="") {
                    $sql = "SELECT * FROM color";
                    $color = pdo_query($sql);
                    $sql = "SELECT * FROM size";
                    $size = pdo_query($sql);
                    include "sanphamct.php";
                }else{
                    $sql = "SELECT * FROM color";
                    $color = pdo_query($sql);
                    $sql = "SELECT * FROM size";
                    $size = pdo_query($sql);
                    include "sanphamct2.php";
                } 
                endforeach;
                
            }
            
            // include "sanphamct.php";
            break;
        case 'cart':
            if (isset($_POST["addtocart"]) && $_POST["addtocart"]){
                $product_id = $_POST['product_id'];
                $product_name = $_POST['product_name'];
                $product_image = $_POST['product_image'];
                $product_price = $_POST['product_price'];
                $product_color = $_POST['color'];
                $product_size = $_POST['size'];
                $sl = $_POST['sl'];
                $thanhtien = $product_price*$sl;
                $spadd = [$product_id,$product_name,$product_price,$product_image,$sl,$thanhtien,$product_color,$product_size];
                array_push($_SESSION['my_cart'],$spadd);
            }
            include "cart.php";
            break;
        case 'cart_home':
            if($_SESSION['my_cart'] != []){
                include "cart.php";
            }else{
                include "cart_rong.php";
            }
            break;
        case 'delcart':
            if(isset($_GET['idcart'])){
                array_splice($_SESSION['my_cart'],$_GET['idcart'],1);
            }else{
                $_SESSION['my_cart']=[];
            }
            header('location: index.php?act=cart');
            break;
        case 'checkout':
            if($_SESSION['my_cart'] != []){
                include "checkout.php";
            }else{
                include "home.php";
            }
            
            break;
        case 'checkoutsuccess':
            if (isset($_POST["checkout"]) && $_POST["checkout"]){
                $receive_name = $_POST['receive_name'];
                $receive_sdt = $_POST['receive_sdt'];
                $receive_address_tinh = $_POST['receive_address_tinh'];
                $receive_address_huyen = $_POST['receive_address_huyen'];
                $receive_address_xa = $_POST['receive_address_xa'];
                $receive_address_thon = $_POST['receive_address_thon'];
                $receive_address = "$receive_address_thon, $receive_address_xa, $receive_address_huyen,        $receive_address_tinh";
                $order_pttt = $_POST['order_pttt'];
                $order_date = date('h:i:sa d/m/Y');
                $totol = tongdonhang();
                
                $order_cart_id = insert_orderr($receive_name,$receive_address,$receive_sdt,$order_pttt,$order_date,$totol);


                foreach(($_SESSION['my_cart']) as $cart ) {
                    $product_id = $cart['0'];
                    $product_name = $cart['1'];
                    $product_price = $cart['2'];
                    $product_image = $cart['3'];
                    $product_quantity = $cart['4'];
                    $product_thanhtien = $cart['5'];
                    $product_color = $cart['6'];
                    $product_size = $cart['7'];
                    insert_oderr_cart($product_id,$product_quantity,$product_thanhtien,$product_color,$product_size,$order_cart_id);
                }

                $_SESSION['my_cart'] = [];
            }
            include "checkoutsuccess.php";
            break;
        case 'bill':
            $order_cart_id = $_GET['order_cart_id'];
            $orderr = select_orderr($order_cart_id);
            $orderr_cart = select_orderr_cart($order_cart_id);
            foreach ($orderr_cart as $orc){
                $product_id = $orc['product_id'];
                $orderr_cart_product = select_orderr_cart_product($product_id);
            }
            
            include "bill.php";
            break;
        default:
            include "home.php";
            break;
    }
}else include "home.php";
include "footer.php";
?>
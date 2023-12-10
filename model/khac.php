<?php
function tongdonhang(){
    $tong=0;
    foreach(($_SESSION['my_cart']) as $cart ){
    $tong = $tong + $cart['5'];
}
return $tong;
}


function insert_oderr_cart($product_id,$product_quantity,$product_thanhtien,$product_color,$product_size,$order_cart_id){
    $sql = "INSERT INTO orderr_cart(product_id, product_quantity, product_thanhtien, product_color, product_size, order_cart_id) VALUES ('$product_id', '$product_quantity', '$product_thanhtien', '$product_color', '$product_size', '$order_cart_id')";
    pdo_execute($sql);
}

function insert_orderr($receive_name,$receive_address,$receive_sdt,$order_pttt,$order_date,$totol){
    $sql = "INSERT INTO orderr(receive_name, receive_address, receive_sdt, order_pttt, order_date, totol) VALUES ('$receive_name', '$receive_address', '$receive_sdt', '$order_pttt', '$order_date', '$totol')";
    return pdo_execute_return_lastInsertId($sql);
}
function select_orderr($order_cart_id){
    $sql = "SELECT * FROM orderr WHERE order_id=".$order_cart_id;
    $orderr = pdo_query($sql);
    return $orderr;
}
function select_orderr_cart($order_cart_id){
    $sql = "SELECT * FROM orderr_cart WHERE order_cart_id =".$order_cart_id;
    $orderr_cart = pdo_query($sql);
    return $orderr_cart;
}
function select_orderr_cart_product($product_id){
    $sql = "SELECT * FROM product WHERE product_id='$product_id'";
    $orderr_cart_product = pdo_query($sql);
    return $orderr_cart_product;
}

?>
<?php
function display_sanpham(){
    $sql = "SELECT * FROM product";
    $product = pdo_query($sql);
    return $product;
}
function display_sanpham_view($kw){
    $sql = "SELECT * FROM product";
    if($kw != ""){
        $sql.=" WHERE product_name LIKE '%".$kw."%'";
    }
    $sql.=" order by product_id desc";
    $product_view = pdo_query($sql);
    return $product_view;
}
function display_new_product(){
    $sql_new_product = "SELECT * FROM product WHERE product_category=1";
    $new_product = pdo_query($sql_new_product);
    return $new_product;
}
function display_what_hot(){
    $sql_what_hot = "SELECT * FROM product WHERE product_category=2";
    $what_hot = pdo_query($sql_what_hot);
    return $what_hot;
}
function display_men_product(){
    $sql_men_product = "SELECT * FROM product WHERE product_category=3";
    $men_product = pdo_query($sql_men_product);
    return $men_product;
}
function display_men_featured(){
    $sql_men_featured = "SELECT * FROM product WHERE product_category=4";
    $men_featured = pdo_query($sql_men_featured);
    return $men_featured;
}
function display_women_product(){
    $sql_women_product = "SELECT * FROM product WHERE product_category=5";
    $women_product = pdo_query($sql_women_product);
    return $women_product;
}
function display_women_featured(){
    $sql_women_featured = "SELECT * FROM product WHERE product_category=6";
    $women_featured = pdo_query($sql_women_featured);
    return $women_featured;
}
function display_kid_product(){
    $sql_kid_product = "SELECT * FROM product WHERE product_category=7";
    $kid_product = pdo_query($sql_kid_product);
    return $kid_product;
}
function display_kid_featured(){
    $sql_kid_featured = "SELECT * FROM product WHERE product_category=8";
    $kid_featured = pdo_query($sql_kid_featured);
    return $kid_featured;
}
function display_sale_product(){
    $sql_sale_product = "SELECT * FROM product WHERE product_category=9";
    $sale_product = pdo_query($sql_sale_product);
    return $sale_product;
}
function display_sale_featured(){
    $sql_sale_featured = "SELECT * FROM product WHERE product_category=10";
    $sale_featured = pdo_query($sql_sale_featured);
    return $sale_featured;
}






function insert_sanpham($product_id,$product_name,$product_image,$product_image2,$product_image3,$product_image4,$product_price,$product_describe,$product_quantity,$product_category){
    $sql = "INSERT INTO product VALUES('$product_id','$product_name','$product_image','$product_image2','$product_image3','$product_image4','$product_price', '$product_describe','$product_quantity','$product_category')";
    pdo_execute($sql);
}
function delete_san_pham($product_id){
    $sql = "DELETE FROM product WHERE product_id=$product_id";
    pdo_execute($sql);
}
function load_1_san_pham($product_id){
    $sql = "SELECT * FROM product WHERE product_id=$product_id";
    $update = pdo_query($sql);
    return $update;
}
function update_san_pham($product_id,$product_name,$product_price,$product_describe,$product_quantity,$product_category,$product_image){
    $sql = "UPDATE product set product_name = '".$product_name."', product_price = '".$product_price."', product_describe = '".$product_describe."', product_quantity = '".$product_quantity."', product_category = '".$product_category."',product_image = '".$product_image."' where product_id =".$product_id;
    pdo_execute($sql);
}

?>

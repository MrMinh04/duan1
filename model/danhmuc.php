<?php
function insert_danhmuc($category_id,$category_name){
    $sql = "INSERT INTO category VALUES('$category_id','$category_name')";
    pdo_execute($sql);
}
function display_danhmuc(){
    $sql = "SELECT * FROM category order by category_id asc";
    $category = pdo_query($sql);
    return $category;
}
function delete_danh_muc($category_id){
    $sql = "DELETE FROM category WHERE category_id=$category_id";
    pdo_execute($sql);
}
function load_1_danh_muc($category_id){
    $sql = "SELECT * FROM category WHERE category_id=$category_id";
    $update = pdo_query($sql);
    return $update;
}
function update_danh_muc($category_name,$hiden){
    $sql = "UPDATE category set category_name = '".$category_name."' where category_id =".$hiden;
    pdo_execute($sql);
}
?>
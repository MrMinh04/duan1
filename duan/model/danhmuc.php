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
 
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duan1</title>
</head>
<body>
    <h2>Thêm Danh Mục</h2>
    <form action="index.php?act=add_danh_muc" method="post" enctype="multipart/form-data">

        Category_ID: <input type="number" name="category_id" id="">
        <br>
        Category_Name: <input type="text" required name="category_name" id="">
        <br>
        <input type="submit" name="add_category" value="Thêm mới">
    </form>
        <?php if(isset($thongbao)&&($thongbao!=""))
            echo $thongbao; 
        ?>

</body>

</html>
<?
// if(is_array($update)){
//     extract($update);
// }
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duan1</title>
</head>
<body>
    <h2>Cập nhật Danh Mục</h2>
    <form action="index.php?act=update_danh_muc" method="post" enctype="multipart/form-data">
    <?php foreach ($update as $up) : ?>
        Category_ID: <?= $up['category_id'] ?>
        <br>
        Category_Name: <input type="text" required name="category_name" id="" value="<?= $up['category_name'] ?>">
        <br>
        <input type="hidden" name="hiden" value="<?= $up['category_id']?>">
        <input type="submit" name="update_category" value="Cập nhật danh mục">
        <input type="reset" value="Nhập lại"> 
        <a href="index.php?act=list_danh_muc"><input type="button" value="Danh sách danh mục"></a>
    <?php endforeach ?>
    </form>
        <?php if(isset($thongbao)&&($thongbao!=""))
            echo $thongbao; 
        ?>

</body>

</html>
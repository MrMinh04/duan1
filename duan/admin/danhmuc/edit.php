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
    <style>
        body {
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: small;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
            font-size: 14px;
        }

        th {
            background-color: green;
            color: white;
            
        }

        td img {
            max-width: 100px;
            max-height: 100px;
        }

        div.message {
            color: green;
            margin-bottom: 10px;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h2>Cập nhật Danh Mục</h2>
    <form action="index.php?act=update_danh_muc" method="post" enctype="multipart/form-data">
    <?php foreach ($update as $up) : ?>
        Category_ID: <input type="number" name="category_id" id="" value="<?= $up['category_id'] ?>">
        <br>
        Category_Name: <input type="text" required name="category_name" id="" value="<?= $up['category_name'] ?>">
        <br>
        <input type="hidden" name="category_id" value="<?= $up['category_id']?>">
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
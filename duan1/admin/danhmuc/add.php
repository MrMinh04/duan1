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
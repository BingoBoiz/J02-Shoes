<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Simple Sidebar - Start Bootstrap Template</title>
        <script src="https://cdn.ckeditor.com/4.20.0/full/ckeditor.js"></script>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>

    <body>
         <?php include_once 'layout/header.php';?>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            
                <!-- Page content-->
                <div class="container-fluid">
                    <h1 style="text-align: center;">THÊM MỚI DANH MỤC</h1>
                    <hr>
                   <form action="../admin/add_category_do.php" method="post">
        <p>Tên danh mục</p>
        <p><textarea name="txtTenDanhMuc" style="width: 100%;"></textarea></p>
        
        <p><button>Thêm mới</button></p>
    </form>
    
    </body>
</html>

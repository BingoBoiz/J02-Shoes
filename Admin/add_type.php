<?php 
            // 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muôn HIỂN THỊ, THÊM, SỬA, XOÁ
            require("../db/config.php");

            // 2. Câu lệnh truy vấn đến bảng dữ liệu
            $sql = "
                SELECT * 
                FROM tbl_loai_san_pham";

            // 3. Thực hiện truy vấn đến bảng dữ liệu
            $loai_san_pham = mysqli_query($ket_noi, $sql);
        ;?>

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
                    <h1 style="text-align: center;">THÊM MỚI LOẠI SẢN PHẨM</h1>
                    <hr>
                   <form action="../admin/add_type_do.php" method="post">
        <p>Tên  loại sản phẩm</p>
        <p><input type="text" name="txtTenLoaiSanPham" style="width: 100%;"></p>
        <p><button>Thêm mới</button></p>
    </form>
    <script>
        CKEDITOR.replace('txtMoTa', {
            height: 400,
            baseFloatZIndex: 10005,
            removeButtons: 'PasteFromWord'
        });
    </script> 
    </body>
</html>

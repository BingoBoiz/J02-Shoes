
<?php 
            // 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muôn HIỂN THỊ, THÊM, SỬA, XOÁ
            require("../db/config.php");

            // 2. Câu lệnh truy vấn đến bảng dữ liệu
            $sqll = "
                SELECT * 
                FROM tbl_tin_tuc";

            // 3. Thực hiện truy vấn đến bảng dữ liệu
            $tin_tuc = mysqli_query($ket_noi, $sqll);
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
        <?php include "layout/header.php";?>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            
            
                <!-- Page content-->
                <div class="container-fluid">
                    <h1 style="text-align: center;">THÊM MỚI TIN TỨC</h1>
                    <hr>
                   <form action="../admin/add_blog_do.php" method="post">
        <p>TIÊU ĐỀ</p>
        <p><input type="text" name="txtTieuDe" style="width: 100%;"></p>
        
        <p>MÔ TẢ</p>
        <p><input type="text" name="txtMoTa"style="width: 100%;"></p>
        
        <p>NGÀY ĐĂNG</p>
        <p><input type="text" name="txtNgayDang"style="width: 100%;"></p>
        <p>Ảnh minh hoạ</p>
        <p><input type="file" name="txtAnhMinhHoa"style="width: 100%;"></p>
        <p>NỘI DUNG</p>
        <p><textarea type="text" name="txtNoiDung"style="width: 100%;"></textarea></p>
        <p><button>Thêm mới</button></p>
    </form>
    <script>
        CKEDITOR.replace('txtNoiDung', {
            height: 400,
            baseFloatZIndex: 10005,
            removeButtons: 'PasteFromWord'
        });
    </script> 
    </body>
</html>

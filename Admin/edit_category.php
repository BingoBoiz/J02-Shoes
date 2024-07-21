<?php 
           // 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muôn HIỂN THỊ, THÊM, SỬA, XOÁ
    require("../db/config.php");

    // 2. Lấy dữ liệu bản ghi cần SỬA
    $id = $_GET['id'];
    // echo $id; exit();

    // 3. Câu lệnh truy vấn đến bảng dữ liệu
    $sql = "
        SELECT *
        FROM tbl_danh_muc
        WHERE danh_muc_id=".$id;
    // echo $sql; exit();

    // 4. Thực hiện thực thi câu lệnh truy vấn
    $danh_muc = mysqli_query($ket_noi, $sql);
    $row=mysqli_fetch_array($danh_muc);
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
                    <h1 style="text-align: center;">SỬA DANH MỤC</h1>
                    <hr>
                    <form action="../admin/edit_category_do.php" method="post">
        <p>Tên danh mục</p>
        <p><input type="text" name="txtTenDanhMuc" style="width: 100%;" value="<?php echo $row["ten_danh_muc"];?>"></p>

        <input type="hidden" name="txtID" value="<?php echo $row["danh_muc_id"];?>">
        <p><button>Cập nhật</button></p>
    </form>
    
    </body>
</html>

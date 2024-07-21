
<?php 
            // 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muôn HIỂN THỊ, THÊM, SỬA, XOÁ
            require("../db/config.php");

            // 2. Câu lệnh truy vấn đến bảng dữ liệu
            $sqll = "
                SELECT * 
                FROM tbl_account";

            // 3. Thực hiện truy vấn đến bảng dữ liệu
            $tai_khoan = mysqli_query($ket_noi, $sqll);
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
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <?php include "layout/header.php";?>
            
                <!-- Page content-->
                <div class="container-fluid">
                    <h1 style="text-align: center;">THÊM MỚI TÀI KHOẢN</h1>
                    <hr>
                   <form action="../admin/add_account_do.php" method="post">
        <p>TÊN</p>
        <p><input type="text" name="txtName" style="width: 100%;"></p>
        
        <p>EMAIL</p>
        <p><input type="text" name="txtEmail"style="width: 100%;"></p>
        
        <p>PASSWORD</p>
        <p><input type="text" name="txtPassword"style="width: 100%;"></p>
        <p>USER TYPE</p>
        <select name="txtUserType">
         <option value="user">User</option>
         <option value="admin">Admin</option>
        </select>
         <p><button style="width: 10%; "> Thêm mới</button></p>
    </form>
    </body>
</html>


<?php 
    // 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muôn HIỂN THỊ, THÊM, SỬA, XOÁ
    require("../db/config.php");

    // 2. Lấy dữ liệu bản ghi cần SỬA
    $ID = $_GET['id'];
    // echo $id; exit();

    // 3. Câu lệnh truy vấn đến bảng dữ liệu
    $sql = "
        SELECT *
        FROM tbl_account
        WHERE ID=".$ID;
    // echo $sql; exit();

    // 4. Thực hiện thực thi câu lệnh truy vấn
    $tai_khoan = mysqli_query($ket_noi, $sql);
    $row=mysqli_fetch_array($tai_khoan);
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

            <?php include "layout/header.php";?>
            
                <!-- Page content-->
                <div class="container-fluid">
                    <h1 style="text-align: center;">SỬA TÀI KHOẢN</h1>
                    <hr>
                    <form action="../admin/edit_account_do.php" method="post">
        <p>TÊN</p>
        <p><input type="text" name="txtName" style="width: 100%;" value="<?php echo $row["name"];?>"></p>
        <p>EMAIL</p>
        <p><textarea name="txtEmail" style="width: 100%;"><?php echo $row["email"];?></textarea></p>
        <p>PASSWORD</p>
        <p><textarea name="txtPassword" style="width: 100%;"><?php echo md5($row["password"]);?></textarea></p>
        <p>USER TYPE</p>
            <select name="user_type">
         <option value="user">User</option>
         <option value="admin">Admin</option>
      </select>           
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Administration-J02</title>
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
                    <h1 style="text-align: center;">DANH SÁCH LIÊN HỆ</h1>
                </div>
                <!-- <p style="text-align:left;"><a href="contact_perform.php"><img src="../images/add.jpeg" style="width: 35px; height:auto;"></a></p> -->
                <div class="container-fluid">
                    <table class="table table-striped table-striped-columns table-hover table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th style="text-align: center; font-weight: bold; width: 150px;">LIÊN HỆ ID</th>
                            <th style="text-align: center; font-weight: bold; width: 200px;">HỌ VÀ TÊN</th>
                            <th style="text-align: center; font-weight: bold; width: 220px;">SỐ ĐIỆN THOẠI</th>
                            <th style="text-align: center; font-weight: bold; width: 200px;">EMAIL</th>
                            <th style="text-align: center; font-weight: bold; width: 500px;" >NỘI DUNG LIÊN HỆ</th>
                           <!--  <th>LOẠI SẢN PHẨM</th>
                            <th>LOẠI DANH MỤC</th> -->
                            <th style="text-align: center; font-weight: bold; width : 150px" colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle text-center">
        <?php 
            // 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muôn HIỂN THỊ, THÊM, SỬA, XOÁ
            require("../db/config.php");

            // 2. Câu lệnh truy vấn đến bảng dữ liệu
            $sql = "
                SELECT * 
                FROM tbl_lien_he
                ORDER BY lien_he_id DESC";

            // 3. Thực hiện truy vấn đến bảng dữ liệu
            $lh = mysqli_query($ket_noi, $sql);

            // 4. In kết quả ra màn hình
            while ($row = mysqli_fetch_array($lh)) {
        ;?>
        <tr>
            <td><?php echo $row["lien_he_id"];?></td>
            <td><?php echo $row["ho_va_ten"];?></td>
            <td><?php echo $row["sdt"];?></td>
            <td><?php echo $row["email"];?></td>
            <td><?php echo $row["noi_dung_lien_he"];?></td>
            <td><a href="../admin/delete_contact.php?id=<?php echo $row["lien_he_id"];?>"><img src="../images/delete.jpeg" style="width: 35px; height:auto;"></a></td>
        </tr>
        <?php
            }
        ;?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

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
                <!-- Page content-->
                <div class="container-fluid">
                    <h1 style="text-align: center;">DANH SÁCH SẢN PHẨM</h1>
                </div>
                <p style="text-align:left;"><a href="../admin/add_product.php"><img src="../images/add.jpeg" style="width: 35px; height:auto;"></a></p>
                <div class="container-fluid">
                    <table class="table table-striped table-striped-columns table-hover table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th style="text-align: center; font-weight: bold; width: 80px;">ID</th>
                            <th style="text-align: center; font-weight: bold; width: 200px;">TÊN SẢN PHẨM</th>
                            <th style="text-align: center; font-weight: bold; width: 450px;">MÔ TẢ</th>
                            <th style="text-align: center; font-weight: bold; width: 200px;">ẢNH MINH HỌA</th>
                            <th style="text-align: center; font-weight: bold; width: 125px;" >GIÁ GỐC</th>
                            <th style="text-align: center; font-weight: bold; width: 125px;">GIÁ BÁN</th>
                            <!-- <th style="text-align: center; font-weight: bold;width: 150px;">SIZE</th> -->
                            <th style="text-align: center; font-weight: bold;width: 125px;">SỐ LƯỢNG</th>
                           <!--  <th>LOẠI SẢN PHẨM</th>
                            <th>LOẠI DANH MỤC</th> -->
                            <th style="text-align: center; font-weight: bold; width : 250px" colspan="2">ACTION</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle text-center">
        <?php 
            // 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muôn HIỂN THỊ, THÊM, SỬA, XOÁ
            require("../db/config.php");

            // 2. Câu lệnh truy vấn đến bảng dữ liệu
            $sql = "
                SELECT * 
                FROM tbl_san_pham
                ORDER BY san_pham_id DESC";

            // 3. Thực hiện truy vấn đến bảng dữ liệu
            $san_pham = mysqli_query($ket_noi, $sql);

            // 4. In kết quả ra màn hình
            while ($row = mysqli_fetch_array($san_pham)) {
        ;?>
        <tr>
            <td><?php echo $row["san_pham_id"];?></td>
            <td><?php echo $row["ten_san_pham"];?></td>
            <td><?php echo $row["mo_ta"];?></td>
            <td><img style="width: 150px;height: 150px;" src="image/<?php echo $row["anh_minh_hoa"];?>"></td>
            <td><?php echo $row["gia_goc"];?></td>
            <td><?php echo $row["gia_ban"];?></td>
           
            <td><?php echo $row["so_luong"];?></td>
            <td><a href="../admin/edit_product.php?id=<?php echo $row["san_pham_id"];?>"><img src="../images/edit.png" style="width: 35px; height:auto;"></a></td>
            <td><a href="../admin/delete_product.php?id=<?php echo $row["san_pham_id"];?>"><img src="../images/delete.jpeg" style="width: 35px; height:auto;"></a></td>
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

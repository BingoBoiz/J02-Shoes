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

                    <?php

            require("../db/config.php");


           


            $order = mysqli_query($ket_noi, "SELECT `tbl_don_hang`.ho_ten_khach, `tbl_don_hang`.dia_chi, `tbl_don_hang`.sdt, `tbl_don_hang`.ghi_chu, tbl_chi_tiet_don_hang.*, tbl_san_pham.ten_san_pham as ten_san_pham FROM `tbl_don_hang` INNER JOIN `tbl_chi_tiet_don_hang` ON `tbl_don_hang`.id = `tbl_chi_tiet_don_hang`.don_hang_id INNER JOIN `tbl_san_pham` ON `tbl_san_pham`.san_pham_id = `tbl_chi_tiet_don_hang`.san_pham_id WHERE `tbl_don_hang`.id = " . $_GET['id']);
           

            $order = mysqli_fetch_all($order, MYSQLI_ASSOC);
        
        ?>
        <div id="tbl-chi-tiet-don-hang-wrapper">
            <div id="tbl-chi-tiet-don-hang">
                <h1>Chi tiết đơn hàng</h1>
                <label>Người nhận: </label><span> <?= $order[0]['ho_ten_khach'] ?></span><br/>
                <label>Điện thoại: </label><span> <?= $order[0]['dia_chi'] ?></span><br/>
                <label>Địa chỉ: </label><span> <?= $order[0]['sdt'] ?></span><br/>
                <p><label>Ghi chú:  </label><?= $order[0]['ghi_chu'] ?></p>
                <hr/>
                <h3>Danh sách sản phẩm</h3>


<div class="container-fluid">
                   <!--  <h1 style="text-align: center;">DANH SÁCH ĐƠN HÀNG</h1> -->
                </div>
                <!-- <p style="text-align:left;"><a href="contact_perform.php"><img src="../images/add.jpeg" style="width: 35px; height:auto;"></a></p> -->
                <div class="container-fluid">
                    <table class="table table-striped table-striped-columns table-hover table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th style="text-align: center; font-weight: bold; width: 150px;">STT</th>
                            <th style="text-align: center; font-weight: bold; width: 200px;">TÊN SẢN PHẨM</th>
                            <th style="text-align: center; font-weight: bold; width: 200px;">SỐ LƯỢNG</th>
                            <th style="text-align: center; font-weight: bold; width: 200px;">ĐƠN GIÁ</th>
                            <th style="text-align: center; font-weight: bold; width: 200px;">THÀNH TIỀN</th>
                           <!--  <th style="text-align: center; font-weight: bold; width: 200px;">TRẠNG THÁI</th> -->
                           <!--  <th style="text-align: center; font-weight: bold; width: 200px;">DETAILS</th> -->
                            
                           <!--  <th>LOẠI SẢN PHẨM</th>
                            <th>LOẠI DANH MỤC</th> -->
                        </tr>
                    </thead>
                    <tbody class="align-middle text-center">
        <?php 
            require("../db/config.php");

$num = 1;

           


            $order = mysqli_query($ket_noi, "SELECT `tbl_san_pham`.ten_san_pham, `tbl_chi_tiet_don_hang`.quantity, `tbl_chi_tiet_don_hang`.price, tbl_san_pham.ten_san_pham as ten_san_pham FROM `tbl_don_hang` INNER JOIN `tbl_chi_tiet_don_hang` ON `tbl_don_hang`.id = `tbl_chi_tiet_don_hang`.don_hang_id INNER JOIN `tbl_san_pham` ON `tbl_san_pham`.san_pham_id = `tbl_chi_tiet_don_hang`.san_pham_id WHERE `tbl_don_hang`.id = " . $_GET['id']);
           

            /*$order = mysqli_fetch_all($order, MYSQLI_ASSOC);
*/            
            // 4. In kết quả ra màn hình
            while ( $row = mysqli_fetch_array($order)) {
        ;?>
        <tr>
            <td style="text-align: center; font-family: Arial; font-weight: black;"><?= $num++; ?></td>
            <td><?php echo $row["ten_san_pham"];?></td>
            <td><?php echo $row["quantity"];?></td>
            <td><?php echo $row["price"];?></td>
            <td ><?= number_format($row['price'] *$row['quantity'] , 0, ",", ".") ?></td>
            
          
            

        </tr>

        <?php
            }
        ;?>
                    </tbody>
                </table>
                </div>

                





                <ul>
                    <?php
                    $totalQuantity = 0;
                    $totalMoney = 0;
                    foreach ($order as $row) {
                        ?>
                        <li>
                            <span class="item-name"><?= $row['ten_san_pham'] ?></span>
                            <span class="item-quantity"> - SL: <?= $row['quantity'] ?> sản phẩm</span>
                        </li>
                        <?php
                        $totalMoney += ($row['price'] * $row['quantity']);
                        $totalQuantity += $row['quantity'];
                    }
                    ?>
                </ul>
                <hr/>
                <label style="font-size: 20px"><strong>Tổng tiền:</strong> </label> <?= number_format($totalMoney, 0, ",", ".") ?> $
                
            </div>
        </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

<?php
@ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style1.css">
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Shoes</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
  </head> 
  <body class="main-layout">
    <!-- header section start -->
    <?php include_once 'layout/header.php';?>
  	
    <!-- START nav-->

 <div style="font-family: Arial;" class="collection_text">Đơn Hàng</div>
    <!-- END nav -->

          
           <?php
        require("./db/config.php");
        
         //session_start();
        if (!isset($_SESSION["cart"])) {
            $_SESSION["cart"] = array();
        }
        $error = false;
        $success = false;

        if (isset($_GET['action'])) {

            function update_cart($add = false) {

                foreach ($_POST['quantity'] as $id => $quantity) {

                    if ($quantity == 0) {
                        unset($_SESSION["cart"][$id]);
                    } else {
                            if ($add) {
                                       if(isset($_SESSION["cart"][$id])==0){
                                        $_SESSION["cart"][$id] = $quantity;
                                       }
                                       else{
                                        $_SESSION["cart"][$id] += $quantity;
                                       }
                        } else {
                            $_SESSION["cart"][$id] = $quantity;
                        }
                        
                    }
                }
            }


                //2. viet cau lenh truy van lay ra du lieu mong muon
                
           $soluong = count($_SESSION["cart"]);

            switch ($_GET['action']) {
                case "add":
                    update_cart(true);
                    
                    break;
                case "delete":
                    if (isset($_GET['id'])) {
                        unset($_SESSION["cart"][$_GET['id']]);
                    }
                    
                    break;
                case "submit":

                    if (isset($_POST['update_click']))
                     { if ($soluong==0) {
                         break;
                     }
                        update_cart();
                        
                    } elseif ($_POST['order_click']) { //Đặt hàng sản phẩm
                        if (empty($_POST['name'])) {
                            $error = "Bạn chưa nhập tên của người nhận";
                        } elseif (empty($_POST['phone'])) {
                            $error = "Bạn chưa nhập số điện thoại người nhận";
                        } elseif (empty($_POST['email'])) {
                            $error = "Bạn chưa nhập email người nhận";
                        } elseif (empty($_POST['address'])) {
                            $error = "Bạn chưa nhập địa chỉ người nhận";
                        } elseif (empty($_POST['quantity'])) {
                            $error = "Giỏ hàng rỗng";
                        }
                        if ($error == false && !empty($_POST['quantity'])) { //Xử lý lưu giỏ hàng vào db
                            $products = mysqli_query($ket_noi, "SELECT * FROM `tbl_san_pham` WHERE `san_pham_id` IN (" . implode(",", array_keys($_POST['quantity'])) . ")");
                            $total = 0;
                            $orderProducts = array();
                            while ($row = mysqli_fetch_array($products)) {
                                $orderProducts[] = $row;
                                $total += $row['gia_ban'] * $_POST['quantity'][$row['san_pham_id']];
                            }
                            $insertOrder = mysqli_query($ket_noi, "INSERT INTO `tbl_don_hang` (`id`, `ho_ten_khach`, `email`, `sdt`, `dia_chi`, `ghi_chu`, `total`, `created_at` ) 
                                VALUES (NULL, '" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $_POST['phone'] . "','" . $_POST['address'] . "', '" . $_POST['note'] . "', '" . $total . "', '" . time() . "');");
                            $orderID = $ket_noi->insert_id;
                            $insertString = "";
                            foreach ($orderProducts as $key => $product) {
                                $insertString .= "(NULL, '" . $orderID . "', '" . $product['san_pham_id'] . "', '" . $_POST['quantity'][$product['san_pham_id']] . "', '" . $product['gia_ban'] . "', '" . time() . "', '" . time() . "')";
                                if ($key != count($orderProducts) - 1) {
                                    $insertString .= ",";
                                }
                            }
                            $insertOrder = mysqli_query($ket_noi, "INSERT INTO `tbl_chi_tiet_don_hang` (`id`, `don_hang_id`, `san_pham_id`, `quantity`, `price`, `created_at`, `last_updated`) VALUES " . $insertString . ";");
                            $success = "Đặt hàng thành công";
                            unset($_SESSION['cart']);
                        }
                    }
                    break;
            }
        }
        if (!empty($_SESSION["cart"])) {
            $products = mysqli_query($ket_noi, "SELECT * FROM `tbl_san_pham` WHERE `san_pham_id` IN (" . implode(",", array_keys($_SESSION["cart"])) . ")");
        }
        ?>
    
    <div id="gio_hang" class="container body">
       <div class="main_container">
          <div class="left_col scroll-view">

            <!-- page content -->
            <div class="left_col" role="main">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12" style="position: relative; left: -50px;">
                  <!-- <h1 style="height: 100px; width: 180px; line-height: 100px; font-weight: 600; color:white ; background-color: #C49B63; text-align: left; border-radius: 0 115px 115px 0; ">Giỏ hàng</h1> -->
                  <div style="width: auto; margin: auto">
                      <!-- <p style="text-align: right;"><a href="product.php">Thêm sản phẩm<span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></p> -->
                     <p style="text-align: right;" > <a href="product.php"><button style="text-align: right;" class="more_bt" >Add product</button><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></p>
                        <?php if (!empty($error)) { ?> 
                            <div id="notify-msg">
                                <?= $error ?>. <a href="javascript:history.back()">Quay lại</a>
                            </div>
                        <?php } elseif (!empty($success)) { ?>
                            <div style="font-family: Arial; font-size: 30px;" id="notify-msg">
                                <?= $success ?>. <a href="TrangChu.php">Tiếp tục mua hàng</a>
                            </div>
                        <?php } else { ?>
                          
                
                    <form id="cart-form" action="cart.php?action=submit" method="POST">
                    <table id="giohang" class="table table-bordered">
                        <tr>
                          <table class="table table-striped table-striped-columns table-hover table-bordered">
                            <thead class="thead-primary">
                              <tr>
                                <th style="text-align: center; font-weight: black; width: 80px;">STT</th>
                            <th style="text-align: center; font-family: Arial; font-weight: black; width: 200px;">Tên sản phẩm</th>
                            <th style="text-align: center;font-family: Arial; font-weight: black; width: 200px;">Ảnh sản phẩm</th>
                            <th style="text-align: center;font-family: Arial; font-weight: black; width: 125px;">Đơn giá</th>
                            <th style="text-align: center;font-family: Arial; font-weight: black; width: 125px;">Số lượng</th>
                            <th style="text-align: center;font-family: Arial; font-weight: black; width: 125px;">Thành tiền</th>
                            <th style="text-align: center;font-family: Arial; font-weight: black;width: 125px;">Xóa</th>
                                
                              </tr>
                            </thead>
                        </tr>

                        <?php
                        if (!empty($products)) {
                            $total = 0;
                            $num = 1;
                            while ($row = mysqli_fetch_array($products)) {
                                ?>
                                <tr>
                                    <td style="text-align: center; font-family: Arial; font-weight: black;"><?= $num++; ?></td>
                                    <td  style="text-align: center; font-family: Arial; font-weight: black;"><?= $row['ten_san_pham'] ?></td>
                                    <td style="text-align: center;" class="product-img"><img src="admin/image/<?= $row['anh_minh_hoa']?>" style="width: 50%; height: auto;"/></td>
                                    <td class="product-price" style="text-align: center; font-family: Arial; font-weight: black;"><?= number_format($row['gia_ban'], 0, ",", ".") ?></td>
                                    <td class="product-quantity" style="text-align: center; font-family: Arial; font-weight: black;"><input style="text-align: center;" type="text" value="<?= $_SESSION["cart"][$row['san_pham_id']] ?>" name="quantity[<?= $row['san_pham_id'] ?>]" /></td>
                                    <td class="total-money" style="text-align: center; font-family: Arial; font-weight: black;"><?= number_format($row['gia_ban'] * $_SESSION["cart"][$row['san_pham_id']], 0, ",", ".") ?></td>
                                    <td style="text-align: center; font-family: Arial; font-weight: black;" class="product-delete" ><a href="cart.php?action=delete&id=<?= $row['san_pham_id'] ?>">Xóa</a></td>
                                </tr>
                                <?php
                                $total += $row['gia_ban'] * $_SESSION["cart"][$row['san_pham_id']];
                                /*$num++;*/
                            }
                            ?>
                            <tr id="row-total">
                                <td class="product-number">&nbsp;</td>
                                <td class="product-name" style="text-align: center; font-family: Arial; font-weight: black; font-size: 16px; "><strong>Tổng tiền</strong></td>
                                <td class="product-img">&nbsp;</td>
                                <td class="product-price">&nbsp;</td>
                                <td class="product-quantity">&nbsp;</td>
                                <td class="total-money" style="text-align: center; font-family: Arial; font-weight: black;"><strong><?= number_format($total, 0, ",", ".") ?></strong></td>
                                <td class="product-delete" style="text-align: center; font-family: Arial; font-weight: black;  ">Xóa</td>
                            </tr>
                            <?php
                        }
                                ?>
                            </table>
                            <div id="form-button" style="text-align: right;" >
                                <input style="letter-spacing: 3px; font-family: Arial;
                            padding: 5px 20px; background-color:#ff4e5b; color: white;" type="submit" name="update_click" value="Cập nhật" />
                            </div>
                            <br>
                            <br>
                            <br>
        <section class="ftco-section">
              <div class="container">
                <h3 style="font-family:Arial; font-size:50px; margin-left:87px" class="mb-4 billing-heading">Thông tin đặt hàng</h3>
                <div class="roww">


                    <div class="col-md-6">
                    <div class="email_box">
                    <div class="input_main">
                       <div class="container">
                          <form action="contact_perform.php" method="post">
                            <div class="form-group">
                              <input type="text"  class="email-bt" placeholder="Họ & tên" name="name" required style="font-family: Arial;">
                            </div>

                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Số điện thoại" name="phone" required style="font-family: Arial;">
                            </div>

                            <div class="form-group">
                              <input type="email" class="email-bt" placeholder="Email" name="email" required />
                            </div>
                            
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Address" name="address" required />
                            </div>

                            <div class="form-group">
                                <textarea class="massage-bt" placeholder="Nội dung" rows="5" id="comment" name="note" required style="font-family: Arial;"></textarea>
                            </div>

                            <div class="send_btn">
                             <button> <input style="height: 50px;width: 133px; background-color:#ff4e5b; font-family: Arial; color:white ;" class="send_btn" type="submit" name="order_click" value="Đặt hàng" ></button>
                            </div> 
                            
                          </form>   
                        </div>                                         
                    </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="height:679px;width: 721px;" class="shop_banner">
                        <div class="our_shop">
                            <button class="out_shop_bt">J02 store</button>
                        </div>
                    </div>
                </div>



                <!--   <div class="col-xl-8 ftco-animate">
                    <form action="#" class="billing-form ftco-bg-dark p-3 p-md-5">
                      <h3 style="font-family:Arial" class="mb-4 billing-heading">Thông tin đặt hàng</h3>
                      <div class="roww">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label type="text" class="form-control" for="firstname">Họ tên</label>
                            <input type="text" class="form-control" placeholder="Name" value="" name="name" />
                          </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label type="text" class="form-control" for="streetaddress">SĐT</label>
                            <input type="text" class="form-control" placeholder="SDT" value="" name="phone" />
                          </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label type="text" class="form-control" for="streetaddress">SĐT</label>
                            <input type="text" class="form-control" placeholder="email" value="" name="email" />
                          </div>
                        </div>

                        <div class="w-100"></div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label type="text" class="form-control" for="phone">Địa chỉ</label>
                             <input type="text" class="form-control" placeholder="DiaChi" value="" name="address" />
                          </div>
                        </div>
                         <div class="w-100"></div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label type="text" class="form-control" for="emailaddress">Ghi chú</label>
                            <input type="text" class="form-control"  name="note" placeholder="GhiChu" cols="50" rows="7">
                          </div>
                        </div>
                      </div>
                      <input style="margin-left:50px;letter-spacing: 4px;
                            padding: 14px 35px; background-color:#ff4e5b; font-family: Arial; color:white ; " type="submit" name="order_click" value="Đặt hàng" />
                            <br>
                            <br>
                    </form> END -->
                        </form> 
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
</section>
</tr>
</table>
</form>
</div>
</div>
</div>
</div>
  
    <!-- FOOTER -->
    

    <!-- END FOOTER -->
  
  <!-- loader -->
 <br>
 <br>

<br>

<br>

<br>

<br>

<br>

<br>


<?php include_once 'layout/footer.php';?> 
<!-- section footer end -->
<div class="copyright"> <a href="https://www.facebook.com/groups/2855388901399372">2023 - J02 - Group1 - HVNH</a></div>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

    
  </body>
</html>
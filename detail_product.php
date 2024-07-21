<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
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
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
    <!-- header section start -->
    <?php include_once 'layout/header.php';?>
    <!-- New Arrivals section start -->
   <?php 
            $ketnoi = mysqli_connect("localhost","id20271901_j02","N2)59(wRVeWAQ1t%","id20271901_ss_j02");
            /*mysqli_set_charset($ketnoi, 'UTF8');*/
            
            // Bước 2: Lấy dữ liệu từ trên đường đẫn
            $id=$_GET["id"];

            //Bước 3: Hiển thị các dữ liệu trong bảng tbl_sanpham ra đây
            $sql = "
                SELECT * 
                FROM tbl_san_pham 
                WHERE san_pham_id = ".$id
                ;
            
            $dulieu = mysqli_query($ketnoi, $sql);
          //  $product = mysqli_fetch_assoc($dulieu);
            $row = mysqli_fetch_array($dulieu);
        ;?>



  <div class="collection_text">Detail_Product</div>
    <div class="collection_section">
    <!-- <div class="container">
        <p style="center" class="consectetur_text">Sự hài lòng của khách hàng là mục đích đến của chúng tôi</p>
    </div> -->
</div>
<div class="collectipn_section_3 layuot_padding">
    <div class="container">
        <div class="racing_shoes">
            <div class="row">
                <div style="margin-right:-43px;" class="col-md-8">
                    <div style="width: 70%; margin-left: 68px;" class="shoes-img3">
                        <?php 
            $ketnoi = mysqli_connect("localhost","id20271901_j02","N2)59(wRVeWAQ1t%","id20271901_ss_j02");
            /*mysqli_set_charset($ketnoi, 'UTF8');*/
            
            // Bước 2: Lấy dữ liệu từ trên đường đẫn
            $id=$_GET["id"];

            //Bước 3: Hiển thị các dữ liệu trong bảng tbl_sanpham ra đây
            $sql = "
                SELECT * 
                FROM tbl_san_pham 
                WHERE san_pham_id = ".$id
                ;
            
            $dulieu = mysqli_query($ketnoi, $sql);
          //  $product = mysqli_fetch_assoc($dulieu);
            $row = mysqli_fetch_array($dulieu);
        ;?>
                           <img src="admin/image/<?php echo $row["anh_minh_hoa"] ?>">
                    </div>
                </div>
                <div style="margin-right: 10px;" class="col-md-4">
                    <div style="font-size: 35px; font-family: Arial" class="sale_text"><strong><?php echo $row["ten_san_pham"] ?><br><span style="color: #0a0506;">$<?php echo $row["gia_ban"] ?> - <strike>$<?php echo $row["gia_goc"] ?></strike></span></strong></div>
                    <div style=" font-size: 35px; font-family: Arial;" class="number_text"><strong>Mô tả:</strong></div>
                    <div style=" font-size: 20px; font-family: Arial; color: black;">
                        <?php echo $row["mo_ta"] ?>
                     </div>
                    <!-- <button class="seemore">See More</button> -->
                    <div class="row"  style="text-align: left;">
                                <label for="inputNumber"  style="margin-left:16px;letter-spacing: 3px;padding: 16px; font-size: 20px; background-color:#ff4e5b; color:white;text-align:center; height:64px;font-family: Arial; ">Số lượng</label>
                                    <div class="col-sm-2">
                                        <input type="hidden" name="temp_id" value="276">
                                        <!-- begin thêm hoặc đặt -->
                            <form id="add-to-cart-form" action="cart.php?action=add" method="POST">
                                        <input type="number" id="soluong" class="form-control" id="inputNumber" name="quantity[<?php echo $row["san_pham_id"];?>]" value="1" style="width: 146px; height: 64px; text-align:center">
                                    </div>
                                    </div>
                                    
                </div>
            </div>
            <div class="control" >
                                <div class="row" style="text-align: left;">
                                    <div class="col-lg-12">
                                   <br><br>
                                    <button type="submit" style="background-color: #ff4e5b ;height: 45px; width: 180px; color:white; font-size: 16px;border-style: solid; border-color: #F05D40; margin-right:30px; border:none;margin-left: 360px;font-family: Arial;">
                                    <img style="height: 16px; width: auto;  "> Thêm vào giỏ hàng</button>
                                    <button type="submit" name="don_hang" style="background-color: #ff4e5b;height: 45px; width: 180px; color: white; font-size: 16px;border: none; margin: 16px; margin- left : 90px;font-family: Arial;" >Đặt mua ngay</button>
                                    </form>
                </div>
            </div>
        </div>




<a class="nav-link active" data-toggle="tab"
                            role="tab" style="background-color: #ff4e5b;color:white; border: none; font-family: Arial;font-size: 20px;"><b>Hướng dẫn bảo quản</b></a>

                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-5" role="tabpanel">
                            <div class="product__details__tab__content">
                          
                                <div style="font-family: Arial;font-size: 18px;" class="product__details__tab__content__item">
                                   <h5><p><?php echo $row["hdbq"] ?></p></h6>
                            </div>
                        </div>
                    </div>

        </div>

    </div>
</div>
    </div>
    


    <div class="layout_padding gallery_section">
         <a class="nav-link active" data-toggle="tab"
                            role="tab" style=" margin-top: -90px; background-color: black;color:white; border: none; font-size: 45px; text-align: center; font-family:Arial ;"><b>Sản phẩm liên quan</b></a>
                            <br>
                            <br>
                            <br>
        <div class="container">
            <div class="roww">
                <div class="col-md-12 nav-link-wrap mb-5">
                    
                
                     
                  <!-- <div class="col-md-12 d-flex align-items-center">                 
                    <div class="tab-content ftco-animate" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab"> -->
                    <div style="margin-left: 3px;" class="roww">
                         <?php 
                    $ket_noi =mysqli_connect("localhost","id20271901_j02","N2)59(wRVeWAQ1t%","id20271901_ss_j02");
                    $id_dm =$_GET['id_dm'];
                    $sql ="SELECT * FROM tbl_san_pham
                    WHERE danh_muc_id = ".$id_dm." limit 3";
                    $san_pham=mysqli_query($ket_noi,$sql);
                    while($row=mysqli_fetch_array($san_pham))
                    {
                    ;?>
                        <div class="col-md-4 text-center">
                            <div class="menu-wrap">
                                <a href="#" class="menu-img img mb-4" style="background-image: url(admin/image/<?php echo $row["anh_minh_hoa"]?>);"></a>
                                <img class="card-img rounded-0 img-fluid" src="admin/image/<?php echo $row["anh_minh_hoa"] ?>">
                                <div class="text">
                                    <h3><a style="font-size:35px" href="detail_product.php?id=<?php echo $row["san_pham_id"];?> && id_dm=<?php echo $row["danh_muc_id"];?>"><?php echo $row["ten_san_pham"] ?></a></h3>
                                    <p style="font-size:30px" class="price"><span>$<?php echo $row["gia_ban"] ?> - <strike>$<?php echo $row["gia_goc"] ?></strike></span></p>
                                    <p><a href="detail_product.php?id=<?php echo $row["san_pham_id"];?> && id_dm=<?php echo $row["danh_muc_id"];?>"><button style="width: 45%;height: 50px;background-color: black;font-size: 16pt;color: white; text-align:center; margin-left:12px">See Details</button></a></p>
                                </div>
                                    </div>
                                </div>
                                 <?php }
                    ;?>
                            </div>
                        </div>
                      </div>
                    <!-- </div>
                  </div>
                </div> -->
            </div>
            
            
        </div>
    </div>










    <!-- New Arrivals section end -->
    <!-- section footer start -->
    <?php include_once 'layout/footer.php';?> 
<!-- section footer end -->
<div class="copyright"> <a href="https://www.facebook.com/groups/2855388901399372">2023 - J02 - Group1 - HVNH</a></div>


      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
        $(document).ready(function(){

        var quantitiy=0;
           $('.quantity-right-plus').click(function(e){
                
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());
                
                // If is not undefined
                    
                    $('#quantity').val(quantity + 1);

                  
                    // Increment
                
            });

             $('.quantity-left-minus').click(function(e){
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());
                
                // If is not undefined
              
                    // Increment
                    if(quantity>0){
                    $('#quantity').val(quantity - 1);
                    }
            });
            
        });
    </script>
   </body>
</html>

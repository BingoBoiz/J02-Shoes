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
    <?php include "layout/header.php";?>

    <!-- New Arrivals section start -->
        <?php 
        $ket_noi=mysqli_connect("localhost","id20271901_j02","N2)59(wRVeWAQ1t%","id20271901_ss_j02");
         mysqli_set_charset($ket_noi, 'UTF8');
          $tin_tuc = $_GET["id"];
          $sql = "
                SELECT * 
                FROM tbl_tin_tuc
                WHERE tin_tuc_id = ".$tin_tuc."
                ";
            $du_lieu = mysqli_query($ket_noi, $sql);
            $row = mysqli_fetch_array($du_lieu);

        ;?>
        <div class="row">
          <div class="col-md-12 ftco-animate">
            <h1 style="text-align: center">
                <div style=" font-size: 30px; font-family: Arial;" class="collection_text"><?php echo $row["tieu_de"];?></div>
            </h1>
            <br>
            <br>
            <p style=" width: 80%; margin-left: 177px; margin-right:30px ; line-height: 45px; font-family:Arial; font-size: 25px; text-align: center; margin-top: -46px; margin-top: 30px;" class="new_text"><?php echo $row["mo_ta"];?></p>
            
            <p style="text-align: center; " class="consectetur_text">
              <img style="width: 1100px; height: 500px" src="admin/image/<?php echo $row["anh_minh_hoa"] ?>" alt="Ảnh minh họa không tìm thấy" class="img-fluid">
            </p>
            <div class="container">
            <h5><p style="font-family: Arial; font-size: 20px; line-height: 35px;" class="consectetur_text">
              <?php
               $noidung =$row["noi_dung"];
               $result = str_replace("\n", "<br>", $noidung);
               echo $result
              ?>
           </p></h5>
           </div>
          </div> <!-- .col-md-8 -->
        </div>




    <?php include "layout/footer.php";?>


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
  $(document).ready(function() {
        $(".fancybox").fancybox({
          openEffect: "none",
          closeEffect: "none"
        });


        $('#myCarousel').carousel({
          interval: false
        });

        //scroll slides on swipe for touch enabled devices

        $("#myCarousel").on("touchstart", function(event) {

          var yClick = event.originalEvent.touches[0].pageY;
          $(this).one("touchmove", function(event) {

            var yMove = event.originalEvent.touches[0].pageY;
            if (Math.floor(yClick - yMove) > 1) {
              $(".carousel").carousel('next');
            } else if (Math.floor(yClick - yMove) < -1) {
              $(".carousel").carousel('prev');
            }
          });
          $(".carousel").on("touchend", function() {
            $(this).off("touchmove");
          });
        });
</script>

</body>


</html>

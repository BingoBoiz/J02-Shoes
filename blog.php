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
  <title>J02Shoes</title>
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

<body class="main-layout">

<section class="home-slider owl-carousel">
  <div class="slider-item" style="background-image: url(images/back3.jpg);" data-stellar-background-ratio="0.5">
   <div class="overlay"></div>
   <div class="container">
    <div class="row slider-text justify-content-center align-items-center">
      <div class="col-md-7 col-sm-12 text-center ftco-animate">
       <h1 class="mb-3 mt-5 bread">Tin tức</h1>
       <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Trang chủ</a></span> <span>Tin tức</span></p>
     </div>
   </div>
 </div>
</div>
</section>

  <?php include "layout/header.php";?>



<?php
$ket_noi=mysqli_connect("localhost","id20271901_j02","N2)59(wRVeWAQ1t%","id20271901_ss_j02");

$per_page_record = 9;  // Number of entries to show in a page.

// Look for a GET variable page if not found default is 1.

if (isset($_GET["page"])) {

$page  = $_GET["page"];

}

else {

$page=1;

}

$start_from = ($page-1) * $per_page_record;

$query = "SELECT * FROM tbl_san_pham LIMIT $start_from, $per_page_record";

$rs_result = mysqli_query ($ket_noi, $query);

?>
    <div class="collection_text">OUR BLOG</div>
<!---new--->
<div class="layout_padding collection_section">
  <div class="container">
    <p style="font-family:Arial; font-size: 30px; text-align: center; margin-top: -46px;" class="consectetur_text">Các thông tin mới nhất về Shoes-Store</p>
    <div class="collection_section_2">
      <div class="roww">
                <?php 
                    $ket_noi=mysqli_connect("localhost","id20271901_j02","N2)59(wRVeWAQ1t%","id20271901_ss_j02");
                    $sql="SELECT * FROM tbl_tin_tuc 
                    ";
                    $san_pham = mysqli_query($ket_noi,$sql);
                    while($row=mysqli_fetch_array($san_pham))
                    {
                ;?>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                            <img style="text-align: center; height: 300px" class="card-img rounded-0 img-fluid" src="admin/image/<?php echo $row["anh_minh_hoa"] ?>">
                        </a>

                          <div class="card-body">
                            <span><?php echo $row["ngay_dang"] ?></span>
                           

                          <div class="blog__item__text">
                            <a style="color: black; font-family: Arial; font-size: 20px" href="detail_blog.php?id=<?php echo $row["tin_tuc_id"];?> " ><?php echo $row["tieu_de"] ?></a>
                          </div>

                        <!-- <a href="detail_blog.php?id=<?php echo $row["tin_tuc_id"];?> && id_dm=<?php echo $row["danh_muc_id"];?>"><button style="width: 45%;height: 50px;background-color: black;font-size: 16pt;color: white; padding-right:-20px" >See More</button>
                        </a> -->
                        
                        <!-- <p class="text-muted">Reviews (9)</p> -->
                        </div>
                    </div>
                </div>
            <?php }; ?>
      </div>
    </div>
  </div>
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




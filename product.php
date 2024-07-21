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
	<?php // include_once 'admin/layout/header.php';?> 
    <?php include_once 'layout/header.php';?>



    
	<!-- New Arrivals section start -->
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
  <div class="collection_text">ALL SHOES</div>
    <div style="background-color: white;" class="collection_section layout_padding">
    	<div class="container">
    		<div style="margin-top: -74px;" class="nav ftco-animate justify-content-center">
                           <?php 
                                    $ket_noi=mysqli_connect("localhost","id20271901_j02","N2)59(wRVeWAQ1t%","id20271901_ss_j02");
                                    $sql="SELECT * FROM tbl_danh_muc

                                    ";
                                    $sanpham=mysqli_query($ket_noi,$sql);
                                    while($row=mysqli_fetch_array($sanpham))
                                    {
                                    ;?>
                          <a style="font-size:28px" class="nav-item nav-link"  aria-selected="true" href="product_by_category.php?id_dm=<?php echo $row["danh_muc_id"];?>"><?php echo $row["ten_danh_muc"] ?></a>
                          <?php }; ?>
                    </div>

    	</div>
    </div>
    
    <div class="layout_padding gallery_section">
    	<div class="container">
    		<div class="roww">
    			<div class="col-md-12 nav-link-wrap mb-5">
                    
                
                     
                  <!-- <div class="col-md-12 d-flex align-items-center">                 
                    <div class="tab-content ftco-animate" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab"> -->
                    <div style="margin-left: 3px;" class="roww">
                         <?php 

                        $timestamp = time();
                        $ket_noi=mysqli_connect("localhost","id20271901_j02","N2)59(wRVeWAQ1t%","id20271901_ss_j02");
                        //$sql="SELECT * FROM tbl_san_pham 
                        //";
                        $per_page_record = 9;  //số sản phẩm muốn hiển thị
                        //Lấy số trang hiện tại
                        if (isset($_GET["page"])) { //nếu trang đã có thì page = số trang

                        $page  = $_GET["page"];

                        }

                        else {

                        $page=1;

                        }

                        $start_from = ($page-1) * $per_page_record; //sản phẩm đầu tiên được truy vấn

                        $query = "SELECT * FROM tbl_san_pham LIMIT $start_from, $per_page_record";

                        $rs_result = mysqli_query ($ket_noi, $query);
                       // $sanpham=mysqli_query($ket_noi,$sql);
                        while($row=mysqli_fetch_array($rs_result))
                        {
                    ;?>
                        <div class="col-md-4 text-center">
                            <div class="menu-wrap">
                                <a href="#" class="menu-img img mb-4" style="background-image: url(admin/image/<?php echo $row["anh_minh_hoa"]?>);"></a>
                                <img class="card-img rounded-0 img-fluid" src="admin/image/<?php echo $row["anh_minh_hoa"] ?>">
                                <div  class="text">
                                    <h3 style="font-size: 30px; color: white;" ><a style="color: white;"href="detail_product.php?id=<?php echo $row["san_pham_id"];?> && id_dm=<?php echo $row["danh_muc_id"];?>"><?php echo $row["ten_san_pham"] ?></a></h3>
                                    <p style="font-size: 30px; color: white;" class="price"><span>$<?php echo $row["gia_ban"] ?> - <strike>$<?php echo $row["gia_goc"] ?></strike></span></p>
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
            <div class="container" style="text-align: center;">
  <?php
  $query = "SELECT COUNT(*) FROM tbl_san_pham";

  $rs_result = mysqli_query($ket_noi, $query);

  $row = mysqli_fetch_row($rs_result);

  $total_records = $row[0]; //tổng sp

  echo "<br>";

  // Number of pages required.

  $total_pages = ceil($total_records / $per_page_record); //tổng số trang

  $pagLink = "";

  if($page>=2){

  echo "<a href='product.php?page=".($page-1)."'>  Prev </a>"; //quay lại trang trước

  }

  for ($i=1; $i<=$total_pages; $i++) {

  if ($i == $page) {

  $pagLink .= "<a class = 'active' href='product.php?page="

  .$i."'>".$i."</a>";

  }

  else  {

  $pagLink .= "<a href='product.php?page=".$i."'>

  ".$i." </a>";

  }

  };

  echo $pagLink;

  if($page<$total_pages){

  echo "<a href='product.php?page=".($page+1)."'>  Next </a>";

  }

  ?>

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
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         
$('#myCarousel').carousel({
            interval: false
        });

        //scroll slides on swipe for touch enabled devices

        $("#myCarousel").on("touchstart", function(event){

            var yClick = event.originalEvent.touches[0].pageY;
            $(this).one("touchmove", function(event){

                var yMove = event.originalEvent.touches[0].pageY;
                if( Math.floor(yClick - yMove) > 1 ){
                    $(".carousel").carousel('next');
                }
                else if( Math.floor(yClick - yMove) < -1 ){
                    $(".carousel").carousel('prev');
                }
            });
            $(".carousel").on("touchend", function(){
                $(this).off("touchmove");
            });
        });
      </script> 
   </body>
</html>

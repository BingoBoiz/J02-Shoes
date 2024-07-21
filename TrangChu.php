<?php 
	// Khởi tạo phiên làm việc
	session_start();

	// Check xem bạn đã đăng nhập hay chưa?
	// echo $_SESSION['dang_nhap']; exit();
	if(!$_SESSION['user_name']) {
		$url1="index.php";
		echo "
			<script type='text/javascript'>
				window.alert('Bạn KHÔNG ĐƯỢC PHÉP truy cập trang này! Vui lòng đăng nhập hệ thống!');
				window.location.href = '".$url1."';
			</script>
		";
	}
;?>
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
<!-- body -->
<!-- <body class="main-layout"> -->
<!-- header section start -->
<div class="header_section">
	<div class="container container_menu">
		<div class="row">
			<div class="col-sm-3">
				<div class="logo"><a href="#"><img src="images/J02.png"></a></div>
			</div>
			<div class="col-sm-9">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
						<div class="navbar-nav">
							<!-- sửa -->
							<ul>
								<li>
									<a class="nav-item nav-link" href="TrangChu.php">Home</a>
								</li>
								<li>
									<a class="nav-item nav-link" href="product.php">Products</a>
								</li>

								<li>
									<a class="nav-item nav-link" href="service.php">Services</a>
								</li>
								<li  class="nav-item dropdown">
									 <a class="nav-link dropdown-toggle" href="product_by_category.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
										 <div style="background-color: #795548;" class="dropdown-menu" aria-labelledby="dropdown04">
						  					<ul class="dropdown">
                           					 <?php 
                           					 $ket_noi=mysqli_connect("localhost","id20271901_j02","N2)59(wRVeWAQ1t%","id20271901_id20271901_ss_j02");
                            				 $sql="SELECT * FROM tbl_danh_muc ";
                            				 $sanpham=mysqli_query($ket_noi,$sql);
                            				while($row=mysqli_fetch_array($sanpham)){
                           					 ;?>
                           	    <li  ><a  class="nav-link"  href="product_by_category.php?id_dm=<?php echo $row["danh_muc_id"];?>"><?php echo $row["ten_danh_muc"] ?></a></li>
                           			 <?php }; ?>
                           					</ul>
                        				 </div>
								<li>
									<a class="nav-item nav-link" href="blog.php">Blog</a>
								</li>

								<li>
									<a class="nav-item nav-link" href="about.php">About Us</a>
								</li>

								<li>
									<a class="nav-item nav-link" href="contact.php">Contact</a>
								</li>

								<li>
									<a class="nav-item nav-link" href="index.php">Log Out</a>
								</li>

								<!-- <li>
									<a class="nav-item nav-link last" href="#"><img src="images/search_icon.png"></a>
								</li>
 -->
								<li>
                                    <a class="nav-item nav-link last" href="cart.php"><img src="images/shop_icon.png"></a>
                                </li>
							</ul>

						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<div class="banner_section">
		<div class="container-fluid">
			<section class="slide-wrapper">
				<div class="container-fluid">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<!-- <li data-target="#myCarousel" data-slide-to="0" class="active"></li> -->
							<li data-target="#myCarousel" data-slide-to="0"></li>
							<!-- <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li> -->
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<!-- <div class="carousel-item active"> -->
								<div class="row">
									<div class="col-sm-2 padding_0">
										<p class="mens_taital">J02 Shoes</p>
										<div class="page_no">New</div>
										<p class="mens_taital_2">J02 Shoes</p>
									</div>
									<div class="col-sm-5">
										<div class="banner_taital">
											<h1 class="banner_text">New Running Shoes </h1>
											<h1 class="mens_text"><strong>Men's Like Plex</strong></h1>
											<p style="font-family: Arial ; font-size: 20px;" class="lorem_text">Những sản phẩm đến từ thương hiệu MLB cực kì nhẹ nhàng cho những bước chạy năng động của giới trẻ yêu thích thể thao hiện nay.</p>
											<a href="product.php"><button style="margin-left: 80px;" class="buy_bt" >See ALL</button></a>
											<!-- <button class="more_bt">See ALL</button> -->
										</div>
									</div>
									<div class="col-sm-5">
										<div class="shoes_img"><img src="images/running-shoes.png"></div>
									</div>
								<!-- </div> -->
							</div>
							<div class="carousel-item">
								<div class="row">
									<div class="col-sm-2 padding_0">
										<p class="mens_taital">Men Shoes</p>
										<div class="page_no">0/2</div>
										<p class="mens_taital_2">Men Shoes</p>
									</div>
									<div class="col-sm-5">
										<div class="banner_taital">
											<h1 class="banner_text">New Running Shoes </h1>
											<h1 class="mens_text"><strong>Men's Like Plex</strong></h1>
											<p class="lorem_text">ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
											<button class="buy_bt">Buy Now</button>
											<button class="more_bt">See More</button>
										</div>
									</div>
									<div class="col-sm-5">
										<div class="shoes_img"><img src="images/running-shoes.png"></div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row">
									<div class="col-sm-2 padding_0">
										<p class="mens_taital">Men Shoes</p>
										<div class="page_no">0/2</div>
										<p class="mens_taital_2">Men Shoes</p>
									</div>
									<div class="col-sm-5">
										<div class="banner_taital">
											<h1 class="banner_text">New Running Shoes </h1>
											<h1 class="mens_text"><strong>Men's Like Plex</strong></h1>
											<p class="lorem_text">ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
											<button class="buy_bt">Buy Now</button>
											<button class="more_bt">See More</button>
										</div>
									</div>
									<div class="col-sm-5">
										<div class="shoes_img"><img src="images/running-shoes.png"></div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row">
									<div class="col-sm-2 padding_0">
										<p class="mens_taital">Men Shoes</p>
										<div class="page_no">0/2</div>
										<p class="mens_taital_2">Men Shoes</p>
									</div>
									<div class="col-sm-5">
										<div class="banner_taital">
											<h1 class="banner_text">New Running Shoes </h1>
											<h1 class="mens_text"><strong>Men's Like Plex</strong></h1>
											<p class="lorem_text">ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
											<button class="buy_bt">Buy Now</button>
											<button class="more_bt">See More</button>
										</div>
									</div>
									<div class="col-sm-5">
										<div class="shoes_img"><img src="images/running-shoes.png"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>




<!-- header section end -->
<!-- new products section start -->
<div  class="layout_padding collection_section">
	<div class="container">
		<h1 class="new_text"><strong>Featured Products</strong></h1>
		<p style="font-family:Arial; font-size: 20px;" class="consectetur_text">Những sản phẩm nổi bật của Shop có nhiều thiết kế mới lạ độc đáo mang xu hướng trẻ trung, năng động, độc là phù hợp với giới trẻ gen Z hiện nay</p>
		<div class="collection_section_2">
			<div class="row">
			<?php 
                    $ket_noi=mysqli_connect("localhost","id20271901_j02","N2)59(wRVeWAQ1t%","id20271901_ss_j02");
                    $sql="SELECT * FROM tbl_san_pham
                    WHERE loai_san_pham_id = 2 limit 3";
                    $san_pham = mysqli_query($ket_noi,$sql);
                    while($row=mysqli_fetch_array($san_pham))
                    {
                ;?>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                         <a style="text-align: center;" href="detail_product.php?id=<?php echo $row["san_pham_id"];?> && id_dm=<?php echo $row["danh_muc_id"];?>" class="h2 text-decoration-none text-dark"><?php echo $row["ten_san_pham"] ?></a>
                            <img class="card-img rounded-0 img-fluid" src="admin/image/<?php echo $row["anh_minh_hoa"] ?>">
                        </a>
                        	<div class="card-body">
                            	<ul class="list-unstyled d-flex justify-content-between">
                               
                                	</li>
                            	</ul>
                        <a style="text-align: center;" href="detail_product.php?id=<?php echo $row["san_pham_id"];?> && id_dm=<?php echo $row["danh_muc_id"];?>" class="h2 text-decoration-none text-dark"><?php echo $row["ten_san_pham"] ?>
                        <br>
                        </a>
                        <br>
                        <li style="font-size: 35px; text-align: center;">$<?php echo $row["gia_ban"] ?> - <strike>$<?php echo $row["gia_goc"] ?></strike>
                                	</li>
                        <!-- <li style="center"><button style="width: 45%;height: 50px;background-color: #ff4e5b;font-size: 16pt; ">Buy Now</button> -->
                        	
                        	<br>
                       <li><a href="detail_product.php?id=<?php echo $row["san_pham_id"];?> && id_dm=<?php echo $row["danh_muc_id"];?>"><button style="width: 45%;height: 50px;background-color: #ff4e5b;font-size: 16pt;color: white; text-align:center; margin-left:80px">See Details</button></a></li>
                      
                        <!-- <p class="text-muted">Reviews (9)</p> -->
                        </div>
                    </div>
                </div>
            <?php }; ?>
			</div>
		</div>
	</div>
</div>
<div class="collection_section">
	<div class="container">
		<h1 class="new_text"><strong>Hot Sale</strong></h1>
		<p style="font-family: Arial; font-size: 20px;" class="consectetur_text">Các sản phẩm hot nhất của shop được săn đón bởi các fan trung thành</p>
	</div>
</div>
<div class="collectipn_section_3 layuot_padding">
	<div class="container">
		<div class="racing_shoes">
			<div class="row">
				<div class="col-md-8">
					<div class="shoes-img3">
						<?php 
                    $ket_noi=mysqli_connect("localhost","id20271901_j02","N2)59(wRVeWAQ1t%","id20271901_id20271901_ss_j02");
                    $sql="SELECT * FROM tbl_san_pham
                    WHERE loai_san_pham_id = 3 limit 1";
                    $san_pham = mysqli_query($ket_noi,$sql);
                    while($row=mysqli_fetch_array($san_pham))
                    {
                ;?>
                            <img src="admin/image/<?php echo $row["anh_minh_hoa"] ?>">
                </div>
           
					
				</div>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<div class="col-md-4">
					<br>
				<br>
				<br>
				<br>
				<br>
				<br>
					<div style="font-size: 50pt" class="sale_text"><strong><li style="font-size: 60pt" href="detail_product.php?id=<?php echo $row["san_pham_id"];?> && id_dm=<?php echo $row["danh_muc_id"];?>" class="h2 text-decoration-none text-dark"><?php echo $row["ten_san_pham"] ?></li></strong>
					<li >$<?php echo $row["gia_ban"] ?> - <strike>$<?php echo $row["gia_goc"] ?></strike>
                                	</li></div>
                                	
                            <br>
                            <br>
                            <br>
				<br>    	
					<br>
				<br>
					<li ><a href="detail_product.php?id=<?php echo $row["san_pham_id"];?> && id_dm=<?php echo $row["danh_muc_id"];?>"><button style="width: 45%;height: 50px;background-color: #ff4e5b;font-size: 16pt;color: white; text-align:center; margin-left:35px">See Details</button></a></li>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="collection_section layout_padding">
	 <?php }; ?>
	<div class="container">
		<h1 class="new_text"><strong>Best Seller</strong></h1>
		<p style="font-family: Arial; font-size:20px" class="consectetur_text">Các sản phẩm giảm giá với giá ưu đãi cực kì hot mà bạn không thể bỏ qua được. Hãy mau đặt hàng nào !</p>
	</div>
</div>
<!-- new collection section end -->
<!-- New Arrivals section start -->
<div class="layout_padding gallery_section">
	<div class="container">
		<div class="row">
			<?php 
                    $ket_noi=mysqli_connect("localhost","id20271901_j02","N2)59(wRVeWAQ1t%","id20271901_ss_j02");
                    $sql="SELECT * FROM tbl_san_pham
                    WHERE loai_san_pham_id = 1 limit 3";
                    $san_pham = mysqli_query($ket_noi,$sql);
                    while($row=mysqli_fetch_array($san_pham))
                    {
                ;?>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                         <a href="detail_product.php?id=<?php echo $row["san_pham_id"];?> && id_dm=<?php echo $row["danh_muc_id"];?>" class="h2 text-decoration-none text-dark"><?php echo $row["ten_san_pham"] ?></a>
                            <img class="card-img rounded-0 img-fluid" src="admin/image/<?php echo $row["anh_minh_hoa"] ?>">
                        </a>
                        	<div class="card-body">
                            	<ul class="list-unstyled d-flex justify-content-between">
                               
                                	<li class="h2 text-decoration-none text-dark">$<?php echo $row["gia_ban"] ?> 
                                	</li>
                            	</ul>
                        <a href="detail_product.php?id=<?php echo $row["san_pham_id"];?> && id_dm=<?php echo $row["danh_muc_id"];?>" class="h2 text-decoration-none text-dark"><?php echo $row["ten_san_pham"] ?>

                        </a>
                        <br>
                        <br>
                        <li><a href="detail_product.php?id=<?php echo $row["san_pham_id"];?> && id_dm=<?php echo $row["danh_muc_id"];?>"><button style="width: 45%;height: 50px;background-color: #ff4e5b;font-size: 16pt;color: white; text-align:center; margin-left:80px">See Details</button></a></li>
                      
                        <!-- <p class="text-muted">Reviews (9)</p> -->
                        </div>
                    </div>
                </div>
            <?php }; ?>
			
		</div>
		<!-- <div class="buy_now_bt">
			<button class="buy_text">See More</button>
		</div> -->
	</div>
</div>



<!-- New Arrivals section end -->
<!-- contact section start -->
<div style="margin-top: -43px;" class="layout_padding contact_section">
	<div class="container">
		<h1 style="font-family: helvetica;" class="new_text"><strong>MY ADDRESS</strong></h1>
	<div id="mapid" style="width: 100%; height: 476px; ">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.5884918492843!2d105.82662451488306!3d21.009126386008997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac800f450807%3A0x419a49bcd94b693a!2zSOG7jWMgdmnhu4duIE5nw6JuIGjDoG5n!5e0!3m2!1svi!2s!4v1675048413962!5m2!1svi!2s" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div> 
	</div>
</div>
<!-- contact section end -->
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
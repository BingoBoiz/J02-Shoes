<div class="header_section header_main">
		<div class="container">
			<div class="row">
				<div class="col-sm-31">
					<div class="logo"><a href="#"><img src="images/J02.png"></a></div>
				</div>
				<div class="col-sm-9">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
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
                                <li class="nav-item dropdown">
                                     <a class="nav-link dropdown-toggle" href="san_pham_theo_danh_muc.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                                         <div style="background-color: #795548;"  class="dropdown-menu" aria-labelledby="dropdown04">
                                            <ul class="dropdown">
                                             <?php 
                                             $ket_noi=mysqli_connect("localhost","id20271901_j02","N2)59(wRVeWAQ1t%","id20271901_ss_j02");
                                             $sql="SELECT * FROM tbl_danh_muc ";
                                             $sanpham=mysqli_query($ket_noi,$sql);
                                            while($row=mysqli_fetch_array($sanpham)){
                                             ;?>
                                <li><a  class="tab-pane" class="nav-link" href="product_by_category.php?id_dm=<?php echo $row["danh_muc_id"];?>"><?php echo $row["ten_danh_muc"] ?></a></li>
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
                           <!-- <a class="nav-item nav-link" href="index.html">Home</a>
                           <a class="nav-item nav-link" href="collection.html">Collection</a>
                           <a class="nav-item nav-link" href="shoes.html">Shoes</a>
                           <a class="nav-item nav-link" href="racing boots.html">Racing Boots</a>
                           <a class="nav-item nav-link" href="contact.html">Contact</a>
                           <a class="nav-item nav-link last" href="#"><img src="images/search_icon.png"></a>
                           <a class="nav-item nav-link last" href="contact.html"><img src="images/shop_icon.png"></a> -->
                        </div>
                    </div>
                    </nav>
				</div>
			</div>
		</div>
	</div>

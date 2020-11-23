<!DOCTYPE html>
<html lang="en">
<head>
<title>Mobile Shopy</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<?php 
		include("header.php");
	?>

	<!-- Menu -->

	<div class="menu menu_mm trans_300">
		<div class="menu_container menu_mm">
			<div class="page_menu_content">
							
				<div class="page_menu_search menu_mm">
					<form action="#">
						<input type="search" required="required" class="page_menu_search_input menu_mm" placeholder="Search for products...">
					</form>
				</div>
			<?php
			include("side2.php");
			?>
			</div>
		</div>

		<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>

		<div class="menu_social">
			<ul>
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
	
	<!-- Home -->

	

	<!-- Ads -->

	

	<!-- Products -->

	<div class="products">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="product_grid">


						 <?php
						 $fid=$_GET['fid'];
				mysql_connect("localhost","root","")or die("opps.! sever could not connect");
				mysql_select_db("mobile_db") or die("database could not connect");

				$res=mysql_query("select * from mobile where SALE_PRIZE > 5000");
				while($row=mysql_fetch_row($res))
				{
					echo'<div class="product" style="border: 2px solid maroon">
							<div class="product_image">
								<a href="detail.php?mid='.$row[0].'"><img src="admin/'.$row[11].'" style="height:200px; width:300px;" alt=""></a>
							</div>
							<div class="product_content">
									<div class="product_title"><a href="#" style="margin-left: 20px;">'.$row[2].'</a>  <span style="color: blue">Rs -'.$row[9].'/-</span></div>
									<div class="product_price">


										<a href="cart_confirm.php?mid='.$row[0].'"><button style="background-color: #000; color: #fff; height: 50px;margin-left: 20px;" data-toggle="modal" data-target="#myModal">Add to cart</button></a>


										<a href="purchase_confirm.php?mid='.$row[0].'"><button style="background-color: #000; color: #fff; height: 50px;">Purchase Now</button><br></a>
									</div>
								</div>
						</div>';


				}
						
					?>	



					</div>
						
				</div>
			</div>
		</div>
	</div>

	<!-- Ad -->

	<div class="avds_xl">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="avds_xl_container clearfix">
						<div class="avds_xl_background" style="background-image:url(im/bb.png)"></div>
						<div class="avds_xl_content">
							<div class="avds_title">Amazing Devices</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Icon Boxes -->


	<!-- Newsletter -->

	

	<!-- Footer -->
	
	<div class="footer_overlay"></div>
	<?php
		include("foot.php");
	?>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
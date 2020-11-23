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
<br><br>
<br><br>
<br><br>
<br><br>
	

	<!-- Ad -->
	<form action="login.php" method="POST">
		<div class="avds_xl">
			<div class="container" >
				<div class="row">
					<div class="col" >
						<div class="avds_xl_container clearfix" >
							<div class="avds_xl_background" style="background-image:url(im/as.jpg)"></div>
							<div class="avds_xl_content" style="background-color: gray; color: #fff">
								<div style="text-align: center;" class="row">
									Login
								</div><hr>
								<div class="row" >
									<div class="col-sm-3">
										<label>Username</label>
									</div>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="username">
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-sm-3">
										<label>Password</label>
									</div>
									<div class="col-sm-9">
										<input type="password" class="form-control" name="password">
									</div>
								</div><br><hr>

								<div class="row">

									<div class="col-sm-10">
										<button class="btn btn-success pull-right" type="submit" name="submit" >Login</button>									
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>	
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

<?php
//login code
if(isset($_POST['submit']))	
{
	mysql_connect("localhost","root","")or die("Server could not connect"); 
    mysql_select_db("mobile_db")or die("Database could not connect");

	$username1=$_POST['username'];
	$password1=$_POST['password'];

	$res=mysql_query("select * from admin where USERNAME='".$username1."' && PASSWORD='".$password1."'");
		$a=mysql_fetch_row($res);

	$res2=mysql_query("select * from registration where REG_EMAIL='".$username1."' && REG_PASSWORD='".$password1."'");
		$a2=mysql_fetch_row($res2);


	
	if($row=(mysql_num_rows($res))>0)
	{
		session_start();
		$_SESSION['admin']=$a[0];
		// This above code used for session variable
		echo'
  			<script>
             window.location.href="admin/index.php";
  			</script>
  		';
	}
	else if($row1=(mysql_num_rows($res2))>0)
	{
		session_start();
		$_SESSION['reg']=$a2[0];
		echo'
  			<script>
             window.location.href="cart.php";
  			</script>
  		';
	}
	
	else
	{
  		echo'
  			<script>
  			alert("Username & Password not matched");
             window.location.href="login.php";
  			</script>
  		';	
	}
}
?>
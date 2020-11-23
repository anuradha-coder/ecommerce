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
	<div class="container" >
	<form action="register.php" method="POST">
		<div class="row ">
			<div class="col-sm-1"></div>
			<div class="col-sm-9" style="background-color: #000; color: #fff">
			<br>
				<div class="row" >
					<div class="col-sm-12" style="text-align: center; color: #fff; font-size: 20px; font-family: magenta">Register Your Account
						
					</div>
				</div><br>
				<div class="row">
					<div class="col-sm-1">
						<label>Name</label>
					</div>
					<div class="col-sm-11">
						<input type="text" class="form-control" name="fname">
					</div>
				</div>
				<br>

				<div class="row">
					<div class="col-sm-1">
						<label>Mobile</label>
					</div>
					<div class="col-sm-5">
						<input type="number" class="form-control" name="mobile">
					</div>
					<div class="col-sm-1">
						<label>Email</label>
					</div>
					<div class="col-sm-5">
						<input type="mail" name="email" class="form-control" name="">
					</div>
				</div>
				<br>

				<div class="row">
					<div class="col-sm-1">
						<label>Address</label>
					</div>
					<div class="col-sm-5">
						<textarea class="form-control" name="address"></textarea>
					</div>
					<div class="col-sm-1">
						<label>Password</label>
					</div>
					<div class="col-sm-5">
						<input type="password" name="password" class="form-control" name="">
					</div>
				</div>
				<br>	
				

				

				<div class="row">
					<div class="col-sm-11">
						<button style="color: #fff" name="save" type="submit" class="btn btn-warning pull-right">Save</button>
					</div>
				</div><br>
			</div>
		</div>
	</form>
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
<?php
    
   
    if(isset($_POST['save']))
    {

        $fname=$_POST['fname'];
        $address=$_POST['address'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $fname=$_POST['fname'];
        $mobile=$_POST['mobile'];


       

        if(mysql_query("insert into registration value('','".$fname."','".$mobile."','".$email."','".$address."','".$password."')"))

        {
            echo'
                <script>
                alert("Registration succesful");
                 window.location.href="register.php";
                </script>
            ';
        }
        else
        {
        	echo'
                <script>
                alert("Plz try again");
                 window.location.href="register.php";
                </script>
            ';
        }
    }
?>
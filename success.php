<!DOCTYPE html>
<?php
	include("functions/function.php");
?>
	<html>
	<head>
		 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<title>My online shop</title>
		<link rel="stylesheet" type="text/css" href="styles/style.css" media="all"/>
	</head>
	<body>
	<!--main container/wrapper start from here-->
		<div class="main_wrapper">
			<!--main header start from here-->
			<div class="header_wrapper">
				<a href="index.php"><img id="logo"src="images/logo.jpg"/></a>
				<a href="index.php"><img id="banner"src="images/1.png"/></a>

			</div>
			<!-- header ends from here-->

			<!--navigation bar start from here-->
			<div class="menubar"> 
			 
				<ul id="menu">
					
					<li> <a href="index.php">Home</a></li>
					<li> <a href="all_products.php">All Products</a></li>
					<li> <a href="login.php">My Account</a></li>
					<li> <a href="register.php">Sign Up</a></li>
					<li> <a href="cart.php">Shopping cart</a></li>
					<li> <a href="#">Contact Us</a></li>
				</ul>

			<div id="form">
			<form method="get" action="results.php" enctype="multipart/form-data">
				<input type="text" name="user_query" placeholder="search a product">
				<input type="submit" name="search" value="search"/ >
			</form>

			</div>



			</div>
			<!--navigation bar ends  here-->

			<!-- content_wrapper start from here-->
			<div class="content_wrapper">
			<div id="sidebar">

				<div id="sidebar_title">Categories</div>

				<ul id="cats">
					<?php getCats(); ?>

				</ul>
					<div id="sidebar_title">Brands</div>
				
				<ul id="cats">
					<?php getBrands();?>


				<ul>

			</div>

			<div id="content_area">

				<?php cart(); ?>

	<div id="shopping_cart">
	<span style="float: right;font-size: 18px;padding: 5px;line-height: 40px;">

 welcome !<b style="color: green">shopping cart-</b> Total Items:<?php total_items();?> Total Price:<?php total_price(); ?> <a href="cart.php" style="color: green">Go to cart</a>

	</span>

</div>


				<div id="products_box">
					
				
			<h1>Payment SuccessFull</h1>

			</div>




		</div>
			<!-- content_wrapper ends  here-->


				<!-- footer start from here-->
			<div id="footer">
				
				<h2 style="text-align: center;padding-top: 30px;">&copy;2019 by www.computer.com </h2>
			</div>
			




		</div>



	</body>
	</html>
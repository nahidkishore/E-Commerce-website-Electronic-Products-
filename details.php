<!DOCTYPE>
<?php
	include("functions/function.php");
?>
	<html>
	<head>
		<title>My online shop</title>
		<link rel="stylesheet" type="text/css" href="styles/style.css" media="all"/>
	</head>
	<body>
	<!--main container/wrapper start from here-->
		<div class="main_wrapper">
			<!--main header start from here-->
			<div class="header_wrapper">
				<img id="logo"src="images/logo.jpg"/>
				<img id="banner"src="images/1.png"/>

			</div>
			<!-- header ends from here-->

			<!--navigation bar start from here-->
			<div class="menubar"> 
			 
				<ul id="menu">
					
					<li> <a href="index.php">Home</a></li>
					<li> <a href="#">All Products</a></li>
					<li> <a href="login.php">My Account</a></li>
					<li> <a href="register.php">Sign Up</a></li>
					<li> <a href="#">Shopping cart</a></li>
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


<div id="shopping_cart">
	<span style="float: right;font-size: 18px;padding: 5px;line-height: 40px;">
	welcome!!!<b style="color: green">shopping cart-</b> Total items: Total Price: <a href="cart.php" style="color: green">Go to cart</a>
</span>

</div>
				
		<div id="products_box">

			<?php 	
if(isset($_GET ['pro_id'])){

	$product_id=$_GET['pro_id'];

	$get_pro="select * from products where product_id='$product_id'";

	$run_pro=mysqli_query($con,$get_pro);

	while($row_pro=mysqli_fetch_array($run_pro)){
		$pro_id=$row_pro['product_id'];
		$pro_brand=$row_pro['product_brand'];
		$pro_title=$row_pro['product_title'];
		$pro_price=$row_pro['product_price'];
		$pro_image=$row_pro['product_image'];
		$pro_desc=$row_pro['product_desc'];
		echo"
			<div id='single_product'>
			
			<h4>$pro_title </h4>
			<img src='admin_area/product_images/$pro_image' width='400' height='400'/>

			<p><b> $ $pro_price </b></p>

			<p> $pro_desc </p>

			<a href='index.php' style='float:left;'> Go Back</a>

			<a href='index.php?pro_id=$pro_id'> <button style='float=right;'>Add to Cart</button></a>

			</div>


		";


}
}
?>
	</div>
				
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

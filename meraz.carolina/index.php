<?php 
include_once "lib/php/functions.php"; 
include_once "parts/templates.php"; 


?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Site</title>
	<link rel="stylesheet" href="lib/css/styleguide.css">
	<link rel="stylesheet" href="lib/css/gridsystem.css">
	<link rel="stylesheet" href="css/storetheme.css">


	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,300&display=swap" rel="stylesheet">
</head>

<body>

		

<header class="navbar">

	

	<div class="container display-flex">
		<div class="flex-none">
			<h1>8I8 Ceramics</h1>
		</div>

		
				

		<div class="flex-stretch">
			<!-- begin hotdog
<div class="hotdogcont">
	<div class="form-control display-justify-center">
					<form>
						<input type="search" class="hotdog dark2" placeholder="Search">
					</form>
				</div>
			</div>
				End hotdog-->


			</div><!-- End div flex stretch-->

		<nav class="flex-none nav">
			<ul class="container display-flex">
				<li><a href="index.php">Home</a></li>
				<li><a href="product_list.php">Shop</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="cart.php">Cart</a></li>
			</ul>

		</nav>


	</div>


</header>



<div class="view-window" style="background-image: url('img/allceramic11.jpg')">
	<div class="textpage">
				<h2 class="text-h1">Unique Ceramic Pieces
					<br> Delivered to Your Doorstep</h2>
					<br>
				<button class="buttonpage">Shop Now</button>
			</div>
      
    </div>

<br>

<div class="container">
	<h2>Latest Home Decoration Products</h2>
	<?php recommendedCategory("decoration");?>
	<br>
	<h2>Latest Kitchen Products</h2>
	<?php recommendedCategory("kitchen");?>
</div>
			


<br>
	<div id="footer2">

			<footer class="f2">818 Ceramics &copy; 2021</footer>

		</div><!-- End footer-->



</body>
</html>

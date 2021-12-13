<?php


include_once "lib/php/functions.php";
include_once "parts/templates.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>Product List</title>
	<?php include "parts/meta.php"; ?>

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>

	

</head>
<body>



<?php include "parts/navbar.php";?>


<div class="container">

<h1>Ceramic Products</h1>

<div class="form-control">
					<form class="hotdog" id="product-search">
						<input type="search"  placeholder="Search Products">
					</form>
				</div><!-- end hotdog-->



<div class="form-control">
	<div class="card">

	<div class="display-flex flex-wrap">

		<div class="flex-stretch display-flex">
			<p><b>Sort by:</b></p>
			<div class="flex-none">
				<button data-filter="category" data-value="" type="button" class="category-button">All</button>
				</div>
				<div class="flex-none">
				<button data-filter="category" data-value="decoration" type="button" class="category-button">Decoration</button>
				</div>
				<div class="flex-none">
				<button data-filter="category" data-value="kitchen" type="button" class="category-button">Kitchen</button>
				</div>

			</div>
		

		<div class="flex-none">
			<div class="form-select">
				<select class="js-sort">
					<option value="1">Newest</option>
					<option value="2">Oldest</option>
					<option value="3">Least Expensive</option>
					<option value="4">More Expensive</option>
					
					</select>
				</div>

			</div>

		</div>
	</div>

</div>

<div class='productlist grid gap'></div>


</div>



<br>

<?php include "parts/footer.php";?>








	
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>Product List</title>
	<?php include "parts/meta.php"; ?>
</head>
<body>



<?php include "parts/navbar.php";?>


<div class="container">

<h1>All Ceramics</h1>

<div class="form-control">
					<form>
						<input type="search" class="hotdog" placeholder="Search">
					</form>
				</div><!-- end hotdog-->




<div class="container" id="productlist">
		

			

			<?php


			include_once "lib/php/functions.php";
			include_once "parts/templates.php";
			$result = makeQuery(
				makeConn(),
				"
				SELECT *
				FROM `products`
				ORDER BY `date_create` ASC
				LIMIT 12
				"
			);

			echo "<div class='grid gap'>",array_reduce($result,'productListTemplate'), "</div>";




			?>
	


			




	</div>

</div>

















<br>

<?php include "parts/footer.php";?>








	
</body>
</html>
<?php include_once "lib/php/functions.php"; ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Checkout Page</title>
	<?php include "parts/meta.php"; ?>
</head>

<body>
<?php include "parts/navbar.php";?>


<div class="container">
	<div class="card soft">
		<h2>Product Checkout</h2>
		


		<form>
			<h3>Address</h3>


	
				

				<div class="form-control">
					<label class="form-label">Street</label>
					<input type="street name" placeholder="Password" class="form-input">
				</div>




					<div class="form-control display-flex flex-align-center">
						<div class="flex-none">
						
							<label class="form-label">City</label>
						</div>
						<div class="flex-stretch">
							<input type="city" placeholder="City" class="form-input">
						</div>
						<div class="flex-none">
							<label class="form-label">State</label>
						</div>
						<div class="flex-stretch">
							<input type="state" placeholder="State" class="form-input">
						</div>
				</div>

				<div class="form-control display-flex flex-align-center">
						<div class="flex-none">
						
							<label class="form-label">Zip Code</label>
						</div>
						<div class="flex-stretch">
							<input type="zip code" placeholder="Zip Code" class="form-input">
						</div>
						<div class="flex-none">
							<label class="form-label">Country</label>
						</div>
						<div class="flex-stretch">
							<input type="country" placeholder="Country" class="form-input">
						</div>
				</div>






<h3>Payment</h3>

	
		

		<div class="form-control">
					<label class="form-label">Name</label>
					<input type="text" placeholder="Name" class="form-input">
				</div>
			
				<div class="form-control">
					<label class="form-label">Card Number</label>
					<input type="Card Number" placeholder="#### #### #### ####" class="form-input">
				</div>


			<div class="form-control display-flex flex-align-center">
						<div class="flex-none">
						
							<label class="form-label">Expiration Date</label>
						</div>
						<div class="flex-stretch">
							<input type="expiration Date" placeholder="MM-YY" class="form-input">
						</div>
						<div class="flex-none">
							<label class="form-label">CVV</label>
						</div>
						<div class="flex-stretch">
							<input type="cvv" placeholder="CVV" class="form-input">
						</div>
				</div>


				<div class="form-control">
					<label class="form-label">Zip Code</label>
					<input type="zip code" placeholder="Zip Code" class="form-input">
				</div>


				<div class="form-control">
					<a href="product_confirmation.php" class="form-button">Complete Checkout</a>
					
				</div>

	</form>











		
	</div>
</div>


	
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<title>Product Item</title>

<?php include "parts/meta.php"; ?>
</head>
<body>

<?php include "parts/navbar.php";?>


<div class="container">
<div class="car">
<h2>Product Item</h2>
<p>This is item # <?= $_GET['id'] ?></p>
<div class="grid">
    <div class="col-xs-12 col-md-6">
        <img src="img/ceramic1.jpg" alt=" " width="90%">
    </div>
    <div class="col-xs-12 col-md-6">
        <h2>Name of Product</h2>
        <p>Product information</p>
        <button class="buttonitem">Add to Cart</button>
     </div>
            
    </div>
</div>


</div>
</div>











</body>
</html>

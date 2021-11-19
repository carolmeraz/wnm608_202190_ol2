<?php

include_once "lib/php/functions.php";
$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$images = explode(",", $product->images);

$image_elements = array_reduce($images,function($r,$o){
    return $r."<img src='$o'>";

});

?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<title>Product Item</title>

<?php include "parts/meta.php"; ?>

<script src="lib/js/product_thumbs.js"></script>

</head>
<body>

<?php include "parts/navbar.php";?>


<div class="container">
    <div class="grid gap">
        <div class="col-xs-12 col-md-7">
            <div class="card soft">
                <div class="images-main">
                <img src="<?= $product->thumbnail ?>">
            </div>
        

        <div class="images-thumbs">
            <?= $image_elements ?>
        </div>
    </div>
</div>
    <div class="col-xs-12 col-md-5">

        <form class="card soft" method="post" action="cart_actions.php?action=add-to-cart">

                <input type="hidden" name="product-id" value="<?= $product->id ?>">

            <div class="card-section">
            <h2 class="product-name"><?= $product->name ?></h2>
            <div class="product-price">&dollar;<?= $product->price ?></div>
        </div>


<div class="card-section">
     <h3>Product Description</h3>
    <p><?= $product->description ?></p>
   
    <div class="form-control">
        <label for="product-amount" class="form-label">Amount</label>
        <div class="form-select">
            <select id="product-amount" name="product-amount">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
            </select>
        </div>
    </div>

    <div class="form-control">
        <label for="product-material" class="form-label">Material</label>
            <div class="form-select">
                <select id="product-mateial" name="product-material">
                    <option>Porcelain</option>
                    <option>Earthware</option>
                    <option>Stoneware</option>
                </select>
            </div>
    </div>


</div>


<div class="card-section">
        <input type="submit" class="form-button" value="Add to Cart">
        
    </div>


    </form>
</div>


</div>



</div>








</body>
</html>

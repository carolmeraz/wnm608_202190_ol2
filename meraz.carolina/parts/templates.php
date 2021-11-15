<?php

function productListTemplate($r,$o) {

return $r.<<<HTML
<div class="col-xs-12 col-md-4">
		<figure class="figure product">
			<a href="product_item.php?id=$o->id">
			<img src="$o->thumbnail" alt="">
			<figcaption>
				<div>$o->name</div></a>
				<div>&dollar;$o->price</div>
			</figcaption>
		</figure>
	</div>

HTML;


}


function cartListTemplate($r,$o){
	return $r.<<<HTML
<div class="display-flex">
	<div class="flex-none images-thumbs">
		<img src="$o->thumbnail">
	</div>
	<div class="flex-stretch">
		<strong>$o->name</strong>
		<div>Delete</div>
    </div>
	<div class="flex-none">
		&dollar;$o->price

	</div>
	
</div>

HTML;
}

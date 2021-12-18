

const listItemTemplate = templater(o=>`

<div class="col-xs-12 col-md-4">
		<figure class="figure product">
			<a href="product_item.php?id=${o.id}">
			<img src="${o.thumbnail}" alt="">
			<figcaption>
				<div>${o.name}</div></a>
				<div>&dollar;${o.price}</div>
			</figcaption>
		</figure>
	</div>

	`);


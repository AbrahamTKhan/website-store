<!-- Abraham Khan - 1906636 -->
<!DOCTYPE html>
<html>
<head>
<!-- Uses PHP to include the navbar header -->
<?php
$page_name = "Basket";
include('inc/header.php');
?>
</head>
<body>

<div class="basket-all">
	<div class="basket-card">
		<div class="basket-img">
			<img src="https://cdn.shopify.com/s/files/1/1881/7103/products/FFIMEDSWEATSHIRT_1200x.png?v=1604640701" alt="Jumper" style="width:100%">
		</div>
		
		<div class="basket-text">
			<h3>STACKED ALBUM CREWNECK SHIRT</h3>
			<p>£29.99</p>
			<button>Remove</button>
		</div>
	</div>
	
	<div class="basket-card">
		<div class="basket-img">
			<img src="https://cdn.shopify.com/s/files/1/1881/7103/products/FFIMEDSWEATSHIRT_1200x.png?v=1604640701" alt="Jumper" style="width:100%">
		</div>
		
		<div class="basket-text">
			<h3>STACKED ALBUM CREWNECK SHIRT</h3>
			<p>£29.99</p>
			<button>Remove</button>
		</div>
	</div>
</div>

<div class="basket-side-nav">
	<a>Subtotal: £0.00</a>
	<a id="checkout">Proceed to Checkout</a>
</div>

</body>
</html>

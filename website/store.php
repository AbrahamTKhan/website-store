<!-- Abraham Khan - 1906636 -->

<!-- Defines the document as an html tag for the browser -->
<!DOCTYPE html>
<html>

<head>
<!-- Uses PHP to include the navbar header -->
<?php
$page_name = "Store";
include('inc/header.php');
?>
</head>

<body>
<!-- Creates class for the top image on the store page -->
<div class="store-top">
	<img id="store-photo" src="https://ksassets.timeincuk.net/wp/uploads/sites/55/2015/08/2015BucketShop_Gallery_8_250815-1.jpg" alt="Photo of Merch" style="width:100%;">
	<!-- Creates class for centering the text over the image -->
	<div class="store-center">
		Store
	</div>
</div>
<!-- Creates class for the filter sidebar -->
<div class="store-side-nav">
	<a id="filter">FILTER</a>
	<a >Type</a>
	<a >Price</a>
	<a >Popularity</a>
	<a >Released</a>
	<a >Rating</a>
</div>



<!-- Creates class for a search bar -->
<div id=search>
	<input id="store-input" placeholder="Search Items...">
</div>

<?php

include('inc/lib.php');
connect();

$sql = "SELECT * FROM items";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
		$product = $row["id"];
		?>
		<div class="store-item">
			<!-- Imports image -->
			<img src=<?php echo $row["url"] ?> alt="Jumper" style="width:100%">
			<p><b><?php echo $row["name"] ?></b></p>
			<p>£<?php echo $row["price"] ?></p>
			<!-- Creates a form and input that stores the ID of the associated item and sends it to the item description page if it is clicked -->
			<form action="item-description.php" method="post"><input type="hidden" value=<?php echo $product ?> name="id"><input type="submit" value="View Item"></form>
		</div>
		
		<?php
	}	 
//Closes the connection
mysqli_close($conn);
?>

</body>

</html>

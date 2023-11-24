<!-- Abraham Khan - 1906636 -->

<!-- Defines the document as an html tag for the browser -->
<!DOCTYPE html>
<html>

<head>
<!-- Uses PHP to include the navbar header -->
<?php
$page_name = "Home";
include('inc/header.php');
?>
</head>

<body>
<!-- This image was used from https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2DOdaIeeam9-YBb47cWaZGw-YnPkWvXpVNg&usqp=CAU -->
<img id="home-live-img" src="images/FF-Live.jpg" alt="Foo Figters Live">

<!-- This image was used from https://i.pinimg.com/originals/2c/f1/25/2cf125f4f8de3f252f8e9adfd0b9b328.jpg -->
<img id="home-front-logo" src="images/FF-Background-Logo.png" alt="Foo Figters Logo">

<!-- Creates class for the text that overlaps the top images -->
<div id="image-about">
	<a href="about.php">About</a>
	<a href="contact.php">Contact</a>
</div>

<!-- Creates header -->
<h1 id="home-header">Featured Items</h1>

<!-- Creates class for the button that links to the store page -->
<div class="go-store">
	<a id="shop-button" href="store.php">Go To Store</a>
</div>

<?php
//Connects to the database using the lib function
include('inc/lib.php');
connect();

//Iterates through the items table to find the four most popular items
$sql = "SELECT * FROM items ORDER BY popularity DESC LIMIT 4";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {
		$product = $row["id"];
		?>
		<!-- Creates class for product card -->
		<div  class="home-item">
			<!-- Imports image -->
			<img src=<?php echo $row["url"] ?> alt=<?php echo $row["category"] ?> style="width:100%">
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

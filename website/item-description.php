<!-- Abraham Khan - 1906636 -->

<!-- Defines the document as an html tag for the browser -->
<!DOCTYPE html>
<html>

<head>
<!-- Uses PHP to include the navbar header and connect to the database-->
<?php
$page_name = "Item-Description";
include('inc/header.php');
include('inc/lib.php');
connect();
//Collects the ID of the item that was previously selected
$test = (int)$_POST['id'];
?>
</head>


<body>
<?php
//uses the ID to collect the rest of the information about the item
$sql = "SELECT * FROM items WHERE id = " . $test;
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
	$name = $row["name"];
	$description = $row["description"];
	$longd = $row["longd"];
	$price = $row["price"];
	$url = $row["url"];
}
?>
<!-- Creates class for the item's title -->
<div class="aboveimg">
	<p id="above-title"><b><?php echo $name ?></b></p>
</div>

<!-- Creates class for the item's rating -->
<div class="rating">
	<p id="rating-text"><b>Rating:</b></p>
	<a href="write-review.php" id="rating-star"><p><span style="font-size:35px;">*****</span> (Write Review)</p></a>
</div>

<!-- Creates class for the image of the item -->
<div class="img-class">
	<img src=<?php echo $url ?> alt="Puzzle">
<div class="img-class">


<!-- Creates class for the text alongside the image of the item -->
<div class="id-right"> 
	<p id="img-right">Description:</p>
	<ul id="img-right"><?php echo $description ?></ul>
	<p id="img-right"><b id="id-price">£<?php echo $price ?></b></p>
	<input type="submit" id="bytt" value="Add to Cart" name="button1"></input>
	
</div>

	
<!-- Creates class for the item description -->
<div class="id-bottom">
	<h2 id="id-longd">Long Description</h2>
	<p id="id-p"><?php echo $longd ?></p>
</div>

<?php
//Closes the connection
mysqli_close($conn);
?>

</body>

</html>

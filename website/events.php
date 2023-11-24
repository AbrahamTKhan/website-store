<!-- Abraham Khan - 1906636 -->

<!-- Defines the document as an html tag for the browser -->
<!DOCTYPE html>
<html>

<head>
<!-- Uses PHP to include the navbar header -->
<?php
$page_name = "Events";
include('inc/header.php');
?>
</head>

<body>
<!-- Creates class for the image at the top of the events page -->
<div class="event-top">
	<img id="event-photo" src="https://variety.com/wp-content/uploads/2020/11/We-Are-the-Thousand.jpg" alt="Crowd at Event" style="width:100%;">
	<div class="event-center">
		Events
	</div>
</div>

<!-- Creates class for ticket listings -->
<div class="event">
	<p>01/01/22 : </p>
	<p id="event-location"> London, England</p>
	<a href="item-description.php">Add Tickets</a>
</div>

<!-- Creates class for ticket listings -->
<div class="event1">
	<p>01/01/22 : </p>
	<p id="event-location">London, England</p>
	<a href="item-description.php">Add Tickets</a>
</div>

<!-- Creates class for ticket listings -->
<div class="event2">
	<p>01/01/22 : </p>
	<p id="event-location"> London, England</p>
	<a href="item-description.php">Add Tickets</a>
</div>

</body>

</html>

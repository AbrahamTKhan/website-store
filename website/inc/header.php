<!-- Abraham Khan - 1906636 -->

<!-- Defines the document as an html tag for the browser -->
<!DOCTYPE html>
<html>

<head>
<title>Store Page</title>
<!-- Linking to the stylsheet -->
<link rel = "stylesheet" href = "css/style.css">
</head>

<body>

	<!-- Creating class for the navbar  -->
	<ul class="top-nav">
		<!-- Separating central elements on the navbar -->
		<?php
			if ( $page_name == "Home") { echo "<em>";}
		?>
		<li id=nav-center><a href="index.php">Home</a></li>
		<?php
			if ( $page_name == "Home") { echo "</em>";}
		?>
		
		<?php
			if ( $page_name == "Store") { echo "<em>";}
		?>
		<li id=nav-center><a href="store.php">Store</a></li>
		<?php
			if ( $page_name == "Store") { echo "</em>";}
		?>
		
		<?php
			if ( $page_name == "Events") { echo "<em>";}
		?>
		<li id=nav-center><a href="events.php">Events</a></li>
		<?php
			if ( $page_name == "Events") { echo "</em>";}
		?>
		
		<?php
			if ( $page_name == "About") { echo "<em>";}
		?>
		<li id=nav-center><a href="about.php">About</a></li>
		<?php
			if ( $page_name == "About") { echo "</em>";}
		?>
		
		<?php
			if ( $page_name == "Contact") { echo "<em>";}
		?>
		<li id=nav-center><a href="contact.php">Contact</a></li>
		<?php
			if ( $page_name == "Contact") { echo "</em>";}
		?>
		
		<!-- Seperating the right sided elements and logos -->
		<?php
			if ( $page_name == "Basket") { echo "<em>";}
		?>
		<a id="nav-basket" href="basket.php"><img  src="images/nav-basket.png" alt="Foo Figters Logo"></a>
		<?php
			if ( $page_name == "Basket") { echo "</em>";}
		?>
		
		<?php
			if ( $page_name == "Register") { echo "<em>";}
		?>
		<li id="nav-right"><a href="register.php">Register</a></li>
		<?php
			if ( $page_name == "Register") { echo "</em>";}
		?>
		
		<?php
			if ( $page_name == "Login") { echo "<em>";}
		?>
		<li id="nav-right"><a href="login.php">Login</a></li>
		<?php
			if ( $page_name == "Login") { echo "</em>";}
		?>
		
		<img id="nav-logo" src="images/FF-Logo.png" alt="Foo Figters Logo">
	</ul>
</body>
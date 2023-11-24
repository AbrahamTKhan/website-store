<!-- Abraham Khan - 1906636 -->

<!-- Defines the document as an html tag for the browser -->
<!DOCTYPE html>
<html>

<head>
<!-- Uses PHP to include the navbar header -->
<?php
$page_name = "Register";
include('inc/header.php');
?>
</head>

<body>
<!-- Creates class for the registration system -->
<div class="register-system">
	<!-- Creates header -->
    <h1 id="register-header">Register</h1>
    <label><b>Email</b></label>
    <input id="register-e" placeholder="Enter Email">
    <label><b>Password</b></label>
    <input id="register-p" placeholder="Enter Password">
    <button class="register-b">
		Register
	</button>
  </div>

<!-- Creates class for linking to the login page -->
<div class="login-link">
	<p>Don't have an account? <a href="login.php">Login</a>.</p>
</div>

</body>

</html>

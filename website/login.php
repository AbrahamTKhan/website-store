<!-- Abraham Khan - 1906636 -->

<!-- Defines the document as an html tag for the browser -->
<!DOCTYPE html>
<html>

<head>
<!-- Uses PHP to include the navbar header -->
<?php
$page_name = "Login";
include('inc/header.php');
include("inc/lib.php")
?>
</head>

<body>
<!-- Creates class for the login system -->
<div class="login-system">
	<!-- Creates header -->
    <h1 id="login-header">Login</h1>
    <label><b>Email</b></label>
    <input id="login-e" placeholder="Enter Email">
    <label><b>Password</b></label>
    <input id="login-p" placeholder="Enter Password">
    <button class="login-b">
		Login
	</button>
  </div>
  
<!-- Creates class for the link to the register page -->
<div class="register-link">
	<p>Don't have an account? <a href="register.php">Register</a>.</p>
</div>

</body>

</html>

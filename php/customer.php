<?php
session_start();
?>
<!doctype html>
<html>
<head>
	<title>Customer | LlamaClothes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
	<link rel="stylesheet" href="https://app.divshot.com/css/bootstrap.css">
	<link rel="stylesheet" href="https://app.divshot.com/css/bootstrap-responsive.css">
	<link rel="stylesheet" href="https://djyhxgczejc94.cloudfront.net/builds/80037b02082b29f5f9cea127cab2a4ba4365ec67.css">
	<script src="https://app.divshot.com/js/jquery.min.js"></script>
	<script src="https://app.divshot.com/js/bootstrap.min.js"></script>
	<script src="js/index.js"></script>
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/customer.js"></script>
	<style>
	.rojo{
		color:red;
	}
	</style>
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand" href="../php">LlamaClothes</a>
				<div class="navbar-content">
					<ul class="nav ">
						<li>
							<a href="../php/articles.php">Articles</a> 
						</li>
						<li>
							<a href="../php/placeholder.php">Shop Cart</a> 
						</li>
						<li>
							<a href="../php/account.php">Account</a> 
						</li>
						<li>
							<a href="../php/about.php">About</a> 
						</li>
					</ul>            
				</div>
				<?php if(!isset($_SESSION['name'])){
					echo "<input type=button href=# id=popover-link class='pull-right btn btn-success down' rel=popover value=Login>";
				}else{
					echo "<a class='dropdown-toggle btn btn-success pull-right' data-dropdown=#dropdown-1 href=#>Bienvenido ".$_SESSION['name']."</a>";
				}
				?>

				<ul id="dropdown-1"  class="dropdown-menu">
					<li><a href="logOut.php">Logout</a></li>
					<li><a href="edit.php">Edit Profile</a></li>
					<li><a href="editAddress.php">Edit Address</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="container">
		<br><br><br>
		<div class="span6 well">
			<h4>Create your account</h4>
			<input id='user' type="text" placeholder="Username">
			<br>
			<input id='pass' type="password" placeholder="Password">
			<br>
			<input id='first' type="text" placeholder="Name">
			<br>
			<input id='last' type="text" placeholder="Apellidos">
			<br>
			<input id='email' type="text" placeholder="Correo">
			<br>
			<input id='btn_addcustomer' type="button" class="btn btn-success" value="Alta" onclick="addCustomer()">
			<br>
			<br>
			<div id="hola"></div>
		</div>
	</div>
</body>
</html>
<html>
<head>
	<title>Llama Clothes</title>
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/customer.js"></script>
	<style>
	.rojo{
		color:red;
	}
	</style>
</head>
<body>
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
	<input id='btn_addcustomer' type="button" value="Alta" onclick="addCustomer()">
	<br>
	<br>
	<input type="button" value="Obtener Clientes" id="btn_customer" onclick="getCustomer()";>
	<div id="hola"></div>
</body>
</html>
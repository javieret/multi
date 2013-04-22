<html>
<head>
	<title>LLama Clothes</title>
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/order.js"></script>
	<style>
	.rojo{
		color:red;
	}
	</style>
</head>
<body>
	<div id="formulario">
		<select id="direccion"></select>
		<br>
		<div id="articulos"></div>
		<br>
		<input id='btn_addarticle' type="button" value="Alta" onclick="addOrder()">
		<br>
		<input type="button" value="Obtener Ordenes" id="btn_article" onclick="getOrder()";>
		<div id="hola"></div>	
	</body>
	</html>
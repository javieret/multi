<?php 
session_start();
extract($_REQUEST);
	if(isset($_SESSION['carro']))
		$carro=$_SESSION['carro'];
	$carro[($id)]=array('identificador'=>($id));

	$_SESSION['carro']=$carro;
	header("Location:articles.php");
?>
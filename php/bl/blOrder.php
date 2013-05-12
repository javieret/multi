<?php
	include ("../dal/Order.php");
	$get = new Order();
	if($_POST['tipo']==1){
		$info = $get -> addOrder($_POST['add_address'],$_POST['articles']);
		if($info){
			echo "Si se inserto";
		}else{
			echo "No se inserto";
		}
	}


	if($_POST['tipo']==2){
		$info = $get -> deleteOrder($_POST['order']);
		if($info){
			echo "Si se borro";
		}else{
			echo "No se borro";
		}
	}

	if($_POST['tipo']==3){
		$info = $get -> getOrder();
		echo $info;
	}

	if($_GET['tipo']==4){
		session_start();
		$carro = $_SESSION['carro'];
		$info = $get ->addOrder2(1, $carro);
		unset($_SESSION['carro']);
		header("Location: ../thankyou.php");
	}
?>
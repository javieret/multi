<?php
	include ("../dal/Order.php");
	$get = new Order();
	if($_POST['tipo']==1){
		$info = $get -> addOrder($_POST['address'],$_POST['articles']);
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
?>
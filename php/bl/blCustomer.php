<?php
include ("../dal/Customer.php");
$get = new Customer();
if($_POST['tipo']==1){
	if(isset($_POST['user'])&&($_POST['pass'])&&($_POST['first'])&&($_POST['last'])){
		$info = $get -> addCustomer($_POST['user'],$_POST['pass'], $_POST['first'], $_POST['last'], $_POST['email']);
		if($info){
			echo "Si se inserto";
		}else{
			echo "No se inserto";
		}
	}else{
		$info ="error";
		echo $info;
	}
}

if($_POST['tipo']==2 and $_POST['tipo']>0){
	$info = $get -> deleteCusomter($_POST['customer']);
	if($info){
		echo "Si se borro";
	}else{
		echo "No se borro";
	}
}

if($_POST['tipo']==3){
	$info = $get -> getCustomer();
	echo $info;
}

if($_POST['tipo']==4){
	$info = $get -> getCustomerDetail($_POST['id']);
	echo $info;
}

if($_POST['tipo']==5){
	$info = $get -> editCusomter($_POST['first'], $_POST['last'], $_POST['email']);
	echo $info;
}
?>
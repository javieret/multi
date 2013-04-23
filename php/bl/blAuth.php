<?php
	include ("../dal/Auth.php");
	$get = new Auth();
	echo $_POST['hdn'];
	$info = $get ->getCredentials($_POST['user'], $_POST['pass']);
	if($_POST['hdn']=="compra" and $info){
		//header("Location: ../gracias.php");
	}else if($_POST['hdn']=="index"){
		//header("Location: ../index.php");
	}else if($_POST['hdn']){
		//header("Location: ../checarLog.php");
	}else if($info){
		//header("Location: ../home.php");
	}else{
		//header("Location: ../index.php");
	}
?>
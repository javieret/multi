<?php
class blAuth{
	function callDAL(){
		include ("../dal/Auth.php");
		$get = new Auth();
		$info = $get ->getCredentials($_POST['user'], $_POST['pass']);

		if($_POST['hdn']=="compra" and $info){
			header("Location: ../placeholder.php");
		}else if($_POST['hdn']=="index"){
			header("Location: ../index.php");
		}else if($_POST['hdn']){
			header("Location: ../checarLog.php");
		}else if($info){
			header("Location: ../home.php");
		}else{
			header("Location: ../index.php");
		}
	}
}
$call = new blAuth();
$method = $call->callDAL();
return $method;
?>
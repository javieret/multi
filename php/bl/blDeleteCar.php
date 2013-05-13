<?php
class blDeleteCar{
	function callDAL(){
		session_start();
		$carro=$_SESSION['carro'];
		array_search($_POST['id'], $carro);
		unset($carro[$_POST['id']]);
		$_SESSION['carro']=$carro;
	}
}
$call = new blDeleteCar();
$method = $call->callDAL();
return $method;
?>
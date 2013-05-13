<?php
class blState{
	function callDAL(){
		include ("../dal/State.php");
		$get = new State();
		if($_POST['tipo']==1){
			$info = $get -> addState($_POST['country'],$_POST['stateName']);
			if($info){
				echo "Si se inserto";
			}else{
				echo "No se inserto";
			}
			
		}

		if($_POST['tipo']==2){
			$info = $get -> deleteState($_POST['stateName']);
			if($info){
				echo "Si se borro";
			}else{
				echo "No se borro";
			}
		}

		if($_POST['tipo']==3){
			$info = $get -> getState();
			echo $info;
		}
	}
}
$call = new blState();
$method = $call->callDAL();
return $method;
?>
<?php
class blCountry{
	function callDAL(){
		include ("../dal/Country.php");
		$get = new Country();
		if($_POST['tipo']==1){
			$info = $get -> addCountry($_POST['country']);
			if($info){
				echo "Si se inserto";
			}else{
				echo "No se inserto";
			}
			
		}

		if($_POST['tipo']==2){
			$info = $get -> deleteCountry($_POST['country']);
			if($info){
				echo "Si se borro";
			}else{
				echo "No se borro";
			}
		}

		if($_POST['tipo']==3){
			$info = $get -> getCountry();
			echo $info;
		}
	}
}
$call = new blCountry();
$method = $call->callDAL();
return $method;
?>
<?php
class blAddrestype{
	function callDAL(){
		include ("../dal/Addrestype.php");
		$get = new Addrestype();
		if($_POST['tipo']==1){

			$info = $get -> addAddrestype($_POST['addrestype']);
			if($info){
				echo "Si se inserto";
			}else{
				echo "No se inserto";
			}
		}

		if($_POST['tipo']==2){
			$info = $get -> deleteAddrestype($_POST['addrestype']);
			if($info){
				echo "Si se borro";
			}else{
				echo "No se borro";
			}
		}

		if($_POST['tipo']==3){
			$info = $get -> getAddrestype();
			echo $info;
		}
	}
}
$call = new blAddrestype();
$method = $call->callDAL();
return $method;
?>
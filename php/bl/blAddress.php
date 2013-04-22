<?php
	include ("../dal/Address.php");
	$get = new Address();
	if($_POST['tipo']==1){
		if(isset($_POST['street'])&&($_POST['street2'])&&($_POST['zip'])){
			if($_POST['zip']>=10000){
				$info = $get -> addAddress($_POST['country'],$_POST['state'], $_POST['type'], $_POST['street'], $_POST['street2'], $_POST['zip']);
				if($info){
					echo "Si se inserto";
				}else{
					echo "No se inserto";
				}
			}else{
				$info="Invalid zipcode";
				echo $info;
			}
		}else{
			$info ="error";
			echo $info;
		}
	}
	
	if($_POST['tipo']==2){
		$info = $get -> deleteAddress($_POST['address']);
		if($info){
			echo "Si se borro";
		}else{
			echo "No se borro";
		}
	}
	
	if($_POST['tipo']==3){
		$info = $get -> getAddress();
		echo $info;
	}
	
?>
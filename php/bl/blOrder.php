<?php
class blOrder{
	function callDAL(){
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
			if($_GET['address']>0){
				session_start();
				$carro = $_SESSION['carro'];
				if(count($carro)>0){
				$info = $get ->addOrder2($_GET['address'], $carro);
				unset($_SESSION['carro']);
				header("Location: ../thankyou.php");
				}else{
					header("Location: ../placeholder.php?error=1");
				}
			}else{
				header("Location: ../placeholder.php?error=1");
			}
		}
	}
}
$call = new blOrder();
$method = $call->callDAL();
return $method;
?>
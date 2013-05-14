<?php
class blCustomer{
	function callDAL(){
		include ("../dal/Customer.php");
		$get = new Customer();
		if($_POST['tipo']==1){
			if(isset($_POST['user'])&&($_POST['pass'])&&($_POST['first'])&&($_POST['last'])){
				$random=md5(uniqid(rand(), true));
				$hash=crypt($_POST['pass'],'$2a$07$'.$random. '$');
				$info = $get -> addCustomer($_POST['user'],$hash, $_POST['first'], $_POST['last'], $_POST['email']);
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
			session_start();
			if(strlen($_POST['first'])>0 && strlen($_POST['last'])>0 && strlen($_POST['email'])>0){
				$info = $get -> editCusomter($_POST['first'], $_POST['last'], $_POST['email'], $_SESSION['id']);
				echo $info;
			}else{
				$info ="error";
				echo $info;
			}
		}
	}
}
$call = new blCustomer();
$method = $call->callDAL();
return $method;
?>
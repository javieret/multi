<?php
class Customer {

	function addCustomer($user, $pass, $first, $last, $email){
		include("conex.php");
		$db = Conectarse();
		$id=0;
		$type=1;
		$status=1;
		$stmt = $db->prepare("INSERT INTO customer values (:id, :idtype, :user, :pass, :first, :last, :email, :status)");
		$stmt->bindParam(':id',$id);
		$stmt->bindParam(':idtype',$type);
		$stmt->bindParam(':user',$user);
		$stmt->bindParam(':pass',$pass);
		$stmt->bindParam(':first',$first);
		$stmt->bindParam(':last',$last);
		$stmt->bindParam(':email',$email);
		$stmt->bindParam(':status',$status);
		if($stmt->execute()){
			return True;
		}else{
			return False;
		}
	}
	
	public function getCustomer(){
		header('Content-type: application/json; charset=iso-8859-1');
		include("conex.php");
		$db = Conectarse();
		$all_recs = array();
		$stmt = $db->prepare("SELECT * FROM customer where status = 1");
		if($stmt->execute()){
			while($resp = $stmt->fetch()){
				$all_recs[]=array('user' => $resp['username'], 'id' => $resp['idcustomer'] );
			}
		}else{
			$all_recs[]=array('resp' =>0);
		}
		return json_encode($all_recs);
	}

	public function getCustomerDetail($id){
		header('Content-type: application/json; charset=iso-8859-1');
		include("conex.php");
		$db = Conectarse();
		$all_recs = array();
		$stmt = $db->prepare("SELECT * FROM customer where status = 1 and idcustomer = ?");
		if($stmt->execute(array($id))){
			while($resp = $stmt->fetch()){
				$all_recs[]=array('first' => $resp['firstName'], 'last' => $resp['lastName'], 'email'=>$resp['email'] );
			}
		}else{
			$all_recs[]=array('resp' =>0);
		}
		return json_encode($all_recs);
	}
	
	function deleteCusomter($id){
		include("conex.php");
		$db = Conectarse();
		$stmt = $db->prepare("UPDATE customer set status = 0 where idcustomer = ?");
		if($stmt->execute(array($id))){
			return True;
		}else{
			return False;
		}
	}

	function editCusomter($first, $last, $email){
		include("conex.php");
		$db = Conectarse();
		session_start();
		$stmt = $db->prepare("UPDATE customer set firstName = ?, lastName =?, email = ? where idcustomer = ?");
		if($stmt->execute(array($first, $last, $email, $_SESSION['id']))){
			return True;
		}else{
			return False;
		}
	}
}
?>
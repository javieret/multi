<?php
class Customer {

	function addCustomer($user, $pass, $first, $last, $email){
		include("conex.php");
		$db = Conectarse();
		$id=0;
		$type=1;
		$status=1;
		$random=md5(uniqid(rand(), true));
		$hash=crypt($pass,'$2a$07$'.$random. '$');
		$stmt = $db->prepare("INSERT INTO customer values (:id, :idtype, :user, :pass, :first, :last, :email, :status)");
		$stmt->bindParam(':id',$id);
		$stmt->bindParam(':idtype',$type);
		$stmt->bindParam(':user',$user);
		$stmt->bindParam(':pass',$hash);
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
}
?>
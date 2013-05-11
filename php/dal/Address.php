<?php
class Address {

	function addAddress($country, $state, $type, $street, $street2, $zip){
		include("conex.php");
		$db = Conectarse();
		$id=0;
		$user=4;
		$status=1;
		$stmt = $db->prepare("INSERT INTO address values (:id, :idstate, :idcountry, :address, :street, :street2, :zip, :user, :status)");
		$stmt->bindParam(':id',$id);
		$stmt->bindParam(':idstate',$state);
		$stmt->bindParam(':idcountry',$country);
		$stmt->bindParam(':address',$type);
		$stmt->bindParam(':street',$street);
		$stmt->bindParam(':street2',$street2);
		$stmt->bindParam(':zip',$zip);
		$stmt->bindParam(':user',$_SESSION['id']);
		$stmt->bindParam(':status',$status);
		if($stmt->execute()){
			return True;
		}else{
			return False;
		}
	}
	
	public function getAddress(){
		header('Content-type: application/json; charset=iso-8859-1');
		include("conex.php");
		$db = Conectarse();
		$all_recs = array();
		$stmt = $db->prepare("SELECT * FROM address where status_address = 1");
		if($stmt->execute()){
			while($resp = $stmt->fetch()){
				$all_recs[]=array('street' => $resp['street'], 'id' => $resp['idAddress'], 'street2' => $resp['street2'], 'zip' => $resp['zipcode'] );
			}
		}else{
			$all_recs[]=array('resp' =>0);
		}
		return json_encode($all_recs);
	}
	
	function deleteAddress($id){
		include("conex.php");
		$db = Conectarse();
		$stmt = $db->prepare("UPDATE address set status_address = 0 where idAddress = ?");
		if($stmt->execute(array($id))){
			return True;
		}else{
			return False;
		}
	}

	public function getAddressDetail($id){
		header('Content-type: application/json; charset=iso-8859-1');
		include("conex.php");
		$db = Conectarse();
		$all_recs = array();
		$stmt = $db->prepare("SELECT * FROM address where status_address = 1 and idcustomer= ?");
		if($stmt->execute(array($id))){
			while($resp = $stmt->fetch()){
				$all_recs[]=array('street' => $resp['street'], 'id' => $resp['idAddress'], 'street2' => $resp['street2'], 'zip' => $resp['zipcode'] );
			}
		}else{
			$all_recs[]=array('resp' =>0);
		}
		return json_encode($all_recs);
	}

	function editddress($street, $street2, $zip, $id){
		include("conex.php");
		$db = Conectarse();
		$stmt = $db->prepare("UPDATE address set street = ?, street2= ?, zipcode= ? where idAddress = ?");
		if($stmt->execute(array($street, $street2, $zip, $id))){
			return True;
		}else{
			return False;
		}
	}
	
}
?>
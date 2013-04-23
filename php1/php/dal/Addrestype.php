<?php

class Addrestype {

	public function addAddrestype($addrestype){
		include("conex.php");
		$db = Conectarse();
		$id=0;
		$stmt = $db->prepare("INSERT INTO addrestype values (:id, :addrestype)");
		$stmt->bindParam(':id',$id);
		$stmt->bindParam(':addrestype',$addrestype);
		if($stmt->execute()){
			return True;
		}else{
			return False;
		}
	}
	
	public function deleteAddrestype($id){
		include("conex.php");
		$db = Conectarse();
		$stmt = $db->prepare("DELETE FROM addrestype where idaddrestype = ?");
		if($stmt->execute(array($id))){
			return True;
		}else{
			return False;
		}
	}
	
	public function getAddrestype(){
		header('Content-type: application/json; charset=iso-8859-1');
		include("conex.php");
		$db = Conectarse();
		$all_recs = array();
		$stmt = $db->prepare("SELECT * FROM addrestype");
		if($stmt->execute()){
			while($resp = $stmt->fetch()){
				$all_recs[]=array('addrestype' => $resp['addrestype'], 'id' => $resp['idaddrestype'] );
			}
		}else{
			$all_recs[]=array('resp' =>0);
		}
		return json_encode($all_recs);
	}
	
}
?>
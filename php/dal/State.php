<?php
class State {

	public function getState(){
		header('Content-type: application/json; charset=iso-8859-1');
		include("conex.php");
		$db = Conectarse();
		$all_recs = array();
		$stmt = $db->prepare("SELECT * FROM state order by stateName");
		if($stmt->execute()){
			while($resp = $stmt->fetch()){
				$all_recs[]=array('state' => $resp['stateName'], 'id' => $resp['idState'] );
			}
		}else{
			$all_recs[]=array('resp' =>0);
		}
		return json_encode($all_recs);
	}
	
	
	public function addState($country,$stateName){
		include("conex.php");
		$db = Conectarse();
		$id=0;
		$stmt = $db->prepare("INSERT INTO state values (:id, :country, :stateName)");
		$stmt->bindParam(':id',$id);
		$stmt->bindParam(':country',$country);
		$stmt->bindParam(':stateName',$stateName);
		if($stmt->execute()){
			return True;
		}else{
			return False;
		}
	}
	
	public function deleteState($id){
		include("conex.php");
		$db = Conectarse();
		$stmt = $db->prepare("DELETE FROM state where idState = ?");
		if($stmt->execute(array($id))){
			return True;
		}else{
			return False;
		}
	}
	
}
?>
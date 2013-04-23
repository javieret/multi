<?php
class Country {

	public function addCountry($name){
		include("conex.php");
		$db = Conectarse();
		$id=0;
		$stmt = $db->prepare("INSERT INTO country values (:idCountry, :countryName)");
		$stmt->bindParam(':idCountry',$id);
		$stmt->bindParam(':countryName',$name);
		if($stmt->execute()){
			return True;
		}else{
			return False;
		}
	}

	public function deleteCountry($id){
		include("conex.php");
		$db = Conectarse();
		$stmt = $db->prepare("DELETE FROM country where idCountry = ?");
		if($stmt->execute(array($id))){
			return True;
		}else{
			return False;
		}
	}

	public function getCountry(){
		header('Content-type: application/json; charset=iso-8859-1');
		include("conex.php");
		$db = Conectarse();
		$all_recs = array();
		$stmt = $db->prepare("SELECT * FROM country");// order by countryName");
		if($stmt->execute()){
			while($resp = $stmt->fetch()){
				$all_recs[]=array('id' => $resp['idCountry'], 'country' => $resp['countryName']);
			}
		}else{
			$all_recs[]=array('resp' =>0);
		}
		return json_encode($all_recs);
	}
	
}
?>
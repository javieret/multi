<?php

class Articletype {

	public function addArticletype($category){
		include("conex.php");
		$db = Conectarse();
		$id=0;
		$stmt = $db->prepare("INSERT INTO articleType values (:id, :category)");
		$stmt->bindParam(':id',$id);
		$stmt->bindParam(':category',$category);
		if($stmt->execute()){
			return True;
		}else{
			return False;
		}
	}
	
	public function deleteArticletype($id){
		include("conex.php");
		$db = Conectarse();
		$stmt = $db->prepare("DELETE FROM articleType where idarticletype = ?");
		if($stmt->execute(array($id))){
			return True;
		}else{
			return False;
		}
	}
	
	public function getArticletype(){
		header('Content-type: application/json; charset=iso-8859-1');
		include("conex.php");
		$db = Conectarse();
		$all_recs = array();
		$stmt = $db->prepare("SELECT * FROM articleType");
		if($stmt->execute()){
			while($resp = $stmt->fetch()){
				$all_recs[]=array('id' => $resp['idarticleType'], 'category' => $resp['category']);
			}
		}else{
			$all_recs[]=array('resp' =>0);
		}
		return json_encode($all_recs);
	}
	
}
?>
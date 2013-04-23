<?php

class Article {

	public function addArticle($name, $prize){
		include("conex.php");
		$db = Conectarse();
		$id=0;
		$type=1;
		$stmt = $db->prepare("INSERT INTO article values (:id, :type, :name, :prize)");
		$stmt->bindParam(':id',$id);
		$stmt->bindParam(':type',$type);
		$stmt->bindParam(':name',$name);
		$stmt->bindParam(':prize',$prize);
		if($stmt->execute()){
			return True;
		}else{
			return False;
		}
	}
	
	public function deleteArticle($id){
		include("conex.php");
		$db = Conectarse();
		$stmt = $db->prepare("DELETE FROM article where idarticle = ?");
		if($stmt->execute(array($id))){
			return True;
		}else{
			return False;
		}
	}
	
	public function getArticle(){
		header('Content-type: application/json; charset=iso-8859-1');
		include("conex.php");
		$db = Conectarse();
		$all_recs = array();
		$stmt = $db->prepare("SELECT * FROM article");
		if($stmt->execute()){
			while($resp = $stmt->fetch()){
				$all_recs[]=array('nombre' => $resp['name'], 'id' => $resp['idarticle'], 'prize' => $resp['actualPrize'] );
			}
		}else{
			$all_recs[]=array('resp' =>0);
		}
		return json_encode($all_recs);
	}
	
	public function getArticleDetail(){
		header('Content-type: application/json; charset=iso-8859-1');
		include("conex.php");
		$db = Conectarse();
		session_start();
		$all_recs = array();
		foreach($_SESSION['carro'] as $k => $v){
				$stmt = $db->prepare("SELECT * from article where idarticle = ? ");
				$stmt ->execute(array($v['identificador']));
				$row = $stmt->fetch();
				$all_recs[]=array('nombre' => $row['name'], 'id' => $row['idarticle'], 'prize'=>$row['actualPrize']);
		}
		return json_encode($all_recs);
	}
	
}
?>
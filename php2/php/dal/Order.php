<?php

class Order {

	public function addOrder($adress, $articles){
		include_once("conex.php");
		$db = Conectarse();
		$id=0;
		$total=10.12;
		$date=0;
		$total = $this->getPrize($articles);
		$stmt = $db->prepare("INSERT INTO multicapas.order (idorder, idorderaddress, orderdate, ordertotal) VALUES (:idorder, :idorderaddress, :orderdate, :ordertotal)");
		$stmt->bindParam(':idorder', $id);
		$stmt->bindParam(':idorderaddress', $adress);
		$stmt->bindParam(':orderdate', date('Y-m-d H:i:s'));
		$stmt->bindParam(':ordertotal', $total);
		if($stmt->execute()){
			$idorder = $db->lastInsertId();
			$this->addOrderDetail($articles, $idorder);
			return True;
		}else{
			return False;
		}
	}

	public function addOrder2($adress, $articles){
		include_once("conex.php");
		$db = Conectarse();
		$id=0;
		$total=10.12;
		$date=0;
		$total = $this->getPrizeOrder($articles);
		$stmt = $db->prepare("INSERT INTO multicapas.order (idorder, idorderaddress, orderdate, ordertotal) VALUES (:idorder, :idorderaddress, :orderdate, :ordertotal)");
		$stmt->bindParam(':idorder', $id);
		$stmt->bindParam(':idorderaddress', $adress);
		$stmt->bindParam(':orderdate', date('Y-m-d H:i:s'));
		$stmt->bindParam(':ordertotal', $total);
		if($stmt->execute()){
			$idorder = $db->lastInsertId();
			$this->addOrderDetail2($articles, $idorder);
			return True;
		}else{
			return False;
		}
	}

	public function getPrize($articles){
		include_once("conex.php");
		$db = Conectarse();
		$until = count($articles);
		$total=0;
		for ($i=0; $i <$until ; $i++) {
			$stmt = $db->prepare("SELECT * from article where idarticle = ?");
			$stmt->execute(array($articles[$i]));
			$row = $stmt->fetch();
			$total = $total + $row['actualPrize'];
		}
		return $total;
	}
	
	public function addOrderDetail($articles, $id){
		$until = count($articles);
		include_once("conex.php");
		$db = Conectarse();
		$quantity = 1;
		$iddetail=0;
		for ($i=0; $i <$until ; $i++) {
			$stmt = $db->prepare("INSERT INTO multicapas.orderdetail values (:idorderdetail, :idarticle, :idOrder, :detailquantity)");
			$stmt->bindParam(':idorderdetail',$iddetail);
			$stmt->bindParam(':idarticle',$articles[$i]);
			$stmt->bindParam(':idOrder',$id);
			$stmt->bindParam(':detailquantity',$quantity);
			$stmt->execute();
		}
		return True;
	}

	public function getPrizeOrder($articles){
		include_once("conex.php");
		$db = Conectarse();
		$total=0;
		foreach($_SESSION['carro'] as $k => $v){
			$stmt = $db->prepare("SELECT * from article where idarticle = ?");
			$stmt->execute(array($v['identificador']));
			$row = $stmt->fetch();
			$total = $total + $row['actualPrize'];
		}
		return $total;
	}
	
	public function addOrderDetailOrder($articles, $id){
		$until = count($articles);
		include_once("conex.php");
		$db = Conectarse();
		$quantity = 1;
		$iddetail=0;
		for ($i=0; $i <$until ; $i++) {
			$stmt = $db->prepare("INSERT INTO multicapas.orderdetail values (:idorderdetail, :idarticle, :idOrder, :detailquantity)");
			$stmt->bindParam(':idorderdetail',$iddetail);
			$stmt->bindParam(':idarticle',$articles[$i]);
			$stmt->bindParam(':idOrder',$id);
			$stmt->bindParam(':detailquantity',$quantity);
			$stmt->execute();
			$message ="Thank you for purchasing with us";
		}
		return True;
	}

	public function addOrderDetail2($articles, $id){
		$until = count($articles);
		include_once("conex.php");
		$db = Conectarse();
		$quantity = 1;
		$iddetail=0;
		foreach($_SESSION['carro'] as $k => $v){
			$stmt = $db->prepare("INSERT INTO multicapas.orderdetail values (:idorderdetail, :idarticle, :idOrder, :detailquantity)");
			$stmt->bindParam(':idorderdetail',$iddetail);
			$stmt->bindParam(':idarticle',$v['identificador']);
			$stmt->bindParam(':idOrder',$id);
			$stmt->bindParam(':detailquantity',$quantity);
			$stmt->execute();
			print_r($stmt->debugDumpParams());
		}
		return True;
	}
	
	public function deleteOrder($id){
		include("conex.php");
		$db = Conectarse();
		$stmt = $db->prepare("DELETE FROM order where idorder = ?");
		if($stmt->execute(array($id))){
			return True;
		}else{
			return False;
		}
	}
	
	public function getOrder(){
		header('Content-type: application/json; charset=iso-8859-1');
		include("conex.php");
		$db = Conectarse();
		$all_recs = array();
		$stmt = $db->prepare("SELECT * FROM multicapas.order");
		if($stmt->execute()){
			while($resp = $stmt->fetch()){
				$all_recs[]=array('id' => $resp['idorder'], 'total' => $resp['ordertotal'] );
			}
		}else{
			$all_recs[]=array('resp' =>0);
		}
		return json_encode($all_recs);
	}
}
?>
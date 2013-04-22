<?php 
	session_start();
	extract($_REQUEST);
	//mysql_connect("localhost","root","");
	//mysql_select_db("carro");
	/*if(!isset($cantidad)){
		$cantidad=1;
	}*/
	//$qry=mysql_query("select * from catalogo where id='".$id."'");
	//$row=mysql_fetch_array($qry);
	if(isset($_SESSION['carro']))
	$carro=$_SESSION['carro'];
	//$carro[md5($id)]=array('identificador'=>md5($id),'cantidad'=>$cantidad,'producto'=>$row['producto'],'precio'=>$row['precio'],'id'=>$id);
	$carro[($id)]=array('identificador'=>($id));

	$_SESSION['carro']=$carro;
	//echo var_dump($carro);//imprime los articulos que se han seleccionado hasta el momento
	header("Location:index.php?".SID);
?>
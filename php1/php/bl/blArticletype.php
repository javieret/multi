<?php
	include ("../dal/Articletype.php");
	$get = new Articletype();
	if($_POST['tipo']==1){
		$info = $get -> addArticletype($_POST['category']);
			if($info){
				echo "Si se inserto";
			}else{
				echo "No se inserto";
			}
	}

	if($_POST['tipo']==2){
		$info = $get -> deleteArticletype($_POST['category']);
		if($info){
			echo "Si se borro";
		}else{
			echo "No se borro";
		}
	}

	if($_POST['tipo']==3){
		$info = $get -> getArticletype();
		echo $info;
	}
?>
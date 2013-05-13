<?php
class blArticle{
	function callDAL(){
		include ("../dal/Article.php");
		$get = new Article();
		if($_POST['tipo']==1){
			if(is_numeric($_POST['prize'])){
				$info = $get -> addArticle($_POST['article'],$_POST['prize']);
				if($info){
					echo "Si se inserto";
				}else{
					echo "No se inserto";
				}
			}else{
				$info = "error";
				echo $info;
			}
		}

		if($_POST['tipo']==2){
			$info = $get -> deleteArticle($_POST['article']);
			if($info){
				echo "Si se borro";
			}else{
				echo "No se borro";
			}
		}

		if($_POST['tipo']==3){
			$info = $get -> getArticle();
			echo $info;
		}

		if($_POST['tipo']==4){
			$info = $get -> getArticleDetail();
			echo $info;
		}
	}
}
$call = new blArticle();
$method = $call->callDAL();
return $method;
?>
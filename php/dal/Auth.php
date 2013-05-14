<?php
class Auth {

	function getCredentials($user, $pass){
		include("conex.php");
		$db = Conectarse();
		$sql = "SELECT * from customer where username = ?";
		$q = $db->prepare($sql);
		$q->execute(array($user));
		$row = $q->fetch();
	    if(crypt($pass, $row['password']) === $row['password'] AND $row['status']==1){
	    	session_start();
	    	$_SESSION['name']=$row['firstName'];
	    	$_SESSION['id']=$row['idcustomer'];
	    	$_SESSION['email']=$row['email'];
	        return True;
	    }
	}

}

?>

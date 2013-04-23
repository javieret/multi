<?php
function Conectarse(){
	$username='root';
	$password='';
    try {
        $dbo=new PDO("mysql:host=localhost;dbname=multicapas",$username,$password);
    }
    catch (PDOException $e) {
        die('No se pudo coenctar a la base de datos');
    }    
    // create LM object, pass in PDO connection
    return $dbo;
}
?>
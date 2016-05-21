<?php

try{
	$pdo=new PDO("mysql:host=localhost;dbname=qpizza","root","");
	}catch(PDOException $e){
		var_dump($e);
	}

?>	
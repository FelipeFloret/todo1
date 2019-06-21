<?php


	try{
		global $pdo;
		$pdo= new PDO("mysql:host=localhost;dbname=todo_db","root","");
		$uva = 'kjkljlkjl';

		

	}catch (PDOException $Erro){
		return $Erro->getMessage();
	}


	

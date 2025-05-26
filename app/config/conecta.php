<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "toptex";
	
	$conn = new mysqli($host,$user,$pass,$banco) ;
	if($conn->connect_errno){
		echo "nao conectado";
		echo "Erro ao conectar:(".$conn->connect_errno.")".$conn->connect_error;	
	}
	else{
		//echo "conectado!!";
	}
	
?>



<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "toptex";
	
	$conn = new mysqli($host,$user,$pass,$banco,3306) ;
	if($conn->connect_errno){
		echo "nao conectado";
		echo "Erro ao conectar:(".$conn->connect_errno.")".$conn->connect_error;	
	}
	else{
		//echo "conectado!!";
	}
	
	$conn->set_charset("utf8mb4");
?>


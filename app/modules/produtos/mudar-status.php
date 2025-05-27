<?php
	include "session.php";
	
	echo "Aguarde...";
	
	$tipoUsuarioLogado = $_SESSION['tipo'];
	
	
	if($tipoUsuarioLogado != 1){
		//verifica tipo de usuario
		echo "<script>location.assign('painel.php?p=0');</script>";
		exit();	
	}
	else{
		
		$id_produto = $_GET['idp'];
		$status = $_GET['sts'];
		
		if(empty($id_produto)){
			echo "<script>location.assign('painel.php?p=0');</script>";
			exit();	
		}
		else{
			
			if($status==1)
				$status=0;
			else
				$status=1;
			
			require_once "config/conecta.php";	
			$sql = "UPDATE t_produto SET status='$status' WHERE id = '$id_produto' ";
			$update = mysqli_query($conn, $sql);
			
			if($update>0){
				echo "<script>location.assign('painel.php?p=1');</script>";
				exit();
			}
			
		}
		
	}
	mysqli_close($conn);	
	
?>
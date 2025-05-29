<?php
	include "session.php";
	
	$idcategoria = htmlspecialchars($_GET['c']);
	
	if(empty($idcategoria)){
		echo "<script>location.assign('painel.php?p=99');</script>";
		exit();			
	}
	else{
		require_once "config/conecta.php";
		
		$sql = "DELETE FROM t_categoria WHERE id = ?";
		$stmt = $conn->prepare($sql);
		if ($stmt === false) {
			die('Erro na preparação da query: ' . $conn->error);
		}
		$stmt->bind_param('i', $idcategoria);
		if($stmt->execute()) {
			//TRUE executou
			echo "<script>alert('Registro excluído com sucesso.');</script>";
			echo "<script>location.assign('painel.php?p=4');</script>";
		}
		else{
			//false
			echo "<script>alert('Erro ao excluir registro: " . $stmt->error . "')</script>";
			echo "<script>location.assign('painel.php?p=4');</script>";
		}
	}

	$stmt->close();
?>
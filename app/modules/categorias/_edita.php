<?php
	include "session.php";
	
	require_once "config/conecta.php";
	
	$id_categoria = htmlspecialchars($_POST['id_categoria']);	
	$nome_categoria = htmlspecialchars($_POST['nome']);
	
	if( (empty($id_categoria)) || (empty($nome_categoria)) ){
		echo "<script>location.assign('painel.php?p=99');</script>";
		exit();		
	}
	else{

		$stmt = $conn->prepare("UPDATE t_categoria SET nome = ? WHERE id = ?");
		
		if ($stmt === false) {
			// Tratar o erro na preparação da query
			die('Erro na preparação da query: ' . $conn->error);
		}
		
		$stmt->bind_param('si', $nome_categoria, $id_categoria); 

		if ($stmt->execute()) {
			// executou
			echo "<script>alert('Registro editado com sucesso!');</script>";
			echo "<script>location.assign('painel.php?p=4');</script>";
		} else {
			// erro
			echo "Erro ao atualizar categoria: " . $stmt->error;
		}

	}
	
	$stmt->close();
?>
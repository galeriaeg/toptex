<?php
	include "session.php";
	
	$nome_categoria = htmlspecialchars($_POST['nome']);	
	$status = 1;
	
	if(empty($nome_categoria)){
		echo "<script>location.assign('painel.php?p=99');</script>";
		exit();			
	}
	else{
		
		require_once "config/conecta.php";
		
		$stmt = $conn->prepare("INSERT INTO t_categoria (nome, status) VALUES (?, ?)");
		
		if ($stmt === false) {
			die("Erro na preparação da query: " . $conn->error);
		}
		$stmt->bind_param("si", $nome_categoria, $status);
		
		if ($stmt->execute()) {
			echo "<script>alert('Categoria cadastrada com sucesso!')</script>";
			echo "<script>location.assign('painel.php?p=4');</script>";
			exit();
		} else {
			echo "Erro ao inserir categoria: " . $stmt->error;
		}
		
	}
	
	$stmt->close();
	$conn->close();
?>
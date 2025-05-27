<?php
	include "session.php";
	
	$nome = htmlspecialchars($_POST['nome']);
	$email = htmlspecialchars($_POST['email']);
	$telefone = htmlspecialchars($_POST['telefone']);
	$email = filter_var($email, FILTER_SANITIZE_EMAIL);
	$email = strtolower($email);
	@$senha = htmlspecialchars($_POST['senha']);
	@$senha = trim($senha);
	$id_usuario = htmlspecialchars($_POST['id_usuario']);
	
	
	if(
	(empty($nome))||
	(empty($email))||
	(empty($telefone))||
	(empty($id_usuario))
	){
		echo "<script>location.assign('painel.php?p=99');</script>";
		exit();	
		
	}
	else{
		
		require_once "config/conecta.php";
		
		if(!empty($senha)){
		
			if(strlen($senha)<8){
				echo "<script>alert('Sua senha dever ter entre 8 e 12 caracteres!');</script>";
				echo "<script>location.assign('painel.php?p=2');</script>";
				exit();	
			}
		
			$senha_hash = sha1($senha); 
			//atualiza senha se necessário
			$stmt = $conn->prepare("UPDATE t_usuario SET senha = ? WHERE id = ?");
			$stmt->bind_param("si", $senha_hash,$id_usuario);
			$stmt->execute();
		}		

		// Prepara a consulta SQL para evitar SQL Injection
		$stmt = $conn->prepare("UPDATE t_usuario SET nome = ?, email = ?, telefone = ?  WHERE id = ?");
		$stmt->bind_param("sssi", $nome, $email, $telefone, $id_usuario);
		if ($stmt->execute()) {
			echo "<script>alert('Cadastro realizado com sucesso.');</script>";
			echo "<script>location.assign('painel.php?p=2');</script>";
			exit();	
		}
		
	}
	
	$conn->close();
?>
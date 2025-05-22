<?php
	session_start();
	
	include "config/conecta.php";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		$email = htmlspecialchars($_POST['email']);
		$senha = htmlspecialchars($_POST['senha']);
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);
		$email = strtolower($email);
		$senha = trim($senha);
		
		if((empty($email)) || (empty($senha))){
			echo "<script>window.location.href='../home?aut=false';</script>";
			exit();
		}
		else{
			
			$senha = sha1($senha);
			
			$sql = "SELECT id,nome,email,tipo 
			FROM t_usuario 
			WHERE email = '$email' 
			AND senha = '$senha'
			AND tipo = 1
			LIMIT 1";
			$result = mysqli_query($conn, $sql);
			
			if(mysqli_num_rows($result) > 0){
				
				$row = mysqli_fetch_assoc($result);
				$_SESSION['usuario_logado'] = true;
				$_SESSION["id"] = $row["id"];
				$_SESSION["nome"] = $row["nome"];
				$_SESSION["email"] = $row["email"];
				$_SESSION["tipo"] = $row["tipo"];
				echo "<script>window.location.href='./index.php';</script>"; 
				
			}
			else{
				//echo "erro";
				echo "<script>window.location.href='../index.php?aut=false';</script>";
				exit();
			}
			
		}		
		
	}
	else{
		echo "<script>window.location.href='../index.php?aut=false';</script>";
		exit();
	}
	
	
	mysqli_close($conn);
?>

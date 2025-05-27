
<?php
	if (session_status() == PHP_SESSION_NONE) {
		// Nenhuma sessão está ativa, então podemos iniciar uma.
		session_start();
		set_time_limit(20);
	}
	
	if (!isset($_SESSION["email"])) {
		header("Location:../index.php"); // Redireciona para o login se não estiver logado
		exit();
	}
	else{
		//echo $logado = $_SESSION['email'];
		//echo "sessão ativa";
	}	

?>
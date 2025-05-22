<?php
	include "session.php"; 
	$idUsuarioLogado = $_SESSION['id'];
	
	$id_produto = $_GET['idp'];
	$status = $_GET['sts'];
	
	if(empty($id_produto)){
		echo "<script>window.location.href='logout.php';</script>";
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
			echo "<script>location.assign('index.php');</script>";
			exit();
		}
		
	}
	
	
	mysqli_close($conn);	
	
?>
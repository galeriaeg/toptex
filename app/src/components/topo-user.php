<?php 
	include "session.php";
	
	$idUsuarioLogado = $_SESSION['id'];
	$nomeUsuarioLogado = $_SESSION['nome'];
	
	$delimitador = " ";
	$partes = explode($delimitador,$nomeUsuarioLogado);	
?>
<div class="top-user">
	<a href="modules/usuarios/perfil.php"><?php echo $partes[0]; ?></a> &nbsp;<span class="material-symbols-outlined">person</span>
</div>
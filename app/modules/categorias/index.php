<?php
	include "session.php";
	
	$idUsuarioLogado = $_SESSION['id'];
	
	require_once "config/conecta.php";
	
	// select filtro
	$sql = "SELECT * FROM t_usuario WHERE id='$idUsuarioLogado' ";
	$res = mysqli_query($conn, $sql);
	$totalPath = mysqli_num_rows($res);
	while ($row = mysqli_fetch_array($res)){
		$id			=	$row['id'];
		$nome		=	$row['nome'];
		$cpf		=	$row['cpf'];
		$email		=	$row['email'];
		$telefone	=	$row['telefone'];
		$tipo		=	$row['tipo'];
		$status		=	$row['status'];
	}	
?>

<div class="mdl-cell mdl-cell--12-col box-page-topo">
	<span class="material-symbols-outlined">category</span>
	<h4>Categoria</h4>
</div>

<div class="mdl-cell mdl-cell--12-col box-form">
	
	<!-- Simple Textfield -->
	<form action="painel.php?p=41" method="POST" name="formUsuario">
		
		<div class="mdl-textfield mdl-js-textfield box-input">
			<input required class="mdl-textfield__input" value="" type="text" placeholder="Nome" name="nome" id="nome">
		</div>
		
		<div class="mdl-textfield mdl-js-textfield box-input">
			<input class="mdl-textfield__input" value="<?php echo $id; ?>" type="hidden" readonly name="id_usuario" id="id_uuario">
		</div>
		
		<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent btn-submit">
			CADASTRAR
		</button>
		
	</form>
	
</div>
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
	<span class="material-symbols-outlined">account_circle</span>
	<h4>Perfil</h4>
</div>

<div class="mdl-cell mdl-cell--12-col box-form">
	
	<!-- Simple Textfield -->
	<form action="painel.php?p=21" method="POST" name="formUsuario">
		
		<div class="mdl-textfield mdl-js-textfield box-input">
			<input required class="mdl-textfield__input" value="<?php echo $nome; ?>" type="text" placeholder="Nome" name="nome" id="nome">
		</div>
		
		<div class="mdl-textfield mdl-js-textfield box-input">
			<input required class="mdl-textfield__input" value="<?php echo $email; ?>" type="text" placeholder="Email" name="email" id="email">
		</div>
		
		<div class="mdl-textfield mdl-js-textfield box-input">
			<input required class="mdl-textfield__input" value="<?php echo $cpf; ?>" type="text" readonly  placeholder="CPF" name="cpf" id="cpf">
		</div> 
		
		<div class="mdl-textfield mdl-js-textfield box-input">
			<input required class="mdl-textfield__input" value="<?php echo $telefone; ?>" type="text" placeholder="Telefone" name="telefone" id="telefone">
		</div>
		
		<div class="mdl-textfield mdl-js-textfield box-input">
			<input class="mdl-textfield__input" value="<?php echo $id; ?>" type="hidden" readonly name="id_usuario" id="id_uuario">
		</div>
		
		<fieldset>
			<legend>Nova Senha:</legend>
			<div class="mdl-textfield mdl-js-textfield box-input">
				<input class="mdl-textfield__input" value="" type="text" name="senha" id="senha">
			</div>
		</fieldset>
		
		<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent btn-submit">
			CADASTRAR
		</button>
		
	</form>
	
</div>
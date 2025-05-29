<?php
	include "session.php";

	$idcategoria = htmlspecialchars($_GET['c']);
	
	if(empty($idcategoria)){
		echo "<script>location.assign('painel.php?p=99');</script>";
		exit();			
	}
	else{
		require_once "config/conecta.php";
		$sql = "SELECT id,nome FROM t_categoria WHERE id ='$idcategoria' ";
		$res = mysqli_query($conn, $sql);
		$total = mysqli_num_rows($res);
		while ($row = mysqli_fetch_array($res)){
			$id_categoria	=	$row['id'];
			$nome_categoria	=	$row['nome'];	
		}
	}
?>

<div class="mdl-cell mdl-cell--12-col box-page-topo">
	<span class="material-symbols-outlined">category</span>
	<h4>Editar Categoria</h4>
</div>

<div class="mdl-cell mdl-cell--12-col">
	
	<form action="painel.php?p=43" style="width:inherit;" onsubmit="return valida_categoria(this);" method="POST" name="formCategoria">
		<div class="mdl-textfield mdl-js-textfield box-input">
			<input class="mdl-textfield__input" value="<?php echo $nome_categoria; ?>" type="text" placeholder="Nome da categoria" name="nome" id="nome">
		</div>
		<input type="hidden" value="<?php echo $id_categoria; ?>" name="id_categoria"/>
		<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">
			EDITAR
		</button>
	</form>	
	<a href="painel.php?p=4" class="alink aspan"><span>&#8592; Voltar</span></a>
</div>

<script src="./js/valida_categoria.js"></script>

<?php mysqli_close($conn); ?>
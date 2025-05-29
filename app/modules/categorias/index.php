<?php
	include "session.php";
?>

<div class="mdl-cell mdl-cell--12-col box-page-topo">
	<span class="material-symbols-outlined">category</span>
	<h4>Categoria</h4>
</div>

<div class="mdl-cell mdl-cell--12-col">
	
	<form action="painel.php?p=41" style="width:inherit;background:#eed;padding:12px;" onsubmit="return valida_categoria(this);" method="POST" name="formCategoria">
		<div class="mdl-textfield mdl-js-textfield box-input">
			<input class="mdl-textfield__input" value="" type="text" placeholder="Nome da categoria" name="nome" id="nome">
		</div>
		
		<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">
			CADASTRAR
		</button>	
	</form>
	
	
	<ul class="demo-list-item mdl-list">
		<?php
			require_once "config/conecta.php";
			
			$sql = "SELECT * FROM t_categoria ORDER BY id DESC";
			$res = mysqli_query($conn, $sql);
			$total = mysqli_num_rows($res);
			while ($row = mysqli_fetch_array($res)){
				$id_categoria		=	$row['id'];
				$nome_categoria		=	$row['nome'];
				$status_categoria		=	$row['status'];
				
				echo "<li class='mdl-list__item'>
					<span class='mdl-list__item-primary-content'>
						$nome_categoria
					</span>
					<a href='./painel.php?p=42&c=$id_categoria'><span class='material-symbols-outlined btn_register'>edit</span></a>
					<a href='./painel.php?p=44&c=$id_categoria'><span class='material-symbols-outlined btn_register'>delete</span></a>
				</li>";				
				
			}
			mysqli_close($conn);
		?>
	</ul>		
	
</div>

<script src="./js/valida_categoria.js"></script>
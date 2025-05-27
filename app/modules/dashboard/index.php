<?php
	include "session.php";
	@$categoria = $_GET['c'];
?>

<div class="mdl-cell mdl-cell--12-col">
	
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label box-filter">
		<select class="mdl-textfield__input" type="select" onchange="buscar(this.value)" name="categoria" id="sample1">
			<option selected disabled>Selecione um tipo de malha</option>
			<?php
				// select filtro
				require_once "config/conecta.php";
				
				$sql = "SELECT * FROM t_categoria WHERE status = 1";
				$res = mysqli_query($conn, $sql);
				$totalPath = mysqli_num_rows($res);
				while ($row = mysqli_fetch_array($res)){
					$categoria_id	=	$row['id'];
					$categoria_nome	=	$row['nome'];
					
					echo "<option value='$categoria_id'>$categoria_nome</option>";
				}
			?>
		</select>
		<!--label class="mdl-textfield__label" for="sample1">Categoria</label-->
		
		<?php
			if(!empty($categoria)){
				// tag categoria selecionada
				$sql = "SELECT id,nome FROM t_categoria WHERE id=$categoria AND status = 1";
				$res = mysqli_query($conn, $sql);
				$totalPath = mysqli_num_rows($res);
				while ($row = mysqli_fetch_array($res)){
					$categoria_id	=	$row['id'];
					$categoria_nome	=	$row['nome'];
				}
				
				
				echo "<section class='box-tag-filtro'>
				<span class='mdl-chip mdl-chip--deletable'>
				<span class='mdl-chip__text'>$categoria_nome</span>
				<button onclick='window.location=\"painel.php?p=1\"' type='button' class='mdl-chip__action'><i class='material-icons'>cancel</i></button>
				</span>
				</section>";
			} 
		?>
	</div>
	
</div>




<div class="mdl-cell mdl-cell--12-col">
	<?php
		if(empty($categoria)){
			
			// consulta padrão
			
			$sql = "SELECT * FROM t_produto";
			$res = mysqli_query($conn, $sql);
			$total = mysqli_num_rows($res);
			while ($row = mysqli_fetch_array($res)){
				$produto_id	=	$row['id'];
				$produto_titulo	=	$row['titulo'];
				$produto_descricao =	$row['descricao'];
				$produto_qtde	=	$row['qtde'];
				$produto_cores	=	$row['cores'];
				$produto_preco	=	$row['preco'];
				$produto_status	=	$row['status'];
				$produto_categoria	=	$row['id_categoria'];
				
				//define status do cadastro na borda do card
				if($produto_status==1){
					$corStatus = '#83d81f';//verde : ativo
					$labelStatus = 'Desativar';
					}else{
					$corStatus = '#ff1100';//vermelho : inativo
					$labelStatus = 'Ativar';
				}
				echo "
				<div class='mdl-cell mdl-cell--4-col'>
				<div class='mdl-card mdl-shadow--4dp' style='border-bottom: 6px solid $corStatus'>
				<div class='mdl-card__supporting-text'>
				<h6 class='text_bluedark'>Malha</h6>
				<h4 class='text_bluedark'>$produto_titulo</h4>
				<span>$produto_descricao</span><br /><br />
				<span><strong>Cores:</strong> $produto_cores</span><br />
				<span><strong>Qtde:</strong> $produto_qtde</span><br />
				<span><strong>Preço:</strong> R$ $produto_preco</span>
				</div>
				<div class='mdl-card__actions mdl-card--border'>
				<a class='mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect'>
				Editar
				</a>
				<a href='painel.php?p=33&idp=$produto_id&sts=$produto_status' class='mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect'>
				$labelStatus
				</a>
				</div>
				
				</div>
				</div>";
			}
			if($total<1)
			echo "<h5 class='box-alert text_red'><span class='material-symbols-outlined'>report</span> &nbsp;Nenhum registro foi localizado!</h5>";
			
			
		}
		else{
			
			// consulta por categoria
			
			$sql = "SELECT * FROM t_produto WHERE id_categoria = '$categoria' ";
			$res = mysqli_query($conn, $sql);
			$total = mysqli_num_rows($res);
			while ($row = mysqli_fetch_array($res)){
				$produto_id	=	$row['id'];
				$produto_titulo	=	$row['titulo'];
				$produto_descricao =	$row['descricao'];
				$produto_qtde	=	$row['qtde'];
				$produto_cores	=	$row['cores'];
				$produto_preco	=	$row['preco'];
				$produto_status	=	$row['status'];
				$produto_categoria	=	$row['id_categoria'];
				
				
				//define status do cadastro na borda do card
				if($produto_status==1)
				$corStatus = '#83d81f';//verde : ativo
				else
				$corStatus = '#ff1100';//vermelho : inativo
				
				
				echo "
				<div class='mdl-cell mdl-cell--4-col'>
				<div class='mdl-card mdl-shadow--4dp' style='border-bottom: 6px solid $corStatus'>
				<div class='mdl-card__supporting-text'>
				<h6 class='text_bluedark'>Malha</h6>
				<h4 class='text_bluedark'>$produto_titulo</h4>
				<span>$produto_descricao</span><br /><br />
				<span><strong>Cores:</strong> $produto_cores</span><br />
				<span><strong>Qtde:</strong> $produto_qtde</span><br />
				<span><strong>Preço:</strong> R$ $produto_preco</span>
				</div>
				<div class='mdl-card__actions mdl-card--border'>
				<a class='mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect'>
				Editar
				</a>
				<a href='./modules/produtos/mudar-status.php?idp=$produto_id&sts=$produto_status' class='mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect'>
				Desativar
				</a>
				</div>
				</div>
				</div>";
			}
			if($total<1)
			echo "<h5 class='box-alert text_red'><span class='material-symbols-outlined'>report</span> &nbsp;Nenhum registro foi localizado!</h5>";
			
		}
		
	?>
</div>
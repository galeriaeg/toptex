<?php 
	include "session.php"; 
	$idUsuarioLogado = $_SESSION['id'];
	$nomeUsuarioLogado = $_SESSION['nome'];
	
	require_once "config/conecta.php";
?>
<!doctype html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>TopTex</title>
		<!-- link CDN Material Design Lite -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<!--link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css" /-->
		<link rel="stylesheet" href="css/material.min.css" />
		<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
		<link rel="stylesheet" href="css/toptex.css" />
	</head>
	
	
	<body>
		
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
			
			<header class="mdl-layout__header">
				<div class="mdl-layout__header-row">
					<div class="box-logo">
						<img src="./img/logo-toptex.png" alt="Logo TopTex" />
					</div>
					<div class="mdl-layout-spacer"></div>
					<nav class="mdl-navigation mdl-cell--hide-phone mdl-cell--hide-tablet">
						<a href="#" class="mdl-navigation__link mdl-badge" data-badge="5">Inicio</a>
						<a href="#" class="mdl-navigation__link">Categoria</a>
						<a href="#" class="mdl-navigation__link">Produtos</a>
					</nav>
				</div>
			</header>
			
			<div class="mdl-layout__drawer">
				<span class="mdl-layout-title">PAINEL</span>
				<nav class="mdl-navigation">
					<a href="#" class="mdl-navigation__link"><?php echo $nomeUsuarioLogado ?></a>
					<a href="#" class="mdl-navigation__link">Inicio</a>
					<a href="#" class="mdl-navigation__link">Categoria</a>
					<a href="#" class="mdl-navigation__link">Produtos</a>
					<a href="logout.php" class="mdl-navigation__link">Sair</a>
				</nav>
			</div>
			
			
			
			
			<main class="mdl-layout__content">
				<div class="mdl-grid">
					
					<div class="mdl-cell mdl-cell--12-col">
						
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<select class="mdl-textfield__input" type="select" onchange="buscar(this.value)" name="categoria" id="sample1">
								<option selected disabled>Selecione um tipo de malha</option>
								<?php
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
							<label class="mdl-textfield__label" for="sample1">Categoria</label>
							
							<section style="display:none" class="box-tag-filtro">
								<span class="mdl-chip mdl-chip--deletable">
									<span class="mdl-chip__text">Deletable Chip</span>
									<button type="button" class="mdl-chip__action"><i class="material-icons">cancel</i></button>
								</span>
							</section>
							
							
						</div>
					</div>
					
					
					<?php
						require_once "config/conecta.php";
						
						$sql = "SELECT * FROM t_produto";
						$res = mysqli_query($conn, $sql);
						$totalPath = mysqli_num_rows($res);
						while ($row = mysqli_fetch_array($res)){
							$produto_id	=	$row['id'];
							$produto_titulo	=	$row['titulo'];
							$produto_descricao =	$row['descricao'];
							$produto_qtde	=	$row['qtde'];
							$produto_cores	=	$row['cores'];
							$produto_preco	=	$row['preco'];
							$produto_status	=	$row['status'];
							$produto_categoria	=	$row['id_categoria'];
							
							if($produto_status==1)
								$cor = '#8BC34A';
							else
								$cor = '#ff1100';
							
							
							echo "
							<div class='mdl-cell mdl-cell--4-col'>
								<div class='mdl-card mdl-shadow--4dp' style='border-bottom: 6px solid $cor'>
									<div class='mdl-card__supporting-text'>
										<h6>Malha</h6>
										<h4>$produto_titulo</h4>
										<span>$produto_descricao</span><br /><br />
										<span><strong>Cores:</strong> $produto_cores</span><br />
										<span><strong>Qtde:</strong> $produto_qtde</span><br />
										<span><strong>Preço:</strong> R$ $produto_preco</span>
									</div>
									<div class='mdl-card__actions mdl-card--border'>
										<a class='mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect'>
											Editar
										</a>
										<a class='mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect'>
											Desativar
										</a>
									</div>
								</div>
							</div>";
						}
					?>
					

				</div>
				
				
				
				<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
					Button
				</button>	
			</main>
			
			<footer class="mdl-mini-footer">
				TopTex 2025 - Todos os direitos reservados
			</footer>
			
		</div>
		
		
		
	</body>
</html>


<?php 
	include "session.php";
	include "router.php"; 
?>
<!doctype html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>TopTex</title>
		<!-- link CDN Material Design Lite -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="css/material.min.css" />
		<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
		<!-- Google Icones -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />		
		<link rel="stylesheet" href="css/toptex.css" />
		<script defer src="js/buscar.js"></script>
	</head>
	
	
	<body>
		
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
		

			
			<?php include "src/components/topo-user.php"; ?>
			
			<!--div class="top-user">
				<a href="#"><?php //echo $partes[0]; ?></a> &nbsp;<span class="material-symbols-outlined">person</span>
			</div-->
			
			<header class="mdl-layout__header">
				<?php include "src/components/topo.php"; ?>
				<!-- div class="mdl-layout__header-row">
					<div class="box-logo">
						<img src="./img/logo-toptex.png" alt="Logo TopTex" onclick="window.location.href='index.php'" />
					</div>
					<div class="mdl-layout-spacer"></div>
					<nav class="mdl-navigation mdl-cell--hide-phone mdl-cell--hide-tablet">
						<a href="#" class="mdl-navigation__link">Inicio</a>
						<a href="#" class="mdl-navigation__link">Categoria</a>
						<a href="#" class="mdl-navigation__link">Produtos</a>
					</nav>
				</div-->
			</header>
			
			<div class="mdl-layout__drawer">
				<span class="mdl-layout-title">PAINEL</span>
				<nav class="mdl-navigation">
					<a href="#" class="mdl-navigation__link"><?php echo $nomeUsuarioLogado ?></a>
					<a href="painel.php" class="mdl-navigation__link">Inicio</a>
					<a href="#" class="mdl-navigation__link">Categoria</a>
					<a href="module.php" class="mdl-navigation__link">Produtos</a>
					<a href="logout.php" class="mdl-navigation__link">Sair</a>
				</nav>
			</div>
			
			
			
			
			<main class="mdl-layout__content">
			
				<div class="mdl-grid">
					<?php echo content(); ?>
				</div>
				
			</main>
			
			
			
			<footer class="mdl-mini-footer">
				TopTex 2025 - Todos os direitos reservados
			</footer>
			
		</div>
		
		
		
	</body>
</html>


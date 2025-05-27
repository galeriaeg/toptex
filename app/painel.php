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
	
	<!--teste real -->
		
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
			
			<?php include "src/components/topo-user.php"; ?>
			
			<header class="mdl-layout__header">
				<?php include "src/components/topo.php"; ?>
			</header>
			
			
			<div class="mdl-layout__drawer">
				<span class="mdl-layout-title">PAINEL</span>
				<nav class="mdl-navigation">
					<a href="#" class="mdl-navigation__link"><?php echo $nomeUsuarioLogado ?></a>
					<a href="painel.php?p=1" class="mdl-navigation__link">Inicio</a>
					<a href="painel.php?p=3" class="mdl-navigation__link">Produtos</a>
					<a href="painel.php?p=4" class="mdl-navigation__link">Categoria</a>
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


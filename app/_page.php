<?php 
	include "session.php"; 
	
	$idUsuarioLogado = $_SESSION['id'];
	$nomeUsuarioLogado = $_SESSION['nome'];
	
	$delimitador = " ";  // Espaço em branco
	$partes = explode($delimitador,$nomeUsuarioLogado);	
	
	@$categoria = $_GET['c'];
	
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
		<link rel="stylesheet" href="css/material.min.css" />
		<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
		<!-- Google Icones -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />		
		<link rel="stylesheet" href="css/toptex.css" />
		<script defer src="js/buscar.js"></script>
	</head>
	
	
	<body>
		
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
			
			
			
			
			<div class="top-user">
				<a href="#"><?php echo $partes[0]; ?></a> &nbsp;<span class="material-symbols-outlined">person</span>
			</div>
			
			<header class="mdl-layout__header">
				
				<div class="mdl-layout__header-row">
					<div class="box-logo">
						<img src="./img/logo-toptex.png" alt="Logo TopTex" onclick="window.location.href='index.php'" />
					</div>
					<div class="mdl-layout-spacer"></div>
					<nav class="mdl-navigation mdl-cell--hide-phone mdl-cell--hide-tablet">
						<a href="#" class="mdl-navigation__link">Inicio</a>
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
						<div class="mdl-textfield box-titulo-page">
							<span class="material-symbols-outlined">arrow_back</span>Cadastrar Produtos
						</div>
					</div>
					
					
					<div class="mdl-cell mdl-cell--12-col">
						<section class="box-form">
							<form action="#" method="POST" name="formCategoria">
								
								<div class="mdl-textfield mdl-js-textfield box-form">
									<label class="text_gray">Título:</label>
									<input class="mdl-textfield__input" type="text" id="sample1">
								</div>
								
								<div class="mdl-textfield mdl-js-textfield box-form">
									<label class="text_gray">Categoria:</label>
									<select class="mdl-textfield__input" type="select" name="categoria" id="sample1" />
									<option selected disabled></option>
									<option value='$categoria_id'>$categoria_nome</option>
									</select>
								</div>								
								
								<div class="mdl-textfield mdl-js-textfield box-form">
									<label class="text_gray">Descrição:</label>
									<textarea class="mdl-textfield__input" type="text" rows= "3" id="sample5" ></textarea>
								</div>
								
								<div class="mdl-textfield mdl-js-textfield box-form">
									<label class="text_gray">Quantidade disponível:</label>
									<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="sample2">
									<span class="mdl-textfield__error">Input is not a number!</span>
								</div>
								
								<div class="mdl-textfield mdl-js-textfield box-form">
									<label class="text_gray">Cores disponíveis:</label>
									<input class="mdl-textfield__input" type="text" id="sample1">
								</div>
								
								
								<div class="mdl-textfield mdl-js-textfield box-form">
									<label class="text_gray">Preço:</label>
									<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="sample2">
									<span class="mdl-textfield__error">Input is not a number!</span>
								</div>
								
								
								<button class="btn-submit mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
									SALVAR
								</button>	
								
							</form>
						</section>
					</div>
					
				</div>
				
				
			</main>
			
			<footer class="mdl-mini-footer">
				TopTex 2025 - Todos os direitos reservados
			</footer>
			
		</div>
		
		
		
	</body>
</html>


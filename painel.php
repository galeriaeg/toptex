<!doctype html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>TopTex!</title>
		<!-- link CDN Material Design Lite -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<!--link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css" /-->
		<link rel="stylesheet" href="css/material.min.css" />
		
		<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
	</head>
	
	<style>
		nav.mdl-navigation .mdl-badge[data-badge]:after{
		top:5px;
		right:-8px;
		}
	</style>
	

	<body>
	
	
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
		<header class="mdl-layout__header">
			<div class="mdl-layout__header-row">
				<span class="mdl-layout-title">PAINEL TOPTEX</span>
				<div class="mdl-layout-spacer"></div>
				<nav class="mdl-navigation">
					<a href="#" class="mdl-navigation__link mdl-badge" data-badge="5">Inicio</a>
					<a href="#" class="mdl-navigation__link">Categoria</a>
					<a href="#" class="mdl-navigation__link">Produtos</a>
				</nav>
			</div>
		</header>
		
		<div class="mdl-layout__drawer">
			<span class="mdl-layout-title">PAINEL</span>
				<nav class="mdl-navigation">
					<a href="#" class="mdl-navigation__link">Inicio</a>
					<a href="#" class="mdl-navigation__link">Categoria</a>
					<a href="#" class="mdl-navigation__link">Produtos</a>
				</nav>
		</div>
		
		<main class="mdl-layout__content">
			<div class="mdl-grid">
			  <div class="mdl-cell mdl-cell--4-col">CS 1</div>
			  <div class="mdl-cell mdl-cell--4-col">CS 1</div>
			  <div class="mdl-cell mdl-cell--4-col">CS 1</div>
			  <div class="mdl-cell mdl-cell--4-col">CS 1</div>
			</div>
			
			
<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
  <div class="mdl-tabs__tab-bar">
      <a href="#starks-panel" class="mdl-tabs__tab is-active">Starks</a>
      <a href="#lannisters-panel" class="mdl-tabs__tab">Lannisters</a>
      <a href="#targaryens-panel" class="mdl-tabs__tab">Targaryens</a>
  </div>

  <div class="mdl-tabs__panel is-active" id="starks-panel">
    <ul>
      <li>Eddard</li>
      <li>Catelyn</li>
      <li>Robb</li>
      <li>Sansa</li>
      <li>Brandon</li>
      <li>Arya</li>
      <li>Rickon</li>
    </ul>
  </div>
  <div class="mdl-tabs__panel" id="lannisters-panel">
    <ul>
      <li>Tywin</li>
      <li>Cersei</li>
      <li>Jamie</li>
      <li>Tyrion</li>
    </ul>
  </div>
  <div class="mdl-tabs__panel" id="targaryens-panel">
    <ul>
      <li>Viserys</li>
      <li>Daenerys</li>
    </ul>
  </div>
</div>
			
		<!-- Accent-colored raised button with ripple -->
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
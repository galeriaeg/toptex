<?php
	include "session.php";
	// menu topo
?>
<div class="mdl-layout__header-row">
	<div class="box-logo">
		<img src="./img/logo-toptex.png" alt="Logo TopTex" onclick="window.location.href='painel.php?p=1'" />
	</div>
	<div class="mdl-layout-spacer"></div>
	<nav class="mdl-navigation mdl-cell--hide-phone mdl-cell--hide-tablet">
		<a href="painel.php?p=1" class="mdl-navigation__link">Inicio</a>
		<a href="painel.php?p=3" class="mdl-navigation__link">Produtos</a>
		<a href="painel.php?p=4" class="mdl-navigation__link">Categoria</a>
		<a href="painel.php?p=99" class="mdl-navigation__link">Sair</a>
	</nav>
</div>



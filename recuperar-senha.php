<!doctype html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<link rel="shortcut icon" href="./img/favicon1616.png" />
		<link rel="shortcut icon" href="./img/favicon3232.png" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>TopTex</title>
		<!-- link CDN Material Design Lite -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="css/material.min.css" />
		<link rel="stylesheet" href="css/toptex.css" />
		<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
		<!-- Google Icones -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
		<script src="js/login.js"></script>
	</head>
	
	
	<body>
		
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
			
			<main class="mdl-layout__content">
				
				<div class="box-center">
					
					<div class="mdl-grid">
						<div class="mdl-cell mdl-cell--12-col">
							
							<div class="box-logo">
								<img src="./img/logo-toptex.png" alt="Logo TopTex" />
							</div>
							
							<h4 class="title-h4 flexcenter darkblue"> <span class="material-symbols-outlined">lock_reset</span>&nbsp;Recuperar senha</h4>
							
							<form action="app/aut.php" method="POST" name="formlogin" onsubmit="return validaLogin(this)">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
									<input class="mdl-textfield__input" type="text" name="email" id="sample1">
									<label class="mdl-textfield__label" for="sample1">Email</label>
								</div>
  								<span class="box-submit">
									<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
										ENTRAR
									</button>	
									<a href="index.php" class="ah6">Voltar</a>
								</span>
							</form>
							
						</div>
					</div>
					
					<div id="box-alerta" class="alert_error">Preencha todos os campos <span class="icon_close" onclick="fechaAlerta();"></span></div>
					
				</div>
				
			</main>
			
		</div>	
		
		
	</body>
</html>

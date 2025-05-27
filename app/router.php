<?php
	ini_set( 'display_errors', 1 );
	
	function content(){
		
		@$page = $_GET['p'];
		
		switch ($page) {
			
			case 1:
			include_once "modules/dashboard/index.php";
			break;
			
			/* usuarios */
			case 2:
			include_once "modules/usuarios/index.php";
			break;
			
			case 21:
			include_once "modules/usuarios/cadastro.php";
			break;
			
			
			/* produtos */
			case 3:
			include_once "modules/produtos/index.php";
			break;

			case 31:
			include_once "modules/produtos/index.php";
			break;

			case 32:
			include_once "modules/produtos/index.php";
			break;
			
			case 33:
			include_once "modules/produtos/mudar-status.php";
			break;	
			
			
			/* categorias */
			case 4:
			include_once "modules/categorias/index.php";
			break;
			
			case 41:
			include_once "modules/categorias/cadastro.php";
			break;
			
			case 99:
			include_once "logout.php";
			break;
			
			default:
			include_once "modules/dashboard/index.php";
			break;
		}	
		
	}
	
?>
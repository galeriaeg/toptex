<?php
	ini_set( 'display_errors', 1 );
	
	function content(){
		
		@$page = $_GET['p'];
		
		switch ($page) {
			
			case 1:
			include_once "modules/dashboard/index.php";
			break;
			
			case 2:
			include_once "modules/usuarios/index.php";
			
			case 3:
			include_once "modules/produtos/index.php";
			
			case 4:
			include_once "modules/categorias/index.php";
			
			default:
			echo "erro 404";
			//include_once "src/modules/usuarios/index.php";
		}	
		
	}
	
?>
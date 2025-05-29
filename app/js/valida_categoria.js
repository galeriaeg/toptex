function valida_categoria(formCategoria){
	
	if (formCategoria.nome.value == ""){ 
		alert("Informe o nome da categoria!");
		formCategoria.nome.focus();
		return (false); 
	}
	
}
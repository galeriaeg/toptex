function validaLogin(formLogin){
	
	if (formLogin.email.value == ""){ 
		//alert("Informe seu email!");
		document.getElementById('box-alerta').style.display='flex';
		formLogin.email.focus();
		return (false); 
	}
	
	if (formLogin.senha.value == ""){ 
		//alert("Informe seu senha!");
		document.getElementById('box-alerta').style.display='flex';
		formLogin.senha.focus();
		return (false); 
	}
	
}


function fechaAlerta(){
	document.getElementById('box-alerta').style.display='none';
}


function fechaAlertaAut(){
	document.getElementById('boxalerta').style.display='none';
}
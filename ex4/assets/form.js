function validaForm() {

	//->verificando campo vazio
	if (document.getElementById("nome").value == "") {
	alert("Preencha o campo de Nome");
	return false;
	}
	if (document.getElementById("sobrenome").value == "") {
	alert("Preencha o campo de Sobrenome");
	return false;
	}
	if (document.getElementById("email").value == "") {
	alert("Preencha o campo de E-mail");
	return false;
	}
	if (document.getElementById("telefone").value == "") {
	alert("Preencha o campo de Telefone");
	return false;
	}
	if (document.getElementById("login").value == "") {
	alert("Preencha o campo de Login");
	return false;
	}
	if (document.getElementById("senha").value == "") {
	alert("Preencha o campo de Senha");
	return false;
	}
  
	//->validações 
	if (!validaEmail(document.getElementById("email").value)){
		alert("Preencha o campo de E-mail: com um e-mail valido");
		return false;
	}

	document.envio.submit();
}

function validaEmail(email){
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){
		return true
	}
	return false
}

function mascara( campo ) {
    campo.value = campo.value.replace( /[^\d]/g, '' )
                             .replace( /^(\d\d)(\d)/, '($1) $2' )
                             .replace( /(\d{4})(\d)/, '$1-$2' );
    if ( campo.value.length > 14 ) campo.value = stop;
    else stop = campo.value;    
}
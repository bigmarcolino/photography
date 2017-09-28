nome = document.getElementById("nome");
email = document.getElementById("email");
mensagem = document.getElementById("mensagem");
nomeVazio = document.getElementById("nomeVazio");
emailVazio = document.getElementById("emailVazio");
mensagemVazio = document.getElementById("mensagemVazio");
enviar = document.getElementById("enviar");

verificaCampos = function(x){
	
	if (nome.value == ""){
		nomeVazio.style.display = "inline";
		x.preventDefault();
	}
	
	else{
		nomeVazio.style.display = "none";
	}
	
	if (email.value == ""){
		emailVazio.style.display = "inline";
		x.preventDefault();
	}
	
	else{
		emailVazio.style.display = "none";
	}
	
	if (mensagem.value == ""){
		mensagemVazio.style.display = "inline";
		x.preventDefault();
	}
	
	else{
		mensagemVazio.style.display = "none";
	}
	
}

enviar.addEventListener("click", verificaCampos);
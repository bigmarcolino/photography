usuario = document.getElementById("usuario");
senha = document.getElementById("senha");
usuarioVazio = document.getElementById("usuarioVazio");
senhaVazia = document.getElementById("senhaVazia");
enviar = document.getElementById("enviar");

verificaCampos = function(x){
	
	if (usuario.value == ""){
		usuarioVazio.style.display = "inline";
		x.preventDefault();
	}
	
	else{
		usuarioVazio.style.display = "none";
	}
	
	if (senha.value == ""){
		senhaVazia.style.display = "inline";
		x.preventDefault();
	}
	
	else{
		senhaVazia.style.display = "none";
	}

}

enviar.addEventListener("click", verificaCampos);
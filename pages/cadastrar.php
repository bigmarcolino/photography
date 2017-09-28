	<?php
	
		if( !(isset($_SESSION["cod_administrador"])) ) {
			$_SESSION["page_redirect"] = "pages/cadastrar.php";
			header("location: index.php?click=pages/login.php");
		}
	
	?>
	
	<article>
		
		<a href="index.php?click=pages/alterar_cadastro.php"><div class="opcoes_cadastro" id="alterar_cadastro">/alterar cadastro</div></a>
		<div class="opcoes_cadastro_maior" id="cadastrar">/cadastrar</div>
		
		<script type="text/javascript" src="js/jquery-2.0.3.js"></script>
			
		<script>
		
			$("#alterar_cadastro").hover(
				function () {
					$(this).animate({ BorderTopLeftRadius: "0.8em", BorderBottomRightRadius: "0.8em" }, 80);
				},
				function () {
					$(this).animate({ BorderTopLeftRadius: 0, BorderBottomRightRadius: 0 }, 80);
				}
			);
			
		</script>
		
		<div class="formulario-casdastrar">
			
			<form method="POST" action="controller/redirect-cadastrar.php"  accept-charset="utf-8">
				<input type="text" class="nome" name="nome" maxlength="32" placeholder="digite o nome" required autofocus> <br>
				<input type="text" class="email" name="usuario" maxlength="32" placeholder="digite um usuário" required> <br>
				<input type="password" class="email" name="senha" maxlength="32" placeholder="digite uma senha" required> <br>
				<input type="password" class="email" name="repetesenha" maxlength="32" placeholder="repita a senha" required>
				<input type="submit" value="enviar" id="enviar">
			</form>
			
			<p class="aviso-cadastro" id="usuarioExiste">Não cadastrado, pois o usuário já existe.</p>
			<p class="aviso-cadastro" id="senhasDiferentes">Não cadastrado, pois as senhas diferentes.</p>
			<p class="aviso-cadastro" id="cadastroFeito">Cadastro efetuado com sucesso.</p>
			
		</div>
		
		<?php
		
			if( isset($_SESSION["usuarioExistente"]) ) { ?>
				<script type="text/javascript" src="js/jquery-2.0.3.js"></script>
	
				<script>
					$(document).ready( function() { $("#usuarioExiste").css("display","inline"); } );
				</script> <?php
				
				unset($_SESSION["usuarioExistente"]);
			}
			
			else if( isset($_SESSION["senhasDiferentes"]) ) { ?>
				<script type="text/javascript" src="js/jquery-2.0.3.js"></script>
	
				<script>
					$(document).ready( function() { $("#senhasDiferentes").css("display","inline"); } );
				</script> <?php
				
				unset($_SESSION["senhasDiferentes"]);
			}
			
			else if( isset($_SESSION["cadastroEfetuado"]) ) { ?>
				<script type="text/javascript" src="js/jquery-2.0.3.js"></script>
	
				<script>
					$(document).ready( function() { $("#cadastroFeito").css("display","inline"); } );
				</script> <?php

				unset($_SESSION["cadastroEfetuado"]);
			}
		
		?>
		
	</article>
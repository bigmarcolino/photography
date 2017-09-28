	<?php
		if( isset($_SESSION["cod_administrador"]) ){  ?>
			<script> location.href="index.php?click=pages/home.php" </script> <?php
		}
	?>
	
	<article>
		
		<div class="titulo-login">/login</div>
	
		<div class="formulario-login">
			
			<form method="POST" action="controller/redirect-login.php">
				<input type="text" name="usuario" class="usuario" maxlength="32" id="usuario" placeholder="usuário" required autofocus><br>
				<input type="password" class="senha" maxlength="32" name="senha" id="senha" placeholder="senha" required> <input type="submit" value="enviar" id="enviar">
			</form>
			
			<p class="aviso-login" id="aviso-login">Usuário/senha incorreto.</p>
			<p class="aviso-login" id="usuarioVazio">Digite seu nome de usuário.</p>
			<p class="aviso-login" id="senhaVazia">Digite a senha.</p>
			
		</div>
		
		<script type="text/javascript" src="js/jquery-2.0.3.js"></script>
		
		<script type="text/javascript" src="js/verificaCamposLogin.js"></script>
		
		<?php	
			if( isset($_SESSION["login"]) ){ ?>
				<script>
					$(document).ready( function() { $("#aviso-login").css("display","inline"); } );
				</script> <?php
			}
			
			unset($_SESSION["login"]);
		?>
		
	</article>
	<?php
	
		if( !(isset($_SESSION["cod_administrador"])) ) {
			$_SESSION["page_redirect"] = "pages/alterar_cadastro.php";
			header("location: index.php?click=pages/login.php");
		}
	
	?>
	
	<article>
	
		<div class="opcoes_cadastro_maior" id="alterar_cadastro">/alterar cadastro</div>
		<a href="index.php?click=pages/cadastrar.php"><div class="opcoes_cadastro" id="cadastrar">/cadastrar</div></a>
		
		<script type="text/javascript" src="js/jquery-2.0.3.js"></script>
			
		<script>

			$("#cadastrar").hover(
				function () {
					$(this).animate({ BorderTopLeftRadius: "0.8em", BorderBottomRightRadius: "0.8em" }, 80);
				},
				function () {
					$(this).animate({ BorderTopLeftRadius: 0, BorderBottomRightRadius: 0 }, 80);
				}
			);
			
		</script>
		
		<div class="formulario-alterar-cadastro">
			
			<form method="POST" action="controller/redirect-alterar-cadastro.php" style="margin-bottom:20px;"  accept-charset="utf-8">
				
				<div class="dadosAtuais">
					<p style="margin-left:53px;"><strong>Dados Atuais</strong></p>
				
					<input type="text" class="nome" name="nomeAtual" maxlength="32" placeholder="digite seu nome atual" required autofocus> <br>
					<input type="text" class="email" name="usuarioAtual" maxlength="32" placeholder="digite seu usuário atual" required> <br>
					<input type="password" class="email" name="senhaAtual" maxlength="32" placeholder="digite sua senha atual" required> <br>
				</div>
				
				<div class="novosDados">
					<p style="margin-left:53px;"><strong>Novos Dados</strong></p>
					
					<input type="text" class="nome" name="nomeNovo" maxlength="32" placeholder="digite um novo nome" required> <br>
					<input type="text" class="email" name="usuarioNovo" maxlength="32" placeholder="digite um novo usuário" required> <br>
					<input type="password" class="email" name="senhaNovo" maxlength="32" placeholder="digite uma senha" required> <br>
					<input type="password" class="email" name="repetesenhaNovo" maxlength="32" placeholder="repita a senha" required> <br><br>
				</div>
				
				<br><br>
				
				<input type="submit" value="enviar" id="enviar" style="margin-top:10px;">
			</form>
			
			<p class="aviso-cadastro" id="dadosAtuaisIncorretos">Não alterado, pois os dados atuais estão incorretos.</p>
			<p class="aviso-cadastro" id="usuarioExiste">Não alterado, pois o novo usuário já existe.</p>
			<p class="aviso-cadastro" id="senhasDiferentes">Não alterado, pois as senhas são diferentes.</p>
			<p class="aviso-cadastro" id="alteracaoEfetuada">Alteração efetuada com sucesso.</p>
			
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
			
			else if( isset($_SESSION["alteracaoEfetuada"]) ) { ?>
				<script type="text/javascript" src="js/jquery-2.0.3.js"></script>
	
				<script>
					$(document).ready( function() { $("#alteracaoEfetuada").css("display","inline"); } );
				</script> <?php

				unset($_SESSION["alteracaoEfetuada"]);
			}
			
			else if( isset($_SESSION["dadosAtuaisIncorretos"]) ) { ?>
				<script type="text/javascript" src="js/jquery-2.0.3.js"></script>
	
				<script>
					$(document).ready( function() { $("#dadosAtuaisIncorretos").css("display","inline"); } );
				</script> <?php

				unset($_SESSION["dadosAtuaisIncorretos"]);
			}
		
		?>
		
	</article>
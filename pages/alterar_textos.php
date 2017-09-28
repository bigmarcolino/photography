	<?php
	
		if( !(isset($_SESSION["cod_administrador"])) ) {
			$_SESSION["page_redirect"] = "pages/alterar_textos.php";
			header("location: index.php?click=pages/login.php");
		}
	
	?>
	
	<article>
	
		<div class="formulario-alterar">
	
			<form method="POST" action="controller/redirect-alterar-textos.php"  accept-charset="utf-8">
				
				<div style="float:left; margin:10px 0 10px 0;"
					<label for="títuloDoSite" style="margin:10px 0 10px 0;">título do site</label> <br>
					<input type="text" name="tituloDoSite" maxlength="50" autofocus style="margin:10px 0 10px 0;"
						<?php
							$sql_acha = "SELECT titulo_aba FROM textos";
							$consulta = $conexao->query($sql_acha);
							$consulta->data_seek(0);
							$linha = $consulta->fetch_row();
							$text = $linha[0];
						?>
						value="<?php echo $text; ?>"
					>
				</div>
				
				<div style="float:left; margin:10px 0 10px 44px;">				
					<label for="títuloNoHome" style="margin:10px 0 10px 0;">título no home</label> <br>
					<input type="text" name="tituloNoHome" maxlength="15" style="margin:10px 0 10px 0;"
						<?php
							$sql_acha = "SELECT titulo_home FROM textos";
							$consulta = $conexao->query($sql_acha);
							$consulta->data_seek(0);
							$linha = $consulta->fetch_row();
							$text = $linha[0];
						?>
						value="<?php echo $text; ?>"
					>
				</div> <br>
				
				<div style="float:left; margin:10px 0 10px 0;">
					<label for="mensagemNoHome" style="margin:10px 0 10px 0;">mensagem no home</label> <br>
					<input type="text" name="mensagemNoHome" maxlength="100" style="margin:10px 0 10px 0; width:700px;"
						<?php
							$sql_acha = "SELECT mensagem_home FROM textos";
							$consulta = $conexao->query($sql_acha);
							$consulta->data_seek(0);
							$linha = $consulta->fetch_row();
							$text = $linha[0];
							echo $text;
						?>
						value="<?php echo $text; ?>"
					>
				</div>
				
				<div class="clear"></div>
				
				<div style="float:left; margin:10px 0 10px 0;">
					<label for="emailcontato" style="margin:10px 0 10px 0;">email de contato</label> <br>
					<input type="email" name="emailContato" maxlength="40" style="margin:10px 0 10px 0;"
						<?php
							$sql_acha = "SELECT email_contato FROM textos";
							$consulta = $conexao->query($sql_acha);
							$consulta->data_seek(0);
							$linha = $consulta->fetch_row();
							$text = $linha[0];
						?>
						value="<?php echo $text; ?>"
					>
				</div>
				
				<div style="float:left; margin:10px 0 10px 44px;">
					<label for="portfolio1" style="margin:10px 0 10px 0;">nome do portfólio1</label> <br>
					<input type="text" name="portfolio1" maxlength="30" style="margin:10px 0 10px 0;"
						<?php
							$sql_acha = "SELECT titulo_portfolio1 FROM textos";
							$consulta = $conexao->query($sql_acha);
							$consulta->data_seek(0);
							$linha = $consulta->fetch_row();
							$text = $linha[0];
						?>
						value="<?php echo $text; ?>"
					>
				</div>
				
				<div style="float:left; margin:10px 0 10px 38px;">
					<label for="portfolio2" style="margin:10px 0 10px 0;">nome do portfólio2</label> <br>
					<input type="text" name="portfolio2" maxlength="30" style="margin:10px 0 10px 0;"
						<?php
							$sql_acha = "SELECT titulo_portfolio2 FROM textos";
							$consulta = $conexao->query($sql_acha);
							$consulta->data_seek(0);
							$linha = $consulta->fetch_row();
							$text = $linha[0];
						?>
						value="<?php echo $text; ?>"
					>
				</div>
				
				<div class="clear"></div>
				
				<div style="float:left; margin:10px 0 10px 0px;">
					<label for="portfolio3" style="margin:10px 0 10px 0;">nome do portfólio3</label> <br>
					<input type="text" name="portfolio3" maxlength="30" style="margin:10px 0 10px 0;"
						<?php
							$sql_acha = "SELECT titulo_portfolio3 FROM textos";
							$consulta = $conexao->query($sql_acha);
							$consulta->data_seek(0);
							$linha = $consulta->fetch_row();
							$text = $linha[0];
						?>
						value="<?php echo $text; ?>"
					>
				</div>
				
				<div style="float:left; margin:10px 0 10px 38px;">
					<label for="portfolio4" style="margin:10px 0 10px 0;">nome do portfólio4</label> <br>
					<input type="text" name="portfolio4" maxlength="30" style="margin:10px 0 10px 0;"
						<?php
							$sql_acha = "SELECT titulo_portfolio4 FROM textos";
							$consulta = $conexao->query($sql_acha);
							$consulta->data_seek(0);
							$linha = $consulta->fetch_row();
							$text = $linha[0];
						?>
						value="<?php echo $text; ?>"
					>
				</div>
				
				<div  style="float:left; margin:10px 0 10px 38px;">
					<label for="portfolio5" style="margin:10px 0 10px 0;">nome do portfólio5</label> <br>
					<input type="text" name="portfolio5" maxlength="30" style="margin:10px 0 10px 0;"
						<?php
							$sql_acha = "SELECT titulo_portfolio5 FROM textos";
							$consulta = $conexao->query($sql_acha);
							$consulta->data_seek(0);
							$linha = $consulta->fetch_row();
							$text = $linha[0];
						?>
						value="<?php echo $text; ?>"	
					>
				</div>

				<div class="clear"></div>
				
				<div style="float:left; display:inline; margin:10px 0 10px 0;">
					<label for="textoBio" style="margin:10px 0 10px 0;">texto no bio</label> <br>
					<textarea class="textareaAlterarBio" name="textoBio" maxlength="1670"><?php
							$sql_acha = "SELECT texto_bio FROM textos";
							$consulta = $conexao->query($sql_acha);
							$consulta->data_seek(0);
							$linha = $consulta->fetch_row();
							$text = $linha[0];
							echo $text;
						?></textarea>
				</div>

				<div class="clear"></div>
				
				<span id="msgSucessoAlterar">Alterações efetuadas com sucesso.</span> <span id="msgNadaAlterado">Nenhum campo foi alterado.</span>
				
				<input type="submit" value="enviar" id="enviar"> 
				
			</form>
			
		</div>
		
		<script type="text/javascript" src="js/jquery-2.0.3.js"></script>
		
		<?php
			if( isset($_SESSION["alteracaoEfetuada"]) ) { ?>
				<script>
					$(document).ready( function() { $("#msgSucessoAlterar").css("display","inline"); } );
					$(document).ready( function() { $("#msgNadaAlterado").css("display","none"); } );
				</script> <?php
			}
			else if( isset($_SESSION["nadaAlterado"]) ) { ?>
				<script>
					$(document).ready( function() { $("#msgNadaAlterado").css("display","inline"); } );
					$(document).ready( function() { $("#msgSucessoAlterar").css("display","none"); } );
				</script> <?php
			}
			
			unset($_SESSION["alteracaoEfetuada"]);
			unset($_SESSION["nadaAlterado"]);
		?>

	</article>
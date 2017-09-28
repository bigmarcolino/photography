	<?php
	
		if( !(isset($_SESSION["cod_administrador"])) ) {
			$_SESSION["page_redirect"] = "pages/cadastro.php";
			header("location: index.php?click=pages/login.php");
		}
	
	?>
	
	<article>
	
		<a href="index.php?click=pages/alterar_cadastro.php"><div class="opcoes_cadastro" id="alterar_cadastro">/alterar cadastro</div></a>
		<a href="index.php?click=pages/cadastrar.php"><div class="opcoes_cadastro" id="cadastrar">/cadastrar</div></a>
		
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
			
			$("#cadastrar").hover(
				function () {
					$(this).animate({ BorderTopLeftRadius: "0.8em", BorderBottomRightRadius: "0.8em" }, 80);
				},
				function () {
					$(this).animate({ BorderTopLeftRadius: 0, BorderBottomRightRadius: 0 }, 80);
				}
			);
			
		</script>
	
	</article>
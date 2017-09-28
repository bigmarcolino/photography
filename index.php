<!DOCTYPE HTML>

	<html lang="pt-br">

		<head>
		
			<title>
				<?php
					include "controller/conexao_bd.php";
					$sql_acha = "SELECT titulo_aba FROM textos";
					$consulta = $conexao->query($sql_acha);
					$consulta->data_seek(0);
					$linha = $consulta->fetch_row();
					$text = $linha[0];
					
					echo $text;
				?>
			</title>
			
			<meta charset="utf-8">
			<meta name="description" content="Fotos de casamentos, noivados, aniversário de 15 anos. Entre em contato para contratar os serviços.">
			<meta name="keywords" content="fotografia, photography, fotos, casamento, noivado, 15 anos, natureza">
			<meta name="author" content="Marcus Vinícius">
			
			<link href="css/estilo.css" rel="stylesheet">			
			<link rel="stylesheet" type="text/css" href="css/slicebox.css">
			<link rel="stylesheet" type="text/css" href="css/custom.css">
			<link rel="stylesheet" type="text/css" href="css/style.css"/>
			<link href="css/perfect-scrollbar.css" rel="stylesheet">
			<noscript><link rel="stylesheet" type="text/css" href="css/noJS.css"/></noscript>
			<script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
			
		</head>
		
		<body>
		
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
			</script>
			
			<noscript>
			
				<div id="noscript">Para uma melhor experiência, recomendamos que ative o JavaScript.</div>
			
			</noscript>
		
			<?php session_start(); ?>
			
			<?php 
				if( isset($_SESSION["refresh"]) ) { 
					unset($_SESSION["refresh"]); ?>
					<script> document.location.reload(true); </script> <?php
				}
			?>
		
			<div class="IE">Para uma melhor experiência, recomendamos que não utilize o Internet Explorer.</div>
			<div class="resolucao">Para uma melhor experiência, utilize uma resolução maior ou igual a 1152x864.</div>
			
			<div class="barrinha"></div>
			
			<?php
				include "pages/modais.php";
			?>
			
			<div class="principal">
			
				<div class="addremove">
					<a href="#modaladd" rel="modal"><img id="add" src='images/add-16.png' alt='add'></a> <br>
					<a href="#modalremove"><img id="remove" src='images/minus-16.png' alt='remove'></a>
				</div>
			
				<header id="fundoHeader">
				
					<div class="titulo"><strong>
					
						<?php
							$sql_acha = "SELECT titulo_home FROM textos";
							$consulta = $conexao->query($sql_acha);
							$consulta->data_seek(0);
							$linha = $consulta->fetch_row();
							$text = $linha[0];
							
							echo $text;
						?>
					
					</strong></div>
					
					<div class="botoes-adm"><a href="index.php?click=pages/alterar_textos.php"><p id="alterar-textos">alterar textos</p></a></div>		
					<div class="botoes-adm"><a href="index.php?click=pages/cadastro.php"><p id="cadastro">cadastro</p></a></div>
					<div class="botoes"><a href="index.php?click=pages/bio.php"><p id="bio">bio</p></a></div>
					<div class="botoes"><a href="index.php?click=pages/portfolio.php"><p id="portfolio">portfólio</p></a></div>
					<div class="botoes"><a href="index.php?click=pages/home.php"><p id="home">home</p></a></div>
					
					<br><br><br><br>
					
					<div id="adm">
						
						<p class="saudacao">
						
							olá <?php 
							
								$nome = $_SESSION["nome_administrador"];
								$nomePedacos = explode(" ", $nome);
								
								echo $nomePedacos[0];
							?>,
							
							<script>
								
								dia = new Date();
								hora = dia.getHours();
								
								if( (hora >= 0) && (hora < 12) ){ 
									document.write("bom dia!");
								}
								
								else if( (hora >= 12) && (hora < 18) ){
									document.write("boa tarde!");
								}
								
								else if( hora >= 18 ){
									document.write("boa noite!");
								}
								
							</script>
						
						</p>
					
					</div>
					
					<p class="contato">
						Contato: <?php
								$sql_acha = "SELECT email_contato FROM textos";
								$consulta = $conexao->query($sql_acha);
								$consulta->data_seek(0);
								$linha = $consulta->fetch_row();
								$text = $linha[0];
								
								echo $text;
						?>					
					</p>
					
				</header>
				
				<div class="clear"></div>
				
				<div id="sair"><a href="index.php?click=controller/logout.php">sair</a></div>
				
				<?php
					include "controller/clicks.php";
					
					if( isset($_SESSION["cod_administrador"]) ){ ?>
						<script>
							$(document).ready( function() { $("#sair").css("display","inline"); } );
							$(document).ready( function() { $("#adm").css("display","inline"); } );
							$(document).ready( function() { $(".botoes-adm").css("display","inline"); } );
						</script> <?php
						
						if( $click == "pages/home.php" || $click == "pages/portfolio.php" || $click == "pages/portfolio1.php" || $click == "pages/portfolio3.php"
							|| $click == "pages/portfolio2.php" || $click == "pages/portfolio4.php"|| $click == "pages/portfolio5.php" || $click == "pages/bio.php" ) { ?>
							<script>
								$(document).ready( function() { $(".addremove").css("display","inline"); } );
							</script> <?php
							
							if( $click == "pages/portfolio.php" || $click == "pages/bio.php" ) { ?>
								<script>
									$(document).ready( function() { $("#remove").css("display","none"); } );
								</script> <?php
							}
						}

						if( $click == "pages/home.php" ) { ?>
							<script>
								$(document).ready( function() { $("#formHome").css("display","block"); } );
							</script> <?php
						}
						else if( $click == "pages/bio.php" ) { ?>
							<script>
								$(document).ready( function() { $("#formBio").css("display","block"); } );
							</script> <?php
						}
						else if( $click == "pages/portfolio.php" ) { ?>
							<script>
								$(document).ready( function() { $("#formPortfolios").css("display","block"); } );
							</script> <?php
						}
					}
				?>
				
				<div class="clear"></div>
				
				<footer>
					
					<div class="fb-like" data-href="https://www.facebook.com/tayssavandelliphotography" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
					
					<br><br><br>
				
					<div class="ano"><p>
					
						<p class="alinhamento">
							© <script>document.write( new Date().getFullYear() )</script>
							&nbsp | &nbsp Proibida a reprodução total ou parcial sem autorização &nbsp | &nbsp Desenvolvido por <a class="dev" href="https://www.facebook.com/marcusibraim" target="_blank"><strong>Marcus Vinícius</strong></a>
						</p>
						
					</p></div>
				
				</footer>
				
				<div class="clear"></div>
			
			</div>
		
			<script src="js/easing.js" type="text/javascript"></script>
			<script src="js/jquery.ui.totop.js" type="text/javascript"></script>
			
			<script>$("body").css("overflow", "auto");</script>
			
			<!-- script do botão de ir pro topo -->
			<script type="text/javascript">
			
				$(document).ready(function() {
					
					var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
					};
					
					$().UItoTop({ easingType: 'easeOutQuart' });
					
				});
				
			</script>
			
			<!-- script de exibição dos avisos de resolução incorreta e utilização do IE -->
			<script>
				var isIE = window.navigator.msPointerEnabled;
			
				if(isIE){
					$(document).ready( function() { $(".IE").css("display","block"); } );
				}
					
				var width = screen.width;
				var height = screen.height;
				
				if( width < 1152 || height < 864 ){
					$(document).ready( function() { $(".resolucao").css("display","block"); } );
				}
				
			</script>
			
			<script src="js/verificaExtReset.js" type="text/javascript"></script>
			
			<!-- script de exibição do form de upload de imagens -->
			<script>
			
				$(document).ready(function(){
					$("a[rel=modal]").click( function(ev){
						ev.preventDefault();
 
						var id = $(this).attr("href");
						var alturaTela = $(document).height();
						var larguraTela = $(window).width();
     
						$('#mascara').css({'width':larguraTela,'height':alturaTela});
						$('#mascara').fadeIn(1000);
						$('#mascara').fadeTo("slow",0.8);
 
						var left = ($(window).width() /2) - ( $(id).width() / 2 );
						var top = ($(window).height() / 2) - ( $(id).height() / 2 );
     
						$(id).css({'top':top,'left':left});
						$(id).show();  
					});
 
					$("#mascara").click( function(){
						$(this).hide();
						$("#modaladd").hide();
					});
 
					$('.fechar').click(function(ev){
						ev.preventDefault();
						$("#mascara").hide();
						$("#modaladd").hide();
					});
				});

			</script>

			<?php $conexao->close(); ?>
			
		</body>
	
	</html>
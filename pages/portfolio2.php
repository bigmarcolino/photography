	<a href="index.php?click=pages/portfolio1.php"><div class="titulo-portfolio" id="portfolio1">
		/<?php
			$sql_acha = "SELECT titulo_portfolio1 FROM textos";
			$consulta = $conexao->query($sql_acha);
			$consulta->data_seek(0);
			$linha = $consulta->fetch_row();
			$textPortfolio1 = $linha[0];
			
			$consulta->close();
			
			echo $textPortfolio1;
		?>
	</div></a>
	
	<div class="titulo-portfolio" id="portfolio2">
		/<?php
			$sql_acha = "SELECT titulo_portfolio2 FROM textos";
			$consulta = $conexao->query($sql_acha);
			$consulta->data_seek(0);
			$linha = $consulta->fetch_row();
			$textPortfolio2 = $linha[0];
			
			$consulta->close();
			
			echo $textPortfolio2;
		?>
	</div>
	
	<a href="index.php?click=pages/portfolio3.php"><div class="titulo-portfolio" id="portfolio3">
		/<?php
			$sql_acha = "SELECT titulo_portfolio3 FROM textos";
			$consulta = $conexao->query($sql_acha);
			$consulta->data_seek(0);
			$linha = $consulta->fetch_row();
			$textPortfolio3 = $linha[0];
			
			$consulta->close();
			
			echo $textPortfolio3;
		?>
	</div></a>
	
	<a href="index.php?click=pages/portfolio4.php"><div class="titulo-portfolio" id="portfolio4">
		/<?php
			$sql_acha = "SELECT titulo_portfolio4 FROM textos";
			$consulta = $conexao->query($sql_acha);
			$consulta->data_seek(0);
			$linha = $consulta->fetch_row();
			$textPortfolio4 = $linha[0];
			
			$consulta->close();
			
			echo $textPortfolio4;
		?>
	</div></a>
	
	<a href="index.php?click=pages/portfolio5.php"><div class="titulo-portfolio" id="portfolio5">
		/<?php
			$sql_acha = "SELECT titulo_portfolio5 FROM textos";
			$consulta = $conexao->query($sql_acha);
			$consulta->data_seek(0);
			$linha = $consulta->fetch_row();
			$textPortfolio5 = $linha[0];
			
			$consulta->close();
			
			echo $textPortfolio5;
		?>
	</div></a>
	
	<div class="clear"></div>
	
	<article>
	
		<div class="gamma-container gamma-loading" id="gamma-container">
	
			<ul class="gamma-gallery">
				<?php
					$diretorio = scandir("images/portfolio2/large");
					$qtd = count($diretorio) - 3;
					
					for ($i = 1; $i <= $qtd; $i++) {
						echo "
							<li>
								<!-- para adicionar uma descrição à imagem basta escrever a descrição entre os h3 -->
								<div data-alt='img$i' data-description='<h3></h3>' data-max-width='1800' data-max-height='1350'>
									<div data-src='images/portfolio2/xxxlarge/$i.jpg' data-min-width='1300'></div>
									<div data-src='images/portfolio2/xxlarge/$i.jpg' data-min-width='1000'></div>
									<div data-src='images/portfolio2/xlarge/$i.jpg' data-min-width='700'></div>
									<div data-src='images/portfolio2/large/$i.jpg' data-min-width='300'></div>
									<div data-src='images/portfolio2/medium/$i.jpg' data-min-width='200'></div>
									<div data-src='images/portfolio2/small/$i.jpg' data-min-width='140'></div>
									<div data-src='images/portfolio2/xsmall/$i.jpg'></div>
									<noscript>
										<img src='images/portfolio2/xsmall/$i.jpg' alt='img$i'/>
									</noscript>
								</div>
							</li>			
						";
					}		
				?>
			</ul>
			
			<div class="gamma-overlay"></div>
			
		</div>
		
		<div class="clear"></div>

		<script type="text/javascript" src="js/jquery-2.0.3.js"></script>
		<script src="js/jquery.masonry.min.js"></script>
		<script src="js/jquery.history.js"></script>
		<script src="js/js-url.min.js"></script>
		<script src="js/jquerypp.custom.js"></script>
		<script src="js/gamma.js"></script>
		<script type="text/javascript">
			
			$(function() {

				var GammaSettings = {
						// order is important!
						viewport : [ {
							width : 1200,
							columns : 5
						}, {
							width : 900,
							columns : 4
						}, {
							width : 500,
							columns : 3
						}, { 
							width : 320,
							columns : 2
						}, { 
							width : 0,
							columns : 2
						} ]
				};

				Gamma.init( GammaSettings, fncallback );


				// Example how to add more items (just a dummy):

				var page = 0,
					items = ['']

				function fncallback() {

					$( '#loadmore' ).show().on( 'click', function() {

						++page;
						var newitems = items[page-1]
						if( page <= 1 ) {
							
							Gamma.add( $( newitems ) );

						}
						if( page === 1 ) {

							$( this ).remove();

						}

					} );

				}

			});

		</script>	
	
		<script>
	
			$("#portfolio3,#portfolio5,#portfolio4,#portfolio1").hover(
			  function () {
				$(this).animate({ BorderTopLeftRadius: "0.8em", BorderBottomRightRadius: "0.8em" }, 80);
			  },
			  function () {
				$(this).animate({ BorderTopLeftRadius: 0, BorderBottomRightRadius: 0 }, 80);
			  }
			);

		</script>
		
		<?php
			if( strcmp($textPortfolio1, "") == 0 ) { ?>
				<script>
					$(document).ready( function() { $("#portfolio1").css("display","none"); } );
				</script> <?php
			}
			
			if( strcmp($textPortfolio2, "") == 0 ) { ?>
				<script>
					$(document).ready( function() { $("#portfolio2").css("display","none"); } );
				</script> <?php
			}
			
			if( strcmp($textPortfolio3, "") == 0 ) { ?>
				<script>
					$(document).ready( function() { $("#portfolio3").css("display","none"); } );
				</script> <?php
			}
			
			if( strcmp($textPortfolio4, "") == 0 ) { ?>
				<script>
					$(document).ready( function() { $("#portfolio4").css("display","none"); } );
				</script> <?php
			}
			
			if( strcmp($textPortfolio5, "") == 0 ) { ?>
				<script>
					$(document).ready( function() { $("#portfolio5").css("display","none"); } );
				</script> <?php
			}
		?>
	
	</article>
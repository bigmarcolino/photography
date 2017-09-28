	<article>
	
		<div class="portfolio1">
			/<?php
				$sql_acha = "SELECT titulo_portfolio1 FROM textos";
				$consulta = $conexao->query($sql_acha);
				$consulta->data_seek(0);
				$linha = $consulta->fetch_row();
				$textPortfolio1 = $linha[0];
				
				$consulta->close();
				
				echo $textPortfolio1;
			?>
		</div>
		
		<div class="portfolio2">
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
		
		<div class="portfolio3">
			/<?php
				$sql_acha = "SELECT titulo_portfolio3 FROM textos";
				$consulta = $conexao->query($sql_acha);
				$consulta->data_seek(0);
				$linha = $consulta->fetch_row();
				$textPortfolio3 = $linha[0];
				
				$consulta->close();
				
				echo $textPortfolio3;
			?>
		</div>
		
		<div class="portfolio4">
			/<?php
				$sql_acha = "SELECT titulo_portfolio4 FROM textos";
				$consulta = $conexao->query($sql_acha);
				$consulta->data_seek(0);
				$linha = $consulta->fetch_row();
				$textPortfolio4 = $linha[0];
				
				$consulta->close();
				
				echo $textPortfolio4;
			?>
		</div>
		
		<div class="portfolio5">
			/<?php
				$sql_acha = "SELECT titulo_portfolio5 FROM textos";
				$consulta = $conexao->query($sql_acha);
				$consulta->data_seek(0);
				$linha = $consulta->fetch_row();
				$textPortfolio5 = $linha[0];
				
				$consulta->close();

				echo $textPortfolio5;
			?>
		</div>
		
		<div class="img-portfolio1"><a href="index.php?click=pages/portfolio1.php"><img src="images/portfolio1.jpg" alt="portfolio1"></a></div>
		<div class="img-portfolio2"><a href="index.php?click=pages/portfolio2.php"><img src="images/portfolio2.jpg" alt="portfolio2"></a></div>
		<div class="img-portfolio3"><a href="index.php?click=pages/portfolio3.php"><img src="images/portfolio3.jpg" alt="portfolio3"></a></div>
		<div class="img-portfolio4"><a href="index.php?click=pages/portfolio4.php"><img src="images/portfolio4.jpg" alt="portfolio4"></a></div>
		<div class="img-portfolio5"><a href="index.php?click=pages/portfolio5.php"><img src="images/portfolio5.jpg" alt="portfolio5"></a></div>
		
		<script type="text/javascript" src="js/jquery-2.0.3.js"></script>
		
		<?php
			if( strcmp($textPortfolio1, "") == 0 ) { ?>
				<script>
					$(document).ready( function() { $(".portfolio1, .img-portfolio1").css("display","none"); } );
				</script> <?php
			}
			
			if( strcmp($textPortfolio2, "") == 0 ) { ?>
				<script>
					$(document).ready( function() { $(".portfolio2, .img-portfolio2").css("display","none"); } );
				</script> <?php
			}
			
			if( strcmp($textPortfolio3, "") == 0 ) { ?>
				<script>
					$(document).ready( function() { $(".portfolio3, .img-portfolio3").css("display","none"); } );
				</script> <?php
			}
			
			if( strcmp($textPortfolio4, "") == 0 ) { ?>
				<script>
					$(document).ready( function() { $(".portfolio4, .img-portfolio4").css("display","none"); } );
				</script> <?php
			}
			
			if( strcmp($textPortfolio5, "") == 0 ) { ?>
				<script>
					$(document).ready( function() { $(".portfolio5, .img-portfolio5").css("display","none"); } );
				</script> <?php
			}
		?>

	</article>
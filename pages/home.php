	<article>
		
		<div id="frase" class="frase"><p><strong>
		
			<?php
				include "controller/conexao_bd.php";
				$sql_acha = "SELECT mensagem_home FROM textos";
				$consulta = $conexao->query($sql_acha);
				$consulta->data_seek(0);
				$linha = $consulta->fetch_row();
				$text = $linha[0];
	
				echo $text;
			?>
		
		</strong></p></div>
		
		<div class="clear"></div>
	
		<div class="wrapper">

			<ul id="sb-slider" class="sb-slider">
				<?php
					$diretorio = scandir("images/home");
					$qtd = count($diretorio) - 3;
					
					for ($i = 1; $i <= $qtd; $i++) {
						echo "
							<li>
								<img src='images/home/$i.jpg' alt='image$i'>
								<!-- <div class='sb-description'>
									<h3>  </h3>
									Para colocar legenda nessa foto, basta desfazer o comentário e escrever a legenda dentro da tag h3.
								</div>  -->
							</li>			
						";
					}		
				?>
			</ul>

			<div id="shadow" class="shadow"></div>
			
			<div id="nav-arrows" class="nav-arrows">
				<a href="#">Next</a>
				<a href="#">Previous</a>
			</div>
			
			<div id="nav-dots" class="nav-dots">
				<span class="nav-dot-current"></span>
				<?php
					$diretorio = scandir("images/home");
					$qtd = count($diretorio) - 3;
					
					for ($i = 1; $i <= $qtd - 1; $i++) {
						echo "<span></span>";
					}		
				?>
			</div>
			
			<div id="nav-options" class="nav-options">
				<span id="navPlay">Play</span>
				<span id="navPause">Pause</span>
			</div>
			
			<script type="text/javascript" src="js/jquery-2.0.3.js"></script>
			
			<?php
				if( strcmp($text, "") == 0 ) { ?>
					<script>
						$(document).ready( function() { $("#frase").css("display","none"); } );
					</script> <?php
				}
			?>		
			
			<script type="text/javascript" src="js/jquery.slicebox.js"></script>
			
			<script type="text/javascript">
			
				$(function() {
					
					var Page = (function() {

						var $navArrows = $( '#nav-arrows' ).hide(),
							$navDots = $( '#nav-dots' ).hide(),
							$nav = $navDots.children( 'span' ),
							$navOptions = $( '#nav-options' ).hide(),
							$shadow = $( '#shadow' ).hide(),
							slicebox = $( '#sb-slider' ).slicebox( {
								onReady : function() {

									$navArrows.show();
									$navOptions.show();
									$navDots.show();
									$shadow.show();

								},
								orientation : 'r',
								cuboidsRandom : true,
								
								onBeforeChange : function( pos ) {

									$nav.removeClass( 'nav-dot-current' );
									$nav.eq( pos ).addClass( 'nav-dot-current' );

								}
							} ),
							
							init = function() {

								initEvents();
								
							},
							initEvents = function() {

								// adicionar eventos de navegação
								$navArrows.children( ':first' ).on( 'click', function() {

									slicebox.next();
									return false;

								} );

								$navArrows.children( ':last' ).on( 'click', function() {
									
									slicebox.previous();
									return false;

								} );
								
								window.onload = function(){
								
									slicebox.play();
									return false;
									
								}
								
								$nav.each( function( i ) {
							
									$( this ).on( 'click', function( event ) {
										
										var $dot = $( this );
										
										if( !slicebox.isActive() ) {

											$nav.removeClass( 'nav-dot-current' );
											$dot.addClass( 'nav-dot-current' );
										
										}
										
										slicebox.jump( i + 1 );
										return false;
									
									} );
								
								} );
								
								$( '#navPlay' ).on( 'click', function() {
						
									slicebox.play();
									return false;

								} );

								$( '#navPause' ).on( 'click', function() {
									
									slicebox.pause();
									return false;

								} );

							};

							return { init : init };

					})();

					Page.init();

				});
				
			</script>
			
		</div>
	
	</article>
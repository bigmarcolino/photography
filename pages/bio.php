	<article>
	
		<div class="bio">/bio</div>
		
		<div class="texto-bio">
			
			<p>
				<?php
					$sql_acha = "SELECT texto_bio FROM textos";
					$consulta = $conexao->query($sql_acha);
					$consulta->data_seek(0);
					$linha = $consulta->fetch_row();
					$text = $linha[0];
					
					echo $text;
				?>
			</p>
			
		</div>
		
		<img class="foto-bio" src="images/bio.jpg" alt="bio">
		
		<script type="text/javascript" src="js/jquery-2.0.3.js"></script>
	
	</article>
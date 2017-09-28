		<div class="food">
			/<?php
				$sql_acha = "SELECT titulo_portfolio1 FROM textos";
				$consulta = $conexao->query($sql_acha);
				$consulta->data_seek(0);
				$linha = $consulta->fetch_row();
				$text = $linha[0];
				
				echo $text;
			?>
		</div>
		
		<div class="wild">
			/<?php
				$sql_acha = "SELECT titulo_portfolio2 FROM textos";
				$consulta = $conexao->query($sql_acha);
				$consulta->data_seek(0);
				$linha = $consulta->fetch_row();
				$text = $linha[0];
				
				echo $text;
			?>
		</div>
		
		<div class="portfolio3">
			/<?php
				$sql_acha = "SELECT titulo_portfolio3 FROM textos";
				$consulta = $conexao->query($sql_acha);
				$consulta->data_seek(0);
				$linha = $consulta->fetch_row();
				$text = $linha[0];
				
				echo $text;
			?>
		</div>
		
		<div class="events">
			/<?php
				$sql_acha = "SELECT titulo_portfolio4 FROM textos";
				$consulta = $conexao->query($sql_acha);
				$consulta->data_seek(0);
				$linha = $consulta->fetch_row();
				$text = $linha[0];
				
				echo $text;
			?>
		</div>
		
		<div class="people">
			/<?php
				$sql_acha = "SELECT titulo_portfolio5 FROM textos";
				$consulta = $conexao->query($sql_acha);
				$consulta->data_seek(0);
				$linha = $consulta->fetch_row();
				$text = $linha[0];
				
				echo $text;
			?>
		</div>
	<?php
		if( isset($_GET["click"]) ){
			$click = $_GET["click"];
			include "$click";
		}
		else{
			$click = "pages/home.php";
			include "$click";
		}
		
		//efeitos no header
		if($click == "pages/home.php"){ ?>
			<script>
				document.getElementById("home").style.color = "#1E90FF";
				document.getElementById("home").style.fontWeight = "bolder";
			</script> <?php
		}
		else if ($click == "pages/portfolio.php" || $click == "pages/portfolio1.php" || $click == "pages/portfolio3.php"
			|| $click == "pages/portfolio2.php" || $click == "pages/portfolio4.php"|| $click == "pages/portfolio5.php"){ ?>
			<script>
				document.getElementById("portfolio").style.color = "#1E90FF";
				document.getElementById("portfolio").style.fontWeight = "bolder";
			</script> <?php
		}
		else if ($click == "pages/bio.php"){ ?>
			<script>
				document.getElementById("bio").style.color = "#1E90FF";
				document.getElementById("bio").style.fontWeight = "bolder";
			</script> <?php
		}
		else if ($click == "pages/alterar_textos.php"){ ?>
			<script>
				document.getElementById("alterar-textos").style.color = "#1E90FF";
				document.getElementById("alterar-textos").style.fontWeight = "bolder";
			</script> <?php
		}
		else if ($click == "pages/cadastro.php" || $click == "pages/cadastrar.php" || $click == "pages/alterar_cadastro.php"){ ?>
			<script>
				document.getElementById("cadastro").style.color = "#1E90FF";
				document.getElementById("cadastro").style.fontWeight = "bolder";
			</script> <?php
		}
		
		//efeitos em cada sessão do portfolio
		if($click == "pages/portfolio1.php"){ ?>
			<script>
				document.getElementById("portfolio1").className = "titulo-maior-portfolio";
			</script> <?php
		}
		else if($click == "pages/portfolio2.php"){ ?>	
			<script>
				document.getElementById("portfolio2").className = "titulo-maior-portfolio";
			</script> <?php
		}
		else if($click == "pages/portfolio3.php"){ ?>	
			<script>
				document.getElementById("portfolio3").className = "titulo-maior-portfolio";
			</script> <?php
		}
		else if($click == "pages/portfolio4.php"){ ?>	
			<script>
				document.getElementById("portfolio4").className = "titulo-maior-portfolio";
			</script> <?php
		}
		else if($click == "pages/portfolio5.php"){ ?>	
			<script>
				document.getElementById("portfolio5").className = "titulo-maior-portfolio";
			</script> <?php
		}
	?>
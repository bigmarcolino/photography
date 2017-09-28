	<?php
	
		header("Content-Type: text/html; charset=utf-8");
		
		include "conexao_bd.php";
	
		$tituloDoSite = $conexao->real_escape_string($_POST["tituloDoSite"]);
		$tituloNoHome = $conexao->real_escape_string($_POST["tituloNoHome"]);
		$mensagemNoHome = $conexao->real_escape_string($_POST["mensagemNoHome"]);
		$emailContato = $conexao->real_escape_string($_POST["emailContato"]);
		$portfolio1 = $conexao->real_escape_string($_POST["portfolio1"]);
		$portfolio2 = $conexao->real_escape_string($_POST["portfolio2"]);
		$portfolio3 = $conexao->real_escape_string($_POST["portfolio3"]);
		$portfolio4 = $conexao->real_escape_string($_POST["portfolio4"]);
		$portfolio5 = $conexao->real_escape_string($_POST["portfolio5"]);
		$textoBio = $conexao->real_escape_string($_POST["textoBio"]);
		
		$sql = "SELECT titulo_aba FROM textos";
		$consulta = $conexao->query($sql);
		$consulta->data_seek(0);
		$linha = $consulta->fetch_row();
		$tituloDoSiteAtual = $linha[0];
		
		$sql = "SELECT titulo_home FROM textos";
		$consulta = $conexao->query($sql);
		$consulta->data_seek(0);
		$linha = $consulta->fetch_row();
		$tituloNoHomeAtual = $linha[0];
		
		$sql = "SELECT mensagem_home FROM textos";
		$consulta = $conexao->query($sql);
		$consulta->data_seek(0);
		$linha = $consulta->fetch_row();
		$mensagemNoHomeAtual = $linha[0];
		
		$sql = "SELECT email_contato FROM textos";
		$consulta = $conexao->query($sql);
		$consulta->data_seek(0);
		$linha = $consulta->fetch_row();
		$emailContatoAtual = $linha[0];
		
		$sql = "SELECT titulo_portfolio1 FROM textos";
		$consulta = $conexao->query($sql);
		$consulta->data_seek(0);
		$linha = $consulta->fetch_row();
		$portfolio1Atual = $linha[0];
		
		$sql = "SELECT titulo_portfolio2 FROM textos";
		$consulta = $conexao->query($sql);
		$consulta->data_seek(0);
		$linha = $consulta->fetch_row();
		$portfolio2Atual = $linha[0];
		
		$sql = "SELECT titulo_portfolio3 FROM textos";
		$consulta = $conexao->query($sql);
		$consulta->data_seek(0);
		$linha = $consulta->fetch_row();
		$portfolio3Atual = $linha[0];
		
		$sql = "SELECT titulo_portfolio4 FROM textos";
		$consulta = $conexao->query($sql);
		$consulta->data_seek(0);
		$linha = $consulta->fetch_row();
		$portfolio4Atual = $linha[0];
		
		$sql = "SELECT titulo_portfolio5 FROM textos";
		$consulta = $conexao->query($sql);
		$consulta->data_seek(0);
		$linha = $consulta->fetch_row();
		$portfolio5Atual = $linha[0];
		
		$sql = "SELECT texto_bio FROM textos";
		$consulta = $conexao->query($sql);
		$consulta->data_seek(0);
		$linha = $consulta->fetch_row();
		$textoBioAtual = $linha[0];
		
		$consulta->close();

		if ( strcmp($tituloDoSite, $tituloDoSiteAtual) != 0 || strcmp($tituloNoHome, $tituloNoHomeAtual) != 0 || strcmp($mensagemNoHome, $mensagemNoHomeAtual) != 0 || 
		     strcmp($emailContato, $emailContatoAtual) != 0 || strcmp($portfolio1, $portfolio1Atual) != 0 || strcmp($portfolio2, $portfolio2Atual) != 0 || 
			 strcmp($portfolio3, $portfolio3Atual) != 0 || strcmp($portfolio4, $portfolio4Atual) != 0 || strcmp($portfolio5, $portfolio5Atual) != 0 || 
			 strcmp($textoBio, $textoBioAtual) != 0 ) {
		
			$sql1 = "UPDATE textos SET titulo_aba='$tituloDoSite' WHERE cod_texto='1'";
			$sql2 = "UPDATE textos SET titulo_home='$tituloNoHome' WHERE cod_texto='1'";
			$sql3 = "UPDATE textos SET mensagem_home='$mensagemNoHome' WHERE cod_texto='1'";
			$sql4 = "UPDATE textos SET email_contato='$emailContato' WHERE cod_texto='1'";
			$sql5 = "UPDATE textos SET titulo_portfolio1='$portfolio1' WHERE cod_texto='1'";
			$sql6 = "UPDATE textos SET titulo_portfolio2='$portfolio2' WHERE cod_texto='1'";
			$sql7 = "UPDATE textos SET titulo_portfolio3='$portfolio3' WHERE cod_texto='1'";
			$sql8 = "UPDATE textos SET titulo_portfolio4='$portfolio4' WHERE cod_texto='1'";
			$sql9 = "UPDATE textos SET titulo_portfolio5='$portfolio5' WHERE cod_texto='1'";
			$sql10 = "UPDATE textos SET texto_bio='$textoBio' WHERE cod_texto='1'";
					
			$conexao->query($sql1);
			$conexao->query($sql2);
			$conexao->query($sql3);
			$conexao->query($sql4);
			$conexao->query($sql5);
			$conexao->query($sql6);
			$conexao->query($sql7);
			$conexao->query($sql8);
			$conexao->query($sql9);
			$conexao->query($sql10);
			
			$conexao->close();
			$consulta->close();
			
			session_start();
			$_SESSION["alteracaoEfetuada"] = 1;
			header("location: ../index.php?click=pages/alterar_textos.php");
		}
		
		else {
			$conexao->close();
			$consulta>close();		
			
			session_start();
			$_SESSION["nadaAlterado"] = 1;
			header("location: ../index.php?click=pages/alterar_textos.php");
		}
		
	?>
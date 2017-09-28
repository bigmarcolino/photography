	<?php
	
		include "conexao_bd.php";
	
		$nomeAtual = $conexao->real_escape_string($_POST["nomeAtual"]);
		$usuarioAtual = $conexao->real_escape_string($_POST["usuarioAtual"]);
		$senhaAtual = $conexao->real_escape_string($_POST["senhaAtual"]);
		$nomeNovo = $conexao->real_escape_string($_POST["nomeNovo"]);
		$usuarioNovo = $conexao->real_escape_string($_POST["usuarioNovo"]);
		$senhaNovo = $conexao->real_escape_string($_POST["senhaNovo"]);
		$repetesenhaNovo = $conexao->real_escape_string($_POST["repetesenhaNovo"]);
			
		$sql_acha = "SELECT cod_administrador FROM administrador 
		WHERE nome_administrador = '$nomeAtual' AND usuario_administrador = '$usuarioAtual' AND senha_administrador = '$senhaAtual'";
		
		if( $senhaNovo != $repetesenhaNovo ) {
			session_start();
			$_SESSION["senhasDiferentes"] = 1; 
			header("location: ../index.php?click=pages/alterar_cadastro.php");
		}
		
		else if( $conexao->query($sql_acha)->num_rows == 0 ) {
			$conexao->close();
			session_start();
			$_SESSION["dadosAtuaisIncorretos"] = 1; 
			header("location: ../index.php?click=pages/alterar_cadastro.php");
		}
		
		else {
			$sql_acha = "SELECT cod_administrador FROM administrador WHERE usuario_administrador = '$usuarioNovo'";
		
			$consulta = $conexao->query($sql_acha);
			
			if( $consulta->num_rows > 0 ){
				$conexao->close();
				$consulta->close();
				
				session_start();
				$_SESSION["usuarioExistente"] = 1;
				header("location: ../index.php?click=pages/alterar_cadastro.php");
			}
			
			else {
			
				$sql_acha_id = "SELECT cod_administrador FROM administrador 
		        WHERE nome_administrador = '$nomeAtual' AND usuario_administrador = '$usuarioAtual' AND senha_administrador = '$senhaAtual'";
				
				$consulta = $conexao->query($sql_acha_id);
				$consulta->data_seek(0);
				$linha = $consulta->fetch_row();
				$id = $linha[0];
				
				$sql = "UPDATE administrador SET nome_administrador='$nomeNovo', usuario_administrador='$usuarioNovo', senha_administrador='$senhaNovo' 
				WHERE cod_administrador='$id'";
				
				$conexao->query($sql); 
				$conexao->close();
				$consulta->close();
				
				session_start();
				$_SESSION["alteracaoEfetuada"] = 1;
				header("location: ../index.php?click=pages/alterar_cadastro.php"); 
			}
		}		
	?>
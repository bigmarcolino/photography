	<?php
	
		include "conexao_bd.php";
	
		$nome = $conexao->real_escape_string($_POST["nome"]);
		$usuario = $conexao->real_escape_string($_POST["usuario"]);
		$senha = $conexao->real_escape_string($_POST["senha"]);
		$repetesenha = $conexao->real_escape_string($_POST["repetesenha"]);
		
		if( $senha != $repetesenha ) {
			session_start();
			$_SESSION["senhasDiferentes"] = 1; 
			header("location: ../index.php?click=pages/cadastrar.php");
		}
		
		else {		
			$sql_acha = "SELECT cod_administrador FROM administrador WHERE usuario_administrador = '$usuario'";
		
			$consulta = $conexao->query($sql_acha);
			
			if( $consulta->num_rows > 0 ){
				$conexao->close();
				$consulta->close();
				
				session_start();
				$_SESSION["usuarioExistente"] = 1;
				header("location: ../index.php?click=pages/cadastrar.php");
			}
			
			else {
				$sql = "INSERT INTO administrador (nome_administrador,usuario_administrador,senha_administrador) VALUES ('$nome','$usuario','$senha')";
				$conexao->query($sql); 
				$conexao->close();
				$consulta->close();
				
				session_start();
				$_SESSION["cadastroEfetuado"] = 1;
				header("location: ../index.php?click=pages/cadastrar.php"); 
			}
		}		
	?>
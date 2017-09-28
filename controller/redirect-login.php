	<?php
	
		include "../controller/conexao_bd.php";
	
		if( isset($_POST) ){
		
			$usuario = $conexao->real_escape_string($_POST["usuario"]);
			$senha = $conexao->real_escape_string($_POST["senha"]);
			
			$sql_acha = "SELECT cod_administrador, nome_administrador FROM administrador 
			WHERE usuario_administrador = '$usuario' AND senha_administrador = '$senha'";
			
			$consulta = $conexao->query($sql_acha);
			
			if( $consulta->num_rows == 1 ){
				session_start();				
				$consulta->data_seek(0);
				$linha = $consulta->fetch_row();

				$_SESSION["cod_administrador"] = $linha[0];
				$_SESSION["nome_administrador"] = $linha[1];
				$conexao->close();
				$consulta->close();
				
				$pagina = $_SESSION["page_redirect"];
				unset($_SESSION["page_redirect"]);
				
				if( isset($pagina) ){
					header("location: ../index.php?click=$pagina");
				}
				
				else {
					header("location: ../index.php?click=pages/home.php");
				}
			}
			
			else{
				session_start();
				$_SESSION["login"] = 1;
				header("location: ../index.php?click=pages/login.php");
			}
			
		}
		
	?>
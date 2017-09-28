	<?php
		
		$conexao = new mysqli( 'localhost', 'root', '', 'photography' );
		$conexao->set_charset("utf8");
 
		if ( mysqli_connect_errno() ) {
			die( mysqli_connect_error() );
			exit();
		}

	?>
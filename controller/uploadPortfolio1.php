<?php
	if(isset($_POST['submit'])) {
		extract($_POST);
		
		$caminhoArquivo = "../images/portfolio1.jpg";
		unlink($caminhoArquivo);
		move_uploaded_file( $_FILES['filePortfolio1']['tmp_name'], $caminhoArquivo );
		
		session_start();
		$_SESSION["refresh"] = 1;
		header("location: ../index.php?click=pages/portfolio.php");
	}
?>
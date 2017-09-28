<?php
	if(isset($_POST['submit'])) {
		extract($_POST);
		
		$caminhoArquivo = "../images/bio.jpg";
		unlink($caminhoArquivo);
		move_uploaded_file( $_FILES['fileBio']['tmp_name'], $caminhoArquivo );
		
		session_start();
		$_SESSION["refresh"] = 1;
		header("location: ../index.php?click=pages/bio.php");
	}
?>
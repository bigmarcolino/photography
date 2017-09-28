<?php
	if(isset($_POST['submit'])) {
		extract($_POST);
		
		$caminhoArquivo = "../images/background.jpg";
		unlink($caminhoArquivo);
		move_uploaded_file( $_FILES['fileFundo']['tmp_name'], $caminhoArquivo );
		
		list($width, $height) = getimagesize($caminhoArquivo);
		session_start();
		
		if( $width == 1920 && $height == 1080 ){
			$_SESSION["refresh"] = 1;
			header("location: ../index.php?click=pages/home.php");
		}
		else{
			include '../WideImage/lib/WideImage.php';
			$img = WideImage::load($caminhoArquivo);
			$img = $img->resize(1920, 1080, 'inside');
			unlink($caminhoArquivo);
			$img->saveToFile($caminhoArquivo);

			$_SESSION["refresh"] = 1;
			header("location: ../index.php?click=pages/home.php");
		}
	}
?>
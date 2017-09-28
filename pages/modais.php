<div id="modaladd">
	<a href="#" class="fechar"><img src="images/close-16.png" alt="fechar"></a>
	
	<div id="formHome">
	
		<p class="aviso-imagem">Imagem não é 16:9.</p> <p class="aviso-imagem2">Formato de arquivo não suportado.</p>

		<form method="post" action="controller/uploadFundo.php" enctype="multipart/form-data" class="formModal">
			<fieldset>
				<legend>fundo</legend>
				<input type="file" id="fileFundo" name="fileFundo" accept="image/*" required>
				<button onclick="resetFundo($('#fileFundo'));event.preventDefault()">reset</button><br>
				<input type="submit" name="submit" id="submitFundo" value="enviar" disabled="disabled">
			</fieldset>
		</form>
		
		<form method="post" action="controller/uploadSlide.php" enctype="multipart/form-data" class="formModal">
			<fieldset>
				<legend>slide</legend>
				<input type="file" id="fileSlide" name="fileSlide" accept="image/*" required>
				<button onclick="resetSlide($('#fileSlide'));event.preventDefault()">reset</button><br>
				<input type="submit" name="submit" id="submitSlide" value="enviar" disabled="disabled">
			</fieldset>
		</form>
	
	</div>
	
	<form method="post" id="formBio" action="controller/uploadBio.php" enctype="multipart/form-data" class="formModal">
		<fieldset>
			<legend>bio</legend>
			<p class="aviso-imagem">Imagem não é 500x793.</p> <p class="aviso-imagem2">Formato de arquivo não suportado.</p> <br>
			<input type="file" id="fileBio" name="fileBio" accept="image/*" required>
			<button onclick="resetBio($('#fileBio'));event.preventDefault()">reset</button><br>
			<input type="submit" name="submit" id="submitBio" value="enviar" disabled="disabled">
		</fieldset>
	</form>
	
	<div id="formPortfolios">
	
		<p class="aviso-imagem">Imagem não é 800x154.</p> <p class="aviso-imagem2">Formato de arquivo não suportado.</p>
		
		<form method="post" action="controller/uploadPortfolio1.php" enctype="multipart/form-data" class="formModal">
			<fieldset>
				<legend>portfólio 1</legend>
				<input type="file" id="filePortfolio1" name="filePortfolio1" accept="image/*" required>
				<button onclick="resetPortfolio1($('#filePortfolio1'));event.preventDefault()">reset</button><br>
				<input type="submit" name="submit" id="submitPortfolio1" value="enviar" disabled="disabled">
			</fieldset>
		</form>
		
		<form method="post" action="controller/uploadPortfolio2.php" enctype="multipart/form-data" class="formModal">
			<fieldset>
				<legend>portfólio 2</legend>
				<input type="file" id="filePortfolio2" name="filePortfolio2" accept="image/*" required>
				<button onclick="resetPortfolio2($('#filePortfolio2'));event.preventDefault()">reset</button><br>
				<input type="submit" name="submit" id="submitPortfolio2" value="enviar" disabled="disabled">
			</fieldset>
		</form>
		
		<form method="post" action="controller/uploadPortfolio3.php" enctype="multipart/form-data" class="formModal">
			<fieldset>
				<legend>portfólio 3</legend>
				<input type="file" id="filePortfolio3" name="filePortfolio3" accept="image/*" required>
				<button onclick="resetPortfolio3($('#filePortfolio3'));event.preventDefault()">reset</button><br>
				<input type="submit" name="submit" id="submitPortfolio3" value="enviar" disabled="disabled">
			</fieldset>
		</form>
		
		<form method="post" action="controller/uploadPortfolio4.php" enctype="multipart/form-data" class="formModal">
			<fieldset>
				<legend>portfólio 4</legend>
				<input type="file" id="filePortfolio4" name="filePortfolio4" accept="image/*" required>
				<button onclick="resetPortfolio4($('#filePortfolio4'));event.preventDefault()">reset</button><br>
				<input type="submit" name="submit" id="submitPortfolio4" value="enviar" disabled="disabled">
			</fieldset>
		</form>
		
		<form method="post" action="controller/uploadPortfolio5.php" enctype="multipart/form-data" class="formModal">
			<fieldset>
				<legend>portfólio 5</legend>
				<input type="file" id="filePortfolio5" name="filePortfolio5" accept="image/*" required>
				<button onclick="resetPortfolio5($('#filePortfolio5'));event.preventDefault()">reset</button><br>
				<input type="submit" name="submit" id="submitPortfolio5" value="enviar" disabled="disabled">
			</fieldset>
		</form>
		
	</div>
	
</div>

<div id="mascara"></div>
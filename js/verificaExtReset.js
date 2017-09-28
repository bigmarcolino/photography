//calcula MDC
function gcd (a, b) {
	return (b == 0) ? a : gcd (b, a%b);
}


//FUNDO
//----------------------------------------------------------------------------------

//verifica se a imagem do FUNDO é wide
$("#fileFundo").change(function(e) {
	var file, img, w, h, mdc, aspectWidth, aspectHeight;
	
	file = this.files[0];
	
	if (file) {
		img = new Image();	
		img.src = window.URL.createObjectURL(file);
		
		img.onload = function() {
			w = this.width;
			h = this.height;
			
			mdc = gcd (w, h);
			
			aspectWidth = w/mdc;
			aspectHeight = h/mdc;
	
			if( aspectWidth == 16 && aspectHeight == 9 && w >= 1920 && h >= 1080 ) {
				$('#submitFundo').attr('disabled', false);
				$(document).ready( function() { $(".aviso-imagem").css("display","none"); } );
			}
			else{
				$('#submitFundo').attr('disabled', true);
				$(document).ready( function() { $(".aviso-imagem").css("display","inline"); } );
				this.value = '';
			}
		};
	}
});

//verifica as extensões de upload do FUNDO
$('#fileFundo').change(function () {
	var ext = this.value.match(/\.(.+)$/)[1];	
	
	switch (ext) {
		case 'jpg':
		case 'JPG':
		case 'jpeg':
		case 'JPEG':
		case 'png':
		case 'PNG':
			$('#submitFundo').attr('disabled', false);
			break;
		
		default:
			resetFundo($(this));
			$(document).ready( function() { $(".aviso-imagem2").css("display","inline"); } );
	}
});

//reset FUNDO
window.resetFundo = function (e) {
	e.wrap('<form>').closest('form').get(0).reset();
	e.unwrap();
	$('#submitFundo').attr('disabled', true);
	$(document).ready( function() { $(".aviso-imagem").css("display","none"); } );
	$(document).ready( function() { $(".aviso-imagem2").css("display","none"); } );
	this.value = '';
}


//BIO
//------------------------------------------------------------------------------------------------------------

//verifica a resolução da imagem a ser enviada
$("#fileBio").change(function(e) {
	var file, img, w, h;
	
	file = this.files[0];
	
	if (file) {
		img = new Image();	
		img.src = window.URL.createObjectURL(file);
		
		img.onload = function() {
			w = this.width;
			h = this.height;
	
			if( w == 500 && h == 793 ) {
				$('#submitBio').attr('disabled', false);
				$(document).ready( function() { $(".aviso-imagem").css("display","none"); } );
			}
			else{
				$('#submitBio').attr('disabled', true);
				$(document).ready( function() { $(".aviso-imagem").css("display","inline"); } );
				this.value = '';
			}
		};
	}
});
	
//verifica as extensões de upload da BIO		
$('#fileBio').change(function () {
	var ext = this.value.match(/\.(.+)$/)[1];	
	
	switch (ext) {
		case 'jpg':
		case 'JPG':
		case 'jpeg':
		case 'JPEG':
		case 'png':
		case 'PNG':
			$('#submitBio').attr('disabled', false);
			break;
		
		default:
			resetBio($(this));
			$(document).ready( function() { $(".aviso-imagem2").css("display","inline"); } );
	}
});

//reset BIO
window.resetBio = function (e) {
	e.wrap('<form>').closest('form').get(0).reset();
	e.unwrap();
	$('#submitBio').attr('disabled', true);
	$(document).ready( function() { $(".aviso-imagem").css("display","none"); } );
	$(document).ready( function() { $(".aviso-imagem2").css("display","none"); } );
	this.value = '';
}

//PORTFÓLIO
//------------------------------------------------------------------------------------------------------------

//PORTFÓLIO 1 - verifica a resolução da imagem a ser enviada
$("#filePortfolio1").change(function(e) {
	var file, img, w, h;
	
	file = this.files[0];
	
	if (file) {
		img = new Image();	
		img.src = window.URL.createObjectURL(file);
		
		img.onload = function() {
			w = this.width;
			h = this.height;
	
			if( w == 800 && h == 154 ) {
				$('#submitPortfolio1').attr('disabled', false);
				$(document).ready( function() { $(".aviso-imagem").css("display","none"); } );
			}
			else{
				$('#submitPortfolio1').attr('disabled', true);
				$(document).ready( function() { $(".aviso-imagem").css("display","inline"); } );
				this.value = '';
			}
		};
	}
});
	
//verifica as extensões de upload do PORTFÓLIO 1	
$('#filePortfolio1').change(function () {
	var ext = this.value.match(/\.(.+)$/)[1];	
	
	switch (ext) {
		case 'jpg':
		case 'JPG':
		case 'jpeg':
		case 'JPEG':
		case 'png':
		case 'PNG':
			$('#submitPortfolio1').attr('disabled', false);
			break;
		
		default:
			resetPortfolio1($(this));
			$(document).ready( function() { $(".aviso-imagem2").css("display","inline"); } );
	}
});

//reset PORTFÓLIO 1
window.resetPortfolio1 = function (e) {
	e.wrap('<form>').closest('form').get(0).reset();
	e.unwrap();
	$('#submitPortfolio1').attr('disabled', true);
	$(document).ready( function() { $(".aviso-imagem").css("display","none"); } );
	$(document).ready( function() { $(".aviso-imagem2").css("display","none"); } );
	this.value = '';
}

//PORTFÓLIO 2 - verifica a resolução da imagem a ser enviada
$("#filePortfolio2").change(function(e) {
	var file, img, w, h;
	
	file = this.files[0];
	
	if (file) {
		img = new Image();	
		img.src = window.URL.createObjectURL(file);
		
		img.onload = function() {
			w = this.width;
			h = this.height;
	
			if( w == 800 && h == 154 ) {
				$('#submitPortfolio2').attr('disabled', false);
				$(document).ready( function() { $(".aviso-imagem").css("display","none"); } );
			}
			else{
				$('#submitPortfolio2').attr('disabled', true);
				$(document).ready( function() { $(".aviso-imagem").css("display","inline"); } );
				this.value = '';
			}
		};
	}
});
	
//verifica as extensões de upload do PORTFÓLIO 2
$('#filePortfolio2').change(function () {
	var ext = this.value.match(/\.(.+)$/)[1];	
	
	switch (ext) {
		case 'jpg':
		case 'JPG':
		case 'jpeg':
		case 'JPEG':
		case 'png':
		case 'PNG':
			$('#submitPortfolio2').attr('disabled', false);
			break;
		
		default:
			resetPortfolio2($(this));
			$(document).ready( function() { $(".aviso-imagem2").css("display","inline"); } );
	}
});

//reset PORTFÓLIO 2
window.resetPortfolio2 = function (e) {
	e.wrap('<form>').closest('form').get(0).reset();
	e.unwrap();
	$('#submitPortfolio2').attr('disabled', true);
	$(document).ready( function() { $(".aviso-imagem").css("display","none"); } );
	$(document).ready( function() { $(".aviso-imagem2").css("display","none"); } );
	this.value = '';
}

//PORTFÓLIO 3 - verifica a resolução da imagem a ser enviada
$("#filePortfolio3").change(function(e) {
	var file, img, w, h;
	
	file = this.files[0];
	
	if (file) {
		img = new Image();	
		img.src = window.URL.createObjectURL(file);
		
		img.onload = function() {
			w = this.width;
			h = this.height;
	
			if( w == 800 && h == 154 ) {
				$('#submitPortfolio3').attr('disabled', false);
				$(document).ready( function() { $(".aviso-imagem").css("display","none"); } );
			}
			else{
				$('#submitPortfolio3').attr('disabled', true);
				$(document).ready( function() { $(".aviso-imagem").css("display","inline"); } );
				this.value = '';
			}
		};
	}
});
	
//verifica as extensões de upload do PORTFÓLIO 3
$('#filePortfolio3').change(function () {
	var ext = this.value.match(/\.(.+)$/)[1];	
	
	switch (ext) {
		case 'jpg':
		case 'JPG':
		case 'jpeg':
		case 'JPEG':
		case 'png':
		case 'PNG':
			$('#submitPortfolio3').attr('disabled', false);
			break;
		
		default:
			resetPortfolio3($(this));
			$(document).ready( function() { $(".aviso-imagem2").css("display","inline"); } );
	}
});

//reset PORTFÓLIO 3
window.resetPortfolio3 = function (e) {
	e.wrap('<form>').closest('form').get(0).reset();
	e.unwrap();
	$('#submitPortfolio3').attr('disabled', true);
	$(document).ready( function() { $(".aviso-imagem").css("display","none"); } );
	$(document).ready( function() { $(".aviso-imagem2").css("display","none"); } );
	this.value = '';
}

//PORTFÓLIO 4 - verifica a resolução da imagem a ser enviada
$("#filePortfolio4").change(function(e) {
	var file, img, w, h;
	
	file = this.files[0];
	
	if (file) {
		img = new Image();	
		img.src = window.URL.createObjectURL(file);
		
		img.onload = function() {
			w = this.width;
			h = this.height;
	
			if( w == 800 && h == 154 ) {
				$('#submitPortfolio4').attr('disabled', false);
				$(document).ready( function() { $(".aviso-imagem").css("display","none"); } );
			}
			else{
				$('#submitPortfolio4').attr('disabled', true);
				$(document).ready( function() { $(".aviso-imagem").css("display","inline"); } );
				this.value = '';
			}
		};
	}
});
	
//verifica as extensões de upload do PORTFÓLIO 4
$('#filePortfolio4').change(function () {
	var ext = this.value.match(/\.(.+)$/)[1];	
	
	switch (ext) {
		case 'jpg':
		case 'JPG':
		case 'jpeg':
		case 'JPEG':
		case 'png':
		case 'PNG':
			$('#submitPortfolio4').attr('disabled', false);
			break;
		
		default:
			resetPortfolio4($(this));
			$(document).ready( function() { $(".aviso-imagem2").css("display","inline"); } );
	}
});

//reset PORTFÓLIO 4
window.resetPortfolio4 = function (e) {
	e.wrap('<form>').closest('form').get(0).reset();
	e.unwrap();
	$('#submitPortfolio4').attr('disabled', true);
	$(document).ready( function() { $(".aviso-imagem").css("display","none"); } );
	$(document).ready( function() { $(".aviso-imagem2").css("display","none"); } );
	this.value = '';
}

//PORTFÓLIO 5 - verifica a resolução da imagem a ser enviada
$("#filePortfolio5").change(function(e) {
	var file, img, w, h;
	
	file = this.files[0];
	
	if (file) {
		img = new Image();	
		img.src = window.URL.createObjectURL(file);
		
		img.onload = function() {
			w = this.width;
			h = this.height;
	
			if( w == 800 && h == 154 ) {
				$('#submitPortfolio5').attr('disabled', false);
				$(document).ready( function() { $(".aviso-imagem").css("display","none"); } );
			}
			else{
				$('#submitPortfolio5').attr('disabled', true);
				$(document).ready( function() { $(".aviso-imagem").css("display","inline"); } );
				this.value = '';
			}
		};
	}
});
	
//verifica as extensões de upload do PORTFÓLIO 5
$('#filePortfolio5').change(function () {
	var ext = this.value.match(/\.(.+)$/)[1];	
	
	switch (ext) {
		case 'jpg':
		case 'JPG':
		case 'jpeg':
		case 'JPEG':
		case 'png':
		case 'PNG':
			$('#submitPortfolio5').attr('disabled', false);
			break;
		
		default:
			resetPortfolio5($(this));
			$(document).ready( function() { $(".aviso-imagem2").css("display","inline"); } );
	}
});

//reset PORTFÓLIO 5
window.resetPortfolio5 = function (e) {
	e.wrap('<form>').closest('form').get(0).reset();
	e.unwrap();
	$('#submitPortfolio5').attr('disabled', true);
	$(document).ready( function() { $(".aviso-imagem").css("display","none"); } );
	$(document).ready( function() { $(".aviso-imagem2").css("display","none"); } );
	this.value = '';
}


//SLIDE HOME
//----------------------------------------------------------------------------------

$("#fileSlide").change(function(e) {
	var file, img, w, h, mdc, aspectWidth, aspectHeight;
	
	file = this.files[0];
	
	if (file) {
		img = new Image();	
		img.src = window.URL.createObjectURL(file);
		
		img.onload = function() {
			w = this.width;
			h = this.height;
			
			mdc = gcd (w, h);
			
			aspectWidth = w/mdc;
			aspectHeight = h/mdc;
	
			if( aspectWidth == 16 && aspectHeight == 9 && w >= 1920 && h >= 1080 ) {
				$('#submitSlide').attr('disabled', false);
				$(document).ready( function() { $(".aviso-imagem").css("display","none"); } );
			}
			else{
				$('#submitSlide').attr('disabled', true);
				$(document).ready( function() { $(".aviso-imagem").css("display","inline"); } );
				this.value = '';
			}
		};
	}
});
	
//verifica as extensões de upload do SLIDE
$('#fileSlide').change(function () {
	var ext = this.value.match(/\.(.+)$/)[1];	
	
	switch (ext) {
		case 'jpg':
		case 'JPG':
		case 'jpeg':
		case 'JPEG':
		case 'png':
		case 'PNG':
			$('#submitSlide').attr('disabled', false);
			break;
		
		default:
			resetSlide($(this));
			$(document).ready( function() { $(".aviso-imagem2").css("display","inline"); } );
	}
});

//reset SLIDE
window.resetSlide = function (e) {
	e.wrap('<form>').closest('form').get(0).reset();
	e.unwrap();
	$('#submitSlide').attr('disabled', true);
	$(document).ready( function() { $(".aviso-imagem").css("display","none"); } );
	$(document).ready( function() { $(".aviso-imagem2").css("display","none"); } );
	this.value = '';
}
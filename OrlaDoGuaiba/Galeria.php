<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<!--<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/style.css" type="text/css" rel="stylesheet">
		<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script src="js/jquery.bxslider.min.js"></script>
		<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>-->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link href="css/style.css" type="text/css" rel="stylesheet">
		<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

		<script src="js/jquery.bxslider.min.js"></script>
		
		<script src="js/bootstrap.min.js"></script>
		

		
		
		<style type="text/css">
			.bx-wrapper, .bx-viewport, .bx-wrapper img 
			{
				height: 300px; 
				max-width:98.4%; 
				left:0.75%; !important;
			}
		</style>	
		<script type="text/javascript">
			$(document).ready(function () {
				$(".bxslider").bxSlider({
					mode: 'horizontal',
					autoControls: false,
					captions: false,
					controls : false,
					pager: false,
					hideControlOnEnd:false,
					auto: true,
					pause: 3000
				});
			});
		</script>	
		<title>Orla do Guaíba</title>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-header" id="cabecalho">
						<h1>Orla do Guaíba</h1>
							<p>Gasômetro na atualidade (Revitalização)</p>
					</div>
				</div>	
			</div>
		
		
			<div class="row">
				<div class="col-md-12 navbar navbar-inverse">
					<div  id="meumenu">
						<ul class="nav navbar-nav">
						    <li><a href="index.php">Home</a></li>
                                                    <li><a href="Novidades.php">Novidades</a></li>
                                                    <li><a href="Curiosidades.php">Curiosidades</a></li>
                                                    <li><a href="Galeria.php">Galeria</a></li>
                                                    <li><a href="Sugestoes.php">Sugestões</a></li>	
                                                    <li><a href="Localizacao.php">Localização</a></li>
                                                    <li><a href="Contato.php">Contato</a></li>									
						</ul>
					
					</div>
					
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#meumenu">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					
				</div>
			</div>	
			
			<div class ="row" align="center">
				<div class="col-md-12" id="conteudos">
					<h1>Galeria de Fotos</h1>
					<br>
					<div id="imagemConteudo">
						<ul class="bxslider">
							<li> <img src="img/teste.jpg"></li>
							<li> <img src="img/gasometro.jpg"></li>
							<li> <img src="img/orla.jpg"></li>
							<li> <img src="img/teste6.jpg"></li>
							<li> <img src="img/teste9.jpg"></li>
							<li> <img src="img/foto.jpg"></li>

						</ul>
					</div>
					<br>
					<p>Neste espaço você encontra as fotos mais recentes da revitalização e as mais belas paisagens da Orla para apreciação.</p>
					<br>
					
					<br>
				</div>
			<br>
		</div>
	</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/style.css" type="text/css" rel="stylesheet">
		<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
		<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
			
		
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
					<div id="meumenu">
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
					<h1>Formulário de Sugestões/Comentários</h1>
					<div id="imagemConteudo">
					</div>
					<head>
  <title>Formulário de sugestões</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<?php
//include './PDO.php';;


//if ($_POST){
  //  $conn = mysql_connect('localhost','root','');
  //  mysql_select_db("cadastro", $conn);
    
    //$sql = "INSERT INTO cadastro VALUES ";
    //$sql .= "('$email','$idade')";
    
    
    /*if ($conexao->query($sql)===TRUE){
        echo ("Cadastrado com sucesso");
    }else{
        echo("ERRO: ") .$sql. "<br>" .$conexao->error;
    }
     $conexao->close;*/
//}
  //$email = $_POST['email'];
  //$idade = $_POST['idade'];
 // $erro = 0;
?>
  <h2>Formulário:</h2>
  <div class="container">
  <meta charset="utf-8">
  <?php
  if(isset($REQUEST['enviar'])){
      echo ("Sugestão inserida em nossa base de dados");
  }
  ?>
  <form action="formulario.php" method="post">
    <div class="form-group" id="campos">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
	<div class="form-group" id="campos">
	  <label for="idade">Idade:</label>
      <input type="idade" class="form-control" id="idade" placeholder="Enter idade" name="idade">
	  </div>
    <div class="form-group" id="campos">
      <label for="cidade">Cidade:</label>
      <input type="cidade" class="form-control" id="cidade" placeholder="Enter cidade" name="cidade">
    </div>
    <div class="radio">
      <label><input type="radio" name="opcao" value='Feminino'>Feminino </label>
	  <label><input type="radio" name="opcao" value='Masculino'>Masculino </label>
    </div>
	<div>
    <label for="email">Comentários/Sugestões:</label>
	<br>
	<textarea name="message" style="width:500px; height:160px;"></textarea>
        <meta charset="utf-8">
	<br>
	<br>
	</div>
	<br>
    <input type="submit" name="enviar" value = "Enviar" onClick="alert('Sua sugestão/comentário foi inserido com sucesso em nossa base de dados!'); return true"/>
    
  </form>
        </div>
    </body>
        <br>
    </div>				
    </div>					
    </div>
    </body>

</html>

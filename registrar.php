<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Modelo para uma pagina web interativa</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" 
     crossorigin="anonymous">
	<script src="verificarSenha.js"></script>
</head>
<body>
	<div class="container" style="margin-top:30px">
	
		<header class="jumbotron text-center row col-sm-14" style="margin-bottom:2px; background:linear-gradient(white, #0073e6); padding:20px;"> 
			<?php include('topo-registrar.php'); ?>
		</header>
		
		<div class="row" style="padding-left: 0px;">
			<nav class="col-sm-2">
				<ul class="nav nav-pills flex-column">
					<?php include('nav.php'); ?>
				</ul>
			</nav>
			<?php
				if ($_SERVER['REQUEST_METHOD'] == 'POST'){
					require('registrar-processo.php');
				}
			?>
			<div class="col-sm-8">
				<h2 class="h2 text-center">Registrar</h2>
				<form action="registrar.php" method="post" onsubmit="return verificar();" name="form-registro" id="form-registro"	
				>
					<div class="form-group row">
						<label for="primeiro_nome" class="col-sm-4 col-form-label">Primeiro Nome:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="primeiro_nome" name="primeiro_nome" placeholder="Primeiro Nome" maxlength="30" required value="<?php if (isset($_POST['primeiro_nome'])) echo $_POST['primeiro_nome']; ?>" >
						</div>
					</div>
					<div class="form-group row">
						<label for="ultimo_nome" class="col-sm-4 col-form-label">Ultimo Nome:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="ultimo_nome" name="ultimo_nome" placeholder="Ultimo Nome" maxlength="40" required value="<?php if(isset($_POST['ultimo_nome']))	echo $_POST['ultimo_nome']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="email" class="col-sm-4 col-form-label">E-mail:</label>
						<div class="col-sm-8">
							<input type="email" class="form-control" id="email" name="email" placeholder="E-mail" maxlength="60" value="<?php if(isset($_POST['email']))	echo $_POST['email']; ?> ">
						</div>
					</div>
					<div class="form-group row">
						<label for="senha1" class="col-sm-4 col-form-label">Senha:</label>
						<div class="col-sm-8">
							<input type="password" class="form-control" id="senha1" name="senha1" placeholder="Senha" minlength="4" maxlength="10" required value="<?php if(isset($_POST['senha1'])) echo $_POST['senha1'];
							?>">
							<span id="mensagem">Entre 4 e 12 caracteres.</span>
						</div>
					</div>
					<div class="form-group row">
						<label for="senha2" class="col-sm-4 col-form-label">Confirmar Senha</label>
						<div class="col-sm-8">
							<input type="password" class="form-control" id="senha2" name="senha2" placeholder="Confirmar Senha" minlenght="4"  max length="10" required value="<?php 
								if(isset($_POST['senha2'])) 
									echo $_POST['senha2'];
							?>">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-12">
						<input id="enviar" class="btn btn-primary" type="submit" name="enviar" value="Registrar">
						</div>
					</div>
				</form>	
			</div>
			<?php
				if(!isset($errorstring)){
					echo '<aside class="col-sm-2">';
					include('info-col.php');
					echo '</aside>';
					echo '</div>';
					echo '<footer class="jumbotron text-center row col-sm-14" style="padding-bottom:1px; padding-top:8px;">';
					include("rodape.php");
				}else{
					echo '<footer class="jumbotron text-center col-sm-12" style="paddin-bottom:1px; padding-top:8px;">';
					include("rodape.php");
				}
			 ?>
		</div>
	
		</footer>
	</div>
</body>
</html>
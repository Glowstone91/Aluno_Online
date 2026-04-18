<?php
session_start();
//var_dump($_SESSION);

if(isset($_SESSION['acesso'])){ 

	if($_SESSION['acesso']===2){

	}else{
		$_SESSION['erro'] = "Acesso invalido insira suas credenciais para logar.";
		header('location:login.php');
}
}else{
	$_SESSION['erro'] = "Acesso invalido insira suas credenciais para logar.";
header('location: login.php');
}?>


<!DOCTYPE html>
<html lang="pt-br">


     <head>
     
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Dashboard - Aluno Online</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<link rel="icon" type="image/png" href="imagens/favicon.png">


	</head>
	<style>
	
	 body {
        background-image: url("imagens/fundo.jpeg");
        background-repeat: repeat;
        background-size: cover;
    }

	.barralta{
		position:absolute;
		top:0px;
		width: 100%;
		height:10%;
		background-color: #212429;
	}
	
	.logo{position:absolute;
		left:50%;
        transform: translate(-50%);
        top: 200px;
        height: 40%;
		opacity: 40%;}
		
	.sair{
		position:absolute;
		right: 2%;
		top: 23%;
		border-radius: 10px;
		width: 60px;
		height: 40px;
		background-color: #bf2d32;
		color: white;
		border: none;}
		
	.inicio{
		background-color: #212429;
		color: white;
		border: none;
		position: absolute;
		top: 30%;
		left: 5.5%;
	}
	
	.inicioicone{
		position: absolute;
		top: 25%;
		left: 3.5%;
	}
		
		.boletim{
		background-color: #212429;
		color: white;
		border: none;
		position: absolute;
		top: 30%;
		left: 11.5%;
	}
	
	.boletimicone{
		position: absolute;
		top: 25%;
		left: 9.5%;}
	
	.materias{
		background-color: #212429;
		color: white;
		border: none;
		position: absolute;
		top: 30%;
		left: 19.3%;
	}
	
	.materiasicone{
		position: absolute;
		top: 25%;
		left: 17%;}
		
	.rodape{
		position: absolute;
		bottom: 0px;
		background-color: #212429;
		height: 55px;
		width: 100%;
		color: white;
		}
	
	
	</style>
	
	
	
<body>
<div class="barralta">


<div class="barras">


<img src="icones/inicio.png" class="inicioicone" height="30">
<a href="http://localhost/aluno_online/dashboard_a.php"><button type="button" class="inicio">Inicio</button></a>


<img src="icones/boletim.png" class="boletimicone" height="30">

<select class="boletim" onchange="location.href=this.value" >
<option value="boletim" hidden>Boletim</option>
<option value="http://localhost/aluno_online/boletim.php">Listar</option>
</select>



<img src="icones/materias.png" class="materiasicone" height="30">

<select class="materias" onchange="location.href=this.value" >
<option value="materias" hidden>Materias</option>
<option value="http://localhost/aluno_online/materias_a.php">Listar</option>
</select>


<button type="button" data-bs-toggle="modal"
		  data-bs-target="#confirmesairmodal" class="sair">Sair</button>


</div>


</div>

<center><img src="imagens/logo_aluno.png" class="logo"></center>


<center>
<div class="rodape">
<p>
<p>
&copy; 2024, Pedro Lucas
</div></center>


<div class="modal fade" id="confirmesairmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Deseja sair?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     Voltar para área de login.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
     <a href="login.php"  <button type="button" class="btn btn-danger">Sair</button></a>
      </div>
    </div>
  </div>
</div>

<!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
	<!-- jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</body>
</html>

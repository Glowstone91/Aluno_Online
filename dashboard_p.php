<?php
session_start();
//var_dump($_SESSION);

if(isset($_SESSION['acesso'])){ 

	if($_SESSION['acesso']===1){

	}else{
		$_SESSION['erro'] = "Acesso invalido insira suas credenciais para logar.";
		header('location:login_p.php');
}
}else{
	$_SESSION['erro'] = "Acesso invalido insira suas credenciais para logar.";
header('location: login_p.php');
}?>


<!DOCTYPE html>
<html lang="pt-br">


     <head>
     
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Dashboard - Aluno Online</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	  <link rel="icon" type="image/png" href="imagens/favicon2.png">


	</head>
	<style>
	
	 body {
        background-image: url("imagens/fundo2.png");
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
		left: 18.8%;
	}
	
	.materiasicone{
		position: absolute;
		top: 25%;
		left: 16.5%;}
		
	.alunos{
		background-color: #212429;
		color: white;
		border: none;
		position: absolute;
		top: 30%;
		left: 27%;
	}
	
	.alunoicone{
		position: absolute;
		top: 25%;
		left: 25%;}
		
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
<a href="http://localhost/aluno_online/dashboard_p.php"><button type="button" class="inicio">Inicio</button></a>


<img src="icones/boletim.png" class="boletimicone" height="30">

<select class="boletim" onchange="location.href=this.value" >
<option value="boletim" hidden>Notas</option>
<option value="http://localhost/aluno_online/notas.php">Listar</option>
</select>



<img src="icones/materias.png" class="materiasicone" height="30">

<select class="materias" onchange="location.href=this.value" >
<option value="materias" hidden>Materias</option>
<option value="http://localhost/aluno_online/materias.php">Listar</option>
</select>


<img src="icones/aluno.png" class="alunoicone" height="25">
<select class="alunos" onchange="location.href=this.value">
<option value="aluno" hidden>Alunos</option>
<option value="http://localhost/aluno_online/aluno.php">Listar</option>
</select>


<button type="button" data-bs-toggle="modal"
		  data-bs-target="#confirmesairmodal" class="sair">Sair</button>


</div>


</div>


<br>
<br>
<br>
<br>

<?php
include ("conexao.php");

$select_alunos = mysqli_query($conn, "SELECT COUNT(*) as matricula FROM alunos");
$cont_alunos= mysqli_fetch_assoc($select_alunos);
//var_dump($select_alunos);

$select_materias = mysqli_query($conn, "SELECT COUNT(*) as id FROM materias");
$cont_materias= mysqli_fetch_assoc($select_materias);
//var_dump($select_materias);

$select_notas = mysqli_query($conn, "SELECT COUNT(*) as id FROM notas");
$cont_notas= mysqli_fetch_assoc($select_notas);
//var_dump($select_notas);


?> 

<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<!-- Bootstrap Icons -->   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


<!-- cards -->
	
		<div class="container">
			<div class="row">
			
				<div class="col-xl-4 col-md-2 mb-4">
					<div class="card border-left-primary shadow h-100 py-0">
						<div class= "card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
								  <div><h5>Alunos</h5></div>
									<div class="text-primary">
									<b>
										<?php 
											if($cont_alunos['matricula'] <= 9){
											echo '0'.$cont_alunos['matricula'];
											}else{
												echo $cont_alunos['matricula'];
											}
										?>
									</b>
										
									</div>
								</div>
									<div class="col-auto">
										<i class="bi bi-backpack-fill"style='font-size:26px'></i> 
									</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-xl-4 col-md-2 mb-4">
					<div class="card border-left-primary shadow h-100 py-0">
						<div class= "card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
								  <div><h5>Matérias</h5></div>
									<div class="text-primary">
									<b>
										<?php 
											if($cont_materias['id'] <= 9){
											echo '0'.$cont_materias['id'];
											}else{
												echo $cont_alunos['id'];
											}
										?>
									</b>
										
									</div>
								</div>
									<div class="col-auto">
										<i class="bi bi-book"style='font-size:26px'></i> 
									</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-md-2 mb-4">
					<div class="card border-left-primary shadow h-100 py-0">
						<div class= "card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
								  <div><h5>Notas</h5></div>
									<div class="text-primary">
									<b>
										<?php 
											if($cont_notas['id'] <= 9){
											echo '0'.$cont_notas['id'];
											}else{
												echo $cont_notas['id'];
											}
										?>
									</b>
										
									</div>
								</div>
									<div class="col-auto">
									<i class="bi bi-person-vcard-fill"style='font-size:26px'></i> 
									</div>
							</div>
						</div>
					</div>
				</div>

				
				</div>
				</div>
			
				
			
				
		<!-- cards -->





<center><img src="imagens/logo_professor.png" class="logo"></center>


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
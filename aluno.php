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
		
		.cadastro{
			background-color: #4AAe4e;
			border: none;
			border-radius: 10px;
			height: 30px;
			color: white;
			position: relative;
			right: -1200px;
			bottom: 8px;
			transition: 0.2s;
		}
		.cadastro:hover{
			background-color: #18741b;
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

<?php
include("conexao.php");

$select_alunos = mysqli_query($conn, "SELECT * FROM alunos");
?>
	
	
	
	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<!-- Bootstrap Icons -->   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


<p>
<br>
<br>
<br>
<p>
<!--  TABLE ALUNOS -->
<div class="container" style="
    background-color: white;">


<h1>ALUNOS</h1>
<hr>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Matrícula</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>  
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
	<?php
	while ($alunos = mysqli_fetch_assoc($select_alunos)){?>
	<tr>
	<th scope="row"><?php echo $alunos['matricula'];?></th>
	<th scope="row"><?php echo $alunos['nome'];?></th>
	<td><?php echo $alunos['email'];?></td>
	<td>
	<button type="button" class="btn btn-outline-dark" data-bs-toggle="modal"
	data-bs-target="#editaralunoModal" data-bs-matricula="<?php echo $alunos['matricula']?>"
	data-bs-target="#editaralunoModal" data-bs-matricula="<?php echo $alunos['matricula']?>"
	data-bs-email="<?php echo $alunos['email']?>"
	data-bs-nome="<?php echo $alunos['nome']?>"
	><i class="bi bi-pencil-square"></i></button>
	
	
	<button type="button" class="btn btn-outline-dark" data-bs-toggle="modal"
	data-bs-target="#excluiralunoModal" data-bs-matricula="<?php echo $alunos['matricula']?>"
	data-bs-email="<?php echo $alunos['email']?>"><i class="bi bi-trash3-fill"></i></button>
	
	
	</td>
	</tr>
	<?php
	};
	?>
  </tbody>
</table>

<button data-bs-toggle="modal"
		  data-bs-target="#cadastro_aluno" class="cadastro">Cadastrar</button>

	<!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
	<!-- jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	
	
	<!-- Editar aluno modal -->
	<div class="modal fade" id="editaralunoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Aluno</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
	  <form method="POST" action="editar_aluno.php">
		<div class="modal-body">
		 <input type="hidden" id="input_matricula" name="matricula" required>
		<div class="mb-3">
         <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="text" class="form-control" id="input_email"  name="email" placeholder="Email" required>
          </div>
		  <div class="mb-3">
         <label for="recipient-name" class="col-form-label">Nome:</label>
            <input type="text" class="form-control" id="input_nome"  name="nome" placeholder="Nome" required>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Senha:</label>
			 <input type="password" class="form-control" id="input_senha" name="senha" placeholder="Nova senha"> 
          </div>    
      </div>
		<div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
         <button type="Submit" class="btn btn-success">Salvar</button>
       </div>
	  </form>
    </div>
  </div>
</div>

<!-- Editar aluno modal -->


<!-- Excluir aluno modal -->
<div class="modal fade" id="excluiralunoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-white bg-danger">
        <h5 class="modal-title" id="exampleModalLabel">Excluir Aluno</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
	  <form method="POST" action="excluir_aluno.php">
		<div class="modal-body">
		 <input type="hidden" id="input_matricula_excluir" name="matricula" required>
		 Deseja excluir este aluno?	
		</div>
		<div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
         <button type="Submit" class="btn btn-danger">Excluir</button>
       </div>
	  </form>
    </div>
  </div>
</div>


<div class="modal fade" id="cadastro_aluno" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro de Aluno</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
	  <form method="POST" action="cadastro_aluno.php">
		<div class="modal-body">
          <div class="col-12">
            <label for="inputNome" class="col-form-label">Nome:</label>
            <input type="text" class="form-control" id="inputNome"  name="nome" placeholder="Exp: João da Silva" required>
          </div>	  
          <div class="col-12">
            <label for="inputemail" class="col-form-label">Email:</label>
			 <input type="text" class="form-control" id="inputemail" name="email" placeholder="Exp: joãosilva@gmail.com" required> 
          </div>  
		  <div class="col-12">
            <label for="inputsenha" class="col-form-label">Senha:</label>
			 <input type="password" class="form-control" id="inputsenha" name="senha" placeholder="Senha" required> 
          </div>    
		</div> 
		<div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
         <button type="Submit" class="btn btn-success">Salvar</button>
       </div>
	  </form>
    </div>
  </div>
</div>

<!-- Excluir aluno modal -->
	
<script type="text/javascript">
var editaralunoModal = document.getElementById('editaralunoModal')
console.log("MODAL: ", editaralunoModal)
editaralunoModal.addEventListener('show.bs.modal' , function (event) {
	console.log("EVENTO: ", event);

  var button = event.relatedTarget
	console.log("BUTTON" , button);

  var matricula = button.getAttribute('data-bs-matricula');
	console.log("MATRICULA: ", matricula);
	document.getElementById("input_matricula").value = matricula;

  var email = button.getAttribute('data-bs-email');
	console.log("EMAIL: ", email);
	document.getElementById("input_email").value = email;
	
  var nome = button.getAttribute('data-bs-nome');
	console.log("NOME: ", nome);
	document.getElementById("input_nome").value = nome;

})
</script>

<script type="text/javascript">
var excluiralunoModal = document.getElementById('excluiralunoModal')
console.log("MODAL: ", excluiralunoModal)
excluiralunoModal.addEventListener('show.bs.modal' , function (event) {
	console.log("EVENTO: ", event);

  var button = event.relatedTarget
	console.log("BUTTON" , button);

  var matricula = button.getAttribute('data-bs-matricula');
	console.log("MATRICULA: ", matricula);
	document.getElementById("input_matricula_excluir").value = matricula;

  var email = button.getAttribute('data-bs-email');
	console.log("EMAIL: ", email);
	
	var modalTitle = excluiralunoModal.querySelector('.modal-title')
	modalTitle.textcontent = 'Excluir' + email

})
</script>

<!-- sucesso modal -->
<div class="modal fade" id="sucessoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
	<div class="modal-header text-white bg-success">
        <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-check-lg"></i> Sucesso!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
    </div>
    <div class="modal-body">
        Operação realizada com sucesso!
    </div>
   </div>
</div>
</div>
<!-- Sucesso modal-->

<!-- Erro modal-->
<div class="modal fade" id="erroModal" tabindex="-1" role="dialog" aria-labelledby="exempleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header text-white bg-danger">
			<h5 class="modal-title" id="exempleModalLabel"><i class="bi bi-x-lg mr-2"></i> Erro!</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
			</div>
			<div class="modal-body">
			  Erro na operação!
			</div>
		</div>
	</div>-
</div>
<!-- Erro modal-->

<?php
if(isset($_GET['update_aluno'])){
	//var_dump($_GET);
	
	if($_GET['update_aluno'] === 'true') {?>
	<script>
	$(document).ready(function() {
		$('#sucessoModal').modal('show');
	
	})
	</script>
	<?php
	}else{?>
		<script>
			$(document).ready(function() {
				$('#erroModal').modal('show');
			})
		</script>
	<?php
	}
	
}else{
		
}
?>


<?php
if(isset($_GET['delete_aluno'])){
	//var_dump($_GET);
	
	if($_GET['delete_aluno'] === 'true') {?>
	<script>
	$(document).ready(function() {
		$('#sucessoModal').modal('show');
	})
	</script>
	<?php
	}else{?>
		<script>
			$(document).ready(function() {
				$('#erroModal').modal('show');
			})
		</script>
	<?php
	}
	
}else{
		
}
?>
</div>

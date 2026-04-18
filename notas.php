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

$select_notas = mysqli_query($conn, "SELECT * FROM notas");
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


<h1>NOTAS</h1>
<hr>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID da nota</th>
      <th scope="col">Aluno</th>
      <th scope="col">Matéria</th>  
      <th scope="col">Nota</th>  
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
	<?php
	while ($notas = mysqli_fetch_assoc($select_notas)){?>
	<tr>
	<th scope="row"><?php echo $notas['id'];?></th>
	<?php
	$matricula_aluno = $notas['aluno'];
	$select_alunos = mysqli_query($conn,"SELECT * FROM ALUNOS WHERE matricula='$matricula_aluno'");
	$array_a = mysqli_fetch_assoc($select_alunos);
	?>
	<th scope="row"><?php echo $array_a['nome'];?></th>
	
	<?php
	$id_materia = $notas['materia'];
	$select_materia = mysqli_query($conn,"SELECT * FROM materias WHERE id='$id_materia'");
	$array_m = mysqli_fetch_assoc($select_materia);
	?>
	<th scope="row"><?php echo $array_m['materias'];?></th>
	<th scope="row"><?php echo $notas['nota'];?></th>

	<td>
	<button type="button" class="btn btn-outline-dark" data-bs-toggle="modal"
	data-bs-target="#editarnotaModal" 
	data-bs-id="<?php echo $notas['id']?>"
	data-bs-aluno="<?php echo $notas['aluno']?>"
	data-bs-materia="<?php echo $notas['materia']?>"
	data-bs-nota="<?php echo $notas['nota']?>"
	><i class="bi bi-pencil-square"></i></button>
	
	
	<button type="button" class="btn btn-outline-dark" data-bs-toggle="modal"
	data-bs-target="#excluirnotaModal" data-bs-id="<?php echo $notas['id']?>"
	data-bs-aluno="<?php echo $notas['aluno']?>"><i class="bi bi-trash3-fill"></i></button>
	
	
	</td>
	</tr>
	<?php
	};
	?>
  </tbody>
</table>

<button data-bs-toggle="modal"
		  data-bs-target="#cadastro_nota" class="cadastro">Cadastrar</button>

	<!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
	<!-- jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	
	
	<!-- Editar nota modal -->
	<div class="modal fade" id="editarnotaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar nota</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
	  <form method="POST" action="editar_nota.php">
		<div class="modal-body">
		 <input type="hidden" id="input_id" name="id" required>
		 
		 <div class="col-12">
			<label for= "selectaluno" class="forma-label">Aluno:</label>
           <select class="form-select" id="inputaluno" name="aluno" required>
			<option selected></option>
			<?php
			$select_alunos= mysqli_query($conn, "SELECT * FROM alunos");
			while ($alunos = mysqli_fetch_assoc($select_alunos)){?>
			<option value="<?php echo $alunos['matricula']?>"><?php echo $alunos['nome']?></option>
			<?php
			}
			?>			
			</select>
			</div> 
			
			<div class="col-12">
			<label for= "selectmateria" class="forma-label">Matéria:</label>
           <select class="form-select" id="inputmateria" name="materia" required>
			<option selected></option>
			<?php
			$select_materias= mysqli_query($conn, "SELECT * FROM materias");
			while ($materias = mysqli_fetch_assoc($select_materias)){?>
			<option value="<?php echo $materias['id']?>"><?php echo $materias['materias']?></option>
			<?php
			}
			?>
			</select>
			</div>	  

          <div class="mb-3">
            <label for="message-text" class="col-form-label">Nota:</label>
			 <input type="number" class="form-control" id="inputnota" name="nota" placeholder="Nota" step="0.1"> 
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

<!-- Editar nota modal -->


<!-- Excluir nota modal -->
<div class="modal fade" id="excluirnotaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-white bg-danger">
        <h5 class="modal-title" id="exampleModalLabel">Excluir linha de nota do aluno</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
	  <form method="POST" action="excluir_nota.php">
		<div class="modal-body">
		 <input type="hidden" id="input_id_excluir" name="id" required>
		 Deseja excluir esta linha de nota?	
		</div>
		<div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
         <button type="Submit" class="btn btn-danger">Excluir</button>
       </div>
	  </form>
    </div>
  </div>
</div>
<!-- Excluir nota modal -->

<!-- cadastro nota modal -->
<div class="modal fade" id="cadastro_nota" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro de Aluno</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
	  <form method="POST" action="cadastro_nota.php">
		<div class="modal-body">

          <div class="col-12">
			<label for= "selectaluno" class="forma-label">Aluno:</label>
           <select class="form-select" id="inputaluno" name="aluno" required>
			<option selected></option>
			<?php
			$select_alunos= mysqli_query($conn, "SELECT * FROM alunos");
			while ($alunos = mysqli_fetch_assoc($select_alunos)){?>
			<option value="<?php echo $alunos['matricula']?>"><?php echo $alunos['nome']?></option>
			<?php
			}
			?>
			</select>
			</div>	  

			<div class="col-12">
			<label for= "selectmateria" class="forma-label">Matéria:</label>
           <select class="form-select" id="inputmateria" name="materia" required>
			<option selected></option>
			<?php
			$select_materias= mysqli_query($conn, "SELECT * FROM materias");
			while ($materias = mysqli_fetch_assoc($select_materias)){?>
			<option value="<?php echo $materias['id']?>"><?php echo $materias['materias']?></option>
			<?php
			}
			?>
			</select>
			</div>	  

		  <div class="col-12">
            <label for="inputsenha" class="col-form-label">Nota:</label>
			 <input type="number" class="form-control" id="inputnota" name="nota" placeholder="Nota" step=0.1 required> 
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
<!-- cadastro nota modal -->
	
<script type="text/javascript">
var editarnotaModal = document.getElementById('editarnotaModal')
console.log("MODAL: ", editarnotaModal)
editarnotaModal.addEventListener('show.bs.modal' , function (event) {
	console.log("EVENTO: ", event);

  var button = event.relatedTarget
	console.log("BUTTON" , button);

  var id = button.getAttribute('data-bs-id');
	console.log("ID: ", id);
	document.getElementById("input_id").value = id;

  var aluno = button.getAttribute('data-bs-aluno');
	console.log("ALUNO: ", aluno);
	document.getElementById("inputaluno").value = aluno;
	
  var materia = button.getAttribute('data-bs-materia');
	console.log("MATERIA: ", materia);
	document.getElementById("inputmateria").value = materia;

  var nota = button.getAttribute('data-bs-nota');
   console.log("NOTA: ", nota);
   document.getElementById("inputnota").value = nota;

})
</script>

<script type="text/javascript">
var excluirnotaModal = document.getElementById('excluirnotaModal')
console.log("MODAL: ", excluirnotaModal)
excluirnotaModal.addEventListener('show.bs.modal' , function (event) {
	console.log("EVENTO: ", event);

  var button = event.relatedTarget
	console.log("BUTTON" , button);

  var id = button.getAttribute('data-bs-id');
	console.log("ID: ", id);
	document.getElementById("input_id_excluir").value = id;

  var aluno = button.getAttribute('data-bs-aluno');
	console.log("ALUNO: ", aluno);
	
	var modalTitle = excluirnotaModal.querySelector('.modal-title')
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
if(isset($_GET['update_nota'])){
	//var_dump($_GET);
	
	if($_GET['update_nota'] === 'true') {?>
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
if(isset($_GET['delete_nota'])){
	//var_dump($_GET);
	
	if($_GET['delete_nota'] === 'true') {?>
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

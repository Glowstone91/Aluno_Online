<?php
include('dashboard_a.php');

include("conexao.php");

$select_notas = mysqli_query($conn,"SELECT * FROM NOTAS WHERE aluno='$_SESSION[matricula]'");

?>

<br>
 <br>
  <br>
<!--  TABLE BOLETIM -->
<div class="container" style="
    background-color: white;">


<h1>BOLETIM</h1>
<hr>

<table class="table table-striped">
  <thead>
    <tr>
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
	
	<th scope="row">
	<?php 
		$select_aluno = mysqli_query($conn,"SELECT * FROM ALUNOS WHERE matricula = '$notas[aluno]'");
		$aluno = mysqli_fetch_assoc($select_aluno);
		echo $aluno['nome'];
	?>	
	</th>
	
	<th scope="row">
	<?php 
		$select_materia = mysqli_query($conn,"SELECT * FROM MATERIAS WHERE id = '$notas[materia]'");
		$materia = mysqli_fetch_assoc($select_materia);
		echo $materia['materias'];
	?>	
	</th>
	
	<th scope="row"><?php echo $notas['nota'];?></th>
	<td>
<?php } ?>
	
    
<?php
include('dashboard_a.php');
include('conexao.php');
$select_materias = mysqli_query($conn, "SELECT * FROM materias");
?>

<br>
  <br>
  <br>
<!--  TABLE MATERIAS -->
<div class="container" style="
    background-color: white;">


<h1>MATÉRIAS</h1>
<hr>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Matéria</th>  
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
	<?php
	while ($materias = mysqli_fetch_assoc($select_materias)){?>
	<tr>
	<th scope="row"><?php echo $materias['id'];?></th>
	<th scope="row"><?php echo $materias['materias'];?></th>
	<td>
<?php } ?>
	
    
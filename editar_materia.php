<?php
$id = $_POST['id'];
$materia = $_POST['materia'];


include("conexao.php");

	$update_materia = mysqli_query($conn, 
	"UPDATE materias SET materias='$materia' WHERE id='$id'");

if(mysqli_affected_rows($conn)){
	//echo mysqli_affected_rows($conn);
	header('Location: materias.php?update_materia=true');
}else{
	header('Location: materias.php?update_materia=false');
}
?>
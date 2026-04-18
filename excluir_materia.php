<?php

$id = $_POST['id'];

include("conexao.php");
$delete_materia = mysqli_query($conn, "DELETE FROM materias WHERE id = '$id'");

if(mysqli_affected_rows($conn)){
	//echo mysqli_affected_rows($conn);
	header('Location: materias.php?delete_materia=true');
}else{
	header('Location: materias.php?delete_materia=false');
}
?>
<?php
$materia = $_POST['materia'];

include("conexao.php");

$insert_materia = mysqli_query($conn, "INSERT INTO materias (materias) VALUES ('$materia');");

if(mysqli_insert_id($conn)){
	header('Location: materias.php?update_materias=true');
}else{
	header('Location: materias.php?update_materias=false');
}
?>
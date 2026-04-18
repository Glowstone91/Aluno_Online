<?php
$id = $_POST['id'];
$aluno = $_POST['aluno'];
$materia = $_POST['materia'];
$nota = $_POST['nota'];

include("conexao.php");
	
	$update_nota = mysqli_query($conn, 
    "UPDATE notas SET aluno='$aluno' , materia='$materia' , nota='$nota' WHERE id='$id'");
	

if(mysqli_affected_rows($conn)){
	//echo mysqli_affected_rows($conn);
	header('Location: notas.php?update_nota=true');
}else{
	header('Location: notas.php?update_nota=false');
}
?>
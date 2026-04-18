<?php
$aluno = $_POST['aluno'];
$materia = $_POST['materia'];
$nota = $_POST['nota'];

include("conexao.php");

$insert_nota = mysqli_query($conn, "INSERT INTO notas (aluno,materia,nota) VALUES ('$aluno','$materia','$nota');");

if(mysqli_insert_id($conn)){
	header('Location: notas.php?update_nota=true');
}else{
	header('Location: notas.php?update_nota=false');
}
?>
<?php

$matricula = $_POST['matricula'];



include("conexao.php");
$delete_aluno = mysqli_query($conn, "DELETE FROM alunos WHERE matricula = '$matricula'");

if(mysqli_affected_rows($conn)){
	//echo mysqli_affected_rows($conn);
	header('Location: aluno.php?delete_aluno=true');
}else{
	header('Location: aluno.php?delete_aluno=false');
}
?>
<?php
$email = $_POST['email'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];

include("conexao.php");

$insert_aluno = mysqli_query($conn, "INSERT INTO Alunos (email,nome,senha) VALUES ('$email','$nome','$senha');");

if(mysqli_insert_id($conn)){
	header('Location: aluno.php?update_aluno=true');
}else{
	header('Location: aluno.php?update_aluno=false');
}
?>
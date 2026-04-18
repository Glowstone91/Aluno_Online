<?php
$matricula = $_POST['matricula'];
$email = $_POST['email'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];

include("conexao.php");

if($senha == ""){
	
	$update_aluno = mysqli_query($conn, 
	"UPDATE alunos SET email='$email', nome='$nome' WHERE matricula='$matricula'");
	
}else{
	
	$update_aluno = mysqli_query($conn, 
	"UPDATE alunos SET email='$email', nome='$nome' , senha='$senha' WHERE matricula='$matricula'");
	
}

if(mysqli_affected_rows($conn)){
	//echo mysqli_affected_rows($conn);
	header('Location: aluno.php?update_aluno=true');
}else{
	header('Location: aluno.php?update_aluno=false');
}
?>
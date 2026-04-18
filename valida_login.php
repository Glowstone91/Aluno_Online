<?php
session_start();

var_dump($_POST);

$email = $_POST['email'];
$senha = $_POST['senha'];
echo '<p>';
echo $email;
echo '<br>'; 
echo $senha;
echo '<p>';

include("conexao.php");
echo '<p>';


$select_alunos = mysqli_query($conn,"SELECT * FROM ALUNOS WHERE email='$email' AND senha='$senha'");
print_r($select_alunos);
$alunos = mysqli_fetch_assoc($select_alunos);
echo '<p>';

var_dump($alunos);
echo '<p>';

$email_bd = $alunos['email'];
$senha_bd = $alunos['senha'];
$matricula_bd = $alunos['matricula'];
echo $email_bd;
echo '<br>';
echo $senha_bd;
echo '<p>';

if(($email==$email_bd) && ($senha==$senha_bd)){
$_SESSION['acesso'] = 2;
$_SESSION['matricula'] = $matricula_bd;
header('location: dashboard_A.php');
}
else
{
header('location:login.php?login=false&teste=0');
}
?>


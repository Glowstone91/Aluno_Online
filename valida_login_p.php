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


$select_professores = mysqli_query($conn,"SELECT * FROM PROFESSORES WHERE email='$email' AND senha='$senha'");
print_r($select_professores);
$professores = mysqli_fetch_assoc($select_professores);
echo '<p>';

var_dump($professores);
echo '<p>';

$email_bd = $professores['email'];
$senha_bd = $professores['senha'];
echo $email_bd;
echo '<br>';
echo $senha_bd;
echo '<p>';

if(($email==$email_bd) && ($senha==$senha_bd)){
$_SESSION['acesso'] = 1;
header('location: dashboard_p.php');
}
else
{
header('location:login_p.php?login=false&teste=0');
}
?>


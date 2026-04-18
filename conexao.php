<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "aluno_online";

$conn = mysqli_connect($servername,$username,$password,$database);

if($conn){
	//echo "Conexão realizada com sucesso!";
}else{
	die("Erro na conexão!".mysqli_connect_error());
}

//BNQtMrVNbRgeX!Af senha bd

?>

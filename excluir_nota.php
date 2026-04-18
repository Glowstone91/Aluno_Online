<?php

$id = $_POST['id'];



include("conexao.php");
$delete_nota = mysqli_query($conn, "DELETE FROM notas WHERE id = '$id'");

if(mysqli_affected_rows($conn)){
	//echo mysqli_affected_rows($conn);
	header('Location: notas.php?delete_nota=true');
}else{
	header('Location: notas.php?delete_nota=false');
}
?>
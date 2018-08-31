<?php	
	$id_funcionario = $_POST ['id_funcionario'];
	
	$connect= mysqli_connect('127.0.0.1' , 'root', '', 'cadastroleandro');
	$query = "DELETE FROM funcionario WHERE id_funcionario ='$id_funcionario' ;";
	
	$search = mysqli_query($connect, $query);
	header ("Location: lista.php");
		exit();
	
?>
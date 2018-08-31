<?php	
	
	$connect= mysqli_connect('127.0.0.1' , 'root', '', 'cadastroleandro');
	$query = "SELECT *FROM funcionario";
	
	$search = mysqli_query($connect, $query);
	
?>
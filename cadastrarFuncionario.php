<?php

$nome_funcionario    = $_POST['nome_funcionario'];
$cargo_funcionario   = $_POST['cargo_funcionario'];
$salario_funcionario = $_POST['salario_funcionario'];

$conexao = mysqli_connect('localhost', 'root', '', 'cadastroleandro');

$query = "INSERT into funcionario(nome, cargo, salario) values ('$nome_funcionario', '$cargo_funcionario' , '$salario_funcionario')";

mysqli_query($conexao, $query);

header("Location: home.php");
exit();



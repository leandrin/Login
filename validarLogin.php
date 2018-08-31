<?php

if(!isset($_POST['email'])){
	header("Location: index.php");
	exit();
}

$email = $_POST['email'];
$senha = $_POST['senha'];
$senha = md5($senha);

echo $email;
echo $senha;

$conexao = mysqli_connect('localhost','root','','cadastroleandro');

$query = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha'";

$buscar = mysqli_query($conexao, $query);

$dados = mysqli_fetch_assoc($buscar);

if ($dados != null) {
	echo "Logado com sucesso!";
	
	session_start();
	$_SESSION['nome'] = $dados['nome'];
	$_SESSION['email'] = $dados['email'];
	
	header("Location: home.php");
	exit();

}else{
	
	echo "Senha invalida";
	header("Location: index.php?login=0");
	exit();
}
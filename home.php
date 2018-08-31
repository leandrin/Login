<?php
session_start();
if(!isset($_SESSION['email'])){
	header("Location: index.php");
	exit();
}
$nome = $_SESSION['nome'];
?>
<html>
	<head>
		<title>Sistema Login</title>
	</head>
	
	<body>
		<div>
			<h1>Bem vindo, <?=$nome?></h1>
			
			<a href="cadastro.php"><button>Cadastrar</button></a>
			<a href="lista.php"><button>Listagem</button></a>
			
			<form method="post" action="logout.php">
				<input type="hidden" value="<?=$nome?>">
				<button type="submit">Logout</button>
			</form>
			
		</div>
	</body>

</html>
<?php
session_start();
if(isset($_SESSION['email'])){
	
	header("Location: home.php");
	exit();
}

?>

<html>
	<head>
		<title> Sistema de Login</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	
	<body>
		<div class="login-page">
			<div class="form">
				
				<form method="POST" action="validarLogin.php">
					<label>E-mail:</label>
				<input type="email" name="email">
				
				<label>Senha:</label>
				<input type="password" name="senha">
				<button type="submit">Login!</button>
					
			</div>
		</div>
		
		
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
		<script src="js/scrip,t.js"></script>
		
	</body>
</html>
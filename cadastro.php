<?php
session_start();

if(!isset($_SESSION['email'])){

    header("Location: index.php");
    exit();

}

?>

<html>
    <head>
        <title>Cadastro</title>
    </head>

    <body>

        <h1>Tela de cadastro de funcionário</h1>
        <p>Preencha as informações abaixo e clique em OK para cadastrar um funcionário</p>

        <form method="POST" action="cadastrarFuncionario.php">
            <label>Nome:</label>
            <input type="text" name="nome_funcionario">

            <label>Cargo:</label>
            <input type="text" name="cargo_funcionario">

            <label>Salário:</label>
            <input type="number" name="salario_funcionario">

            <button type="submit">Cadastrar!</button>
				
				
        </form>


    </body>
</html>
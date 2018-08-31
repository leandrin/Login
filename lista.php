<?php
	include 'selecionarTrabalhador.php';
	
?>

 <html>
	<head>
	</head>
		<body>
 <div class="row">
        <div class="col-12">

            <table class="table table-striped table-light">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Salario</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Del</th>
                </tr>
                </thead>
                <tbody>
                <?php while($dados = mysqli_fetch_assoc($search)): ?>

                    <tr>
                        <th scope="row">   <?=$dados['id_funcionario']?> </th>
                        <td>    <?=$dados['nome']   ?>    </td>
                        <td>    <?=$dados['cargo'] ?> </td>
                        <td>    <?=$dados['salario']     ?> </td>
                        <td>

                            <form class="edit" >
                                <input type="hidden" name="id_funcionario" value="<?=$dados['id_funcionario']?>">
                                <input type="hidden" name="nome" value="<?=$dados['nome']?>">
                                <input type="hidden" name="cargo" value="<?=$dados['cargo']?>">
								<input type="hidden" name="salario" value="<?=$dados['salario']?>">
                                <button class="btn btn-primary">
                                    <i class="fas fa-pencil-alt"></i>
                                </button>
                            </form>

                        </td>
                        <td>
                            <form class="delete" method="POST" action="deleteFuncionario.php">
                                <input type="hidden" name="id_funcionario" value="<?=$dados['id_funcionario']?>">
                                <button class="btn btn-danger"> Del   </button>
                            </form>
                        </td>
                    </tr>

                <?php endwhile ?>
                </tbody>
            </table>


        </div>

    </div>
		</body>
		
</html>
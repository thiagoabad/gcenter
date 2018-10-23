<?php
require_once("cabecalho.php");
?>

<table class="table table-striped table-bordered">
	<?php
	$clienteDao = new ClienteDao($conexao);
	$clientes = $clienteDao->listaClientes();
	foreach($clientes as $cliente) :
	?>
		<tr>
			<td><?= $cliente->getId() ?></td>
			<td><?= $cliente->getNome() ?></td>
			<td><?= $cliente->getLogradouro() ?></td>
			<td><?= $cliente->getBairro() ?></td>
			<td><?= $cliente->getCidade() ?></td>
			<td><?= $cliente->getUf() ?></td>
			<td><?= $cliente->getRamal1() ?></td>
			<td><?= $cliente->getTel1() ?></td>
			<td><?= $cliente->getRamal2() ?></td>
			<td><?= $cliente->getTel2() ?></td>
			<td><?= $cliente->getCel1() ?></td>
			<td><?= $cliente->getCel2() ?></td>
			<td><?= $cliente->getIdVendedor() ?></td>
			<td>
				<form action="cliente-remove.php" method="post">
					<input type="hidden" name="id" value="<?=$cliente->getId()?>">
					<button class="btn btn-danger">remover</button>
				</form>
			</td>
		</tr>
	<?php
	endforeach
	?>
	<form action="cliente-formulario.php" method="post">	
	<tr><td><button class="btn btn-danger">Novo</button></td></tr>
</table>

<?php include("rodape.php"); ?>
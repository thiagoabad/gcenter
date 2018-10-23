<?php
require_once("cabecalho.php");
require_once("logica-usuario.php");

verificaUsuario();

?>

<h1>Orçamentos</h1>
<form action="buscar-orcamentos.php" method="post">
	<table class="table">
		<tr>
			<td>
				Cliente:
			</td>
			<td>
				<input class="form-control" type="text" name="">
			</td>
			<td>
				<input class="form-control" type="submit" name="buscar" value="Buscar">
			</td>
</form>
<form action="buscar-todos-orcamentos.php" method="post">
			<td>
				<input class="form-control" type="submit" name="todos" value="Todos">
			</td>
		</tr>
	</table>
</form>
<table class="table">
	<?php
		$orcamentoDao = new OrcamentoDao($conexao);
		$orcamentos = $orcamentoDao->listaOrcamento();
		foreach($orcamentos as $orcamento) :
	?>
		<tr>
			<td><?= $orcamento->getCliente() ?></td>
			<td><?= $orcamento->getTelefone() ?></td>
			<td><?= $orcamento->getEmail() ?></td>
			<td><?= $orcamento->getEmpresa() ?></td>
			<td><?= $orcamento->getEvento() ?></td>
			<td><?= $orcamento->getData() ?></td>
		</tr>
		<tr>
			<td><?= $orcamento->getLocal() ?></td>
			<td><?= $orcamento->getNumeroConvidados() ?></td>
			<td><?= $orcamento->getPorcAssentos() ?></td>
			<td><?= $orcamento->getIndicacao() ?></td>
			<td><?= $orcamento->getCerimonial() ?></td>
			<td><?= $orcamento->getBUffet() ?></td>
			<td>
				<form action="orcamento-remove.php" method="post">
					<input type="hidden" name="id" value="<?=$orcamento->getId()?>">
					<button class="btn btn-danger">remover</button>
				</form>
			</td>
		</tr>
	<?php
	endforeach
	?>
	<form action="orcamento-formulario.php" method="post">	
	<tr><td><button class="btn btn-danger">Novo</button></td></tr>
</table>

<?php include("rodape.php"); ?>
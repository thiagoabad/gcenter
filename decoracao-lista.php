<?php
require_once("cabecalho.php");
?>

<table class="table table-striped table-bordered">
	<?php
	$decoracaoDao = new DecoracaoDao($conexao);
	$decoracoes = $decoracaoDao->listaDecoracoes();
	foreach($decoracoes as $decoracao) :
	?>
		<tr>
			<td><?= $decoracao->getId() ?></td>
			<td><?= $decoracao->getNomItemDecor() ?></td>
			<td><?= $decoracao->getValor() ?></td>
			<td><?= $decoracao->getQuant() ?></td>
			<td><?= $decoracao->getTipo() ?></td>
			<td>
				<form action="decoracao-remove.php" method="post">
					<input type="hidden" name="id" value="<?=$decoracao->getId()?>">
					<button class="btn btn-danger">remover</button>
				</form>
			</td>
		</tr>
	<?php
	endforeach
	?>
	<form action="decoracao-formulario.php" method="post">	
	<tr><td><button class="btn btn-danger">Novo</button></td></tr>
</table>

<?php include("rodape.php"); ?>
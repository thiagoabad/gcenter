<?php
require_once("cabecalho.php");
?>

<table class="table table-striped table-bordered">
	<?php
	$ambientacaoDao = new AmbientacaoDao($conexao);
	$ambientacoes = $ambientacaoDao->listaAmbientacoes();
	foreach($ambientacoes as $ambientacao) :
	?>
		<tr>
			<td><?= $ambientacao->getId() ?></td>
			<td><?= $ambientacao->getDescricao() ?></td>
			<td><?= $ambientacao->getValor() ?></td>
			<td>
				<form action="ambientacao-remove.php" method="post">
					<input type="hidden" name="id" value="<?=$ambientacao->getId()?>">
					<button class="btn btn-danger">remover</button>
				</form>
			</td>
		</tr>
	<?php
	endforeach
	?>
	<form action="ambientacao-formulario.php" method="post">	
	<tr><td><button class="btn btn-danger">Novo</button></td></tr>
</table>

<?php include("rodape.php"); ?>
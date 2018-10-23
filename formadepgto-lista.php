<?php
require_once("cabecalho.php");
?>

<table class="table table-striped table-bordered">
	<?php
	$formadepgtoDao = new FormadepgtoDao($conexao);
	$formadepgtos = $formadepgtoDao->listaFormadepgto();
	foreach($formadepgtos as $formadepgto) :
	?>
		<tr>
			<td><?= $formadepgto->getId() ?></td>
			<td><?= $formadepgto->getNomForma() ?></td>
			<td>
				<form action="formadepgto-remove.php" method="post">
					<input type="hidden" name="id" value="<?=$formadepgto->getId()?>">
					<button class="btn btn-danger">remover</button>
				</form>
			</td>
		</tr>
	<?php
	endforeach
	?>
	<form action="formadepgto-formulario.php" method="post">	
	<tr><td><button class="btn btn-danger">Novo</button></td></tr>
</table>

<?php include("rodape.php"); ?>
<?php
require_once("cabecalho.php");
?>

<table class="table table-striped table-bordered">
	<?php
	$afinidadeDao = new AfinidadeDao($conexao);
	$afinidades = $afinidadeDao->listaAfinidades();
	foreach($afinidades as $afinidade) :
	?>
		<tr>
			<td><?= $afinidade->getId() ?></td>
			<td><?= $afinidade->getNome() ?></td>
			<td>
				<form action="afinidade-remove.php" method="post">
					<input type="hidden" name="id" value="<?=$afinidade->getId()?>">
					<button class="btn btn-danger">remover</button>
				</form>
			</td>
		</tr>
	<?php
	endforeach
	?>
	<form action="afinidade-formulario.php" method="post">	
	<tr><td><button class="btn btn-danger">Novo</button></td></tr>
</table>

<?php include("rodape.php"); ?>
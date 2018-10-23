<?php
require_once("cabecalho.php");
?>

<table class="table table-striped table-bordered">
	<?php
	$usuarioDao = new UsuarioDao($conexao);
	$usuarios = $usuarioDao->listaUsuarios();
	foreach($usuarios as $usuario) :
	?>
		<tr>
			<td><?= $usuario->getId() ?></td>
			<td><?= $usuario->getNome() ?></td>
			<td><?= $usuario->getLogin() ?></td>
			<td>
				<form action="remove-usuario.php" method="post">
					<input type="hidden" name="id" value="<?=$usuario->getId()?>">
					<button class="btn btn-danger">remover</button>
				</form>
			</td>
		</tr>
	<?php
	endforeach
	?>	
</table>

<?php include("rodape.php"); ?>
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


<?php include("rodape.php"); ?>
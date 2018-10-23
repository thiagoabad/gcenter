<?php
require_once("cabecalho.php");
require_once("logica-usuario.php");

verificaUsuario();

?>

<h1>Liquidação</h1>
<form action="adiciona-produto.php" method="post">
	<table class="table">
		<tr>
			<td>
				Numero do pedido:
			</td>
			<td>
				<input class="form-control" type="text" name="">
			</td>
			<td>
				Cliente:
			</td>
			<td>
				<input class="form-control" type="text" name="">
			</td>
			<td>
				Data de Entrega de:
			</td>
			<td>
				<input class="form-control" type="date" name="">
			</td>
			<td>
				Até:
			</td>
			<td>
				<input class="form-control" type="date" name="">
			</td>
		</tr>
		<tr>
			<td>
				Status:
			</td>
			<td>
				<input class="form-control" type="text" name="">
			</td>
			<td>
				<input class="form-control" type="submit" name="busca" value="Busca">
			</td>
		</tr>
		<tr>
			<td>
				Tipo:
			</td>
			<td>
				<input class="form-control" type="text" name="">
			</td>
			<td>
				<input class="form-control" type="submit" name="busca" value="Quitar">
			</td>
			<td>
				<input class="form-control" type="submit" name="busca" value="Imprimir">
			</td>
		</tr>
	</table>
</form>


<?php include("rodape.php"); ?>
<?php
require_once("cabecalho.php");
require_once("logica-usuario.php");

verificaUsuario();

$cliente = new Cliente();

?>	

<h1>Formulário de Clientes</h1>
<form action="cliente-adiciona.php" method="post">
	<table class="table">
		
		<?php include("cliente-formulario-base.php"); ?>

		<tr>
			<td>
				<button class="btn btn-primary" type="submit">Cadastrar</button>
			</td>
		</tr>
	</table>
</form>

<?php include("rodape.php"); ?>
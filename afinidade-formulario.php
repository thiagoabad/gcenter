<?php
require_once("cabecalho.php");
require_once("logica-usuario.php");

verificaUsuario();

$afinidade = new Afinidade("", "");

?>	

<h1>Formulário de Afinidades</h1>
<form action="afinidade-adiciona.php" method="post">
	<table class="table">
		
		<?php include("afinidade-formulario-base.php"); ?>

		<tr>
			<td>
				<button class="btn btn-primary" type="submit">Cadastrar</button>
			</td>
		</tr>
	</table>
</form>

<?php include("rodape.php"); ?>
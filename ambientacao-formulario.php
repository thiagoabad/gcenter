<?php
require_once("cabecalho.php");
require_once("logica-usuario.php");

verificaUsuario();

$ambientacao = new Ambientacao("", "");

?>	

<h1>Formulário de Ambientações</h1>
<form action="ambientacao-adiciona.php" method="post">
	<table class="table">
		
		<?php include("ambientacao-formulario-base.php"); ?>

		<tr>
			<td>
				<button class="btn btn-primary" type="submit">Cadastrar</button>
			</td>
		</tr>
	</table>
</form>

<?php include("rodape.php"); ?>
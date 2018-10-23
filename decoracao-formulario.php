<?php
require_once("cabecalho.php");
require_once("logica-usuario.php");

verificaUsuario();

$decoracao = new Decoracao("", "", "", "", "");

?>	

<h1>Formulário de Decoracão</h1>
<form action="decoracao-adiciona.php" method="post">
	<table class="table">
		
		<?php include("decoracao-formulario-base.php"); ?>

		<tr>
			<td>
				<button class="btn btn-primary" type="submit">Cadastrar</button>
			</td>
		</tr>
	</table>
</form>

<?php include("rodape.php"); ?>
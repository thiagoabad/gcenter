<?php
require_once("cabecalho.php");
require_once("logica-usuario.php");

verificaUsuario();

$formadepgto = new Formadepgto("", "", "", "", "");

?>	

<h1>Formulário de Forma de pgto</h1>
<form action="formadepgto-adiciona.php" method="post">
	<table class="table">
		
		<?php include("formadepgto-formulario-base.php"); ?>

		<tr>
			<td>
				<button class="btn btn-primary" type="submit">Cadastrar</button>
			</td>
		</tr>
	</table>
</form>

<?php include("rodape.php"); ?>
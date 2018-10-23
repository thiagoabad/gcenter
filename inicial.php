<?php
require_once("cabecalho.php");
require_once("logica-usuario.php");

verificaUsuario();

$categoria = new Categoria();
$categoria->setId(1);

$produto = new Produto("", "", "", $categoria, "");

$categoriaDao = new CategoriaDao($conexao);

$categorias = $categoriaDao->listaCategorias();

?>	

<h1>Garden Center</h1>
<form action="adiciona-produto.php" method="post">
	<table class="table">
		<tr>
			<td>
				<a href="afinidade-lista.php"><img src="img/inicial1.png"></a>
			</td>
			<td>
				<a href=""><img src="img/inicial7.png"></a>
			</td>
			<td>
				<a href=""><img src="img/inicial11.png"></a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="ambientacao-lista.php"><img src="img/inicial2.png"></a>
			</td>
			<td>
				<a href=""><img src="img/inicial8.png"></a>
			</td>
			<td>
				<a href=""><img src="img/inicial12.png"></a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="cliente-lista.php"><img src="img/inicial3.png"></a>
			</td>
			<td>
				<a href=""><img src="img/inicial9.png"></a>
			</td>
			<td>
				<a href=""><img src="img/inicial13.png"></a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="formadepgto-lista.php"><img src="img/inicial4.png"></a>
			</td>
			<td>
				<a href=""><img src="img/inicial10.png"></a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="decoracao-lista.php"><img src="img/inicial5.png"></a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="usuario-lista.php"><img src="img/inicial6.png"></a>
			</td>
		</tr>
	</table>
</form>

<?php include("rodape.php"); ?>
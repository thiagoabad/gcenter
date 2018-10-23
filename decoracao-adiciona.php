<?php 
require_once("cabecalho.php");
require_once("logica-usuario.php");

verificaUsuario();

$decoracao = new Decoracao();

$decoracao->setNomItemDecor($_POST['nom_item_decor']);
$decoracao->setValor($_POST['valor']);
$decoracao->setQuant($_POST['quant']);
$decoracao->setTipo($_POST['tipo']);

$decoracaoDao = new DecoracaoDao($conexao);

if($decoracaoDao->insereDecoracao($decoracao)) { ?>
	<p class="text-success">A decoração <?= $decoracao->getNomItemDecor() ?> foi adicionada.</p>
<?php 
} else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">A decoração <?= $decoracao->getNomItemDecor() ?> não foi adicionada: <?= $msg?></p>
<?php
}
?>

<?php include("rodape.php"); ?>
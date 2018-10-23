<?php 
require_once("cabecalho.php");
require_once("logica-usuario.php");

verificaUsuario();

$ambientacao = new Ambientacao();

$ambientacao->setDescricao($_POST['descricao']);
$ambientacao->setValor($_POST['valor']);

$ambientacaoDao = new AmbientacaoDao($conexao);

if($ambientacaoDao->insereAmbientacao($ambientacao)) { ?>
	<p class="text-success">A ambientação <?= $ambientacao->getDescricao() ?> foi adicionado.</p>
<?php 
} else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">A ambientação <?= $ambientacao->getDescricao() ?> não foi adicionado: <?= $msg?></p>
<?php
}
?>

<?php include("rodape.php"); ?>
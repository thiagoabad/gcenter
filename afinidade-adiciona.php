<?php 
require_once("cabecalho.php");
require_once("logica-usuario.php");

verificaUsuario();

$afinidade = new Afinidade();

$afinidade->setNome($_POST['nome']);

$afinidadeDao = new AfinidadeDao($conexao);

if($afinidadeDao->insereAfinidade($afinidade)) { ?>
	<p class="text-success">O afinidade <?= $afinidade->getNome() ?> foi adicionado.</p>
<?php 
} else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O afinidade <?= $afinidade->getNome() ?> não foi adicionado: <?= $msg?></p>
<?php
}
?>

<?php include("rodape.php"); ?>
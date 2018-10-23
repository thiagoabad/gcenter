<?php 
require_once("cabecalho.php");
require_once("logica-usuario.php");

verificaUsuario();

$formadepgto = new Formadepgto();

$formadepgto->setNomForma($_POST['nom_forma']);

$formadepgtoDao = new FormadepgtoDao($conexao);

if($formadepgtoDao->insereFormadepgto($formadepgto)) { ?>
	<p class="text-success">A forma de pgto <?= $formadepgto->getNomForma() ?> foi adicionada.</p>
<?php 
} else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">A forma de pgto <?= $formadepgto->getNomForma() ?> não foi adicionada: <?= $msg?></p>
<?php
}
?>

<?php include("rodape.php"); ?>
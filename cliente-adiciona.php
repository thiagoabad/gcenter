<?php 
require_once("cabecalho.php");
require_once("logica-usuario.php");

verificaUsuario();

$cliente = new Cliente();

$cliente->setNome($_POST['nome']);
$cliente->setClasse($_POST['classe']);
$cliente->setBairro($_POST['bairo']);
$cliente->setCidade($_POST['cidade']);
$cliente->setLogradouro($_POST['logradouro']);
$cliente->setTel1($_POST['tel1']);
$cliente->setTel2($_POST['tel2']);
$cliente->setRamal1($_POST['ramal1']);
$cliente->setRamal2($_POST['ramal2']);
$cliente->setCel1($_POST['cel1']);
$cliente->setCel2($_POST['cel2']);
$cliente->setObs($_POST['obs']);
$cliente->setIdVendedor($_POST['idVendedor']);
$cliente->setCpf($_POST['cpf']);
$cliente->setUf($_POST['uf']);
$cliente->setCep($_POST['cep']);
$cliente->setNuref($_POST['nuref']);
$cliente->setCnpj($_POST['cnpj']);
$cliente->setIe($_POST['ie']);
$cliente->setBairroCom($_POST['bairroCom']);
$cliente->setCidadeCom($_POST['cidadeCom']);
$cliente->setLogradouroCom($_POST['logradouroCom']);
$cliente->setCepCom($_POST['cepCom']);
$cliente->setTel3($_POST['tel3']);

$clienteDao = new ClienteDao($conexao);

if($clienteDao->insereCliente($cliente)) { ?>
	<p class="text-success">O cliente <?= $cliente->getNome() ?> foi adicionado.</p>
<?php 
} else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O cliente <?= $cliente->getNome() ?> não foi adicionado: <?= $msg?></p>
<?php
}
?>

<?php include("rodape.php"); ?>
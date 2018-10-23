<?php
require_once("cabecalho.php"); 
require_once("logica-usuario.php");

$decoracaoDao = new decoracaoDao($conexao);

$id = $_POST['id'];
$decoracaoDao->removeDecoracao($id);
$_SESSION["success"] = "Decoração removida com sucesso.";
header("Location: decoracao-lista.php");
die();

?>
<?php
require_once("cabecalho.php"); 
require_once("logica-usuario.php");

$afinidadeDao = new AfinidadeDao($conexao);

$id = $_POST['id'];
$afinidadeDao->removeAfinidade($id);
$_SESSION["success"] = "Afinidade removido com sucesso.";
header("Location: afinidade-lista.php");
die();

?>
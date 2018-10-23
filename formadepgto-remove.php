<?php
require_once("cabecalho.php"); 
require_once("logica-usuario.php");

$formadepgtoDao = new FormadepgtoDao($conexao);

$id = $_POST['id'];
$formadepgtoDao->removeFormadepgto($id);
$_SESSION["success"] = "Forma de pgto removido com sucesso.";
header("Location: formadepgto-lista.php");
die();

?>
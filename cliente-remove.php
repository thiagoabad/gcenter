<?php
require_once("cabecalho.php"); 
require_once("logica-usuario.php");

$clienteDao = new ClienteDao($conexao);

$id = $_POST['id'];
$clienteDao->removeCliente($id);
$_SESSION["success"] = "Cliente removido com sucesso.";
header("Location: cliente-lista.php");
die();

?>
<?php
require_once('../inc/conexao.php');

$id = $_POST['id'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];

$sql = "UPDATE produtos SET nome='$nome', preco='$preco', descricao='$descricao' WHERE id='$id'";
$edita = pg_query($conexao,$sql);
header("Location: ".$base_url."produtos/index.php");


?>
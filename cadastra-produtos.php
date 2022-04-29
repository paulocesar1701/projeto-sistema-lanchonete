<?php


$conexao = mysqli_connect("localhost", "root", "", "lanchonete");

$produto = $_POST['produto'];
$preco = $_POST['preco'];
$ingredientes = $_POST['ingredientes'];
echo "{$produto} - {$preco} - {$ingredientes}";

$sql_inserir = "insert into tbprodutos(produto, preco, ingredientes) values('{$produto}',{$preco}, '{$ingredientes}')";
mysqli_query($conexao, $sql_inserir);

mysqli_close($conexao);
?>
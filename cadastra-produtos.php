<?php

//toda variável começa com cifrão. Nesta variável eu guardo uma conexão com o banco de dados. 
$conexao = mysqli_connect("localhost", "root", "", "lanchonete");

$produto = $_POST['produto'];
$preco = $_POST['preco'];
$ingredientes = $_POST['ingredientes'];


//sempre que eu quiser mostrar o conteúdo das variáveis dentro das aspas, é necessário utilizar as chaves.
echo "{$produto} - {$preco} - {$ingredientes}";

$sql_inserir = "insert into tbprodutos(produto, preco, ingredientes) values('{$produto}',{$preco}, '{$ingredientes}')";
mysqli_query($conexao, $sql_inserir);

// fechamento da conexão
mysqli_close($conexao);
?>
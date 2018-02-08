<?php

require_once('Produto.php');
require_once('ProdutoDAO.php');

$produto = new Produto(BD::obterConexao());
$produto->setNome($_REQUEST['nome']);
$produto->setPreco($_REQUEST['preco']);
$produto->setDescricao($_REQUEST['descricao']);
$produto->setId($_REQUEST['id']);

$produtoDAO = new ProdutoDAO();
$produtoDAO->gravar($produto);

header('Location:produto_listar.php');

?>
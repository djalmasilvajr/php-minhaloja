<?php

require_once('ProdutoDAO.php');

(new ProdutoDAO(BD::obterConexao()))->remover($_REQUEST['id']);

header('Location:produto_listar.php');

?>
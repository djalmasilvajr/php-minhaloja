<?php
require_once('ProdutoDAO.php');
require_once('../BD.php');
// $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : null ;
$conexao = BD::obterCeonxao();
$categorias = (new CategoriaDAO($conexao));
if ( isset($_REQUEST['id']) ) {
    $id = $_REQUEST['id'];
    $produto = (new ProdutoDAO($conexao))->buscarPorId($id);
} else {
    $produto = new Produto();
}
$titulo = 'Cadastro de Produto';
require_once('../cabecalho.php');
?>

<form action="produto_gravar.php" method="post" >
<div class="form-group">
<label>nome</label><input type="text" name="nome" class="form-control" value="<?=$produto->getNome()?>" />
</div>
<div class="form-group">
<label>preco</label><input type="text" name="preco" class="form-control" value="<?=$produto->getPreco()?>" />
</div>
<div class="form-group">
<label>descricao</label><textarea name="descricao" class="form-control"><?=$produto->getDescricao()?></textarea>
</div>
<div class="form-group">
<label>categoria</label><input type="text" name="categoria" class="form-control" value="<?=$produto->getCategoria()->getNome()?>" />
</div>
<input type="hidden" name="id" value="<?=$produto->getId()?>" />
<input type="submit" value="gravar" class="btn btn-primary" />
</form>

<?php
require_once('../rodape.php');
?>
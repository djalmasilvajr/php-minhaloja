<?php
require_once('ProdutoDAO.php');
require_once('../BD.php');
$dao = new ProdutoDAO(BD::obterConexao());
$produtos = $dao->listar();

$titulo = 'Listagem de Produto';
require_once('../cabecalho.php');
?>

<table class="table table-hover">
<tr>
<th>id</th>
<th>nome</th>
<th>descricao</th>
<th>preco</th>
<th>categoria</th>
<th></th>
<th></th>
</tr>
<?php foreach ($produtos as $produto) { ?> 
    <tr>
        <td> <?= $produto->getId() ?> </td>
        <td> <?= $produto->getNome() ?> </td>
        <td> <?= $produto->getDescricao() ?> </td>
        <td> <?= $produto->getPreco() ?> </td>
        <td> <?= $produto->getCategoria()->getNome() ?> </td>
        <td> <a href="produto_editar.php?id=<?= $produto->getId() ?>" class="glyphicon glyphicon-pencil" ></a>  </td>
        <td> <a href="produto_remover.php?id=<?= $produto->getId() ?>" class="glyphicon glyphicon-trash" ></a>   </td>
    </tr>
<?php } ?>
</table>
<a class="btn btn-primary" href="produto_editar.php">incluir</a>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>




<?php
require_once('../rodape.php');
?>
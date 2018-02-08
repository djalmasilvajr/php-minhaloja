<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/static/css/bootstrap.min.css" >
    <link rel="stylesheet" href="/static/css/main.css" />
    <title></title>
  </head>
  <body>
    <div class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header" >
          <a href="/" class="navbar-brand"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;Minha Loja</a>
        </div>
        <div>
          <ul class="nav navbar-nav">
            <li><a href="/produto/produto_listar.php">Produtos</a></li>
            <li><a href="/categoria/categoria_listar.php">Categorias</a></li>
            <li><a href="/venda/venda_listar.php">Vendas</a></li>
          </ul>
        </div>
      </div>
    </div>
    <h1 class="text-center" ><?= $titulo ?></h1>
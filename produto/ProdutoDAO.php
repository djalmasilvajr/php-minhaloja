<?php
require_once('Produto.php');
require_once('../categoria/CategoriaDAO.php');

class ProdutoDAO {

    private $conexao;

    // método construtor da classe
    function __construct($conexao) {
        $this->conexao = $conexao;
    }
 
    function listar() {

        // return $this->listarListaEmMemoria();
        return $this->listarConsultaEmBanco();
    }

    function listarConsultaEmBanco() {
        $q = "select * from produto;";
        $produtos = [];
        $resultados = $this->conexao->query($q);
        while ($resultado = $resultados->fetch_assoc()) {
            $produto = new Produto();
            $produto->setId( $resultado['id'] );
            $produto->setNome( $resultado['nome'] );
            $produto->setPreco( $resultado['preco'] );
            $produto->setDescricao( $resultado['descricao'] );
            $produto->setCategoria( (new CategoriaDAO($this->conexao))->buscarPorId( $resultado['categoria_id']) );
            $produtos[] = $produto;
        }
        return $produtos;
    }

    function listarListaEmMemoria() {

        $p1 = new Produto();
        $p1->setId("1");
        $p1->setNome("produto 1");
        $p1->setDescricao("descricao do produto 1");
        $p1->setPreco(10,00);

        $p2 = new Produto();
        $p2->setId("2");
        $p2->setNome("produto 2");
        $p2->setDescricao("descricao do produto 2");
        $p2->setPreco(20,00);

        $p3 = new Produto();
        $p3->setId("3");
        $p3->setNome("produto 3");
        $p3->setDescricao("descricao do produto 3");
        $p3->setPreco(30,00);

        $produtos = [];
        $produtos[] = $p1;
        $produtos[] = $p2;
        $produtos[] = $p3;

        return $produtos;
    }

    function gravar($produtoAGravar) {

        if ( empty($produtoAGravar->getId()) ) { // utilizado  is_empty que trata o null ou a string vazia
        //if ( is_null($produtoAGravar->getId()) ) {
            $this->incluir($produtoAGravar);
        } else {
            $this->alterar($produtoAGravar);
        }

    }

    function incluir($produtoAGravar) {

        $q = "INSERT INTO `loja`.`produto` (`nome`,`preco`,`descricao`) 
        VALUES (
            '{$produtoAGravar->getNome()}',
            '{$produtoAGravar->getPreco()}',
            '{$produtoAGravar->getDescricao()}'
            );";
    
        $this->conexao->query($q);
    
        }

    function alterar($produtoAGravar) {

        $q = "UPDATE `loja`.`produto`
            SET
            `nome` = '{$produtoAGravar->getNome()}',
            `preco` = '{$produtoAGravar->getPreco()}',
            `descricao` = '{$produtoAGravar->getDescricao()}' 
            WHERE `id` = {$produtoAGravar->getId()};
            ";
        
            $this->conexao->query($q);
        
            }    

    function remover($id) {

        $q = "delete from produto where id= $id;";
        $this->conexao->query($q);

    }

    function buscarPorId($id) {
        $q = "select * from produto where id= $id;";
        $resultados = $this->conexao->query($q);
        while ($resultado = $resultados->fetch_assoc()) {
            $produto = new Produto();
            $produto->setId( $resultado['id'] );
            $produto->setNome( $resultado['nome'] );
            $produto->setPreco( $resultado['preco'] );
            $produto->setDescricao( $resultado['descricao'] );            
            $produto->setCategoria( (new CategoriaDAO())->buscarPorId( $resultado['categoria_id']) );
            $produtos[] = $produto;
        }
        return $produto;
    }
}

//teste do DAO
//$produtoDAO = new ProdutoDAO();
//echo "<pre>";
//var_dump($produtoDAO->listar());
//echo "</pre>";

?>
<?php
class Produto {
	private $nome;
    private $id;
    private $preco;
		private $descricao;
		private $categoria;

	function setNome($nome){
		$this->nome = $nome;
	}
	function setId($id){
		$this->id = $id;
    }
    function setPreco($preco){
		$this->preco = $preco;
	}
	function setDescricao($descricao){
		$this->descricao = $descricao;
	}
	function getNome() {
		return $this->nome;
	}
	function getId() {
		return $this->id;
    }
    function getPreco(){
		return $this->preco;
	}
	function getDescricao(){
		return $this->descricao;
	}    
	function setCategoria($categoria){
		$this->categoria = $categoria;
	}
	function getCategoria() {
		return $this->categoria;
	}
}
<?php
class Categoria {
	  private $nome;
		private $id;
		
	function setNome($nome){
		$this->nome = $nome;
	}
	function setId($id){
		$this->id = $id;
    }
	function getNome() {
		return $this->nome;
	}
	function getId() {
		return $this->id;
    }
}
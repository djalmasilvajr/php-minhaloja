<?php

class Produto {
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

$p1 = new Produto();
$p1->setNome("produto 1");

$p2 = new Produto();
$p2->setNome("produto 2");

$p3 = new Produto();
$p3->setNome("produto 3");

$produtos = [];
$produtos[] = $p1;
$produtos[] = $p2;
$produtos[] = $p3;

echo "<pre>";
var_dump($produtos);
echo "</pre>";

echo "<pre>";
foreach($produtos as $produto) {
	echo "<br/>{$produto->getNome()}"; // ambos funcionam
	echo '<br/>'.$produto->getNome();  // ambos funcionam
}
echo "</pre>";

?>


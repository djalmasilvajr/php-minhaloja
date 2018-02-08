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
$p = new Produto();
// $p->nome = 'tv';
$p->setNome('tv');
var_dump($p);

echo "<br/>";

$p2 = new $p();
//$p2->nome="tv";
$p2->setNome('tv');
var_dump($p2);

echo '<br/>'.($p == $p2  ? 'Iguais' : 'Diferentes' );
echo '<br/>'.($p === $p2  ? 'Iguais' : 'Diferentes' );

?>
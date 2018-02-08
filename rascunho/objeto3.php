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

echo "<br/>";

class Livro extends Produto {
	private $isbn;
	function setIsbn($isbn) { $this->isbn = $isbn; }
	function getIsbn() { return $this->isbn; }	
	function obterDescricaoCompleta() {
		return $this->getNome().' - '.$this->getIsbn();
	}
}

$livro = new Livro();
$livro->setIsbn('abcde1234');
var_dump($livro);

echo "<br/>";
echo "<br/>".$livro->obterDescricaoCompleta();
echo "<br/>";

$livro2 = new Livro();
$livro2->setIsbn('56');
$livro2->setNome('outro livro');
var_dump($livro2);

echo "<br/>";
echo "<br/>".$livro2->obterDescricaoCompleta();
echo "<br/>";

echo "<br/>".($livro instanceof Livro ? 'Eh um livro' : 'NAO eh um livro');
echo "<br/>".($livro instanceof Produto ? 'Eh um produto' : 'NAO eh um produto');
echo "<br/>".($p instanceof Livro ? 'Eh um livro' : 'NAO eh um livro');
echo "<br/>".($livro instanceof $p ? 'Eh um $p' : 'NAO eh um $p');
echo "<br/>".($p instanceof $livro ? 'Eh um $livro' : 'NAO eh um $livro');

?>
<?php
class Produto {
	public $nome;
	public $id;	
}
$p = new Produto();
$p->nome = 'tv';
var_dump($p);

echo "<br/>";

$p2 = new $p();
$p2->nome="tv";
var_dump($p2);

echo '<br/>'.($p == $p2  ? 'Iguais' : 'Diferentes' );
echo '<br/>'.($p === $p2  ? 'Iguais' : 'Diferentes' );

?>
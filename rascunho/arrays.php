<?php

$meuArray = [100,200,900,80,-8000];
echo "<br/>Arrays";
echo "<br/>$meuArray[1]";

echo "<br/>";

$teste='dj';
$meuArray = [100,200,900,"hamburguer do $teste",80,-8000]; // definição de valor com interpolação
echo "<br/>$meuArray[3]";

echo "<br/>";

$meuArray[] = 'mais um valor'; // push de valor
foreach($meuArray as $valor){
	echo "<br/>$valor";
}

echo "<br/>";

$meuOutroArray = ['chave1' => 'valor1', 'chave2' => 'valor2'];
echo '<br/>'.$meuOutroArray['chave1'];


$indice = 'chave1';
echo '<br/>'.$meuOutroArray[$indice];
echo "<br/>$meuOutroArray[$indice]";

$terceiroArray = ['abc',32,'chave'=>'valor'];
echo "<br/>$terceiroArray[2]";
// echo "<br/>$terceiroArray['chave']";
$terceiroArray[2] = 'maça';
$terceiroArray[3] = 'banana';
$terceiroArray[] = 'laranja';
foreach ($terceiroArray as $chave => $valor) {
		echo "<br/>Chave: $chave e valor: $valor";
}

echo "<br/><br/>";

$concatenado = $meuArray + $terceiroArray;
var_dump($concatenado);



?>
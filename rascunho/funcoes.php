<?php

function ola() {	
	echo "tudo bem?";	
}
function ola2() {	
	return "tudo bem?";	
}
ola();
echo "<br/>".ola2();

$soma = function($valor1,$valor2) {
	return $valor1 + $valor2;
};
echo "<br/>Soma de 2 e 3 eh: ".$soma(2,3);
$subtracao = function($valor1,$valor2) {
	return $valor1 - $valor2;
};
echo "<br/>subtracao de 2 e 3 eh: ".$subtracao(2,3);

function calculadora($valor1,$valor2, $operacao) {
	return $operacao($valor1,$valor2);	
}

echo "<br/>soma de 10 e 20 eh ".calculadora(10,20,$soma);
echo "<br/>subtracao de 10 e 20 eh ".calculadora(10,20,$subtracao);

echo "<br/>mulsubtracao de 10 e 20 eh ".calculadora(10,20,function($v1,$v2){return $v1*$v2;});
?>
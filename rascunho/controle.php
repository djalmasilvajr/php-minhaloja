<?php

$minhaString = 'djalma';
if ( $minhaString == 'djalma' ) {
	echo "<br/>String eh ".$minhaString;
}

if (isset($manga)) {
	echo "<br/>Manga existe";
} else {
	echo "<br/>Manga nao existe";
}

echo (isset($manga) ? "<br/>Manga existe" : "<br/>Manga nao existe");
echo isset($manga) ? "<br/>Manga existe" : "<br/>Manga nao existe";
echo "<br/>".(isset($manga) ? "Manga existe" : "Manga nao existe");


if ($minhaString == 'djalma') {
?>
<br/>condicional!
<?php
}
?>

<?php
for ($a=0;$a<=10;$a++) {
	echo "<br/>$a";
}

for ($a=0;$a<=10;$a++) {
?>
<br/>Repetindo <?=$a?>
<?php
}
?>

	


<<?php 

echo "Vul een getal in\n";
$getal = rtrim(fgets(STDIN));

if ($getal % 2 == 1)
	echo "Dit is een oneven getal";
if ($getal % 2 == 0)
	echo "Dit is een even getal";
?>
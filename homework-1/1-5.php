<?php
$a = 2;
$b = 4;

echo "a равно $a<br>";
echo "b равно $b<br>";

$a = $a - $b;
$b = $b + $a;
$a = $b - $a;

echo "<hr>";

echo "a равно $a<br>";
echo "b равно $b<br>";
?>
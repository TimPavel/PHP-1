﻿<?php

// 1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения.
// Затем написать скрипт, который работает по следующему принципу:
//если $a и $b положительные, вывести их разность;
//если $а и $b отрицательные, вывести их произведение;
//если $а и $b разных знаков, вывести их сумму;
//Ноль можно считать положительным числом.

$a = -7;
$b = 10;

if ($a >= 0 && $b >= 0)
	echo $a - $b;
elseif ($a < 0 && $b < 0)
	echo $a * $b;
else
	echo $a + $b;
?>

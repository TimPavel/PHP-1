<?php

// 4. Реализовать функцию с тремя параметрами:
// function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов,
// $operation – строка с названием операции.
// В зависимости от переданного значения операции выполнить одну из арифметических операций
// (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

echo mathOperation(6, 4, "/");

// функция проводит арифметическую операцию($operation)  для чисел $arg1 и $arg2;
function mathOperation($arg1, $arg2, $operation) {
	switch ($operation) {
		case "+":
			return add($arg1, $arg2);
		case "-":
			return subtraction($arg1, $arg2);
		case "*":
			return multiplication($arg1, $arg2);
		case "/":
			return division($arg1, $arg2);
		default:
			return "Underfined operator - ".$operation;
	}
}

// функция сложения двух чисел $a и $b
function add($a, $b) {
	return $a + $b;
}

// функция вычитания двух чисел $a и $b
function subtraction($a, $b) {
	return $a - $b;
}

// функция умножения двух чисел $a и $b
function multiplication($a, $b) {
	return $a * $b;
}

// функция деления двух чисел $a и $b
function division($a, $b) {
	return $a / $b;
}
?>
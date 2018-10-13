<?php

//5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.

$phrase = "Would you like some coffee.";

$modifiedPhrase = replaceSpace($phrase);
echo $modifiedPhrase;

$modifiedPhrase2 = replaceSpace2($phrase);
echo $modifiedPhrase2;

/** функция заменяет пробел на нижнее подчеркивание
 * @param $phrase - строка для изменения
 * @return mixed - измененная строка
 */
function replaceSpace($phrase) {
	$space = " ";
	$underScore = "_";
	return str_replace($space, $underScore, $phrase);
}

/** функция заменяет пробел на нижнее подчеркивание
 * @param $phrase - строка для изменения
 * @return mixed - измененная строка
 */
function replaceSpace2($phrase) {
	// разбираем строку на массив, разделителем устанавливаем пробел
	$new =  explode(" ", $phrase);
	// объединяем элементы массива в строку, со вставкой нижнего подчеркивания
	$new = implode("_", $new);
	return $new;
}


?>
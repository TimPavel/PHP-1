<?php

//7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
//22 часа 15 минут
//21 час 43 минуты

// функция получает текущее время и отображает время и слова "часы" и "минуты" правильно склоненные.
function getTime() {
	$time = date("H-i");
	$min = substr($time, 3);
	$hour = substr($time, 0, 2);
	return $hour.getCorrectEnd($hour, " час", " часа", " часов")." - ".$min.getCorrectEnd($min, " минута", " минуты", " минут");
}

echo getTime();

/**
 * функция для получения корректного окончания слова
 * @param $number - число, исходя из которого, вычисляется правильное склонение
 * @param $firstWord - слово с правильным окончанием для чисел заканчивающихся на 1, кроме чисел заканчивающихся на 11
 * @param $secondWord - слово с правильным окончанием для чисел заканчивающихся на 2, 3, 4, кроме чисел заканчивающихся на 12, 13, 14
 * @param $thirdWord - слово с правильным окончанием для всех остальных чисел
 * @return mixed слово с верным окончанием
 */
function getCorrectEnd($number, $firstWord, $secondWord, $thirdWord) {
	$number10 = $number % 10;
	if ($number >= 5 && $number <= 20) return $thirdWord;
	elseif ($number10 > 1 && $number10 < 5) return $secondWord;
	elseif ($number10 === 1) return $firstWord;
	else return $thirdWord;
}

?>
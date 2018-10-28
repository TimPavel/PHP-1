<?php

// поключаем конфигурации приложения
require '../config/main.php';
require '../engine/core.php';

session_start();
// получаем из сессии массив товаров добавленных  в корзину
$goods = $_SESSION['cart'];

// если есть в массив GET - id
if (isset($_GET['id'])) { // то
	$id = $_GET['id'];
	// получаем ключ товара выбранного на удаление из корзины
	$key = findKeyArray($_SESSION['cart'], $id);
	// удаляем данный товар из сессии
	unset($_SESSION['cart'][$key]);
	// редиректим обратно на корзину
	header("Location: cart.php");
}
// рендерим корзину, передаем товары полученные из сессии
echo render('cart/cart', ['goods' => $goods]);

/** Функция находит ключ у массива
 * @param $haystack array массив в которм происходит поиск значения
 * @param $needle  значение которое ищется в массиве
 * @return int|string ключ под которым находится значение
 */
function findKeyArray($haystack, $needle) {
	foreach ($haystack as $key => $value) {
		if($value['id'] == $needle) {
			return $key;
		}
	}
}


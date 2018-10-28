<?php

// поключаем конфигурации приложения
require '../config/main.php';
require '../engine/core.php';

session_start();
// получаем в массив товары которые есть в БД
$goods = getItemArray("SELECT * FROM `goods`.`items`");

// рендерим страницу, передаем полученный массив из БД товаров
echo render('6-4/6-4', [
	'goods' => $goods,
]);

// если передан в GET id
if (isset($_GET['goodId'])) { // то
	// находим товар по id из БД
	$itemToCart = addToCart($_GET['goodId']);
	// записываем в сессию в массив cart данный товар
	$_SESSION['cart'][] = $itemToCart;
}

/** Функция получает из БД товар по id
 * @param $id
 * @return array|null
 */
function addToCart($id) {
	$item = getItem("SELECT * FROM `goods`.`items` WHERE `id` = ".$id);
	return $item;
}
?>


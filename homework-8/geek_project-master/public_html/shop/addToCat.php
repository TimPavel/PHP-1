<?php

require '../../engine/core.php';

function routeIndex() {
	echo render('shop/addToCat');
}

function routeAddItem() {
	renderJson($_POST['good']);
	if (isset($_POST['good'])) {
		$name = $_POST['good']['name'];
		$description = $_POST['good']['description'];
		$price = $_POST['good']['price'];
		$quantity = $_POST['good']['quantity'];
		$catItem = $_POST['good']['catItem'];
		$sql = "INSERT INTO `geek_project`.`product` (`name`, `description`, `price`, `quantity`, `category_id`) VALUES ('{$name}', '{$description}', '{$price}', '{$quantity}', '{$catItem}')";

		execute($sql);
//		exit("Невозможно открыть файл ($sql)");
	}

//	execute($sql);
}

route();
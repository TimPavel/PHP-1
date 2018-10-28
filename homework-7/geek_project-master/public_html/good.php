<?php

// поключаем конфигурации приложения
require '../config/main.php';
require '../engine/core.php';

session_start();

if(isset($_GET['id'])) {
	$id = $_GET['id'];
	$good = getItem("SELECT * FROM `goods`.`items` WHERE `id` = ".$id);
}

echo render('6-4/good', [
	'good' => $good,
]);
  ?>
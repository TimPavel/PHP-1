<?php

// поключаем конфигурации приложения
require '../config/main.php';
require '../engine/core.php';

if (isset($_SESSION['auth']['login'])) {
	$user = $_SESSION['auth']['login'];
} else {
	$user = "Guest";
}


echo render('my_account/my_account', ['user' => $user]);
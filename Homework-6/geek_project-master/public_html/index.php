<?php

/**
 * начальная страница сайта
 */

// поключаем конфигурации приложения
require '../config/main.php';
require '../engine/core.php';

// логика страницы
$message = 'Hello from index.php!';

// вывод шаблона
echo render('site/6-4', [
    'message' => $message
]);
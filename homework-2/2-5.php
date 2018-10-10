<?php

$h1 = "<h1>";
$title = "Телефон Nokia 6230";
$currentYear = date('Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset=\"UTF-8\">
<title>Главная</title>
</head>
<body>
<h1> <?= $title; ?></h1>
<h3><img alt="здесь должна быть картинка"></h3>
<h3>Описание:</h3>
<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit.
	Doloremque dolores magni fugit eligendi ratione</p>
<h3>Характеристики товара:</h3>
<p>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit.
	Doloremque dolores magni fugit eligendi ratione</p>
<h3>Подробное описание товара:</h3>
<p>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>
	Odit dignissimos cum asperiores deleniti omnis! Hic obcaecati, cumque nemo? <br>
	Iste sunt explicabo eaque delectus ea nulla aut atque iure rem ipsam quo quis velit hic libero corporis <br>
	numquam voluptate saepe, cum, eligendi temporibus officia esse, iusto ab aspernatur! Distinctio, quia, </p>
<hr>
<footer class=\"footer\">&copy; Все права разрешены <?=$currentYear?></footer>
</body>
</html>

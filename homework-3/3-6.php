<?php

//6. В имеющемся шаблоне сайта заменить статичное меню (ul – li) на генерируемое через PHP.
// Необходимо представить пункты меню как элементы массива и вывести их циклом.
// Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.


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

<?php $doc = new DOMDocument();

$ulMain = $doc -> createElement ("ul");
$doc -> appendChild($ulMain);
$i = 1;
// запускаем цикл для отрисовки главного меню
while($i <= 5) {
	$li = $doc -> createElement ("li", $i." - характеристика");
	$ulMain -> appendChild($li);
	
	if($i === 2) {
		$ul = $doc -> createElement ("ul");
		$li -> appendChild($ul);
		$j = 1;
		// запускаем цикл для отрисовки подменю
		while ($j <= 5) {
			$li = $doc -> createElement ("li", $j." - характеристика");
			$ul -> appendChild($li);
			$j++;
		}
	}
	$i++;
}
echo $doc->saveHTML();
?>

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

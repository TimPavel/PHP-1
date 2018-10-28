<h1>Товары:</h1>
<div class="flex">
	<?php

	foreach ($goods as $key => $value) {
		?>
		<div class="wrap">
			<h5><?= $value['name']?></h5>
			<a href="good.php?id=<?=$value['id']?>">
				<img src="<?="img/".$value['photo']?>" class="imgGoods" alt="img">
			</a>
			<div>Цена: <?= $value['price']?>$</div>
			<div>Описание: <?= $value['description']?></div>
			<a href="6-4.php?goodId=<?=$value['id']?>" class="btn btn-info">В корзину</a>
		</div>

	<?php } ?>
</div>
</body>
</html>
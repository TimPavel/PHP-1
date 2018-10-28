<h3>Корзина:</h3>

<?php if (!$goods)
{?>
	<div class="alert alert-info" role="alert">
		нет выбранных товаров :(
	</div>

<?php }

else {
	foreach ($goods as $good ) { ?>

<div class="card" >
	<div class="card-body">
		<h5 class="card-title"><?= $good['name']?></h5>
		<h6 class="card-subtitle mb-2 text-muted"><?= $good['description']?></h6>
		<img src="img/<?=$good['photo']?>" alt="imgItem" class="imgGoods">
		<a href="cart.php?id=<?=$good['id']?>" class="btn btn-outline-danger">удалить из корзины</a>
	</div>

</div>
	<br>
<?php } }?>
<h1>Товары в категории</h1>

<ul>
    <?php foreach ($prods as $product): ?>
    <li>
        <a href="/shop/product.php?id=<?= $product['id'] ?>">
            <?= $product['name'] ?>
        </a>
				<?php if(isAdmin()) : ?>
						<button data-id = "<?= $product['id'] ?>" class="btnDelItem btn btn-info btn-sm">
								Удалить
						</button>

				<?php endif ?>
				<hr>
		</li>
    <?php endforeach; ?>
</ul>

<script src="/js/product.js" defer></script>
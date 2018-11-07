<h1>Категории:</h1>

<ul>
    <?php foreach ($cats as $category): ?>
   			<li>
						<a href="/shop/category.php?action=view&id=<?= $category['id'] ?>">
								<?= $category['name'] ?>
						</a>
					&nbsp;
					<?php if(isAdmin()) : ?>
						<button data-id = "<?= $category['id'] ?>" class="bntDelCat btn btn-info btn-sm">
							Удалить
						</button>

					<?php endif ?>
					<hr>
   			</li>


    <?php endforeach; ?>
</ul>

<script src="/js/category.js" defer></script>

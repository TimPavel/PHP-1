<?php

require '../../engine/core.php';

/**
 * Выводим список категорий
 */
function routeIndex() {
    $cats = getItemArray(
        "select * from category"
    );

    echo render('shop/categories', [
        'cats' => $cats
    ]);
}

/**
 * Выводим список товаров в категории
 */
function routeView() {
    $id = $_GET['id'];

    $prods = getItemArray(
        "select * from product where category_id={$id}"
    );

    echo render('shop/products', [
        'prods' => $prods
    ]);
}

function routeDeleteCat() {

	if(isAdmin()) {

		$id = (isset($_POST['id'])) ? intval($_POST['id']) : 0;
		if ($id) {
			$sql = "DELETE FROM `geek_project`.`category` WHERE `id` = {$id}";
			execute($sql);
			renderJson([
				'result' => 'OK',
				'status' => 'delete',
				'errors' => null,
			]);
		}
	}
}

route();
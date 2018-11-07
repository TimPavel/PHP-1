<?php

require '../../engine/core.php';

/**
 * Выводим информацию о товаре
 */
function routeIndex() {
    $id = $_GET['id'];

    $item = getItem(
        "select * from product where id={$id}"
    );

    echo render('shop/details', [
        'item' => $item
    ]);
}

function routeDeleteItem() {
	$id = (isset($_POST['id'])? intval($_POST['id']) : 0);

	if ($id) {
		$sql = "DELETE FROM `geek_project`.`product` WHERE `id` = {$_POST['id']}";
		execute($sql);
		renderJson([
			'result' => 'OK',
			'status' => 'delete',
			'errors' => null,
		]);
	}
}

route();
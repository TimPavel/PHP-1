
$('.bntDelCat').each(function () {
	$(this).click (function () {
		let id = $(this).data('id');
		$.post(
			'/shop/category.php?action=DeleteCat',
			{id: id},
			function (response) {
				console.log(response);
				if (response.result == "OK") {
					alert("Удалена категория");
				} else {
					alert("Не удалось удалить категорию.");
				}
			}
		);
		$(this.parentElement.remove());
	});
});



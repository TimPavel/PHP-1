$(document).ready(function () {
    console.log('Request.js [LOADED]');

    $('#btn-simple').on('click', function () {
        $.get(
            '/ajax.php',
            function (response, status) {
                console.log(status); // success
                console.log(response); // json
            }
        );
    });

    $('#btn-jsonitem').on('click', function () {
        $.get(
            '/ajax.php?action=jsonitem',
            function (response, status) {
                console.log(status);
                console.log(response);
            }
        );
    });

    $('#btn-post-simple').on('click', function () {
        $.post(
            '/ajax.php?action=input',
            {message: 'hello-from-ajax!'},
            function (response, status) {
                console.log(status);
                console.log(response);
            }
        );
    });

    $('#btn-post-jsonitem').on('click', function () {
        let user = {
            login: 'John',
            password: '123123'
        };

        $.post(
            '/ajax.php?action=object',
            {user: user},
            function (response, status) {
                console.log(status);
                console.log(response);
            }
        );
    });

	$('#submitForm').on('click', function() {
		let good = {
			name: $('#inputName').val(),
			description: $('#inputDescr').val(),
			price: $('#inputPrice').val(),
			quantity: $('#inputQuant').val(),
			catItem: $('#selectCat').val()
		};

		$.post(
			'/shop/addToCat.php?action=AddItem',
			{good: good},
			function (response, status) {
				  if(status == 'success') {
						alert('Товар добавлен');
          }

				  console.log(response);
			}
		);


	});
});
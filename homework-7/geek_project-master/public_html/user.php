<?php

// поключаем конфигурации приложения
require '../config/main.php';
require '../engine/core.php';

// страница с формой входа
function login() {
    // редирект если уже авторизован
    if (isLoggedUser()) {
        header("Location: /user.php?action=home");
    }

    // проверка данных из формы
    if (isset($_POST['login_user'])) {
        systemLog($_POST, 'debug');

        $login = $_POST['login'];
        $password = $_POST['password'];

				// делаем запрос в БД на наличие введенного логина
				$result = getItem("SELECT * FROM `users`.`registered_users` WHERE `name` = '$login'");

        if ($login == 'admin') {
            if ($password == '123123') {
                if (isset($_POST['remember'])) {
                    loginUser('admin', true);
                } else {
                    loginUser('admin');
                }

                header("Location: reviews.php");
            }
        } elseif ($result['name'] == $login) {
        		// проверка на соответствие введенного пароля и пароля из БД
          	if ($result['password'] == $password) {
          		// если пароль верный логиним пользователя
							loginUser($login);
							// и перенаправляем в личный кабинет
							header("Location: my_account.php");
						}
						else {
							// иначе сообщение о неправльном пароле
							echo "password incorrect";
						}
						// если ответ из БД на наличие пользователя нулевой
				} elseif (!$result) {
        		echo "Unknown user";
				}
    }

    echo render('user/login');
}

function home() {
    // ДЗ
    echo render('user/home');
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'login';
}

switch ($action) {
    case 'login':
        login();
        break;
    case 'logout':
        logoutUser();
        break;
    case 'home':
        home();
        break;
    default:
        header("Location: /");
}

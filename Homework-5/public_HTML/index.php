<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<?php
  // подключаем конфиги
  require '../config/main.php';
  include '../engine/database.php';

  // проверка на существование переменной в супер глобальной переменной GET
  if (isset($_GET["id"])) {
    $id = $_GET["id"];
  // получаем из БД массив по id
  $link =  getItem("SELECT * FROM `photos` WHERE `id` = ".$id);
  // выполняем увеличение количества просмотров 'views' путем UPDATE запроса в БД
  execute("UPDATE `gallery`.`photos` SET `views` = ".($link['views'] + 1)."  WHERE `id` = ".$id);
?>
<!--    отображаем фото в оригинальном размере-->
  <img src="<?=$dirBig."/".$link['name']?>" alt="img">
  
<?php
  }
?>
</body>
</html>
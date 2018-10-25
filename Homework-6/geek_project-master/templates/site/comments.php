<?php
  
  // подключаем конфиги
  require '../../config/main.php';
  include '../../engine/database.php';
  
  echo "Комментарии:";
  
  $comments = getItemArray("SELECT * FROM `comments`");
  ?>
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

<ul>
  <?php
  foreach ($comments as $key => $value) {
  ?>
  <li><?="Имя: ".$value['name']."  - ".$value['text']?></li>
  
  <?php } ?>
</ul>
</body>
</html>

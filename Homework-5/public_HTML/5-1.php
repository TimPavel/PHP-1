<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Homework5-1</title>
</head>
<body>
<?php
  // подключаем конфиги
  require '../config/main.php';
  include '../engine/database.php';
  // получаем из БД массив уменьшенных фотографий отсортированных по убыванию
  $arraySmallPhoto = getItemArray("SELECT * FROM `photos` WHERE `volume` = 'small' ORDER BY `views` DESC");
  
?>
<ul>
  <?php
    // перебираем полученный массив
    foreach ($arraySmallPhoto as $key => $value) {
      ?>
    <li>
<!--      передаем в ссылку id кликнутой фотографии-->
      <a href="index.php?id=<?=$value['id']?>" target="blank" title="Нажмите, для просмотра в полном размере..." >
<!--        отображаем уменьшенные фотографии из директории dirSmall-->
        <img src="<?=$dirSmall."/".$value['name']?>" alt="img">
      </a>
<!--      отображаем количество просмотров-->
      <span>Количество просмотров: <?= $value['views'] === NULL ? 0 : $value['views'] ?> </span>
    </li>
    
  <?php } ?>
</ul>
</body>
</html>
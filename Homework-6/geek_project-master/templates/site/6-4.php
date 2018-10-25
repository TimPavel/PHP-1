<?php
  
  $goods = getItemArray("SELECT * FROM `goods`.`items`");
  echo ROOT;
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>6-4</title>
</head>
<body>
  <div class="flex">
  <?php
    foreach ($goods as $key => $value) {
    ?>
    <div class="wrap">
      <div>Название: <?= $value['name']?></div>
      <a href="???"><img src="<?="../img/".$value['photo']?>" class="imgGoods" alt="img"></a>
      <div>Цена: <?= $value['price']?></div>
      <div>Описание: <?= $value['description']?></div>
      
    </div>
    <?php } ?>
  </div>
</body>
</html>

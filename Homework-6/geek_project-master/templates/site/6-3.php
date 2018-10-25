<?php
  
  // подключаем конфиги
  require '../../config/main.php';
  include '../../engine/database.php';

  $name = $_POST['name'];
  $text = $_POST['text'];
  echo ROOT;
  
  if(isset($_POST['submit'])) {
    if((isset($name) && $name != "")  && (isset($text) && $text != "")) {
      execute("INSERT INTO `reviews`.`comments` (`name`, `text`) VALUES ('$name', '$text')");
      header('location: comments.php');
    } else {
      echo "Нет введенных данных";
    }
  }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>6-3</title>
</head>
<body>
<form method="post">
  <input type="text" name="name" placeholder="name">
  <input type="text" name="text" placeholder="text">
  <input type="submit" name="submit">
</form>


</body>
</html>


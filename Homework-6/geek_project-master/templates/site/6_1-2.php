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
  <form method="post">
    <input type="number" name="firstNum" placeholder="Введите первое число">
    <input type="number" name="secondNum" placeholder="Введите второе число">
    <button name="operation" value="+">+</button>
    <button name="operation" value="-">-</button>
    <button name="operation" value="*">*</button>
    <button name="operation" value="/">/</button>

  </form>
  <?php
    // проверяем наличие значения под ключом firstNum в суперглобальном массиве $_POST и проверка на пустой значение
    if (isset($_POST['firstNum']) || $_POST['firstNum'] != "") $firstNum = $_POST['firstNum'];
    // проверяем наличие значения под ключом secondNum в суперглобальном массиве $_POST и проверка на пустой значение
    if (isset($_POST['secondNum']) || $_POST['secondNum'] != "") $secondNum = $_POST['secondNum'];
    // проверяем наличие значения под ключом operation в суперглобальном массиве $_POST
    isset($_POST['operation']) ? $operation = $_POST['operation']: print_r("Не выбрана операция");
    
    // если значение пусто, закрываем скрипт
    if ($_POST['firstNum'] == "" || $_POST['secondNum'] == "") {
      echo "Не введено число";
      die();
    }
    
    // исходя из того, что было $_POST['operation'] запускаем соответствующую операцию
    switch ($operation) {
      case "+" :
        echo $firstNum." + ".$secondNum." = ".($firstNum + $secondNum);
        break;
      case "-" :
        echo $firstNum." - ".$secondNum." = ".($firstNum - $secondNum);
        break;
      case "*":
        echo $firstNum." * ".$secondNum." = ".($firstNum * $secondNum);
        break;
      case "/":
        if ($secondNum == 0) {
          echo "Делить на ноль нельзя";
          break;
        }
        echo $firstNum." / ".$secondNum." = ".($firstNum / $secondNum);
        break;
    }
  ?>
</body>
</html>


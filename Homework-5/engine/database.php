<?php
 
  /**
   * Файл с функциями для работы с базой данных
   */
  $connection = mysqli_connect(
    $config['db']['host'],
    $config['db']['user'],
    $config['db']['password'],
    $config['db']['database']
  );
  
  function getItem($sql) {
    // получение одной строки
    global $connection;
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
  }
  
  function getItemArray($sql) {
    // получение нескольких строк
    global $connection;
    $result = mysqli_query($connection, $sql);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
    }
    return $rows;
  }
  
  function execute($sql) {
    // выполнение запроса (insert, update)
    global $connection;
    $result = mysqli_query($connection, $sql);
    return $result;
  }
?>
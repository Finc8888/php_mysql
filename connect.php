<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MySql test form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="red">
    <?php
    require 'app_config.php';
      mysql_connect(DATABASE_HOST,DATABASE_USERNAME,DATABASE_PASSWORD)
        or die("<h3>Ошибка подключения к базе данных ". mysql_error().
                "</h3>");
      echo "<h2> Вы подключились к MySql!</h2>";

      mysql_select_db(DATABASE_NAME)
        or die("<h3>Ошибка при выборе базы данных: ". DATABASE_NAME." ".
         mysql_error()."</h3>");
      echo "<h2> Вы подключились к MySql с использованием БД: ". DATABASE_NAME.
      "</h2>";
    ?>
  </div>
  <div class="green">
    <?php
    require 'app_config.php';
    $query = mysql_query("SHOW TABLES;");
      if (!$query) {
        die("<h3>Ошибка при выводе перечня таблиц: ". mysql_error().
                "</h3>");
      }
      echo "<h3> Таблицы, имеющиеся в базе данных:</h3>";
      echo "<ul>";
      while($row = mysql_fetch_row($query)){
        echo "<li>Таблица:{$row[0]}</li>";
      }
      echo "</ul>";
    ?>
  </div>

</body>

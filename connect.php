<!doctype html>
<html>
  <head>
    <title>MySql test</title>
    <meta charset="utf-8">
  </head>
  <body style="color: red">
    <?php
    mysql_connect("localhost","root","m31415926")
      or die("<h3>Ошибка подключения к базе данных ". mysql_error.
              "</h3>");
    echo "<h2> Вы подключились к MySql!</h2>";
    ?>
  </body>

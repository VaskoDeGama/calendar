<?
$hostname = "localhost"; // название/путь сервера, с MySQL
$username = "root"; // имя пользователя (в Denwer`е по умолчанию "root")
$password = ""; // пароль пользователя (в Denwer`е по умолчанию пароль отсутствует, этот параметр можно оставить пустым)
$dbName = "calendar"; // название базы данных

/* Создаем соединение */
$connect = mysql_connect($hostname, $username, $password) or die ("Не могу создать соединение");
mysql_query('SET NAMES utf8') or header('Location: Error');

/* Выбираем базу данных. Если произойдет ошибка - вывести ее */
mysql_select_db($dbName) or die (mysql_error());
?>
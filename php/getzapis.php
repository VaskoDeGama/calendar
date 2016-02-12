<?

include '../php/config.php';
$date = $_GET['date'];

$result = mysql_query("SELECT text FROM zapisi WHERE data = '$date'");
if (!$result) {
    die('Неверный запрос: ' . mysql_error());
}

while($row = mysql_fetch_array($result))
{
	echo "<br>";
	echo "<div class= 'textzapis' id='dd'><p>{$row['text']}</p></div>";

}

?>
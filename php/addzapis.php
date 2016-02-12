<?
	include '../php/config.php';

	$text = $_POST['text'];
    $date = $_POST['date'];

	if ($text != "" & $date != "" ) {
 
	$query = "INSERT INTO zapisi (`text`, `data`) VALUES ('$text', '$date')";
	$result = mysql_query($query) or die ("<p>ошибка запроса</p>");
	}

?>
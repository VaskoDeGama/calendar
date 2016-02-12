
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" href="img/vcalendar_2597.ico">
 	 <link rel="icon" href="img/vcalendar_2597.ico">
 	 <link rel="stylesheet" type="text/css" href="css/style.css">
 	 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 	 <script type="text/javascript" src='js/calendar.js'></script>
 	 <script type="text/javascript" src='js/jquery.json.js'></script>
<!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
	<meta charset="UTF-8">
	<title>Черников Е.Д| Календарь Органайзер</title>
</head>
<body>
	<?
 include 'php/config.php';
?>

     <!-- Header -->
		<H1><bold>Каледарь Органайзер</bold></H1>

	

	<!-- Календарь -->
 	<div class="content shadow">
	 	<?
	 		include 'php/calendar.php';
	 	?>
	</div>
	<!-- Добавление заметки-->

	<div class="left shadow">
		<form align = 'center'>
   <p>Добавить заметку</p>
   <p><textarea class="dateinput" id="text" rows="10" cols="10" name="text"></textarea></p>
   <p id='err_text' class='red'></p>
   <p><input class="dateinput" type="date" name="date" id="date"></p>
   <p id='err_date' class='red'></p>
   <p><input class="dateinput" type="submit" name="submit"></p>
  </form>
	</div>
	<!-- Нивигация снизу-->
	<div class="content shadow" >
	 	<?
	 		include 'php/back.php';
	 	?>
	</div>



<?
	 		include 'php/query.php';
	 	?>



			<!-- Задний прозрачный фон-->
		<div onclick="closed('none')" id="wrap"></div>

					<!-- Само окно-->
			<div id="window" class='shadow'>
						
						 <!-- Картинка крестика-->
				<img class="close" onclick="closed('none')" src="../img/close.png">
			
			</div>

		
</script>
</body>
</html>
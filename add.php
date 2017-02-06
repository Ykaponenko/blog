<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>add articles</title>
</head>
<body>

<form method="post" action="add.php">

Назва статті<br> 
<input type="text" name="title"><br>
Контент<br>
<textarea cols="40" rows="10" name="textarea" ></textarea> <br>
<input type="hidden" name="date" value="<?php echo date('Y-m-d'); ?> "> <br><br>
<input type="submit" name="add" value="Відправити">


</form>

<?php
	include_once("database.php");


if(isset($_POST['add']))
{
	$title = strip_tags(trim($_POST['title']));
	$content = strip_tags(trim($_POST['textarea']));
	$date = $_POST['date'];

	$result = mysql_query("
			    				INSERT INTO topic1(title, content, date) 
			    		 		VALUES ('$title', '$content', '$date')  
						 ");
	mysql_close();
	echo "Стаття успішно додана";
}
?> 
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Blog</title>
</head>
<body>
<a href="add.php">Додати статтю</a>
<?php 
	include_once("database.php");

		$result = mysql_query(" SELECT title, content, date
			 					FROM topic1  
			 					ORDER BY id DESC" ); //("SELECT * FROM topic1 ORDER BY id DESC LIMIT 2")
																	 //("SELECT * FROM topic1 WHERE samething = 'something' (author - 'yura')  ORDER BY id DESC")

	mysql_close();

	while ($row = mysql_fetch_array($result)) :		?>
		<h1><?php echo $row['title']?></h1> 
		<em>Дата : <?php echo $row['date']?></em>
		<p><?php echo $row['content']?></p>
		<hr>

	<?php endwhile ?>

	
	

</body>
</html>
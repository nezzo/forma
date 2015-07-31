<?php
session_start()
?>
<html>
<head>
<title>Личный кабинет</title>
</head>
<body>
<center><h4>Данные пользователя</h4></center>
	<?php 

// Подключаем сессию и берем данный логин при регистрации  из базы, выводим всю инфу о пользователи!

		require_once('bd.php');
		$res = mysql_query("SELECT * FROM `user` WHERE login = '$_SESSION[login]'");
		while ($row = mysql_fetch_array($res))
				{
					echo "Ваш ID:"." ".$row['id']."</br>", "Ваша эл. почта:"." ".$row['mail']."</br>", 
					"Ваше Имя:"." ".$row['fio']."</br>", "Ваш Логин:"." ".$row['login']."</br>",
					"Дата регистрации:"." ".$row['date_reg']."<br>";
				}

	?>
<form action ="exit.php" method = "post">
<tr>
	<td align="right" colspan="2">
	<input type = "submit" name="submit" value= "Выйти">
	</td>
</tr>
</form>
</body>
</html> 
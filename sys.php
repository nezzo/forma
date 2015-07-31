<?php session_start();

require_once ('bd.php');

// Проверяем данные которые вносятся при входе в личный кабинет!

if (isset($_POST['login']))
	{
		$login = $_POST['login'];
		
	}
	
if ($login =='')
	{
	 unset ($login);
	}
	

if (isset($_POST['pass']))
	{
		$pass = $_POST['pass'];
		
	}
        
        
if ($pass =='')
	{
	 unset ($pass);
	}
          
         	
   
// Проверяем логин и пасс на правильность и создаем сессию для входа!
   
if (empty ($login) or empty ($pass))
	{
		exit ("Вы не ввели логин или пароль");
	}
	$login = stripslashes ($login);
	$login = htmlspecialchars($login);
	$login = trim ($login);
	
	$pass = stripslashes ($pass);
	$pass = htmlspecialchars($pass);
	$pass = trim ($pass);
	


$res = mysql_query("SELECT * FROM `user`WHERE  login = '$login'");

$row = mysql_fetch_array($res);



if (empty ($row['pass']))
	{
		exit ("Данного пользователя нету в системе");
	}else
	{
	
	    if (password_verify($pass, $row['pass']))
		{
		   $_SESSION['login'] = $row['login'];
		    $_SESSION['id'] = $row['id'];
                    
                    echo "Вы удачно авторизировались, перейти в <a href='room.php'>Личный кабинет</a>";
		} 
                else
		{
			exit ("Извините но пароль или логин не верный");
		}
	}
        
?>
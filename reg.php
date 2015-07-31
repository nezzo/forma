 <?php

 // Проверка на ввод корректных  данных!
 
require_once ('bd.php');

if (isset ($_POST['fio']) )
		{
			$fio = $_POST['fio'];
			if ($fio == '')
			{
				unset ($fio);
			}
		}

	if (isset ($_POST['mail']) )
		{
			$mail = $_POST['mail'];
			if ($mail == '')
			{
				unset ($mail);
			}
		}



	if (isset ($_POST['login']) )
		{
			$login = $_POST['login'];
			if ($login == '')
			{
				unset ($login);
			}
		}

	
	if  (isset ($_POST ['pass']))
		{
			$pass = $_POST['pass'];
			if($pass == '')
			{
				unset ($pass);
			}
		}
		
	if  (isset ($_POST ['pass1']))
		{
			$pass1 = $_POST['pass1'];
			if($pass1 == '')
			{
				unset ($pass1);
			}
		}	
		
	
	if ($pass == $pass1)
		{
			$pass2 = $pass;
		}else
		{
			exit ("Пароли не совпадают, повторите попытку!");
		}
		
if (empty ($login) or empty ($pass2)  or empty ($fio) or empty ($mail))
	{
		exit ("Вы ввели не  всю информацию, пожалуйста заполните все поля!");
	}
$fio = stripslashes ($fio);
$fio = htmlspecialchars($fio);
$fio = trim ($fio);	

$mail = trim ($mail);
if (!preg_match('/^([a-z0-9])(\w|[.]|-|_)+([a-z0-9])@([a-z0-9])([a-z0-9.-]*)([a-z0-9])([.]{1})([a-z]{2,4})$/is', $_POST['mail'])) return false;
	
$login = stripslashes ($login);
$login = htmlspecialchars($login);
$login = trim ($login);
if (strlen($_POST['login']) < 5) return false;// не меньше 4 символов логин

$pass2 = stripslashes ($pass2);
$pass2 = htmlspecialchars($pass2);
$pass2 = trim ($pass2);
if (strlen($_POST['pass']) < 5) return false; //не меньше 5 символов пароль
$pass2 = password_hash($pass2, PASSWORD_BCRYPT);

$date_reg = date('Y:m:d  H:i');

$res = mysql_query("SELECT `id`, `pass`, `login` FROM `user` WHERE  'login' = '$login'");
$row = mysql_fetch_array ($res);

if (!empty ($row['id']))
	{
		exit ("Данный пользователь уже зарегестирован!");
	}else
	{
          
          $res1 =mysql_query("INSERT INTO user (login,pass,mail,fio,date_reg) VALUE ('$login', '$pass2','$mail', '$fio', '$date_reg')");
	
            
        }
        
if ($res1 == 'TRUE')
	{			
		return raport ();
	  
	   
		
	}else 
		{
			echo "Ошибка, вы не зарегестрированы";
		}
	
  


//Функция провери  на расширение, что бы на серв не залили другой файл !  
  
function  raport ()	
{
	$ext = strtolower(substr(strrchr($_FILES['img']['name'],'.'), 1));

	if  (in_array($ext, array('jpeg','gif','jpg')))
		{
			return upload ();
		}else
	{
		echo "<br>";
	    echo "Файл не был загружен на сервер!";	
		echo "<br>";
		echo "<a href = 'index.html'>Войти в систему</a></br>";
		echo "</br>";
     }

}	
	

//Функция по загрузке картинки на сервер!	
	
function upload ()
{
		$uploads_dir = 'E:\Apache\htdocs\s\site\img';
		$temp = $_FILES['img']['tmp_name']; 
		@$name_file = $_FILES['img'].date('YmdHi').'.jpg';
		move_uploaded_file($temp,"$uploads_dir/$name_file");
		
		echo "<h3>Информация о загруженном на сервер файле: </h3>";
		echo "<p><b>Оригинальное имя загруженного файла: ".$_FILES['img']['name']."</b></p>";
		echo "<p><b>Mime-тип загруженного файла: ".$_FILES['img']['type']."</b></p>";
		echo "<p><b>Размер загруженного файла в байтах: ".$_FILES['img']['size']."</b></p>";
		echo "<p><b>Временное имя файла: ".$_FILES['img']['tmp_name']."</b></p>"; 
		echo "Вы зарегестрированы!<a href = 'index.html'>Войти в систему</a></br>";

}

	
?>



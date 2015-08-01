 <?php

 // Проверка на ввод корректных  данных!
 require_once ('bd.php');

 Class Reg{
     public $fio;
     public $mail;
     public $login;
     public $pass;
     public $pass1;
     public $pass2;


     /*Получение, проверка данных на коректность*/
     function proverka_danux(){

         if (isset ($_POST['fio']) )
         {
             $this->fio = $_POST['fio'];
             if ($this->fio == '')
             {
                 unset ($this->fio);
             }
         }
         if (isset ($_POST['mail']) )
         {
             $this->mail = $_POST['mail'];
             if ($this->mail == '')
             {
                 unset ($this->mail);
             }
         }
        if (isset ($_POST['login']) )
         {
             $this->login = $_POST['login'];
             if ($this->login == '')
             {
                 unset ($this->login);
             }
         }
         if  (isset ($_POST ['pass']))
         {
             $this->pass = $_POST['pass'];
             if($this->pass == '')
             {
                 unset ($this->pass);
             }
         }
        if  (isset ($_POST ['pass1']))
         {
             $this->pass1 = $_POST['pass1'];
             if($this->pass1 == '')
             {
                 unset ($this->pass1);
             }
         }
         if ($this->pass == $this->pass1)
         {
             $this->pass2 = $this->pass;
         }else
         {
             exit ("Пароли не совпадают, повторите попытку!");
         }
         if (empty ($this->login) or empty ($this->pass2)  or empty ($this->fio) or empty ($this->mail)){
             exit ("Вы ввели не  всю информацию, пожалуйста заполните все поля!");
         }

         $this->login = stripslashes ($this->login);
         $this->login = htmlspecialchars($this->login);
         $this->login = trim ($this->login);
         $this->mail = trim ($this->mail);
         if (!preg_match('/^([a-z0-9])(\w|[.]|-|_)+([a-z0-9])@([a-z0-9])([a-z0-9.-]*)([a-z0-9])([.]{1})([a-z]{2,4})$/is', $_POST['mail'])) return false;

         if (strlen($_POST['login']) < 5) return false;// не меньше 4 символов логин
         $this->pass2 = stripslashes ($this->pass2);
         $this->pass2 = htmlspecialchars($this->pass2);
         $this->pass2 = trim ($this->pass2);
         if (strlen($_POST['pass']) < 5) return false; //не меньше 5 символов пароль
         $this->pass2 = password_hash($this->pass2, PASSWORD_BCRYPT);
         $date_reg = date('Y:m:d  H:i');
         $pdo = new BD();
         $pdo->connect();
         $res = $pdo->query("SELECT `id`, `pass`, `login` FROM `users` WHERE  'login' = '$this->login'");
         $row = $res->fetch();

         if (!empty ($row['id'])){
             exit ("Данный пользователь уже зарегестирован!");
         }else{
             $res1 = mysql_query("INSERT INTO user (login,pass,mail,fio,date_reg) VALUE ('$login', '$pass2','$mail', '$fio', '$date_reg')");
         }


     }












///END CLASS
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



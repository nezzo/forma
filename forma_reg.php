<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
<script type ="text/javascript"  src="/s/site/js/func.js"></script>
</head>
<body>
<form  action = "reg.php"  method = "post"  enctype="multipart/form-data" onsubmit="validate(this);return false;" >       
	 <table  border="0" cellspacing ="5" cellspacing ="5" >	
		<caption>Регистрация</caption>
	Сменить язык: <a href = "forma_reg1.php">EN</a>
	<tr>
			<td align="right" valign="top">Имя:</td>
			<td><input name ="fio" type="text" id="fio"></td>
	</tr>
	<tr>	
			<td align="right" valign="top">Почта:</td> 
			<td><input name ="mail" type="text" id="mail"></td>
	 </tr>
	<tr>	
			<td align="right" valign="top">Логин (не менее 4 символов):</td> 
			<td><input name = "login" type="text" id="login"></td>
	 </tr>
	 <tr>
			<td align="right" valign="top">Пароль(не менее 5 символов):</td> 
			<td><input  name ="pass" type="password" id="pass"></td>
	 </tr>
	 <tr>
			<td align="right" valign="top">Повторите пароль:</td>
			<td><input  name= "pass1" type="password" id="pass1"></td>
	</tr>
       <tr>
			<td align="right" valign="top">Загрузить  картинку:</td>
			<td><input type ="file" name="img"></td>
</tr>
<tr>
			<td align="right" colspan="2">
			<input type = "submit" name="submit" value= "Отправить">
			<input type ="submit" name= "reset" value = "Удалить">
</td>
</tr>
</table>
    </form>
</body>
</html>
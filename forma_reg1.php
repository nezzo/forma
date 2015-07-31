<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
<script type ="text/javascript"  src="/s/site/js/func.js"></script>
</head>
<body>
<form  action = "reg.php"  method = "post"  enctype="multipart/form-data"  onsubmit="en(this);return false;">       
	 <table  border="0" cellspacing ="5" cellspacing ="5" >	
		<caption>Registration</caption>
		Change Language: <a href = "forma_reg.php">RU</a>
	<tr>
			<td align="right" valign="top">Name:</td>
			<td><input name ="fiox" type="text" id="fiox"></td>
	</tr>
	<tr>	
			<td align="right" valign="top">Email:</td> 
			<td><input name ="mail" type="text" id="mailx"></td>
	 </tr>
	<tr>	
			<td align="right" valign="top">Username (at least 4 characters):</td> 
			<td><input name = "login" type="text" id="loginx"></td>
	 </tr>
	 <tr>
			<td align="right" valign="top">Password (at least 5 characters):</td> 
			<td><input  name ="pass" type="password" id="passx"></td>
	 </tr>
	 <tr>
			<td align="right" valign="top">Repeat password:</td>
			<td><input  name= "pass1" type="password" id="passs"></td>
	</tr>
       <tr>
			<td align="right" valign="top">Upload picture:</td>
			<td><input type ="file" name="img"></td>
</tr>

<tr>
			<td align="right" colspan="2">
			<input type = "submit" name="submit" value= "Enter">
			<input type ="submit" name= "reset" value = "Delete">
</td>
</tr>
</table>
    </form>
</body>
</html>
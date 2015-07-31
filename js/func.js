
         //Валидация почты!
		 
        function validateEmail (mail) {
            var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(mail);
        }
        function fail(text) {alert (text);}
        function success() {alert('ok');}
		
		//Валидация и верификация введенных  данных от пользователя!
		
        function validate()
        {
			if (document.getElementById('fio').value.length < 2) {fail('Введите свое имя!'); return false;}
		   else if (document.getElementById('login').value.length < 4) {fail('Пожалуйста введите логин!'); return false;}
		   else if (document.getElementById('pass').value.length < 5) {fail('Введите пароль!'); return false;}
		   else if (document.getElementById('pass1').value.length < 5) {fail('Повторите пароль!'); return false;}
           else if (document.getElementById('pass').value !== document.getElementById('pass1').value) {fail('Пароли не совпадают!'); return false;}
           else if (!validateEmail(document.getElementById('mail').value)) {fail('Пожалуйста введите эл.почту'); return false;}
           else {
                f.submit();
            };
			
		
       }

	   
//  Проверяем данные для входа!
	   
function vxod () 
	{
	 if (document.getElementById('login').value.length < 4) {fail('Пожалуйста введите логин!'); return false;}
	else if (document.getElementById('pass').value.length < 5) {fail('Введите пароль!'); return false;}
	else {
                f.submit();
            };
	}
	
// Англиская версия проверки на  ввод данных!
function en()
   {
     
    if (document.getElementById("fiox").value.length < 2){ alert("Please enter your name!"); return false;}
			else if (document.getElementById('loginx').value.length < 4) {fail('Please login!'); return false;}
		   else if (document.getElementById('passx').value.length < 5) {fail('Enter the password!'); return false;}
		   else if (document.getElementById('passs').value.length < 5) {fail('Repeat password!'); return false;}
           else if (document.getElementById('passx').value !== document.getElementById('passs').value) {fail('Passwords do not match!'); return false;}
           else if (!validateEmail(document.getElementById('mailx').value)) {fail('Please enter your e-mail here!'); return false;}
           else {
                f.submit();
            };
			
    }	
	

 
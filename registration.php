<html>
  <head>
   <title>Регистрация</title>
   <meta charset="utf-8"/>
   <style>
    input,button{
	    width:200px;
		  margin: 5px;
		  text-align:center;
	}
    

   </style>
   </head>
  
  <body>
     <a href="index1.html">Домашняя страница</a>
     <h1>Регистрируемся, не стесняемся ;)</h1>
	  <form method="POST" action="check_registration.php"> 
	  <a>Имя пользователя</a><br/>   <input type="text" name="txtUser"/><br/>
    <a>Ваш e-mail</a><br/>         <input type="text" name="txtMail"/><br/>
	  <a>Пароль</a><br/>             <input type="password" name="txtPwd"/><br/>
    <a>Подтвердите пароль</a><br/> <input type="password" name="txtPwd_doubler"/><br/>
	  <button>Нажмите, чтобы зарегистрироваться </button><br/>
	  <em>Автор: Семён Миронов, группа Cyb-4</em>
  </form>
	 
  </body>
</html>
	
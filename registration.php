<html>
  <head>
   <title>Registration</title>
   <meta charset="utf-8"/>
   <style>
    input,button{
	    width:150px;
		  margin: 5px;
		  text-align:center;
	}
   </style>
   </head>
  
  <body>
     <a href="index1.html">Домашняя страница</a>
     <h1>Регистрируемся, не стесняемся</h1>
	 <form method="POST" action="check_login.php"> 
	  <input type="text" name="txtUser"/><br/>
      <input type="text" name="txtMail"/><br/>
	  <input type="password" name="txtPwd"/><br/>
      <input type="confirmpassword" name="txtConfirmPwd"
	  <button>Зарегистрироваться</button><br/>
	 </form>
	 
  </body>
</html>
	
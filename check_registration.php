<?php
session_start(); 

$user=$_REQUEST["txtUser"]; 
$email=$_REQUEST["txtMail"];
$pwd=$_REQUEST["txtPwd"];
$pwd_doubler=$_REQUEST["txtPwd_doubler"];
$hash=hash("sha256",$pwd);

if ($pwd=$pwd_doubler){ 
$server=getenv("cyb4_db_server");
$login=getenv("cyb4_db_user");
$pwd=trim(getenv("cyb4_db_pwd"));
$conn=mysqli_connect($server,$login,$pwd,"mysql");
echo "<h2>Спасибо за регистрацию, вы перенаправляетесь на страницу авторизации.</h2>";
echo "<h1> Ваш Логин: $user</h1>";
echo "<h1> Ваш e-mail: $email</h1>";
echo '<meta http-equiv="refresh" content= "3; url=login.php"/>';
// Устраяем проблему SQL Injection
$sql = "INSERT INTO users(Login,PwdHash,Email) Values ('$user','$hash','$email')";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
}
else {
    
        echo "<h2>Пароли не совпадают, попробуйте ещё раз! :)</h2>";
        echo '<meta http-equiv="refresh" content="3; url=registration.php"/>';
}


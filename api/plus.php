<?php

$x=$_REQUEST["x"]; 
$y=$_REQUEST["y"];
$z=$x+$y; 
sleep(1); //симуляция задержки

// Здесь неарушегы все мыслимые нормы безопасности:
// 1. Слабый пароль
// 2. Нарушен принцип наименьших привилегий
// 3. Стандартный порт (3306)
// 4. Секрет в коде (в код вшит пароль, открытый код)
$conn=mysqli_connect("localhost:3306","root","","mysql");

// 5. Уязвимость для SQL Injection
$sql="INSERT INTO Calcs(Num1,Num2,User) VALUES($x,$y,'Anonym')";
mysqli_query($conn,$sql);
mysqli_close($conn); 

echo$z; 
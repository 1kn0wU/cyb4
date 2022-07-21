<?php
   session_start(); 
   echo '<meta http-equiv="refresh" content= "3; url=index1.html"/>';
   unset($_SESSION["user"]);
   die("Вы вышли из системы!");

?>

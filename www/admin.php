<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head><meta http-equiv="content-type" content="text/html; charset=UTF-8"/><meta name="generator" content="ABBYY FineReader 12"/><link rel="stylesheet" href="2_files/2.css" type="text/css"/>
</head>
 <style>
   h1 {
    background: white; /* Цвет фона под заголовком */
    display: inline;
    border-radius: 10px;
     font-size: 14pt;
   }

body {
  -webkit-background-size: 100%;
  -o-background-size: 100%;
  background-size: 100%;
  -moz-background-size: 100%;
   }
  </style>
<body>



<br>


<form method="post" action="admin.php">


<p>Логин:</p><input type="text" name="username" /> 
<p>Пароль:</p><input type="text" name="password" /><br></br>
<input type="submit" name="admin" value="Вход" /><br><br> 


<?php

include_once("db.php");


if(isset($_POST['admin']))
{
    print_r($_FILES);
    $username = strip_tags(trim($_POST['username']));
	$password = strip_tags(trim($_POST['password']));
	
	
	mysql_query(" 
                    INSERT INTO admin(username, password)
                    VALUES ('$username', '$password') 
    ");
	
mysql_close();
}
	?>
	<p align="center"> <font size="6"> <a href="glav.php"> На главную </a></font></p>
	<p align="center"> <font size="6"> <a href="testy.php"> Назад </a></font></p>
</body>
</html>
<!doctype html>
<html>
<head>
	<title>Ответы</title>
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
</head>

<body  background="img/o_na.jpg">
<h1>Список студентов и их ответов решивших второй вариант теста :</h1><br><br>


<?php
include_once("db.php");

$author = "";
$s_author = "";
$limit = 50;

$result = mysql_query("  SELECT id, title, title1, date, time,  o21, o22, o23, o24, o25, o26, o27, o28, o29, o30,o31,o32,o33,o34,o35,o36,o37,o38,o39,o40, o98 
                        FROM newsa1
                        ORDER BY id DESC 
                        LIMIT $limit
");

mysql_close();

while($row = mysql_fetch_assoc($result))
{?>
<div class="article">


<?php echo $row['title']; ?>&nbsp;&nbsp;
<?php echo $row['title1']; ?>&nbsp;&nbsp;
<h1>1: </h1><?php echo $row['o21']; ?>&nbsp;&nbsp;
<h1>2: </h1><?php echo $row['o22']; ?>&nbsp;&nbsp;
<h1>3: </h1><?php echo $row['o23']; ?>&nbsp;&nbsp;
<h1>4: </h1><?php echo $row['o24']; ?>&nbsp;&nbsp;
<h1>5: </h1><?php echo $row['o25']; ?>&nbsp;&nbsp;
<h1>6: </h1><?php echo $row['o26']; ?>&nbsp;&nbsp; 
<h1>7: </h1><?php echo $row['o27']; ?>&nbsp;&nbsp;
<h1>8: </h1><?php echo $row['o28']; ?>&nbsp;&nbsp;
<h1>9: </h1><?php echo $row['o29']; ?>&nbsp;&nbsp;
<h1>10: </h1><?php echo $row['o30']; ?>&nbsp;&nbsp;
<h1>11: </h1><?php echo $row['o31']; ?>&nbsp;&nbsp;
<h1>12: </h1><?php echo $row['o32']; ?>&nbsp;&nbsp;
<h1>13: </h1><?php echo $row['o33']; ?>&nbsp;&nbsp;
<h1>14: </h1><?php echo $row['o34']; ?>&nbsp;&nbsp;
<h1>15: </h1><?php echo $row['o35']; ?>&nbsp;&nbsp;
<h1>16: </h1><?php echo $row['o36']; ?>&nbsp;&nbsp; 
<h1>17: </h1><?php echo $row['o37']; ?>&nbsp;&nbsp;
<h1>18: </h1><?php echo $row['o38']; ?>&nbsp;&nbsp;
<h1>19: </h1><?php echo $row['o39']; ?>&nbsp;&nbsp;
<h1>20: </h1><?php echo $row['o40']; ?>&nbsp;&nbsp;
<h1>Количество баллов: </h1><?php echo $row['o98']; ?>&nbsp;&nbsp;


</div>
<?php 
}?>

</form>
<p align="center"> <font size="6"><a href="spisok.php">Назад</a></p></font>
<p align="center"> <font size="6"><a href="glav.php">На главнвую</a></p></font>
</body>
</html>
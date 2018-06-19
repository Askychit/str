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
<h1>Список студентов и их ответов решивших третий вариант теста :</h1><br><br>


<?php
include_once("db.php");

$author = "";
$s_author = "";
$limit = 50;

$result = mysql_query("  SELECT id, title, title1, date, time,  o41, o42, o43, o44, o45, o46, o47, o48, o49, o50,o51,o52,o53,o54,o55,o56,o57,o58,o59,o60, o97 
                        FROM new
                        ORDER BY id DESC 
                        LIMIT $limit
");

mysql_close();

while($row = mysql_fetch_assoc($result))
{?>
<div class="article">


<?php echo $row['title']; ?>&nbsp;&nbsp;
<?php echo $row['title1']; ?>&nbsp;&nbsp;
<h1>1: </h1><?php echo $row['o41']; ?>&nbsp;&nbsp;
<h1>2: </h1><?php echo $row['o42']; ?>&nbsp;&nbsp;
<h1>3: </h1><?php echo $row['o43']; ?>&nbsp;&nbsp;
<h1>4: </h1><?php echo $row['o44']; ?>&nbsp;&nbsp;
<h1>5: </h1><?php echo $row['o45']; ?>&nbsp;&nbsp;
<h1>6: </h1><?php echo $row['o46']; ?>&nbsp;&nbsp; 
<h1>7: </h1><?php echo $row['o47']; ?>&nbsp;&nbsp;
<h1>8: </h1><?php echo $row['o48']; ?>&nbsp;&nbsp;
<h1>9: </h1><?php echo $row['o49']; ?>&nbsp;&nbsp;
<h1>10: </h1><?php echo $row['o50']; ?>&nbsp;&nbsp;
<h1>11: </h1><?php echo $row['51']; ?>&nbsp;&nbsp;
<h1>12: </h1><?php echo $row['o52']; ?>&nbsp;&nbsp;
<h1>13: </h1><?php echo $row['o53']; ?>&nbsp;&nbsp;
<h1>14: </h1><?php echo $row['o54']; ?>&nbsp;&nbsp;
<h1>15: </h1><?php echo $row['o55']; ?>&nbsp;&nbsp;
<h1>16: </h1><?php echo $row['o56']; ?>&nbsp;&nbsp; 
<h1>17: </h1><?php echo $row['o57']; ?>&nbsp;&nbsp;
<h1>18: </h1><?php echo $row['o58']; ?>&nbsp;&nbsp;
<h1>19: </h1><?php echo $row['o59']; ?>&nbsp;&nbsp;
<h1>20: </h1><?php echo $row['o60']; ?>&nbsp;&nbsp;
<h1>Количество баллов: </h1><?php echo $row['o97']; ?>&nbsp;&nbsp;


</div>
<?php 
}?>

</form>
<p align="center"> <font size="6"><a href="spisok.php">Назад</a></p></font>
<p align="center"> <font size="6"><a href="glav.php">На главнвую</a></p></font>
</body>
</html>
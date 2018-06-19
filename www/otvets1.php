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
<h1>Список студентов и их ответов решивших первый вариант теста :</h1><br><br>


<?php
include_once("db.php");

$author = "";
$s_author = "";
$limit = 50;

$result = mysql_query("  SELECT id, title, title1, date, time,  o1, o2, o3, o4, o5, o6, o7, o8, o9, o10,o11,o12,o13,o14,o15,o16,o17,o18,o19,o20, o99 
                        FROM newsa
                        ORDER BY id DESC 
                        LIMIT $limit
");

mysql_close();

while($row = mysql_fetch_assoc($result))
{?>
<div class="article">


<?php echo $row['title']; ?>&nbsp;&nbsp;
<?php echo $row['title1']; ?>&nbsp;&nbsp;
<h1>1: </h1><?php echo $row['o1']; ?>&nbsp;&nbsp;
<h1>2: </h1><?php echo $row['o2']; ?>&nbsp;&nbsp;
<h1>3: </h1><?php echo $row['o3']; ?>&nbsp;&nbsp;
<h1>4: </h1><?php echo $row['o4']; ?>&nbsp;&nbsp;
<h1>5: </h1><?php echo $row['o5']; ?>&nbsp;&nbsp;
<h1>6: </h1><?php echo $row['o6']; ?>&nbsp;&nbsp; 
<h1>7: </h1><?php echo $row['o7']; ?>&nbsp;&nbsp;
<h1>8: </h1><?php echo $row['o8']; ?>&nbsp;&nbsp;
<h1>9: </h1><?php echo $row['o9']; ?>&nbsp;&nbsp;
<h1>10: </h1><?php echo $row['o10']; ?>&nbsp;&nbsp;
<h1>11: </h1><?php echo $row['o11']; ?>&nbsp;&nbsp;
<h1>12: </h1><?php echo $row['o12']; ?>&nbsp;&nbsp;
<h1>13: </h1><?php echo $row['o13']; ?>&nbsp;&nbsp;
<h1>14: </h1><?php echo $row['o14']; ?>&nbsp;&nbsp;
<h1>15: </h1><?php echo $row['o15']; ?>&nbsp;&nbsp;
<h1>16: </h1><?php echo $row['o16']; ?>&nbsp;&nbsp; 
<h1>17: </h1><?php echo $row['o17']; ?>&nbsp;&nbsp;
<h1>18: </h1><?php echo $row['o18']; ?>&nbsp;&nbsp;
<h1>19: </h1><?php echo $row['o19']; ?>&nbsp;&nbsp;
<h1>20: </h1><?php echo $row['o20']; ?>&nbsp;&nbsp;
<h1>Количество баллов: </h1><?php echo $row['o99']; ?>&nbsp;&nbsp;

</div>
<?php 
}?>

</form>
<p align="center"> <font size="6"><a href="spisok.php">Назад</a></p></font>
<p align="center"> <font size="6"><a href="glav.php">На главнвую</a></p></font>
</body>
</html>
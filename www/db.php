<?php

$connection = mysql_connect("localhost", "root", "");
$testir = mysql_select_db("testir");
mysql_query(" SET NAMES 'utf8' "); // mysql_set_charset("utf8");

if(!$connection || !$testir)
{
    exit(mysql_error());
}

?>
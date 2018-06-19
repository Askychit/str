<?php

define("HOST", "localhost");
define("USER", "root");
define("PASS", "");
define("DB", "testir");

$zz = @mysqli_connect(HOST,USER,PASS,ZZ) or die ('Нет соед');
mysqli_set_charset($db, 'utf8') or die('нет кодировки');




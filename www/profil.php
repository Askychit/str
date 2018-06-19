<? php


$login = $_POST['login'];
$password = $_POST['password'];
	if(isset($_POST['sub']))
	{
		$q = mysql_query("SELECT * FROM Admin WHERE log='$log'");
		$r = mysql_fetch_array($q);
		
		if($pass == $r['password'])
		
		{
				echo "Вход прошёл успешно".$r['login'];
		}
		else
		{
			echo "Лог и пар не верный";
		}
	}














?>
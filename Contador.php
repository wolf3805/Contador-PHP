<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php


if (isset($_COOKIE['contador'])) {
	setcookie('contador', $_COOKIE['contador']+1,time()+60);
	echo "Numero de visitas: ".$_COOKIE['contador'];
}
else
{
	setcookie('contador',1,time()+60);
	echo "Bienvenido al navegador por primera vez";
}



?>
</body>
</html>
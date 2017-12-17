<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Contador de visitas</h1>

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
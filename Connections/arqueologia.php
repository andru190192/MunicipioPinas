<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_arqueologia = "localhost";
$database_arqueologia = "arqueologiabd";
$username_arqueologia = "root";
$password_arqueologia = "";
$arqueologia = mysql_pconnect($hostname_arqueologia, $username_arqueologia, $password_arqueologia) or trigger_error(mysql_error(),E_USER_ERROR);

$mysqli = new mysqli("localhost", "root", "", "arqueologiabd");

// 2- Verificar si se ha producido o no la conexión
if ($mysqli->connect_error)
{
    printf("<hr>Connect failed (Err. nº %d): %s<hr/>", $mysqli->connect_errno, $mysqli->connect_error);
    exit();
}

// 3- Establecimiento del formato de codificación de caracteres UTF-8
if(!$mysqli->set_charset("utf8"))
{
	printf("<hr>Error loading character set utf8 (Err. nº %d): %s\n<hr/>",	$mysqli->errno, $mysqli->error);
	exit();
} 
?>
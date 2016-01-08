<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_arqueologia = "localhost";
$database_arqueologia = "arqueologiabd";
$username_arqueologia = "root";
$password_arqueologia = "";
$arqueologia = mysql_pconnect($hostname_arqueologia, $username_arqueologia, $password_arqueologia) or trigger_error(mysql_error(),E_USER_ERROR); 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
@session_start();
if(@$_GET["cerrar"])
{
	session_destroy();
	header("location: login.php");
}
if(!empty($_SESSION['usuario']))
{
	?>
    <a href="index.php?cerrar=session">Cerrar session(<?php echo $_SESSION['usuario']; ?>)</a>
	<?php

}else
echo "Acceso denegado";
?>
</body>
</html>

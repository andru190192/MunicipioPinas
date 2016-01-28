<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/plantillaadmin.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Administraci&oacute;n Pi&amp;nacute;as Arqueologica</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<link href="../css/estiloadmin.css" rel="stylesheet" type="text/css" />
</head>

<body>


  <?php
  @session_start();
  if(@$_GET["cerrar"])
  {
  	session_destroy();
  	header("location: login/login.php");
  }
  if(!empty($_SESSION['usuario']))
  {
  	?>
      <a href="index.php?cerrar=session">Cerrar session(<?php echo $_SESSION['usuario']; ?>)</a>
  	<?php

  }else
  echo "Acceso denegado";
  ?>



<div class="container">
  <div class="header"><?php include("../includes/cabecera_admin.php"); ?></div>
  <div class="sidebar1">
  <?php include("../includes/menuizquierda_admin.php"); ?>

    <p>&nbsp;</p>
  </div>
  <div class="content"><!-- InstanceBeginEditable name="Partederechaadmin" -->
    <h1>Bienvenido a la Administraci&oacute;n</h1>
  <!-- InstanceEndEditable -->

    <!-- end .content --></div>
  <div class="footer">
    <?php include("../includes/pie_admin.php"); ?></div>
  <!-- end .container --></div>
</body>
<!-- InstanceEnd --></html>

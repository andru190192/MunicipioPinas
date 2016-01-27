<?php require_once('../Connections/arqueologia.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "")
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_arqueologia, $arqueologia);
$query_DatosSlider = "SELECT * FROM tblsitios ORDER BY id ASC";
$DatosSlider = mysql_query($query_DatosSlider, $arqueologia) or die(mysql_error());
$row_DatosSlider = mysql_fetch_assoc($DatosSlider);
$totalRows_DatosSlider = mysql_num_rows($DatosSlider);
?>
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

<div class="container">
  <div class="header"><?php include("../includes/cabecera_admin.php"); ?></div>
  <div class="sidebar1">
  <?php include("../includes/menuizquierda_admin.php"); ?>

    <p>&nbsp;</p>
  </div>
  <div class="content"><!-- InstanceBeginEditable name="Partederechaadmin" -->
     <script>
function asegurar()
{
   rc = confirm("Seguro que desea eliminar?");
   return rc;
}
</script>
    <h1>Lista de Publicidades</h1>
    <p><a href="sitio_add.php"><img src="images/icono_add.png" width="16" height="16" />A&ntilde;adir Sitio</a></p>
    <table width="100%" border="0" cellpadding="2" cellspacing="2">
      <tr class="tablacabecera">
        <td width="10%">Imagen 2</td
        <td width="10%">Titulo</td>
        <td width="20%">Resumen</td>
        <td width="5%">Url</td>
        <td width="5%">Estado</td>
        <td width="10%">Acciones</td>
      </tr>
      <?php do { ?>
      <tr>
          <td><?php echo $row_DatosSlider['imagen']; ?></td
          <td><?php echo $row_DatosSlider['titulo']; ?></td>
          <td><?php echo $row_DatosSlider['resumen']; ?></td>
          <td><?php echo $row_DatosSlider['url']; ?></td>
          <td><?php
		  if ($row_DatosSlider['intestado']== 1)
		  		echo "Activo";
		else
				echo "Inactivo"; ?></td>
          <td><a href="sitio_edit.php?recordID=<?php echo $row_DatosSlider['id']; ?>"><img src="images/icono_edit.png" width="16" height="16" /></a> <a href="sitio_remove.php?recordID=<?php echo $row_DatosSlider['id']; ?>"><img src="images/icono_remove.png" width="16" height="16" onclick="javascript:return asegurar();"/></a></td>
          </tr>
          <?php } while ($row_DatosSlider = mysql_fetch_assoc($DatosSlider)); ?>
     </table>
    <p>&nbsp;</p>
  <!-- InstanceEndEditable -->

    <!-- end .content --></div>
  <div class="footer">
    <?php include("../includes/pie_admin.php"); ?></div>
  <!-- end .container --></div>
</body>
<!-- InstanceEnd --></html>
<?php
mysql_free_result($DatosSlider);
?>

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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE tblvideos SET url=%s, titulo=%s, subtitulo=%s, imagen=%s, intestado=%s WHERE id=%s",
                       GetSQLValueString($_POST['url'], "text"),
                       GetSQLValueString($_POST['titulo'], "text"),
                       GetSQLValueString($_POST['subtitulo'], "text"),
                       GetSQLValueString($_POST['imagen'], "text"),
                       GetSQLValueString($_POST['intestado'], "int"),
                       GetSQLValueString($_POST['id'], "int"));

  mysql_select_db($database_arqueologia, $arqueologia);
  $Result1 = mysql_query($updateSQL, $arqueologia) or die(mysql_error());

  $updateGoTo = "video_lista.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$varDato_DatosSlider = "0";
if (isset($_GET[recordID])) {
  $varDato_DatosSlider = $_GET[recordID];
}
mysql_select_db($database_arqueologia, $arqueologia);
$query_DatosSlider = sprintf("SELECT * FROM tblvideos WHERE tblvideos.id =%s", GetSQLValueString($varDato_DatosSlider, "int"));
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
        function subirimagen(nombrecampo)
        {
        	self.name = 'opener';
        	remote = open('gestionimagen.php?campo='+nombrecampo, 'remote', 'width=400,height=150,location=no,scrollbars=yes,menubars=no,toolbars=no,resizable=yes,fullscreen=no, status=yes');
         	remote.focus();
        	}
      </script>
    <h1>Editar Video</h1>
    <p>&nbsp;</p>
    <form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
      <table align="center">
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Url:</td>
          <td><input type="text" name="url" value="<?php echo htmlentities($row_DatosSlider['url'], ENT_COMPAT, 'iso8859-1'); ?>" size="25"
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Titulo:</td>
          <td><input type="text" name="titulo" value="<?php echo htmlentities($row_DatosSlider['titulo'], ENT_COMPAT, 'iso8859-1'); ?>" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Subtitulo:</td>
          <td><input type="text" name="subtitulo" value="<?php echo htmlentities($row_DatosSlider['subtitulo'], ENT_COMPAT, 'iso8859-1'); ?>" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Imagen:</td>
          <td><input type="text" name="imagen" value="<?php echo htmlentities($row_DatosSlider['imagen'], ENT_COMPAT, 'iso8859-1'); ?>" size="25" /> <input type="button" name="button" id="button" value="Subir Imagen" onclick="javascript:subirimagen('imagen');"/></td>
        </tr
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Estado:</td>
          <td><select name="intestado">
            <option value="1" <?php if (!(strcmp(1, htmlentities($row_DatosSlider['intestado'], ENT_COMPAT, 'iso8859-1')))) {echo "SELECTED";} ?>>Activo</option>
            <option value="0" <?php if (!(strcmp(0, htmlentities($row_DatosSlider['intestado'], ENT_COMPAT, 'iso8859-1')))) {echo "SELECTED";} ?>>Desactivado</option>
          </select></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">&nbsp;</td>
          <td><a class="button" href="javascript:document.form1.submit();"><span>Actualizar Video</span></a></td>
        </tr>
      </table>
      <input type="hidden" name="MM_update" value="form1" />
      <input type="hidden" name="id" value="<?php echo $row_DatosSlider['id']; ?>" />
    </form>
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

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

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO tblslider (strimagengrande, strimagenpequena, strtitulo, strsubtitulo, strmenu, strlink, intorden, intestado) VALUES (%s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['strimagengrande'], "text"),
                       GetSQLValueString($_POST['strimagenpequena'], "text"),
                       GetSQLValueString($_POST['strtitulo'], "text"),
                       GetSQLValueString($_POST['strsubtitulo'], "text"),
                       GetSQLValueString($_POST['strmenu'], "text"),
                       GetSQLValueString($_POST['strlink'], "text"),
                       GetSQLValueString($_POST['intorden'], "int"),
                       GetSQLValueString($_POST['intestado'], "int"));

  mysql_select_db($database_arqueologia, $arqueologia);
  $Result1 = mysql_query($insertSQL, $arqueologia) or die(mysql_error());

  $insertGoTo = "slider_lista.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
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
    <h1>A&ntilde;adir Publicidad</h1>
    <p>&nbsp;</p>
    <form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
      <table align="center">
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Imagen Grande(734x250px):</td>
          <td><input type="text" name="strimagengrande" value="" size="32" /><input type="button" name="button" id="button" value="Subir Imagen" onclick="javascript:subirimagen('strimagengrande');"/></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Imagen Pequena(80x50px):</td>
          <td><input type="text" name="strimagenpequena" value="" size="32" /><input type="button" name="button" id="button" value="Subir Imagen" onclick="javascript:subirimagen('strimagenpequena');"/></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Titulo:</td>
          <td><input type="text" name="strtitulo" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Subtitulo:</td>
          <td><input type="text" name="strsubtitulo" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Menu:</td>
          <td><input type="text" name="strmenu" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Link:</td>
          <td><input type="text" name="strlink" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Orden:</td>
          <td><input type="text" name="intorden" value="" size="5" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Estado:</td>
          <td><label for="intestado"></label>
            <select name="intestado" id="intestado">
              <option value="1">Activo</option>
              <option value="0">Desactivado</option>
          </select></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">&nbsp;</td>
          <td>
          <a class="button" href="javascript:document.form1.submit();"><span>Insertar Slider</span></a>          </p></td>
        </tr>
      </table>
      <input type="hidden" name="MM_insert" value="form1" />
    </form>
    <p>&nbsp;</p>
  <!-- InstanceEndEditable -->
   
    <!-- end .content --></div>
  <div class="footer">
    <?php include("../includes/pie_admin.php"); ?></div>
  <!-- end .container --></div>
</body>
<!-- InstanceEnd --></html>

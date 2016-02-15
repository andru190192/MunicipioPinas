<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="icon" type="image/png" href="../tesis/images/favicon.png" />

    <title>Administracion</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <?php
    error_reporting(0);
    @session_start();
    if(@$_GET["cerrar"])
    {
    	session_destroy();
    	header("location: login/login.php");
    }
    if(!empty($_SESSION['usuario']))
    {
    	?>
      <section id="container" >
          <!--header start-->
          <header class="header black-bg">
                  <div class="sidebar-toggle-box">
                      <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
                  </div>
                <!--logo start-->
                <a href="index.php" class="logo"><b>Administracion</b></a>
                <!--logo end-->

                <div class="top-menu">
                	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="index.php?cerrar=session">Salir</a></li>
                	</ul>
                </div>
            </header>
          <!--header end-->

          <!--sidebar start-->
          <aside>
              <div id="sidebar"  class="nav-collapse ">
                  <!-- sidebar menu start-->
                  <ul class="sidebar-menu" id="nav-accordion">

                  	  <p class="centered"><a><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                  	  <h5 class="centered"><?php echo $_SESSION['usuario']; ?></h5>

                      <li class="mt">
                          <a href="slider_lista.php">
                              <i class="fa fa-dashboard"></i>
                              <span>Slider Principal</span>
                          </a>
                      </li>

                      <li class="sub-menu">
                          <a href="video_lista.php" >
                              <i class="fa fa-desktop"></i>
                              <span>Slider Videos</span>
                          </a>

                      </li>

                      <li class="sub-menu">
                          <a href="sitio_lista.php" >
                              <i class="fa fa-cogs"></i>
                              <span>Sitios</span>
                          </a>
                          <ul class="sub">
                              <li><a  href="fotositio_lista.php">Fotos</a></li>
                              <li><a  href="videositio_lista.php">Videos</a></li>
                          </ul>
                      </li>

                      <li class="sub-menu">
                          <a class="active" href="usuario_lista.php" >
                              <i class="fa fa-book"></i>
                              <span>Usuarios</span>
                          </a>
                      </li>

                      <li class="sub-menu">
                          <a href="sitio_lista.php" >
                              <i class="fa fa-book"></i>
                              <span>Nuevo Sitio</span>
                          </a>
                      </li>

                      <li class="sub-menu">
                          <a href="historia.php" >
                              <i class="fa fa-book"></i>
                              <span>Historia</span>
                          </a>
                      </li>

                      <li class="sub-menu">
                          <a class="active" href="foro_lista.php" >
                              <i class="fa fa-book"></i>
                              <span>Blog</span>
                          </a>
                      </li>
                  </ul>
                  <!-- sidebar menu end-->
              </div>
          </aside>
          <!--sidebar end-->

          <!--main content start-->
          <section id="main-content">
              <section class="wrapper">
                  <div class="row">
                      <div class="col-lg-12 main-chart">

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
                        $insertSQL = sprintf("INSERT INTO usuarios (usuario, contra, cedula, nombre) VALUES (%s, md5(%s), %s, %s)",
                                             GetSQLValueString($_POST['usuario'], "text"),
                                             GetSQLValueString($_POST['contra'].$_POST['usuario'], "text"),
                                             GetSQLValueString($_POST['cedula'], "text"),
                                             GetSQLValueString($_POST['nombre'], "text"));

                        mysql_select_db($database_arqueologia, $arqueologia);
                        $Result1 = mysql_query($insertSQL, $arqueologia) or die(mysql_error());

                        $insertGoTo = "usuario_lista.php";
                        if (isset($_SERVER['QUERY_STRING'])) {
                          $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
                          $insertGoTo .= $_SERVER['QUERY_STRING'];
                        }
                        header(sprintf("Location: %s", $insertGoTo));
                      }
                      ?>
                      <script>
                      function subirimagen(nombrecampo)
                      {
                      	self.name = 'opener';
                      	remote = open('gestionimagen.php?campo='+nombrecampo, 'remote', 'width=400,height=150,location=no,scrollbars=yes,menubars=no,toolbars=no,resizable=yes,fullscreen=no, status=yes');
                       	remote.focus();
                      	}

                      </script>
                          <h1>A&ntilde;adir Video</h1>
                          <p>&nbsp;</p>
                          <div class="container">
                          <form role="form" action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
                            <div class="form-group">
                                <label for="ejemplo_email_1">Usuario:</label>
                                <input id="usuario" type="text" name="usuario" value="" size="32" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="ejemplo_email_1">Contrase&ntilde;a:</label>
                                <input id="password" type="password" name="contra" value="" size="32" class="form-control"/>
                            </div>
                            <div class="form-group">
                              <label for="ejemplo_email_1">Cedula:</label>
                              <input id="cedula" type="text" name="cedula" value="" size="32" class="form-control" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"/>
                            </div>
                            <div class="form-group">
                                <label for="ejemplo_email_1">Nombre:</label>
                                <input id="nombre" type="text" name="nombre" value="" size="32" class="form-control" onKeypress="if (event.keyCode >45 && event.keyCode  <57) event.returnValue = false;"/>
                              </div>
                            <div class="form-group">
                                <a class="btn btn-primary" href="javascript:document.form1.submit();" onclick="validarFormulario()"><span>Insertar</span></a>
                                <a class="btn btn-warning" href="usuario_lista.php"><span>Cancelar</span></a>
                            <input type="hidden" name="MM_insert" value="form1" />
                          </form>



                      	</div><!-- /row mt -->
              </section>
          </section>

      </section>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/jquery-1.8.3.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="assets/js/jquery.sparkline.js"></script>


        <!--common script for all pages-->
        <script src="assets/js/common-scripts.js"></script>

        <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
        <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

        <script type="text/javascript">
          function validarFormulario() {
            var usuario = document.getElementById("usuario").value;
            var password = document.getElementById("password").value;
            var cedula = document.getElementById("cedula").value;
            var nombre = document.getElementById("nombre").value;
            if(usuario.localeCompare("")==0){
              alert("Ingrese un usuario");
            }else if(password.localeCompare("")==0){
              alert("Ingrese un password");
            }else if(cedula.localeCompare("")==0){
              alert("Ingrese una cedula");
            }else if(nombre.localeCompare("")==0){
              alert("Ingrese un nombre");
            }
          }
        </script>

      </body>
    </html>

    	<?php

    }else
    echo "Acceso denegado";
    ?>

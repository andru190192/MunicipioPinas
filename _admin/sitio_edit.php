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
                          <a class="active" href="slider_lista.php">
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
                          <a href="usuario_lista.php" >
                              <i class="fa fa-book"></i>
                              <span>Usuarios</span>
                          </a>
                      </li>

                      <li class="sub-menu">
                          <a class="active" href="sitio_lista.php" >
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

                      if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
                        $updateSQL = sprintf("UPDATE tblmenusitios SET nombre=%s, comollegar=%s, latitud=%s, longitud=%s, sitiocodigo=%s WHERE id=%s",
                                             GetSQLValueString($_POST['nombre'], "text"),
                                             GetSQLValueString($_POST['comollegar'], "text"),
                                             GetSQLValueString($_POST['latitud'], "text"),
                                             GetSQLValueString($_POST['longitud'], "text"),
                                             GetSQLValueString($_POST['sitiocodigo'], "text"),
                                             GetSQLValueString($_POST['id'], "int"));
                        mysql_select_db($database_arqueologia, $arqueologia);
                        $Result1 = mysql_query($updateSQL, $arqueologia) or die(mysql_error());

                        $updateGoTo = "sitio_lista.php";
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
                      $query_DatosSlider = sprintf("SELECT * FROM tblmenusitios WHERE tblmenusitios.id =%s", GetSQLValueString($varDato_DatosSlider, "int"));
                      $DatosSlider = mysql_query($query_DatosSlider, $arqueologia) or die(mysql_error());
                      $row_DatosSlider = mysql_fetch_assoc($DatosSlider);
                      $totalRows_DatosSlider = mysql_num_rows($DatosSlider);
                      ?>

                      <script>
                      function subirimagen(nombrecampo)
                      {
                      	self.name = 'opener';
                      	remote = open('gestionimagen.php?campo='+nombrecampo, 'remote', 'width=400,height=150,location=no,scrollbars=yes,menubars=no,toolbars=no,resizable=yes,fullscreen=no, status=yes');
                       	remote.focus();
                      	}

                      </script>
                          <h1>Editar Publicidad</h1>
                          <div class="container">
                          <form role="form" action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
                            <table align="center">

                              <div class="form-group">
                                <label for="ejemplo_email_1">Nombre del Sitio:</label>
                                <input id="nombre" type="text" name="nombre" value="<?php echo htmlentities($row_DatosSlider['nombre'], ENT_COMPAT, 'iso8859-1'); ?>" size="25" class="form-control"/>
                              </div>
                              <div class="form-group">
                                <label for="comollegar">Como llegar:</label>
                                <input id="comollegar" type="text" name="comollegar" value="<?php echo htmlentities($row_DatosSlider['comollegar'], ENT_COMPAT, 'iso8859-1'); ?>" size="25" class="form-control"/>
                              </div>
                              <div class="form-group">
                                <label for="latitud">Latitud:</label>
                                <input id="latitud" type="text" name="latitud" value="<?php echo htmlentities($row_DatosSlider['latitud'], ENT_COMPAT, 'iso8859-1'); ?>" size="25" class="form-control"/>
                              </div>
                              <div class="form-group">
                                <label for="longitud">Longitud:</label>
                                <input id="longitud" type="text" name="longitud" value="<?php echo htmlentities($row_DatosSlider['longitud'], ENT_COMPAT, 'iso8859-1'); ?>" size="25" class="form-control"/>
                              </div>
                              <div class="form-group">
                                <label for="sitiocodigo">Codigo Sitio:</label>
                                <input readonly id="sitiocodigo" type="text" name="sitiocodigo" value="<?php echo htmlentities($row_DatosSlider['sitiocodigo'], ENT_COMPAT, 'iso8859-1'); ?>" size="32" class="form-control" />
                              </div>
                              <div class="form-group">
                                <a class="btn btn-primary" href="javascript:document.form1.submit();" onclick="validarFormulario()"><span>Actualizar </span></a>
                                <a class="btn btn-warning" href="sitio_lista.php"><span>Cancelar</span></a>
                              </div>
                            <input type="hidden" name="MM_update" value="form1" />
                            <input type="hidden" name="id" value="<?php echo $row_DatosSlider['id']; ?>" />
                          </form>
                        </div>
                      <?php
                      mysql_free_result($DatosSlider);
                      ?>


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
            var strimagengrande = document.getElementById("strimagengrande").value;
            var strtitulo = document.getElementById("strtitulo").value;
            var strsubtitulo = document.getElementById("strsubtitulo").value;
            var intorden = document.getElementById("intorden").value;
            if(strimagengrande.localeCompare("")==0){
              alert("Ingrese una imagen");
            }else if(strtitulo.localeCompare("")==0){
              alert("Ingrese un titulo");
            }else if(strsubtitulo.localeCompare("")==0){
              alert("Ingrese un subtitulo");
            }else if(intorden.localeCompare("")==0){
              alert("Ingrese un orden");
            }
          }
        </script>

      </body>
    </html>

    	<?php

    }else
    echo "Acceso denegado";
    ?>

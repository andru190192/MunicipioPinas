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
                          <a class="active" href="video_lista.php" >
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

                      mysql_select_db($database_arqueologia, $arqueologia);
                      $query_DatosSlider = "SELECT * FROM tblvideos";
                      $DatosSlider = mysql_query($query_DatosSlider, $arqueologia) or die(mysql_error());
                      $row_DatosSlider = mysql_fetch_assoc($DatosSlider);
                      $totalRows_DatosSlider = mysql_num_rows($DatosSlider);
                      ?>
                      <script>
                      function asegurar()
                      {
                         rc = confirm("Seguro que desea eliminar?");
                         return rc;
                      }
                      </script>
                          <h1 style="text-align:center">Lista de Videos</h1>
                          <br/>
                          <br/>
                          <div class="container">
                          <table class="table table-bordered table-striped table-condensed cf">
                              <thead class="cf">
                               <tr>
                                 <th>Url Video</th>
                                 <th>Titulo Video</th>
                                 <th>Subtitulo Video</th>
                                 <th>Imagen</th>
                                 <th>Estado</th>
                                 <th>Acciones</th>
                               </tr>
                               </thead>
                               <tbody>

                                 <?php do { ?>
                                 <tr>
                                     <td><?php echo $row_DatosSlider['url']; ?></td>
                                     <td><?php echo $row_DatosSlider['titulo']; ?></td>
                                     <td><?php echo $row_DatosSlider['subtitulo']; ?></td>
                                     <td><img src="../images/slider/<?php echo $row_DatosSlider['imagen']; ?>" width="80" height="50" /></td>
                                     <td><?php
                                 if ($row_DatosSlider['intestado']== 1)
                                     echo "Activo";
                                 else
                                   echo "Inactivo"; ?></td>
                                     <td>
                                       <a href="video_add.php"><button class="btn btn-success btn-xs"><i class="fa fa-plus"></i></button></a>
                                       <a href="video_edit.php?recordID=<?php echo $row_DatosSlider['id']; ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                         <a href="video_remove.php?recordID=<?php echo $row_DatosSlider['id']; ?>"><button class="btn btn-danger btn-xs" onclick="javascript:return asegurar();"><i class="fa fa-trash-o "></i></button></a>
                                       </td>
                                     </tr>
                                     <?php } while ($row_DatosSlider = mysql_fetch_assoc($DatosSlider)); ?>
                               </tbody>
                           </table>

                      <?php
                      mysql_free_result($DatosSlider);
                      ?>
</div>

                      	</div><!-- /row mt -->
              </section>
          </section>

          <!--main content end-->
          <!--footer start-->

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

        <!--script for this page-->
        <script src="assets/js/sparkline-chart.js"></script>
    	<script src="assets/js/zabuto_calendar.js"></script>

    	<script type="application/javascript">
            $(document).ready(function () {
                $("#date-popover").popover({html: true, trigger: "manual"});
                $("#date-popover").hide();
                $("#date-popover").click(function (e) {
                    $(this).hide();
                });

                $("#my-calendar").zabuto_calendar({
                    action: function () {
                        return myDateFunction(this.id, false);
                    },
                    action_nav: function () {
                        return myNavFunction(this.id);
                    },
                    ajax: {
                        url: "show_data.php?action=1",
                        modal: true
                    },
                    legend: [
                        {type: "text", label: "Special event", badge: "00"},
                        {type: "block", label: "Regular event", }
                    ]
                });
            });


            function myNavFunction(id) {
                $("#date-popover").hide();
                var nav = $("#" + id).data("navigation");
                var to = $("#" + id).data("to");
                console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
            }
        </script>


      </body>
    </html>

    	<?php

    }else
    echo "Acceso denegado";
    ?>

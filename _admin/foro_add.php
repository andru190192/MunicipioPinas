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
                          <a href="video_lista.php">
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
                              <i class="fa fa-angle-double-right"></i>
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
                      <?php
                        if(isset($_GET["respuestas"]))
                          $respuestas = $_GET['respuestas'];
                        else
                          $respuestas = 0;
                        if(isset($_GET["identificador"]))
                          $identificador = $_GET['identificador'];
                        else
                          $identificador = 0;
                      ?>
                      <script>
                        function subirimagen(nombrecampo)
                        {
                          alert("entreeee");
                          self.name = 'opener';
                          remote = open('gestionimagen.php?campo='+nombrecampo, 'remote', 'width=400,height=150,location=no,scrollbars=yes,menubars=no,toolbars=no,resizable=yes,fullscreen=no, status=yes');
                          remote.focus();
                          }

                        </script>
                      <table>
                      <form method="post" name="form1" id="form1" action="agregar.php">
                        <input type="hidden" name="identificador" value="<?php echo $identificador;?>">
                        <input type="hidden" name="respuestas" value="<?php echo $respuestas;?>">
                          <tr>
                          <td>Autor </td>
                          <td><input type="text" name="autor"></td>
                          </tr>
                          <tr>
                            <td>Titulo</td>
                            <td><input type="text" name="titulo"></td>
                          </tr>
                          <tr>
                            <td>Mensaje</td>
                            <td><textarea name="mensaje" cols="50" rows="5" required="required"></textarea></td>
                          </tr>
                          <tr>
                            <td><input type="submit" id="submit" name="submit" value="Enviar Mensaje"></td>
                          </tr>
                            <input id="imagen" type="text" name="imagen" value="" size="32" class="form-control"/>
                            <input type="button" name="button" id="button" value="Subir Imagen" onclick="javascript:subirimagen('imagen');">
                        </form>
                      </table>

                      </div>

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
            var imagen = document.getElementById("imagen").value;
            var url = document.getElementById("url").value;
            var titulo = document.getElementById("titulo").value;
            var subtitulo = document.getElementById("subtitulo").value;
            if(imagen.localeCompare("")==0){
              alert("Ingrese una imagen");
            }else if(url.localeCompare("")==0){
              alert("Ingrese un url");
            }else if(titulo.localeCompare("")==0){
              alert("Ingrese un titulo");
            }else if(subtitulo.localeCompare("")==0){
              alert("Ingrese una Subtitulo");
            }
          }
        </script>

      </body>
    </html>

    	<?php

    }else
    echo "Acceso denegado";
    ?>

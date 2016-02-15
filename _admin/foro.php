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
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap3.3.6.min.css">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
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
                          <a href="video_lista.php" >
                              <i class="fa fa-desktop"></i>
                              <span>Slider Videos</span>
                          </a>

                      </li>

                      <li class="sub-menu">
                          <a class="active" href="sitio_lista.php" >
                              <i class="fa fa-cogs"></i>
                              <span>Sitios</span>
                          </a>
                          <ul class="sub">
                              <li class="active"><a  href="fotositio_lista.php">Fotos</a></li>
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
                        <div class="container">
                        <h1 class="text-center">Listado de Respuestas</h1>
                        <br/>
                        <br/>
                          <?php require_once('../Connections/arqueologia.php'); ?>
<?php
  if(isset($_GET["id"]))
  $id = $_GET['id'];
  $query = "SELECT * FROM  foro WHERE ID = '$id' ORDER BY fecha DESC";
  $result = $mysqli->query($query);
  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    $id = $row['ID'];
    $titulo = $row['titulo'];
    $autor = $row['autor'];
    $mensaje = $row['mensaje'];
    $fecha = $row['fecha'];
    $respuestas = $row['respuestas'];
  }
  
  $query2 = "SELECT * FROM  foro WHERE identificador = '$id' ORDER BY fecha DESC";
  $result2 = $mysqli->query($query2);
  while($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)){
    $id = $row['ID'];
    $titulo = $row['titulo'];
    $autor = $row['autor'];
    $mensaje = $row['mensaje'];
    $fecha = $row['fecha'];
    $respuestas = $row['respuestas'];

    echo '<div class="media">
			  <div class="media-left">
			    <a>
			      <img width="64px" class="media-object" src="assets/img/person.jpg">
			    </a>
			  </div>
			  <div class="media-body">';
	echo "		<h4 class='media-heading'>$autor</h4>";
	echo "	  	$mensaje
			  </div>
		  </div>";
  }
?>
<br/><br/>
<a class="btn btn-warning" href="foro_lista.php"><span>Regresar</span></a>


                        </div>
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

<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="es">

<head>

  <!-- Basic -->
  <title>Pi&ntilde;as | Arqueol&oacute;gica</title>

  <!-- Define Charset -->
  <meta charset="utf-8">

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Page Description and Author -->
  <meta name="description" content="Sitio web sobre la arqueologia de pinas">
  <meta name="author" content="Jorge Jaen">

  <link rel="icon" type="image/png" href="images/favicon.png" />

  <!-- Bootstrap CSS  -->
  <link rel="stylesheet" href="asset/css/bootstrap.min.css" type="text/css" media="screen">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">

  <!-- Slicknav -->
  <link rel="stylesheet" type="text/css" href="css/slicknav.css" media="screen">

  <!-- CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

  <!-- Responsive CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">

  <!-- Css3 Transitions Styles  -->
  <link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">

  <!-- Color CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="css/colors/red.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/colors/jade.css" title="jade" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/blue.css" title="blue" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/beige.css" title="beige" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/cyan.css" title="cyan" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/green.css" title="green" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/orange.css" title="orange" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/peach.css" title="peach" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/pink.css" title="pink" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/purple.css" title="purple" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/sky-blue.css" title="sky-blue" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/yellow.css" title="yellow" media="screen" />


  <!-- JS  -->
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="js/jquery.migrate.js"></script>
  <script type="text/javascript" src="js/modernizrr.js"></script>
  <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.fitvids.js"></script>
  <script type="text/javascript" src="js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
  <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
  <script type="text/javascript" src="js/jquery.appear.js"></script>
  <script type="text/javascript" src="js/count-to.js"></script>
  <script type="text/javascript" src="js/jquery.textillate.js"></script>
  <script type="text/javascript" src="js/jquery.lettering.js"></script>
  <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
  <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
  <script type="text/javascript" src="js/jquery.parallax.js"></script>
  <script type="text/javascript" src="js/jquery.slicknav.js"></script>

  <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>

<body>

  <!-- Container -->
  <div id="container">

    <!-- Start Header -->
    <div class="hidden-header"></div>
    <header class="clearfix">

      <!-- Start Top Bar -->
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <!-- Start Contact Info -->
              <ul class="contact-details">
                <li><a href="#"><i class="fa fa-map-marker"></i> Pi&ntilde;as, El Oro, Ecuador</a>
                </li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> municipio@pinas.gob.ec</a>
                </li>
                <li><a href="#"><i class="fa fa-phone"></i> 593 2976 173</a>
                </li>
              </ul>
              <!-- End Contact Info -->
            </div>
            <div class="col-md-6">
              <!-- Start Social Links -->
              <ul class="social-list">
                <li>
                  <a target="_blank" class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="https://www.facebook.com/profile.php?id=100011309252896"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a target="_blank" class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="https://twitter.com/PinasArqueolog"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a target="_blank" class="google itl-tooltip" data-placement="bottom" title="Google Plus" href="https://plus.google.com/u/0/105309532380012613395?hl=es-419"><i class="fa fa-google-plus"></i></a>
                </li>
              </ul>
              <!-- End Social Links -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Top Bar -->

    <?php
	include_once('menu.php');
	?>

    </header>
    <!-- End Header -->







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

    $maxRows_DatosSlider = 100;
    $pageNum_DatosSlider = 0;
    if (isset($_GET['pageNum_DatosSlider'])) {
      $pageNum_DatosSlider = $_GET['pageNum_DatosSlider'];
    }
    $startRow_DatosSlider = $pageNum_DatosSlider * $maxRows_DatosSlider;

    mysql_select_db($database_arqueologia, $arqueologia);
    $query_DatosSlider = "SELECT * FROM tblslider WHERE tblslider.intestado = 1 ORDER BY tblslider.intorden ASC";
    $query_limit_DatosSlider = sprintf("%s LIMIT %d, %d", $query_DatosSlider, $startRow_DatosSlider, $maxRows_DatosSlider);
    $DatosSlider = mysql_query($query_limit_DatosSlider, $arqueologia) or die(mysql_error());
    $row_DatosSlider = mysql_fetch_assoc($DatosSlider);

    if (isset($_GET['totalRows_DatosSlider'])) {
      $totalRows_DatosSlider = $_GET['totalRows_DatosSlider'];
    } else {
      $all_DatosSlider = mysql_query($query_DatosSlider);
      $totalRows_DatosSlider = mysql_num_rows($all_DatosSlider);
    }
    $totalPages_DatosSlider = ceil($totalRows_DatosSlider/$maxRows_DatosSlider)-1;
    ?>


    <!-- Start HomePage Slider -->

    <section id="home">
      <!-- Carousel -->
      <div id="main-slide" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#main-slide" data-slide-to="0" class="active"></li>
          <li data-target="#main-slide" data-slide-to="1"></li>
          <li data-target="#main-slide" data-slide-to="2"></li>
          <li data-target="#main-slide" data-slide-to="3"></li>
          <li data-target="#main-slide" data-slide-to="4"></li>
        </ol>
        <!--/ Indicators end-->

        <!-- Carousel inner -->
        <div class="carousel-inner">
          <div class="item active">
            <img class="img-responsive" src="../images/slider/bg1.jpg" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated2">
                  <span>Pi&ntilde;as<strong> Arqueol&oacute;gico</strong></span>
                </h2>
                <h3 class="animated3">
                  <span>Museo de El Municipio de Pi&ntilde;as</span>
                </h3>
              </div>
            </div>
          </div>
          <!--/ Carousel item end -->
          <?php
           mysql_data_seek($DatosSlider, 0);
           $row_DatosSlider = mysql_fetch_assoc($DatosSlider);?>
          	    <!-- First Content -->
                  <?php $contador=1; ?>
          	    <?php do { ?>
                  <div class="item">
                    
                    <img class="img-responsive" src="../images/slider/<?php echo $row_DatosSlider['strimagengrande']; ?>" alt="slider">
                    <div class="slider-content">
                      <div class="col-md-12 text-center">
                        <h2 class="animated2">
                      <span style="color: white;"><?php echo $row_DatosSlider['strtitulo']; ?></span>
                  </h2>
                        <h3 class="animated3">
                   <span style="color: white;"><?php echo $row_DatosSlider['strsubtitulo']; ?></span>
               </h3>
                      </div>
                    </div>
                  </div>
                  <!--/ Carousel item end -->
          	      <?php
          		    $contador++;
          			} while ($row_DatosSlider = mysql_fetch_assoc($DatosSlider)); ?>
        </div>
        <!-- Carousel inner end-->

        <!-- Controls -->
        <a class="left carousel-control" href="#main-slide" data-slide="prev">
          <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="#main-slide" data-slide="next">
          <span><i class="fa fa-angle-right"></i></span>
        </a>
      </div>
      <!-- /carousel -->
    </section>
    <!-- End HomePage Slider -->


    <!-- Start Content -->
    <div id="content" style="padding-bottom: 0px !important;">
      <div class="container">

        <!-- Divider -->
        <div class="hr1 margin-top"></div>


        <!-- Seccion de Carousel de Videos -->
        <div class="recent-projects">
          <h2 class="title"><span>Videos</span></h4>
          <div class="projects-carousel touch-carousel">


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

            $maxRows_DatosSlider = 100;
            $pageNum_DatosSlider = 0;
            if (isset($_GET['pageNum_DatosSlider'])) {
              $pageNum_DatosSlider = $_GET['pageNum_DatosSlider'];
            }
            $startRow_DatosSlider = $pageNum_DatosSlider * $maxRows_DatosSlider;

            mysql_select_db($database_arqueologia, $arqueologia);
            $query_DatosSlider = "SELECT * FROM tblvideos";
            $query_limit_DatosSlider = sprintf("%s LIMIT %d, %d", $query_DatosSlider, $startRow_DatosSlider, $maxRows_DatosSlider);
            $DatosSlider = mysql_query($query_limit_DatosSlider, $arqueologia) or die(mysql_error());
            $row_DatosSlider = mysql_fetch_assoc($DatosSlider);

            if (isset($_GET['totalRows_DatosSlider'])) {
              $totalRows_DatosSlider = $_GET['totalRows_DatosSlider'];
            } else {
              $all_DatosSlider = mysql_query($query_DatosSlider);
              $totalRows_DatosSlider = mysql_num_rows($all_DatosSlider);
            }
            $totalPages_DatosSlider = ceil($totalRows_DatosSlider/$maxRows_DatosSlider)-1;
            ?>



                  <?php
                   mysql_data_seek($DatosSlider, 0);
                   $row_DatosSlider = mysql_fetch_assoc($DatosSlider);
                   ?>
                  	    <!-- First Content -->
                          <?php $contador=1; ?>

                          <?php do { ?>

                            <div class="portfolio-item item">
                              <div class="portfolio-border">
                                <div class="portfolio-thumb">
                                  <a class="lightbox" data-lightbox-type="ajax" href="<?php echo $row_DatosSlider['url']; ?>">
                                    <div class="thumb-overlay"><i class="fa fa-play"></i></div>
                                    <img alt="" src="../images/slider/<?php echo $row_DatosSlider['imagen']; ?>" />
                                  </a>
                                </div>
                                <div class="portfolio-details">
                                  <a href="#">
                                    <h4><?php echo $row_DatosSlider['titulo']; ?></h4>
                                    <span><?php echo $row_DatosSlider['subtitulo']; ?></span>
                                  </a>
                                </div>
                              </div>
                            </div>

                          <?php
                            $contador++;
                          } while ($row_DatosSlider = mysql_fetch_assoc($DatosSlider)); ?>





          </div>
        </div>
        <!-- End Recent Projects Carousel -->
</div>

        <!-- Divider -->
        <div class="hr1 margin-60"></div>

        <div id="parallax-one" class="parallax" style="background-image:url(images/parallax/bg-02.jpg);">
          <div class="parallax-text-container-1">
            <div class="parallax-text-item">
              <div class="container">
                <div class="row">
                  <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="counter-item">
                      <i class="fa fa-male"></i>
                      <div class="timer" id="item1" data-to="6" data-speed="5000"></div>
                      <h5>Visita Diarias</h5>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="counter-item">
                      <i class="fa fa-male"></i>
                      <div class="timer" id="item2" data-to="35" data-speed="5000"></div>
                      <h5>Visitas Semanales</h5>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="counter-item">
                      <i class="fa fa-male"></i>
                      <div class="timer" id="item3" data-to="140" data-speed="5000"></div>
                      <h5>Visitas Mensuales</h5>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="counter-item">
                      <i class="fa fa-male"></i>
                      <div class="timer" id="item4" data-to="1680" data-speed="5000"></div>
                      <h5>Visitas Anuales</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Divider -->
        <div class="hr1 margin-60"></div>

        <!-- Start Client/Partner Section -->
        <div class="partner">
          <div class="container">
            <div class="row">

              <!-- Start Big Heading -->
              <div class="big-title text-center">
                <h1>Nuestros <strong>Auspiciantes</strong></h1>
                <p class="title-desc">Ellos confian en nosotros</p>
              </div>
              <!-- End Big Heading -->

              <!--Start Clients Carousel-->
              <div class="our-clients">
                <div class="clients-carousel custom-carousel touch-carousel navigation-3" data-appeared-items="4" data-navigation="true">

                  <!-- Client 1 -->
                  <div class="client-item item">
                    <a href=""><img src="images/1.png" alt="" /></a>
                  </div>

                  <!-- Client 2 -->
                  <div class="client-item item">
                    <a href=""><img style="width: 65%" src="images/2.png" alt="" /></a>
                  </div>

                  <!-- Client 3 -->
                  <div class="client-item item">
                    <a href=""><img style="width: 65%" src="images/3.png" alt="" /></a>
                  </div>

                  <!-- Client 6 -->
                  <div class="client-item item">
                    <a href=""><img style="width: 75%" src="images/6.png" alt="" /></a>
                  </div>

                  <!-- Client 4 -->
                  <div class="client-item item">
                    <a href=""><img style="width: 65%" src="images/4.png" alt="" /></a>
                  </div>
                </div>
              </div>
              <!-- End Clients Carousel -->
            </div>
            <!-- .row -->
          </div>
          <!-- .container -->
        </div>
        <!-- End Client/Partner Section -->

    <!-- Start Footer -->
    <footer>
      <div class="container">
        <div class="row footer-widgets">

          <!-- Start Subscribe & Social Links Widget -->
          <div class="col-md-6">
            <div class="footer-widget mail-subscribe-widget">
              <h4>Suscr&iacute;bete<span class="head-line"></span></h4>
              <p>&Uacute;nete a nuestra lista de correo para estar al día y obtener notificaciones acerca de nuestros nuevos lanzamientos !</p>
              <form class="subscribe">
                <input type="text" placeholder="correo@ejemplo.com">
                <input type="submit" class="btn-system" value="Enviar">
              </form>
            </div>
            <div class="footer-widget social-widget">
              <h4>S&iacute;guenos<span class="head-line"></span></h4>
              <ul class="social-icons">
                <li>
                  <a target="_blank" class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="https://www.facebook.com/profile.php?id=100011309252896"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a target="_blank" class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="https://twitter.com/PinasArqueolog"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a target="_blank" class="google itl-tooltip" data-placement="bottom" title="Google Plus" href="https://plus.google.com/u/0/105309532380012613395?hl=es-419"><i class="fa fa-google-plus"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Subscribe & Social Links Widget -->


          <!-- Start Contact Widget -->
          <div class="col-md-6">
            <div class="footer-widget contact-widget">
              <h4>Pi&ntilde;as Arqueol&oacute;gico<span class="head-line"></span></h4>
              <p>Es un proyecto de el Gobierno Aut&oacute;nomo Descentralizado Municipal de Pi&ntilde;as</p>
              <ul>
                <li><span>Direcci&oacute;n:</span> Pi&ntilde;as, El Oro, Ecuador</li>
                <li><span>E-mail:</span> municipio@pinas.gob.ec</li>
                <li><span>Sitio Web:</span> www.pinasarqueologico.com.ec</li>
              </ul>
            </div>
            <img class="qr" width="15%" src="images/qr.png">
          </div>
          <!-- .col-md-3 -->
          <!-- End Contact Widget -->


        </div>
        <!-- .row -->

        <!-- Start Copyright -->
        <div class="copyright-section">
          <div class="row">
            <div class="col-md-12">
              <p style="text-align: center;">&copy; 2016 Jorge Jaen - Todos los derechos reservados</p>
            </div>
          </div>
        </div>
        <!-- End Copyright -->

      </div>
    </footer>
    <!-- End Footer -->

  </div>
  <!-- End Container -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- Style Switcher -->
  <div class="switcher-box">
    <a class="open-switcher show-switcher"><i class="fa fa-cog fa-2x"></i></a>
    <h4>Configuraci&oacute;n de Estilos</h4>
    <span>12 Colores definidos</span>
    <ul class="colors-list">
      <li>
        <a onClick="setActiveStyleSheet('blue'); return false;" title="Blue" class="blue"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('sky-blue'); return false;" title="Sky Blue" class="sky-blue"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('cyan'); return false;" title="Cyan" class="cyan"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('jade'); return false;" title="Jade" class="jade"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('green'); return false;" title="Green" class="green"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('purple'); return false;" title="Purple" class="purple"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('pink'); return false;" title="Pink" class="pink"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('red'); return false;" title="Red" class="red"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('orange'); return false;" title="Orange" class="orange"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('yellow'); return false;" title="Yellow" class="yellow"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('peach'); return false;" title="Peach" class="peach"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('beige'); return false;" title="Biege" class="beige"></a>
      </li>
    </ul>
    <span>Color de la Barra Superior</span>
    <select id="topbar-style" class="topbar-style">
      <option value="1">Light (Por Defecto)</option>
      <option value="2">Dark</option>
      <option value="3">Color</option>
    </select>
    <span>Estilo del Layout</span>
    <select id="layout-style" class="layout-style">
      <option value="1">Wide</option>
      <option value="2">Boxed</option>
    </select>
    <span>Imagen para la versi&oacute;n Boxed</span>
    <ul class="bg-list">
      <li>
        <a href="#" class="bg1"></a>
      </li>
      <li>
        <a href="#" class="bg2"></a>
      </li>
      <li>
        <a href="#" class="bg3"></a>
      </li>
      <li>
        <a href="#" class="bg4"></a>
      </li>
      <li>
        <a href="#" class="bg5"></a>
      </li>
      <li>
        <a href="#" class="bg6"></a>
      </li>
      <li>
        <a href="#" class="bg7"></a>
      </li>
      <li>
        <a href="#" class="bg8"></a>
      </li>
      <li>
        <a href="#" class="bg9"></a>
      </li>
      <li>
        <a href="#" class="bg10"></a>
      </li>
      <li>
        <a href="#" class="bg11"></a>
      </li>
      <li>
        <a href="#" class="bg12"></a>
      </li>
      <li>
        <a href="#" class="bg13"></a>
      </li>
      <li>
        <a href="#" class="bg14"></a>
      </li>
    </ul>
  </div>

  <script type="text/javascript" src="js/script.js"></script>

  <script type="text/javascript">
    //Contact Form

    $('#submit').click(function() {

      $.post("php/send.html", $(".contact-form").serialize(), function(response) {
        $('#success').html(response);
      });
      return false;

    });
  </script>

</body>

</html>

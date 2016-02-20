<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="es">

<head>

  <!-- Basic -->
  <title>Pi&ntilde;as Arqueologico | Comentar</title>

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
  <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
  <script type="text/javascript" src="js/jquery.slicknav.js"></script>


  <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>

<body style='background: none;'>

  <!-- Container -->
  <div class="container">
  
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

<br/>
<br/>
<br/>
<h1>Insertar Comentario</h1>
<br/>
<form name="form" action="agregar.php" method="post">
  <input type="hidden" name="identificador" value="<?php echo $identificador;?>">
  <input type="hidden" name="respuestas" value="<?php echo $respuestas;?>">
  <div class="form-group">
   <label for="imagen">Autor:</label>
   <input id="autor" type="text" name="autor" value="" class="form-control"/>
  </div>
  <div class="form-group">
   <label for="imagen">Titulo:</label>
   <input id="titulo" type="text" name="titulo" value="" class="form-control"/>
  </div>
  <div class="form-group">
   <label for="imagen">Mensaje:</label>
   <textarea id="mensaje" type="text" name="mensaje" value="" class="form-control" cols="50" rows="5" required="required"></textarea>
  </div>
  <div class="form-group">
  <input class="btn btn-primary" type="submit" id="submit" name="submit" value="Comentar">
  <a class="btn btn-warning" href="foro.php?id=<?php echo $identificador;?>"><span>Cancelar</span></a>
  </div>
  </form>


  </div>

</body>

</html>
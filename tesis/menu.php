

      <!-- Start Header ( Logo & Naviagtion ) -->
      <div class="navbar navbar-default navbar-top">
        <div class="container">
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand" href="index.php"><img style="width: 114px;height: 23px;" alt="logo" src="images/logo.png"></a>
          </div>
          <div class="navbar-collapse collapse">

            <!-- End Search -->
            <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a class="active" href="index.php">Inicio</a>
              </li>
              <li>
                <a href="#">Sitios</a>

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
                $query_DatosSlider = "SELECT * FROM tblmenusitios";
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




                <ul class="dropdown">
                  <?php
                   mysql_data_seek($DatosSlider, 0);
                   $row_DatosSlider = mysql_fetch_assoc($DatosSlider);?>
                  	    <!-- First Content -->
                          <?php $contador=1; ?>
                  	    <?php do { ?>
                          <!--aqui pasar el parametros-->
                            <li><a href="sitio.php?sitiocodigo=<?php echo $row_DatosSlider['sitiocodigo']; ?>"><?php echo $row_DatosSlider['nombre']; ?></a></li>
                        <?php
                  		    $contador++;
                  			} while ($row_DatosSlider = mysql_fetch_assoc($DatosSlider)); ?>
                </ul>
              </li>
              <li><a href="historia.php">Historia</a></li>
              <li><a href="blog.php">Blog</a></li>
              <li><a href="contact.php">Contactenos</a></li>
              <li>
                <a href="../_admin/login/login.php" target="_blank">Administracion</a>
              </li>
            </ul>
            <!-- End Navigation List -->
          </div>
        </div>


        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
            <li>
              <a class="active" href="index.php">Inicio</a>
            </li>
            <li>
              <a href="#">Sitios</a>

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
              $query_DatosSlider = "SELECT * FROM tblmenusitios";
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




              <ul class="dropdown">
                <?php
                 mysql_data_seek($DatosSlider, 0);
                 $row_DatosSlider = mysql_fetch_assoc($DatosSlider);?>
                      <!-- First Content -->
                        <?php $contador=1; ?>
                      <?php do { ?>
                        <!--aqui pasar el parametros-->
                          <li><a href="sitio.php?sitiocodigo=<?php echo $row_DatosSlider['sitiocodigo']; ?>"><?php echo $row_DatosSlider['nombre']; ?></a></li>
                      <?php
                        $contador++;
                      } while ($row_DatosSlider = mysql_fetch_assoc($DatosSlider)); ?>
              </ul>
            </li>
            <li><a href="historia.php">Historia</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contact.php">Contactenos</a></li>
            <li>
              <a href="../_admin/login/login.php" target="_blank">Administracion</a>
            </li>
          </ul>
        <!-- Mobile Menu End -->
      </div>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

<!-- CSS  -->
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" href="css/estilos.css" title="yellow" media="screen" />


<!-- JS  -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/js.js"></script>
<script type="text/javascript" src="js/TweenLite.min.js"></script>

</head>


<?php
$con=mysql_connect("localhost","root","") or die("No se pudo conectar con el servidor");
mysql_select_db("arqueologiabd",$con);
@session_start();

if(@$_POST["enviado"])
{
	@$usuario=$_POST["usuario"];
	@$contra=$_POST["contra"];
	if(!empty($usuario))
	{
		if(!empty($contra))
		{
			$consulta=mysql_query("select * from usuarios where usuario='$usuario' and contra='$contra'");
			if(mysql_num_rows($consulta))
			{
				$arreglo=mysql_fetch_array($consulta);
				$_SESSION["usuario"]=$arreglo["usuario"];
				header("location: ../index.php");
			}else
			{
				$error[3]="Usuario o contrase&ntilde;a incorrecta";
			}
		}else
		{
			$error[1]="Ingrese la contrase&ntilde;a";
		}

	}else
	{
		$error[2]="Ingrese el usuario";
	}

}
?>

        <body>
            <div class="container">
                <div class="row vertical-offset-100">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="row-fluid user-row">
                                    <img src="http://s11.postimg.org/7kzgji28v/logo_sm_2_mr_1.png" class="img-responsive" alt="Conxole Admin"/>
                                </div>
                            </div>
                            <div class="panel-body">
															<form action="" method="post" class="form-signin">

															<input class="form-control" type="text" name="usuario" placeholder="Usuario"><br>
															<?php echo @$error[2]; ?><br>

															<input class="form-control" type="password" name="contra" placeholder="Contrase&ntilde;a"><br>
															<?php echo @$error[1]; ?><br>
															<input class="btn btn-lg btn-success btn-block" type="submit" value="Iniciar" name="enviado"><br>
															<?php echo @$error[3]; ?><br>

                            </div>
                        	</div>
                    </div>
                </div>
            </div>

</body>
</html>

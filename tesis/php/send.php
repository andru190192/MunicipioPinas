<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$para = 'admin@pinasarqueologico.com';
$titulo = 'MENSAJE DESDE PIÑAS ARQUEOLOGICO';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";

if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Su mensaje se envio correctamente.');
window.location.href = 'http://www.pinasarqueologico.com/tesis/contact.php';
</script>";
} else {
  echo 'Fallo el envio';
}
}
?>

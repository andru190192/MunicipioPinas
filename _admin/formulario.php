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
                        self.name = 'opener';
                        remote = open('gestionimagen.php?campo='+nombrecampo, 'remote', 'width=400,height=150,location=no,scrollbars=yes,menubars=no,toolbars=no,resizable=yes,fullscreen=no, status=yes');
                        remote.focus();
                        }

                      </script>
<table>
<form name="form" action="agregar.php" method="post">
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
      <input type="button" name="button" id="button" value="Subir Imagen" onclick="javascript:subirimagen('imagen');" 
  </form>
</table>

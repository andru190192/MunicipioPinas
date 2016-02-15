<?php
namespace clases;

class sitios extends datos{
	
	//Declaración de variables
	
	
	
	//Consultas
	
	public function consultarPrincipales(){
	
		$enlace=$this->conectar();
		$consulta= "call consultarPrincipales()";
		$this->resultado = mysql_query($consulta, $enlace) or die(mysql_error());
		$numerofilas = mysql_num_rows($this->resultado);	
		mysql_close();
		return $numerofilas;
	}
	
	public function consultarUno($idsitio){
	
		$enlace=$this->conectar();
		$consulta= "call consultarUnSitio($idsitio)";
		$this->resultado = mysql_query($consulta, $enlace) or die(mysql_error());
		$numerofilas = mysql_num_rows($this->resultado);
		mysql_close();
		return $numerofilas;
	}
	
	public function consultarSitio($idsitio){
	
		$enlace=$this->conectar();
		$consulta= "call consultarSitio($idsitio)";
		$this->resultado = mysql_query($consulta, $enlace) or die(mysql_error());
		$numerofilas = mysql_num_rows($this->resultado);
		mysql_close();	
		return $numerofilas;
		
	
	}
	public function consultarSitiosNivel2(){
		$enlace=$this->conectar();
		$consulta= "select * from sitio where idsitio not in (select idpadre from sitio)";
		$this->resultado = mysql_query($consulta, $enlace) or die(mysql_error());
		$numerofilas = mysql_num_rows($this->resultado);
		mysql_close();
		return $numerofilas;
	}
	
	public function consultarSecundarios(){
		$enlace=$this->conectar();
		$consulta= "select * from sitio where idpadre !=0";
		$this->resultado = mysql_query($consulta, $enlace) or die(mysql_error());
		$numerofilas = mysql_num_rows($this->resultado);
		mysql_close();
		return $numerofilas;
	}
	
	
	
	//geters
	
	public function getRows(){
		$rows=array();
		while($r = mysql_fetch_assoc($this->resultado)) {
			$rows[] = $r;
		}
		return $rows;
	}
	
	//insertar registros
	public function nuevoSitio($nombre,$descripcion,$ubicacion,$idpadre){
		$enlace=$this->conectar();
		$consulta="insert into sitio (nombre, descripcion, ubicacion, idpadre) values('$nombre','$descripcion','$ubicacion',$idpadre)";
		$this->resultado = mysql_query($consulta, $enlace) or die(mysql_error());
	
	}
	
	
	//Actualizar registros
	
	public function editarSitio($idsitio,$descripcion,$nombre,$ubicacion,$idpadre){
		$enlace=$this->conectar();
		$consulta="update sitio set nombre='$nombre', descripcion='$descripcion', ubicacion='$ubicacion', idpadre=$idpadre where idsitio=$idsitio;";
		$this->resultado = mysql_query($consulta, $enlace) or die(mysql_error());
	
	}
	
	
	//eliminar registros
	
	public function eliminarSitio($idsitio){
		$enlace=$this->conectar();
		$consulta="delete from sitio where idsitio=$idsitio";
		$this->resultado = mysql_query($consulta, $enlace) or die(mysql_error());
	
	}
	
		
}

?>
<?php
namespace clases;

class videos extends datos{
	
	//Declaración de variables
	
	
	
	//Consultas
	
	public function consultarTodos(){
	
		$enlace=$this->conectar();
		$consulta= "select * from videos";
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
	public function nuevo($titulo,$direccion){
		$enlace=$this->conectar();
		$consulta="insert into videos (titulo, direccion) values('$titulo','$direccion')";
		$this->resultado = mysql_query($consulta, $enlace) or die(mysql_error());
	
	}
	
	
	//Actualizar registros
	
	public function editar($idvideo,$titulo,$direccion){
		$enlace=$this->conectar();
		$consulta="update videos set titulo='$titulo', direccion='$direccion' where idvideo=$idvideo;";
		$this->resultado = mysql_query($consulta, $enlace) or die(mysql_error());
	
	}
	
	
	//eliminar registros
	
	public function eliminarVideo($idvideo){
		$enlace=$this->conectar();
		$consulta="delete from videos where idvideo=$idvideo";
		$this->resultado = mysql_query($consulta, $enlace) or die(mysql_error());
	
	}
	
		
}

?>
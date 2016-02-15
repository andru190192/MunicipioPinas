<?php
namespace clases;

class informacion extends datos{
	
	//Declaración de variables
	
	
	
	//Consultas
	
	public function consultar(){
	
		$enlace=$this->conectar();
		$consulta= "select * from informacion";
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
	
	
	//Actualizar registros
	
	//eliminar registros
	
		
}

?>
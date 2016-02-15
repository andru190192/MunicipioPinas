<?php
namespace clases;

class fotos extends datos{
	
	//Declaración de variables
	
	
		
	//Consultas
	
	public function consultarPorSitio($idsitio){
	
		$enlace=$this->conectar();
		$consulta= "call consultarPorSitio($idsitio)";
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
	
	public function subirFoto($idsitio,$foto){
		$enlace=$this->conectar();
		$consulta="insert into foto (idsitio,archivo) values($idsitio,'$foto')";
		$this->resultado = mysql_query($consulta, $enlace) or die(mysql_error());
	
	}
	
	//Actualizar registros
	
	//eliminar registros
	public function eliminarFoto($idfoto){
		$enlace=$this->conectar();
		$consulta="delete from foto where idfoto=$idfoto";
		$this->resultado = mysql_query($consulta, $enlace) or die(mysql_error());
	
	}
	
		
}

?>
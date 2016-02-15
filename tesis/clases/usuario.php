<?php
namespace clases;

class usuario extends datos{
	
	//Declaración de variables	
	
	
	//Consultas
	
	
	public function consultarUsuarioClave($usuario,$clave)
	{
		
		$enlace=$this->conectar();
		$consulta= "select * from usuario where cedula='$usuario' and clave='$clave'";
		$this->resultado = mysql_query($consulta, $enlace) or die(mysql_error());
		$numerofilas = mysql_num_rows($this->resultado);
		mysql_close();
		return $numerofilas;
	}
	
	public function consultarUno($idusuario){
	
		$enlace=$this->conectar();
		$consulta= "select * from usuario where idusuario=$idusuario";
		$this->resultado = mysql_query($consulta, $enlace) or die(mysql_error());
		$numerofilas = mysql_num_rows($this->resultado);		
	
	}
	
	public function todos(){
	
		$enlace=$this->conectar();
		$consulta= "select * from usuario";
		$this->resultado = mysql_query($consulta, $enlace) or die(mysql_error());
		$numerofilas = mysql_num_rows($this->resultado);
	
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
	public function nuevo($cedula,$nombre,$nombre2,$apellido,$apellido2,$direccion,$telefono,$clave,$tipo){
		$enlace=$this->conectar();
		$consulta="insert into usuario (cedula, nombre, nombre2, apellido, apellido2, direccion, telefono, clave, tipo)
					values ('$cedula','$nombre','$nombre2','$apellido','$apellido2','$direccion','$telefono','$clave','$tipo')";
		
		$this->resultado = mysql_query($consulta, $enlace) or die(mysql_error());
	
	}
	
	//Actualizar registros
	
	public function editar($idusuario,$cedula,$nombre,$nombre2,$apellido,$apellido2,$direccion,$telefono,$clave,$tipo){
		$enlace=$this->conectar();
		$consulta="update usuario
					set cedula='$cedula', nombre='$nombre', nombre2='$nombre2', apellido='$apellido', apellido2='$apellido2',
					direccion='$direccion', telefono='$telefono', clave='$clave', tipo='$tipo' 
					where idusuario=$idusuario;";
		$this->resultado = mysql_query($consulta, $enlace) or die(mysql_error());
	
	}
	
	//eliminar registros
	
	public function eliminar($idusuario){
		$enlace=$this->conectar();
		$consulta="delete from usuario where idusuario=$idusuario";
		$this->resultado=mysql_query($consulta, $enlace) or die(mysql_error());
	}	
	
}

?>
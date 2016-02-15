<?php
namespace clases;

class datos {
	
	//Declaración de variables
	
	private $resultado;
	
	
	//Metodos
	/*	
	public function conectar()
	{
		$enlace =  mysql_connect('sql202.260mb.net', 'n260m_15478273', '12345678');
		mysql_select_db('n260m_15478273_educombd', $enlace);
		return 	$enlace;
	}
	
*/	
	public function conectar()
	{
		$enlace =  mysql_connect('localhost', 'root', '');
		mysql_select_db('zaruma', $enlace);
		return 	$enlace;
	}
	
	//Getters
	
}

?>
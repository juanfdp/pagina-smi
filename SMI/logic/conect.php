<?php
include('/adodb/adodb.inc.php');


/**
 * CLASE CONECT
 *
 * Clase encargada de establecer y administrar la conexion al motor de base de datos SQL SERVER
 * @author CRECER SOLUCIONES
 * @version 1.0
 * @pack
 */
class Conect {


	public $db;
	/**
	 * CONSTRUCTOR DE LA CLASE CONECT
	 */
	function __construct()
	{
		$this->conectarse();
	}
	/**
	 * METODO QUE RETORNA LA CONEXION DE LA BASE DE DATOS.
	 */
	function conectarse()
	{
		try
		{
			$db =& ADONewConnection('odbc_mssql');
			$dsn = "Driver={SQL Server};Server=jk4zt-pc;Database=MVCommonSmi;";
			$db->Connect($dsn,'creceradmin','Rewq1234');
			return $db;
		}
		catch (Exception $e)
		{
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}

	}




}


?>
<?php
//header('Content-Type: text/html; charset=UTF-8');
include 'logic/conect.php';
/**
 * CLASE CONECT
 *
 * Clase encargada de establecer y administrar la conexion al motor de base de datos SQL SERVER
 * @author CRECER SOLUCIONES
 * @version 1.0
 * @pack
 */
class parametros {


	public $conexion;

	/**
	 * CONSTRUCTOR DE LA CLASE PARAMETROS
	 */
	function __construct()
	{
		$this->conexion=new Conect();
	}

	/**
	 * METODO QUE RETORNA LOS DESTINOS DISPONIBLES Y HABILITADOS
	 */
	public function FillDestinos()
	{

		try
		{
			$recordSett = &$this->conexion->conectarse()->Execute('SELECT * FROM Region Where Estado ='.true);
			return $recordSett;
		}
		catch (Exception $e)
		{
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}

	}
	/**
	 * METODO QUE RETORNA LOS ORIGENES  DISPONIBLES Y HABILITADOS - PAISES
	 */
	public function FillOrigenes()
	{

		try
		{
			$recordSett = &$this->conexion->conectarse()->Execute('SELECT * FROM Paises Where Estado ='.true);
			return $recordSett;
		}
		catch (Exception $e)
		{
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}
	}
	/**
	 * METODO QUE RETORNA LOS TIPOS DE PRODUCTOS DISPONIBLES Y HABILITADOS
	 */
	public function FillTipoProducto()
	{
		try
		{
			$recordSett = &$this->conexion->conectarse()->Execute('SELECT * FROM TipoProductos Where Estado='.true);
			return $recordSett;
		}
		catch (Exception $e)
		{
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}

	}





}







?>
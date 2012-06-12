<?php
//header('Content-Type: text/html; charset=UTF-8');
require_once   'logic/conect.php';
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
	
	/**
	 * METODO QUE RETORNA EL NOMBRE DEL TIPO DE PRODUCTO
	 */
	public function GetTipoProducto($idTipoProducto)
	{
		try
		{
			$recordSett = &$this->conexion->conectarse()->Execute('SELECT Nombre FROM TipoProductos Where Id='.$idTipoProducto);
			
			
			return $recordSett->fields[0];
		}
		catch (Exception $e)
		{
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}

	}	
	/**
	 * METODO QUE RETORNA EL ORIGEN
	 */
	public function GetOrigen($idOrigen)
	{

		try
		{
			$recordSett = &$this->conexion->conectarse()->Execute('SELECT Descripcion FROM Paises Where Id ='.$idOrigen);
			
			return $recordSett->fields[0];
		}
		catch (Exception $e)
		{
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}
	}
	/**
	 * METODO QUE RETORNA EL DESTINO
	 */
	public function GetDestino($idDestino)
	{

		try
		{
			$recordSett = &$this->conexion->conectarse()->Execute('SELECT Descripcion FROM Region Where Id ='.$idDestino);
			
			return $recordSett->fields[0];
		}
		catch (Exception $e)
		{
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}

	}

	}







?>
<?php

/**
 * CLASE ADMIN WEB
 *
 * Clase encargada de cargar todos los componentes dinamicos administrados desde crecer.
 * @author CRECER SOLUCIONES
 * @version 1.0
 * @pack
 */
class adminWeb
{
	public $conexion;
	/**
	 * CONSTRUCTOR DE LA CLASE PARAMETROS
	 */
	function __construct()
	{
		$this->conexion=new Conect();
	}
	/**
	 * METODO QUE HABILITA LOS CAMPOS PARA INGRESAR LOS PASAJEROS SEGUN LA CANTIDAD DE PASAJEROS COTIZADOS
	 */

	/**
	 * METODO QUE SE ENCARGA DE CARGAR TODOS LOS ELEMENTOS DE LA SECCION.
	 */
	public function cargarComponenteBySeccion($IdSeccion,$IdComponente)
	{
		try
		{					
			$recordSett = &$this->conexion->conectarse()->Execute("SELECT   Direccion, Texto, Descripcion
			FROM            Componente
			WHERE        (Id =".$IdComponente.") AND (IdSeccion = ".$IdSeccion.")");	
			
			
		
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
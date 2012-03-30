<?php
require_once('nusoap/lib/nusoap.php');
/**
 * CLASE WebServices
 *
 * Clase encargada de gestionar los cinco webservices implementados
 * @author CRECER SOLUCIONES
 * @version 1.0
 * @pack
 */
class WebServices
{
	private $client;
	
	public 	$polizasAssistCard;//POLIZAS DE ASSISTCARD


	/**
	 * CONSTRUCTOR DE LA CLASE PARAMETROS
	 */
	function __construct()
	{
	
	}


	/**
	 * METODO QUE RETORNA EL PRECIO DE LA POLIZA, OBTENIENDOLO DESDE EL WEB SERVICE CORRESPONDIENTE.
	 * @param IdProducto
	 * @param IdAseguradora
	 * @param Fecha Inicio Viaje
	 * @param Fecha Fin Viaje
	 * @param Arreglo Pasajero
	 *
	 */
	public function ObtenerPrecio($IdProducto,$IdAseguradora,$FechaInicioViaje,$FechaFinViaje,$cantidadDias,$ArregloPasajeros)
	{

		try
		{
			//echo $IdAseguradora;
			switch (strtolower($IdAseguradora) ) {
					
				case "4e04d2c4-5c91-46e4-99dd-e992638da6f8": // ASSIST CARD
				
					//PARAMETROS + USUARIO Y CONTRASEÑA
					$user="aevion";//USUARIO
					$pass="dani";// CONTRASEÑA DEL USUARIO
					$codigoPaisEmision=570;
					$codigoAgencia=4310;
					$poliza=explode("-", $IdProducto);	
					
					$parametros= "
					<cotizacion>
					<pais>".$codigoPaisEmision."</pais>
					<cantidadDias>".$cantidadDias."</cantidadDias>
					<codigoAgencia>".$codigoAgencia."</codigoAgencia>
					<numeroSucursal>0</numeroSucursal>
					<clientes>
					<clienteCotizacion>
					<nombre>nombre</nombre>
					<apellido>apellido</apellido>
					<edad>27</edad>
					<fechaNacimiento>14/11/1981</fechaNacimiento>
					</clienteCotizacion></clientes>
					</cotizacion>				
					";//XML NECESARIO PARA COTIZAR
					
					//ENVIAMOS EL LLAMADO AL WEBSERVICES DE ASSIST CARD
					//OBTENEMOS EL RESULTADO DE LA COTIZACION COMO UN STRING Y AHORA PASAMOS A ANALIZAR PARA PODER CRUZAR LOS PRODUCTOS.
					if(count($this->polizasAssistCard)==0){//VALIDAMOS QUE EL SERVICIO WEB Y HAY SIDO CONSUMID, PARA NO CONSUMIRLO MAS DE UNA VEZ POR COTIZACION.						
					
					$client = new SoapClient("http://190.12.99.228/ws/services/AssistCardService?wsdl");
					$resultado = $client->__call('cotizar',array($parametros,$user,$pass));					
					$this->polizasAssistCard= explode($codigoPaisEmision, $resultado);	
					
					}				
					//OBTENEMOS LOS RESULTADOS EN EL ARREGLO Y EMPEZAMOS EL CRUCE CON LOS PRODUCTOS DE CRECER
					if(count($this->polizasAssistCard)!=0){					
						//RECORREMOS LOS RESULTADOS Y CRUZAMOS VS LA REFERENCIA
						for($i=0;$i<count($this->polizasAssistCard); $i++){							
							//echo $polizasCotizadas[$i]."<br>";							
							$RegistroWebService=explode(trim($poliza[0]), trim($this->polizasAssistCard[$i]));
							//echo " Tamanio".count($RegistroWebService)."<br>";							
							if(count($RegistroWebService)>=2){//VALIDAMOS QUE LA REFERENCIA DE NUESTRA BUSQUEDA SE ENCUENTRE								
								//echo "1".$RegistroWebService[0]."<br>";
								$Precio=explode(" ", trim($RegistroWebService[1]));
								$mejor=sprintf(trim($Precio[124]));								
								return $mejor;	
								break;							
							}
						}
					}

					return -1;
										break;



			}



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
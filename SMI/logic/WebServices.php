<?php
require_once('nusoap/lib/nusoap.php');
require_once('functions.php');

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
	private $func;
	public 	$polizasAssistCard;//POLIZAS DE ASSISTCARD


	/**
	 * CONSTRUCTOR DE LA CLASE PARAMETROS
	 */
	function __construct()
	{
	$this->func=new functions();
	}


	/**
	 * METODO QUE RETORNA EL PRECIO DE LA POLIZA, OBTENIENDOLO DESDE EL WEB SERVICE CORRESPONDIENTE.
	 * @param IdProducto
	 * @param IdAseguradora
	 * @param Fecha Inicio Viaje
	 * @param Fecha Fin Viaje
	 * @param Arreglo Pasajero
	 * @param Precio que viene por defecto del sistema y que a veces dependiendo de la aseguradora aplica o no aplica.
	 *
	 */
	public function ObtenerPrecio($IdProducto,$IdAseguradora,$FechaInicioViaje,$FechaFinViaje,$cantidadDias,$ArregloPasajeros,$PrecioSistema)
	{

		try
		{
			
			
			var_dump($ArregloPasajeros);
			//ESTA PENDIENTE LA VINCULACION DEL DESCUENTO Y EL AUMENTO.			
			//////// EMISIONES Y COTIZACOINES MEDIANTE WEBSERVICES.
			//echo $IdAseguradora;
			switch ($IdAseguradora) {
					
				case "4E04D2C4-5C91-46E4-99DD-E992638DA6F8": // ASSIST CARD
				
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
					if(count($this->polizasAssistCard)==0){//VALIDAMOS QUE EL SERVICIO WEB Y HAYA SIDO CONSUMIDO, PARA NO CONSUMIRLO MAS DE UNA VEZ POR COTIZACION, OPTIMIZACION EN LAS BUSQUEDAS.						
					
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
								$PrecioFormatoFinal=sprintf(trim($Precio[124]));								
								return $PrecioFormatoFinal;	
								break;							
							}
						}
					}
				break;
				
					
					case "715697A2-F643-4D5B-AC49-83B11E8546B0": // TRAVEL ACE
				
					return 	$PrecioSistema;
					
			     break;	
			     
			     	case "AE7C4AA0-BCBA-4804-B2AA-3496C4EDC5F7": // CORIS
				
					return 	$PrecioSistema;
					
			     break;
			     
			      case "DB7A54C0-BF90-4508-9528-F7C6AF83357B": //QUALITAS
				
					return 	$PrecioSistema;
					
			     break;	
			     
				//////  FIN EMISIONES Y COTIZACOINES MEDIANTE WEBSERVICES
				
			     ////// EMISIONES Y COTIZACOINES MANUALES
			     
				case "169159AD-D55A-467B-9EFD-2B7139ECC730": // ANDI ASISTENCIA (SEGUR VIAJES) - EMISION Y COTIZACION MANUAL 
				
				return 	$PrecioSistema;
					
			     break;
			     			     
			     case "B2FF47CF-50D3-4803-992D-9EE57D9FE736": // EDUCAMOS VIAJANDO (SAFEST) - EMISION Y COTIZACION MANUAL
				
					return 	$PrecioSistema;
					
			     break;		
			     
			        case "8528CC83-53F7-4330-AAED-EF0A5AD2B08F": //CHARTIS - EMISION Y COTIZACION MANUAL
				
					return 	$PrecioSistema;
					
			     break;

			     	
 				 ////// EMISIONES Y COTIZACOINES MANUALES
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
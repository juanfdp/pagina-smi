<?php
//require_once('nusoap/lib/nusoap.php');

$var1="R3";
$var3="R3";

echo "Resultado de la comparacion".strcmp($var1,$var3);
/////////////XML PARA EL ENVIO DE LA PETICION HACIA ASSIST CARD.

//PARA LA COTIZACION,
//PAIS - PAIS ORIGEN--------------570
//




//FORMATO XML PARA LA COTIZACION CON ASSIST CARD
$param="
<cotizacion>
<pais>570</pais>
<cantidadDias>8</cantidadDias>
<codigoAgencia>4310</codigoAgencia>
<numeroSucursal>0</numeroSucursal>
<clientes>
<clienteCotizacion>
<nombre>nombre</nombre>
<apellido>apellido</apellido>
<edad>27</edad>
<fechaNacimiento>14/11/1981</fechaNacimiento>
</clienteCotizacion></clientes>
</cotizacion>
";
//FOMATO XML PARA LA EMISION
//CODIGO POOSTAL  SIEMPRE VA FIJO
//PAIS DOMICILIO SIEMPRE FIJO
//CUENTA SIEMPRE CERO
$emision="<emision>
<pais>570</pais>
<codigoAgencia>4310</codigoAgencia>
<numeroSucursal>0</numeroSucursal>
<codigoCounter>ACNET</codigoCounter>
<codigoProducto>R3</codigoProducto>
<codigoTarifa>0</codigoTarifa>
<cantidadDias>5</cantidadDias>
<fechaInicioVigencia>01/12/2009</fechaInicioVigencia>
<fechaFinVigencia>06/12/2009</fechaFinVigencia>
<planFamiliar>false</planFamiliar>
<areaDestino>10</areaDestino>
<idTarjetaCredito>0</idTarjetaCredito>
<cantidadCuotas>0</cantidadCuotas>
<pasajeros>
<pasajero>
<pais>570</pais>
<tipoDocumento>1</tipoDocumento>
<numeroDocumento>222</numeroDocumento>
<fechaNacimiento>14/11/1981</fechaNacimiento>
<apellido>Pompin</apellido>
<nombre>Pepe</nombre>
<email>jon.cas@hotmail.com</email>
<telefono>222222</telefono>
<domicilio>calle</domicilio>
<codigoPostal>333</codigoPostal>
<ciudad>ciudad</ciudad>
<estado>estado</estado>
<paisDomicilio>570</paisDomicilio>
<contacto>contacto</contacto>
<telefonoContacto>777</telefonoContacto>
<telefonoContactoAuxiliar>5555</telefonoContactoAuxiliar>
<idCuenta>0</idCuenta>
<codigo>011</codigo>
<codigoTarifa>0</codigoTarifa>
</pasajero> TEST DE EMISION POR CRECER SOLUCIONES. </pasajeros>
<codigoUsuario>ACNET</codigoUsuario>
</emision>";

$client = new SoapClient("http://190.12.99.228/ws/services/AssistCardService?wsdl");



					$resultado = $client->__call('emitir',array($emision,"aevion","dani"));
					echo $resultado;
					$arregloResultados=split(540, $resultado);
					//echo "Resultados " . count($arregloResultados);
					
					//print_r( $arregloResultados[1]);
				//	for ($i=0;$i<count($arregloResultados);$i++){
						
						
					//}
					for ($i=1;$i<=count($arregloResultados);$i++){
							$registro=split(" ", $arregloResultados[$i]);
							if(count($registro)!=0 ){
								for ($j=0;$j<=count($registro);$j++){
									echo $j." ".$registro[$j];
								}	 
								echo "divisiones". count($registro);
							
								
								echo $arregloResultados[$i];
							//	echo $registro[2];
								break;
							}
					}

//print $vem;

				

/////////////////////////////////////////



?>
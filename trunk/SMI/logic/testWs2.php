<?php

//ACA HEMOS REGISTRADO LAS PRUEBAS DE LAS ASEGURADORAS.
//require_once('nusoap/lib/nusoap.php');
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
<fechaInicioVigencia>12/12/2012</fechaInicioVigencia>
<fechaFinVigencia>12/12/2013</fechaFinVigencia>
<planFamiliar>false</planFamiliar>
<areaDestino>10</areaDestino>

<idTarjetaCredito>0</idTarjetaCredito>
<cantidadCuotas>ACNET</cantidadCuotas>

<pasajeros>
<pasajero>
    <pais>570</pais>
    <tipoDocumento>1</tipoDocumento>
    <numeroDocumento>1026560448</numeroDocumento>
    <fechaNacimiento>08/08/1989</fechaNacimiento>
    <apellido>Castillo</apellido>
    <nombre>Jonathan</nombre>
    <email>jon.cas@hotmail.com</email>
    <telefono>2634408</telefono>
    <domicilio>cra 73 bis </domicilio>
    <codigoPostal>00</codigoPostal>
    <ciudad>Bogota DC</ciudad>
    <estado>CC</estado>
    <paisDomicilio>540</paisDomicilio>
    <contacto>julian ninio</contacto>
    <telefonoContacto>2634408</telefonoContacto>
    <telefonoContactoAuxiliar>2634408</telefonoContactoAuxiliar>
    <idCuenta>0</idCuenta>
    <upgrades>
    </upgrades>
  </pasajero>
</pasajeros>

<codigoUsuario>ACNET</codigoUsuario>
</emision>";
$client = new SoapClient("http://190.12.99.228/ws/services/AssistCardService?wsdl");
					$resultado = $client->__call('emitir',array($emision,"aevion","dani"));
					echo $resultado;
					$arregloResultados=split(540, $resultado);
					//echo "Resultados " . count($arregloResultados);
					//print_r( $arregloResultados[1]);
					//for ($i=0;$i<count($arregloResultados);$i++){
						
						
					//}
					
//print $vem;
/////////////////////////////////////////



?>
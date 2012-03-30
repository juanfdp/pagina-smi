<?php
require_once('nusoap/lib/nusoap.php');
//$client = new SoapClient("http://190.12.99.228/ws/services/AssistCardService?wsdl");
//$client2 = new SoapClient("http://agencias.ua.com.ar/axis2/services/Vouchers_WS?wsdl");
//OBTENER TODOS LOS METODOS DISPOBIBLES
//var_dump($client->__getFunctions());	



///TRAVEL ACE Y UNIVERSAL
///////////////////////////////////////////////////////////////////////////
/*
 * 
 * 
 * 
  $client = new SoapClient("http://190.12.99.228/ws/services/AssistCardService?wsdl");
  $parametros= array('cod_pais' => 54
,'cod_age' => 22228
,'cod_destino' => 2
,'opcion_viaje' => 0
,'cant_pasaj' => 2
,'cod_pais_origen' => 57
,'fsalida' => "16/03/2012"
,'fregreso' => "01/04/2012"
,'pfamiliar' => false
,'fechanac' => array("09/03/1927", "15/05/1989")
);


$client=new nusoap_client("http://agencias.ua.com.ar/axis2/services/Vouchers_WS?wsdl","WSDL");
$result = $client->call('Cotizar', $parametros);
$err = $client->getError();

// Check for a fault
if ($client->fault) {
	echo '<h2>Fault</h2><pre>';
	print_r($result);
	echo '</pre>';
} else {
	// Check for errors
	$err = $client->getError();
	if ($err) {
		// Display the error
		echo '<h2>Error</h2><pre>' . $err . '</pre>';
	} else {
		// Display the result
		echo '<h2>Result</h2><pre>';
		print_r($result);
		echo '</pre>';
	}

}
*/
//ASSISTCARD
///////////////////////////////////////////

$client=new nusoap_client("http://190.12.99.228/ws/services/AssistCardService?wsdl","WSDL");


$parametros= "";


$user="helpcol";
$pass="qwe";

$result = $client->call('cotizar', $parametros,$user,$pass);
$err = $client->getError();

// Check for a fault
if ($client->fault) {
	echo '<h2>Fault</h2><pre>';
	print_r($result);
	echo '</pre>';
} else {
	// Check for errors
	$err = $client->getError();
	if ($err) {
		// Display the error
		echo '<h2>Error</h2><pre>' . $err . '</pre>';
	} else {
		// Display the result
		echo '<h2>Result</h2><pre>';
		print_r($result);
		echo '</pre>';
	}

}




















?>
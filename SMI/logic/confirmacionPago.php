<?php
require_once   '/functions.php';
require_once  'conect.php';
$fun=new functions();


$llave="131bef7b598";/////llave de usuario 

		$fun->SendMailConfirmacionPago("jon.cas@hotmail.com","Jonathan","Castillo");

$usuario_id=$_REQUEST['usuario_id'];
$ref_venta=$_REQUEST['ref_venta'];
$valor=$_REQUEST['valor'];
$moneda=$_REQUEST['moneda'];
$estado_pol=$_REQUEST['estado_pol'];
$firma_cadena= $llave."~".$usuario_id."~".$ref_venta."~".$valor."~".$moneda."~".$estado_pol;
$firmacreada = md5($firma_cadena);//firma que generaron ustedes
$firma =$_REQUEST['firma'];//firma que env�a nuestro sistema
if(strtoupper($firma)==strtoupper($firmacreada)){//comparaci�n de las firmas
	//c�digo que funciona en caso de que los datos vengan de Pagosonline
	if($_REQUEST['estado_pol'] == 4)
	{
	//CONFIRMACION QUE EL PAGO FUE EXITOSO
	

	}
	else{


	}
}
?>
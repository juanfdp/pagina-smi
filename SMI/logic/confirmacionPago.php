<?php

$llave="1111111111111111";/////llave de usuario de pruebas 2
$usuario_id=$_REQUEST['usuario_id'];
$ref_venta=$_REQUEST['ref_venta'];
$valor=$_REQUEST['valor'];
$moneda=$_REQUEST['moneda'];
$estado_pol=$_REQUEST['estado_pol'];
$firma_cadena= $llave."~".$usuario_id."~".$ref_venta."~".$valor."~".$moneda."~".$estado_pol;
$firmacreada = md5($firma_cadena);//firma que generaron ustedes
$firma =$_REQUEST['firma'];//firma que envía nuestro sistema
if(strtoupper($firma)==strtoupper($firmacreada)){//comparación de las firmas
	//código que funciona en caso de que los datos vengan de Pagosonline
	if($_REQUEST['estado_pol'] == 4)
	{
	//CONFIRMACION QUE EL PAGO FUE EXITOSO

	}
	else{


	}
}
?>
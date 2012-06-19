<?php
include_once 'compra.php';
include_once 'functions.php';

$compra=new compra();
$func=new functions();

$esvalidoGenerarPedido=true;


$pedido = array();
$pasajeros= array();


$temp=explode("-", $_POST['fechaInicial']);
$fechaInicial=$temp[1]."-".$temp[0]."-".$temp[2];
$temp=explode("-", $_POST['fechaFinal']);
$fechaFinal=$temp[1]."-".$temp[0]."-".$temp[2];

$cantidadpasajeros= isset($_POST['cantidadpasajeros'])?$_POST['cantidadpasajeros']: $esvalidoGenerarPedido=false;
$idpoliza= isset($_POST['idpoliza'])?$_POST['idpoliza']: $esvalidoGenerarPedido=false;
$refVenta= isset($_POST['refVenta'])?$_POST['refVenta']: $esvalidoGenerarPedido=false;
$pedido[]=$func->NewGuid();//0
$pedido[]= isset($_POST['NombreEmergencia'])?$_POST['NombreEmergencia']: $esvalidoGenerarPedido=false;//1
$pedido[]= isset($_POST['ApellidoEmergencia'])?$_POST['ApellidoEmergencia']: $esvalidoGenerarPedido=false;//2
$pedido[]= isset($_POST['TelefonoEmergencia'])?$_POST['TelefonoEmergencia']: $esvalidoGenerarPedido=false;//3
$pedido[]=isset($_POST['CelularContacto'])?$_POST['CelularContacto']: $esvalidoGenerarPedido=false;//4
$pedido[]=isset($_POST['TelefonoContacto'])?$_POST['TelefonoContacto']: $esvalidoGenerarPedido=false;//5
$pedido[]=isset($_POST['DireccionContacto'])?$_POST['DireccionContacto']: $esvalidoGenerarPedido=false;//6
$pedido[]=isset($_POST['NombreFactu'])?$_POST['NombreFactu']: $esvalidoGenerarPedido=false;//7
$pedido[]=isset($_POST['DocumentoFactu'])?$_POST['DocumentoFactu']: $esvalidoGenerarPedido=false;//8
$pedido[]=isset($_POST['DireccionFactu'])?$_POST['DireccionFactu']: $esvalidoGenerarPedido=false;//9
$pedido[]=isset($_POST['TelefonoFactu'])?$_POST['TelefonoFactu']: $esvalidoGenerarPedido=false;//10
$pedido[]=isset($_POST['emailComprador'])?$_POST['emailComprador']: $esvalidoGenerarPedido=false;//11
$pedido[]=isset($_POST['EmailEmergencia'])?$_POST['EmailEmergencia']: $esvalidoGenerarPedido=false;//12
$pedido[]=isset($_POST['fechaInicial'])? $fechaInicial : $esvalidoGenerarPedido=false;//13
$pedido[]=isset($_POST['fechaFinal'])? $fechaFinal  : $esvalidoGenerarPedido=false;//14
$pedido[]=isset($_POST['valor'])?$_POST['valor']: $esvalidoGenerarPedido=false;//15
$pedido[]=isset($_POST['region'])?$_POST['region']: $esvalidoGenerarPedido=false;//16




//var_dump($pedido);
//echo "CANTIDAD PASAJEROS".$cantidadpasajeros;

if($cantidadpasajeros==1){	

$pasajeros[]=isset($_POST['n1'])?$_POST['n1']: $esvalidoGenerarPedido=false;	
$pasajeros[]=isset($_POST['a1'])?$_POST['a1']: $esvalidoGenerarPedido=false;
$pasajeros[]=isset($_POST['d1'])?$_POST['d1']: $esvalidoGenerarPedido=false;
$pasajeros[]=isset($_POST['em1'])?$_POST['em1']: $esvalidoGenerarPedido=false;
$pasajeros[] = $_POST['fnmes1']."/". $_POST['fndia1']."/".$_POST['fnanio1'];

	
}
else if($cantidadpasajeros==2){


$pasajeros[]=isset($_POST['n1'])?$_POST['n1']: $esvalidoGenerarPedido=false;	
$pasajeros[]=isset($_POST['a1'])?$_POST['a1']: $esvalidoGenerarPedido=false;
$pasajeros[]=isset($_POST['d1'])?$_POST['d1']: $esvalidoGenerarPedido=false;
$pasajeros[]=isset($_POST['em1'])?$_POST['em1']: $esvalidoGenerarPedido=false;
$pasajeros[] = $_POST['fnmes1']."/". $_POST['fndia1']."/".$_POST['fnanio1'];


$pasajeros[]=isset($_POST['n2'])?$_POST['n2']: $esvalidoGenerarPedido=false;	
$pasajeros[]=isset($_POST['a2'])?$_POST['a2']: $esvalidoGenerarPedido=false;
$pasajeros[]=isset($_POST['d2'])?$_POST['d2']: $esvalidoGenerarPedido=false;
$pasajeros[]=isset($_POST['em2'])?$_POST['em2']: $esvalidoGenerarPedido=false;
$pasajeros[] = $_POST['fnmes2']."/". $_POST['fndia2']."/".$_POST['fnanio2'];


}
else if($cantidadpasajeros==3){

	
$pasajeros[]=isset($_POST['n1'])?$_POST['n1']: $esvalidoGenerarPedido=false;	
$pasajeros[]=isset($_POST['a1'])?$_POST['a1']: $esvalidoGenerarPedido=false;
$pasajeros[]=isset($_POST['d1'])?$_POST['d1']: $esvalidoGenerarPedido=false;
$pasajeros[]=isset($_POST['em1'])?$_POST['em1']: $esvalidoGenerarPedido=false;
$pasajeros[] = $_POST['fnmes1']."/". $_POST['fndia1']."/".$_POST['fnanio1'];


$pasajeros[]=isset($_POST['n2'])?$_POST['n2']: $esvalidoGenerarPedido=false;	
$pasajeros[]=isset($_POST['a2'])?$_POST['a2']: $esvalidoGenerarPedido=false;
$pasajeros[]=isset($_POST['d2'])?$_POST['d2']: $esvalidoGenerarPedido=false;
$pasajeros[]=isset($_POST['em2'])?$_POST['em2']: $esvalidoGenerarPedido=false;
$pasajeros[] = $_POST['fnmes2']."/". $_POST['fndia2']."/".$_POST['fnanio2'];


$pasajeros[]=isset($_POST['n3'])?$_POST['n3']: $esvalidoGenerarPedido=false;	
$pasajeros[]=isset($_POST['a3'])?$_POST['a3']: $esvalidoGenerarPedido=false;
$pasajeros[]=isset($_POST['d3'])?$_POST['d3']: $esvalidoGenerarPedido=false;
$pasajeros[]=isset($_POST['em3'])?$_POST['em3']: $esvalidoGenerarPedido=false;
$pasajeros[] = $_POST['fnmes3']."/". $_POST['fndia3']."/".$_POST['fnanio3'];


}
else if($cantidadpasajeros==4){

$pasajeros[]=isset($_POST['n1'])?$_POST['n1']: $esvalidoGenerarPedido=false;	
$pasajeros[]=isset($_POST['a1'])?$_POST['a1']: $esvalidoGenerarPedido=false;
$pasajeros[]=isset($_POST['d1'])?$_POST['d1']: $esvalidoGenerarPedido=false;
$pasajeros[]=isset($_POST['em1'])?$_POST['em1']: $esvalidoGenerarPedido=false;
$pasajeros[] = $_POST['fnmes1']."/". $_POST['fndia1']."/".$_POST['fnanio1'];


$pasajeros[]=isset($_POST['n2'])?$_POST['n2']: $esvalidoGenerarPedido=false;	
$pasajeros[]=isset($_POST['a2'])?$_POST['a2']: $esvalidoGenerarPedido=false;
$pasajeros[]=isset($_POST['d2'])?$_POST['d2']: $esvalidoGenerarPedido=false;
$pasajeros[]=isset($_POST['em2'])?$_POST['em2']: $esvalidoGenerarPedido=false;
$pasajeros[] = $_POST['fnmes2']."/". $_POST['fndia2']."/".$_POST['fnanio2'];


$pasajeros[]=isset($_POST['n3'])?$_POST['n3']: $esvalidoGenerarPedido=false;	
$pasajeros[]=isset($_POST['a3'])?$_POST['a3']: $esvalidoGenerarPedido=false;
$pasajeros[]=isset($_POST['d3'])?$_POST['d3']: $esvalidoGenerarPedido=false;
$pasajeros[]=isset($_POST['em3'])?$_POST['em3']: $esvalidoGenerarPedido=false;
$pasajeros[] = $_POST['fnmes3']."/". $_POST['fndia3']."/".$_POST['fnanio3'];	


$pasajeros[]=isset($_POST['n4'])?$_POST['n4']: $esvalidoGenerarPedido=false;	
$pasajeros[]=isset($_POST['a4'])?$_POST['a4']: $esvalidoGenerarPedido=false;
$pasajeros[]=isset($_POST['d4'])?$_POST['d4']: $esvalidoGenerarPedido=false;
$pasajeros[]=isset($_POST['em4'])?$_POST['em4']: $esvalidoGenerarPedido=false;
$pasajeros[] = $_POST['fnmes4']."/". $_POST['fndia4']."/".$_POST['fnanio3'];	
	
	
}
if($cantidadpasajeros>0  ){	
	$compra->GenerarPedidoWeb($pedido, $pasajeros, $refVenta, $idpoliza,$cantidadpasajeros);	
	
	
	//VARIABLES PARA PAGOS ONLINE
	
	
//ESTA PAGINA ES IMPORTANTE POR QUE ALLI ES DONDE EL SISTEMA DE PAGOS ONLINE NOS RETORNA LA RESPUESTA DESPUES DE HABER
//VERIFICADO LA TRANSACCION.
$llave_encripcion = "131bef7b598";
$usuarioId = "73585";
$refVenta = $_POST['refVenta'];
$iva=16;
$baseDevolucionIva=0;
$valor=$_POST['valor'];
$moneda ="COP";//ESPECIFICAMOS LA MONEDA PARA LA OPERACION.
$prueba = "1";// ESPECIFICAMOS SI ES O NO AMBIENTE DE PRUEBAS
$firma_cadena = $llave_encripcion."~".$usuarioId."~".$refVenta."~".$valor."~".$moneda;
$firma = md5($firma_cadena);
$paginaConfirmacion="http://www.crecersoft.com/Paginasmi/logic/confirmacionPago.php";
$paginaRespuesta="http://www.crecersoft.com/Paginasmi/logic/confirmacionPago.php";
$descripcion="PAGO POLIZA SEGUROS POR PARTE DE :".$_POST['NombreFactu'];
	
	
	echo "<form name=\"compra\" id=\"compra\" method=\"post\"action=\"https://gateway2.pagosonline.net/apps/gateway/index.html\"> ";
	echo"			
			<input  name=\"url_confirmacion\" type=\"hidden\" value=".$paginaConfirmacion.">
			<input	name=\"usuarioId\" type=\"hidden\" value=". $usuarioId ."> 
			<input name=\"descripcion\" type=\"hidden\" value=".$descripcion." >			 
			<input	name=\"refVenta\" id=\"refVenta\" type=\"hidden\" value=". $refVenta ."> 
			<input  name=\"moneda\" type=\"hidden\" value=".$moneda."> 
			<input  name=\"valor\" type=\"hidden\" value=". $valor ."> 
			<input  name=\"iva\"	type=\"hidden\" value=".  $iva ."> 
			<input	name=\"baseDevolucionIva\" type=\"hidden\"	value=".$baseDevolucionIva.">
			<input  name=\"url_confirmacion\" type=\"hidden\" value=".$paginaConfirmacion.">
			<input  name=\"firma\"	type=\"hidden\" value=".$firma."> 
			<input name=\"emailComprador\" type=\"hidden\" value=".$_POST['emailComprador'].">		
			<input	name=\"prueba\" type=\"hidden\" value=".$prueba.">";
			
	echo"</form>";	
	echo"<script language=\"JavaScript\">document.compra.submit();</script></form>";
	
}
//var_dump($pasajeros);

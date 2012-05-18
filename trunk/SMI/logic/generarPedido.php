<?php
include_once 'compra.php';
include_once 'functions.php';

$compra=new compra();
$func=new functions();

$esvalidoGenerarPedido=true;


$pedido = array();
$pasajeros= array();

 

$cantidadpasajeros= isset($_GET['cantidadpasajeros'])?$_GET['cantidadpasajeros']: $esvalidoGenerarPedido=false;
$idpoliza= isset($_GET['idpoliza'])?$_GET['idpoliza']: $esvalidoGenerarPedido=false;
$refVenta= isset($_GET['refVenta'])?$_GET['refVenta']: $esvalidoGenerarPedido=false;
$pedido[]=$func->NewGuid();//0
$pedido[]= isset($_GET['NombreEmergencia'])?$_GET['NombreEmergencia']: $esvalidoGenerarPedido=false;//1
$pedido[]= isset($_GET['ApellidoEmergencia'])?$_GET['ApellidoEmergencia']: $esvalidoGenerarPedido=false;//2
$pedido[]= isset($_GET['TelefonoEmergencia'])?$_GET['TelefonoEmergencia']: $esvalidoGenerarPedido=false;//3
$pedido[]=isset($_GET['CelularContacto'])?$_GET['CelularContacto']: $esvalidoGenerarPedido=false;//4
$pedido[]=isset($_GET['TelefonoContacto'])?$_GET['TelefonoContacto']: $esvalidoGenerarPedido=false;//5
$pedido[]=isset($_GET['DireccionContacto'])?$_GET['DireccionContacto']: $esvalidoGenerarPedido=false;//6
$pedido[]=isset($_GET['NombreFactu'])?$_GET['NombreFactu']: $esvalidoGenerarPedido=false;//7
$pedido[]=isset($_GET['DocumentoFactu'])?$_GET['DocumentoFactu']: $esvalidoGenerarPedido=false;//8
$pedido[]=isset($_GET['DireccionFactu'])?$_GET['DireccionFactu']: $esvalidoGenerarPedido=false;//9
$pedido[]=isset($_GET['TelefonoFactu'])?$_GET['TelefonoFactu']: $esvalidoGenerarPedido=false;//10
$pedido[]=isset($_GET['emailComprador'])?$_GET['emailComprador']: $esvalidoGenerarPedido=false;//11
$pedido[]=isset($_GET['EmailEmergencia'])?$_GET['EmailEmergencia']: $esvalidoGenerarPedido=false;//12
$pedido[]=isset($_GET['fechaInicial'])? str_replace("%2F", "/", $_GET['fechaInicial'])  : $esvalidoGenerarPedido=false;//13
$pedido[]=isset($_GET['fechaFinal'])?str_replace("%2F", "/", $_GET['fechaFinal'])  : $esvalidoGenerarPedido=false;//14
$pedido[]=isset($_GET['valor'])?$_GET['valor']: $esvalidoGenerarPedido=false;//15
$pedido[]=isset($_GET['region'])?$_GET['region']: $esvalidoGenerarPedido=false;//16




//var_dump($pedido);
//echo "CANTIDAD PASAJEROS".$cantidadpasajeros;
if($cantidadpasajeros==1){	

$pasajeros[]=isset($_GET['n1'])?$_GET['n1']: $esvalidoGenerarPedido=false;	
$pasajeros[]=isset($_GET['a1'])?$_GET['a1']: $esvalidoGenerarPedido=false;
$pasajeros[]=isset($_GET['d1'])?$_GET['d1']: $esvalidoGenerarPedido=false;
$pasajeros[]=isset($_GET['em1'])?$_GET['em1']: $esvalidoGenerarPedido=false;
$pasajeros[] = $_GET['fnmes1']."/". $_GET['fndia1']."/".$_GET['fnanio1'];	
}


if($cantidadpasajeros>0  ){	
	$compra->GenerarPedidoWeb($pedido, $pasajeros, $refVenta, $idpoliza,$cantidadpasajeros);	
}
//var_dump($pasajeros);




?>
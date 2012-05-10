<?php
include_once 'compra.php';
include_once 'functions.php';

$compra=new compra();
$func=new functions();

$esvalidoGenerarPedido=true;


$pedido = array();
$pasajeros= array();


$cantidadpasajeros= isset($_GET['cantidadpasajeros'])?$_GET['cantidadpasajeros']: $esvalidoGenerarPedido=false;


$pedido=$func->NewGuid();
$variable= isset($_GET['NombreEmergencia'])?$_GET['NombreEmergencia']: $esvalidoGenerarPedido=false;
echo $variable;
$pedido= isset($_GET['ApellidoEmergencia'])?$_GET['ApellidoEmergencia']: $esvalidoGenerarPedido=false;
$pedido= isset($_GET['TelefonoEmergencia'])?"TelefonoEmergencia": $esvalidoGenerarPedido=false;
$pedido=isset($_GET['CelularContacto'])?$_GET['CelularContacto']: $esvalidoGenerarPedido=false;
$pedido=isset($_GET['DireccionContacto'])?$_GET['DireccionContacto']: $esvalidoGenerarPedido=false;
$pedido=isset($_GET['NombreFactu'])?$_GET['NombreFactu']: $esvalidoGenerarPedido=false;
$pedido=isset($_GET['DireccionFactu'])?$_GET['DireccionFactu']: $esvalidoGenerarPedido=false;
$pedido=isset($_GET['TelefonoFactu'])?$_GET['TelefonoFactu']: $esvalidoGenerarPedido=false;
$pedido=isset($_GET['emailComprador'])?$_GET['emailComprador']: $esvalidoGenerarPedido=false;
$pedido=isset($_GET['Condiciones'])?$_GET['Condiciones']: $esvalidoGenerarPedido=false;


print_r($pedido);


if($cantidadpasajeros==1){	

$pasajeros=isset($_GET['n1'])?$_GET['n1']: $esvalidoGenerarPedido=false;	
$pasajeros=isset($_GET['a1'])?$_GET['a1']: $esvalidoGenerarPedido=false;
$pasajeros=isset($_GET['d1'])?$_GET['d1']: $esvalidoGenerarPedido=false;
$pasajeros=isset($_GET['em1'])?$_GET['em1']: $esvalidoGenerarPedido=false;
$pasajeros = $_GET['fnmes1']."/". $_GET['fndia1']."/".$_GET['fnanio1'];

	
}
else if($cantidadpasajeros==2){


$pasajeros=isset($_GET['n1'])?$_GET['n1']: $esvalidoGenerarPedido=false;	
$pasajeros=isset($_GET['a1'])?$_GET['a1']: $esvalidoGenerarPedido=false;
$pasajeros=isset($_GET['d1'])?$_GET['d1']: $esvalidoGenerarPedido=false;
$pasajeros=isset($_GET['em1'])?$_GET['em1']: $esvalidoGenerarPedido=false;
$pasajeros = $_GET['fnmes1']."/". $_GET['fndia1']."/".$_GET['fnanio1'];


$pasajeros=isset($_GET['n2'])?$_GET['n2']: $esvalidoGenerarPedido=false;	
$pasajeros=isset($_GET['a2'])?$_GET['a2']: $esvalidoGenerarPedido=false;
$pasajeros=isset($_GET['d2'])?$_GET['d2']: $esvalidoGenerarPedido=false;
$pasajeros=isset($_GET['em2'])?$_GET['em2']: $esvalidoGenerarPedido=false;
$pasajeros = $_GET['fnmes2']."/". $_GET['fndia2']."/".$_GET['fnanio2'];


}
else if($cantidadpasajeros==3){

	
$pasajeros=isset($_GET['n1'])?$_GET['n1']: $esvalidoGenerarPedido=false;	
$pasajeros=isset($_GET['a1'])?$_GET['a1']: $esvalidoGenerarPedido=false;
$pasajeros=isset($_GET['d1'])?$_GET['d1']: $esvalidoGenerarPedido=false;
$pasajeros=isset($_GET['em1'])?$_GET['em1']: $esvalidoGenerarPedido=false;
$pasajeros = $_GET['fnmes1']."/". $_GET['fndia1']."/".$_GET['fnanio1'];


$pasajeros=isset($_GET['n2'])?$_GET['n2']: $esvalidoGenerarPedido=false;	
$pasajeros=isset($_GET['a2'])?$_GET['a2']: $esvalidoGenerarPedido=false;
$pasajeros=isset($_GET['d2'])?$_GET['d2']: $esvalidoGenerarPedido=false;
$pasajeros=isset($_GET['em2'])?$_GET['em2']: $esvalidoGenerarPedido=false;
$pasajeros = $_GET['fnmes2']."/". $_GET['fndia2']."/".$_GET['fnanio2'];


$pasajeros=isset($_GET['n3'])?$_GET['n3']: $esvalidoGenerarPedido=false;	
$pasajeros=isset($_GET['a3'])?$_GET['a3']: $esvalidoGenerarPedido=false;
$pasajeros=isset($_GET['d3'])?$_GET['d3']: $esvalidoGenerarPedido=false;
$pasajeros=isset($_GET['em3'])?$_GET['em3']: $esvalidoGenerarPedido=false;
$pasajeros = $_GET['fnmes3']."/". $_GET['fndia3']."/".$_GET['fnanio3'];


}
else if($cantidadpasajeros==4){

$pasajeros=isset($_GET['n1'])?$_GET['n1']: $esvalidoGenerarPedido=false;	
$pasajeros=isset($_GET['a1'])?$_GET['a1']: $esvalidoGenerarPedido=false;
$pasajeros=isset($_GET['d1'])?$_GET['d1']: $esvalidoGenerarPedido=false;
$pasajeros=isset($_GET['em1'])?$_GET['em1']: $esvalidoGenerarPedido=false;
$pasajeros = $_GET['fnmes1']."/". $_GET['fndia1']."/".$_GET['fnanio1'];


$pasajeros=isset($_GET['n2'])?$_GET['n2']: $esvalidoGenerarPedido=false;	
$pasajeros=isset($_GET['a2'])?$_GET['a2']: $esvalidoGenerarPedido=false;
$pasajeros=isset($_GET['d2'])?$_GET['d2']: $esvalidoGenerarPedido=false;
$pasajeros=isset($_GET['em2'])?$_GET['em2']: $esvalidoGenerarPedido=false;
$pasajeros = $_GET['fnmes2']."/". $_GET['fndia2']."/".$_GET['fnanio2'];


$pasajeros=isset($_GET['n3'])?$_GET['n3']: $esvalidoGenerarPedido=false;	
$pasajeros=isset($_GET['a3'])?$_GET['a3']: $esvalidoGenerarPedido=false;
$pasajeros=isset($_GET['d3'])?$_GET['d3']: $esvalidoGenerarPedido=false;
$pasajeros=isset($_GET['em3'])?$_GET['em3']: $esvalidoGenerarPedido=false;
$pasajeros = $_GET['fnmes3']."/". $_GET['fndia3']."/".$_GET['fnanio3'];	


$pasajeros=isset($_GET['n4'])?$_GET['n4']: $esvalidoGenerarPedido=false;	
$pasajeros=isset($_GET['a4'])?$_GET['a4']: $esvalidoGenerarPedido=false;
$pasajeros=isset($_GET['d4'])?$_GET['d4']: $esvalidoGenerarPedido=false;
$pasajeros=isset($_GET['em4'])?$_GET['em4']: $esvalidoGenerarPedido=false;
$pasajeros = $_GET['fnmes4']."/". $_GET['fndia4']."/".$_GET['fnanio3'];	
	
	
	
}

//var_dump($pasajeros);




?>
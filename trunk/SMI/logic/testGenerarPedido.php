<?php
include_once 'compra.php';
include_once 'functions.php';

$compra=new compra();
$func=new functions();

$conexion=new Conect();
//TEST CUANDO EL SISTEMA RECIBE EL NUMERO DE REFERENCIA DE PAGO 

$refVenta="1337332591";
$compra->GenerarPedidoCrecer("1337476897");


	


?>
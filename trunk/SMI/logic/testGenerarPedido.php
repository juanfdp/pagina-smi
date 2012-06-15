<?php
include_once 'compra.php';
include_once 'functions.php';

$compra=new compra();
$func=new functions();

$conexion=new Conect();
//TEST CUANDO EL SISTEMA RECIBE EL NUMERO DE REFERENCIA DE PAGO 

$refVenta="5e9608d8-6979-1378-a40a-d65e2d686470";
$compra->GenerarPedidoCrecer("1339720984");
?>
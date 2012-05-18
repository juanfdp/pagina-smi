<?php
include_once 'compra.php';
include_once 'functions.php';

$compra=new compra();
$func=new functions();
//TEST CUANDO EL SISTEMA RECIBE EL NUMERO DE REFERENCIA DE PAGO 
$compra->GenerarPedidoCrecer("1337332591");







?>
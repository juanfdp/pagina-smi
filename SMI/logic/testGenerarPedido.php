<?php
include_once 'compra.php';
include_once 'functions.php';

$compra=new compra();
$func=new functions();

$guid=$func->NewGuid();
echo  $guid;

$compra->RegistrarPedidoWeb("", "",$guid , "12/25/2012");



?>
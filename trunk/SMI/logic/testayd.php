<?php


require_once  'conect.php';
require_once  'functions.php';
//INSTANCIA DE LA CLASE ENCARGADA DE LOS PARAMETROS
//////////ATRIBUTOS ID PRUEBA 3DC7DBA6-DEA5-4EA6-8FA9-BAC490617673

$pasajerosCotizacion= array ();//ARREGLO

$pasajerosCotizacion[]=66;
$pasajerosCotizacion[]=40;
$pasajerosCotizacion[]=17;
//$pasajerosCotizacion[]=18;

/*AUMENTOS TEST
$func=new functions();
echo $func->getAumentoDescuento("3DC7DBA6-DEA5-4EA6-8FA9-BAC490617673",$pasajerosCotizacion);

*/



//DESCUENTOS TEST
$func=new functions();
//echo $func->getAumentoDescuento("3DC7DBA6-DEA5-4EA6-8FA9-BAC490617673",$pasajerosCotizacion);


//PROBANDO LA FUNCION PARA GENERAR GUID DESDE PHP

$func=new functions();

echo $func->NewGuid();


?>
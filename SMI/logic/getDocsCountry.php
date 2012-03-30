<?php 
//header("Content-Type: text/html; charset=utf-8");
include 'conect.php';
include 'functions.php';
//ATRIBUTOS
$conexion=new Conect();
$fun=new functions();
$IdPais=(int)$_GET['IdPais'];

if($IdPais!=0){

  $db =$conexion->conectarse();	
   $db->Execute("SET NAMES 'utf8'");
  $r = $db->Execute("SELECT        DocumentoPais.Descripcion, Paises.Descripcion AS Pais
FROM            DocumentoPais INNER JOIN
                         Paises ON DocumentoPais.IdPais = Paises.Id WHERE (DocumentoPais.IdPais =  ".$IdPais.")");
  
  echo $variable;
	while (!$r->EOF) {
		
				
				echo" <h4>".$fun->fixEncoding($r->fields[1]). "</h4>
              <div class=\"tiitlePart\"> 
               </div>
               <div class=\"detaPart\">               
               <p>".$fun->fixEncoding($r->fields[0])."</p>               
               </div>";
				$r->MoveNext();
	
	}

}









?>
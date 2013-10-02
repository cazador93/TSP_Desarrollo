<?php
//TODO: validar las variables de sesion
//TODO: verificar si el usuario es admin para poder ver los resultados
$rol = '2';
//TODO : validar rol para ver los reportes
//TODO : Validar si el usuario ya votó

require_once("../../Conexion/openconection.php");

if(isset($_GET["pagina"])==false){ $pagina=1;
}else {$pagina = $_GET["pagina"];}

$cant_reg = 10; $num_pag = $pagina; 
if (!$num_pag) { $comienzo = 0; $num_pag = 1; }   

else { $comienzo = ($num_pag - 1) * $cant_reg; }

$resultado = mysql_query("SELECT id_lista_candidatos FROM lista_votaciones"); 
$total_registros = mysql_num_rows($resultado); 

$resultado = mysql_query("SELECT nombre,fecha_inicial,fecha_final,hora_inicial,hora_final,id_lista_candidatos 
    FROM lista_votaciones ORDER BY fecha_inicial LIMIT $comienzo, $cant_reg");

$total_paginas = ceil($total_registros / $cant_reg);

$registros ="";

while($row=mysql_fetch_array($resultado)) { 
    $registros.="<tr>";
    $registros.="<td class='inf'>".$row["nombre"]."</td>";
    $registros.="<td class='inf'>".$row["fecha_inicial"]." ".$row["hora_inicial"]."</td>";
    $registros.="<td class='inf'>".$row["fecha_final"]." ".$row["hora_final"]."</td>";
    //validar la finalizacion de las otaciones para poder mostrar el botod de reporte de resultados Jhon Tovar 29/09/2013
    $fechaactual =  date("Y-m-d H:i:s");
    $fechainicio = $row["fecha_inicial"]." ".$row["hora_inicial"];
    $fechafinalizacion = $row["fecha_final"]." ".$row["hora_final"];
   
    
    if((strtotime($fechaactual)<strtotime($fechafinalizacion))&&($rol!="1")&&(strtotime($fechaactual)>strtotime($fechainicio)))//valida que se puede votar en el periodo determinado
    {
	  $registros.="<td class='inf'>&nbsp";
      $registros.="<a href='votoForm.php?id_lista=".$row["id_lista_candidatos"]."'>Votar</a>";
	  $registros.="</td>";
    }
    
    $registros.="<td class='inf'>&nbsp";
    if(strtotime($fechaactual)>strtotime($fechafinalizacion)||$rol=="1") //erifica si ya termino la votacion para poder ver los resultados
    {
      $registros.="<a href='resultadovotacion.php?id_lista=".$row["id_lista_candidatos"]."'>| Ver Resultados</a>";
    }
	$registros.="</td>";
	
    $registros.="</tr>";  
   }

$pagant = '';
$pagact = '';
$pagsig = '';

if(($num_pag - 1) > 0) { 
    $pagant = "<a href='votacion.php?pagina=".($num_pag-1)."'>< Anterior</a> "; 
} 
    
for ($i=1; $i<=$total_paginas; $i++) {
    if ($num_pag == $i) { 
     $pagact = "<b><p class='style1'>Página ".$num_pag."</b> "; } 
     else { $pagact = "<a href='votacion.php?pagina=$i'>$i</a> "; } 
     
 }
 
if(($num_pag + 1)<=$total_paginas) { 
    $pagsig = " <a href='votacion.php?pagina=".($num_pag+1)."'>Siguiente ></a>"; }

    
require_once("../../Conexion/closeconection.php");
?>

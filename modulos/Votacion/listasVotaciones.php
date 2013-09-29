<?php
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
    $registros.="<td class='inf'><a href='voto.php?id_lista=".$row["id_lista_candidatos"]."'>Votar</a></td>";
    //validar la finalizacion de las otaciones para poder mostrar el botod de reporte de resultados
    $registros.="<td class='inf'><a href='resultadovotacion.php?id_lista=".$row["id_lista_candidatos"]."'>| Ver Resultados</a></td>";
    $registros.="</tr>";  
   }

$pagant = '';
$pagact = '';
$pagsig = '';

if(($num_pag - 1) > 0) { 
    $pagant = "<a href='listasVotacionesForm.php?pagina=".($num_pag-1)."'>< Anterior</a> "; 
} 
    
for ($i=1; $i<=$total_paginas; $i++) {
    if ($num_pag == $i) { 
     $pagact = "<b><p class='style1'>Página ".$num_pag."</b> "; } 
     else { $pagact = "<a href='listasVotacionesForm.php?pagina=$i'>$i</a> "; } 
     
 }
 
if(($num_pag + 1)<=$total_paginas) { 
    $pagsig = " <a href='listasVotacionesForm.php?pagina=".($num_pag+1)."'>Siguiente ></a>"; }

    
require_once("../../Conexion/closeconection.php");
?>

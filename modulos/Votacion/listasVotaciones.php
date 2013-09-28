<?php
require_once("../../Conexion/openconection.php");

$cant_reg = 10; $num_pag = $pagina; 
if (!$num_pag) { $comienzo = 0; $num_pag = 1; } 
else { $comienzo = ($num_pag - 1) * $cant_reg; }

$resultado = mysql_query("SELECT * FROM roles"); 
$total_registros = mysql_num_rows($resultado); 

$resultado = mysql_query("SELECT id_rol, nombre_rol  FROM roles ORDER BY nombre_rol LIMIT $comienzo, $cant_reg");

$total_paginas = ceil($total_registros / $cant_reg);

while($row=mysql_fetch_array($resultado)) { 
    
    $username=$row["id_rol"]; 
    $password=$row["nombre_rol"]; 
    
   }

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

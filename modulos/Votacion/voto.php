<?php
//TODO:VALIDAR VARIABLES DE SESION
//TODO:Proceso de voto
//TODO:Validar si cambian el id por la url para que consulte si existe
//TODO:Validar la vigencia de la votacion en caso de cambiar el id de la lista por la url
$id_lista = $_REQUEST["id_lista"];
require_once("../../Conexion/openconection.php");
require_once("functions.php");

$instancia = new Funciones();
//1.Consulta los candidatos para esa lista


$resultado = $instancia->infolista($id_lista);
$numcandid = mysql_numrows($resultado);

$i = 1;

$candidatos = ''; 
$clase = '';
while($row=  mysql_fetch_array($resultado))
{
    $nombrelista = $row["nombre"];
    if($i%2== 0) //valida si es par para aplicar la calse
    {$clase = 'optionpar';}
    else{ $clase = 'optionimpar'; }
    $candidatos.='<div class='.$clase.'>'.$row["nombre_usuario"].'</div>';
    
    if($i%2== 0)$candidatos.='<br>';      
    //echo $candidatos;
    $i++;
}


//2.Consulta si la lista aun esta en vigencia ademas del nombre de la lista

//TODO:valida si el usuario ya voto


require_once("../../Conexion/closeconection.php");
?>

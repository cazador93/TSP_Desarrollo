<!DOCTYPE HTML>
<?php 
require_once("listasvotaciones.php")
?>
<html>
    <head>
        <link rel="shortcut icon" href="../../img/votaciones.png" /> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <style>
            @font-face{
                font-family: Simply Complicated;
                src: url("../../css/fuentes/Simply Complicated.ttf") format("truetype");
            }
        </style>
        <link href="../../css/votaciones.css" type="text/css" rel="stylesheet"> 
        <title>Lista de Votaciones</title>
    </head>
   <body id="votaciones">
        <table border='0'>
            <tr>
                <td colspan='5' align='center'><h2><strong>Lista de Votaciones</strong></h2></td>
            </tr>
            <tr>
                <td align='center' class='inf'><strong>Nombre</strong></td>
                <td align='center' class='inf'><strong>Fecha de Inicio</strong></td>
                <td align='center' class='inf'><strong>Fecha de culminación</strong></td>
                <td align='center' class='inf' colspan='2'><strong>Acciones</strong></td>
            </tr>
            <?php 
             echo $registros;
            ?>
            <tr><td colspan='5'> <?php echo $pagant."     ".$pagsig ?></td></tr>
        </table>
          </body>       
</html>

<!DOCTYPE html>
<?php 
$modulo = "votacion";
require_once("../menu.php");
require_once("listasvotaciones.php")
?>
<html class="html">
    <head>
        <link rel="shortcut icon" href="../../img/votaciones.png" /> 
        <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
        <meta name="generator" content="6.0.751.219"/>
        <title>Votación</title>
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="../../css/site_global.css?114823713"/>
        <link rel="stylesheet" type="text/css" href="../../css/master_login.css?4101461998"/>
        <link rel="stylesheet" type="text/css" href="../../css/master_formato_admin.css?3983214601"/>
         <style>
            @font-face{
                font-family: Simply Complicated;
                src: url("../../css/fuentes/Simply Complicated.ttf") format("truetype");
            }
        </style>
        <link rel="stylesheet" type="text/css" href="../../css/votacion.css?4070776675" id="pagesheet"/>
        <script type="text/javascript" src="../../include/jquery-1.8.3.min.js"></script>
        <script type='text/javascript'>
            var moduloactual = 'u313';
        </script>
        <script type="text/javascript" src="js/votacion.js"></script>
    </head>
    <body>
        <div class="rounded-corners clearfix" id="page"><!-- group -->
            <img class="grpelem" id="u142-4" src="../../img/u142-4.png" alt="Smart&#45;Soft" width="304" height="160"/><!-- rasterized frame -->
             <?php echo $menu?>
            <div class="verticalspacer">
            </div>
          <table border='0' cellspacing='0' cellspadding='0' style='width: 70%'>
            <tr>
                <td colspan='5' align='center'><h1><strong>Lista de Votaciones</strong></h1></td>
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
        </div>
    </body>
</html>

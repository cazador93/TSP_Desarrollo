<?php
if($modulo!="modulo"){
 $rutaant = "../";    
}
else $rutaant = "";

//se reulitiza el codigo del menu para incluirlo en todas las paginas
/*$classselect = 'nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive rounded-corners clearfix colelem';
$classselect = 'nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem';*/

$menu = '
<ul class="MenuBar rounded-corners clearfix grpelem" id="menuu188"><!-- row -->
                <li class="MenuItemContainer clearfix grpelem" id="u269"><!-- vertical box -->
                    <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive rounded-corners clearfix colelem" id="u270" href="'.$rutaant.'inicio.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u272-3"><!-- content --><p>&nbsp;</p></div></a>
                </li>
                <li class="MenuItemContainer clearfix grpelem" id="u276"><!-- vertical box -->
                    <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u279" href="'.$rutaant.'Registro/registro_candidato.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u282-4"><!-- content --><p>Registro Candidato</p></div></a>
                </li>
                <li class="MenuItemContainer clearfix grpelem" id="u346"><!-- vertical box -->
                    <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u347" href="'.$rutaant.'Registro/registro_usuario.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u348-4"><!-- content --><p>Registro Usuario</p></div></a>
                </li>
                <li class="MenuItemContainer clearfix grpelem" id="u310"><!-- vertical box -->
                    <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u313" href="'.$rutaant.'Votacion/votacion.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u314-4"><!-- content --><p>Votación</p></div></a>
                </li>
                <li class="MenuItemContainer clearfix grpelem" id="u317"><!-- vertical box -->
                    <a class="nonblock nontext MenuItem MenuItemWithSubMenu rounded-corners clearfix colelem" id="u320" href="'.$rutaant.'Reportes/reportes.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u321-4"><!-- content --><p>Reportes</p></div></a>
                </li>
            </ul>
            <a class="nonblock nontext MuseLinkActive grpelem" id="u329" href="'.$rutaant.'inicio.php"><!-- image --><img class="block" id="u329_img" src="'.$rutaant.'../img/imagen2.png" alt="" width="47" height="47"/></a>';
?>

<!DOCTYPE html>
<?php 
$modulo = "registro";
require_once("../menu.php");
?>
<html class="html">
    <head>
        <link rel="shortcut icon" href="../../img/votaciones.png" /> 
        <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
        <meta name="generator" content="6.0.751.219"/>
        <title>Registro de Usuarios</title>
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="../../css/site_global.css?114823713"/>
        <link rel="stylesheet" type="text/css" href="../../css/master_login.css?4101461998"/>
        <link rel="stylesheet" type="text/css" href="../../css/master_formato_admin.css?3983214601"/>
        <link rel="stylesheet" type="text/css" href="../../css/registro_usuario.css?153691935" id="pagesheet"/>
          <script type="text/javascript" src="../../include/jquery-1.8.3.min.js"></script>
        <script type='text/javascript'>
            var moduloactual = 'u347';
        </script>
        <script type="text/javascript" src="js/registro.js"></script>
    </head>
    <body>

        <div class="rounded-corners clearfix" id="page"><!-- column -->
            <div class="position_content" id="page_position_content">
                <div class="clearfix colelem" id="pu142-4"><!-- group -->
                    <img class="grpelem" id="u142-4" src="../../img/u142-4.png" alt="Smart&#45;Soft" width="304" height="160"/><!-- rasterized frame -->
                    <?php echo $menu;?>
                </div>
                <div class="clearfix colelem" id="u425"><!-- group -->
                    <div class="rounded-corners clearfix grpelem" id="u398"><!-- column -->
                        <div class="position_content" id="u398_position_content">
                            <div class="clearfix colelem" id="u379"><!-- group -->
                                <div class="clearfix grpelem" id="u385"><!-- group -->
                                    <img class="grpelem" id="u380-4" src="../../img/u380-4.png" alt="Registrar Usuario" width="266" height="35"/><!-- rasterized frame -->
                                </div>
                            </div>
                            <div class="clearfix colelem" id="pu386"><!-- group -->
                                <div class="grpelem" id="u386"><!-- custom html -->
                                    <label>Nombre:</label>
                                </div>
                                <div class="grpelem" id="u395"><!-- custom html -->
                                    <input type='text' name='nombre' placeholder='Nombre'/>
                                </div>
                            </div>
                            <div class="clearfix colelem" id="ppu391"><!-- group -->
                                <div class="clearfix grpelem" id="pu391"><!-- column -->
                                    <div class="colelem" id="u391"><!-- custom html -->
                                        <label>Apellido:</label>
                                    </div>
                                    <div class="colelem" id="u376"><!-- custom html -->
                                        <label>Genero:</label>
                                    </div>
                                    <div class="colelem" id="u403"><!-- custom html -->
                                        <label>Fecha Nacimiento:</label>
                                    </div>
                                    <div class="colelem" id="u407"><!-- custom html -->
                                        <label>Usuario:</label>
                                    </div>
                                </div>
                                <div class="clearfix grpelem" id="pu389"><!-- column -->
                                    <div class="colelem" id="u389"><!-- custom html -->
                                        <input type="text" name='apellido' placeholder='Apellido'/>
                                    </div>
                                    <div class="colelem" id="u393"><!-- custom html -->
                                       <select name='genero'>
                                        <option value='F'>Femenino</option>
                                        <option value='M'>Masculino</option>
                                       </select>
                                    </div>
                                    <div class="colelem" id="u405"><!-- custom html -->
                                        <input type='date' name='fechanac'/>
                                    </div>
                                    <div class="colelem" id="u415"><!-- custom html -->
                                        <input type='text' name='usuario' placeholder='Usuario'/>
                                    </div>
                                </div>
                                <div class="grpelem" id="u419"><!-- image -->
                                    <img class="block" id="u419_img" src="../../img/imagen3.png" alt="" width="234" height="233"/>
                                </div>
                            </div>
                            <div class="clearfix colelem" id="pu411"><!-- group -->
                                <div class="grpelem" id="u411"><!-- custom html -->
                                    <label>Password:</label>
                                </div>
                                <div class="grpelem" id="u413"><!-- custom html -->
                                    <input type='password' name='contrasena' placeholder='contrasena'/>
                                </div>
                            </div>
                            <div class="colelem" id="u417"><!-- custom html -->
                                <input type='submit' value='Registrar'/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="verticalspacer"></div>
            </div>
        </div>
    </body>
</html>

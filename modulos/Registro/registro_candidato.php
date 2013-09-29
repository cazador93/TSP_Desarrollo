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
        <title>Registro Candidatos</title>
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="../../css/site_global.css?114823713"/>
        <link rel="stylesheet" type="text/css" href="../../css/master_login.css?4101461998"/>
        <link rel="stylesheet" type="text/css" href="../../css/master_formato_admin.css?3983214601"/>
        <link rel="stylesheet" type="text/css" href="../../css/registro_candidato.css?206087281" id="pagesheet"/>
        <script type="text/javascript" src="../../include/jquery-1.8.3.min.js"></script>
        <script type='text/javascript'>
            var moduloactual = 'u279';
        </script>
        <script type="text/javascript" src="js/registro.js"></script>
    </head>
    <body>

        <div class="rounded-corners clearfix" id="page"><!-- column -->
            <div class="position_content" id="page_position_content">
                <div class="clearfix colelem" id="pu142-4"><!-- group -->
                    <img class="grpelem" id="u142-4" src="../../img/u142-4.png" alt="Smart&#45;Soft" width="304" height="160"/><!-- rasterized frame -->
                    <?php echo $menu ?>
                </div>
                <div class="rounded-corners clearfix colelem" id="u435"><!-- column -->
                    <div class="position_content" id="u435_position_content">
                        <div class="clearfix colelem" id="u456"><!-- group -->
                            <div class="clearfix grpelem" id="u457"><!-- group -->
                                <img class="grpelem" id="u458-4" src="../../img/u458-4.png" alt="Registrar Candidato" width="322" height="35"/><!-- rasterized frame -->
                            </div>
                        </div>
                        <div class="clearfix colelem" id="pu460"><!-- group -->
                            <div class="grpelem" id="u460"><!-- custom html -->
                                <label>Cedula:</label>
                            </div>
                            <div class="grpelem" id="u462"><!-- custom html -->
                                <input type='text' placeholder='Documento'/>
                            </div>
                        </div>
                        <div class="clearfix colelem" id="ppu433"><!-- group -->
                            <div class="clearfix grpelem" id="pu433"><!-- column -->
                                <div class="colelem" id="u433"><!-- custom html -->
                                    <label>Nombre:</label>
                                </div>
                                <div class="colelem" id="u442"><!-- custom html -->
                                    <label>Apellido:</label>
                                </div>
                                <div class="colelem" id="u464"><!-- custom html -->
                                    <label>Foto:</label>
                                </div>
                                <div class="colelem" id="u440"><!-- custom html -->
                                    <label>Genero:</label>
                                </div>
                            </div>
                            <div class="clearfix grpelem" id="pu448"><!-- column -->
                                <div class="colelem" id="u448"><!-- custom html -->
                                    <input type='text' name='nombre' placeholder='Nombre'/>
                                </div>
                                <div class="colelem" id="u446"><!-- custom html -->
                                    <input type='text' name ='apellido' placeholder='Apellido'/>
                                </div>
                                <div class="colelem" id="u466"><!-- custom html -->
                                    <input type='file' name='foto'/>
                                </div>
                                <div class="colelem" id="u436"><!-- custom html -->
                                    <select name='genero'>
                                        <option value='F'>Femenino</option>
                                        <option value='M'>Masculino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="grpelem" id="u450"><!-- image -->
                                <img class="block" id="u450_img" src="../../img/imagen3.png" alt="" width="234" height="233"/>
                            </div>
                        </div>
                        <div class="clearfix colelem" id="pu438"><!-- group -->
                            <div class="grpelem" id="u438"><!-- custom html -->
                                <label>Fecha Nacimiento:</label>
                            </div>
                            <div class="grpelem" id="u454"><!-- custom html -->
                                <input type="date" name="fechanac"/>
                            </div>
                        </div>
                        <div class="clearfix colelem" id="pu429"><!-- group -->
                            <div class="grpelem" id="u429"><!-- custom html -->
                                <label>Usuario:</label>
                            </div>
                            <div class="grpelem" id="u427"><!-- custom html -->
                                <input type="text" name="usuario" placeholder="Usuario"/>
                            </div>
                        </div>
                        <div class="clearfix colelem" id="pu452"><!-- group -->
                            <div class="grpelem" id="u452"><!-- custom html -->
                                <label>Password:</label>
                            </div>
                            <div class="grpelem" id="u431"><!-- custom html -->
                                <input type="password" name="contrasena" placeholder="Contraseña"/>
                            </div>
                        </div>
                        <div class="colelem" id="u444"><!-- custom html -->
                            <input type="submit" value="Registrar"/>
                        </div>
                    </div>
                </div>
                <div class="verticalspacer"></div>
            </div>
        </div>
    </body>
</html>

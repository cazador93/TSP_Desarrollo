<?php
class Funciones
{

    function infolista($id_lista)
    {
        $consulta = "Select nombre,fecha_inicial,hora_inicial,fecha_final,hora_final,nombre_usuario,foto 
            from candidatos_lista 
            inner join usuarios on usuarios.id_usuario= candidatos_lista.id_usuario
            inner join lista_votaciones on candidatos_lista.id_lista = lista_votaciones.id_lista_candidatos
            where id_lista=$id_lista and candidato='1'";
        $resultado = mysql_query($consulta);
        return $resultado;
    }
}

?>

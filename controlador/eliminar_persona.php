<?php

if (!empty($_GET["Id"])){
    $Id=$_GET["Id"];
    $sql=$conexion->query(" delete from persona where Id_persona=$Id ");
    if ($sql==1){
        echo'<div class="alert alert-success">Persona eliminada correctamente</div>';
    } else{
        echo'<div class="alert alert-danger">Error al eliminar</div>';
    }
}


?>
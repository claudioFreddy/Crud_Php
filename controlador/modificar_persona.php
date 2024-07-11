<?php

if(!empty($_POST["btnregistrar"])) {
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["CNI"]) and !empty($_POST["fecha_nac"]) and !empty($_POST["correo"])) {
    $Id=$_POST["Id"];
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $CNI=$_POST["CNI"];
    $fecha_nac=$_POST["fecha_nac"];
    $correo=$_POST["correo"];

    $sql=$conexion->query(" update persona set nombre ='$nombre', apellido ='$apellido', CNI='$CNI', correo='$correo' where Id_persona=$Id" );
    if ($sql==1) {
        header ('location:index.php');
    } else {
        echo "<div class='alert alert-danger'>Error al modificar producto</div>";
    }
    
    }else{
        echo "<div class='alert alert-warning'>Campos vacios</div>";
    }
}


?>
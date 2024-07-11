<?php

if(!empty($_POST["btnregistrar"])) {
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["CNI"]) and !empty($_POST["fecha_nac"]) and !empty($_POST["correo"])) {
        
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $CNI=$_POST["CNI"];
        $fecha_nac=$_POST["fecha_nac"];
        $correo=$_POST["correo"];
 
        $sql=$conexion->query(" insert into persona(nombre,apellido,CNI,fecha_nac,correo)values('$nombre','$apellido','$CNI','$fecha_nac','$correo') ");
         if ($sql == 1 ) {
             echo '<div class="alert alert-success">Persona registrado correctamente</div>';
         } else {
              echo '<div class="alert alert-success">Error al registrar persona</div>';
         }
         
     }else{
         echo '<div class="alert alert-success">Alguno de los campos esta vacio</div>';
     }   
 }
 
 ?>
    
    
  
        



     
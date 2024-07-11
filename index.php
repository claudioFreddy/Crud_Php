<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud en Php y Mysql</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  </head>
<body>
  <script>
    function eliminar(){
      var respuesta=confirn("Estas seguro que deseas eliminar?");
      return respuesta      
    }
  </script>
<h1 class='text-center'>Lista Usuarios</h1>
<?php
include "modelo/conexion.php";
include "controlador/eliminar_persona.php";

?>
<div class="container-fluid row">
    <form class="col-4 p-3" method="POST">
      <h3 class="text-center text-secondary">Registro de personas</h3>
      <?php
      
      include "controlador/registro_persona.php";
      ?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre de la persona</label>
            <input type="text" class="form-control" name="nombre">              
        </div>  
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Apellido de la persona</label>
            <input type="text" class="form-control" name="apellido">              
        </div> 
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">CNI de la persona</label>
            <input type="text" class="form-control" name="CNI">              
        </div> 
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
            <input type="date" class="form-control" name="fecha_nac">              
        </div> 
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo</label>
            <input type="text" class="form-control" name="correo">              
        </div>        
        <button type="text" class="btn btn-primary" name="btnregistrar" value="Ok">Registrar</button>
    </form>
  
      <div class="col-8 p-4">
        <table class="table">
             <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRES</th>
                    <th scope="col">APELLIDOS</th>
                    <th scope="col">DNI</th>
                    <th scope="col">FECHA DE NAC</th>
                    <th scope="col">CORREO</th>
                    <th scope="col"></th>
                </tr>
            </thead>
  <tbody>
    <?php
    include 'modelo/conexion.php';
    $sql=$conexion->query(' select * from persona');
    while($datos=$sql->fetch_object()){ ?>
    <tr>
        <td><?=$datos->Id_persona ?></td>
        <td><?=$datos->nombre?></td>
        <td><?=$datos->apellido?></td>
        <td><?=$datos->CNI?></td>
        <td><?=$datos->fecha_nac?></td>
        <td><?=$datos->correo?></td>
        <td>
        
        <a href="modificar_producto.php?Id=<?= $datos->Id_persona ?>" class="btn btn-primary">
        <i class="fas fa-pen-to-square"></i> Editar</a>

        <a href="index.php?Id=<?= $datos->Id_persona ?>" class="btn btn-danger">
          <i class="fa-solid fa-trash"></i>eliminar</a>     
        </td>
    </tr>
    <?php }
    ?>
      
   
  </tbody>
</table>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>


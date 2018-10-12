<?php

include 'clases/conexion.php';
include 'clases/producto.php';

 $objConexion = new conexion();
 $objProducto = new producto();

 $conexion = $objConexion->conectar();
 $productos = $objProducto->consultar($conexion);
 
 ?>

<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
     <title>Document</title>
 </head>
 <body>
     <table>
        <tr>
            
            <th> Nombre </th>
            <th> Valor </th>
            <th> Cantidad </th>
            <th> Editar</th>
            <th> eliminar</th>
            <th> Categoria </th>
        </tr>
    
     <?php
       while ($producto = mysqli_fetch_array($productos)){
        ?>
        <tr>
            
            <td><?php echo $producto['Nom']?></td>
            <td><?php echo $producto['Valor']?></td>
            <td><?php echo $producto['Cantidad']?></td>
            <td><?php echo $producto['Categoria']?></td>
            <td><a href="editarproducto.php?id= <?php echo $producto['IdCategoria']?>">Editar</a></td>
            <td><a href="controlador/eliminarproducto.php?id=<?php echo $producto['IdCategoria'];?>">Eliminar</a></td>
            
        </tr>
        <?php
         }
        ?>      
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
        <center><a href="menu.html"><button type="button" class="btn btn-warning">Volver</button></a></center>
 </body>
 </html>
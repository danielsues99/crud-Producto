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
        </tr>
    
     <?php
       while ($Producto = mysqli_fetch_array($productos)){
        ?>
        <tr>
            <td><?php echo $Producto['Nombre']?></td>
            <td><?php echo $Producto['Valor']?></td>
            <td><?php echo $Producto['Cantidad']?></td>

        </tr>
        <?php
         }
        ?>
      
    </table>
    <center><a href="index.html"><button>Volver</button></a></center>
 </body>
 </html>
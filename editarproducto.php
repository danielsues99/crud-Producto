<?php

    include "clases/conexion.php";
    include "clases/producto.php";

    $objConexion = new conexion();
    $objCategoria = new producto();

    $conexion = $objConexion->conectar();
    $datosCategoria = $objCategoria->consultarId($conexion, $_GET['id']);
    
    $Nombre;
    $Descripcion;
    $Codigo;
    $IdCategoria;

    while($categoria = mysqli_fetch_array($datosCategoria)){
        $IdCategoria = $categoria['IdCategoria'];
        $Nombre = $categoria['Nombre'];
        $Descripcion = $categoria['Valor'];
        $Codigo = $categoria['Cantidad'];    
    }


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
        <form action="controlador/editarproducto.php" method="POST">

            <input type="hidden" name="IdCategoria" value=<?php echo "$IdCategoria"?>>
            <label for="">Nombre </label><input type="Text" value="<?php echo $Nombre; ?>" name="Nombre" IdCategoria="Nombre"><br>
            <label for="">Valor</label><input type="Text" value="<?php echo $Valor; ?>" name="Valor" IdCategoria="Valor"><br>
            <label for="">Cantidad </label><input type="Text" value="<?php echo $Cantidad; ?>" name="Cantidad" IdCategoria="Cantidad"><br>

             <input type="Submit" name="Editar" value="Actualizar">

        </form>

        <br><a href='consultarproducto.php'><button>Volver al Menu</button></a>

    </body>
</html>
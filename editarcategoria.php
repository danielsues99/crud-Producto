<?php

    include "clases/conexion.php";
    include "clases/categoria.php";

    $objConexion = new conexion();
    $objCategoria = new categoria();

    $conexion = $objConexion->conectar();
    $datosCategoria = $objCategoria->consultarId($conexion, $_GET['id']);
    
    $Nombre;
    $Descripcion;
    $Codigo;
    $IdCategoria;

    while($categoria = mysqli_fetch_array($datosCategoria)){
        $IdCategoria = $categoria['IdCategoria'];
        $Nombre = $categoria['Nombre'];
        $Descripcion = $categoria['Descripcion'];
        $Codigo = $categoria['Codigo'];    
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
        <form action="controlador/editarcategoria.php" method="POST">

            <input type="hidden" name="IdCategoria" value=<?php echo "$IdCategoria"?>>
            <label for="">Nombre </label><input type="Text" value="<?php echo $Nombre; ?>" name="Nombre" IdCategoria="Nombre"><br>
            <label for="">Descripcion</label><input type="Text" value="<?php echo $Descripcion; ?>" name="Descripcion" IdCategoria="Descripcion"><br>
            <label for="">Codigo </label><input type="Text" value="<?php echo $Codigo; ?>" name="Codigo" IdCategoria="Codigo"><br>

             <input type="Submit" name="Editar" value="Actualizar">

        </form>

        <br><a href='menu.html'><button>Volver al Menu</button></a>

    </body>
</html>
<?php
    include 'clases/conexion.php';
    include 'clases/categoria.php';

    $objConexion = new conexion();
    $objProducto = new categoria();

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
    <form action="controlador/registroproducto.php" method="POST">
    <h2 ><center>Registro producto</center></h2>
    <h3><label>Nombre </label><input type="text" name="Nombre"></h3>
    <h3><label>Valor </label><input type="text" name="Valor"></h3>
    <h3><label>Cantidad </label><input type="text" name="Cantidad"></h3>
    <h3><label>Categoria </label></h3>
    <select name="IdCategoria"> 
        <?php
            while($producto = mysqli_fetch_array($productos))
            {
            ?>
            <option value="<?php echo $producto['IdCategoria'] ?>"><?php echo $producto['Nombre'] ?></option>
            <?php
            }
        ?>  
    </select> 
    <center><input type="submit" value="Registrar"></center>
    </form>
    <br><br>
    <center><a href="menu.html"><button>Regresar</button></a></center> 
</body>
</html>
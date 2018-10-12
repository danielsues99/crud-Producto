<?php

include '../clases/conexion.php';
include '../clases/producto.php';

$objConexion = new conexion();
$objCategoria = new producto();

$conexion = $objConexion->conectar();
echo $objCategoria->editar($conexion,$_POST['IdProducto'],$_POST['Nombre'],$_POST['Valor'],
$_POST['Cantidad']);
echo "<a href='../consultarproducto.php'>Volver</a>";
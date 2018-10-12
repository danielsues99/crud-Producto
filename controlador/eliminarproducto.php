<?php

include '../clases/conexion.php';
include '../clases/producto.php';

$objConexion = new conexion();
$objProducto = new producto();

$conexion = $objConexion->conectar();
echo $objProducto->eliminar($conexion, $_GET['id']);
echo "<center><a href ='../consultarproducto.php'><button>Volver</button></a></center>";
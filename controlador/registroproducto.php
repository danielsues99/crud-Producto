<?php

include '../clases/conexion.php';
include '../clases/producto.php';

$objConexion = new conexion();
$objProducto = new producto();

$conexion = $objConexion->conectar();
echo $objProducto->registrar($conexion,$_POST['Nombre'],$_POST['Valor'],$_POST['Cantidad'],
$_POST['IdCategoria']);
echo " <a href='../registroproducto.php'><button>Regresar</button></a>";
<?php

include '../clases/conexion.php';
include '../clases/categoria.php';

$objConexion = new conexion();
$objCategoria = new categoria();

$conexion = $objConexion->conectar();
echo $objCategoria->eliminar($conexion, $_GET['id']);
echo "<center><a href ='../consultarcategoria.php'><button>Volver</button></a></center>";
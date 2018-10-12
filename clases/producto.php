<?php

class producto
{
    public function registrar($conexion,$Nombre,$Valor,$Cantidad,$IdCategoria){
        $query = "call registro_producto('$Nombre','$Valor','$Cantidad','$IdCategoria')";
        $consulta = mysqli_query($conexion,$query);
        if ($consulta){
            $respuesta = "Producto Registrado";
        }
        else {
            $respuesta = "Problemas al registrar";
        }
        return $respuesta;
    }
    public function consultar($conexion){
        $query ="SELECT * FROM ConsultaProductos";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }
    public function consultarid($conexion, $IdProducto){
        $query = "call consultar_producto('$IdProducto')";
        $consulta = mysqli_query($conexion,$query);
        return $consulta;
    }
    public function editar($conexion,$IdCategoria,$Nombre,$Valor,$Cantidad){
        $query = "call editar_producto('$IdCategoria','$Nombre','$Valor','$Cantidad')";
        $consulta = mysqli_query($conexion,$query);
        if ($consulta){
            $respuesta = "Producto Actualizado correctamente";
        }
        else{
            $respuesta = "Problemas al actualizar";
        }
        return $respuesta;
    }
} 
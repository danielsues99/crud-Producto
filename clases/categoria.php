<?php

class categoria{
    public function registrar($conexion,$Nombre,$Descripcion,$Codigo){
        $query = "call registro_categoria('$Nombre','$Descripcion','$Codigo')";
        $consulta = mysqli_query($conexion,$query);
        if ($consulta){
            $respuesta = "Categoria Registrada";
        }
        else {
            $respuesta = "Problemas al registrar";
        }
        return $respuesta;
    }
    public function consultar($conexion){
        $query ="SELECT * FROM ConsultaCategorias";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }
    public function consultarid($conexion, $IdCategoria){
        $query = "call consultar_categoria('$IdCategoria')";
        $consulta = mysqli_query($conexion,$query);
        return $consulta;
    }
    public function editar($conexion,$IdCategoria,$Nombre,$Descripcion,$Codigo){
        $query = "call editar_categoria('$IdCategoria','$Nombre','$Descripcion','$Codigo')";
        $consulta = mysqli_query($conexion,$query);
        if ($consulta){
            $respuesta = "Categoria Actualizada correctamente";
        }
        else{
            $respuesta = "Problemas al actualizar";
        }
        return $respuesta;
    }

    public function eliminar($conexion,$IdCategoria){
        $query = "call eliminar_categoria('$IdCategoria')";
        $consulta = mysqli_query($conexion,$query);
        if($consulta){
            $respuesta = "Categoria eliminada";
        }
        else{
            $respuesta ="Problemas al eliminar";
        }
        return $respuesta;
    }
}
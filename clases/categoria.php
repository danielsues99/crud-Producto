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

}
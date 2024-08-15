<?php

require_once "conexion.php";

class CategoriasModelo{


    static public function mdlListarCategorias(){

        $stmt = Conexion::conectar()->prepare("SELECT  id_categoria, 
                                                        nombre_categoria, 
                                                        aplica_peso as medida, 
                                                        date(fecha_creacion_categoria) as fecha_creacion_categoria, 
                                                        fecha_actualizacion_categoria, 
                                                        '' as opciones
                                                FROM categorias c order BY id_categoria DESC");

        $stmt -> execute();

        return $stmt->fetchAll();
    }

    static public function mdlGuardarCategoria($accion, $idCategoria, $categoria, $medida){

        $date = null;

        if($accion > 0){// REGISTRAR

            $date = date("Y-m-d H:i:s");
            
            $stmt = Conexion::conectar()->prepare("INSERT INTO categorias(nombre_categoria,aplica_peso,fecha_actualizacion_categoria) 
            VALUES(:categoria,:medida,:fecha_actualizacion_categoria)");

            $stmt -> bindParam(":categoria", $categoria , PDO::PARAM_STR);
            $stmt -> bindParam(":medida", $medida , PDO::PARAM_STR);
            $stmt -> bindParam(":fecha_actualizacion_categoria",  $date , PDO::PARAM_STR);

            if($stmt -> execute()){
                $resultado = "Se registró la categoría correctamente.";
            }else{
                $resultado = "Error al registrar la categoria";
            }

        }else{// EDITAR

            $date = date("Y-m-d H:i:s");

            $stmt = Conexion::conectar()->prepare("UPDATE categorias 
                                                      SET nombre_categoria = :categoria,
                                                          aplica_peso = :medida,
                                                          fecha_actualizacion_categoria = :fecha_actualizacion_categoria
                                                    WHERE id_categoria = :idCategoria") ;
            

            $stmt -> bindParam(":idCategoria", $idCategoria , PDO::PARAM_STR);
            $stmt -> bindParam(":categoria", $categoria , PDO::PARAM_STR);
            $stmt -> bindParam(":medida", $medida, PDO::PARAM_STR);
            $stmt -> bindParam(":fecha_actualizacion_categoria",  $date , PDO::PARAM_STR);

            if($stmt -> execute()){
                $resultado = "Se actualizó la categoría correctamente.";
            }else{
                $resultado = "Error al actualizar la categoría";
            }
        }

        return $resultado;
        
        $stmt = null;

    }

    static public function mdlListarCategorias2(){

        $stmt = Conexion::conectar()->prepare(" SELECT 
                                                    '' AS eleccion,
                                                    c.id_categoria, 
                                                    c.nombre_categoria,
                                                    COUNT(p.id) AS num_productos, 
                                                    '' AS opciones
                                                    
                                                FROM 
                                                    categorias c
                                                LEFT JOIN 
                                                    productos p ON c.id_categoria = p.id_categoria_producto
                                                GROUP BY 
                                                    c.id_categoria, c.nombre_categoria
                                                ORDER BY 
                                                    c.nombre_categoria ASC;");

        $stmt -> execute();

        return $stmt->fetchAll();
    }

    static public function mdlListarProductos($id_categoria){

        $stmt = Conexion::conectar()->prepare(" SELECT `codigo_producto`,`descripcion_producto` FROM `productos` WHERE `id_categoria_producto` = :id_categoria;");

        $stmt -> bindParam(":id_categoria", $id_categoria , PDO::PARAM_STR);

        $stmt -> execute();

        return $stmt->fetchAll();
    }

    static public function mdlListarCategorias3(){

        $stmt = Conexion::conectar()->prepare(" SELECT 
                                                    c.id_categoria, 
                                                    c.nombre_categoria
                     
                                                FROM 
                                                    categorias c
                                                
                                                ORDER BY 
                                                    c.nombre_categoria ASC;");

        $stmt -> execute();

        $productos = $stmt->fetchAll();

        $productData = array();

        foreach($productos as $producto){
            $id_catalogo = $producto["id_categoria"];
            $codigo_producto = $producto["nombre_categoria"];
            

            $data["id"] = $producto["id_categoria"];
            $data["value"] = $id_catalogo.' - '.$codigo_producto;
            $data["label"] = '
            <a href = "javascript:void(0);" class = "d-flex" style = "width:100% !important; ">
                <div class = "d-flex ml-4 flex-column">
                    <span class = "text-sm">' .$codigo_producto .'</span>

                </div>
            </a>
            ';

            array_push($productData, $data);
        }

        return $productData;
    }

    static public function mdlEliminarCategoria($id_categoria){

        $stmt = Conexion::conectar()->prepare(" DELETE FROM `categorias` WHERE `id_categoria` = :id_categoria;");

        $stmt -> bindParam(":id_categoria", $id_categoria , PDO::PARAM_STR);

        if($stmt -> execute()){
            return "OK";
        } else {
            return "ERROR";
        }
    }

    static public function mdlDarNombreCategoria($id_categoria){

        $stmt = Conexion::conectar()->prepare("SELECT `nombre_categoria` FROM `categorias` WHERE `id_categoria` = :id_categoria;");

        $stmt -> bindParam(":id_categoria", $id_categoria , PDO::PARAM_STR);

        $stmt -> execute();

        return $stmt->fetchAll();
    }


}
<?php

require_once "conexion.php";
require_once "../vendor/autoload.php";
use PhpOffice\PhpSpreadsheet\IOFactory;

class VentaClientesModelo{
    static public function mdlListarNombreClientes($dni, $codigo){
        $stmt = Conexion::conectar()->prepare("select cp.cod_producto id from cliente_producto cp where cp.id_cliente = :dni and cp.cod_producto = :codigo; ");
        
        $stmt -> bindParam(":dni", $dni,PDO::PARAM_STR);
        $stmt -> bindParam(":codigo", $codigo,PDO::PARAM_STR);
        
        if($stmt->execute()){
            if ($stmt->rowCount() > 0) {
                $respuesta = "encontrado";
            } else {
                $respuesta = "agregar";
            }
        }else{
            $respuesta = "error";
        }

        return $respuesta;
        
    }

    static public function mdlAñadirProducto($dni, $codigo){
        $stmt = Conexion::conectar()->prepare("INSERT INTO cliente_producto (id, id_cliente ,cod_producto) values ('', :dni,:codigo)");
        
        $stmt -> bindParam(":dni", $dni,PDO::PARAM_STR);
        $stmt -> bindParam(":codigo", $codigo,PDO::PARAM_STR);
        
        if($stmt->execute()){
            $respuesta = "listo";
        }else{
            $respuesta = "error";
        }

        return $respuesta;
    }

    static public function mdlListarProducto($dni){
        $stmt = Conexion::conectar()->prepare("SELECT cp.id_cliente, 
                                                        p.codigo_producto, 
                                                        p.id_categoria_producto, 
                                                        c.nombre_categoria, 
                                                        p.descripcion_producto,
                                                        '' as opciones 
                                                FROM cliente_producto cp 
                                                INNER JOIN productos p ON p.codigo_producto = cp.cod_producto 
                                                INNER JOIN categorias c ON p.id_categoria_producto = c.id_categoria 
                                                WHERE cp.id_cliente = :dni ;");
        
        $stmt -> bindParam(":dni", $dni,PDO::PARAM_STR);
        
        $stmt->execute();
        

        return $stmt->fetchAll();
    }
}
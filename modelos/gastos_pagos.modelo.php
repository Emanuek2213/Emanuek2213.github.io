<?php

require_once "conexion.php";

class GastosModelo{    

    static public function mdlObtenerNroBoleta(){

        $stmt = Conexion::conectar()->prepare("call prc_obtenerNroBoleta()");

        $stmt -> execute();

        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    
    static public function mdlListarGastos($fechaDesde, $fechaHasta){

        try {
            
            $stmt = Conexion::conectar()->prepare("SELECT  '1' as opcion ,MIN(nro_boleta) AS nro_boleta, Proveedor, MIN(total_compra) AS total_compra, 
                                                        CASE 
                                                            WHEN Estado = 0 THEN 'Registrado'
                                                            WHEN Estado = 1 THEN 'Reportado'
                                                            WHEN Estado = 2 THEN 'Orden en Camino'
                                                            WHEN Estado = 3 THEN 'Orden Recibida'
                                                            WHEN Estado = 4 THEN 'Orden cancelada'
                                                            ELSE 'Estado Desconocido'
                                                        END AS Estado,
                                                        MIN(mensajero) AS mensajero,
                                                        MIN(fecha_compra) AS fecha_compra
                                                        
                                                    FROM gastos_cabecera vc 
                                                    WHERE DATE(vc.fecha_compra) >= DATE(:fechaDesde) 
                                                    AND DATE(vc.fecha_compra) <= DATE(:fechaHasta)
                                                    GROUP BY descripcion, Proveedor, Estado
                                                    ORDER BY nro_boleta ASC;");
    
            $stmt->bindParam(":fechaDesde", $fechaDesde, PDO::PARAM_STR);
            $stmt->bindParam(":fechaHasta", $fechaHasta, PDO::PARAM_STR);
    
            $stmt->execute();
    
            return $stmt->fetchAll();
            
        } catch (Exception $e) {
            return 'Excepción capturada: ' . $e->getMessage() . "\n";
        }
        
        $stmt = null;
    }

    static public function mdlRegistrarGastos($datos,$nro_boleta,$total_venta,$descripcion_venta,$Cliente,$Estado){

        $stmt = Conexion::conectar()->prepare("INSERT INTO gastos_cabecera(nro_boleta,Proveedor,descripcion,total_compra,Estado)         
                                                VALUES(:nro_boleta,:Proveedor,:descripcion,:total_compra,:Estado)");

        $stmt -> bindParam(":nro_boleta", $nro_boleta , PDO::PARAM_STR);
        $stmt -> bindParam(":descripcion", $descripcion_venta, PDO::PARAM_STR);
        $stmt -> bindParam(":total_compra", $total_venta , PDO::PARAM_STR);
        $stmt -> bindParam(":Proveedor", $Cliente , PDO::PARAM_STR);
        $stmt -> bindParam(":Estado", $Estado , PDO::PARAM_STR);
        

        if($stmt -> execute()){
            
            $stmt = null;

            $stmt = Conexion::conectar()->prepare("UPDATE empresa SET nro_correlativo_venta = LPAD(nro_correlativo_venta + 1,8,'0')");

            if($stmt -> execute()){

                $listaProductos = [];

                for ($i = 0; $i < count($datos); ++$i){
                    
                    $listaProductos = explode(",",$datos[$i]);
                    
                    
                    
        
                    $stmt = Conexion::conectar()->prepare("INSERT INTO gastos_detalle(nro_boleta,codigo_producto, cantidad,medida, total_compra) 
                                                        SELECT :nro_boleta, 
                                                            :codigo_producto, 
                                                            :cantidad,
                                                            :medida,
                                                            :total_compra
                                                        FROM PRODUCTOS p
                                                        WHERE p.codigo_producto = :codigo_producto");
        
                    $stmt -> bindParam(":nro_boleta", $nro_boleta , PDO::PARAM_STR);
                    $stmt -> bindParam(":codigo_producto", $listaProductos[0] , PDO::PARAM_STR);
                    $stmt -> bindParam(":cantidad", $listaProductos[1] , PDO::PARAM_STR);
                    $stmt -> bindParam(":total_compra", $listaProductos[2] , PDO::PARAM_STR);
                    $stmt -> bindParam(":precio_seleccionado", $listaProductos[3] , PDO::PARAM_STR);
                    $stmt -> bindParam(":medida", $listaProductos[4] , PDO::PARAM_STR);
                    
                    
        
                    
        
                    if($stmt -> execute()){

                        
                            $resultado = "Se registró la venta correctamente 1.";
                        
                        
                    }else{
                        $resultado = "Error al registrar la venta";
                    }   
                }
        
        
                 return $resultado;
        
                 $stmt = null;
            }
            
        }

       
    }

}
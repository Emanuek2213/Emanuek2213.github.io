<?php

require_once "conexion.php";

class VentasModelo{
    
    public $resultado;
    
    static public function mdlObtenerNroBoleta(){

        $stmt = Conexion::conectar()->prepare("call prc_obtenerNroBoleta()");

        $stmt -> execute();

        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    static public function mdlRegistrarVenta($datos,$nro_boleta,$total_venta,$descripcion_venta,$Cliente,$Estado){

        $stmt = Conexion::conectar()->prepare("INSERT INTO venta_cabecera(nro_boleta,Cliente,descripcion,total_venta,Estado)         
                                                VALUES(:nro_boleta,:Cliente,:descripcion,:total_venta,:Estado)");

        $stmt -> bindParam(":nro_boleta", $nro_boleta , PDO::PARAM_STR);
        $stmt -> bindParam(":descripcion", $descripcion_venta, PDO::PARAM_STR);
        $stmt -> bindParam(":total_venta", $total_venta , PDO::PARAM_STR);
        $stmt -> bindParam(":Cliente", $Cliente , PDO::PARAM_STR);
        $stmt -> bindParam(":Estado", $Estado , PDO::PARAM_STR);
        

        if($stmt -> execute()){
            
            $stmt = null;

            $stmt = Conexion::conectar()->prepare("UPDATE empresa SET nro_correlativo_venta = LPAD(nro_correlativo_venta + 1,8,'0')");

            if($stmt -> execute()){

                $listaProductos = [];

                for ($i = 0; $i < count($datos); ++$i){
                    
                    $listaProductos = explode(",",$datos[$i]);
                    
                    
                    
        
                    $stmt = Conexion::conectar()->prepare("INSERT INTO venta_detalle(nro_boleta,codigo_producto, cantidad,medida, total_venta) 
                                                        SELECT :nro_boleta, 
                                                            :codigo_producto, 
                                                            :cantidad,
                                                            :medida,
                                                            :total_venta
                                                        FROM PRODUCTOS p
                                                        WHERE p.codigo_producto = :codigo_producto");
        
                    $stmt -> bindParam(":nro_boleta", $nro_boleta , PDO::PARAM_STR);
                    $stmt -> bindParam(":codigo_producto", $listaProductos[0] , PDO::PARAM_STR);
                    $stmt -> bindParam(":cantidad", $listaProductos[1] , PDO::PARAM_STR);
                    $stmt -> bindParam(":total_venta", $listaProductos[2] , PDO::PARAM_STR);
                    $stmt -> bindParam(":precio_seleccionado", $listaProductos[3] , PDO::PARAM_STR);
                    $stmt -> bindParam(":medida", $listaProductos[4] , PDO::PARAM_STR);
                    
                    
        
                    
        
                    if($stmt -> execute()){

                        $stmt2 = null;
        
                        $stmt2 = Conexion::conectar()->prepare("UPDATE PRODUCTOS p
                                                                SET p.stock_producto = p.stock_producto - (
                                                                CASE 
                                                                    WHEN :precio_seleccionado = p.precio_unidad THEN :cantidad * 1
                                                                    WHEN :precio_seleccionado = p.precio_paquetito THEN :cantidad * 1
                                                                    WHEN :precio_seleccionado = p.precio_docena THEN :cantidad * p.cantidad_docena
                                                                    WHEN :precio_seleccionado = p.precio_ciento THEN :cantidad * 1
                                                                    WHEN :precio_seleccionado = p.precio_millar THEN :cantidad * p.cantidad_millar
                                                                    WHEN :precio_seleccionado = p.precio_caja THEN :cantidad * p.cantidad_caja
                                                                    WHEN :precio_seleccionado = p.precio_fardo THEN :cantidad * p.cantidad_fardo
                                                                    ELSE :cantidad * 1
                                                                END
                                                                ),
                                                                p.ventas_producto = p.ventas_producto + (
                                                                    CASE 
                                                                        WHEN :precio_seleccionado = p.precio_unidad THEN :cantidad * 1
                                                                        WHEN :precio_seleccionado = p.precio_paquetito THEN :cantidad * 1
                                                                        WHEN :precio_seleccionado = p.precio_docena THEN :cantidad * p.cantidad_docena
                                                                        WHEN :precio_seleccionado = p.precio_ciento THEN :cantidad * 1
                                                                        WHEN :precio_seleccionado = p.precio_millar THEN :cantidad * p.cantidad_millar
                                                                        WHEN :precio_seleccionado = p.precio_caja THEN :cantidad * p.cantidad_caja
                                                                        WHEN :precio_seleccionado = p.precio_fardo THEN :cantidad * p.cantidad_fardo
                                                                        ELSE :cantidad * 1
                                                                    END
                                                                )
                                                                WHERE codigo_producto = :codigo_producto
                                                                ");
        
                        $stmt2 -> bindParam(":codigo_producto", $listaProductos[0] , PDO::PARAM_STR);
                        $stmt2 -> bindParam(":cantidad", $listaProductos[1] , PDO::PARAM_STR);
                        $stmt2 -> bindParam(":precio_seleccionado", $listaProductos[3] , PDO::PARAM_STR);

                        if($stmt2 -> execute()){
                            $resultado = "Se registró la venta correctamente 1.";
                        }else{
                            $resultado = "Error al actualizar el stock";
                        }
                        
                    }else{
                        $resultado = "Error al registrar la venta";
                    }   
                }
        
        
                 return $resultado;
        
                 $stmt = null;
            }
            
        }

       
    }

    static public function mdlRegistrarVentaEsp($datos,$nro_boleta,$total_venta,$descripcion_venta,$Cliente,$Estado){

        $stmt = Conexion::conectar()->prepare("INSERT INTO venta_cabecera(nro_boleta,Cliente,descripcion,total_venta,Estado,registro)         
                                                VALUES(:nro_boleta,:Cliente,:descripcion,:total_venta,:Estado,1)");

        $stmt -> bindParam(":nro_boleta", $nro_boleta , PDO::PARAM_STR);
        $stmt -> bindParam(":descripcion", $descripcion_venta, PDO::PARAM_STR);
        $stmt -> bindParam(":total_venta", $total_venta , PDO::PARAM_STR);
        $stmt -> bindParam(":Cliente", $Cliente , PDO::PARAM_STR);
        $stmt -> bindParam(":Estado", $Estado , PDO::PARAM_STR);
        

        if($stmt -> execute()){
            
            $stmt = null;

            $stmt = Conexion::conectar()->prepare("UPDATE empresa SET nro_correlativo_venta = LPAD(nro_correlativo_venta + 1,8,'0')");

            if($stmt -> execute()){

                $listaProductos = [];

                for ($i = 0; $i < count($datos); ++$i){
                    
                    $listaProductos = explode(",",$datos[$i]);
                    
                    
                    
        
                    $stmt = Conexion::conectar()->prepare("INSERT INTO venta_detalle(nro_boleta,codigo_producto, cantidad,medida, total_venta) 
                                                        SELECT :nro_boleta, 
                                                            :codigo_producto, 
                                                            :cantidad,
                                                            :medida,
                                                            :total_venta
                                                        FROM PRODUCTOS p
                                                        WHERE p.codigo_producto = :codigo_producto");
        
                    $stmt -> bindParam(":nro_boleta", $nro_boleta , PDO::PARAM_STR);
                    $stmt -> bindParam(":codigo_producto", $listaProductos[0] , PDO::PARAM_STR);
                    $stmt -> bindParam(":cantidad", $listaProductos[1] , PDO::PARAM_STR);
                    $stmt -> bindParam(":total_venta", $listaProductos[2] , PDO::PARAM_STR);
                    $stmt -> bindParam(":precio_seleccionado", $listaProductos[3] , PDO::PARAM_STR);
                    $stmt -> bindParam(":medida", $listaProductos[4] , PDO::PARAM_STR);
                    
                    
        
                    
        
                    if($stmt -> execute()){

                        $stmt2 = null;
        
                        $stmt2 = Conexion::conectar()->prepare("UPDATE PRODUCTOS p
                                                                SET p.stock_producto = p.stock_producto - (
                                                                CASE 
                                                                    WHEN :precio_seleccionado = p.precio_unidad THEN :cantidad * 1
                                                                    WHEN :precio_seleccionado = p.precio_paquetito THEN :cantidad * 1
                                                                    WHEN :precio_seleccionado = p.precio_docena THEN :cantidad * p.cantidad_docena
                                                                    WHEN :precio_seleccionado = p.precio_ciento THEN :cantidad * 1
                                                                    WHEN :precio_seleccionado = p.precio_millar THEN :cantidad * p.cantidad_millar
                                                                    WHEN :precio_seleccionado = p.precio_caja THEN :cantidad * p.cantidad_caja
                                                                    WHEN :precio_seleccionado = p.precio_fardo THEN :cantidad * p.cantidad_fardo
                                                                    ELSE :cantidad * 1
                                                                END
                                                                ),
                                                                p.ventas_producto = p.ventas_producto + (
                                                                    CASE 
                                                                        WHEN :precio_seleccionado = p.precio_unidad THEN :cantidad * 1
                                                                        WHEN :precio_seleccionado = p.precio_paquetito THEN :cantidad * 1
                                                                        WHEN :precio_seleccionado = p.precio_docena THEN :cantidad * p.cantidad_docena
                                                                        WHEN :precio_seleccionado = p.precio_ciento THEN :cantidad * 1
                                                                        WHEN :precio_seleccionado = p.precio_millar THEN :cantidad * p.cantidad_millar
                                                                        WHEN :precio_seleccionado = p.precio_caja THEN :cantidad * p.cantidad_caja
                                                                        WHEN :precio_seleccionado = p.precio_fardo THEN :cantidad * p.cantidad_fardo
                                                                        ELSE :cantidad * 1
                                                                    END
                                                                )
                                                                WHERE codigo_producto = :codigo_producto
                                                                ");
        
                        $stmt2 -> bindParam(":codigo_producto", $listaProductos[0] , PDO::PARAM_STR);
                        $stmt2 -> bindParam(":cantidad", $listaProductos[1] , PDO::PARAM_STR);
                        $stmt2 -> bindParam(":precio_seleccionado", $listaProductos[3] , PDO::PARAM_STR);

                        if($stmt2 -> execute()){

                            $stmt2 = Conexion::conectar()->prepare("SELECT COUNT(*) as cantidad FROM pedidos WHERE nro_boleta = :nro_boleta");
                            $stmt2->bindParam(":nro_boleta", $nro_boleta, PDO::PARAM_STR);
                            $stmt2->execute();
                            $resultado_pedido = $stmt2->fetch(PDO::FETCH_ASSOC);

                            if ($resultado_pedido['cantidad'] == 0) {
                                $stmt2 = Conexion::conectar()->prepare("INSERT INTO pedidos(nro_boleta) VALUES (:nro_boleta)");
                                $stmt2->bindParam(":nro_boleta", $nro_boleta, PDO::PARAM_STR);

                                if ($stmt2->execute()) {
                                    $resultado = "Se registró la venta correctamente 2.";
                                } else {
                                    $resultado = "Error al insertar el pedido.";
                                }
                            } else {
                                $resultado = "Ya existe un pedido con el mismo número de boleta.";
                            }

                        }else{
                            $resultado = "Error al actualizar el stock";
                        }
                        
                    }else{
                        $resultado = "Error al registrar la venta";
                    }   
                }
        
        
                 return $resultado;
        
                 $stmt = null;
            }
            
        }

       
    }

    static public function mdlRegistrarCompraEsp($datos,$nro_boleta,$total_venta,$descripcion_venta,$Proveedor,$Estado,$Tipo_pago,$mensajero,$tipo_documento,$nro_documento,$tipo_dni,$comentario,$fecha_regreso,$fecha_salida){

        $stmt = Conexion::conectar()->prepare("INSERT INTO compra_cabecera(nro_boleta,Proveedor,descripcion,total_compra,Estado,registro,Tipo_pago,mensajero,tipo_documento,nro_documento,tipo_dni,comentario,fecha_regreso,fecha_salida)         
                                                VALUES(:nro_boleta,:Proveedor,:descripcion,:total_compra,:Estado,1,:Tipo_pago,:mensajero,:tipo_documento,:nro_documento,:tipo_dni,:comentario,:fecha_regreso,:fecha_salida)");

        $stmt -> bindParam(":nro_boleta", $nro_boleta , PDO::PARAM_STR);
        $stmt -> bindParam(":descripcion", $descripcion_venta, PDO::PARAM_STR);
        $stmt -> bindParam(":total_compra", $total_venta , PDO::PARAM_STR);
        $stmt -> bindParam(":Proveedor", $Proveedor , PDO::PARAM_STR);
        $stmt -> bindParam(":Estado", $Estado , PDO::PARAM_STR);
        $stmt -> bindParam(":Tipo_pago", $Tipo_pago , PDO::PARAM_STR);
        $stmt -> bindParam(":mensajero", $mensajero , PDO::PARAM_STR);
        $stmt -> bindParam(":tipo_documento", $tipo_documento , PDO::PARAM_STR); 
        $stmt -> bindParam(":nro_documento", $nro_documento , PDO::PARAM_STR);
        $stmt -> bindParam(":tipo_dni", $tipo_dni , PDO::PARAM_STR);
        $stmt -> bindParam(":comentario", $comentario , PDO::PARAM_STR);
        $stmt -> bindParam(":fecha_regreso", $fecha_regreso , PDO::PARAM_STR);
        $stmt -> bindParam(":fecha_salida", $fecha_salida , PDO::PARAM_STR);

        if($stmt -> execute()){
        
            $stmt = Conexion::conectar()->prepare("INSERT INTO `compra_credito`(`nro_boleta`, `fecha_compra`, `total_compra`, `Estado`, `total_deuda`) VALUES (:nro_boleta,:fecha_compra,:total_compra, 0 , :total_compra)");
            $stmt -> bindParam(":nro_boleta", $nro_boleta , PDO::PARAM_STR);
            $stmt -> bindParam(":total_compra", $total_venta , PDO::PARAM_STR);
            $stmt -> bindParam(":fecha_compra", $fecha_regreso , PDO::PARAM_STR);

            if($stmt -> execute()){
                
                $stmt = null;

                $stmt = Conexion::conectar()->prepare("UPDATE empresa SET nro_correlativo_venta = LPAD(nro_correlativo_venta + 1,8,'0')");

                if($stmt -> execute()){

                    $listaProductos = [];

                    for ($i = 0; $i < count($datos); ++$i){
                        
                        $listaProductos = explode(",",$datos[$i]);
                        
                        
                        
            
                        $stmt = Conexion::conectar()->prepare("INSERT INTO compra_detalle(nro_boleta,codigo_producto, cantidad,medida, total_compra) 
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

                            $stmt = null;
            
                            $stmt = Conexion::conectar()->prepare("UPDATE PRODUCTOS p
                                                                    SET p.stock_producto = p.stock_producto + (
                                                                    CASE 
                                                                        WHEN :precio_seleccionado = p.precio_unidad THEN :cantidad * 1
                                                                        WHEN :precio_seleccionado = p.precio_paquetito THEN :cantidad * 1
                                                                        WHEN :precio_seleccionado = p.precio_docena THEN :cantidad * p.cantidad_docena
                                                                        WHEN :precio_seleccionado = p.precio_ciento THEN :cantidad * 1
                                                                        WHEN :precio_seleccionado = p.precio_millar THEN :cantidad * p.cantidad_millar
                                                                        WHEN :precio_seleccionado = p.precio_caja THEN :cantidad * p.cantidad_caja
                                                                        WHEN :precio_seleccionado = p.precio_fardo THEN :cantidad * p.cantidad_fardo
                                                                        ELSE :cantidad * 1
                                                                    END
                                                                    ),
                                                                    p.ventas_producto = p.ventas_producto
                                                                    WHERE codigo_producto = :codigo_producto
                                                                    ");
            
                            $stmt -> bindParam(":codigo_producto", $listaProductos[0] , PDO::PARAM_STR);
                            $stmt -> bindParam(":cantidad", $listaProductos[1] , PDO::PARAM_STR);
                            $stmt -> bindParam(":precio_seleccionado", $listaProductos[3] , PDO::PARAM_STR);

                            if($stmt -> execute()){
                                $resultado = "Se registró la Compra correctamente.";
                            }else{
                                $resultado = "Error al actualizar el stock";
                            }

                            return $resultado;
                            
                        }else{
                            $resultado = "Error al registrar la venta";
                        }   
                    }
            
            
                    return $resultado;
            
                    $stmt = null;
                }
                
            }

        }else{
            $resultado = "Error al registrar la venta";
            return $resultado;
            $stmt = null;
        } 
    }

    static public function mdlRegistrarCompraCotizaEsp($datos,$nro_boleta,$total_venta,$descripcion_venta,$Proveedor,$Estado,$Tipo_pago,$mensajero,$fecha_regreso,$fecha_salida){

        $stmt = Conexion::conectar()->prepare("INSERT INTO cotizacion_cabecera(nro_boleta,Cliente,descripcion,total_venta,Estado,registro,Tipo_pago,mensajero,fecha_regreso,fecha_salida)         
                                                VALUES(:nro_boleta,:Cliente,:descripcion,:total_venta,:Estado,1,:Tipo_pago,:mensajero,:fecha_regreso,:fecha_salida)");

        $stmt -> bindParam(":nro_boleta", $nro_boleta , PDO::PARAM_STR);
        $stmt -> bindParam(":descripcion", $descripcion_venta, PDO::PARAM_STR);
        $stmt -> bindParam(":total_venta", $total_venta , PDO::PARAM_STR);
        $stmt -> bindParam(":Cliente", $Proveedor , PDO::PARAM_STR);
        $stmt -> bindParam(":Estado", $Estado , PDO::PARAM_STR);
        $stmt -> bindParam(":Tipo_pago", $Tipo_pago , PDO::PARAM_STR);
        $stmt -> bindParam(":mensajero", $mensajero , PDO::PARAM_STR);
        $stmt -> bindParam(":fecha_regreso", $fecha_regreso , PDO::PARAM_STR);
        $stmt -> bindParam(":fecha_salida", $fecha_salida , PDO::PARAM_STR);
        
        if($stmt -> execute()){
        
            $stmt = Conexion::conectar()->prepare("INSERT INTO `compra_credito`(`nro_boleta`, `fecha_compra`, `total_compra`, `Estado`, `total_deuda`) VALUES (:nro_boleta,:fecha_compra,:total_compra, 0 , :total_compra)");
            $stmt -> bindParam(":nro_boleta", $nro_boleta , PDO::PARAM_STR);
            $stmt -> bindParam(":total_compra", $total_venta , PDO::PARAM_STR);
            $stmt -> bindParam(":fecha_compra", $fecha_regreso , PDO::PARAM_STR);

            if($stmt -> execute()){
                
                $stmt = null;

                $stmt = Conexion::conectar()->prepare("UPDATE empresa SET nro_correlativo_venta = LPAD(nro_correlativo_venta + 1,8,'0')");

                if($stmt -> execute()){

                    $listaProductos = [];

                    for ($i = 0; $i < count($datos); ++$i){
                        
                        $listaProductos = explode(",",$datos[$i]);
                        
                        
                        
            
                        $stmt = Conexion::conectar()->prepare("INSERT INTO cotizacion_detalle(nro_boleta,codigo_producto, cantidad,medida, total_venta) 
                                                            SELECT :nro_boleta, 
                                                                :codigo_producto, 
                                                                :cantidad,
                                                                :medida,
                                                                :total_venta
                                                            FROM PRODUCTOS p
                                                            WHERE p.codigo_producto = :codigo_producto");
            
                        $stmt -> bindParam(":nro_boleta", $nro_boleta , PDO::PARAM_STR);
                        $stmt -> bindParam(":codigo_producto", $listaProductos[0] , PDO::PARAM_STR);
                        $stmt -> bindParam(":cantidad", $listaProductos[1] , PDO::PARAM_STR);
                        $stmt -> bindParam(":total_venta", $listaProductos[2] , PDO::PARAM_STR);
                        $stmt -> bindParam(":precio_seleccionado", $listaProductos[3] , PDO::PARAM_STR);
                        $stmt -> bindParam(":medida", $listaProductos[4] , PDO::PARAM_STR);
                        
                        
            
                        
            
                        if($stmt -> execute()){

                            $stmt2 = null;
            
                            $stmt2 = Conexion::conectar()->prepare("UPDATE PRODUCTOS p
                                                                    SET p.stock_producto = p.stock_producto + (
                                                                    CASE 
                                                                        WHEN :precio_seleccionado = p.precio_unidad THEN :cantidad * 1
                                                                        WHEN :precio_seleccionado = p.precio_paquetito THEN :cantidad * 1
                                                                        WHEN :precio_seleccionado = p.precio_docena THEN :cantidad * p.cantidad_docena
                                                                        WHEN :precio_seleccionado = p.precio_ciento THEN :cantidad * 1
                                                                        WHEN :precio_seleccionado = p.precio_millar THEN :cantidad * p.cantidad_millar
                                                                        WHEN :precio_seleccionado = p.precio_caja THEN :cantidad * p.cantidad_caja
                                                                        WHEN :precio_seleccionado = p.precio_fardo THEN :cantidad * p.cantidad_fardo
                                                                        ELSE :cantidad * 1
                                                                    END
                                                                    ),
                                                                    p.ventas_producto = p.ventas_producto
                                                                    WHERE codigo_producto = :codigo_producto
                                                                    ");
            
                            $stmt2 -> bindParam(":codigo_producto", $listaProductos[0] , PDO::PARAM_STR);
                            $stmt2 -> bindParam(":cantidad", $listaProductos[1] , PDO::PARAM_STR);
                            $stmt2 -> bindParam(":precio_seleccionado", $listaProductos[3] , PDO::PARAM_STR);

                            if($stmt2 -> execute()){
                                $resultado = "Se registró la cotiza correctamente 12.";
                            }else{
                                $resultado = "Error al actualizar el stock";
                            }
                            
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


    static public function mdlRegistrarCotizacion($datos,$nro_boleta,$total_venta,$descripcion_venta,$deuda,$Cliente,$Estado){

        if($deuda>0){
            $Estado = "PARCIAL";
            if($deuda = $total_venta){
                $Estado = "DEUDA";
            }
            
        }

        if($deuda == 0){
            $Estado = "CANCELADO";
        }

        $stmt = Conexion::conectar()->prepare("INSERT INTO cotizacion_cabecera(nro_boleta,descripcion,total_venta,Estado,deuda,Cliente) 
                                                VALUES(:nro_boleta,:descripcion,:total_venta,:Estado,:deuda,:Cliente)");

        $stmt -> bindParam(":nro_boleta", $nro_boleta , PDO::PARAM_STR);
        $stmt -> bindParam(":descripcion", $descripcion_venta, PDO::PARAM_STR);
        $stmt -> bindParam(":total_venta", $total_venta , PDO::PARAM_STR);
        $stmt -> bindParam(":Estado", $Estado , PDO::PARAM_STR);
        $stmt -> bindParam(":deuda", $deuda , PDO::PARAM_STR);
        $stmt -> bindParam(":Cliente", $Cliente , PDO::PARAM_STR);
        

        if($stmt -> execute()){
            
            $stmt = null;

            $stmt = Conexion::conectar()->prepare("UPDATE empresa SET nro_correlativo_venta = LPAD(nro_correlativo_venta + 1,8,'0')");

            if($stmt -> execute()){

                $listaProductos = [];

                for ($i = 0; $i < count($datos); ++$i){
                    
                    $listaProductos = explode(",",$datos[$i]);
                    
                    
                    
        
                    $stmt = Conexion::conectar()->prepare("INSERT INTO cotizacion_detalle(nro_boleta,codigo_producto, cantidad, total_venta,medida) 
                                                        SELECT :nro_boleta, 
                                                            :codigo_producto, 
                                                            CASE 
                                                                WHEN :precio_seleccionado = p.precio_unidad THEN :cantidad * 1
                                                                WHEN :precio_seleccionado = p.precio_paquetito THEN :cantidad * 1
                                                                WHEN :precio_seleccionado = p.precio_docena THEN :cantidad * p.cantidad_docena
                                                                WHEN :precio_seleccionado = p.precio_ciento THEN :cantidad * 1
                                                                WHEN :precio_seleccionado = p.precio_millar THEN :cantidad * p.cantidad_millar
                                                                WHEN :precio_seleccionado = p.precio_caja THEN :cantidad * p.cantidad_caja
                                                                WHEN :precio_seleccionado = p.precio_fardo THEN :cantidad * p.cantidad_fardo
                                                                ELSE :cantidad * 1
                                                            END AS cantidad_calculada,
                                                            :total_venta,
                                                            :medida
                                                        FROM PRODUCTOS p
                                                        WHERE p.codigo_producto = :codigo_producto");
        
                    $stmt -> bindParam(":nro_boleta", $nro_boleta , PDO::PARAM_STR);
                    $stmt -> bindParam(":codigo_producto", $listaProductos[0] , PDO::PARAM_STR);
                    $stmt -> bindParam(":cantidad", $listaProductos[1] , PDO::PARAM_STR);
                    $stmt -> bindParam(":total_venta", $listaProductos[2] , PDO::PARAM_STR);
                    $stmt -> bindParam(":precio_seleccionado", $listaProductos[3] , PDO::PARAM_STR);
                    $stmt -> bindParam(":medida", $listaProductos[4] , PDO::PARAM_STR);
                    
                    if($stmt -> execute()){
                        $resultado = "Se registró la venta correctamente.";
                    }else{
                        $resultado = "Error al registrar la venta";
                    }
                }
        
        
                 return $resultado;
        
                 $stmt = null;
            }
            
        }else{
            $resultado = "Error al registrar la venta";
        }

        return $resultado;
        
        $stmt = null;
       
    }

    static public function mdlListarVentas($fechaDesde,$fechaHasta){

        try {
            
            $stmt = Conexion::conectar()->prepare("SELECT Concat('Boleta Nro: ',v.nro_boleta,' - Total Venta: S./ ',Round(vc.total_venta,2),' - Fecha de registro : ', v.fecha_venta) as nro_boleta,
                                                            v.codigo_producto,
                                                            c.nombre_categoria,
                                                            p.descripcion_producto,
                                                            concat(v.cantidad, ' und(s)') as cantidad,                            
                                                            concat('S./ ',round(v.total_venta,2)) as total_venta,
                                                            v.fecha_venta
                                                            FROM venta_detalle v inner join productos p on v.codigo_producto = p.codigo_producto
                                                                                inner join venta_cabecera vc on cast(vc.nro_boleta as integer) = cast(v.nro_boleta as integer)
                                                                                inner join categorias c on c.id_categoria = p.id_categoria_producto
                                                    where DATE(v.fecha_venta) >= date(:fechaDesde) and DATE(v.fecha_venta) <= date(:fechaHasta)
                                                    order by v.nro_boleta asc");

            $stmt -> bindParam(":fechaDesde",$fechaDesde,PDO::PARAM_STR);
            $stmt -> bindParam(":fechaHasta",$fechaHasta,PDO::PARAM_STR);

            $stmt -> execute();

            return $stmt->fetchAll();
            
        } catch (Exception $e) {
            return 'Excepción capturada: '.  $e->getMessage(). "\n";
        }
        

        $stmt = null;
    }

    static public function mdlEliminarVenta($nroBoleta,$Comentario){

        $stmt = Conexion::conectar()->prepare("INSERT INTO `eliminada_cabecera`(`id_boleta`, `nro_boleta`, `Cliente`, `descripcion`, `subtotal`, `igv`, 
                                                                                `total_venta`, `Estado`, `fecha_venta`, `fecha_salida`, `fecha_entrega`,`fecha_regreso`, 
                                                                                `mensajero`, `deuda`, `Vuelto`, `Dinero_Dado`, `registro`, `Persona_Dinero`, `Tipo_pago`, `Comentario`, `numero_factura`, `link`) 
                                                SELECT  vc.id_boleta, vc.nro_boleta, vc.Cliente, vc.descripcion, vc.subtotal, vc.igv, vc.total_venta, vc.Estado, vc.fecha_venta, 
                                                        vc.fecha_salida, vc.fecha_entrega, vc.fecha_regreso, vc.mensajero, vc.deuda, vc.Vuelto, vc.Dinero_Dado, vc.registro, 
                                                        vc.Persona_Dinero, vc.Tipo_pago , :Comentario, vc.numero_factura, vc.link as Comentario
                                                FROM venta_cabecera vc WHERE vc.nro_boleta = :nroBoleta;");

        $stmt -> bindParam(":nroBoleta", $nroBoleta , PDO::PARAM_STR);
        $stmt -> bindParam(":Comentario", $Comentario , PDO::PARAM_STR);

        if($stmt -> execute()){

            $stmt = Conexion::conectar()->prepare(" INSERT INTO `eliminada_detalle`(`id`, `nro_boleta`, `codigo_producto`, `cantidad`, `medida`, `total_venta`, `fecha_venta`) 
                                                    SELECT vd.id, vd.nro_boleta, vd.codigo_producto, vd.cantidad, vd.medida, vd.total_venta, vd.fecha_venta 
                                                    FROM venta_detalle vd WHERE vd.nro_boleta =:nroBoleta;");

            $stmt -> bindParam(":nroBoleta", $nroBoleta , PDO::PARAM_STR);

            if($stmt -> execute()){

                $stmt = Conexion::conectar()->prepare("call prc_eliminiar_venta(:nroBoleta)");

                $stmt -> bindParam(":nroBoleta", $nroBoleta , PDO::PARAM_STR);

                if($stmt -> execute()){
    
                    return "ok";
                    
                }else{
    
                    return "error";
                
                }
                
            }else{

                return "error";
            
            }

        }else{

            return "error";
        
        }

        
    }

    static public function mdlObtenerDetalleVenta($nro_boleta){

        try {
            $stmt = Conexion::conectar()->prepare("select concat('B001-',vc.nro_boleta) as nro_boleta,
                                                        vc.total_venta,
                                                        vc.fecha_venta,
                                                        vd.codigo_producto,
                                                        upper(p.descripcion_producto) as descripcion_producto,
                                                        vd.cantidad,
                                                        vd.medida,
                                                        (vd.total_venta/vd.cantidad) as precio_unitario_venta,
                                                        vd.total_venta
                                                from venta_cabecera vc inner join venta_detalle vd on vc.nro_boleta = vd.nro_boleta
                                                                        inner join productos p on p.codigo_producto = vd.codigo_producto
                                                where vc.nro_boleta =  :nro_boleta");
    
            $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);
    
            $stmt -> execute();
    
            $resultado = $stmt->fetchAll();
    
            if (empty($resultado)) {
                $stmt = Conexion::conectar()->prepare("select concat('B001-',vc.nro_boleta) as nro_boleta,
                                                            vc.total_compra,
                                                            vc.fecha_compra,
                                                            vd.codigo_producto,
                                                            upper(p.descripcion_producto) as descripcion_producto,
                                                            vd.cantidad,
                                                            vd.medida,
                                                            (vd.total_compra/vd.cantidad) as precio_unitario_venta,
                                                            vd.total_compra
                                                    from compra_cabecera vc inner join compra_detalle vd on vc.nro_boleta = vd.nro_boleta
                                                                            inner join productos p on p.codigo_producto = vd.codigo_producto
                                                    where vc.nro_boleta =  :nro_boleta");
    
                $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);
    
                $stmt -> execute();
    
                $resultado = $stmt->fetchAll();

                if (empty($resultado)) {
                    $stmt = Conexion::conectar()->prepare("select concat('B001-',vc.nro_boleta) as nro_boleta,
                                                                vc.total_venta,
                                                                vc.fecha_venta,
                                                                vd.codigo_producto,
                                                                upper(p.descripcion_producto) as descripcion_producto,
                                                                vd.cantidad,
                                                                vd.medida,
                                                                (vd.total_venta/vd.cantidad) as precio_unitario_venta,
                                                                vd.total_venta
                                                        from cotizacion_cabecera vc inner join cotizacion_detalle vd on vc.nro_boleta = vd.nro_boleta
                                                                                inner join productos p on p.codigo_producto = vd.codigo_producto
                                                        where vc.nro_boleta =  :nro_boleta");
        
                    $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);
        
                    $stmt -> execute();
        
                    $resultado = $stmt->fetchAll();
                }
            }
    
            return $resultado;
            
        } catch (Exception $e) {
            return 'Excepción capturada: '.  $e->getMessage(). "\n";
        }
    }

    static public function mdlObtenerDetalleVenta2($nro_boleta){

        try {
            $stmt = Conexion::conectar()->prepare("SELECT CONCAT('B001-',vc.nro_boleta) as nro_boleta, vc.Cliente, vc.total_venta, vc.deuda,vc.mensajero , vc.Persona_Dinero, vc.Tipo_pago, vc.fecha_salida,vc.fecha_regreso,vc.tipo_venta,vc.numero_factura FROM venta_cabecera vc WHERE vc.nro_boleta = :nro_boleta;");
    
            $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);
    
            $stmt -> execute();
    
            $resultado = $stmt->fetchAll();
    
            return $resultado;
            
        } catch (Exception $e) {
            return 'Excepción capturada: '.  $e->getMessage(). "\n";
        }
    }

    static public function mdlObtenerDetalleCotiza($nro_boleta){

        try {
            $stmt = Conexion::conectar()->prepare("select concat('B001-',vc.nro_boleta) as nro_boleta,
                                                        vc.total_venta,
                                                        vc.fecha_venta,
                                                        vd.codigo_producto,
                                                        upper(p.descripcion_producto) as descripcion_producto,
                                                        vd.cantidad,
                                                        vd.medida,
                                                        (vd.total_venta/vd.cantidad) as precio_unitario_venta,
                                                        vd.total_venta
                                                from cotizacion_cabecera vc inner join cotizacion_detalle vd on vc.nro_boleta = vd.nro_boleta
                                                                        inner join productos p on p.codigo_producto = vd.codigo_producto
                                                where vc.nro_boleta =  :nro_boleta");
    
            $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);
    
            $stmt -> execute();
    
            $resultado = $stmt->fetchAll();
    
            if (empty($resultado)) {
                $stmt = Conexion::conectar()->prepare("select concat('B001-',vc.nro_boleta) as nro_boleta,
                                                            vc.total_compra,
                                                            vc.fecha_compra,
                                                            vd.codigo_producto,
                                                            upper(p.descripcion_producto) as descripcion_producto,
                                                            vd.cantidad,
                                                            vd.medida,
                                                            (vd.total_compra/vd.cantidad) as precio_unitario_venta,
                                                            vd.total_compra
                                                    from compra_cabecera vc inner join compra_detalle vd on vc.nro_boleta = vd.nro_boleta
                                                                            inner join productos p on p.codigo_producto = vd.codigo_producto
                                                    where vc.nro_boleta =  :nro_boleta");
    
                $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);
    
                $stmt -> execute();
    
                $resultado = $stmt->fetchAll();
            }
    
            return $resultado;
            
        } catch (Exception $e) {
            return 'Excepción capturada: '.  $e->getMessage(). "\n";
        }
    }

    static public function mdlObtenerDetalleCompra($nro_boleta){

        try {
            
            $stmt = Conexion::conectar()->prepare("select concat('B001-',cc.nro_boleta) as nro_boleta,
                                                        cc.total_compra,
                                                        cc.fecha_compra,
                                                        cd.codigo_producto,
                                                        upper(p.descripcion_producto) as descripcion_producto,
                                                        cd.cantidad,
                                                        cd.medida,
                                                        (cd.total_compra/cd.cantidad) as precio_unitario_compra,
                                                        cd.total_compra
                                                from compra_cabecera cc inner join compra_detalle cd on cc.nro_boleta = cd.nro_boleta
                                                                        inner join productos p on p.codigo_producto = cd.codigo_producto
                                                where cc.nro_boleta =  :nro_boleta");

            $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);

            $stmt -> execute();

            return $stmt->fetchAll();
            
        } catch (Exception $e) {
            return 'Excepción capturada: '.  $e->getMessage(). "\n";
        }

    }



    static public function mdlObtenerDetalleCotizacion($nro_boleta){

        try {
            
            $stmt = Conexion::conectar()->prepare("select concat('B001-',vc.nro_boleta) as nro_boleta,
                                                        vc.total_venta,
                                                        vc.fecha_venta,
                                                        vd.codigo_producto,
                                                        upper(p.descripcion_producto) as descripcion_producto,
                                                        vd.cantidad,
                                                        vd.medida,
                                                        (vd.total_venta/vd.cantidad) as precio_unitario_venta,
                                                        vd.total_venta
                                                from cotizacion_cabecera vc inner join cotizacion_detalle vd on vc.nro_boleta = vd.nro_boleta
                                                                        inner join productos p on p.codigo_producto = vd.codigo_producto
                                                where vc.nro_boleta =  :nro_boleta");

            $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);

            $stmt -> execute();

            return $stmt->fetchAll();
            
        } catch (Exception $e) {
            return 'Excepción capturada: '.  $e->getMessage(). "\n";
        }

    }

    static public function mdlListarBoletas(){
        $stmt = Conexion::conectar()->prepare(
            "SELECT 
                '', 
                nro_boleta, 
                Cliente, 
                CONCAT('S/. ', FORMAT(total_venta, 2)) AS total_venta, 
                DATE(fecha_venta) AS fecha_venta, 
                Estado, 
                tipo_venta,
                CASE 
                    WHEN tipo_venta = 'FACTURA' THEN CONCAT('F-', IFNULL(numero_factura, nro_boleta))
                    WHEN tipo_venta = 'BOLETA' THEN CONCAT('B-', IFNULL(numero_factura, nro_boleta))
                    ELSE IFNULL(numero_factura, nro_boleta)
                END AS numero_factura
            FROM venta_cabecera
            ORDER BY nro_boleta DESC LIMIT 300"
        );
    
        $stmt->execute();
    
        return $stmt->fetchAll();
    }

    static public function mdlListarBoletasIncompletas(){


        $stmt = Conexion::conectar()->prepare("SELECT '', nro_boleta, Cliente, CONCAT('S/. ', FORMAT(total_venta, 2)) AS total_venta, DATE(fecha_venta) AS fecha_venta, Estado, tipo_venta
                                                FROM venta_cabecera vc  WHERE vc.Estado = 0
                                                ORDER BY nro_boleta DESC LIMIT 300;");

        $stmt -> execute();

        return $stmt->fetchAll();

    }

    static public function mdlVaciarListaCopia(){


        $stmt = Conexion::conectar()->prepare("DELETE FROM lista_copia WHERE 1");

        if($stmt -> execute()){
            return "ok";
        }

        

    }

    static public function mdlAñadirListaCopia($codigo,$cantidad,$precio,$total){


        $stmt = Conexion::conectar()->prepare("INSERT INTO lista_copia(id, cod_producto, cantidad, precio, total) 
                                                    VALUES ('',:codigo,:cantidad,:precio,:total)");

        $stmt -> bindParam(":codigo",$codigo,PDO::PARAM_STR);

        $stmt -> bindParam(":cantidad",$cantidad,PDO::PARAM_STR);

        $stmt -> bindParam(":precio",$precio,PDO::PARAM_STR);

        $stmt -> bindParam(":total",$total,PDO::PARAM_STR);

        $stmt -> execute();

        return $stmt->fetchAll();

        

    }

    static public function mdlDarCopia(){


        $stmt = Conexion::conectar()->prepare("SELECT * FROM `lista_copia` WHERE 1;");

        $stmt -> execute();

        return $stmt->fetchAll();

        

    }

    static public function mdlDarDatosBoleta($id_boleta){


        $stmt = Conexion::conectar()->prepare("SELECT nro_boleta, codigo_producto, cantidad, medida, total_venta, fecha_venta FROM venta_detalle WHERE nro_boleta = :id_boleta");

        $stmt -> bindParam(":id_boleta",$id_boleta,PDO::PARAM_STR);

        $stmt -> execute();

        return $stmt->fetchAll();

        

    }

    static public function mdlDarDatosCompras($id_boleta){


        $stmt = Conexion::conectar()->prepare("SELECT nro_boleta, codigo_producto, cantidad, medida, total_compra, fecha_compra FROM compra_detalle WHERE nro_boleta = :id_boleta");

        $stmt -> bindParam(":id_boleta",$id_boleta,PDO::PARAM_STR);

        $stmt -> execute();

        return $stmt->fetchAll();

        

    }

    static public function mdlCambiarDatosBoleta($datos,$nro_boleta){

        $suma_total = 0;

        for ($i = 0; $i < count($datos); ++$i){
            
            $listaProductos = explode(",", $datos[$i]);

            // Consulta preparada para seleccionar el registro existente
            $stmt_select = Conexion::conectar()->prepare("SELECT COUNT(*) FROM venta_detalle WHERE nro_boleta = :nro_boleta  AND codigo_producto = :codigo_producto");
            $stmt_select->bindParam(":nro_boleta", $nro_boleta, PDO::PARAM_STR);
            $stmt_select->bindParam(":codigo_producto", $listaProductos[0], PDO::PARAM_STR);
            $stmt_select->execute();

            // Obtenemos el resultado de la consulta
            $existente = $stmt_select->fetchColumn();

            if ($existente) {
                // Si el registro existe, actualizamos
                $stmt_update = Conexion::conectar()->prepare("UPDATE venta_detalle SET cantidad = :cantidad, medida = :medida, total_venta = :total_venta WHERE nro_boleta = :nro_boleta AND codigo_producto = :codigo_producto");

                $stmt_update->bindParam(":nro_boleta", $nro_boleta, PDO::PARAM_STR);
                $stmt_update->bindParam(":codigo_producto", $listaProductos[0], PDO::PARAM_STR);
                $stmt_update->bindParam(":cantidad", $listaProductos[1], PDO::PARAM_STR);
                $stmt_update->bindParam(":medida", $listaProductos[2], PDO::PARAM_STR);
                $stmt_update->bindParam(":total_venta", $listaProductos[3], PDO::PARAM_STR);

                $stmt_update->execute();
            } else {
                // Si el registro no existe, insertamos
                $stmt_insert = Conexion::conectar()->prepare("INSERT INTO venta_detalle (nro_boleta, codigo_producto, cantidad, medida, total_venta) VALUES (:nro_boleta, :codigo_producto, :cantidad, :medida, :total_venta)");

                $stmt_insert->bindParam(":nro_boleta", $nro_boleta, PDO::PARAM_STR);
                $stmt_insert->bindParam(":codigo_producto", $listaProductos[0], PDO::PARAM_STR);
                $stmt_insert->bindParam(":cantidad", $listaProductos[1], PDO::PARAM_STR);
                $stmt_insert->bindParam(":medida", $listaProductos[2], PDO::PARAM_STR);
                $stmt_insert->bindParam(":total_venta", $listaProductos[3], PDO::PARAM_STR);

                $stmt_insert->execute();
            }


            $suma_total =  $suma_total + $listaProductos[3];
        
        }

        // Consulta para obtener la deuda actual y el estado
        $stmt_deuda_estado = Conexion::conectar()->prepare("SELECT total_venta, deuda, estado FROM venta_cabecera WHERE nro_boleta = :nro_boleta");
        $stmt_deuda_estado->bindParam(":nro_boleta", $nro_boleta, PDO::PARAM_STR);
        $stmt_deuda_estado->execute();
        $resultado = $stmt_deuda_estado->fetch(PDO::FETCH_ASSOC);

        $deuda_actual = $resultado['deuda'];
        $estado_actual = $resultado['estado'];
        $total_venta = $resultado['total_venta'];

        $aumento_deuda = $suma_total - $total_venta;
        $nueva_deuda = $deuda_actual + $aumento_deuda; ///importante
        $estado_nuevo = $estado_actual;

        if($nueva_deuda <= 0){
            $nueva_deuda = 0;
            if($estado_actual == 3){
                $estado_nuevo = 4;
            }
        }else if ($nueva_deuda > 0 && $estado_actual == 4 ){
            $estado_nuevo = 3;
        }

    

        // Actualizar la venta_cabecera
        $stmt_update_cabecera = Conexion::conectar()->prepare("UPDATE venta_cabecera SET total_venta = :suma_total, deuda = :nueva_deuda, Estado = :estado_nuevo WHERE nro_boleta = :nro_boleta");

        $stmt_update_cabecera->bindParam(":nro_boleta", $nro_boleta, PDO::PARAM_STR);
        $stmt_update_cabecera->bindParam(":suma_total", $suma_total, PDO::PARAM_STR);
        $stmt_update_cabecera->bindParam(":estado_nuevo", $estado_nuevo, PDO::PARAM_STR);
        $stmt_update_cabecera->bindParam(":nueva_deuda", $nueva_deuda, PDO::PARAM_STR);

        $stmt_update_cabecera->execute();
        

        

    }

    static public function mdlConfirmarBoleta($nro_boleta){

        
            

        $stmt = Conexion::conectar()->prepare("UPDATE venta_cabecera SET Estado = 1 , deuda = total_venta WHERE nro_boleta = :nro_boleta");

        $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);


        $stmt -> execute();
        
        

        

        

    }

    static public function mdlObtenerDetalleFecha($nro_boleta){

        
            

        $stmt = Conexion::conectar()->prepare("SELECT `fecha_venta`FROM `venta_cabecera` WHERE nro_boleta = :nro_boleta");

        $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);


        $stmt -> execute();
        return $stmt->fetchAll();  

    }

    static public function mdlDarClienteBoleta($nro_boleta){


        $stmt = Conexion::conectar()->prepare("SELECT CONCAT(vc.Cliente ,'/', cn.Identificacion, '/' ,cn.Direccion) AS cliente FROM `venta_cabecera` vc INNER JOIN clientes_nombre cn WHERE vc.nro_boleta = :nro_boleta AND cn.Nombres = TRIM(vc.Cliente);");

        $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);


        $stmt -> execute();
        
        return $stmt->fetchAll();  

        

    }

    static public function mdlListarProductosCliente($idCliente){

        
        $stmt = Conexion::conectar()->prepare("CALL prc_listarProductosxPreciosxClientes(:idCliente);");

        $stmt -> bindParam(":idCliente",$idCliente,PDO::PARAM_STR);

        $stmt -> execute();

        //var_dump($idCliente);
        
        return $stmt->fetchAll();  

        

    }

    static public function mdlListarProductos(){

        
        $stmt = Conexion::conectar()->prepare("CALL prc_ListarProductosGeneral();");

        $stmt -> execute();

        //var_dump($idCliente);
        
        return $stmt->fetchAll();  

        

    }

    static public function mdlListarEstadoBoleta(){

        
        $stmt = Conexion::conectar()->prepare("SELECT '',`nro_boleta`,`fecha_venta`, `Cliente`, CONCAT('S/. ', FORMAT(`total_venta`, 2)) AS `total_venta`, CONCAT('S/. ', FORMAT(`deuda`, 2)) AS `deuda`, `fecha_salida`, `fecha_regreso`, 
                                                        `fecha_entrega`,'' as rango ,`mensajero`, `Estado`, `Vuelto`, `fecha_venta`,  `Dinero_Dado`, `Estado`,`Persona_Dinero`, `Tipo_pago` FROM `venta_cabecera` WHERE `Estado` > 0 and Registro = 1 ORDER BY `nro_boleta` DESC LIMIT 300");

        $stmt -> execute();

        //var_dump($idCliente);
        
        return $stmt->fetchAll();  

        

    }


    static public function mdlListarEstadoBoletaDeuda(){

        
        $stmt = Conexion::conectar()->prepare("SELECT '',`nro_boleta`,`fecha_venta`, `Cliente`, CONCAT('S/. ', FORMAT(`total_venta`, 2)) AS `total_venta`, `fecha_salida`, `fecha_regreso`, 
                                                        `fecha_entrega`,'' as rango ,`mensajero`, `Estado`, `Vuelto`, `fecha_venta`,  `Dinero_Dado`, `Estado`,`Persona_Dinero`, `Tipo_pago`,`deuda` FROM `venta_cabecera` WHERE `Deuda` > 0 and `Estado` > 0 and Registro = 1 ORDER BY `nro_boleta` DESC LIMIT 300");

        $stmt -> execute();

        //var_dump($idCliente);
        
        return $stmt->fetchAll();  

        

    }

    static public function mdlDatosBoletaDeuda($nro_boleta){

        
        $stmt = Conexion::conectar()->prepare("SELECT `nro_boleta`, `Cliente`,`total_venta`, `deuda` FROM `venta_cabecera` WHERE `nro_boleta` = :nro_boleta;");

        $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);

        $stmt -> execute();
        
        return $stmt->fetchAll();  

        

    }

    static public function mdlVerificarRepetidos($nro_boleta,$total_cobro) {

        $stmt = Conexion::conectar()->prepare("SELECT `id_cobro`, `nro_boleta`, `total_cobro`, `hora_salida`, `hora_regreso`, `cobrador`, `hora_real` FROM `tiempo_cobro` WHERE `nro_boleta` = :nro_boleta AND `total_cobro` = :total_cobro");
        $stmt->bindParam(":nro_boleta", $nro_boleta, PDO::PARAM_STR);
        $stmt->bindParam(":total_cobro", $total_cobro, PDO::PARAM_STR);
        $stmt->execute();
        
        if ($stmt->rowCount() > 0) {
            return "ok"; // Se encontraron filas con el número de boleta dado
        } else {
            return "vacio"; // No se encontraron filas con el número de boleta dado
        }
    }

    static public function mdlDarDatosCobros() {

        $stmt = Conexion::conectar()->prepare("SELECT tc.id_cobro, tc.nro_boleta, vc.Cliente as Cliente, tc.total_cobro , tc.hora_regreso ,tc.cobrador
                                                FROM tiempo_cobro tc INNER JOIN venta_cabecera vc WHERE tc.cobranza = 0 and tc.nro_boleta = vc.nro_boleta;");

        $stmt -> execute();
        
        return $stmt->fetchAll();  
    }

    static public function mdlIngresarTempoDeuda($nro_boleta, $total_cobro, $hora_salida, $hora_regreso, $cobrador) {
        // Verificar si ya existe una fila con el mismo número de boleta
        $stmt = Conexion::conectar()->prepare("SELECT * FROM `tiempo_cobro` WHERE `nro_boleta` = :nro_boleta AND `total_cobro` = :total_cobro");
        $stmt->bindParam(":nro_boleta", $nro_boleta, PDO::PARAM_STR);
        $stmt->bindParam(":total_cobro", $total_cobro, PDO::PARAM_STR);
        $stmt->execute();
        $fila_existente = $stmt->fetch();
    
        if ($fila_existente) {
            // Actualizar los datos existentes
            $stmt = Conexion::conectar()->prepare("UPDATE `tiempo_cobro` SET `total_cobro` = :total_cobro, `hora_salida` = :hora_salida, `hora_regreso` = :hora_regreso, `cobrador` = :cobrador WHERE `nro_boleta` = :nro_boleta");
            $stmt->bindParam(":total_cobro", $total_cobro, PDO::PARAM_STR);
            $stmt->bindParam(":hora_salida", $hora_salida, PDO::PARAM_STR);
            $stmt->bindParam(":hora_regreso", $hora_regreso, PDO::PARAM_STR);
            $stmt->bindParam(":cobrador", $cobrador, PDO::PARAM_STR);
            $stmt->bindParam(":nro_boleta", $nro_boleta, PDO::PARAM_STR);
            if ($stmt->execute()) {
                return "ok"; // Inserción exitosa
            }
        } else {
            // Insertar una nueva fila
            $stmt = Conexion::conectar()->prepare("INSERT INTO `tiempo_cobro`(`nro_boleta`, `total_cobro`, `hora_salida`, `hora_regreso`, `cobrador`) VALUES (:nro_boleta, :total_cobro, :hora_salida, :hora_regreso, :cobrador)");
            $stmt->bindParam(":nro_boleta", $nro_boleta, PDO::PARAM_STR);
            $stmt->bindParam(":total_cobro", $total_cobro, PDO::PARAM_STR);
            $stmt->bindParam(":hora_salida", $hora_salida, PDO::PARAM_STR);
            $stmt->bindParam(":hora_regreso", $hora_regreso, PDO::PARAM_STR);
            $stmt->bindParam(":cobrador", $cobrador, PDO::PARAM_STR);
    
            if ($stmt->execute()) {
                return "ok"; // Inserción exitosa
            }
        }
    }

    static public function mdlCambiarHora($tiempo,$tiempo_estimado, $estado,$Boleta,$eleccion, $persona){

        if($eleccion == 1){

            if($estado == 1){
                
                $stmt = Conexion::conectar()->prepare("UPDATE venta_cabecera SET fecha_entrega= :tiempo_estimado ,fecha_salida= :tiempo , Estado = '2', mensajero = :persona WHERE nro_boleta = :Boleta");
                $stmt -> bindParam(":tiempo_estimado",$tiempo_estimado,PDO::PARAM_STR);
                $stmt -> bindParam(":tiempo",$tiempo,PDO::PARAM_STR);
                $stmt -> bindParam(":Boleta",$Boleta,PDO::PARAM_STR);
                $stmt -> bindParam(":persona",$persona,PDO::PARAM_STR);

            } else if($estado == 2){
                
                $stmt = Conexion::conectar()->prepare("UPDATE venta_cabecera SET fecha_entrega= :tiempo_estimado ,fecha_salida= :tiempo , Estado = '2', mensajero = :persona WHERE nro_boleta = :Boleta");
                $stmt -> bindParam(":tiempo_estimado",$tiempo_estimado,PDO::PARAM_STR);
                $stmt -> bindParam(":tiempo",$tiempo,PDO::PARAM_STR);
                $stmt -> bindParam(":Boleta",$Boleta,PDO::PARAM_STR);
                $stmt -> bindParam(":persona",$persona,PDO::PARAM_STR);

            }else{
                $stmt = Conexion::conectar()->prepare("UPDATE venta_cabecera SET fecha_entrega= :tiempo_estimado ,fecha_salida = :tiempo, Estado = :estado, mensajero = :persona WHERE nro_boleta = :Boleta");
                $stmt->bindParam(":tiempo_estimado", $tiempo_estimado, PDO::PARAM_STR);
                $stmt -> bindParam(":tiempo",$tiempo,PDO::PARAM_STR);
                $stmt->bindParam(":Boleta", $Boleta, PDO::PARAM_STR);
                $stmt->bindParam(":estado", $estado, PDO::PARAM_INT);
                $stmt->bindParam(":persona", $persona, PDO::PARAM_STR);

            }

            

        }else if ($eleccion == 2){


            if($estado == 1){
                
                $stmt = Conexion::conectar()->prepare("UPDATE venta_cabecera 
                                                        SET fecha_regreso = :tiempo, 
                                                            Estado = CASE 
                                                                    WHEN deuda = 0 THEN '4' 
                                                                    ELSE '3' 
                                                                    END, 
                                                            mensajero = :persona 
                                                        WHERE nro_boleta = :Boleta;");

                $stmt -> bindParam(":tiempo",$tiempo,PDO::PARAM_STR);
                $stmt -> bindParam(":Boleta",$Boleta,PDO::PARAM_STR);
                $stmt -> bindParam(":persona",$persona,PDO::PARAM_STR);

            } else if($estado == 2){
                
                $stmt = Conexion::conectar()->prepare("UPDATE venta_cabecera 
                                                        SET fecha_regreso = :tiempo, 
                                                            Estado = CASE 
                                                                    WHEN deuda = 0 THEN '4' 
                                                                    ELSE '3' 
                                                                    END, 
                                                            mensajero = :persona 
                                                        WHERE nro_boleta = :Boleta;");

                $stmt -> bindParam(":tiempo",$tiempo,PDO::PARAM_STR);
                $stmt -> bindParam(":Boleta",$Boleta,PDO::PARAM_STR);
                $stmt -> bindParam(":persona",$persona,PDO::PARAM_STR);

            } else{
                $stmt = Conexion::conectar()->prepare("UPDATE venta_cabecera SET fecha_regreso= :tiempo , Estado = :estado , mensajero = :persona WHERE nro_boleta = :Boleta");
                $stmt -> bindParam(":tiempo",$tiempo,PDO::PARAM_STR);
                $stmt -> bindParam(":Boleta",$Boleta,PDO::PARAM_STR);
                $stmt -> bindParam(":estado",$estado,PDO::PARAM_INT);
                $stmt -> bindParam(":persona",$persona,PDO::PARAM_STR);
            }


        }else if($eleccion == 0){
            return "No espedifico";
        }
          
        
        if($stmt -> execute()){
            return "ok";
        }

        

    }

    static public function mdlCambiarHora_2($tiempo,$tiempo_estimado, $estado,$Boleta,$eleccion, $persona,$Nueva_Deuda){

        $retornar = "ok";
        $retornar2 = "ok";

        if($eleccion == 1){
            $stmt = Conexion::conectar()->prepare("UPDATE venta_cabecera SET fecha_entrega= :tiempo_estimado ,fecha_salida = :tiempo WHERE nro_boleta = :Boleta");
            $stmt->bindParam(":tiempo_estimado", $tiempo_estimado, PDO::PARAM_STR);
            $stmt -> bindParam(":tiempo",$tiempo,PDO::PARAM_STR);
            $stmt->bindParam(":Boleta", $Boleta, PDO::PARAM_STR);
            if($stmt -> execute()){ 
                $retornar = "ok";
            }else{
                $retornar = "error";
            }      
        }else if($eleccion == 2){
            $stmt = Conexion::conectar()->prepare("UPDATE venta_cabecera SET fecha_entrega= :tiempo_estimado ,fecha_regreso = :tiempo WHERE nro_boleta = :Boleta");
            $stmt->bindParam(":tiempo_estimado", $tiempo_estimado, PDO::PARAM_STR);
            $stmt -> bindParam(":tiempo",$tiempo,PDO::PARAM_STR);
            $stmt->bindParam(":Boleta", $Boleta, PDO::PARAM_STR);
            if($stmt -> execute()){ 
                $retornar = "ok";
            }else{
                $retornar = "error";
            }    
        }

        if($estado == 1){
            $stmt2 = Conexion::conectar()->prepare("UPDATE venta_cabecera SET Estado = 2, mensajero = :persona , deuda = :Nueva_Deuda WHERE nro_boleta = :Boleta");
            $stmt2->bindParam(":persona", $persona, PDO::PARAM_STR);
            $stmt2->bindParam(":Nueva_Deuda", $Nueva_Deuda, PDO::PARAM_STR);
            $stmt2->bindParam(":Boleta", $Boleta, PDO::PARAM_STR);

            if($stmt2 -> execute()){ 
                $retornar2 = "ok";
            }else{
                $retornar2 = "error";
            }    

        }else if ($estado == 2 ||$estado == 3 ){
            if($Nueva_Deuda <= 0){
                $stmt2 = Conexion::conectar()->prepare("UPDATE venta_cabecera SET Estado = 4, mensajero = :persona , deuda = :Nueva_Deuda WHERE nro_boleta = :Boleta");
            }else{
                $stmt2 = Conexion::conectar()->prepare("UPDATE venta_cabecera SET Estado = 3, mensajero = :persona , deuda = :Nueva_Deuda WHERE nro_boleta = :Boleta"); 
            }

            $stmt2->bindParam(":persona", $persona, PDO::PARAM_STR);
            $stmt2->bindParam(":Nueva_Deuda", $Nueva_Deuda, PDO::PARAM_STR);
            $stmt2->bindParam(":Boleta", $Boleta, PDO::PARAM_STR);

            if($stmt2 -> execute()){ 
                $retornar2 = "ok";
            }else{
                $retornar2 = "error";
            }    
            
        }
        
        if($retornar === "ok" && $retornar2 === "ok"){ 
            return "ok";
        }else{
            return "error";
        }
    
    }

    static public function mdlAgregarRegistroPago($Boleta,$Amortiguacion,$Tipo_pago,$Persona_Dinero){
        $stmt = Conexion::conectar()->prepare("INSERT INTO `pagosventa`( `nro_boleta`, `Monto`, `Tipo_pago`, `Persona_Dinero`) VALUES (:Boleta,:Amortiguacion,:Tipo_pago,:Persona_Dinero)");
        $stmt -> bindParam(":Boleta",$Boleta,PDO::PARAM_STR);
        $stmt -> bindParam(":Amortiguacion",$Amortiguacion,PDO::PARAM_STR);
        $stmt -> bindParam(":Tipo_pago",$Tipo_pago,PDO::PARAM_STR);
        $stmt -> bindParam(":Persona_Dinero",$Persona_Dinero,PDO::PARAM_STR);

        if($stmt -> execute()){

            $stmt = Conexion::conectar()->prepare("UPDATE `venta_cabecera` SET `Persona_Dinero`= :Persona_Dinero ,`Tipo_pago`= :Tipo_pago WHERE `nro_boleta`=:Boleta ");

            $stmt -> bindParam(":Boleta",$Boleta,PDO::PARAM_STR);
            $stmt -> bindParam(":Tipo_pago",$Tipo_pago,PDO::PARAM_STR);
            $stmt -> bindParam(":Persona_Dinero",$Persona_Dinero,PDO::PARAM_STR);

            if($stmt -> execute()){
                return "ok";
            }
        }
    }

    static public function mdlEliminarDeCliente($codigo, $medida, $cliente){
        if ($medida === "fardo"){
            $stmt = Conexion::conectar()->prepare("UPDATE `cliente_producto` SET 
                                                                            `precio_fardo`='0' 
                                                                            WHERE`id_cliente` = :cliente AND `cod_producto` = :codigo");

            $stmt -> bindParam(":codigo",$codigo,PDO::PARAM_STR);
            $stmt -> bindParam(":cliente",$cliente,PDO::PARAM_STR);
            if($stmt -> execute()){
                return "ok";
            }
        } else if ($medida === "paquetito"){
            $stmt = Conexion::conectar()->prepare("UPDATE `cliente_producto` SET 
                                                                            `precio_paquetito`='0'
                                                                            WHERE`id_cliente` = :cliente AND `cod_producto` = :codigo");

            $stmt -> bindParam(":codigo",$codigo,PDO::PARAM_STR);
            $stmt -> bindParam(":cliente",$cliente,PDO::PARAM_STR);
            if($stmt -> execute()){
                return "ok";
            }
        }else if ($medida === "unidad"){
            $stmt = Conexion::conectar()->prepare("UPDATE `cliente_producto` SET 
                                                                            `precio_unidad`='0'
                                                                            WHERE`id_cliente` = :cliente AND `cod_producto` = :codigo");

            $stmt -> bindParam(":codigo",$codigo,PDO::PARAM_STR);
            $stmt -> bindParam(":cliente",$cliente,PDO::PARAM_STR);
            if($stmt -> execute()){
                return "ok";
            }
        }else if ($medida === "docena"){
            $stmt = Conexion::conectar()->prepare("UPDATE `cliente_producto` SET 
                                                                            `precio_docena`='0'
                                                                            WHERE`id_cliente` = :cliente AND `cod_producto` = :codigo");

            $stmt -> bindParam(":codigo",$codigo,PDO::PARAM_STR);
            $stmt -> bindParam(":cliente",$cliente,PDO::PARAM_STR);
            if($stmt -> execute()){
                return "ok";
            }
        }else if ($medida === "ciento"){
            $stmt = Conexion::conectar()->prepare("UPDATE `cliente_producto` SET 
                                                                            `precio_ciento`='0'
                                                                            WHERE`id_cliente` = :cliente AND `cod_producto` = :codigo");

            $stmt -> bindParam(":codigo",$codigo,PDO::PARAM_STR);
            $stmt -> bindParam(":cliente",$cliente,PDO::PARAM_STR);
            if($stmt -> execute()){
                return "ok";
            }
        }else if ($medida === "millar"){
            $stmt = Conexion::conectar()->prepare("UPDATE `cliente_producto` SET 
                                                                            `precio_millar`='0'
                                                                            WHERE`id_cliente` = :cliente AND `cod_producto` = :codigo");

            $stmt -> bindParam(":codigo",$codigo,PDO::PARAM_STR);
            $stmt -> bindParam(":cliente",$cliente,PDO::PARAM_STR);
            if($stmt -> execute()){
                return "ok";
            }
        }else if ($medida === "caja"){
            $stmt = Conexion::conectar()->prepare("UPDATE `cliente_producto` SET 
                                                                            `precio_caja`='0'
                                                                            WHERE`id_cliente` = :cliente AND `cod_producto` = :codigo");

            $stmt -> bindParam(":codigo",$codigo,PDO::PARAM_STR);
            $stmt -> bindParam(":cliente",$cliente,PDO::PARAM_STR);
            if($stmt -> execute()){
                return "ok";
            }
        }else if ($medida === "plancha"){
            $stmt = Conexion::conectar()->prepare("UPDATE `cliente_producto` SET 
                                                                            `precio_plancha`='0'
                                                                            WHERE`id_cliente` = :cliente AND `cod_producto` = :codigo");

            $stmt -> bindParam(":codigo",$codigo,PDO::PARAM_STR);
            $stmt -> bindParam(":cliente",$cliente,PDO::PARAM_STR);
            if($stmt -> execute()){
                return "ok";
            }
        }

          

    }

    static public function mdlListarVentas_2($fechaDesde, $fechaHasta,$opcion){
        //AND c.Nombres = vc.Cliente-->
        try {

            if($opcion == 1){
                $stmt = Conexion::conectar()->prepare("SELECT  '1' as opcion ,MIN(nro_boleta) AS nro_boleta, vc.Cliente, MIN(total_venta) AS total_venta, 
                                                        CASE 
                                                            WHEN Estado = 0 THEN 'Registrado'
                                                            WHEN Estado = 1 THEN 'Reportado'
                                                            WHEN Estado = 2 THEN 'Orden en Camino'
                                                            WHEN Estado = 3 THEN 'Orden Recibida'
                                                            WHEN Estado = 4 THEN 'Orden cancelada'
                                                            ELSE 'Estado Desconocido'
                                                        END AS Estado,
                                                        MIN(mensajero) AS mensajero,
                                                        MIN(fecha_venta) AS fecha_venta,
                                                        fecha_impresion,
                                                        '' as detalles,
                                                        tipo_venta,
                                                        c.Identificacion,
                                                        numero_factura, '' as Impresion
                                                        
                                                    FROM venta_cabecera vc  INNER JOIN clientes_nombre c 
                                                    WHERE DATE(vc.fecha_venta) >= DATE(:fechaDesde)     
                                                    AND DATE(vc.fecha_venta) <= DATE(:fechaHasta)
                                                    GROUP BY descripcion, Cliente, Estado
                                                    ORDER BY nro_boleta ASC;");
            }else if ($opcion == 2){
                $stmt = Conexion::conectar()->prepare("SELECT  '1' as opcion ,MIN(nro_boleta) AS nro_boleta, vc.Cliente, MIN(total_venta) AS total_venta, 
                                                        CASE 
                                                            WHEN Estado = 0 THEN 'Registrado'
                                                            WHEN Estado = 1 THEN 'Reportado'
                                                            WHEN Estado = 2 THEN 'Orden en Camino'
                                                            WHEN Estado = 3 THEN 'Orden Recibida'
                                                            WHEN Estado = 4 THEN 'Orden cancelada'
                                                            ELSE 'Estado Desconocido'
                                                        END AS Estado,
                                                        MIN(mensajero) AS mensajero,
                                                        MIN(fecha_venta) AS fecha_venta,
                                                        fecha_impresion,
                                                        '' as detalles,
                                                        tipo_venta,
                                                        c.Identificacion,
                                                        numero_factura, '' as Impresion
                                                        
                                                    FROM venta_cabecera vc  INNER JOIN clientes_nombre c 
                                                    WHERE DATE(vc.fecha_venta) >= DATE(:fechaDesde)     
                                                    AND DATE(vc.fecha_venta) <= DATE(:fechaHasta) AND vc.tipo_venta = 'BOLETA' AND vc.link != ''
                                                    GROUP BY descripcion, Cliente, Estado
                                                    ORDER BY nro_boleta ASC;");

            }else if ($opcion == 3){
                $stmt = Conexion::conectar()->prepare("SELECT  '1' as opcion ,MIN(nro_boleta) AS nro_boleta, vc.Cliente, MIN(total_venta) AS total_venta, 
                                                        CASE 
                                                            WHEN Estado = 0 THEN 'Registrado'
                                                            WHEN Estado = 1 THEN 'Reportado'
                                                            WHEN Estado = 2 THEN 'Orden en Camino'
                                                            WHEN Estado = 3 THEN 'Orden Recibida'
                                                            WHEN Estado = 4 THEN 'Orden cancelada'
                                                            ELSE 'Estado Desconocido'
                                                        END AS Estado,
                                                        MIN(mensajero) AS mensajero,
                                                        MIN(fecha_venta) AS fecha_venta,
                                                        fecha_impresion,
                                                        '' as detalles,
                                                        tipo_venta,
                                                        c.Identificacion,
                                                        numero_factura, '' as Impresion
                                                        
                                                    FROM venta_cabecera vc  INNER JOIN clientes_nombre c 
                                                    WHERE DATE(vc.fecha_venta) >= DATE(:fechaDesde)     
                                                    AND DATE(vc.fecha_venta) <= DATE(:fechaHasta) AND vc.tipo_venta = 'FACTURA' AND vc.link != ''
                                                    GROUP BY descripcion, Cliente, Estado
                                                    ORDER BY nro_boleta ASC;");

            }else if ($opcion == 4){
                $stmt = Conexion::conectar()->prepare("SELECT  '1' as opcion ,MIN(nro_boleta) AS nro_boleta, vc.Cliente, MIN(total_venta) AS total_venta, 
                                                        CASE 
                                                            WHEN Estado = 0 THEN 'Registrado'
                                                            WHEN Estado = 1 THEN 'Reportado'
                                                            WHEN Estado = 2 THEN 'Orden en Camino'
                                                            WHEN Estado = 3 THEN 'Orden Recibida'
                                                            WHEN Estado = 4 THEN 'Orden cancelada'
                                                            ELSE 'Estado Desconocido'
                                                        END AS Estado,
                                                        MIN(mensajero) AS mensajero,
                                                        MIN(fecha_venta) AS fecha_venta,
                                                        fecha_impresion,
                                                        '' as detalles,
                                                        tipo_venta,
                                                        c.Identificacion,
                                                        numero_factura, '' as Impresion
                                                        
                                                    FROM venta_cabecera vc  INNER JOIN clientes_nombre c 
                                                    WHERE DATE(vc.fecha_venta) >= DATE(:fechaDesde)     
                                                    AND DATE(vc.fecha_venta) <= DATE(:fechaHasta) AND vc.tipo_venta = 'NOTA DE VENTA'
                                                    GROUP BY descripcion, Cliente, Estado
                                                    ORDER BY nro_boleta ASC;");

            }else if ($opcion == 5){
                $stmt = Conexion::conectar()->prepare("SELECT  '1' as opcion ,MIN(nro_boleta) AS nro_boleta, vc.Cliente, MIN(total_venta) AS total_venta, 
                                                        CASE 
                                                            WHEN Estado = 0 THEN 'Registrado'
                                                            WHEN Estado = 1 THEN 'Reportado'
                                                            WHEN Estado = 2 THEN 'Orden en Camino'
                                                            WHEN Estado = 3 THEN 'Orden Recibida'
                                                            WHEN Estado = 4 THEN 'Orden cancelada'
                                                            ELSE 'Estado Desconocido'
                                                        END AS Estado,
                                                        MIN(mensajero) AS mensajero,
                                                        MIN(fecha_venta) AS fecha_venta,
                                                        fecha_impresion,
                                                        '' as detalles,
                                                        tipo_venta,
                                                        c.Identificacion,
                                                        numero_factura, '' as Impresion
                                                        
                                                    FROM venta_cabecera vc  INNER JOIN clientes_nombre c 
                                                    WHERE DATE(vc.fecha_venta) >= DATE(:fechaDesde)     
                                                    AND DATE(vc.fecha_venta) <= DATE(:fechaHasta) AND vc.tipo_venta = 'TICKET'
                                                    GROUP BY descripcion, Cliente, Estado
                                                    ORDER BY nro_boleta ASC;");

            }else if ($opcion == 6){
                $stmt = Conexion::conectar()->prepare("SELECT  '1' as opcion ,MIN(nro_boleta) AS nro_boleta, vc.Cliente, MIN(total_venta) AS total_venta, 
                                                        CASE 
                                                            WHEN Estado = 0 THEN 'Registrado'
                                                            WHEN Estado = 1 THEN 'Reportado'
                                                            WHEN Estado = 2 THEN 'Orden en Camino'
                                                            WHEN Estado = 3 THEN 'Orden Recibida'
                                                            WHEN Estado = 4 THEN 'Orden cancelada'
                                                            ELSE 'Estado Desconocido'
                                                        END AS Estado,
                                                        MIN(mensajero) AS mensajero,
                                                        MIN(fecha_venta) AS fecha_venta,
                                                        fecha_impresion,
                                                        '' as detalles,
                                                        tipo_venta,
                                                        c.Identificacion,
                                                        numero_factura, '' as Impresion
                                                        
                                                    FROM venta_cabecera vc  INNER JOIN clientes_nombre c 
                                                    WHERE DATE(vc.fecha_venta) >= DATE(:fechaDesde)     
                                                    AND DATE(vc.fecha_venta) <= DATE(:fechaHasta) AND (vc.tipo_venta = 'SIN DEFINIR' OR vc.tipo_venta = 'SIN IDENTIFICAR' OR  vc.tipo_venta = '')
                                                    GROUP BY descripcion, Cliente, Estado
                                                    ORDER BY nro_boleta ASC;");

            }else if ($opcion == 7){
                $stmt = Conexion::conectar()->prepare("SELECT  '1' as opcion ,MIN(nro_boleta) AS nro_boleta, vc.Cliente, MIN(total_venta) AS total_venta, 
                                                        CASE 
                                                            WHEN Estado = 0 THEN 'Registrado'
                                                            WHEN Estado = 1 THEN 'Reportado'
                                                            WHEN Estado = 2 THEN 'Orden en Camino'
                                                            WHEN Estado = 3 THEN 'Orden Recibida'
                                                            WHEN Estado = 4 THEN 'Orden cancelada'
                                                            ELSE 'Estado Desconocido'
                                                        END AS Estado,
                                                        MIN(mensajero) AS mensajero,
                                                        MIN(fecha_venta) AS fecha_venta,
                                                        fecha_impresion,
                                                        '' as detalles,
                                                        tipo_venta,
                                                        c.Identificacion,
                                                        numero_factura, '' as Impresion
                                                        
                                                    FROM venta_cabecera vc  INNER JOIN clientes_nombre c 
                                                    WHERE DATE(vc.fecha_venta) >= DATE(:fechaDesde)     
                                                    AND DATE(vc.fecha_venta) <= DATE(:fechaHasta) AND (vc.tipo_venta != 'SIN DEFINIR' AND vc.tipo_venta != 'SIN IDENTIFICAR' AND  vc.tipo_venta != '')
                                                    GROUP BY descripcion, Cliente, Estado
                                                    ORDER BY nro_boleta ASC;");

            }else if ($opcion == 8){
                $stmt = Conexion::conectar()->prepare("SELECT  '1' as opcion ,MIN(nro_boleta) AS nro_boleta, vc.Cliente, MIN(total_venta) AS total_venta, 
                                                        CASE 
                                                            WHEN Estado = 0 THEN 'Registrado'
                                                            WHEN Estado = 1 THEN 'Reportado'
                                                            WHEN Estado = 2 THEN 'Orden en Camino'
                                                            WHEN Estado = 3 THEN 'Orden Recibida'
                                                            WHEN Estado = 4 THEN 'Orden cancelada'
                                                            ELSE 'Estado Desconocido'
                                                        END AS Estado,
                                                        MIN(mensajero) AS mensajero,
                                                        MIN(fecha_venta) AS fecha_venta,
                                                        fecha_impresion,
                                                        '' as detalles,
                                                        tipo_venta,
                                                        c.Identificacion,
                                                        numero_factura, '' as Impresion
                                                        
                                                    FROM venta_cabecera vc  INNER JOIN clientes_nombre c 
                                                    WHERE DATE(vc.fecha_venta) >= DATE(:fechaDesde)     
                                                    AND DATE(vc.fecha_venta) <= DATE(:fechaHasta) AND (vc.tipo_venta = 'BOLETA' OR vc.tipo_venta = 'FACTURA' ) AND vc.link != ''
                                                    GROUP BY descripcion, Cliente, Estado
                                                    ORDER BY nro_boleta ASC;");

            }else{
                $stmt = Conexion::conectar()->prepare("SELECT  '1' as opcion ,MIN(nro_boleta) AS nro_boleta, vc.Cliente, MIN(total_venta) AS total_venta, 
                                                        CASE 
                                                            WHEN Estado = 0 THEN 'Registrado'
                                                            WHEN Estado = 1 THEN 'Reportado'
                                                            WHEN Estado = 2 THEN 'Orden en Camino'
                                                            WHEN Estado = 3 THEN 'Orden Recibida'
                                                            WHEN Estado = 4 THEN 'Orden cancelada'
                                                            ELSE 'Estado Desconocido'
                                                        END AS Estado,
                                                        MIN(mensajero) AS mensajero,
                                                        MIN(fecha_venta) AS fecha_venta,
                                                        fecha_impresion,
                                                        '' as detalles,
                                                        tipo_venta,
                                                        c.Identificacion,
                                                        numero_factura, '' as Impresion
                                                        
                                                    FROM venta_cabecera vc  INNER JOIN clientes_nombre c 
                                                    WHERE DATE(vc.fecha_venta) >= DATE(:fechaDesde)     
                                                    AND DATE(vc.fecha_venta) <= DATE(:fechaHasta)
                                                    GROUP BY descripcion, Cliente, Estado
                                                    ORDER BY nro_boleta ASC;");
            }
            
            
    
            $stmt->bindParam(":fechaDesde", $fechaDesde, PDO::PARAM_STR);
            $stmt->bindParam(":fechaHasta", $fechaHasta, PDO::PARAM_STR);
    
            $stmt->execute();
    
            return $stmt->fetchAll();
            
        } catch (Exception $e) {
            return 'Excepción capturada: ' . $e->getMessage() . "\n";
        }
        
        $stmt = null;
    }

    static public function mdlListarEliminados_2($fechaDesde, $fechaHasta){

        try {
            
            $stmt = Conexion::conectar()->prepare("SELECT  '1' as opcion ,MIN(nro_boleta) AS nro_boleta, Cliente, MIN(total_venta) AS total_venta, 
                                                        CASE 
                                                            WHEN Estado = 0 THEN 'Registrado'
                                                            WHEN Estado = 1 THEN 'Reportado'
                                                            WHEN Estado = 2 THEN 'Orden en Camino'
                                                            WHEN Estado = 3 THEN 'Orden Recibida'
                                                            WHEN Estado = 4 THEN 'Orden cancelada'
                                                            ELSE 'Estado Desconocido'
                                                        END AS Estado,
                                                        MIN(mensajero) AS mensajero,
                                                        MIN(fecha_venta) AS fecha_venta,
                                                        vc.Comentario
                                                        
                                                    FROM eliminada_cabecera vc 
                                                    WHERE DATE(vc.fecha_venta) >= DATE(:fechaDesde) 
                                                    AND DATE(vc.fecha_venta) <= DATE(:fechaHasta)
                                                    GROUP BY descripcion, Cliente, Estado
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

    static public function mdlComentarioCambio($Comentario, $nroBoleta){

        try {
            
            $stmt = Conexion::conectar()->prepare("UPDATE `eliminada_cabecera` SET `Comentario`=:Comentario WHERE `nro_boleta` = :nroBoleta;");
    
            $stmt->bindParam(":Comentario", $Comentario, PDO::PARAM_STR);
            $stmt->bindParam(":nroBoleta", $nroBoleta, PDO::PARAM_STR);
    
            $stmt->execute();
    
            return $stmt->fetchAll();
            
        } catch (Exception $e) {
            return 'Excepción capturada: ' . $e->getMessage() . "\n";
        }
        
        $stmt = null;
    }

    
    static public function mdlMirarDedua($codigo){

        try {
  
            $stmt = Conexion::conectar()->prepare("SELECT `deuda`, `fecha_entrega` FROM `venta_cabecera` WHERE `nro_boleta` = :codigo");

            $stmt -> bindParam(":codigo",$codigo,PDO::PARAM_STR);

            $stmt -> execute();

            //var_dump($idCliente);
            
            return $stmt->fetchAll();  

        } catch (Exception $e) {
            return 'Excepción capturada: ' . $e->getMessage() . "\n";
        }

    }

    static public function mdlCambiarDeuda($Boleta, $estado, $caso, $Amortiguacion, $Amortiguacion2, $Vuelto, $Tipo_pago, $Persona_Dinero){

        if($estado == 1){

            if($caso == 1){

                $stmt = Conexion::conectar()->prepare("UPDATE `venta_cabecera` SET `deuda` = `deuda` - :Amortiguacion, `Vuelto` = :Vuelto WHERE `nro_boleta` = :Boleta");
                $stmt -> bindParam(":Boleta",$Boleta,PDO::PARAM_STR);
                $stmt -> bindParam(":Amortiguacion",$Amortiguacion,PDO::PARAM_STR);
                $stmt -> bindParam(":Vuelto",$Vuelto,PDO::PARAM_STR); 
    

    
            }else if($caso == 2){
    
                $stmt = Conexion::conectar()->prepare("UPDATE `venta_cabecera` SET `deuda` = 0, `Vuelto` = :Vuelto WHERE `nro_boleta` = :Boleta");
                $stmt -> bindParam(":Boleta",$Boleta,PDO::PARAM_STR);
                $stmt -> bindParam(":Vuelto",$Vuelto,PDO::PARAM_STR);

    
            }else if($caso == 3){
    
                $stmt = Conexion::conectar()->prepare("UPDATE `venta_cabecera` SET `deuda` = 0, `Vuelto` = :Vuelto , `Estado` = 4 WHERE `nro_boleta` = :Boleta");
                $stmt -> bindParam(":Boleta",$Boleta,PDO::PARAM_STR);
                $stmt -> bindParam(":Vuelto",$Vuelto,PDO::PARAM_STR);
    
            }


        }else{

            if($caso == 1){

                $stmt = Conexion::conectar()->prepare("UPDATE `venta_cabecera` SET `deuda` = `deuda` - :Amortiguacion WHERE `nro_boleta` = :Boleta");
                $stmt -> bindParam(":Boleta",$Boleta,PDO::PARAM_STR);
                $stmt -> bindParam(":Amortiguacion",$Amortiguacion,PDO::PARAM_STR);
                 

    
            }else if($caso == 2){
    
                $stmt = Conexion::conectar()->prepare("UPDATE `venta_cabecera` SET `deuda` = 0 , `Estado` = 4 WHERE `nro_boleta` = :Boleta");
                $stmt -> bindParam(":Boleta",$Boleta,PDO::PARAM_STR);
                

    
            }else if($caso == 3){
    
                $stmt = Conexion::conectar()->prepare("UPDATE `venta_cabecera` SET `deuda` = 0 , `Estado` = 4 WHERE `nro_boleta` = :Boleta");
                $stmt -> bindParam(":Boleta",$Boleta,PDO::PARAM_STR);
                

            }

        }

            
        if($stmt -> execute()){

            $fecha_actual = date("Y-m-d H:i:s");

            if($Tipo_pago === "Opc" || $Persona_Dinero === ""){

                $stmt = Conexion::conectar()->prepare("UPDATE `venta_cabecera` SET `Persona_Dinero` = 'Desconocido' , `Tipo_pago` = 'efectivo' WHERE `nro_boleta` = :Boleta");
                $stmt -> bindParam(":Boleta",$Boleta,PDO::PARAM_STR);

                if($stmt -> execute()){

                    $stmt = Conexion::conectar()->prepare("INSERT INTO `pagosventa`( `nro_boleta`, `Monto`, `Tipo_pago`, `Persona_Dinero`, `fecha`) VALUES (:Boleta,:Amortiguacion,'efectivo','Desconocido',:fecha_actual)");
                    $stmt -> bindParam(":Boleta",$Boleta,PDO::PARAM_STR);
                    $stmt -> bindParam(":Amortiguacion",$Amortiguacion2,PDO::PARAM_STR);
                    $stmt->bindParam(":fecha_actual", $fecha_actual, PDO::PARAM_STR);

                    if($stmt -> execute()){
                        return "ok";
                    }
                }

                return "ok";
            }else{
                $stmt = Conexion::conectar()->prepare("UPDATE `venta_cabecera` SET `Persona_Dinero` =  :Persona_Dinero , `Tipo_pago` = :Tipo_pago WHERE `nro_boleta` = :Boleta");
                $stmt -> bindParam(":Boleta",$Boleta,PDO::PARAM_STR);
                $stmt -> bindParam(":Tipo_pago",$Tipo_pago,PDO::PARAM_STR);
                $stmt -> bindParam(":Persona_Dinero",$Persona_Dinero,PDO::PARAM_STR);

                if($stmt -> execute()){

                    $stmt = Conexion::conectar()->prepare("INSERT INTO `pagosventa`( `nro_boleta`, `Monto`, `Tipo_pago`, `Persona_Dinero`, `fecha`) VALUES (:Boleta,:Amortiguacion,:Tipo_pago,:Persona_Dinero,:fecha_actual)");
                    $stmt -> bindParam(":Boleta",$Boleta,PDO::PARAM_STR);
                    $stmt -> bindParam(":Amortiguacion",$Amortiguacion2,PDO::PARAM_STR);
                    $stmt->bindParam(":fecha_actual", $fecha_actual, PDO::PARAM_STR);
                    $stmt -> bindParam(":Tipo_pago",$Tipo_pago,PDO::PARAM_STR);
                    $stmt -> bindParam(":Persona_Dinero",$Persona_Dinero,PDO::PARAM_STR);

                    if($stmt -> execute()){
                        return "ok";
                    }
                }
            
            }
        }
        
        

        
    }

    static public function mdlcargarDeuda($nro_boleta){


            $stmt = Conexion::conectar()->prepare("UPDATE `venta_cabecera` SET `deuda` = `total_venta` WHERE `nro_boleta` = :nro_boleta  ");
            $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);

            if($stmt -> execute()){
                return "ok";
            }

        

        
    }

    static public function mdlConfirmarVuelto($nro_boleta, $Dinero_Dado){

        if($Dinero_Dado == 1){
            $Dinero_Dado = 0;
        }else if($Dinero_Dado == 0){
            $Dinero_Dado = 1;
        }


        $stmt = Conexion::conectar()->prepare("UPDATE `venta_cabecera` SET `Dinero_Dado` = :Dinero_Dado WHERE `nro_boleta` = :nro_boleta ");
        $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);
        $stmt -> bindParam(":Dinero_Dado",$Dinero_Dado,PDO::PARAM_STR);

        if($stmt -> execute()){
            return "ok";
        }

    

    
    }

    static public function mdlVolverPedido($nro_boleta){


        $stmt = Conexion::conectar()->prepare("UPDATE `venta_cabecera` SET `Registro` = 1 WHERE `nro_boleta` = :nro_boleta ");
        $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);

        if($stmt -> execute()){

            $stmt = Conexion::conectar()->prepare("INSERT INTO pedidos(nro_boleta) VALUES(:nro_boleta)");

            $stmt -> bindParam(":nro_boleta", $nro_boleta , PDO::PARAM_STR);

            if($stmt -> execute()){
                return "ok";
            }
        }

    

    
    }

    static public function mdlVolverRegistro($nro_boleta){


        $stmt = Conexion::conectar()->prepare("UPDATE `venta_cabecera` SET `Registro` = 0, `Estado` = 0 WHERE `nro_boleta` = :nro_boleta ");
        $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);

        if($stmt -> execute()){
            return "ok";
        }

    

    
    }

    static public function mdlVerificarEstados(){


        $stmt = Conexion::conectar()->prepare("SELECT COUNT(*) 
                                                FROM `venta_cabecera` 
                                                WHERE `Estado` = 1 
                                                AND `fecha_venta` <= DATE_SUB(NOW(), INTERVAL 10 MINUTE)
                                                AND `registro` = 1;");

        

        if($stmt -> execute()){
            return $stmt->fetchAll();  
        }

    

    
    }

    static public function mdlRegistrarMultiple($tiempo_estimado,$tiempo,$estado,$Boletas,$persona){

        if($estado == 1){

            try {
                // Consulta para actualizar los registros
                $stmt = Conexion::conectar()->prepare("UPDATE `venta_cabecera` 
                                                        SET `Estado` = 2, 
                                                            `fecha_regreso` = :tiempo, 
                                                            `fecha_entrega` = :tiempo_estimado,
                                                            `mensajero` =  :mensajero
                                                        WHERE `nro_boleta` = :nro_boleta ");
        
                // Iterar sobre cada elemento de Boletas
                foreach ($Boletas as $boleta) {
                    // Vincular los parámetros y ejecutar la consulta
                    $stmt->bindParam(":tiempo_estimado", $tiempo_estimado, PDO::PARAM_STR);
                    $stmt->bindParam(":tiempo", $tiempo, PDO::PARAM_STR);
                    $stmt->bindParam(":nro_boleta", $boleta, PDO::PARAM_STR);
                    $stmt->bindParam(":mensajero", $persona, PDO::PARAM_STR);
                    $stmt->execute();
                }
        
                // Devolver mensaje de éxito o el resultado de la consulta
                return "ok";
            } catch (PDOException $e) {
                // Manejo de errores
                return "Error al actualizar registros: " . $e->getMessage();
            }

        }else if($estado == 2){

            try {
                // Consulta para actualizar los registros
                $stmt = Conexion::conectar()->prepare("UPDATE `venta_cabecera` 
                                                        SET `Estado` = 3, 
                                                            `fecha_salida` = :tiempo, 
                                                            `fecha_entrega` = :tiempo_estimado,
                                                            `mensajero` =  :mensajero 
                                                        WHERE `nro_boleta` = :nro_boleta ");
        
                // Iterar sobre cada elemento de Boletas
                foreach ($Boletas as $boleta) {
                    // Vincular los parámetros y ejecutar la consulta
                    $stmt->bindParam(":tiempo_estimado", $tiempo_estimado, PDO::PARAM_STR);
                    $stmt->bindParam(":tiempo", $tiempo, PDO::PARAM_STR);
                    $stmt->bindParam(":nro_boleta", $boleta, PDO::PARAM_STR);
                    $stmt->bindParam(":mensajero", $persona, PDO::PARAM_STR);
                    $stmt->execute();
                }
        
                // Devolver mensaje de éxito o el resultado de la consulta
                return "ok";
            } catch (PDOException $e) {
                // Manejo de errores
                return "Error al actualizar registros: " . $e->getMessage();
            }

        }
        

    

    
    }

    static public function mdlListarEstadoBoletaxCliente($nombre_cliente){

        
        $stmt = Conexion::conectar()->prepare("SELECT '',`nro_boleta`,`fecha_venta`, `Cliente`, CONCAT('S/. ', FORMAT(`total_venta`, 2)) AS `total_venta`, `fecha_salida`, `fecha_regreso`, 
                                                        `fecha_entrega`,'' as rango ,`mensajero`, `Estado`, `Vuelto`, `fecha_venta`,  `Dinero_Dado`, `Estado` 
                                                        FROM `venta_cabecera` WHERE `Estado` = 3  and registro = 1 and TRIM(`Cliente`) = :nombre_cliente ORDER BY `nro_boleta` DESC LIMIT 300");

        $stmt->bindParam(":nombre_cliente", $nombre_cliente, PDO::PARAM_STR);

        $stmt -> execute();

        //var_dump($idCliente);
        
        return $stmt->fetchAll();  

        

    }

    static public function mdlListarEstadoBoletaxClienteTODAS($nombre_cliente){

        
        $stmt = Conexion::conectar()->prepare(" SELECT '', 
                                                    `nro_boleta`,
                                                    `fecha_venta`,
                                                    `Cliente`,
                                                    CONCAT('S/. ', FORMAT(`total_venta`, 2)) AS `total_venta`,
                                                    CONCAT('S/. ', FORMAT(`deuda`, 2)) AS `deuda`,
                                                    `fecha_salida`,
                                                    `fecha_regreso`,
                                                    `fecha_entrega`,
                                                    '' AS rango,
                                                    `mensajero`,
                                                    `Estado`,
                                                    `Vuelto`,
                                                    `fecha_venta`,
                                                    `Dinero_Dado`,
                                                    `Estado`
                                                FROM `venta_cabecera`
                                                WHERE `registro` = 1
                                                AND TRIM(`Cliente`) = :nombre_cliente
                                                AND `fecha_venta` >= DATE_SUB(CURDATE(), INTERVAL 2 MONTH)
                                                ORDER BY 
                                                    CASE 
                                                        WHEN `Estado` = 3 THEN 1
                                                        WHEN `Estado` = 2 THEN 2
                                                        WHEN `Estado` = 1 THEN 3
                                                        WHEN `Estado` = 4 THEN 4
                                                        ELSE 5
                                                    END,
                                                    `nro_boleta` DESC
                                                LIMIT 300;");

        $stmt->bindParam(":nombre_cliente", $nombre_cliente, PDO::PARAM_STR);

        $stmt -> execute();

        //var_dump($idCliente);
        
        return $stmt->fetchAll();  

        

    }

    static public function mdlCancelarDeuda($nro_boleta,$Tipo_pago,$Persona_Dinero){


        if($Tipo_pago === "Opc" || $Persona_Dinero === ""){

            if($Tipo_pago === "Opc" && $Persona_Dinero === ""){
                return "falta12";
            }else if($Tipo_pago === "Opc"){
                return "falta1";
            }else if($Persona_Dinero === ""){
                return "falta2";
            }
            
        }else{

            $stmt = Conexion::conectar()->prepare("UPDATE `venta_cabecera` SET  `Estado` = 4 , `deuda` = 0,`Tipo_pago` = :Tipo_pago , `Persona_Dinero` = :Persona_Dinero 
                                                    WHERE `nro_boleta` = :nro_boleta ");
            $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);
            $stmt -> bindParam(":Tipo_pago",$Tipo_pago,PDO::PARAM_STR);
            $stmt -> bindParam(":Persona_Dinero",$Persona_Dinero,PDO::PARAM_STR);

            if($stmt -> execute()){
                return "ok";
            }
        }

    
    }

    static public function mdlCambiarNombres($mensajero,$Persona_Dinero,$nro_boleta){


        if($mensajero === "" && $Persona_Dinero === ""){

            return "vacio";
            
        }else if($mensajero === ""){

            $stmt = Conexion::conectar()->prepare("UPDATE `venta_cabecera` SET  ``Persona_Dinero` = :Persona_Dinero 
                                                    WHERE `nro_boleta` = :nro_boleta ");
            $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);
            $stmt -> bindParam(":Persona_Dinero",$Persona_Dinero,PDO::PARAM_STR);

            if($stmt -> execute()){
                return "ok";
            }

        }else if($Persona_Dinero === ""){

            $stmt = Conexion::conectar()->prepare("UPDATE `venta_cabecera` SET  `mensajero` = :mensajero 
                                                    WHERE `nro_boleta` = :nro_boleta ");
            $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);
            $stmt -> bindParam(":mensajero",$mensajero,PDO::PARAM_STR);

            if($stmt -> execute()){
                return "ok";
            }


        }else{

            $stmt = Conexion::conectar()->prepare("UPDATE `venta_cabecera` SET  `mensajero` = :mensajero , `Persona_Dinero` = :Persona_Dinero 
                                                    WHERE `nro_boleta` = :nro_boleta ");
            $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);
            $stmt -> bindParam(":Persona_Dinero",$Persona_Dinero,PDO::PARAM_STR);
            $stmt -> bindParam(":mensajero",$mensajero,PDO::PARAM_STR);

            if($stmt -> execute()){
                return "ok";
            }

        }

    
    }

    static public function mdlDarProveedorBoleta($nro_boleta){


        $stmt = Conexion::conectar()->prepare("SELECT CONCAT(cc.Proveedor ,'/', cn.Identificacion, '/' ,cn.Direccion) AS cliente FROM `compra_cabecera` cc INNER JOIN clientes_nombre cn WHERE cc.nro_boleta = :nro_boleta AND cn.Nombres = TRIM(cc.Proveedor);");

        $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);


        $stmt -> execute();
        
        return $stmt->fetchAll();  

        

    }

    static public function mdlDarInfoPersona($nro_boleta){


        $stmt = Conexion::conectar()->prepare("SELECT CONCAT(cc.Cliente ,'/', cn.Identificacion, '/' ,cn.Direccion) AS cliente FROM `cotizacion_cabecera` cc INNER JOIN clientes_nombre cn WHERE cc.nro_boleta = :nro_boleta AND cn.Nombres = TRIM(cc.Cliente);");

        $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);


        $stmt -> execute();
        
        return $stmt->fetchAll();  

        

    }

    static public function mdlMostrarListaPago($nro_boleta){


        $stmt = Conexion::conectar()->prepare("SELECT `id_pago`, `nro_boleta`, `Monto`, `Tipo_pago`, `Persona_Dinero`, `fecha` FROM `pagosventa` WHERE `nro_boleta` = :nro_boleta  ;");

        $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);


        $stmt -> execute();
        
        return $stmt->fetchAll();  

        

    }

    static public function mdlRegistrarComoTicket($nro_boleta){


        $stmt = Conexion::conectar()->prepare("UPDATE `venta_cabecera` SET `tipo_venta`='TICKET' WHERE `nro_boleta` = :nro_boleta;");

        $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);


        $stmt -> execute();
        
        return $stmt->fetchAll();  

        

    }



    static public function mdlRegistrarComoBoleta($nro_boleta){


        $stmt = Conexion::conectar()->prepare("UPDATE `venta_cabecera` SET `tipo_venta`='BOLETA' WHERE `nro_boleta` = :nro_boleta;");

        $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);


        $stmt -> execute();
        
        return $stmt->fetchAll();  

        

    }

    static public function mdlRegistrarComoFactura($nro_boleta){


        $stmt = Conexion::conectar()->prepare("UPDATE `venta_cabecera` SET `tipo_venta`='FACTURA' WHERE `nro_boleta` = :nro_boleta;");

        $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);


        $stmt -> execute();
        
        return $stmt->fetchAll();  

        

    }

    static public function mdlReiniciarEstadoVenta($nro_boleta){


        $stmt = Conexion::conectar()->prepare("UPDATE `venta_cabecera` SET `Estado`='0', tipo_venta = '', fecha_impresion = '', link = '', numero_factura = '0' WHERE `nro_boleta` = :nro_boleta;");

        $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);


        $stmt -> execute();
        
        return $stmt->fetchAll();  

        

    }

    static public function mdlRegistrarComoNota($nro_boleta){


        $stmt = Conexion::conectar()->prepare("UPDATE `venta_cabecera` SET `tipo_venta`='NOTA DE VENTA' WHERE `nro_boleta` = :nro_boleta;");

        $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);


        $stmt -> execute();
        
        return $stmt->fetchAll();  

        

    }

    static public function mdlEliminarProductoVenta($id_boleta,$cod_producto){


        $stmt = Conexion::conectar()->prepare("DELETE FROM `venta_detalle` WHERE `codigo_producto` = :cod_producto AND `nro_boleta` = :nro_boleta");

        $stmt -> bindParam(":nro_boleta",$id_boleta,PDO::PARAM_STR);

        $stmt -> bindParam(":cod_producto",$cod_producto,PDO::PARAM_STR);


        // $stmt -> execute();
        
        // // Verificar si no hay más registros asociados a la boleta en venta_detalle
        // $stmtVerificar = Conexion::conectar()->prepare("SELECT COUNT(*) AS cantidad FROM `venta_detalle` WHERE `nro_boleta` = :nro_boleta");
        // $stmtVerificar->bindParam(":nro_boleta", $id_boleta, PDO::PARAM_STR);
        // $stmtVerificar->execute();
        // $resultado = $stmtVerificar->fetch(PDO::FETCH_ASSOC);

        // $cantidadRegistros = $resultado['cantidad'];

        // if ($cantidadRegistros == 0) {
        //     // Si no hay más registros en venta_detalle para esta boleta, eliminar la entrada en venta_cabecera
        //     $stmtEliminarVentaCabecera = Conexion::conectar()->prepare("DELETE FROM `venta_cabecera` WHERE `nro_boleta` = :nro_boleta");
        //     $stmtEliminarVentaCabecera->bindParam(":nro_boleta", $id_boleta, PDO::PARAM_STR);
        //     $stmtEliminarVentaCabecera->execute();
        // }

        // return $stmt->fetchAll();

        if($stmt -> execute()){
            $resultado = "OK";
        }else{
            $resultado = "ERROR";
        }
        
        return $resultado;
        
        $stmt = null;

    }


    static public function mdlListarCompras(){


            $stmt = Conexion::conectar()->prepare("SELECT '', nro_boleta, Proveedor, CONCAT('S/. ', FORMAT(total_compra, 2)) AS total_compra, DATE(fecha_compra) AS fecha_compra, Estado, mensajero,Tipo_pago
                                                    FROM compra_cabecera
                                                    ORDER BY nro_boleta DESC LIMIT 300");

            $stmt -> execute();

            return $stmt->fetchAll();

    }

    static public function mdlVolverDeuda($nro_boleta){


            $stmt = Conexion::conectar()->prepare("UPDATE `venta_cabecera` SET `Estado`='3'WHERE `nro_boleta` = :nro_boleta;");

            $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);

            $stmt -> execute();

            return "ok";

    }

    static public function mdlCambiarFechaImpresion($nro_boleta){

        $stmt = Conexion::conectar()->prepare("UPDATE `venta_cabecera` SET `fecha_impresion` = NOW() WHERE `nro_boleta` = :nro_boleta;");
    
        $stmt -> bindParam(":nro_boleta", $nro_boleta, PDO::PARAM_STR);
    
        if($stmt -> execute()){

            $stmt = Conexion::conectar()->prepare("INSERT INTO `ventas_impresion`( `nro_boleta`, `fecha_impresion`) VALUES (:nro_boleta, NOW())");
    
            $stmt -> bindParam(":nro_boleta", $nro_boleta, PDO::PARAM_STR);

            if($stmt -> execute()){
                $resultado = "ok";
            }else{
                $resultado = "ERROR";
            }

        }else{
            $resultado = "ERROR";
        }
        
        return $resultado;
    }

    static public function mdlListarFechaImpresion($nro_boleta){

        $stmt = Conexion::conectar()->prepare("SELECT `id_impresion`, `nro_boleta`, `fecha_impresion` FROM `ventas_impresion` WHERE `nro_boleta` = :nro_boleta ");
    
        $stmt -> bindParam(":nro_boleta", $nro_boleta, PDO::PARAM_STR);
    
        $stmt -> execute();

        return $stmt->fetchAll();

    }

    static public function mdlCambiarNombreCliente($nro_boleta, $id_cliente){

        $stmt = Conexion::conectar()->prepare("UPDATE venta_cabecera vc INNER JOIN clientes_nombre cn SET vc.Cliente= cn.Nombres  WHERE cn.id_cliente = :id_cliente and vc.nro_boleta = :nro_boleta;");
    
        $stmt -> bindParam(":nro_boleta", $nro_boleta, PDO::PARAM_STR);
        $stmt -> bindParam(":id_cliente", $id_cliente, PDO::PARAM_STR);
    
        if($stmt -> execute()){
            $resultado = "OK";
        }else{
            $resultado = "ERROR";
        }

        return $resultado;
    }

    static public function mdlCambiarDinero($idCliente, $nro_producto, $medida, $precio){

        if($medida === "fardo"){
            $stmt = Conexion::conectar()->prepare("UPDATE `cliente_producto` SET `precio_fardo`= :precio WHERE `id_cliente` = :idCliente AND `cod_producto`= :nro_producto;");
        }else if ($medida === "plancha"){
            $stmt = Conexion::conectar()->prepare("UPDATE `cliente_producto` SET `precio_plancha`= :precio WHERE `id_cliente` = :idCliente AND `cod_producto`= :nro_producto;");
        }else if ($medida === "millar"){
            $stmt = Conexion::conectar()->prepare("UPDATE `cliente_producto` SET `precio_millar`= :precio WHERE `id_cliente` = :idCliente AND `cod_producto`= :nro_producto;");
        }else if ($medida === "caja"){
            $stmt = Conexion::conectar()->prepare("UPDATE `cliente_producto` SET `precio_caja`= :precio WHERE `id_cliente` = :idCliente AND `cod_producto`= :nro_producto;");
        }else if ($medida === "ciento"){
            $stmt = Conexion::conectar()->prepare("UPDATE `cliente_producto` SET `precio_ciento`= :precio WHERE `id_cliente` = :idCliente AND `cod_producto`= :nro_producto;");
        }else if ($medida === "docena"){
            $stmt = Conexion::conectar()->prepare("UPDATE `cliente_producto` SET `precio_docena`= :precio WHERE `id_cliente` = :idCliente AND `cod_producto`= :nro_producto;");
        }else if ($medida === "paquetito"){
            $stmt = Conexion::conectar()->prepare("UPDATE `cliente_producto` SET `precio_paquetito`= :precio WHERE `id_cliente` = :idCliente AND `cod_producto`= :nro_producto;");
        }else if ($medida === "unidad"){
            $stmt = Conexion::conectar()->prepare("UPDATE `cliente_producto` SET `precio_unidad`= :precio WHERE `id_cliente` = :idCliente AND `cod_producto`= :nro_producto;");
        }

        $stmt -> bindParam(":nro_producto", $nro_producto, PDO::PARAM_STR);
        $stmt -> bindParam(":idCliente", $idCliente, PDO::PARAM_STR);
        $stmt -> bindParam(":precio", $precio, PDO::PARAM_STR);
    
        if($stmt -> execute()){
            $resultado = "OK";
        }else{
            $resultado = "ERROR";
        }

        return $resultado;
    }  

    static public function mdlVerificarPopulares($nombre_cliente){


        $stmt = Conexion::conectar()->prepare("SELECT tipo_venta, COUNT(*) as cantidad
                                                FROM venta_cabecera
                                                WHERE Cliente = :nombre_cliente AND `tipo_venta` != 'SIN DEFINIR' AND `tipo_venta` != 'SIN IDENTIFICAR'  and `tipo_venta` != '' AND Cliente != 'VARIOS'
                                                GROUP BY tipo_venta
                                                ORDER BY cantidad DESC
                                                LIMIT 1;");

        $stmt -> bindParam(":nombre_cliente",$nombre_cliente,PDO::PARAM_STR);


        $stmt -> execute();
        
        return $stmt->fetchAll();  

        

    }

    static public function mdlEstadoVentas(){


        $stmt = Conexion::conectar()->prepare("SELECT `Estado` FROM `venta_estado` WHERE `id` = '1'");

        $stmt -> execute();
        
        return $stmt->fetchAll();  

        

    }

    static public function mdlVentaEstadoActivo(){


        $stmt = Conexion::conectar()->prepare("UPDATE `venta_estado` SET `Estado`='0' WHERE `id`='1'");

        $stmt -> execute();
        
        return $stmt->fetchAll();  

        

    }

    static public function mdlVentaEstadoProceso(){


        $stmt = Conexion::conectar()->prepare("UPDATE `venta_estado` SET `Estado`='1' WHERE `id`='1'");

        $stmt -> execute();
        
        return $stmt->fetchAll();  

        

    }

    static public function mdlRegistrarNuevasHoras($nro_boleta,$fecha_salida,$fecha_regreso,$Estado,$mensajero){

        if($Estado < 3){
            $stmt = Conexion::conectar()->prepare("UPDATE `venta_cabecera` SET  `Estado` = CASE
                                                        WHEN `deuda` <= 0 THEN '4'
                                                        ELSE '3'
                                                    END, `fecha_salida`= :fecha_salida , `fecha_regreso`= :fecha_regreso, `mensajero`= :mensajero WHERE `nro_boleta`= :nro_boleta ");
        }else{
            $stmt = Conexion::conectar()->prepare("UPDATE `venta_cabecera` SET  `Estado` = CASE
                                                        WHEN `deuda` <= 0 THEN '4'
                                                        ELSE '3'
                                                    END,`fecha_salida`= :fecha_salida , `fecha_regreso`= :fecha_regreso, `mensajero`= :mensajero WHERE `nro_boleta`=:nro_boleta ");   
        }
            
        $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);
        $stmt -> bindParam(":fecha_salida",$fecha_salida,PDO::PARAM_STR);
        $stmt -> bindParam(":fecha_regreso",$fecha_regreso,PDO::PARAM_STR);
        $stmt -> bindParam(":mensajero",$mensajero,PDO::PARAM_STR);


        if($stmt -> execute()){
            $resultado = "ok";
        }else{
            $resultado = "error";
        }

        return $resultado;
        

    }

    static public function mdlRegistrarNuevosPagos($nro_boleta,$Monto,$Tipo_pago,$Persona_Dinero,$Estado,$Deuda,$vuelto){

        date_default_timezone_set('America/Lima');
        $fecha = date('Y-m-d H:i:s');
        $Deuda = floatval($Deuda);

        if($Estado == 3 && $Deuda == 0){
            $stmt = Conexion::conectar()->prepare("UPDATE `venta_cabecera` SET  `Estado`='4' , `deuda`= :Deuda, `Vuelto`= :vuelto WHERE `nro_boleta`= :nro_boleta ");
            $stmt -> bindParam(":vuelto",$vuelto,PDO::PARAM_STR);
            $stmt -> bindParam(":Deuda",$Deuda,PDO::PARAM_STR);
            $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);

        }else{
            $stmt = Conexion::conectar()->prepare("UPDATE `venta_cabecera` SET  `deuda`= :Deuda, `Vuelto`= :vuelto WHERE `nro_boleta`= :nro_boleta ");
            $stmt -> bindParam(":vuelto",$vuelto,PDO::PARAM_STR);
            $stmt -> bindParam(":Deuda",$Deuda,PDO::PARAM_STR);
            $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);
        }

        if($stmt -> execute()){
            
            $stmt2 = Conexion::conectar()->prepare("INSERT INTO `pagosventa`(`nro_boleta`, `Monto`, `Tipo_pago`, `Persona_Dinero`, `fecha`) VALUES (:nro_boleta, :Monto, :Tipo_pago, :Persona_Dinero, :fecha)");

            $stmt2 -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);
            $stmt2 -> bindParam(":Monto",$Monto,PDO::PARAM_STR);
            $stmt2 -> bindParam(":Tipo_pago",$Tipo_pago,PDO::PARAM_STR);
            $stmt2 -> bindParam(":Persona_Dinero",$Persona_Dinero,PDO::PARAM_STR);
            $stmt2 -> bindParam(":fecha",$fecha,PDO::PARAM_STR);

            if($stmt2 -> execute()){
            
                $resultado = "ok";
    
            }else{
                $resultado = "error";
            }

        }else{
            $resultado = "error";
        }

        return $resultado;

    }

    static public function mdlVolverEstado4($nro_boleta){

        $stmt = Conexion::conectar()->prepare("UPDATE `venta_cabecera` SET  `Estado`='4' WHERE `nro_boleta`= :nro_boleta ");
        $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);

        if($stmt -> execute()){
            
            $resultado = "ok";

        }else{
            $resultado = "error";
        }

        return $resultado;

    }

    static public function mdlVolverRegistroPedido($nro_boleta){

        $stmt = Conexion::conectar()->prepare("UPDATE `venta_cabecera` SET  `registro`='1' WHERE `nro_boleta`= :nro_boleta ");
        $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);

        if($stmt -> execute()){
            
            $resultado = "ok";

        }else{
            $resultado = "error";
        }

        return $resultado;

    }

    static public function mdlRegistrarFechaVenta($nro_boleta, $fecha_venta){

        $stmt = Conexion::conectar()->prepare("UPDATE `venta_cabecera` SET `fecha_venta` = :fecha_venta WHERE `nro_boleta`= :nro_boleta");
        $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);
        $stmt -> bindParam(":fecha_venta",$fecha_venta,PDO::PARAM_STR);

        if($stmt -> execute()){
            
            $resultado = "ok";

        }else{
            $resultado = "error";
        }

        return $resultado;

    }


}
<?php

require_once "conexion.php";

class RegistrosModelo{
    
    public $resultado;
    
    static public function mdlObtenerNroBoleta(){

        $stmt = Conexion::conectar()->prepare("SELECT c.serie_boleta, 	IFNULL(LPAD(MAX(C.nro_correlativo_venta)+1,8,'0'),'00000001') as nro_venta FROM empresa c Where serie_boleta = '0003';");

        $stmt -> execute();

        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    static public function mdlListarBoletas(){


        $stmt = Conexion::conectar()->prepare("SELECT '', nro_boleta, Cliente, CONCAT('S/. ', FORMAT(total_venta, 2)) AS total_venta, DATE(fecha_venta) AS fecha_venta, Estado
                                                FROM solicitud_cabecera WHERE Estado = 0
                                                ORDER BY nro_boleta DESC LIMIT 200");

        $stmt -> execute();

        return $stmt->fetchAll();

    }

    static public function mdlListarStock(){


        $stmt = Conexion::conectar()->prepare("SELECT '' as opciones, p.descripcion_producto, a.fardos, a.cajas, a.millares, a.cientos, a.docenas, a.paquetes, a.unidades FROM almacen a INNER JOIN productos p WHERE p.codigo_producto = a.id_producto");

        $stmt -> execute();

        return $stmt->fetchAll();

    }

    static public function mdlListarBoletas2(){


        $stmt = Conexion::conectar()->prepare("SELECT '', nro_boleta, Cliente, CONCAT('S/. ', FORMAT(total_venta, 2)) AS total_venta, DATE(fecha_venta) AS fecha_venta, Estado
                                                FROM solicitud_cabecera WHERE Estado = 1
                                                ORDER BY nro_boleta DESC LIMIT 200 ");

        $stmt -> execute();

        return $stmt->fetchAll();

    }

    static public function mdlCambiarStock($nombre,$fardos,$millares,$cajas,$cientos,$docenas,$paquetes,$unidades){

        $stmt_select = Conexion::conectar()->prepare("SELECT `codigo_producto` FROM `productos` WHERE `descripcion_producto` = :nombre");
        $stmt_select -> bindParam(":nombre", $nombre , PDO::PARAM_STR);
        $stmt_select->execute();

        // Obtenemos el resultado de la consulta
        $id = $stmt_select->fetchColumn();
        
        $codigo = $id;


        $stmt = Conexion::conectar()->prepare("UPDATE almacen a  
                                                    SET a.fardos = :fardos, 
                                                    a.cajas = :cajas , 
                                                    a.millares = :millares , 
                                                    a.cientos = :cientos, 
                                                    a.docenas = :docenas , 
                                                    a.paquetes = :paquetes, 
                                                    a.unidades = :unidades 
                                                    WHERE a.id_producto = :codigo; ");

        $stmt -> bindParam(":codigo", $codigo, PDO::PARAM_STR);
        $stmt -> bindParam(":fardos", $fardos, PDO::PARAM_STR);
        $stmt -> bindParam(":millares", $millares , PDO::PARAM_STR);
        $stmt -> bindParam(":cajas", $cajas , PDO::PARAM_STR);
        $stmt -> bindParam(":cientos", $cientos , PDO::PARAM_STR);
        $stmt -> bindParam(":docenas", $docenas , PDO::PARAM_STR);
        $stmt -> bindParam(":paquetes", $paquetes, PDO::PARAM_STR);
        $stmt -> bindParam(":unidades", $unidades, PDO::PARAM_STR);


        if($stmt -> execute()){
            $resultado = "Se registró la venta correctamente.";
        }else{
            $resultado = "Error al registrar la venta";
        }

    }

    static public function mdlCambiarDatosBoleta($datos,$nro_boleta){

        $suma_total = 0;

        for ($i = 0; $i < count($datos); ++$i){
            
            $listaProductos = explode(",",$datos[$i]);

            $stmt = Conexion::conectar()->prepare("UPDATE solicitud_detalle SET cantidad= :cantidad, medida=:medida, total_venta= :total_venta
                                                                        WHERE nro_boleta = :nro_boleta AND codigo_producto = :codigo_producto");

            $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);

            $stmt -> bindParam(":codigo_producto", $listaProductos[0] , PDO::PARAM_STR);
            $stmt -> bindParam(":cantidad", $listaProductos[1] , PDO::PARAM_STR);
            $stmt -> bindParam(":medida", $listaProductos[2] , PDO::PARAM_STR);
            $stmt -> bindParam(":total_venta", $listaProductos[3] , PDO::PARAM_STR);

            $suma_total =  $suma_total + $listaProductos[3];

            $stmt -> execute();
        
        }

        $stmt = Conexion::conectar()->prepare("UPDATE solicitud_cabecera SET total_venta = :suma_total WHERE nro_boleta = :nro_boleta ");

        $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);
        $stmt -> bindParam(":suma_total", $suma_total , PDO::PARAM_STR);

        $stmt -> execute();

    }

    static public function mdlListarVentas_2($fechaDesde, $fechaHasta){

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
                                                        MIN(fecha_venta) AS fecha_venta
                                                        
                                                    FROM solicitud_cabecera vc 
                                                    WHERE DATE(vc.fecha_venta) >= DATE(:fechaDesde) 
                                                    AND DATE(vc.fecha_venta) <= DATE(:fechaHasta)
                                                    GROUP BY descripcion, Cliente, Estado
                                                    ORDER BY nro_boleta ASC LIMIT 200; ");
    
            $stmt->bindParam(":fechaDesde", $fechaDesde, PDO::PARAM_STR);
            $stmt->bindParam(":fechaHasta", $fechaHasta, PDO::PARAM_STR);
    
            $stmt->execute();
    
            return $stmt->fetchAll();
            
        } catch (Exception $e) {
            return 'Excepción capturada: ' . $e->getMessage() . "\n";
        }
        
        $stmt = null;
    }

    static public function mdlGetDatosProducto($codigoProducto){

        $stmt = Conexion::conectar()->prepare("SELECT id, codigo_producto, c.id_categoria, c.nombre_categoria, descripcion_producto,
                                                    '1' as cantidad,
                                                    CASE 
                                                        WHEN p.precio_fardo > 0 THEN CONCAT('S./ ', CONVERT(ROUND(p.precio_fardo, 2), CHAR))
                                                        WHEN p.precio_caja > 0 THEN CONCAT('S./ ', CONVERT(ROUND(p.precio_caja, 2), CHAR))
                                                        WHEN p.precio_millar > 0 THEN CONCAT('S./ ', CONVERT(ROUND(p.precio_millar, 2), CHAR))
                                                        ELSE CONCAT('S./ ', CONVERT(ROUND(p.precio_ciento, 2), CHAR))
                                                    END as precio_venta,
                                                    CASE 
                                                        WHEN p.precio_fardo > 0 THEN CONCAT('S./ ', CONVERT(ROUND(1* p.precio_fardo, 2), CHAR))
                                                        WHEN p.precio_caja > 0 THEN CONCAT('S./ ', CONVERT(ROUND(1* p.precio_caja, 2), CHAR))
                                                        WHEN p.precio_millar > 0 THEN CONCAT('S./ ', CONVERT(ROUND(1* p.precio_millar, 2), CHAR))
                                                        ELSE CONCAT('S./ ', CONVERT(ROUND(1* p.precio_ciento, 2), CHAR))
                                                    END as total,
                                                    '' as acciones,
                                                    c.aplica_peso,
                                                    p.precio_unidad,
                                                    p.precio_paquetito,
                                                    p.precio_ciento,
                                                    p.precio_docena,
                                                    p.precio_millar,
                                                    p.precio_caja,
                                                    p.precio_fardo,
                                                    p.precio_unidad_2,
                                                    p.precio_paquetito_2,
                                                    p.precio_ciento_2,
                                                    p.precio_docena_2,
                                                    p.precio_millar_2,
                                                    p.precio_caja_2,
                                                    p.precio_fardo_2,
                                                    p.cantidad_millar,
                                                    p.cantidad_docena,
                                                    p.cantidad_caja,
                                                    p.cantidad_fardo
                                                FROM productos p
                                                INNER JOIN categorias c ON p.id_categoria_producto = c.id_categoria
                                                WHERE codigo_producto = :codigoProducto
                                                    AND p.stock_producto > 0 ;");
        
        $stmt -> bindParam(":codigoProducto",$codigoProducto,PDO::PARAM_INT);
        
        $stmt -> execute();

        

        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    static public function mdlRegistrarVenta($datos,$nro_boleta,$total_venta,$descripcion_venta,$Cliente,$Estado){

        $stmt = Conexion::conectar()->prepare("INSERT INTO solicitud_cabecera(nro_boleta,Cliente,descripcion,total_venta,Estado)         
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
                    
                    
                    
        
                    $stmt = Conexion::conectar()->prepare("INSERT INTO solicitud_detalle(nro_boleta,codigo_producto, cantidad,medida, total_venta) 
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

                        if($Estado == 1){

                            if($listaProductos[4] === "Fardos"){

                                $stmt = Conexion::conectar()->prepare("UPDATE `almacen` SET `fardos`= `fardos` + :cantidad WHERE `id_producto` = :codigo_producto");
        
                                $stmt -> bindParam(":codigo_producto", $listaProductos[0] , PDO::PARAM_STR);
                                $stmt -> bindParam(":cantidad", $listaProductos[1] , PDO::PARAM_STR);

                            }else if($listaProductos[4] === "Cajas"){

                                $stmt = Conexion::conectar()->prepare("UPDATE `almacen` SET `cajas`= `cajas` + :cantidad WHERE `id_producto` = :codigo_producto");
        
                                $stmt -> bindParam(":codigo_producto", $listaProductos[0] , PDO::PARAM_STR);
                                $stmt -> bindParam(":cantidad", $listaProductos[1] , PDO::PARAM_STR);

                            }else if($listaProductos[4] === "Millares"){

                                $stmt = Conexion::conectar()->prepare("UPDATE `almacen` SET `millares`= `millares` + :cantidad WHERE `id_producto` = :codigo_producto");
        
                                $stmt -> bindParam(":codigo_producto", $listaProductos[0] , PDO::PARAM_STR);
                                $stmt -> bindParam(":cantidad", $listaProductos[1] , PDO::PARAM_STR);
                                
                            }else if($listaProductos[4] === "Cientos"){

                                $stmt = Conexion::conectar()->prepare("UPDATE `almacen` SET `cientos`= `cientos` + :cantidad WHERE `id_producto` = :codigo_producto");
        
                                $stmt -> bindParam(":codigo_producto", $listaProductos[0] , PDO::PARAM_STR);
                                $stmt -> bindParam(":cantidad", $listaProductos[1] , PDO::PARAM_STR);
                                
                            }else if($listaProductos[4] === "Docenas"){

                                $stmt = Conexion::conectar()->prepare("UPDATE `almacen` SET `docenas`= `docenas` + :cantidad WHERE `id_producto` = :codigo_producto");
        
                                $stmt -> bindParam(":codigo_producto", $listaProductos[0] , PDO::PARAM_STR);
                                $stmt -> bindParam(":cantidad", $listaProductos[1] , PDO::PARAM_STR);
                                
                            }else if($listaProductos[4] === "Paquetitos"){

                                $stmt = Conexion::conectar()->prepare("UPDATE `almacen` SET `paquetes`= `paquetes` + :cantidad WHERE `id_producto` = :codigo_producto");
        
                                $stmt -> bindParam(":codigo_producto", $listaProductos[0] , PDO::PARAM_STR);
                                $stmt -> bindParam(":cantidad", $listaProductos[1] , PDO::PARAM_STR);
                                
                            }else if($listaProductos[4] === "Unidades"){

                                $stmt = Conexion::conectar()->prepare("UPDATE `almacen` SET `unidades`= `unidades` + :cantidad WHERE `id_producto` = :codigo_producto");
        
                                $stmt -> bindParam(":codigo_producto", $listaProductos[0] , PDO::PARAM_STR);
                                $stmt -> bindParam(":cantidad", $listaProductos[1] , PDO::PARAM_STR);
                                
                            }


                            if($stmt -> execute()){
                                $resultado = "Se registró la venta correctamente.";
                            }else{
                                $resultado = "Error al registrar la venta";
                            }


                        }else if ($Estado == 0){
                            if($listaProductos[4] === "Fardos"){

                                $stmt = Conexion::conectar()->prepare("UPDATE `almacen` SET `fardos`= `fardos` - :cantidad WHERE `id_producto` = :codigo_producto");
        
                                $stmt -> bindParam(":codigo_producto", $listaProductos[0] , PDO::PARAM_STR);
                                $stmt -> bindParam(":cantidad", $listaProductos[1] , PDO::PARAM_STR);

                            }else if($listaProductos[4] === "Cajas"){

                                $stmt = Conexion::conectar()->prepare("UPDATE `almacen` SET `cajas`= `cajas` - :cantidad WHERE `id_producto` = :codigo_producto");
        
                                $stmt -> bindParam(":codigo_producto", $listaProductos[0] , PDO::PARAM_STR);
                                $stmt -> bindParam(":cantidad", $listaProductos[1] , PDO::PARAM_STR);

                            }else if($listaProductos[4] === "Millares"){

                                $stmt = Conexion::conectar()->prepare("UPDATE `almacen` SET `millares`= `millares` - :cantidad WHERE `id_producto` = :codigo_producto");
        
                                $stmt -> bindParam(":codigo_producto", $listaProductos[0] , PDO::PARAM_STR);
                                $stmt -> bindParam(":cantidad", $listaProductos[1] , PDO::PARAM_STR);
                                
                            }else if($listaProductos[4] === "Cientos"){

                                $stmt = Conexion::conectar()->prepare("UPDATE `almacen` SET `cientos`= `cientos` - :cantidad WHERE `id_producto` = :codigo_producto");
        
                                $stmt -> bindParam(":codigo_producto", $listaProductos[0] , PDO::PARAM_STR);
                                $stmt -> bindParam(":cantidad", $listaProductos[1] , PDO::PARAM_STR);
                                
                            }else if($listaProductos[4] === "Docenas"){

                                $stmt = Conexion::conectar()->prepare("UPDATE `almacen` SET `docenas`= `docenas` - :cantidad WHERE `id_producto` = :codigo_producto");
        
                                $stmt -> bindParam(":codigo_producto", $listaProductos[0] , PDO::PARAM_STR);
                                $stmt -> bindParam(":cantidad", $listaProductos[1] , PDO::PARAM_STR);
                                
                            }else if($listaProductos[4] === "Paquetitos"){

                                $stmt = Conexion::conectar()->prepare("UPDATE `almacen` SET `paquetes`= `paquetes` - :cantidad WHERE `id_producto` = :codigo_producto");
        
                                $stmt -> bindParam(":codigo_producto", $listaProductos[0] , PDO::PARAM_STR);
                                $stmt -> bindParam(":cantidad", $listaProductos[1] , PDO::PARAM_STR);
                                
                            }else if($listaProductos[4] === "Unidades"){

                                $stmt = Conexion::conectar()->prepare("UPDATE `almacen` SET `unidades`= `unidades` - :cantidad WHERE `id_producto` = :codigo_producto");
        
                                $stmt -> bindParam(":codigo_producto", $listaProductos[0] , PDO::PARAM_STR);
                                $stmt -> bindParam(":cantidad", $listaProductos[1] , PDO::PARAM_STR);
                                
                            }


                            if($stmt -> execute()){
                                $resultado = "Se registró la venta correctamente.";
                            }else{
                                $resultado = "Error al registrar la venta";
                            }
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

    static public function mdlDarDatosBoleta($id_boleta){


        $stmt = Conexion::conectar()->prepare("SELECT nro_boleta, codigo_producto, cantidad, medida, total_venta, fecha_venta FROM solicitud_detalle WHERE nro_boleta = :id_boleta");

        $stmt -> bindParam(":id_boleta",$id_boleta,PDO::PARAM_STR);

        $stmt -> execute();

        return $stmt->fetchAll();

        

    }

    static public function mdlDarClienteBoleta($nro_boleta){


        $stmt = Conexion::conectar()->prepare("SELECT CONCAT(vc.Cliente ,'/', cn.Identificacion, '/' ,cn.Direccion) AS cliente FROM `solicitud_cabecera` vc INNER JOIN clientes_nombre cn WHERE vc.nro_boleta = :nro_boleta AND cn.Nombres = TRIM(vc.Cliente);");

        $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);


        $stmt -> execute();
        
        return $stmt->fetchAll();  

        

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
                                                from solicitud_cabecera vc inner join solicitud_detalle vd on vc.nro_boleta = vd.nro_boleta
                                                                        inner join productos p on p.codigo_producto = vd.codigo_producto
                                                where vc.nro_boleta =  :nro_boleta");

            $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);

            $stmt -> execute();

            return $stmt->fetchAll();
            
        } catch (Exception $e) {
            return 'Excepción capturada: '.  $e->getMessage(). "\n";
        }

    }


   
}
<?php

require_once "conexion.php";

class ComprasModelo{    
    
    
    static public function mdlListarEstadoBoletaxCliente($nombre_cliente){

            
        $stmt = Conexion::conectar()->prepare("SELECT '',
                                                    `nro_boleta`,
                                                    `fecha_compra`, 
                                                    `Proveedor`, 
                                                    CONCAT('S/. ', FORMAT(`total_compra`, 2)) AS `total_compra`,
                                                    `fecha_salida`, 
                                                    `fecha_regreso`, 
                                                    `fecha_entrega`,
                                                    '' as rango ,
                                                    `mensajero`, 
                                                    `Estado`, 
                                                    `Vuelto`, 
                                                    `fecha_compra`,  
                                                    `Dinero_Dado`, 
                                                    `Estado`,
                                                    `Persona_Dinero`,
                                                    `Tipo_pago`,
                                                    `nro_documento`,
                                                    `tipo_documento`,
                                                    `tipo_dni` 
                                                FROM `compra_cabecera` WHERE `Estado` = 3  and registro = 1 and TRIM(`Cliente`) = :nombre_cliente ORDER BY `nro_boleta` DESC LIMIT 200");

        $stmt->bindParam(":nombre_cliente", $nombre_cliente, PDO::PARAM_STR);

        $stmt -> execute();

        //var_dump($idCliente);

        return $stmt->fetchAll();  



    }

    static public function mdlListarEstadoBoleta(){

        
        $stmt = Conexion::conectar()->prepare("SELECT '',
                                                `nro_boleta`,
                                                `fecha_compra`, 
                                                `Proveedor`, 
                                                CONCAT('S/. ', FORMAT(`total_compra`, 2)) AS `total_compra`,
                                                `fecha_salida`, 
                                                `fecha_regreso`, 
                                                `fecha_entrega`,
                                                '' as rango ,
                                                `mensajero`, 
                                                `Estado`, 
                                                `Vuelto`, 
                                                `fecha_compra`,  
                                                `Dinero_Dado`, 
                                                `Estado`,
                                                `Persona_Dinero`,
                                                `Tipo_pago`,
                                                `nro_documento`,
                                                `tipo_documento`,
                                                `tipo_dni`,
                                                `comentario`,
                                                `fecha_pago`
                                            FROM `compra_cabecera` WHERE registro = 1 ORDER BY `nro_boleta` DESC LIMIT 200");

        $stmt -> execute();

        //var_dump($idCliente);
        
        return $stmt->fetchAll();  

        

    }

    static public function mdlCambiarDetallesCompra($nro_boleta,$Proveedor,$fecha_compra,$mensajero,$Tipo_pago,$nro_documento,$tipo_documento,$tipo_dni,$comentario,$fecha_salida,$fecha_regreso,$fecha_pago){

        // Formatear la fecha de compra en "YYYY-MM-DD"
        $fecha_compra_formateada = date("Y-m-d", strtotime(str_replace('/', '-', $fecha_compra)));

        // Formatear la hora de salida en "HH:mm:ss"
        $hora_salida_formateada = date("H:i:s", strtotime($fecha_salida));

        // Combinar fecha y hora en el formato "YYYY-MM-DD HH:mm:ss"
        $fusion_salida = $fecha_compra_formateada . ' ' . $hora_salida_formateada;

        // Formatear la hora de regreso en "HH:mm:ss"
        $hora_regreso_formateada = date("H:i:s", strtotime($fecha_regreso));

        // Combinar fecha y hora en el formato "YYYY-MM-DD HH:mm:ss"
        $fusion_regreso = $fecha_compra_formateada . ' ' . $hora_regreso_formateada;

        $fecha_pago_formateada = date("Y-m-d", strtotime(str_replace('/', '-', $fecha_pago)));

        $fusion_pago = $fecha_pago_formateada . ' ' . $hora_regreso_formateada;

        
        $stmt = Conexion::conectar()->prepare("UPDATE `compra_cabecera` SET  
                                                        `Proveedor`=:Proveedor,
                                                        `fecha_compra`=:fecha_compra,
                                                        `mensajero`=:mensajero,
                                                        `Tipo_pago`=:Tipo_pago,
                                                        `nro_documento`=:nro_documento,
                                                        `tipo_documento`=:tipo_documento,
                                                        `tipo_dni`=:tipo_dni,
                                                        `fecha_salida`=:fecha_salida,
                                                        `fecha_regreso`=:fecha_regreso,
                                                        `comentario`=:comentario,
                                                        `fecha_pago`=:fecha_pago WHERE `nro_boleta`=:nro_boleta");

        $stmt->bindParam(":nro_boleta", $nro_boleta, PDO::PARAM_STR);
        $stmt->bindParam(":Proveedor", $Proveedor, PDO::PARAM_STR);
        $stmt->bindParam(":fecha_compra", $fusion_salida, PDO::PARAM_STR);
        $stmt->bindParam(":mensajero", $mensajero, PDO::PARAM_STR);
        $stmt->bindParam(":Tipo_pago", $Tipo_pago, PDO::PARAM_STR);
        $stmt->bindParam(":nro_documento", $nro_documento, PDO::PARAM_STR);
        $stmt->bindParam(":tipo_documento", $tipo_documento, PDO::PARAM_STR);
        $stmt->bindParam(":tipo_dni", $tipo_dni, PDO::PARAM_STR);
        $stmt->bindParam(":comentario", $comentario, PDO::PARAM_STR);
        $stmt->bindParam(":fecha_salida", $fusion_salida, PDO::PARAM_STR);
        $stmt->bindParam(":fecha_regreso", $fusion_regreso, PDO::PARAM_STR);
        $stmt->bindParam(":fecha_pago", $fusion_pago, PDO::PARAM_STR);

        if($stmt -> execute()){
            $resultado = "OK";
        }else{
            $resultado = "ERROR";
        }
        
        return $resultado;
        
        $stmt = null;        

    }

    static public function mdlDarDatosBoletaCompra($id_boleta){


        $stmt = Conexion::conectar()->prepare("SELECT `id`, `nro_boleta`, `codigo_producto`, `cantidad`, `medida`, `total_compra`, `fecha_compra` FROM `compra_detalle` WHERE  nro_boleta = :id_boleta");

        $stmt -> bindParam(":id_boleta",$id_boleta,PDO::PARAM_STR);

        $stmt -> execute();

        return $stmt->fetchAll();

        

    }

    static public function mdlEliminarProductoVenta($id_boleta,$cod_producto){


        $stmt = Conexion::conectar()->prepare("DELETE FROM `compra_detalle` WHERE `codigo_producto` = :cod_producto AND `nro_boleta` = :nro_boleta");

        $stmt -> bindParam(":nro_boleta",$id_boleta,PDO::PARAM_STR);

        $stmt -> bindParam(":cod_producto",$cod_producto,PDO::PARAM_STR);


        if($stmt -> execute()){
            $resultado = "OK";
        }else{
            $resultado = "ERROR";
        }
        
        return $resultado;
        
        $stmt = null;

        

    }

    static public function mdlCambiarDatosBoleta($datos,$nro_boleta){

        $suma_total = 0;

        for ($i = 0; $i < count($datos); ++$i){
            
            $listaProductos = explode(",", $datos[$i]);

            // Consulta preparada para seleccionar el registro existente
            $stmt_select = Conexion::conectar()->prepare("SELECT COUNT(*) FROM compra_detalle WHERE nro_boleta = :nro_boleta AND codigo_producto = :codigo_producto");
            $stmt_select->bindParam(":nro_boleta", $nro_boleta, PDO::PARAM_STR);
            $stmt_select->bindParam(":codigo_producto", $listaProductos[0], PDO::PARAM_STR);
            $stmt_select->execute();

            // Obtenemos el resultado de la consulta
            $existente = $stmt_select->fetchColumn();

            if ($existente) {
                // Si el registro existe, actualizamos
                $stmt_update = Conexion::conectar()->prepare("UPDATE compra_detalle SET cantidad = :cantidad, medida = :medida, total_compra = :total_compra WHERE nro_boleta = :nro_boleta AND codigo_producto = :codigo_producto");

                $stmt_update->bindParam(":nro_boleta", $nro_boleta, PDO::PARAM_STR);
                $stmt_update->bindParam(":codigo_producto", $listaProductos[0], PDO::PARAM_STR);
                $stmt_update->bindParam(":cantidad", $listaProductos[1], PDO::PARAM_STR);
                $stmt_update->bindParam(":medida", $listaProductos[2], PDO::PARAM_STR);
                $stmt_update->bindParam(":total_compra", $listaProductos[3], PDO::PARAM_STR);

                $stmt_update->execute();
            } else {
                // Si el registro no existe, insertamos
                $stmt_insert = Conexion::conectar()->prepare("INSERT INTO compra_detalle (nro_boleta, codigo_producto, cantidad, medida, total_compra) VALUES (:nro_boleta, :codigo_producto, :cantidad, :medida, :total_compra)");

                $stmt_insert->bindParam(":nro_boleta", $nro_boleta, PDO::PARAM_STR);
                $stmt_insert->bindParam(":codigo_producto", $listaProductos[0], PDO::PARAM_STR);
                $stmt_insert->bindParam(":cantidad", $listaProductos[1], PDO::PARAM_STR);
                $stmt_insert->bindParam(":medida", $listaProductos[2], PDO::PARAM_STR);
                $stmt_insert->bindParam(":total_compra", $listaProductos[3], PDO::PARAM_STR);

                $stmt_insert->execute();
            }


            $suma_total =  $suma_total + $listaProductos[3];
        
        }

        $stmt = Conexion::conectar()->prepare("UPDATE compra_cabecera SET total_compra = :suma_total WHERE nro_boleta = :nro_boleta ");

        $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);
        $stmt -> bindParam(":suma_total", $suma_total , PDO::PARAM_STR);

        $stmt -> execute();
        

        

    }

    static public function mdlDarClienteBoleta($nro_boleta){


        $stmt = Conexion::conectar()->prepare("SELECT CONCAT(vc.Proveedor ,'/', cn.Identificacion, '/' ,cn.Direccion) AS cliente FROM `compra_cabecera` vc INNER JOIN clientes_nombre cn WHERE vc.nro_boleta = :nro_boleta AND cn.Nombres = TRIM(vc.Proveedor);");

        $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);


        $stmt -> execute();
        
        return $stmt->fetchAll();  

        

    }

    static public function mdldarFechaDeudas(){


        $stmt = Conexion::conectar()->prepare("SELECT CONCAT(vc.Proveedor ,'/', cn.Identificacion, '/' ,cn.Direccion) AS cliente FROM `compra_cabecera` vc INNER JOIN clientes_nombre cn WHERE vc.nro_boleta = :nro_boleta AND cn.Nombres = TRIM(vc.Proveedor);");

        $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);


        $stmt -> execute();
        
        return $stmt->fetchAll();  

        

    }


    static public function mdllistarCompras(){


        $stmt = Conexion::conectar()->prepare(" SELECT '' as opc, cc.nro_boleta, ca.Proveedor, cc.fecha_compra,  cc.total_compra, cc.Estado, cc.total_deuda 
                                                FROM compra_credito cc INNER JOIN compra_cabecera ca WHERE cc.nro_boleta = ca.nro_boleta ORDER BY cc.nro_boleta DESC ;");

        $stmt -> execute();
        
        return $stmt->fetchAll();  

        

    }

    static public function mdllistarComprasCredito(){


        $stmt = Conexion::conectar()->prepare(" SELECT '' as opc, cc.nro_boleta, ca.Proveedor, cc.fecha_compra, cc.total_compra, cc.Estado, cc.total_deuda, cc.id_compra_credito  
                                                FROM compra_credito cc INNER JOIN compra_cabecera ca WHERE cc.nro_boleta = ca.nro_boleta and cc.Estado = 1 ORDER BY cc.nro_boleta DESC ;");

        $stmt -> execute();
        
        return $stmt->fetchAll();  

        

    }

    static public function mdlCambiarEstados($nro_boleta){


        $stmt = Conexion::conectar()->prepare("UPDATE `compra_credito` SET `Estado`='1' WHERE `nro_boleta` = :nro_boleta;");

        $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);


        if($stmt -> execute()){
            $resultado = "ok";
        }else{
            $resultado = "error";
        }

        return $resultado;

    }

    static public function mdlCambiarEstados2($nro_boleta){


        $stmt = Conexion::conectar()->prepare("UPDATE `compra_credito` SET `Estado`='0' WHERE `nro_boleta` = :nro_boleta;");

        $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);


        if($stmt -> execute()){
            $resultado = "ok";
        }else{
            $resultado = "error";
        }

        return $resultado;

    }

    static public function mdlListarCotiza($nro_boleta){


        $stmt = Conexion::conectar()->prepare(" SELECT cc.id_compra_cotiza, cc.nro_boleta,ca.Proveedor, cc.fecha_cotiza , cc.monto FROM compra_cotiza cc INNER JOIN compra_cabecera ca 
                                                WHERE cc.nro_boleta = :nro_boleta and ca.nro_boleta = cc.nro_boleta;");

        $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);


        $stmt -> execute();
        
        return $stmt->fetchAll();  

    }

    static public function mdlListarFotos($nro_boleta){


        $stmt = Conexion::conectar()->prepare(" SELECT cf.id_compra_foto, cf.id_compra_credito, ca.Proveedor, cf.nro_boleta, cf.imagen, cf.fecha_foto FROM compra_foto cf INNER JOIN compra_cabecera ca 
                                                WHERE cf.nro_boleta = :nro_boleta and ca.nro_boleta = cf.nro_boleta;");

        $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);


        $stmt -> execute();
        
        return $stmt->fetchAll();  

    }

    static public function mdlRegistrarFotos($table, $data, $id, $nameId,$imagen){        

        $set = "";
        $set2 = "";

        $set .= $nameId.",";
        $set2 .= ":".$nameId.",";

        foreach ($data as $key => $value) {
            
            $set .= $key.",";
            $set2 .= ":".$key.",";
                
        }
        
        $set = substr($set, 0, -1);
        $set2 = substr($set2, 0, -1);
        
        
        //var_dump($set);

        $stmt = Conexion::conectar()->prepare("INSERT INTO $table ($set) values ($set2);");

        foreach ($data as $key => $value) {
            
            $stmt->bindParam(":".$key, $data[$key], PDO::PARAM_STR);
            
        }		

        $stmt->bindParam(":".$nameId, $id, PDO::PARAM_INT);

        if($stmt->execute()){

            //GUARDAMOS LA IMAGEN EN LA CARPETA
            if ($imagen) {
                $guardarImagen = new ComprasModelo();
                $guardarImagen->guardarImagen($imagen["folder"], $imagen["ubicacionTemporal"], $imagen["nuevoNombre"]);
                
            }
            return "ok";

        }else{

            return Conexion::conectar()->errorInfo();
        
        }

    }

    public function guardarImagen($folder, $ubicacionTemporal, $nuevoNombre)
    {
        file_put_contents(strtolower($folder . $nuevoNombre), file_get_contents($ubicacionTemporal));
    }

    static public function mdlDarNombreFoto($id_compra_foto){


        $stmt = Conexion::conectar()->prepare(" SELECT `id_compra_foto`, `id_compra_credito`, `nro_boleta`, `imagen`, `fecha_foto` FROM `compra_foto` WHERE `id_compra_foto`= :id_compra_foto ");

        $stmt -> bindParam(":id_compra_foto",$id_compra_foto,PDO::PARAM_STR);


        $stmt -> execute();
        
        return $stmt->fetchAll();  

    }

    static public function mdlEliminarFoto($id_compra_foto){


        $stmt = Conexion::conectar()->prepare(" DELETE FROM `compra_foto` WHERE `id_compra_foto` = :id_compra_foto ");

        $stmt -> bindParam(":id_compra_foto",$id_compra_foto,PDO::PARAM_STR);


        if($stmt -> execute()){
            $resultado = "ok";
        }else{
            $resultado = "error";
        }

        return $resultado;

    }

    static public function mdlAñadirCuota($nro_boleta,$fecha_cotiza,$monto,$detalles){


        $stmt = Conexion::conectar()->prepare(" INSERT INTO compra_cotiza( nro_boleta, monto, fecha_cotiza, detalles) VALUES ( :nro_boleta, :monto, :fecha_cotiza, :detalles) ");

        $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);
        $stmt -> bindParam(":fecha_cotiza",$fecha_cotiza,PDO::PARAM_STR);
        $stmt -> bindParam(":monto",$monto,PDO::PARAM_STR);
        $stmt -> bindParam(":detalles",$detalles,PDO::PARAM_STR);


        if($stmt -> execute()){
            $resultado = "ok";
        }else{
            $resultado = "error";
        }

        return $resultado;

    }

}

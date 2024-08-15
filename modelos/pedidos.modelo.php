<?php

    require_once "conexion.php";

    class PedidosModelo{
        
        static public function mdlDarListaPedidos(){

            $stmt = Conexion::conectar()->prepare("SELECT '' as opc, pe.nro_boleta, vc.Cliente, vc.fecha_venta, vc.total_venta, pe.hora_inicio, pe.hora_estimada, pe.hora_regreso, pe.Vuelto, pe.mensajero, vc.Estado, vc.deuda 
                                        FROM pedidos pe 
                                        INNER JOIN venta_cabecera vc ON vc.nro_boleta = pe.nro_boleta
                                        ORDER BY vc.fecha_venta DESC
                                        LIMIT 300;");
            $stmt->execute();

            return $stmt->fetchAll();
        }

        static public function mdlDarListarParaDeuda(){

            $stmt = Conexion::conectar()->prepare("SELECT '' as opc, pe.nro_boleta, vc.Cliente, vc.fecha_venta, vc.total_venta, pe.hora_inicio, pe.hora_estimada, pe.hora_regreso, pe.Vuelto, pe.mensajero, vc.Estado 
                                        FROM pedidos pe 
                                        INNER JOIN venta_cabecera vc ON vc.nro_boleta = pe.nro_boleta 
                                        WHERE vc.Estado < 3 AND vc.Estado > 0
                                        ORDER BY vc.fecha_venta DESC
                                        LIMIT 200;");
            $stmt->execute();

            return $stmt->fetchAll();
        }

        static public function mdlCambiarSalida($hora_inicio, $nro_boleta){

            $stmt = Conexion::conectar()->prepare(" UPDATE `pedidos` SET `hora_inicio`= :hora_inicio WHERE `nro_boleta` = :nro_boleta ");
            $stmt -> bindParam(":hora_inicio",$hora_inicio,PDO::PARAM_STR);
            $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);

            if ($stmt -> execute()){

                $stmt = Conexion::conectar()->prepare(" UPDATE `venta_cabecera` SET `Estado` = 2 WHERE `Estado` < 2 AND `nro_boleta` = :nro_boleta ");
                $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);

                if ($stmt -> execute()){
                    return "ok";
                }
            }
        }

        static public function mdlCambiarEstimado($hora_estimada, $nro_boleta){

            $stmt = Conexion::conectar()->prepare(" UPDATE `pedidos` SET `hora_estimada`= :hora_estimada WHERE `nro_boleta` = :nro_boleta ");
            $stmt -> bindParam(":hora_estimada",$hora_estimada,PDO::PARAM_STR);
            $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);

            if ($stmt -> execute()){

                $stmt = Conexion::conectar()->prepare(" UPDATE `venta_cabecera` SET `Estado` = 2 WHERE `Estado` < 2 AND `nro_boleta` = :nro_boleta ");
                $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);

                if ($stmt -> execute()){
                    return "ok";
                }
            }
        }

        static public function mdlCambiarRegreso($hora_regreso, $nro_boleta){

            $stmt = Conexion::conectar()->prepare(" UPDATE `pedidos` SET `hora_regreso`= :hora_regreso WHERE `nro_boleta` = :nro_boleta ");
            $stmt -> bindParam(":hora_regreso",$hora_regreso,PDO::PARAM_STR);
            $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);

            if ($stmt -> execute()){

                $stmt = Conexion::conectar()->prepare(" UPDATE `venta_cabecera` SET `Estado` = 2 WHERE `Estado` < 2 AND `nro_boleta` = :nro_boleta ");
                $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);

                if ($stmt -> execute()){
                    return "ok";
                }
            }
        }

        static public function mdlCambiarMensajero($mensajero, $nro_boleta){

            $stmt = Conexion::conectar()->prepare(" UPDATE `pedidos` SET `mensajero`=:mensajero WHERE `nro_boleta` = :nro_boleta ");
            $stmt -> bindParam(":mensajero",$mensajero,PDO::PARAM_STR);
            $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);

            if ($stmt -> execute()){

                $stmt = Conexion::conectar()->prepare(" UPDATE `venta_cabecera` SET `mensajero` = :mensajero WHERE `nro_boleta` = :nro_boleta ");
                $stmt -> bindParam(":mensajero",$mensajero,PDO::PARAM_STR);
                $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);

                if ($stmt -> execute()){

                    return "ok";
                    
                }
                
            }
        }

        static public function mdlCambiarVuelto($vuelto, $nro_boleta){

            $stmt = Conexion::conectar()->prepare(" UPDATE `pedidos` SET `Vuelto`=:vuelto WHERE `nro_boleta` = :nro_boleta ");
            $stmt -> bindParam(":vuelto",$vuelto,PDO::PARAM_STR);
            $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);

            if ($stmt -> execute()){

                $stmt = Conexion::conectar()->prepare(" UPDATE `venta_cabecera` SET `Vuelto`=:vuelto, `deuda` = 0  , Estado = 4 WHERE `nro_boleta` = :nro_boleta ");
                $stmt -> bindParam(":vuelto",$vuelto,PDO::PARAM_STR);
                $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);

                if ($stmt -> execute()){

                    return "ok";
                    
                }
                
            }
        }

        static public function mdlDarListaPedidosAlCredito(){

            $stmt = Conexion::conectar()->prepare(" SELECT '' as opc, pe.nro_boleta, vc.Cliente, vc.total_venta, vc.deuda, vc.Estado
                                                    FROM pedidos pe 
                                                    INNER JOIN venta_cabecera vc ON vc.nro_boleta = pe.nro_boleta 
                                                    WHERE vc.Estado > 2 
                                                    ORDER BY vc.fecha_venta DESC
                                                    LIMIT 200;");
            $stmt->execute();

            return $stmt->fetchAll();
        }

        static public function mdlAgregarPedidoCredito($nro_boleta,$empleado,$deuda,$monto,$hora_salida,$hora_regreso,$hora_estimado,$cuenta,$nueva_deuda,$puntos){

            $stmt = Conexion::conectar()->prepare(" INSERT INTO `pedidos_creditos`(`nro_boleta`, `empleado`, `deuda`, `monto`, `hora_salida`, `hora_regreso`, `hora_estimado`, `cuenta`, `puntos`) 
                                                    VALUES (:nro_boleta, :empleado, :deuda, :monto, :hora_salida, :hora_regreso, :hora_estimado, :cuenta, :puntos);");

            $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);
            $stmt -> bindParam(":empleado",$empleado,PDO::PARAM_STR);
            $stmt -> bindParam(":deuda",$deuda,PDO::PARAM_STR);
            $stmt -> bindParam(":monto",$monto,PDO::PARAM_STR);
            $stmt -> bindParam(":hora_salida",$hora_salida,PDO::PARAM_STR);
            $stmt -> bindParam(":hora_regreso",$hora_regreso,PDO::PARAM_STR);
            $stmt -> bindParam(":hora_estimado",$hora_estimado,PDO::PARAM_STR);
            $stmt -> bindParam(":cuenta",$cuenta,PDO::PARAM_STR);
            $stmt -> bindParam(":puntos",$puntos,PDO::PARAM_STR);

            if ($stmt->execute()) {
                
                $stmt = Conexion::conectar()->prepare("UPDATE `venta_cabecera` SET `deuda` = :nueva_deuda, `estado` = CASE WHEN :nueva_deuda = 0 THEN 4 ELSE `estado` END WHERE `nro_boleta` = :nro_boleta");
                $stmt->bindParam(":nueva_deuda", $nueva_deuda, PDO::PARAM_STR);
                $stmt->bindParam(":nro_boleta", $nro_boleta, PDO::PARAM_STR);
            
                if ($stmt->execute()) {
                    return "ok";
                }
            }
        }

        static public function mdlDarListarCreditos($nro_boleta){

            $stmt = Conexion::conectar()->prepare(" SELECT pc.id_credito, pc.nro_boleta, pc.empleado, pc.deuda, pc.monto, pc.hora_salida, pc.hora_regreso, pc.hora_estimado, pc.cuenta, vc.total_venta
                                                    FROM pedidos_creditos pc INNER JOIN venta_cabecera vc WHERE pc.nro_boleta = :nro_boleta AND pc.nro_boleta = vc.nro_boleta; ");

            $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchAll();
        }

        static public function mdlDarPuntajePedido($nro_boleta, $puntos){

            $stmt = Conexion::conectar()->prepare("UPDATE `pedidos` SET `puntos`= :puntos WHERE `nro_boleta` = :nro_boleta");

            $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);
            $stmt -> bindParam(":puntos",$puntos,PDO::PARAM_STR);

            if ($stmt->execute()) {
                return "ok";
            }
        }

    }
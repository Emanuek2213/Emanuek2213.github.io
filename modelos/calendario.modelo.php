<?php

require_once "conexion.php";

class CalendarioModelo{

    static public function mdlListarDeudas(){
        
        $stmt = Conexion::conectar()->prepare("SELECT '' as opc, d.id_deuda, d.Deudor, d.Monto, d.Deuda FROM deudas d WHERE 1");

        $stmt->execute();

        return $stmt->fetchAll();
    
    }

    static public function mdlListarAmortiguaciones(){
        
        $stmt = Conexion::conectar()->prepare("SELECT a.id_Amortiguacion, a.Monto, d.Deudor, a.Amotiguador, a.fecha_amortiguacion FROM amortiguaciones a INNER JOIN deudas d WHERE d.id_deuda = a.id_deuda"); 

        $stmt->execute();

        return $stmt->fetchAll();
    
    }

    static public function mdlRegistrarDeuda($Deudor,$Monto,$Deuda,$Estado,$fecha,$tipo_accion){
        
        $stmt = Conexion::conectar()->prepare("INSERT INTO deudas(Deudor, Monto, Deuda, Estado) VALUES (:Deudor, :Monto, :Deuda, :Estado)"); 

        $stmt -> bindParam(":Deudor", $Deudor , PDO::PARAM_STR);
        $stmt -> bindParam(":Monto", $Monto, PDO::PARAM_STR);
        $stmt -> bindParam(":Deuda", $Deuda , PDO::PARAM_STR);
        $stmt -> bindParam(":Estado", $Estado , PDO::PARAM_STR);

        if($stmt->execute()){

            $stmtId = Conexion::conectar()->prepare("SELECT id_deuda FROM deudas ORDER BY id_deuda DESC LIMIT 1;"); 

            $stmtId->execute();

            $ultimoId = $stmtId->fetch(PDO::FETCH_ASSOC);

            // Devolver el id_deuda más alto
            if ($ultimoId) {

                $id_accion = $ultimoId['id_deuda'];

                date_default_timezone_set('America/Lima');
                $horaActual = date('H:i:s');

                $fecha = $fecha . " " . $horaActual;
                
                $stmt = Conexion::conectar()->prepare("INSERT INTO calendario(id_accion, tipo_accion, fecha) VALUES (:id_accion, :tipo_accion, :fecha)"); 

                $stmt -> bindParam(":id_accion", $id_accion , PDO::PARAM_STR);
                $stmt -> bindParam(":tipo_accion", $tipo_accion, PDO::PARAM_STR);
                $stmt -> bindParam(":fecha", $fecha , PDO::PARAM_STR);

                if($stmt->execute()){

                    return "ok";

                }else{

                    return "error";
        
                }

            } else {
                // Manejo del caso cuando no se encuentra ningún registro en la tabla deudas.
            }

        }else{

            return "error";

        }
    
    }

    static public function mdlListarEventos(){
        
        $stmt = Conexion::conectar()->prepare("SELECT d.Deudor as nombre, `fecha` FROM `calendario` INNER JOIN deudas d  WHERE d.id_deuda = `id_accion`;"); 

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    
    }

}
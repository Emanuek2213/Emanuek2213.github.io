<?php

require_once "conexion.php";

class RegistroAgenteModelo{


    static public function mdlTablaRegistroAgente(){

        $stmt = Conexion::conectar()->prepare('call	prc_ListarUltimosMovimientos()');
        
        $stmt->execute();

        return $stmt->fetchAll();
    }

    static public function mdlTablaRegistroAgente_2(){

        $stmt = Conexion::conectar()->prepare('call	prc_ListarUltimosMovimientos2()');
        
        $stmt->execute();

        return $stmt->fetchAll();
    }

    static public function mdlTablaRegistroAgente_3($fecha_eleccion){

        $stmt = Conexion::conectar()->prepare('call	prc_ListarUltimosMovimientos3(:fecha_eleccion)');

        $stmt -> bindParam(":fecha_eleccion", $fecha_eleccion , PDO::PARAM_STR);
        
        $stmt->execute();

        return $stmt->fetchAll();
    }

    static public function mdlTablaEdicionesAgente($fecha_eleccion){

        $stmt = Conexion::conectar()->prepare('SELECT `id_edicion`, `id_cuenta`, `banco_antes`, `cuenta_antes`, `monto_antes`, `banco_despues`, `cuenta_despues`, `monto_despues`, `Usuario`, `hora_edicion` FROM `ediciones_cuentas` WHERE DATE(`hora_edicion`) = DATE(:fecha_eleccion);');

        $stmt -> bindParam(":fecha_eleccion", $fecha_eleccion , PDO::PARAM_STR);
        
        $stmt->execute();

        return $stmt->fetchAll();
    }

    static public function mdlTablaEdicionesAgenteHoy(){

        $stmt = Conexion::conectar()->prepare('SELECT `id_edicion`, `id_cuenta`, `banco_antes`, `cuenta_antes`, `monto_antes`, `banco_despues`, `cuenta_despues`, `monto_despues`, `Usuario`, `hora_edicion` FROM `ediciones_cuentas` WHERE DATE(`hora_edicion`) = DATE(NOW());');
        
        $stmt->execute();

        return $stmt->fetchAll();
    }


    static public function mdlSumaMovimiento(){

        $stmt2 = Conexion::conectar()->prepare('call prc_SumaMovimiento()');
        
        $stmt2->execute();
        

        return $stmt2->fetchAll(PDO::FETCH_OBJ);
    }

    static public function mdlRegistrarMovimiento($tipo, $monto, $comision, $Agente, $nombre,$cuenta,$codigo,$usuario){    
    

        try{

            $fecha_actual = date('Y-m-d H:i:s'); // Obtiene la fecha y hora actual
            $horas_a_disminuir = 6; // Cantidad de horas a disminuir

            $fecha_hora = date('Y-m-d H:i:s', strtotime($fecha_actual . ' - ' . $horas_a_disminuir . ' hours'));

            $stmt = Conexion::conectar()->prepare("INSERT INTO REGISTRO_AGENTE( tipo, 
                                                                                monto, 
                                                                                comision,
                                                                                Agente,
                                                                                cuenta,
                                                                                nombre,
                                                                                codigo,
                                                                                fecha_hora,
                                                                                Usuario) 
                                                                        VALUES (:tipo, 
                                                                                :monto, 
                                                                                :comision,
                                                                                :Agente,
                                                                                :cuenta,
                                                                                :nombre,
                                                                                :codigo,
                                                                                :fecha_hora,
                                                                                :Usuario)");      
                                                        
            $stmt -> bindParam(":tipo", $tipo , PDO::PARAM_STR);
            $stmt -> bindParam(":monto", $monto , PDO::PARAM_STR);
            $stmt -> bindParam(":comision", $comision , PDO::PARAM_STR);
            $stmt -> bindParam(":Agente", $Agente , PDO::PARAM_STR);
            $stmt -> bindParam(":cuenta", $cuenta , PDO::PARAM_STR);
            $stmt -> bindParam(":nombre", $nombre , PDO::PARAM_STR);
            $stmt -> bindParam(":codigo", $codigo , PDO::PARAM_STR);
            $stmt -> bindParam(":fecha_hora", $fecha_hora , PDO::PARAM_STR);
            $stmt -> bindParam(":Usuario", $usuario , PDO::PARAM_STR);
        
            if($stmt -> execute()){
                $resultado = "ok";
            }else{
                $resultado = "error";
            }  
        }catch (Exception $e) {
            $resultado = 'Excepción capturada: '.  $e->getMessage(). "\n";
        }
        
        return $resultado;

        $stmt = null;

    }


    static public function mdlSumaDinero(){    
            $stmt = Conexion::conectar()->prepare("call prc_SumaMovimientos()");         
            $stmt -> execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    static public function mdlCuentasCredito(){    
        $stmt = Conexion::conectar()->prepare("call prc_CuentasCreditoActual3()");         
        $stmt -> execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    static public function mdlSumaCredito(){    
        $stmt = Conexion::conectar()->prepare("call prc_SumaCredito()");         
        $stmt -> execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    /*=============================================
    Peticion DELETE para eliminar datos
    =============================================*/

    static public function mdlEliminarRegistro($table, $id, $nameId, $motivo){
        try {
            $conexion = Conexion::conectar();
            $conexion->beginTransaction();
    
            // Obtener los datos del registro a eliminar
            $stmtSelect = $conexion->prepare("SELECT * FROM $table WHERE $nameId = :id");
            $stmtSelect->bindParam(":id", $id, PDO::PARAM_STR);
            $stmtSelect->execute();
            $data = $stmtSelect->fetch(PDO::FETCH_ASSOC);
    
            if ($data) {
                // Insertar los datos en la tabla eliminacion_agente
                $stmtInsert = $conexion->prepare('INSERT INTO eliminacion_agente (codigo, monto, comision, tipo, Agente, cuenta, nombre, fecha_hora, Usuario, detalles) VALUES (:codigo, :monto, :comision, :tipo, :Agente, :cuenta, :nombre, :fecha_hora, :Usuario, :detalles)');

                $stmtInsert->bindParam(":codigo", $data['codigo'], PDO::PARAM_STR);
                $stmtInsert->bindParam(":monto", $data['monto'], PDO::PARAM_STR);
                $stmtInsert->bindParam(":comision", $data['comision'], PDO::PARAM_INT);
                $stmtInsert->bindParam(":tipo", $data['tipo'], PDO::PARAM_STR);
                $stmtInsert->bindParam(":Agente", $data['Agente'], PDO::PARAM_STR);
                $stmtInsert->bindParam(":cuenta", $data['cuenta'], PDO::PARAM_STR);
                $stmtInsert->bindParam(":nombre", $data['nombre'], PDO::PARAM_STR);
                $stmtInsert->bindParam(":fecha_hora", $data['fecha_hora'], PDO::PARAM_STR);
                $stmtInsert->bindParam(":Usuario", $data['Usuario'], PDO::PARAM_STR);
                $stmtInsert->bindParam(":detalles", $motivo, PDO::PARAM_STR);
                $stmtInsert->execute();
    
                // Eliminar el registro original
                $stmtDelete = $conexion->prepare("DELETE FROM $table WHERE $nameId = :id");
                $stmtDelete->bindParam(":id", $id, PDO::PARAM_STR);
    
                if($stmtDelete->execute()){
                    $conexion->commit();
                    return "ok";
                } else {
                    $conexion->rollBack();
                    return $conexion->errorInfo();
                }
            } else {
                $conexion->rollBack();
                return "Registro no encontrado";
            }
        } catch (Exception $e) {
            $conexion->rollBack();
            return "Error: " . $e->getMessage();
        }
    }
    
     /*=============================================
    Peticion para mostrar las Transferencias
    =============================================*/
    static public function mdlTablaRegistroTransferencia(){

        $stmt = Conexion::conectar()->prepare('call	prc_mostrarTransferencias()');
        
        $stmt->execute();

        return $stmt->fetchAll();
    }

    /*=============================================
    Peticion DELETE para eliminar transferencia
    =============================================*/

    static public function mdlEliminarTransferencia($table, $id, $nameId){

        $stmt = Conexion::conectar()->prepare("DELETE FROM $table WHERE $nameId = :id");

        $stmt -> bindParam(":id", $id, PDO::PARAM_STR);

        if($stmt -> execute()){

            $stmt2 = Conexion::conectar()->prepare('call prc_vincularTransferencia()');
        
            $stmt2->execute();

            return "ok";;
        
        }else{

            return Conexion::conectar()->errorInfo();

        }

    }
    
    static public function mdlRegistrarTransferencia($AgenteD, $CuentaD, $AgenteR, $CuentaR, $Transferencia, $Descripcion){
        try{
            $fecha_actual = date('Y-m-d H:i:s'); // Obtiene la fecha y hora actual
            $horas_a_disminuir = 6; // Cantidad de horas a disminuir

            $fecha_hora = date('Y-m-d H:i:s', strtotime($fecha_actual . ' - ' . $horas_a_disminuir . ' hours'));
            
            $id = 0;

            $stmt = Conexion::conectar()->prepare("INSERT INTO REGISTRO_TRANSFERENCIA(
                                                                                id, 
                                                                                AgenteD, 
                                                                                CuentaD, 
                                                                                AgenteR, 
                                                                                CuentaR, 
                                                                                Transferencia,
                                                                                Descripcion,
                                                                                fecha_hora) 
                                                                        VALUES (    
                                                                                :id ,
                                                                                :AgenteD, 
                                                                                :CuentaD, 
                                                                                :AgenteR, 
                                                                                :CuentaR, 
                                                                                :Transferencia,
                                                                                :Descripcion,
                                                                                :fecha_hora)");      
                                                        
            $stmt -> bindParam(":AgenteD", $AgenteD , PDO::PARAM_STR);
            $stmt -> bindParam(":CuentaD",  $CuentaD , PDO::PARAM_STR);
            $stmt -> bindParam(":AgenteR", $AgenteR , PDO::PARAM_STR);
            $stmt -> bindParam(":CuentaR", $CuentaR , PDO::PARAM_STR);
            $stmt -> bindParam(":Transferencia", $Transferencia , PDO::PARAM_STR);
            $stmt -> bindParam(":Descripcion", $Descripcion , PDO::PARAM_STR);
            $stmt -> bindParam(":fecha_hora", $fecha_hora , PDO::PARAM_STR);
            $stmt -> bindParam(":id", $id , PDO::PARAM_INT);
        
            if($stmt -> execute()){
                $stmt2 = Conexion::conectar()->prepare('call prc_vincularTransferencia()');
        
                $stmt2->execute();
                $resultado = "ok";
            }else{
                $resultado = "error";
            }  
        }catch (Exception $e) {
            $resultado = 'Excepción capturada: '.  $e->getMessage(). "\n";
        }
        
        return $resultado;

        $stmt = null;

    }

    static public function mdlTotalComision(){    
        $stmt = Conexion::conectar()->prepare("call prc_SumarComision()");         
        $stmt -> execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }


    static public function mdlCambiarCredito($agente, $credito, $cuenta){
        try{
            

            $stmt = Conexion::conectar()->prepare("UPDATE credito_cuentas
                                                    SET Credito = :credito
                                                    WHERE Agente = :agente AND Nombre = :cuenta");      
                                                        
            $stmt -> bindParam(":agente", $agente , PDO::PARAM_STR);
            $stmt -> bindParam(":credito",  $credito , PDO::PARAM_STR);
            $stmt -> bindParam(":cuenta", $cuenta , PDO::PARAM_STR);
        
            if($stmt -> execute()){
                $resultado = "ok";
            }else{
                $resultado = "error";
            }  
        }catch (Exception $e) {
            $resultado = 'Excepción capturada: '.  $e->getMessage(). "\n";
        }
        
        return $resultado;

        $stmt = null;

    }

    static public function mdlTotalComisionHoy(){    
        $stmt = Conexion::conectar()->prepare("call prc_SumarComisionHoy()");         
        $stmt -> execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    static public function mdlAgregarCuenta($agente, $cuenta, $monto){    
        $stmt = Conexion::conectar()->prepare("INSERT INTO `credito_cuentas`(`id`, `Agente`, `Nombre`, `Credito`, `TRANSF_POS`, `TRANSF_NEG`) 
                                                            VALUES ('',:agente, :cuenta ,:monto,'','')");
        
        
        $stmt -> bindParam(":agente", $agente , PDO::PARAM_STR);
        $stmt -> bindParam(":monto",  $monto , PDO::PARAM_STR);
        $stmt -> bindParam(":cuenta", $cuenta , PDO::PARAM_STR);

        if($stmt -> execute()){
            return "ok";
        }else{
            return "error";
        }
        
    }

    static public function mdlMovimentosHoy(){    
        $stmt = Conexion::conectar()->prepare(" SELECT 
                                                    ROW_NUMBER() OVER (ORDER BY fecha_hora) AS contador,
                                                    codigo,
                                                    monto,
                                                    comision,
                                                    tipo,
                                                    Agente,
                                                    cuenta,
                                                    nombre,
                                                    fecha_hora,
                                                    Usuario
                                                FROM 
                                                    registro_agente
                                                WHERE 
                                                    fecha_hora >= CURDATE() 
                                                    AND fecha_hora < CURDATE() + INTERVAL 1 DAY;
                                                ");         
        $stmt -> execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    static public function mdlListarPrestamos(){    
        $stmt = Conexion::conectar()->prepare("SELECT '' as opc, `id`, `banco`, `agente`, `monto`, `estado`, `persona` FROM `prestamos`");         
        $stmt -> execute();
        return $stmt->fetchAll();
    }

    static public function mdlListarAgentes(){    
        $stmt = Conexion::conectar()->prepare(' SELECT "" as opc,
                                                    cc.Agente,
                                                    (SELECT COUNT(*) FROM credito_cuentas WHERE Agente = cc.Agente) as cuentas,
                                                    SUM(cc.Credito) AS Total_Credito,
                                                    SUM(cc.TRANSF_POS) AS Total_TRANSF_POS,
                                                    SUM(cc.TRANSF_NEG) AS Total_TRANSF_NEG,
                                                    COALESCE(ROUND((SELECT SUM(ra.monto) FROM registro_agente ra WHERE ra.tipo = "Retiro" AND ra.Agente = cc.Agente), 2), 0) AS monto_retiro,
                                                    COALESCE(ROUND((SELECT SUM(ra.monto) FROM registro_agente ra WHERE ra.tipo = "Deposito" AND ra.Agente = cc.Agente), 2), 0) AS monto_deposito,
                                                    (SUM(cc.Credito) + SUM(cc.TRANSF_POS) - SUM(cc.TRANSF_NEG) + COALESCE(ROUND((SELECT SUM(ra.monto) FROM registro_agente ra WHERE ra.tipo = "Retiro" AND ra.Agente = cc.Agente), 2), 0) - COALESCE(ROUND((SELECT SUM(ra.monto) FROM registro_agente ra WHERE ra.tipo = "Deposito" AND ra.Agente = cc.Agente), 2), 0)) AS Calculo_Final
                                                FROM 
                                                    credito_cuentas cc
                                                GROUP BY 
                                                    cc.Agente;');         
        $stmt -> execute();
        return $stmt->fetchAll();
    }

    // static public function mdlListarAgentes_solo(){    
    //     $stmt = Conexion::conectar()->prepare(" SELECT 
    //                                             '' AS opc,
    //                                             cc.Agente,
    //                                             (SELECT COUNT(*) FROM credito_cuentas WHERE Agente = cc.Agente) AS cuentas,
    //                                             SUM(cc.Credito) AS Total_Credito,
    //                                             SUM(cc.TRANSF_POS) AS Total_TRANSF_POS,
    //                                             SUM(cc.TRANSF_NEG) AS Total_TRANSF_NEG,
    //                                             COALESCE(
    //                                                 ROUND(
    //                                                     (SELECT SUM(ra.monto)
    //                                                         FROM registro_agente ra
    //                                                         WHERE ra.tipo IN ('Retiro', 'Yape', 'pago de servicios')
    //                                                         AND ra.Agente = cc.Agente
    //                                                         AND EXISTS (
    //                                                             SELECT 1
    //                                                             FROM credito_cuentas cc2
    //                                                             WHERE cc2.Agente = cc.Agente
    //                                                             AND cc2.Nombre = ra.cuenta)
    //                                                     ), 2), 0) AS monto_retiro,
    //                                             COALESCE(
    //                                                 ROUND(
    //                                                     (SELECT SUM(ra.monto)
    //                                                         FROM registro_agente ra
    //                                                         WHERE ra.tipo IN ('Deposito')
    //                                                         AND ra.Agente = cc.Agente
    //                                                         AND EXISTS (
    //                                                             SELECT 1
    //                                                             FROM credito_cuentas cc2
    //                                                             WHERE cc2.Agente = cc.Agente
    //                                                             AND cc2.Nombre = ra.cuenta)
    //                                                     ), 2), 0) AS monto_deposito,
    //                                             CASE
    //                                                 WHEN cc.Agente = 'EFECTIVOBILLETES' AND cc.Nombre = 'Agente' THEN 
    //                                                     ROUND(
    //                                                         cc.Credito - 
    //                                                         COALESCE(
    //                                                             ROUND(
    //                                                                 (SELECT SUM(ra.monto)
    //                                                                 FROM registro_agente ra
    //                                                                 WHERE ra.tipo IN ('Retiro', 'Yape', 'pago de servicios')
    //                                                                 AND ra.Agente = cc.Agente
    //                                                                 AND EXISTS (
    //                                                                     SELECT 1
    //                                                                     FROM credito_cuentas cc2)
    //                                                                 ), 2), 0) + 
    //                                                         COALESCE(
    //                                                             ROUND(
    //                                                                 (SELECT SUM(ra.monto)
    //                                                                 FROM registro_agente ra
    //                                                                 WHERE ra.tipo IN ('Deposito')
    //                                                                 AND ra.Agente = cc.Agente
    //                                                                 AND EXISTS (
    //                                                                     SELECT 1
    //                                                                     FROM credito_cuentas cc2)
    //                                                                 ), 2), 0) - 
    //                                                         COALESCE(cc.TRANSF_POS, 0) - 
    //                                                         COALESCE(cc.TRANSF_NEG, 0), 2)
    //                                                 ELSE
    //                                                     SUM(cc.Credito) + SUM(cc.TRANSF_POS) - SUM(cc.TRANSF_NEG) +
    //                                                     COALESCE(
    //                                                         ROUND(
    //                                                             (SELECT SUM(ra.monto)
    //                                                             FROM registro_agente ra
    //                                                             WHERE ra.tipo IN ('Retiro', 'Yape', 'pago de servicios')
    //                                                             AND ra.Agente = cc.Agente
    //                                                             AND EXISTS (
    //                                                                 SELECT 1
    //                                                                 FROM credito_cuentas cc2
    //                                                                 WHERE cc2.Agente = cc.Agente
    //                                                                 AND cc2.Nombre = ra.cuenta)
    //                                                             ), 2), 0) -
    //                                                     COALESCE(
    //                                                         ROUND(
    //                                                             (SELECT SUM(ra.monto)
    //                                                             FROM registro_agente ra
    //                                                             WHERE ra.tipo IN ('Deposito')
    //                                                             AND ra.Agente = cc.Agente
    //                                                             AND EXISTS (
    //                                                                 SELECT 1
    //                                                                 FROM credito_cuentas cc2
    //                                                                 WHERE cc2.Agente = cc.Agente
    //                                                                 AND cc2.Nombre = ra.cuenta)
    //                                                             ), 2), 0)
    //                                             END AS Calculo_Final
    //                                         FROM 
    //                                             credito_cuentas cc
    //                                         LEFT JOIN 
    //                                             (SELECT Agente,
    //                                                     SUM(CASE WHEN ra.tipo = 'Deposito' THEN ra.monto ELSE 0 END) AS TotalDepositos,
    //                                                     SUM(CASE WHEN ra.tipo = 'Retiro' THEN ra.monto ELSE 0 END) AS TotalRetiros,
    //                                                     SUM(CASE WHEN ra.tipo = 'Yape' THEN ra.monto ELSE 0 END) AS TotalYape,
    //                                                     SUM(CASE WHEN ra.tipo = 'pago de servicios' THEN ra.monto ELSE 0 END) AS TotalServicios
    //                                             FROM registro_agente ra
    //                                             GROUP BY Agente) total
    //                                         ON cc.Agente = total.Agente
    //                                         WHERE 
    //                                             cc.Agente != 'EFECTIVO'
    //                                         GROUP BY 
    //                                             cc.Agente;");         
    //     $stmt -> execute();
    //     return $stmt->fetchAll();
    // }

    static public function mdlListarAgentes_solo(){    
        $stmt = Conexion::conectar()->prepare(" SELECT 
                                                '' AS opc,
                                                cc.Agente,
                                                (SELECT COUNT(*) FROM credito_cuentas WHERE Agente = cc.Agente) AS cuentas,
                                                SUM(cc.Credito) AS Total_Credito,
                                                SUM(cc.TRANSF_POS) AS Total_TRANSF_POS,
                                                SUM(cc.TRANSF_NEG) AS Total_TRANSF_NEG,
                                                COALESCE(
                                                    ROUND(
                                                        (SELECT SUM(ra.monto)
                                                            FROM registro_agente ra
                                                            WHERE ra.tipo IN ('Retiro', 'Yape', 'pago de servicios')
                                                            AND ra.Agente = cc.Agente
                                                            AND EXISTS (
                                                                SELECT 1
                                                                FROM credito_cuentas cc2
                                                                WHERE cc2.Agente = cc.Agente
                                                                AND cc2.Nombre = ra.cuenta)
                                                        ), 2), 0) AS monto_retiro,
                                                COALESCE(
                                                    ROUND(
                                                        (SELECT SUM(ra.monto)
                                                            FROM registro_agente ra
                                                            WHERE ra.tipo IN ('Deposito')
                                                            AND ra.Agente = cc.Agente
                                                            AND EXISTS (
                                                                SELECT 1
                                                                FROM credito_cuentas cc2
                                                                WHERE cc2.Agente = cc.Agente
                                                                AND cc2.Nombre = ra.cuenta)
                                                        ), 2), 0) AS monto_deposito,
                                                CASE
                                                    WHEN (cc.Agente LIKE 'EFECTIVOBILLETES' OR cc.Agente LIKE 'EFECTIVO BILLETES') AND cc.Nombre = 'Agente' THEN 
                                                        ROUND(
                                                            cc.Credito - 
                                                            COALESCE(
                                                                ROUND(
                                                                    (SELECT SUM(ra.monto)
                                                                    FROM registro_agente ra
                                                                    WHERE ra.tipo IN ('Retiro', 'Yape', 'pago de servicios')
                                                                    
                                                                    AND EXISTS (
                                                                        SELECT 1
                                                                        FROM credito_cuentas cc2)
                                                                    ), 2), 0) + 
                                                            COALESCE(
                                                                ROUND(
                                                                    (SELECT SUM(ra.monto)
                                                                    FROM registro_agente ra
                                                                    WHERE ra.tipo IN ('Deposito')
                                                                    
                                                                    AND EXISTS (
                                                                        SELECT 1
                                                                        FROM credito_cuentas cc2)
                                                                    ), 2), 0) + 
                                                            COALESCE(cc.TRANSF_POS, 0) - 
                                                            COALESCE(cc.TRANSF_NEG, 0), 2)
                                                    ELSE
                                                        SUM(cc.Credito) + SUM(cc.TRANSF_POS) - SUM(cc.TRANSF_NEG) +
                                                        COALESCE(
                                                            ROUND(
                                                                (SELECT SUM(ra.monto)
                                                                FROM registro_agente ra
                                                                WHERE ra.tipo IN ('Retiro', 'Yape', 'pago de servicios')
                                                                AND ra.Agente = cc.Agente
                                                                AND EXISTS (
                                                                    SELECT 1
                                                                    FROM credito_cuentas cc2
                                                                    WHERE cc2.Agente = cc.Agente
                                                                    AND cc2.Nombre = ra.cuenta)
                                                                ), 2), 0) -
                                                        COALESCE(
                                                            ROUND(
                                                                (SELECT SUM(ra.monto)
                                                                FROM registro_agente ra
                                                                WHERE ra.tipo IN ('Deposito')
                                                                AND ra.Agente = cc.Agente
                                                                AND EXISTS (
                                                                    SELECT 1
                                                                    FROM credito_cuentas cc2
                                                                    WHERE cc2.Agente = cc.Agente
                                                                    AND cc2.Nombre = ra.cuenta)
                                                                ), 2), 0)
                                                END AS Calculo_Final
                                            FROM 
                                                credito_cuentas cc
                                            LEFT JOIN 
                                                (SELECT Agente,
                                                        SUM(CASE WHEN ra.tipo = 'Deposito' THEN ra.monto ELSE 0 END) AS TotalDepositos,
                                                        SUM(CASE WHEN ra.tipo = 'Retiro' THEN ra.monto ELSE 0 END) AS TotalRetiros,
                                                        SUM(CASE WHEN ra.tipo = 'Yape' THEN ra.monto ELSE 0 END) AS TotalYape,
                                                        SUM(CASE WHEN ra.tipo = 'pago de servicios' THEN ra.monto ELSE 0 END) AS TotalServicios
                                                FROM registro_agente ra
                                                GROUP BY Agente) total
                                            ON cc.Agente = total.Agente
                                            WHERE 
                                                cc.Agente != 'EFECTIVO'
                                            GROUP BY 
                                                cc.Agente;");         
        $stmt -> execute();
        return $stmt->fetchAll();
    }

    static public function mdlListarCuentasxAgente($idAgente){    
        $stmt = Conexion::conectar()->prepare(' SELECT "" as opc,
                                                    c2.id, 
                                                    c2.Agente, 
                                                    c2.Nombre, 
                                                    c2.Credito, 
                                                    c2.TRANSF_POS, 
                                                    c2.TRANSF_NEG,
                                                    COALESCE(ROUND((SELECT SUM(ra.monto) FROM registro_agente ra WHERE ra.tipo IN ("Retiro",  "Yape" , "pago de servicios")  AND c2.Nombre = ra.cuenta AND ra.Agente = c2.Agente), 2), 0) AS monto_retiro,
                                                    COALESCE(ROUND((SELECT SUM(ra.monto) FROM registro_agente ra WHERE ra.tipo = "Deposito" AND c2.Nombre = ra.cuenta AND ra.Agente = c2.Agente), 2), 0) AS monto_deposito,
                                                    CASE
                                                    WHEN (c2.Agente LIKE "EFECTIVOBILLETES" OR c2.Agente LIKE "EFECTIVO BILLETES") AND c2.Nombre = "Agente" THEN 
                                                        ROUND(
                                                            c2.Credito - 
                                                            COALESCE(
                                                                ROUND(
                                                                    (SELECT SUM(ra.monto)
                                                                    FROM registro_agente ra
                                                                    WHERE ra.tipo IN ("Retiro", "Yape", "pago de servicios")
                                                                    
                                                                    AND EXISTS (
                                                                        SELECT 1
                                                                        FROM credito_cuentas c2)
                                                                    ), 2), 0) + 
                                                            COALESCE(
                                                                ROUND(
                                                                    (SELECT SUM(ra.monto)
                                                                    FROM registro_agente ra
                                                                    WHERE ra.tipo IN ("Deposito")
                                                                    
                                                                    AND EXISTS (
                                                                        SELECT 1
                                                                        FROM credito_cuentas c2)
                                                                    ), 2), 0) + 
                                                            COALESCE(c2.TRANSF_POS, 0) - 
                                                            COALESCE(c2.TRANSF_NEG, 0), 2)
                                                    ELSE
                                                    (c2.Credito + c2.TRANSF_POS - c2.TRANSF_NEG + COALESCE(ROUND((SELECT SUM(ra.monto) FROM registro_agente ra WHERE ra.tipo IN ("Retiro",  "Yape" , "pago de servicios")  AND c2.Nombre = ra.cuenta AND ra.Agente = c2.Agente), 2), 0) - COALESCE(ROUND((SELECT SUM(ra.monto) FROM registro_agente ra WHERE ra.tipo = "Deposito" AND c2.Nombre = ra.cuenta AND ra.Agente = c2.Agente), 2), 0)) 
                                                    END AS Calculo_Final
                                                FROM 
                                                    credito_cuentas c2
                                                WHERE 
                                                    c2.Agente = :idAgente ;'); 
                                                    
        $stmt -> bindParam(":idAgente", $idAgente , PDO::PARAM_STR);
        $stmt -> execute();
        return $stmt->fetchAll();
    }

    static public function mdlGuardarPrestamo($persona,$solicitado,$movimiento,$banco,$agente){
        
        
        // Consulta para obtener el nuevo valor de id
        $stmt = Conexion::conectar()->prepare("SELECT COALESCE(MAX(`id`), 0) + 1 AS nuevo_id FROM `prestamos`");
        $stmt->execute();
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        $nuevo_id = $resultado['nuevo_id'];


        $stmt = Conexion::conectar()->prepare("INSERT INTO `prestamos` (`id`, `banco`, `agente`, `monto`, `estado`, `persona`)
                                                VALUES (:nuevo_id, :banco, :agente, :solicitado, :movimiento, :persona);");         
        
        $stmt->bindParam(":nuevo_id", $nuevo_id, PDO::PARAM_INT);
        $stmt -> bindParam(":persona", $persona , PDO::PARAM_STR);
        $stmt -> bindParam(":solicitado",  $solicitado , PDO::PARAM_STR);
        $stmt -> bindParam(":movimiento", $movimiento , PDO::PARAM_STR);
        $stmt -> bindParam(":banco",  $banco , PDO::PARAM_STR);
        $stmt -> bindParam(":agente", $agente , PDO::PARAM_STR);
    
        if($stmt -> execute()){
            
            if($movimiento === "Prestamo"){

                $stmt = Conexion::conectar()->prepare("UPDATE `credito_cuentas` SET `TRANSF_NEG`=`TRANSF_NEG`  + :solicitado WHERE `Agente`= :banco AND  `Nombre` = :agente");         
        
                $stmt -> bindParam(":solicitado",  $solicitado , PDO::PARAM_STR);
                $stmt -> bindParam(":banco",  $banco , PDO::PARAM_STR);
                $stmt -> bindParam(":agente", $agente , PDO::PARAM_STR);

            }else if($movimiento === "Deuda"){

                $stmt = Conexion::conectar()->prepare("UPDATE `credito_cuentas` SET `TRANSF_POS`= `TRANSF_POS` + :solicitado WHERE `Agente`= :banco AND  `Nombre` = :agente");         
        
                $stmt -> bindParam(":solicitado",  $solicitado , PDO::PARAM_STR);
                $stmt -> bindParam(":banco",  $banco , PDO::PARAM_STR);
                $stmt -> bindParam(":agente", $agente , PDO::PARAM_STR);

            }


            if($stmt -> execute()){
                return "ok";
            }else{
                return "error";
            }

        }else{
            return "error";
        }
    }

    static public function mdlTrasferenciasHoy(){    
        $stmt = Conexion::conectar()->prepare("SELECT 
                                                    ROW_NUMBER() OVER (ORDER BY fecha_hora) AS contador,
                                                    AgenteD,
                                                    CuentaD,
                                                    AgenteR,
                                                    CuentaR,
                                                    Transferencia,
                                                    Descripcion,
                                                    fecha_hora
                                                FROM 
                                                    registro_transferencia
                                                WHERE 
                                                    fecha_hora >= CURDATE() 
                                                    AND fecha_hora < CURDATE() + INTERVAL 1 DAY;");         
        $stmt -> execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }


    static public function mdlListadoAcciones(){    
        $stmt = Conexion::conectar()->prepare("SELECT '' as opc , `Nombre`, `Descripcion` FROM `acciones_agente` WHERE `id_acciones` < 4;");         
        $stmt -> execute();
        return $stmt->fetchAll();
    }

    static public function mdlListadoMontos(){    
        $stmt = Conexion::conectar()->prepare("SELECT `Nombre`, `Descripcion` FROM `acciones_agente` WHERE `id_acciones` > 3 ORDER BY id_acciones asc;");         
        $stmt -> execute();
        return $stmt->fetchAll();
    }

    static public function mdlRegistrarRetiro($codigo,$monto,$comision,$tipo,$Agente,$cuenta,$nombre,$usuario,$detalles){    
        $stmt = Conexion::conectar()->prepare('INSERT INTO `registro_agente`(`codigo`, `monto`, `comision`, `tipo`, `Agente`, `cuenta`, `nombre`, `Usuario`, `detalles`) 
                                                VALUES (:codigo, :monto , :comision , :tipo , :Agente , :cuenta , :nombre , :usuario , :detalles )'); 
                                                    
        $stmt -> bindParam(":codigo", $codigo , PDO::PARAM_STR);
        $stmt -> bindParam(":monto", $monto , PDO::PARAM_STR);
        $stmt -> bindParam(":comision", $comision , PDO::PARAM_STR);
        $stmt -> bindParam(":tipo", $tipo , PDO::PARAM_STR);
        $stmt -> bindParam(":Agente", $Agente , PDO::PARAM_STR);
        $stmt -> bindParam(":cuenta", $cuenta , PDO::PARAM_STR);
        $stmt -> bindParam(":nombre", $nombre , PDO::PARAM_STR);
        $stmt -> bindParam(":usuario", $usuario , PDO::PARAM_STR);
        $stmt -> bindParam(":detalles", $detalles , PDO::PARAM_STR);

        if($stmt -> execute()){
            return "ok";
        }else{
            return "error";
        }
    }

    static public function mdlRegistrarDeposito($codigo,$monto,$comision,$tipo,$Agente,$cuenta,$nombre,$usuario,$detalles){    
        $stmt = Conexion::conectar()->prepare('INSERT INTO `registro_agente`(`codigo`, `monto`, `comision`, `tipo`, `Agente`, `cuenta`, `nombre`, `Usuario`, `detalles`) 
                                                VALUES (:codigo, :monto , :comision , :tipo , :Agente , :cuenta , :nombre , :usuario , :detalles )'); 
                                                    
        $stmt -> bindParam(":codigo", $codigo , PDO::PARAM_STR);
        $stmt -> bindParam(":monto", $monto , PDO::PARAM_STR);
        $stmt -> bindParam(":comision", $comision , PDO::PARAM_STR);
        $stmt -> bindParam(":tipo", $tipo , PDO::PARAM_STR);
        $stmt -> bindParam(":Agente", $Agente , PDO::PARAM_STR);
        $stmt -> bindParam(":cuenta", $cuenta , PDO::PARAM_STR);
        $stmt -> bindParam(":nombre", $nombre , PDO::PARAM_STR);
        $stmt -> bindParam(":usuario", $usuario , PDO::PARAM_STR);
        $stmt -> bindParam(":detalles", $detalles , PDO::PARAM_STR);

        if($stmt -> execute()){
            return "ok";
        }else{
            return "error";
        }
    }

    static public function mdlRegistrarServicio($codigo,$monto,$comision,$tipo,$Agente,$cuenta,$nombre,$usuario,$detalles){    
        $stmt = Conexion::conectar()->prepare('INSERT INTO `registro_agente`(`codigo`, `monto`, `comision`, `tipo`, `Agente`, `cuenta`, `nombre`, `Usuario`, `detalles`) 
                                                VALUES (:codigo, :monto , :comision , :tipo , :Agente , :cuenta , :nombre , :usuario , :detalles )'); 
                                                    
        $stmt -> bindParam(":codigo", $codigo , PDO::PARAM_STR);
        $stmt -> bindParam(":monto", $monto , PDO::PARAM_STR);
        $stmt -> bindParam(":comision", $comision , PDO::PARAM_STR);
        $stmt -> bindParam(":tipo", $tipo , PDO::PARAM_STR);
        $stmt -> bindParam(":Agente", $Agente , PDO::PARAM_STR);
        $stmt -> bindParam(":cuenta", $cuenta , PDO::PARAM_STR);
        $stmt -> bindParam(":nombre", $nombre , PDO::PARAM_STR);
        $stmt -> bindParam(":usuario", $usuario , PDO::PARAM_STR);
        $stmt -> bindParam(":detalles", $detalles , PDO::PARAM_STR);

        if($stmt -> execute()){
            return "ok";
        }else{
            return "error";
        }
    }

    static public function mdlListarCuentasxAgentexNumero($idAgente){    
        $stmt = Conexion::conectar()->prepare(' SELECT "" as opc,
                                                    c2.id, 
                                                    c2.Agente, 
                                                    c2.Nombre, 
                                                    c2.Credito, 
                                                    c2.TRANSF_POS, 
                                                    c2.TRANSF_NEG,
                                                    COALESCE(ROUND((SELECT SUM(ra.monto) FROM registro_agente ra WHERE ra.tipo = "Retiro" AND c2.Nombre = ra.cuenta AND ra.Agente = c2.Agente), 2), 0) AS monto_retiro,
                                                    COALESCE(ROUND((SELECT SUM(ra.monto) FROM registro_agente ra WHERE ra.tipo = "Deposito" AND c2.Nombre = ra.cuenta AND ra.Agente = c2.Agente), 2), 0) AS monto_deposito,
                                                    (c2.Credito + c2.TRANSF_POS - c2.TRANSF_NEG + COALESCE(ROUND((SELECT SUM(ra.monto) FROM registro_agente ra WHERE ra.tipo = "Retiro" AND c2.Nombre = ra.cuenta AND ra.Agente = c2.Agente), 2), 0) - COALESCE(ROUND((SELECT SUM(ra.monto) FROM registro_agente ra WHERE ra.tipo = "Deposito" AND c2.Nombre = ra.cuenta AND ra.Agente = c2.Agente), 2), 0)) AS Calculo_Final
                                                FROM 
                                                    credito_cuentas c2
                                                WHERE 
                                                    c2.Agente = :idAgente ;'); 
                                                    
        $stmt -> bindParam(":idAgente", $idAgente , PDO::PARAM_STR);
        $stmt -> execute();
        return $stmt->fetchAll();
    }

    static public function mdlListadoEdicionCuenta(){    
        $stmt = Conexion::conectar()->prepare("SELECT  `Descripcion`, `Edicion` FROM `edicion_agente` WHERE 1 "  );
        $stmt -> execute();
        return $stmt->fetchAll();
    }

    static public function mdlIngresarNuevosCuentas($Agente,$Nombre,$Credito){    
        try {
            $conn = Conexion::conectar();
            
            // Verificar si ya existe una cuenta con el mismo nombre para el agente
            $checkStmt = $conn->prepare('SELECT COUNT(*) FROM `credito_cuentas` WHERE `Agente` = :Agente AND `Nombre` = :Nombre');
            $checkStmt->bindParam(":Agente", $Agente, PDO::PARAM_STR);
            $checkStmt->bindParam(":Nombre", $Nombre, PDO::PARAM_STR);
            $checkStmt->execute();
    
            if ($checkStmt->fetchColumn() > 0) {
                return "duplicado";
            }
            
            // Insertar la nueva cuenta si no existe duplicado
            $stmt = $conn->prepare('INSERT INTO `credito_cuentas`(`Agente`, `Nombre`, `Credito`, `TRANSF_POS`, `TRANSF_NEG`) VALUES (:Agente, :Nombre, :Credito, 0, 0)');
            $stmt->bindParam(":Agente", $Agente, PDO::PARAM_STR);
            $stmt->bindParam(":Credito", $Credito, PDO::PARAM_STR);
            $stmt->bindParam(":Nombre", $Nombre, PDO::PARAM_STR);
    
            if($stmt->execute()){
                return "ok";
            } else {
                return "error";
            }
        } catch (PDOException $e) {
            return "error: " . $e->getMessage();
        }
    }

    static public function mdlEliminarCuenta($Agente,$Nombre,$id){    
        try {
            $conn = Conexion::conectar();
            // Insertar la nueva cuenta si no existe duplicado
            $stmt = $conn->prepare('DELETE FROM `credito_cuentas` WHERE `id` = :id');
            $stmt->bindParam(":id", $id, PDO::PARAM_STR);
    
            if($stmt->execute()){
                $stmt = $conn->prepare('DELETE FROM `registro_agente` WHERE `Agente` = :Agente AND `cuenta` = :Nombre');
                $stmt->bindParam(":Agente", $Agente, PDO::PARAM_STR);
                $stmt->bindParam(":Nombre", $Nombre, PDO::PARAM_STR);

                if($stmt->execute()){
                    return "ok";
                } else {
                    return "error";
                }

            } else {
                return "error";
            }
        } catch (PDOException $e) {
            return "error: " . $e->getMessage();
        }
    }

    static public function mdlEditarCuenta($Agente,$Nombre,$Credito,$id,$diferencia,$banco_antes,$cuenta_antes,$monto_antes,$Usuario){    
        try {
            $conn = Conexion::conectar();
            // Insertar la nueva cuenta si no existe duplicado
            $stmt = $conn->prepare('UPDATE `credito_cuentas` SET `Agente`=:Agente,`Nombre`=:Nombre,`Credito`= `Credito` + :diferencia WHERE `id` = :id');
            $stmt->bindParam(":id", $id, PDO::PARAM_STR);
            $stmt->bindParam(":Agente", $Agente, PDO::PARAM_STR);
            $stmt->bindParam(":Nombre", $Nombre, PDO::PARAM_STR);
            $stmt->bindParam(":diferencia", $diferencia, PDO::PARAM_STR);
    
    
            if($stmt->execute()){
                $stmt = $conn->prepare('INSERT INTO `ediciones_cuentas`(`id_cuenta`, `banco_antes`, `cuenta_antes`, `monto_antes`, `banco_despues`, `cuenta_despues`, `monto_despues`, `Usuario`) 
                                                                VALUES ( :id_cuenta, :banco_antes, :cuenta_antes, :monto_antes, :banco_despues, :cuenta_despues, :monto_despues, :Usuario)');
                $stmt->bindParam(":id_cuenta", $id, PDO::PARAM_STR);
                $stmt->bindParam(":banco_antes", $banco_antes, PDO::PARAM_STR);
                $stmt->bindParam(":cuenta_antes", $cuenta_antes, PDO::PARAM_STR);
                $stmt->bindParam(":monto_antes", $monto_antes, PDO::PARAM_STR);
                $stmt->bindParam(":banco_despues", $Agente, PDO::PARAM_STR);
                $stmt->bindParam(":cuenta_despues", $Nombre, PDO::PARAM_STR);
                $stmt->bindParam(":monto_despues", $Credito, PDO::PARAM_STR);
                $stmt->bindParam(":Usuario", $Usuario, PDO::PARAM_STR);


                if($stmt->execute()){
                    $stmt = $conn->prepare('UPDATE `registro_agente` SET `Agente`= :banco_despues ,`cuenta`=:cuenta_despues WHERE `Agente`= :banco_antes  and  `cuenta`=:cuenta_antes;');

                    $stmt->bindParam(":banco_antes", $banco_antes, PDO::PARAM_STR);
                    $stmt->bindParam(":cuenta_antes", $cuenta_antes, PDO::PARAM_STR);
                    $stmt->bindParam(":banco_despues", $Agente, PDO::PARAM_STR);
                    $stmt->bindParam(":cuenta_despues", $Nombre, PDO::PARAM_STR);


                    if($stmt->execute()){
                        return "ok";
                    } else {
                        return "error";
                    }
                    
                } else {
                    return "error";
                }

            } else {
                return "error";
            }
        } catch (PDOException $e) {
            return "error: " . $e->getMessage();
        }
    }


}
<?php

require_once "conexion.php";

class CuadreModelo{

    static public function mdlListarCuentas(){

        $zona_horaria = new DateTimeZone('America/Lima');

        // Obtener la fecha actual en la zona horaria de Lima
        $fecha_actual = new DateTime('now', $zona_horaria);

        // Restar un día a la fecha actual para obtener la fecha de ayer
        $fecha_actual->sub(new DateInterval('P1D'));

        // Formatear la fecha actual (que ahora es la fecha de ayer) en el formato "AAAA-MM-DD"
        $fecha_actual_formateada = $fecha_actual->format('Y-m-d');
    
        $stmt = Conexion::conectar()->prepare("SELECT cc.`id`, cc.`Agente`, cc.`Nombre`, 
                    CONCAT(cc.`Agente`, ' - ', cc.`Nombre`) AS `Agente_Nombre`, 
                    COALESCE(c.`monto`, 0) AS `Ingreso`, '' AS `Actual`
                    FROM `credito_cuentas` cc
                    LEFT JOIN `cuadreos` c ON cc.`id` = c.`id_agente` AND DATE(c.`fecha`) = :fechaAyer
                    WHERE 1");
    
        $stmt->bindParam(':fechaAyer', $fecha_actual_formateada, PDO::PARAM_STR);
        $stmt->execute();
    
        return $stmt->fetchAll();
    }

    static public function mdlListarEdicionCuentas(){
    
        $stmt = Conexion::conectar()->prepare("SELECT '',`id`, `Agente`, `Nombre` FROM `credito_cuentas` WHERE 1");
    
       
        $stmt->execute();
    
        return $stmt->fetchAll();
    }

    static public function mdlEditarCuenta($idCuenta,$Nombre,$Banco){
    
        $stmt = Conexion::conectar()->prepare("UPDATE `credito_cuentas` SET `Agente`= :Banco ,`Nombre`= :Nombre WHERE `id`= :idCuenta");
    
       
        $stmt->bindParam(':idCuenta', $idCuenta, PDO::PARAM_STR);

        $stmt->bindParam(':Nombre', $Nombre, PDO::PARAM_STR);

        $stmt->bindParam(':Banco', $Banco, PDO::PARAM_STR);

        if($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }
    
    }

    static public function mdlListarIngresos(){
        
        $stmt = Conexion::conectar()->prepare("SELECT `id_ingresos`, `Nombre`, '' as Monto , '' as referencia FROM `ingresos_salidas` WHERE 1 ORDER BY `id_ingresos` ASC LIMIT 10"); 

        $stmt->execute();

        return $stmt->fetchAll();
    
    }

    static public function mdlListarGanancias(){
        
        $stmt = Conexion::conectar()->prepare("SELECT `id_ganancias`, `Nombre`, '' as Monto , '' as referencia FROM `ganancias` WHERE 1 ORDER BY `id_ganancias` ASC LIMIT 1"); 

        $stmt->execute();

        return $stmt->fetchAll();
    
    }

    static public function mdlListarIngresos2(){
        
        $stmt = Conexion::conectar()->prepare("SELECT `id_ingresos`, `Nombre`, '' as Monto , '' as referencia FROM `ingresos_salidas` WHERE 1 ORDER BY `id_ingresos` DESC LIMIT 10"); 

        $stmt->execute();

        return $stmt->fetchAll();
    
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////

    static public function mdlmatrizDatosCuadre($matrizDatosCuadre){

        $resultado = "ok"; // Inicializar el resultado como "ok"
        
        foreach ($matrizDatosCuadre as $fila) {

            $id_agente = $fila[0];
            $monto = $fila[1];
            $fecha = $fila[2];
            $zona_horaria = new DateTimeZone('America/Lima');

            // Obtener la fecha actual en la zona horaria de Lima
            $fecha_actual = new DateTime('now', $zona_horaria);

            // Formatear la fecha actual en el formato "AAAA-MM-DD"
            $fecha_actual_formateada = $fecha_actual->format('Y-m-d');

            // Obtener el número del monto sin el formato "S/. "
            $monto_num = floatval(substr($monto, 4)); // Extraer la subcadena a partir del cuarto caracter

            $stmt = Conexion::conectar()->prepare("DELETE FROM `cuadreos` WHERE DATE(`fecha`) = :fecha_actual AND `id_agente` = :id_agente");

            $stmt -> bindParam(":fecha_actual", $fecha_actual_formateada, PDO::PARAM_STR);
            $stmt -> bindParam(":id_agente", $id_agente , PDO::PARAM_STR);

            if($stmt -> execute()){

                $stmt = Conexion::conectar()->prepare("INSERT INTO `cuadreos`(`id_agente`, `monto`, `fecha`) VALUES (:id_agente, :monto, :fecha)");

                $stmt -> bindParam(":id_agente", $id_agente , PDO::PARAM_STR);
                $stmt -> bindParam(":monto", $monto_num, PDO::PARAM_STR);
                $stmt -> bindParam(":fecha", $fecha , PDO::PARAM_STR);

                if (!$stmt->execute()) {
                    $resultado = "error al insertar datos"; // Cambiar el resultado si hay un error al insertar
                }

            }

        }
        
        return $resultado;
    }

    static public function mdlmatrizDatosIngresos($matrizDatosIngresos){

        $resultado = "ok"; // Inicializar el resultado como "ok"
        
        foreach ($matrizDatosIngresos as $fila) {

            $nombre = $fila[1];
            $Monto = $fila[2];
            $referencia = $fila[3];
            $zona_horaria = new DateTimeZone('America/Lima');

            // Obtener la fecha actual en la zona horaria de Lima
            $fecha_actual = new DateTime('now', $zona_horaria);

            // Formatear la fecha actual en el formato "AAAA-MM-DD"
            $fecha_actual_formateada = $fecha_actual->format('Y-m-d');

            // Obtener el número del monto sin el formato "S/. "
            $monto_num = floatval(substr($Monto, 4)); // Extraer la subcadena a partir del cuarto caracter

            $stmt = Conexion::conectar()->prepare("DELETE FROM `ingresos` WHERE DATE(`fecha`) = :fecha_actual AND `nombre` = :nombre ");

            $stmt -> bindParam(":fecha_actual", $fecha_actual_formateada, PDO::PARAM_STR);
            $stmt -> bindParam(":nombre", $nombre, PDO::PARAM_STR);

            if($stmt -> execute()){

                $stmt = Conexion::conectar()->prepare("INSERT INTO `ingresos`(`nombre`, `Monto`, `referencia`) VALUES (:nombre, :Monto, :referencia)");

                $stmt -> bindParam(":nombre", $nombre , PDO::PARAM_STR);
                $stmt -> bindParam(":Monto", $monto_num, PDO::PARAM_STR);
                $stmt -> bindParam(":referencia", $referencia , PDO::PARAM_STR);

                if (!$stmt->execute()) {
                    $resultado = "error al insertar datos"; // Cambiar el resultado si hay un error al insertar
                }

            }

        }

        return $resultado;
    }

    static public function mdlmatrizDatosSalidas($matrizDatosSalidas){

        $resultado = "ok"; // Inicializar el resultado como "ok"
        
        foreach ($matrizDatosSalidas as $fila) {

            $nombre = $fila[1];
            $Monto = $fila[2];
            $referencia = $fila[3];
            $zona_horaria = new DateTimeZone('America/Lima');

            // Obtener la fecha actual en la zona horaria de Lima
            $fecha_actual = new DateTime('now', $zona_horaria);

            // Formatear la fecha actual en el formato "AAAA-MM-DD"
            $fecha_actual_formateada = $fecha_actual->format('Y-m-d');


            // Obtener el número del monto sin el formato "S/. "
            $monto_num = floatval(substr($Monto, 4)); // Extraer la subcadena a partir del cuarto caracter

            $stmt = Conexion::conectar()->prepare("DELETE FROM `salidas` WHERE DATE(`fecha`) = :fecha_actual AND `nombre` = :nombre ");

            $stmt -> bindParam(":fecha_actual", $fecha_actual_formateada, PDO::PARAM_STR);
            $stmt -> bindParam(":nombre", $nombre, PDO::PARAM_STR);

            if($stmt -> execute()){

                $stmt = Conexion::conectar()->prepare("INSERT INTO `salidas`(`nombre`, `Monto`, `referencia`) VALUES (:nombre, :Monto, :referencia)");

                $stmt -> bindParam(":nombre", $nombre , PDO::PARAM_STR);
                $stmt -> bindParam(":Monto", $monto_num, PDO::PARAM_STR);
                $stmt -> bindParam(":referencia", $referencia , PDO::PARAM_STR);

                if (!$stmt->execute()) {
                    $resultado = "error al insertar datos"; // Cambiar el resultado si hay un error al insertar
                }

            }

        }

        return $resultado;
    }

    static public function mdlmatrizDatosGanancias($matrizDatosGanancias){

        $resultado = "ok"; // Inicializar el resultado como "ok"
        
        foreach ($matrizDatosGanancias as $fila) {

            $nombre = $fila[1];
            $Monto = $fila[2];
            $referencia = $fila[3];
            $zona_horaria = new DateTimeZone('America/Lima');

            // Obtener la fecha actual en la zona horaria de Lima
            $fecha_actual = new DateTime('now', $zona_horaria);

            // Formatear la fecha actual en el formato "AAAA-MM-DD"
            $fecha_actual_formateada = $fecha_actual->format('Y-m-d');


            // Obtener el número del monto sin el formato "S/. "
            $monto_num = floatval(substr($Monto, 4)); // Extraer la subcadena a partir del cuarto caracter

            $stmt = Conexion::conectar()->prepare("DELETE FROM `ganar` WHERE DATE(`fecha`) = :fecha_actual AND `nombre` = :nombre ");

            $stmt -> bindParam(":fecha_actual", $fecha_actual_formateada, PDO::PARAM_STR);
            $stmt -> bindParam(":nombre", $nombre, PDO::PARAM_STR);

            if($stmt -> execute()){

                $stmt = Conexion::conectar()->prepare("INSERT INTO `ganar`(`nombre`, `Monto`, `referencia`) VALUES (:nombre, :Monto, :referencia)");

                $stmt -> bindParam(":nombre", $nombre , PDO::PARAM_STR);
                $stmt -> bindParam(":Monto", $monto_num, PDO::PARAM_STR);
                $stmt -> bindParam(":referencia", $referencia , PDO::PARAM_STR);

                if (!$stmt->execute()) {
                    $resultado = "error al insertar datos"; // Cambiar el resultado si hay un error al insertar
                }

            }

        }

        return $resultado;
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////

    static public function mdlmatrizDatosFechaCuadre($matrizDatosCuadre , $fecha){

        $resultado = "ok"; // Inicializar el resultado como "ok"
        
        foreach ($matrizDatosCuadre as $fila) {

            $id_agente = $fila[0];
            $monto = $fila[1];

            $hora = date("H:i:s");

            $fecha_actual = $fecha . " " . $hora; // Concatena la fecha y la hora

            // Obtener el número del monto sin el formato "S/. "
            $monto_num = floatval(substr($monto, 4)); // Extraer la subcadena a partir del cuarto caracter

            $stmt = Conexion::conectar()->prepare("DELETE FROM `cuadreos` WHERE DATE(`fecha`) = :fecha_actual AND `id_agente` = :id_agente");

            $stmt -> bindParam(":fecha_actual", $fecha, PDO::PARAM_STR);
            $stmt -> bindParam(":id_agente", $id_agente , PDO::PARAM_STR);

            if($stmt -> execute()){

                $stmt = Conexion::conectar()->prepare("INSERT INTO `cuadreos`(`id_agente`, `monto`, `fecha`) VALUES (:id_agente, :monto, :fecha)");

                $stmt -> bindParam(":id_agente", $id_agente , PDO::PARAM_STR);
                $stmt -> bindParam(":monto", $monto_num, PDO::PARAM_STR);
                $stmt -> bindParam(":fecha", $fecha_actual , PDO::PARAM_STR);

                if (!$stmt->execute()) {
                    $resultado = "error al insertar datos"; // Cambiar el resultado si hay un error al insertar
                }

            }

        }
        
        return $resultado;
    }

    static public function mdlmatrizDatosFechaIngresos($matrizDatosIngresos , $fecha){

        $resultado = "ok"; // Inicializar el resultado como "ok"
        
        foreach ($matrizDatosIngresos as $fila) {

            $nombre = $fila[1];
            $Monto = $fila[2];
            $referencia = $fila[3];

            $hora = date("H:i:s");

            $fecha_actual = $fecha . " " . $hora; // Concatena la fecha y la hora

            // Obtener el número del monto sin el formato "S/. "
            $monto_num = floatval(substr($Monto, 4)); // Extraer la subcadena a partir del cuarto caracter

            $stmt = Conexion::conectar()->prepare("DELETE FROM `ingresos` WHERE DATE(`fecha`) = :fecha_actual AND `nombre` = :nombre ");

            $stmt -> bindParam(":fecha_actual", $fecha, PDO::PARAM_STR);
            $stmt -> bindParam(":nombre", $nombre, PDO::PARAM_STR);

            if($stmt -> execute()){

                $stmt = Conexion::conectar()->prepare("INSERT INTO `ingresos`(`nombre`, `Monto`, `referencia`, `fecha`) VALUES (:nombre, :Monto, :referencia, :fecha)");

                $stmt -> bindParam(":nombre", $nombre , PDO::PARAM_STR);
                $stmt -> bindParam(":Monto", $monto_num, PDO::PARAM_STR);
                $stmt -> bindParam(":referencia", $referencia , PDO::PARAM_STR);
                $stmt -> bindParam(":fecha", $fecha_actual , PDO::PARAM_STR);

                if (!$stmt->execute()) {
                    $resultado = "error al insertar datos"; // Cambiar el resultado si hay un error al insertar
                }

            }

        }

        return $resultado;
    }

    static public function mdlmatrizDatosFechaSalidas($matrizDatosSalidas , $fecha){

        $resultado = "ok"; // Inicializar el resultado como "ok"
        
        foreach ($matrizDatosSalidas as $fila) {

            $nombre = $fila[1];
            $Monto = $fila[2];
            $referencia = $fila[3];

            $hora = date("H:i:s");

            $fecha_actual = $fecha . " " . $hora; // Concatena la fecha y la hora

            // Obtener el número del monto sin el formato "S/. "
            $monto_num = floatval(substr($Monto, 4)); // Extraer la subcadena a partir del cuarto caracter

            $stmt = Conexion::conectar()->prepare("DELETE FROM `salidas` WHERE DATE(`fecha`) = :fecha_actual AND `nombre` = :nombre ");

            $stmt -> bindParam(":fecha_actual", $fecha, PDO::PARAM_STR);
            $stmt -> bindParam(":nombre", $nombre, PDO::PARAM_STR);

            if($stmt -> execute()){

                $stmt = Conexion::conectar()->prepare("INSERT INTO `salidas`(`nombre`, `Monto`, `referencia`, `fecha`) VALUES (:nombre, :Monto, :referencia, :fecha)");

                $stmt -> bindParam(":nombre", $nombre , PDO::PARAM_STR);
                $stmt -> bindParam(":Monto", $monto_num, PDO::PARAM_STR);
                $stmt -> bindParam(":referencia", $referencia , PDO::PARAM_STR);
                $stmt -> bindParam(":fecha", $fecha_actual , PDO::PARAM_STR);

                if (!$stmt->execute()) {
                    $resultado = "error al insertar datos"; // Cambiar el resultado si hay un error al insertar
                }

            }

        }

        return $resultado;
    }

    static public function mdlmatrizDatosFechaGanancias($matrizDatosGanancias , $fecha){

        $resultado = "ok"; // Inicializar el resultado como "ok"
        
        foreach ($matrizDatosGanancias as $fila) {

            $nombre = $fila[1];
            $Monto = $fila[2];
            $referencia = $fila[3];

            $hora = date("H:i:s");

            $fecha_actual = $fecha . " " . $hora; // Concatena la fecha y la hora

            // Obtener el número del monto sin el formato "S/. "
            $monto_num = floatval(substr($Monto, 4)); // Extraer la subcadena a partir del cuarto caracter

            $stmt = Conexion::conectar()->prepare("DELETE FROM `ganar` WHERE DATE(`fecha`) = :fecha_actual AND `nombre` = :nombre ");

            $stmt -> bindParam(":fecha_actual", $fecha, PDO::PARAM_STR);
            $stmt -> bindParam(":nombre", $nombre, PDO::PARAM_STR);

            if($stmt -> execute()){

                $stmt = Conexion::conectar()->prepare("INSERT INTO `ganar`(`nombre`, `Monto`, `referencia`, `fecha`) VALUES (:nombre, :Monto, :referencia, :fecha)");

                $stmt -> bindParam(":nombre", $nombre , PDO::PARAM_STR);
                $stmt -> bindParam(":Monto", $monto_num, PDO::PARAM_STR);
                $stmt -> bindParam(":referencia", $referencia , PDO::PARAM_STR);
                $stmt -> bindParam(":fecha", $fecha_actual , PDO::PARAM_STR);

                if (!$stmt->execute()) {
                    $resultado = "error al insertar datos"; // Cambiar el resultado si hay un error al insertar
                }

            }

        }

        return $resultado;
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////

    static public function mdlDarCuadreFecha($fecha){
        
        $stmt = Conexion::conectar()->prepare(" SELECT 
                                                    cc.id, 
                                                    cc.Agente, 
                                                    cc.Nombre, 
                                                    CONCAT(cc.Agente, ' - ', cc.Nombre) AS Agente_Nombre, 
                                                    COALESCE((SELECT cs.Monto
                                                        FROM cuadreos cs 
                                                        WHERE cc.id = cs.id_agente AND DATE(cs.fecha) = DATE_SUB(:fecha, INTERVAL 1 DAY)), 0) as Ingreso,
                                                    cs.Monto as Actual
                                                FROM 
                                                    credito_cuentas cc 
                                                INNER JOIN 
                                                    cuadreos cs ON cc.id = cs.id_agente
                                                WHERE 
                                                    DATE(cs.fecha) = DATE(:fecha);");

        $stmt -> bindParam(":fecha", $fecha, PDO::PARAM_STR);

        $stmt->execute();

        $resultados = $stmt->fetchAll();

        // Verificar si la consulta devolvió resultados
        if (empty($resultados)) {
            // Ejecutar la consulta alternativa
            $stmt_alt = Conexion::conectar()->prepare(" SELECT cc.id, cc.Agente, cc.Nombre, CONCAT(cc.Agente, ' - ', cc.Nombre) AS Agente_Nombre,
                                                        COALESCE((SELECT cs.Monto
                                                            FROM cuadreos cs 
                                                            WHERE cc.id = cs.id_agente AND DATE(cs.fecha) = DATE_SUB(:fecha, INTERVAL 1 DAY)), 0) as Ingreso, 0 as Actual
                                                        FROM credito_cuentas cc
                                                        WHERE 1;");

            $stmt_alt -> bindParam(":fecha", $fecha, PDO::PARAM_STR);

            $stmt_alt->execute();

            return $stmt_alt->fetchAll();
        }

        return $resultados;
    }

    static public function mdlDarIngresosFecha($fecha){
        
        $stmt = Conexion::conectar()->prepare("SELECT si.id_ingresos, si.Nombre, i.Monto , i.referencia FROM ingresos_salidas si INNER JOIN ingresos i WHERE DATE(i.fecha) = :fecha AND i.nombre = si.Nombre ORDER BY id_ingresos ASC LIMIT 10"); 

        $stmt -> bindParam(":fecha", $fecha, PDO::PARAM_STR);

        $stmt->execute();

        $resultados = $stmt->fetchAll();

        // Verificar si la consulta devolvió resultados
        if (empty($resultados)) {
            // Ejecutar la consulta alternativa
            $stmt_alt = Conexion::conectar()->prepare("SELECT `id_ingresos`, `Nombre`, '' as Monto , '' as referencia FROM `ingresos_salidas` WHERE 1 ORDER BY `id_ingresos` ASC LIMIT 10");

            $stmt_alt->execute();

            return $stmt_alt->fetchAll();
        }

        return $resultados;

    }
    
    static public function mdlDarSalidasFecha($fecha){
        
        $stmt = Conexion::conectar()->prepare("SELECT si.id_ingresos, si.Nombre, s.Monto , s.referencia FROM ingresos_salidas si INNER JOIN salidas s WHERE DATE(s.fecha) = :fecha AND s.nombre = si.Nombre ORDER BY id_ingresos DESC LIMIT 10"); 

        $stmt -> bindParam(":fecha", $fecha, PDO::PARAM_STR);

        $stmt->execute();

        $resultados = $stmt->fetchAll();

        // Verificar si la consulta devolvió resultados
        if (empty($resultados)) {
            // Ejecutar la consulta alternativa
            $stmt_alt = Conexion::conectar()->prepare("SELECT `id_ingresos`, `Nombre`, '' as Monto , '' as referencia FROM `ingresos_salidas` WHERE 1 ORDER BY `id_ingresos` DESC LIMIT 10");

            $stmt_alt->execute();

            return $stmt_alt->fetchAll();
        }

        return $resultados;

    }

    static public function mdlDarGananciasFecha($fecha){
        
        $stmt = Conexion::conectar()->prepare("SELECT si.id_ganancias, si.Nombre, s.Monto , s.referencia FROM ganancias si INNER JOIN ganar s WHERE DATE(s.fecha) = :fecha AND s.nombre = si.Nombre ORDER BY id_ganancias DESC LIMIT 1"); 

        $stmt -> bindParam(":fecha", $fecha, PDO::PARAM_STR);

        $stmt->execute();

        $resultados = $stmt->fetchAll();

        // Verificar si la consulta devolvió resultados
        if (empty($resultados)) {
            // Ejecutar la consulta alternativa
            $stmt_alt = Conexion::conectar()->prepare("SELECT `id_ganancias`, `Nombre`, '' as Monto , '' as referencia FROM `ganancias` WHERE 1 ORDER BY `id_ganancias` DESC LIMIT 1");

            $stmt_alt->execute();

            return $stmt_alt->fetchAll();
        }

        return $resultados;

    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////

    static public function mdlDarIngresosFechaAyer($fecha){
        
        $stmt = Conexion::conectar()->prepare("SELECT si.id_ingresos, si.Nombre, i.Monto , i.referencia FROM ingresos_salidas si INNER JOIN ingresos i WHERE DATE(i.fecha) = DATE_SUB(:fecha, INTERVAL 1 DAY) AND i.nombre = si.Nombre ORDER BY id_ingresos ASC LIMIT 10"); 

        $stmt -> bindParam(":fecha", $fecha, PDO::PARAM_STR);

        $stmt->execute();

        $resultados = $stmt->fetchAll();

        // Verificar si la consulta devolvió resultados
        if (empty($resultados)) {
            // Ejecutar la consulta alternativa
            $stmt_alt = Conexion::conectar()->prepare("SELECT `id_ingresos`, `Nombre`, '' as Monto , '' as referencia FROM `ingresos_salidas` WHERE 1 ORDER BY `id_ingresos` ASC LIMIT 10");

            $stmt_alt->execute();

            return $stmt_alt->fetchAll();
        }

        return $resultados;

    }
    
    static public function mdlDarSalidasFechaAyer($fecha){
        
        $stmt = Conexion::conectar()->prepare("SELECT si.id_ingresos, si.Nombre, s.Monto , s.referencia FROM ingresos_salidas si INNER JOIN salidas s WHERE DATE(s.fecha) = DATE_SUB(:fecha, INTERVAL 1 DAY) AND s.nombre = si.Nombre ORDER BY id_ingresos DESC LIMIT 10"); 

        $stmt -> bindParam(":fecha", $fecha, PDO::PARAM_STR);

        $stmt->execute();

        $resultados = $stmt->fetchAll();

        // Verificar si la consulta devolvió resultados
        if (empty($resultados)) {
            // Ejecutar la consulta alternativa
            $stmt_alt = Conexion::conectar()->prepare("SELECT `id_ingresos`, `Nombre`, '' as Monto , '' as referencia FROM `ingresos_salidas` WHERE 1 ORDER BY `id_ingresos` DESC LIMIT 10");

            $stmt_alt->execute();

            return $stmt_alt->fetchAll();
        }

        return $resultados;

    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////

    static public function mdlDarGananciasMes(){
        
        $stmt = Conexion::conectar()->prepare(" SELECT date(g.fecha) as fecha_ganancias, 
                                                    sum(round(g.Monto,2)) as total_ganancias
                                                FROM ganar g 
                                                    where date (g.fecha) >= date(last_day (now() -
                                                INTERVAL 1 month) + INTERVAL 1 day)
                                                and date(g.fecha) <= last_day (date(CURRENT_DATE)) 
                                                GROUP BY date(g.fecha);"); 

        $stmt->execute();

        $resultados = $stmt->fetchAll();

        return $resultados;

    }

    static public function mdlDarSalidasMes(){
        
        $stmt = Conexion::conectar()->prepare(" SELECT date(s.fecha) as fecha_salidas, 
                                                    sum(round(s.monto,2)) as total_salidas
                                                FROM salidas s 
                                                    where date (s.fecha) >= date(last_day (now() -
                                                INTERVAL 1 month) + INTERVAL 1 day)
                                                and date(s.fecha) <= last_day (date(CURRENT_DATE)) 
                                                GROUP BY date(s.fecha);"); 

        $stmt->execute();

        $resultados = $stmt->fetchAll();

        return $resultados;

    }

    static public function mdlDarIngresosMes(){
        
        $stmt = Conexion::conectar()->prepare(" SELECT date(i.fecha) as fecha_ingresos, 
                                                    sum(round(i.monto,2)) as total_ingresos
                                                FROM ingresos i 
                                                    where date (i.fecha) >= date(last_day (now() -
                                                INTERVAL 1 month) + INTERVAL 1 day)
                                                and date(i.fecha) <= last_day (date(CURRENT_DATE)) 
                                                GROUP BY date(i.fecha);"); 

        $stmt->execute();

        $resultados = $stmt->fetchAll();

        return $resultados;

    }

}
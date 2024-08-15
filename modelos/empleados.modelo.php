<?php

require_once "conexion.php";

class EmpleadoModelo{

    static public function mdlMostrarAsistencia(){

        $stmt = Conexion::conectar()->prepare ("SELECT '' as opciones, t.id_tardanza, e.nombre, t.hora, t.atrazo, t.justificacion 
                                                    FROM empleados e 
                                                    INNER JOIN tardanzas t 
                                                    WHERE t.id_empleado = e.id_empleado
                                                    ORDER BY t.hora DESC;");

        $stmt -> execute();

        return $stmt->fetchAll();

    }

    static public function mdlMostrarEmpleados(){

            $stmt = Conexion::conectar()->prepare ("SELECT '' as opciones ,`id_empleado`, `nombre`, `dni`, `tardanzas`, `justificaciones` FROM `empleados` WHERE 1
                                                    order by `id_empleado`");

            $stmt -> execute();

            return $stmt->fetchAll();

    }

    static public function mdlMostrarEmpleadosSimple(){

            $stmt = Conexion::conectar()->prepare ("SELECT '' as editar ,`id_empleado`, `nombre`, `dni`, '' as borrar FROM `empleados` WHERE 1
                                                    order by `id_empleado`");

            $stmt -> execute();

            return $stmt->fetchAll();

    }

    static public function mdlRegistrarEmpleados($nombre, $dni) {
        // Verificar si el nombre ya existe en la tabla
        $stmtVerificar = Conexion::conectar()->prepare("SELECT COUNT(*) FROM empleados WHERE nombre = :nombre");
        $stmtVerificar->bindParam(":nombre", $nombre, PDO::PARAM_STR);
        $stmtVerificar->execute();
        $cantidad = $stmtVerificar->fetchColumn();
    
        if ($cantidad > 0) {
            // Si el nombre ya existe, retornar "ERROR 404"
            return "ERROR 404";
        } else {
            // Si el nombre no existe, proceder con la inserción
            $stmt = Conexion::conectar()->prepare("INSERT INTO empleados (id_empleado, nombre, dni, tardanzas, justificaciones) 
                                                    VALUES ((SELECT COALESCE(MAX(cn.id_empleado), 0) + 1 FROM empleados cn), :nombre, :dni, 0, 0)");
            $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $stmt->bindParam(":dni", $dni, PDO::PARAM_STR);
    
            if ($stmt->execute()) {
                return "OK";
            } else {
                return "ERROR";
            }
        }
    }
    

    static public function mdlEliminarEmpleado($empleado,$id_empleado){

        $stmt = Conexion::conectar()->prepare ("DELETE FROM `tardanzas` WHERE  `id_empleado` = :id_empleado ");

        $stmt -> bindParam(":id_empleado",$id_empleado,PDO::PARAM_STR);

        if($stmt -> execute()){
        
            // Paso 2: Reenumerar la columna id_tardanza
            $stmtUpdate = Conexion::conectar()->prepare("call prc_acomodarTardanzas");
            $stmtUpdate->execute();
            
            if($stmt -> execute()){
        
                $stmt = Conexion::conectar()->prepare ("DELETE FROM `empleados` WHERE `nombre` = :empleado AND `id_empleado` = :id_empleado ");

                $stmt -> bindParam(":empleado",$empleado,PDO::PARAM_STR);
                $stmt -> bindParam(":id_empleado",$id_empleado,PDO::PARAM_STR);

                if($stmt -> execute()){
                    // Ahora, actualizamos los valores de id_empleado de los registros restantes
                    $updateStmt = Conexion::conectar()->prepare("UPDATE empleados SET id_empleado = id_empleado - 1 WHERE id_empleado > :id_empleado");
                    $updateStmt->bindParam(":id_empleado", $id_empleado, PDO::PARAM_INT);
                    $updateStmt->execute();

                    

                    return "OK";
                } else {
                    return "ERROR";
                }
            }else {
                return "ERROR";
            }
        }else {
            return "ERROR";
        }

    }

    static public function mdlActualizarEmpleados($nombre,$dni,$id_empleado){

        $stmt = Conexion::conectar()->prepare ("UPDATE `empleados` SET `nombre`= :nombre,`dni`= :dni WHERE `id_empleado` = :id_empleado");

        $stmt -> bindParam(":nombre",$nombre,PDO::PARAM_STR);
        $stmt -> bindParam(":dni",$dni,PDO::PARAM_STR);
        $stmt -> bindParam(":id_empleado",$id_empleado,PDO::PARAM_STR);

        if($stmt -> execute()){
            return "OK";
        } else {
            return "ERROR";
        }

    }

    static public function mdlRegistrarAsistencias($id_empleado,$justificacion){

        // $stmt_select = Conexion::conectar()->prepare("SELECT `codigo_empleado` FROM `empleados` WHERE `descripcion_empleado` = :nombre");
        // $stmt_select -> bindParam(":id_empleado", $id_empleado , PDO::PARAM_STR);
        // $stmt_select->execute();

        // // Obtenemos el resultado de la consulta
        // $id = $stmt_select->fetchColumn();
        
        // $nombre = $id;

        // Obtener la fecha y hora actual
        date_default_timezone_set('America/Lima');
        $fechaHoraActual = date('Y-m-d H:i:s');

        // Establecer la fecha y hora de las 8:00 PM de hoy
        $horaFija = date('Y-m-d 20:00:00');

        // Convertir ambas fechas y horas en objetos DateTime para poder calcular la diferencia
        $fechaHoraActualObj = new DateTime($fechaHoraActual);
        $horaFijaObj = new DateTime($horaFija);

        // Calcular la diferencia en minutos
        $diferencia = $fechaHoraActualObj->diff($horaFijaObj);
        $diferenciaMinutos = $diferencia->days * 24 * 60 + $diferencia->h * 60 + $diferencia->i;

        if($diferenciaMinutos < 0){
            $diferenciaMinutos = 0;
        }

        // Verificar si la diferencia en minutos es mayor a 5 y si la justificación no está vacía
        if ($diferenciaMinutos > 5 && $justificacion != "") {
            $tardanza = 1;
        } else {
            $tardanza = 0;
        }


        $stmt = Conexion::conectar()->prepare ("INSERT INTO `tardanzas`(`id_empleado`, `hora`, `tardanza`, `atrazo`, `justificacion`) 
        
                                                                VALUES (:id_empleado,
                                                                        :fechaHoraActual,
                                                                        :tardanza,
                                                                        :diferenciaMinutos,
                                                                        :justificacion)");

        $stmt -> bindParam(":id_empleado",$id_empleado,PDO::PARAM_STR);
        $stmt -> bindParam(":fechaHoraActual",$fechaHoraActual,PDO::PARAM_STR);
        $stmt -> bindParam(":diferenciaMinutos",$diferenciaMinutos,PDO::PARAM_STR);
        $stmt -> bindParam(":tardanza",$tardanza,PDO::PARAM_STR);
        $stmt -> bindParam(":justificacion",$justificacion,PDO::PARAM_STR);

        if($stmt -> execute()){
            // Paso 2: Reenumerar la columna id_tardanza
            $stmtUpdate = Conexion::conectar()->prepare("call prc_acomodarTardanzas");
            $stmtUpdate->execute();
            return "OK";
        } else {
            return "ERROR";
        }

    }

    static public function mdlEliminarTardanza($empleado,$id_tardanza){

        $stmt_select = Conexion::conectar()->prepare("SELECT `id_empleado` FROM `empleados` WHERE `nombre` = :empleado");
        $stmt_select -> bindParam(":empleado", $empleado , PDO::PARAM_STR);
        $stmt_select->execute();

        // Obtenemos el resultado de la consulta
        $id = $stmt_select->fetchColumn();
    
        $id_empleado = $id;

        $stmt = Conexion::conectar()->prepare ("DELETE FROM `tardanzas` WHERE `id_empleado` = :id_empleado AND `id_tardanza` = :id_tardanza ");

        $stmt -> bindParam(":id_empleado",$id_empleado,PDO::PARAM_STR);
        $stmt -> bindParam(":id_tardanza",$id_tardanza,PDO::PARAM_STR);

        if($stmt -> execute()){
            // Ahora, actualizamos los valores de id_tardanza de los registros restantes
            $updateStmt = Conexion::conectar()->prepare("UPDATE tardanzas SET id_tardanza = id_tardanza - 1 WHERE id_tardanza > :id_tardanza");
            $updateStmt->bindParam(":id_tardanza", $id_tardanza, PDO::PARAM_INT);
            $updateStmt->execute();

            return "OK";
        } else {
            return "ERROR";
        }

    }

    static public function mdlCambiarAsistencia($id,$empleado,$fecha_hora,$justificacion){

        date_default_timezone_set('America/Lima');
        $fechaHoraActual = $fecha_hora;

        $partes = explode(" ", $fecha_hora);

        $fecha = $partes[0]; // La primera parte es la fecha
        $hora = $partes[1];

        // Establecer la fecha y hora de las 8:00 PM de hoy
        $horaFija = date('Y-m-d 20:00:00', strtotime($fecha));

        // Convertir ambas fechas y horas en objetos DateTime para poder calcular la diferencia
        $fechaHoraActualObj = new DateTime($fechaHoraActual);
        $horaFijaObj = new DateTime($horaFija);

        // Calcular la diferencia en minutos
        $diferencia = $fechaHoraActualObj->diff($horaFijaObj);
        $diferenciaMinutos = $diferencia->days * 24 * 60 + $diferencia->h * 60 + $diferencia->i;

        if($diferenciaMinutos < 0){
            $diferenciaMinutos = 0;
        }

        // Verificar si la diferencia en minutos es mayor a 5 y si la justificación no está vacía
        if ($diferenciaMinutos > 5 && $justificacion != "") {
            $tardanza = 1;
        } else {
            $tardanza = 0;
        }

        $stmt_select = Conexion::conectar()->prepare("SELECT `id_empleado` FROM `empleados` WHERE `nombre` = :empleado");
        $stmt_select -> bindParam(":empleado", $empleado , PDO::PARAM_STR);
        $stmt_select->execute();

        // Obtenemos el resultado de la consulta
        $id_empleado = $stmt_select->fetchColumn();
        
        $id_tardanza = $id;

        $stmt = Conexion::conectar()->prepare ("UPDATE tardanzas SET id_empleado = :id_empleado , hora = :fecha_hora, tardanza =:tardanza, atrazo = :diferenciaMinutos  WHERE id_tardanza = :id_tardanza");

        $stmt -> bindParam(":id_empleado",$id_empleado,PDO::PARAM_STR);
        $stmt -> bindParam(":id_tardanza",$id_tardanza,PDO::PARAM_STR);
        $stmt -> bindParam(":fecha_hora",$fecha_hora,PDO::PARAM_STR);
        $stmt -> bindParam(":tardanza",$tardanza,PDO::PARAM_STR);
        $stmt -> bindParam(":diferenciaMinutos",$diferenciaMinutos,PDO::PARAM_STR);

        if($stmt -> execute()){


            return "OK";
        } else {
            return "ERROR";
        }

    }

    static public function mdlMostrarAlmuerzos(){

        // Obtener la fecha actual en formato MySQL (YYYY-MM-DD)
        $fechaActual = date("Y-m-d");
    
        $stmt = Conexion::conectar()->prepare("SELECT '' as opciones, a.id_almuerzo, a.id_empleado, e.nombre, a.hora_inicio, a.hora_fin, a.atrazo,
                                                TIMESTAMPDIFF(MINUTE, a.hora_inicio, a.hora_fin) AS diferencia_minutos
                                                FROM almuerzos a 
                                                INNER JOIN empleados e ON a.id_empleado = e.id_empleado 
                                                WHERE DATE(a.hora_inicio) = :fechaActual 
                                                ORDER BY a.id_almuerzo");
    
        // Bind de parámetros
        $stmt->bindParam(":fechaActual", $fechaActual, PDO::PARAM_STR);
    
        $stmt->execute();
    
        return $stmt->fetchAll();
    }
    

    static public function mdlVerificarRepetido($id_empleado) {
        $stmt = Conexion::conectar()->prepare("SELECT COUNT(*) AS count_rows
                                                FROM `almuerzos`
                                                WHERE `id_empleado` = :id_empleado
                                                AND DATE(`hora_inicio`) = CURDATE()");
        $stmt->bindParam(":id_empleado", $id_empleado, PDO::PARAM_INT);
        $stmt->execute();
    
        $count_rows = $stmt->fetch(PDO::FETCH_ASSOC)['count_rows'];
    
        if ($count_rows > 0) {
            return "REPETIDO";
        } else {
            return "OK";
        }
    }
    

    static public function mdlGuardarAlmuerzo($id_empleado){

        date_default_timezone_set('America/Lima');
        $fechaHoraActual = date('Y-m-d H:i:s');
        $fechaFin = date('Y-m-d H:i:s', strtotime($fechaHoraActual . ' + 40 minutes'));

        $stmt = Conexion::conectar()->prepare ("INSERT INTO `almuerzos`(`id_almuerzo`, `id_empleado`, `hora_inicio`, `hora_fin`, `atrazo`,`completo`) 
                                                    VALUES ((SELECT COALESCE(MAX(cn.id_almuerzo), 0) + 1 FROM almuerzos cn) , :id_empleado , :fechaHoraActual, :fechaFin, 0,0)");

        $stmt -> bindParam(":id_empleado",$id_empleado,PDO::PARAM_STR);
        $stmt -> bindParam(":fechaHoraActual",$fechaHoraActual,PDO::PARAM_STR);
        $stmt -> bindParam(":fechaFin",$fechaFin,PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "OK";
        } else {
            return "ERROR";
        }

    }

    static public function mdlGuardarAlmuerzo_fin($id_empleado) {
        $stmt = Conexion::conectar()->prepare("SELECT `id_almuerzo`, `id_empleado`, `hora_inicio`, `hora_fin`, `atrazo`, `completo`
                                                FROM `almuerzos`
                                                WHERE `id_empleado` = :id_empleado
                                                AND DATE(`hora_inicio`) = CURDATE()");
    
        $stmt->bindParam(":id_empleado", $id_empleado, PDO::PARAM_INT);
        if ($stmt->execute()) {
            $almuerzo = $stmt->fetch(PDO::FETCH_ASSOC);
    
            if ($almuerzo) {
                $id_almuerzo = $almuerzo['id_almuerzo'];
                $hora_inicio = $almuerzo['hora_inicio'];
                $completado = $almuerzo['completo'];

                if($completado == 0){
    
                    date_default_timezone_set('America/Lima');
                    $fechaHoraActual = date('Y-m-d H:i:s');
        
                    // Convertir ambas fechas y horas en objetos DateTime para poder calcular la diferencia
                    $fechaHoraActualObj = new DateTime($fechaHoraActual);
                    $horaFijaObj = new DateTime($hora_inicio);
        
                    // Calcular la diferencia en minutos
                    $diferencia = $fechaHoraActualObj->diff($horaFijaObj);
                    $diferenciaMinutos = $diferencia->days * 24 * 60 + $diferencia->h * 60 + $diferencia->i;
        
                    if ($diferenciaMinutos < 45) {
                        $diferenciaMinutos = 0;
                    } else {
                        $diferenciaMinutos = $diferenciaMinutos - 45;
                    }
        
                    $stmt = Conexion::conectar()->prepare ("UPDATE `almuerzos` SET `hora_fin`=:hora_fin, `atrazo`= :atrazo, `completo`= 1 
                                                            WHERE `id_almuerzo`= :id_almuerzo AND `id_empleado`= :id_empleado ;");
        
                    $stmt->bindParam(":id_empleado", $id_empleado, PDO::PARAM_STR);
                    $stmt->bindParam(":hora_fin", $fechaHoraActual, PDO::PARAM_STR);
                    $stmt->bindParam(":atrazo", $diferenciaMinutos, PDO::PARAM_STR);
                    $stmt->bindParam(":id_almuerzo", $id_almuerzo, PDO::PARAM_STR);
        
                    if ($stmt->execute()) {
                        return "OK";
                    } else {
                        return "ERROR";
                    }

                }else{
                    return "REGISTRADO";
                }

            } else {
                return "ERROR"; // No se encontró ningún almuerzo para el empleado hoy
            }
        } else {
            return "ERROR"; // Error en la ejecución de la consulta
        }
    }

    static public function mdlBorrarAlmuerzo($id_almuerzo){

        $stmt = Conexion::conectar()->prepare ("DELETE FROM `almuerzos` WHERE `id_almuerzo` =:id_almuerzo ");

        $stmt -> bindParam(":id_almuerzo",$id_almuerzo,PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "OK";
        } else {
            return "ERROR";
        }

    }

    static public function mdlListarPermisos(){

        $stmt = Conexion::conectar()->prepare("SELECT '', p.id_permisos, p.id_empleado, e.nombre, p.hora_inicio, p.hora_fin, p.retrazo,
                                                TIMESTAMPDIFF(MINUTE, p.hora_inicio, p.hora_fin) AS diferencia_minutos
                                                FROM permisos p 
                                                INNER JOIN empleados e ON e.id_empleado = p.id_empleado");
    
        $stmt->execute();
    
        return $stmt->fetchAll();
    }

    static public function mdlRegistrarPermisos($id_empleado, $justificacion, $minutos){
        // Obtener la hora actual
        date_default_timezone_set('America/Lima'); // Establecer la zona horaria adecuada
        $fechaHoraActual = date('Y-m-d H:i:s');
    
        // Calcular la hora de finalización sumando los minutos
        $tiempoFin = date('Y-m-d H:i:s', strtotime($fechaHoraActual) + ($minutos*60));
    
        $diferenciaMinutos = 0;
    
        $stmt = Conexion::conectar()->prepare ("INSERT INTO `permisos`( `id_empleado`, `hora_inicio`, `hora_fin`, `retrazo`, `detalles`)
        
                                                VALUES (:id_empleado,
                                                        :fechaHoraActual,
                                                        :tiempoFin,
                                                        :diferenciaMinutos,
                                                        :justificacion)");
    
        $stmt -> bindParam(":fechaHoraActual", $fechaHoraActual, PDO::PARAM_STR);
        $stmt -> bindParam(":tiempoFin", $tiempoFin, PDO::PARAM_STR);
        $stmt -> bindParam(":diferenciaMinutos", $diferenciaMinutos, PDO::PARAM_STR);
        $stmt -> bindParam(":id_empleado", $id_empleado, PDO::PARAM_STR);
        $stmt -> bindParam(":justificacion", $justificacion, PDO::PARAM_STR);
    
        if($stmt -> execute()){
            return "OK";
        } else {
            return "ERROR";
        }
    }

    static public function mdlEliminarPermiso($id_empleado,$id_permiso){

        $stmt = Conexion::conectar()->prepare("DELETE FROM `permisos` WHERE `id_empleado` = :id_empleado AND `id_permisos` = :id_permiso");

        $stmt -> bindParam(":id_empleado", $id_empleado , PDO::PARAM_STR);
        $stmt -> bindParam(":id_permiso", $id_permiso , PDO::PARAM_STR);


        if($stmt -> execute()){
            return "OK";
        } else {
            return "ERROR";
        }

    }

    static public function mdlDarTardanza($id_empleado,$id_permiso,$minutos){

        $stmt = Conexion::conectar()->prepare("UPDATE `permisos` SET `retrazo`= :minutos WHERE `id_empleado` = :id_empleado AND `id_permisos` = :id_permiso");

        $stmt -> bindParam(":id_empleado", $id_empleado , PDO::PARAM_STR);
        $stmt -> bindParam(":id_permiso", $id_permiso , PDO::PARAM_STR);
        $stmt -> bindParam(":minutos", $minutos , PDO::PARAM_STR);


        if($stmt -> execute()){
            return "OK";
        } else {
            return "ERROR";
        }

    }

    static public function mdlEliminarEmpleadoSeguro($id_empleado, $nombre, $dni){

        $stmt = Conexion::conectar()->prepare("DELETE FROM `empleados` WHERE id_empleado = :id_empleado AND nombre = :nombre AND dni = :dni");
    
        $stmt->bindParam(":id_empleado", $id_empleado, PDO::PARAM_STR);
        $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
        $stmt->bindParam(":dni", $dni, PDO::PARAM_STR);
    
        $stmt->execute();
    
        // Verificar cuántas filas fueron afectadas por la operación DELETE
        $rowCount = $stmt->rowCount();
    
        if ($rowCount == 1) {
            return "OK";
        } elseif ($rowCount == 0) {
            return "ERROR: No se encontró ninguna fila para eliminar.";
        } else {
            return "ERROR: Se encontraron múltiples filas para eliminar.";
        }
    }
    

    static public function mdlListaNombreEmpleados(){

        $stmt = Conexion::conectar()->prepare("SELECT  `id_empleado`,`nombre`, `dni` FROM `empleados` WHERE 1");

        $stmt -> execute();

        $empleados = $stmt->fetchAll();

        $empletData = array();

        foreach($empleados as $empleado){
            $id_empleado = $empleado["id_empleado"];
            $nombre = $empleado["nombre"];
            $dni = $empleado["dni"];

            $data["id"] = $empleado["id_empleado"];
            $data["value"] = $nombre;
            $data["label"] = '
            <a href = "javascript:void(0);" class = "d-flex" style = "width:100% !important; ">
                <div class = "d-flex ml-4 flex-column">
                    <span class = "text-sm"> Codigo: ' .$id_empleado .'/ - / Nombre: <strong>'. $nombre . '</strong></span>
                </div>
            </a>
            ';

            array_push($empletData, $data);
        }

        return $empletData;

    }

    static public function mdlListadoParaAsistencias(){

        $stmt = Conexion::conectar()->prepare("SELECT '' as editar,`id_empleado`,`nombre`, '' as asistencia, '' as tardanza, '' as inasistencia FROM `empleados` WHERE 1");

        $stmt -> execute();

        return $stmt->fetchAll();

    }

    static public function mdlRegistrarNuevaAsistencia($id_empleado, $fecha_actual) {
        // Conectar a la base de datos
        $conexion = Conexion::conectar();
    
        // Verificar si ya existe un registro para el mismo empleado y fecha actual
        $stmt = $conexion->prepare(" SELECT * FROM `asistencia_registro` WHERE `id_empleado` = :id_empleado AND DATE(`fecha`) = :fecha_actual");

        $stmt->bindParam(':id_empleado', $id_empleado);
        $stmt->bindParam(':fecha_actual', $fecha_actual);
        $stmt->execute();
        $registro_existente = $stmt->fetch();

        if ($registro_existente) {
            // Si ya existe un registro, se hace un update
            $stmt = $conexion->prepare("UPDATE `asistencia_registro` SET `asistencia` = '1', `tardanza` = '', `inasistencia` = '' WHERE `id_empleado` = :id_empleado AND DATE(`fecha`) = :fecha_actual");

            $stmt->bindParam(':id_empleado', $id_empleado);
            $stmt->bindParam(':fecha_actual', $fecha_actual);

            if($stmt -> execute()){
                return "OK";
            } else {
                return "ERROR";
            }

        } else {
            // Si no existe un registro, se hace un insert
            $stmt = $conexion->prepare("INSERT INTO `asistencia_registro` (`id_empleado`, `asistencia`, `tardanza`, `inasistencia`, `fecha`) VALUES (:id_empleado, '1', '', '', NOW())");

            $stmt->bindParam(':id_empleado', $id_empleado);

            if($stmt -> execute()){
                return "OK";
            } else {
                return "ERROR";
            }
            
        }

        
    }

    static public function mdlRegistrarNuevaTardanza($id_empleado, $tardanza,$fecha_actual) {
        // Conectar a la base de datos
        $conexion = Conexion::conectar();
    
        // Verificar si ya existe un registro para el mismo empleado y fecha actual
        $stmt = $conexion->prepare(" SELECT * FROM `asistencia_registro` WHERE `id_empleado` = :id_empleado AND DATE(`fecha`) = :fecha_actual");

        $stmt->bindParam(':id_empleado', $id_empleado);
        $stmt->bindParam(':fecha_actual', $fecha_actual);
        $stmt->execute();
        $registro_existente = $stmt->fetch();

        if ($registro_existente) {
            // Si ya existe un registro, se hace un update
            $stmt = $conexion->prepare("UPDATE `asistencia_registro` SET `asistencia` = '', `tardanza` = :tardanza, `inasistencia` = '' WHERE `id_empleado` = :id_empleado AND DATE(`fecha`) = :fecha_actual");

            $stmt->bindParam(':id_empleado', $id_empleado);
            $stmt->bindParam(':tardanza', $tardanza);
            $stmt->bindParam(':fecha_actual', $fecha_actual);

            if($stmt -> execute()){
                return "OK";
            } else {
                return "ERROR";
            }

        } else {
            // Si no existe un registro, se hace un insert
            $stmt = $conexion->prepare("INSERT INTO `asistencia_registro` (`id_empleado`, `asistencia`, `tardanza`, `inasistencia`, `fecha`) VALUES (:id_empleado, '', :tardanza, '', NOW())");

            $stmt->bindParam(':id_empleado', $id_empleado);
            $stmt->bindParam(':tardanza', $tardanza);

            if($stmt -> execute()){
                return "OK";
            } else {
                return "ERROR";
            }
            
        }

        
    }

    static public function mdlRegistrarNuevaFalta($id_empleado,$fecha_actual) {
        // Conectar a la base de datos
        $conexion = Conexion::conectar();

        // Verificar si ya existe un registro para el mismo empleado y fecha actual
        $stmt = $conexion->prepare(" SELECT * FROM `asistencia_registro` WHERE `id_empleado` = :id_empleado AND DATE(`fecha`) = :fecha_actual");

        $stmt->bindParam(':id_empleado', $id_empleado);
        $stmt->bindParam(':fecha_actual', $fecha_actual);
        $stmt->execute();
        $registro_existente = $stmt->fetch();

        if ($registro_existente) {
            // Si ya existe un registro, se hace un update
            $stmt = $conexion->prepare("UPDATE `asistencia_registro` SET `asistencia` = '', `tardanza` = '', `inasistencia` = '1' WHERE `id_empleado` = :id_empleado AND DATE(`fecha`) = :fecha_actual");

            $stmt->bindParam(':id_empleado', $id_empleado);
            $stmt->bindParam(':fecha_actual', $fecha_actual);

            if($stmt -> execute()){
                return "OK";
            } else {
                return "ERROR";
            }

        } else {
            // Si no existe un registro, se hace un insert
            $stmt = $conexion->prepare("INSERT INTO `asistencia_registro` (`id_empleado`, `asistencia`, `tardanza`, `inasistencia`, `fecha`) VALUES (:id_empleado, '', '', '1', NOW())");

            $stmt->bindParam(':id_empleado', $id_empleado);

            if($stmt -> execute()){
                return "OK";
            } else {
                return "ERROR";
            }
            
        }

        
    }

    static public function mdlRegistrarBorrarAsistencia($id_empleado,$fecha_actual) {
        // Conectar a la base de datos
        $conexion = Conexion::conectar();
    
        // Verificar si ya existe un registro para el mismo empleado y fecha actual
        $stmt = $conexion->prepare(" SELECT * FROM `asistencia_registro` WHERE `id_empleado` = :id_empleado AND DATE(`fecha`) = :fecha_actual");

        $stmt->bindParam(':id_empleado', $id_empleado);
        $stmt->bindParam(':fecha_actual', $fecha_actual);
        $stmt->execute();
        $registro_existente = $stmt->fetch();

        if ($registro_existente) {
            // Si ya existe un registro, se hace un update
            $stmt = $conexion->prepare("UPDATE `asistencia_registro` SET `asistencia` = '', `tardanza` = '', `inasistencia` = '' WHERE `id_empleado` = :id_empleado AND DATE(`fecha`) = :fecha_actual");

            $stmt->bindParam(':id_empleado', $id_empleado);
            $stmt->bindParam(':fecha_actual', $fecha_actual);

            if($stmt -> execute()){
                return "OK";
            } else {
                return "ERROR";
            }

        } else {
            // Si no existe un registro, se hace un insert
            $stmt = $conexion->prepare("INSERT INTO `asistencia_registro` (`id_empleado`, `asistencia`, `tardanza`, `inasistencia`, `fecha`) VALUES (:id_empleado, '', '', '', NOW())");

            $stmt->bindParam(':id_empleado', $id_empleado);

            if($stmt -> execute()){
                return "OK";
            } else {
                return "ERROR";
            }
            
        }

        
    }

    static public function mdlListaAsistenciasFecha($fecha) {
        // Conectar a la base de datos
        $stmt = Conexion::conectar()->prepare("SELECT '' as opcion, ar.id_registro_asistencia, ar.id_empleado , e.nombre, ar.asistencia, ar.tardanza, ar.inasistencia FROM asistencia_registro ar INNER JOIN empleados e WHERE DATE(ar.fecha)= :fecha AND e.id_empleado = ar.id_empleado ;");

        $stmt->bindParam(':fecha', $fecha);

        $stmt -> execute();

        return $stmt->fetchAll();
        
    }

    static public function mdlListaAsistenciasid($id_registro_asistencia) {
        // Conectar a la base de datos
        $stmt = Conexion::conectar()->prepare("SELECT ar.id_registro_asistencia, ar.id_empleado , e.nombre, ar.asistencia, ar.tardanza, ar.inasistencia FROM asistencia_registro ar INNER JOIN empleados e WHERE ar.id_registro_asistencia = :id_registro_asistencia AND e.id_empleado = ar.id_empleado ;");

        $stmt->bindParam(':id_registro_asistencia', $id_registro_asistencia);

        $stmt -> execute();

        return $stmt->fetchAll();
        
    }

    static public function mdlEditarNuevaAsistencia($id_registro_asistencia) {
        // Conectar a la base de datos
        $conexion = Conexion::conectar();
    
        // Si ya existe un registro, se hace un update
        $stmt = $conexion->prepare("UPDATE `asistencia_registro` SET `asistencia` = '1', `tardanza` = '', `inasistencia` = '' WHERE `id_registro_asistencia` = :id_registro_asistencia");

        $stmt->bindParam(':id_registro_asistencia', $id_registro_asistencia);

        if($stmt -> execute()){
            return "OK";
        } else {
            return "ERROR";
        }

    }

    static public function mdlEditarNuevaTardanza($id_registro_asistencia, $tardanza) {
        // Conectar a la base de datos
        $conexion = Conexion::conectar();
    
        // Si ya existe un registro, se hace un update
        $stmt = $conexion->prepare("UPDATE `asistencia_registro` SET `asistencia` = '', `tardanza` = :tardanza, `inasistencia` = '' WHERE `id_registro_asistencia` = :id_registro_asistencia");

        $stmt->bindParam(':id_registro_asistencia', $id_registro_asistencia);
        $stmt->bindParam(':tardanza', $tardanza);

        if($stmt -> execute()){
            return "OK";
        } else {
            return "ERROR";
        }

    }

    static public function mdlEditarNuevaFalta($id_registro_asistencia) {
        // Conectar a la base de datos
        $conexion = Conexion::conectar();

        // Si ya existe un registro, se hace un update
        $stmt = $conexion->prepare("UPDATE `asistencia_registro` SET `asistencia` = '', `tardanza` = '', `inasistencia` = '1' WHERE `id_registro_asistencia` = :id_registro_asistencia");

        $stmt->bindParam(':id_registro_asistencia', $id_registro_asistencia);

        if($stmt -> execute()){
            return "OK";
        } else {
            return "ERROR";
        }

    }

    static public function mdlEditarBorrarAsistencia($id_registro_asistencia) {
        // Conectar a la base de datos
        $conexion = Conexion::conectar();
    
        // Si ya existe un registro, se hace un update
        $stmt = $conexion->prepare("UPDATE `asistencia_registro` SET `asistencia` = '', `tardanza` = '', `inasistencia` = '' WHERE `id_registro_asistencia` = :id_registro_asistencia");

        $stmt->bindParam(':id_registro_asistencia', $id_registro_asistencia);

        if($stmt -> execute()){
            return "OK";
        } else {
            return "ERROR";
        }

    }

}
<?php

require_once "conexion.php";
require_once "../vendor/autoload.php";
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class CargaDescargaModelo{

    /*===================================================================
    REALIZAR LA CARGA MASIVA DE PRODUCTOS MEDIANTE ARCHIVO EXCEL
    ====================================================================*/
    static public function mdlCargaMasivaVentas($fileProductos){

        $nombreArchivo = $fileProductos['tmp_name'];

        $documento = IOFactory::load($nombreArchivo);

        $hojaventa_cabecera = $documento->getSheetByName("venta_cabecera");
        $numeroFilasventa_cabecera = $hojaventa_cabecera->getHighestDataRow(); 
        
        $hojaventa_detalle = $documento->getSheetByName("venta_detalle");
        $numeroFilasventa_detalle = $hojaventa_detalle->getHighestDataRow();


        $cabecerasRegistradas = 0;
        $detallesRegistrados = 0;

        //var_dump($numeroFilasventa_cabecera);
        //var_dump($numeroFilasventa_detalle);

        $stmt = Conexion::conectar()->prepare("DELETE FROM `cotizacion_cabecera` WHERE 1");

        if($stmt->execute()){
            $stmt = Conexion::conectar()->prepare("DELETE FROM `cotizacion_detalle` WHERE 1");

            if($stmt->execute()){
               
                for ($j=2; $j <= $numeroFilasventa_cabecera ; $j++) { 

                    $id_boleta             = $hojaventa_cabecera->getCell("A".$j);
                    $nro_boleta            = $hojaventa_cabecera->getCell("B".$j);
                    $Cliente               = $hojaventa_cabecera->getCell("C".$j);
                    $descripcion           = $hojaventa_cabecera->getCell("D".$j);
                    $subtotal              = $hojaventa_cabecera->getCell("E".$j);
                    $igv                   = $hojaventa_cabecera->getCell("F".$j);
                    $total_venta           = $hojaventa_cabecera->getCell("G".$j);
                    $Estado                = $hojaventa_cabecera->getCell("H".$j);
                    $fecha_venta           = $hojaventa_cabecera->getCell("I".$j);
                    $fecha_salida          = $hojaventa_cabecera->getCell("J".$j);
                    $fecha_entrega         = $hojaventa_cabecera->getCell("K".$j);
                    $fecha_regreso         = $hojaventa_cabecera->getCell("L".$j);
                    $mensajero             = $hojaventa_cabecera->getCell("M".$j); 
                    $deuda                 = $hojaventa_cabecera->getCell("N".$j);
                    $Vuelto                = $hojaventa_cabecera->getCell("O".$j);
                    $Dinero_Dado           = $hojaventa_cabecera->getCell("P".$j);
                    $registro              = $hojaventa_cabecera->getCell("Q".$j);
                    $Persona_Dinero        = $hojaventa_cabecera->getCell("R".$j);
                    $Tipo_pago             = $hojaventa_cabecera->getCell("S".$j);             

                    if(!empty($id_boleta)){
                        $stmt = Conexion::conectar()->prepare("INSERT INTO `cotizacion_cabecera`(`id_boleta`, `nro_boleta`, `Cliente`, `descripcion`, `subtotal`, `igv`, `total_venta`, `Estado`, `fecha_venta`, `fecha_salida`, `fecha_entrega`, `fecha_regreso`, `mensajero`, `deuda`, `Vuelto`, `Dinero_Dado`, `registro`, `Persona_Dinero`, `Tipo_pago`) 
                                                                VALUES (:id_boleta,
                                                                        :nro_boleta,
                                                                        :Cliente,
                                                                        :descripcion,
                                                                        :subtotal,
                                                                        :igv,
                                                                        :total_venta,
                                                                        :Estado,
                                                                        :fecha_venta,
                                                                        :fecha_salida,
                                                                        :fecha_entrega,
                                                                        :fecha_regreso,
                                                                        :mensajero,
                                                                        :deuda,
                                                                        :Vuelto,
                                                                        :Dinero_Dado,
                                                                        :registro,
                                                                        :Persona_Dinero,
                                                                        :Tipo_pago);");

                        $stmt -> bindParam(":id_boleta",$id_boleta,PDO::PARAM_STR);
                        $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);
                        $stmt -> bindParam(":Cliente",$Cliente,PDO::PARAM_STR);
                        $stmt -> bindParam(":descripcion",$descripcion,PDO::PARAM_STR);
                        $stmt -> bindParam(":subtotal",$subtotal,PDO::PARAM_STR);
                        $stmt -> bindParam(":igv",$igv,PDO::PARAM_STR);
                        $stmt -> bindParam(":total_venta",$total_venta,PDO::PARAM_STR);
                        $stmt -> bindParam(":Estado",$Estado,PDO::PARAM_STR);
                        $stmt -> bindParam(":fecha_venta",$fecha_venta,PDO::PARAM_STR);
                        $stmt -> bindParam(":fecha_salida",$fecha_salida,PDO::PARAM_STR);
                        $stmt -> bindParam(":fecha_entrega",$fecha_entrega,PDO::PARAM_STR);
                        $stmt -> bindParam(":fecha_regreso",$fecha_regreso,PDO::PARAM_STR);
                        $stmt -> bindParam(":mensajero",$mensajero,PDO::PARAM_STR);
                        $stmt -> bindParam(":deuda",$deuda,PDO::PARAM_STR);
                        $stmt -> bindParam(":Vuelto",$Vuelto,PDO::PARAM_STR);
                        $stmt -> bindParam(":Dinero_Dado",$Dinero_Dado,PDO::PARAM_STR);
                        $stmt -> bindParam(":registro",$registro,PDO::PARAM_STR);
                        $stmt -> bindParam(":Persona_Dinero",$Persona_Dinero,PDO::PARAM_STR);
                        $stmt -> bindParam(":Tipo_pago",$Tipo_pago,PDO::PARAM_STR);
                        
                        
                        

                        if($stmt->execute()){
                            $cabecerasRegistradas = $cabecerasRegistradas + 1;
                            
                        }else{
                            $cabecerasRegistradas = 0;
                        }
                    }
                }



                if($cabecerasRegistradas > 0){

                    //CICLO FOR PARA REGISTROS DE PRODUCTOS
                    for ($i=2; $i <= $numeroFilasventa_detalle ; $i++) { 


                        $id                     = $hojaventa_detalle->getCell("A".$i);
                        $nro_boleta             = $hojaventa_detalle->getCell("B".$i);
                        $codigo_producto        = $hojaventa_detalle->getCell("C".$i);
                        $cantidad               = $hojaventa_detalle->getCell("D".$i);
                        $medida                 = $hojaventa_detalle->getCell("E".$i);
                        $total_venta            = $hojaventa_detalle->getCell("F".$i);
                        $fecha_venta            = $hojaventa_detalle->getCell("G".$i);


                        if(!empty($codigo_producto)){
                            $stmt = Conexion::conectar()->prepare("INSERT INTO `cotizacion_detalle`(`id`, `nro_boleta`, `codigo_producto`, `cantidad`, `medida`, `total_venta`, `fecha_venta`) 
                                                                    VALUES (:id, :nro_boleta, :codigo_producto, :cantidad, :medida, :total_venta, :fecha_venta);");
                            
                            $stmt -> bindParam(":id",$id,PDO::PARAM_STR);
                            $stmt -> bindParam(":nro_boleta",$nro_boleta,PDO::PARAM_STR);
                            $stmt -> bindParam(":codigo_producto",$codigo_producto,PDO::PARAM_STR);
                            $stmt -> bindParam(":cantidad",$cantidad,PDO::PARAM_STR);
                            $stmt -> bindParam(":medida",$medida,PDO::PARAM_STR);
                            $stmt -> bindParam(":total_venta",$total_venta,PDO::PARAM_STR);
                            $stmt -> bindParam(":fecha_venta",$fecha_venta,PDO::PARAM_STR);


                            if($stmt->execute()){
                                $detallesRegistrados = $detallesRegistrados + 1;
                                
                            }else{
                                $detallesRegistrados = 0;
                            }
                        }
                    }

                    
                }
                //var_dump($cabecerasRegistradas);
                //var_dump($detallesRegistrados);

                
                $respuesta["ventas_cabecera"] = $cabecerasRegistradas;
                $respuesta["ventas_detalle"] = $detallesRegistrados;

                //var_dump($respuesta);



                return $respuesta;
            }
            
        }

       
    }

    static public function mdlDescarga($ventas_hasta,$ventas_desde){
    
        $stmt = Conexion::conectar()->prepare('SELECT `id_boleta`, `nro_boleta`, `Cliente`, `descripcion`, `subtotal`, `igv`, `total_venta`, `Estado`, `fecha_venta`, `fecha_salida`, `fecha_entrega`, `fecha_regreso`, `mensajero`, `deuda`, `Vuelto`, `Dinero_Dado`, `registro`, `Persona_Dinero`, `Tipo_pago` 
                                                    FROM `venta_cabecera` WHERE DATE(`fecha_venta`) BETWEEN :ventas_desde AND :ventas_hasta');

        $stmt->bindParam(":ventas_hasta", $ventas_hasta, PDO::PARAM_STR);

        $stmt->bindParam(":ventas_desde", $ventas_desde, PDO::PARAM_STR);

        if($stmt->execute()){

            //GUARDAMOS LA IMAGEN EN LA CARPETA
            return $stmt->fetchAll();

        }else{

            return "error";
        
        }
    }

    static public function mdlDescarga2($ventas_hasta,$ventas_desde){
    
        $stmt = Conexion::conectar()->prepare('SELECT `id`, `nro_boleta`, `codigo_producto`, `cantidad`, `medida`, `total_venta`, `fecha_venta` FROM `venta_detalle` WHERE DATE(`fecha_venta`) BETWEEN :ventas_desde AND :ventas_hasta');

        $stmt->bindParam(":ventas_hasta", $ventas_hasta, PDO::PARAM_STR);

        $stmt->bindParam(":ventas_desde", $ventas_desde, PDO::PARAM_STR);

        if($stmt->execute()){

            //GUARDAMOS LA IMAGEN EN LA CARPETA
            return $stmt->fetchAll();

        }else{

            return "error";
        
        }
    }

    static public function mdlBorrar($ventas_hasta,$ventas_desde){
    
        $stmt = Conexion::conectar()->prepare('DELETE FROM `venta_detalle` WHERE DATE(`fecha_venta`) BETWEEN :ventas_desde AND :ventas_hasta');

        $stmt->bindParam(":ventas_hasta", $ventas_hasta, PDO::PARAM_STR);

        $stmt->bindParam(":ventas_desde", $ventas_desde, PDO::PARAM_STR);

        if($stmt->execute()){

            $stmt = Conexion::conectar()->prepare('DELETE FROM `venta_cabecera` WHERE DATE(`fecha_venta`) BETWEEN :ventas_desde AND :ventas_hasta');

            $stmt->bindParam(":ventas_hasta", $ventas_hasta, PDO::PARAM_STR);

            $stmt->bindParam(":ventas_desde", $ventas_desde, PDO::PARAM_STR);


            if($stmt->execute()){

               return "ok";
    
    
                
    
            }else{
    
                return "error";
            
            }

        }else{

            return "error";
        
        }
    }

    static public function mdlCargarDetalles(){
    
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
                                                        
                                                    FROM cotizacion_cabecera vc 
                                                    GROUP BY descripcion, Cliente, Estado
                                                    ORDER BY nro_boleta ASC;");
        
    
            $stmt->execute();
    
            return $stmt->fetchAll();
            
        } catch (Exception $e) {
            return 'Excepción capturada: ' . $e->getMessage() . "\n";
        }
        
        // No es necesario establecer $stmt como null aquí
    }

}
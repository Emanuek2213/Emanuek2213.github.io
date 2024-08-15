<?php

require_once "conexion.php";
require_once "../vendor/autoload.php";
use PhpOffice\PhpSpreadsheet\IOFactory;


class ClientesModelo{
     /*===================================================================
    LISTAR NOMBRE DE CLIENTES PARA INPUT DE AUTO COMPLETADO
    ====================================================================*/
    static public function mdlListarNombreClientes(){

        $stmt = Conexion::conectar()->prepare("SELECT 
                                                CONCAT(
                                                    c.Identificacion, ' / ', c.Nombres, ' / ',c.Telefono, ' / ', c.Direccion
                                                ) as descripcion_cliente
                                            FROM clientes_nombre c;");

        $stmt -> execute();

        return $stmt->fetchAll();
    }

    static public function mdlDarClientes(){

        // $stmt = Conexion::conectar()->prepare("SELECT 
        //                                         '' as acciones,
        //                                         (@contador := @contador + 1) AS id,
        //                                         c.Identificacion,
        //                                         c.Nombres,
        //                                         c.Razon,
        //                                         c.Direccion
        //                                     FROM (SELECT @contador := 0) AS init, clientes_nombre c;");

        $stmt = Conexion::conectar()->prepare("SELECT 
                                                '' as acciones,
                                                id_cliente AS id,
                                                c.Identificacion,
                                                c.Nombres,
                                                c.Razon,
                                                c.Direccion,
                                                c.Perfil
                                            FROM  clientes_nombre c WHERE 1;");

        $stmt -> execute();

        return $stmt->fetchAll();
    }

    static public function mdlDarProveedores(){

        $stmt = Conexion::conectar()->prepare("SELECT 
                                                '' as acciones,
                                                id_cliente AS id,
                                                c.Identificacion,
                                                c.Nombres,
                                                c.Razon,
                                                c.Direccion,
                                                c.Perfil
                                            FROM  clientes_nombre c WHERE 1 ORDER BY c.Tipo DESC;");

        $stmt -> execute();

        return $stmt->fetchAll();
    }

    static public function mdlBuscarCliente($idCliente){

        $stmt = Conexion::conectar()->prepare("SELECT 
                                                c.Identificacion,
                                                c.Nombres,
                                                c.Razon,
                                                C.Direccion,
                                                c.Perfil
                                            FROM clientes_nombre c WHERE c.id_cliente = :idCliente");

        $stmt -> bindParam(":idCliente",$idCliente,PDO::PARAM_INT);
        $stmt -> execute();

        return $stmt->fetchAll();
    }

    static public function mdlBuscarClientexProveedor($Proveedor){

        // var_dump($Proveedor);

        $stmt = Conexion::conectar()->prepare("SELECT 
                                                c.Identificacion,
                                                c.Nombres,
                                                c.Razon,
                                                C.Direccion,
                                                c.Perfil
                                            FROM clientes_nombre c WHERE c.Nombres = :Proveedor");

        $stmt -> bindParam(":Proveedor",$Proveedor,PDO::PARAM_STR);
        $stmt -> execute();

        return $stmt->fetchAll();
    }


    static public function mdlActualizarTable($senal, $Nombres, $Telefono, $Identificacion, $Direccion, $Tipo){

        if($senal == 0){

            $stmt = Conexion::conectar()->prepare(" INSERT INTO clientes_nombre (id_cliente, Nombres, Identificacion, Direccion, Razon,Tipo)
                VALUES ((SELECT COALESCE(MAX(cn.id_cliente), 0) + 1 FROM clientes_nombre cn), :Nombres, :Identificacion, :Direccion, :Razon,:Tipo);");

                $stmt -> bindParam(":Nombres",$Nombres,PDO::PARAM_STR);
                $stmt -> bindParam(":Razon",$Telefono,PDO::PARAM_STR);
                $stmt -> bindParam(":Identificacion",$Identificacion,PDO::PARAM_STR);
                $stmt -> bindParam(":Direccion",$Direccion,PDO::PARAM_STR);
                $stmt -> bindParam(":Tipo",$Tipo,PDO::PARAM_STR);

                if($stmt -> execute()){
                    return "OK";
                } else {
                    return "ERROR";
                }

        }else{

            $nombre = Conexion::conectar()->prepare("SELECT cn.Nombres FROM clientes_nombre cn where cn.id_cliente=:senal");

            $nombre -> bindParam(":senal",$senal,PDO::PARAM_STR);
    
            $nombre->execute();
    
            $resultado = $nombre->fetch(PDO::FETCH_ASSOC);

            if ($resultado) {

                $nombreCliente = $resultado['Nombres'];
                
                $stmt = Conexion::conectar()->prepare("UPDATE clientes_nombre cn SET 
                                                            cn.Nombres=:Nombres,
                                                            cn.Razon=:Razon,
                                                            cn.Direccion=:Direccion,
                                                            cn.Identificacion = :Identificacion 
                                                            WHERE cn.id_cliente=:senal");

                $stmt -> bindParam(":Nombres",$Nombres,PDO::PARAM_STR);
                $stmt -> bindParam(":Razon",$Telefono,PDO::PARAM_STR);
                $stmt -> bindParam(":Identificacion",$Identificacion,PDO::PARAM_STR);
                $stmt -> bindParam(":Direccion",$Direccion,PDO::PARAM_STR);
                $stmt -> bindParam(":senal",$senal,PDO::PARAM_STR);

                if($stmt -> execute()){
                    $stmt = Conexion::conectar()->prepare("UPDATE cliente_producto c SET 
                                                            c.id_cliente=:Nombres
                                                            WHERE c.id_cliente=:nombre");

                    $stmt -> bindParam(":Nombres",$Nombres,PDO::PARAM_STR);
                    $stmt -> bindParam(":nombre",$nombreCliente,PDO::PARAM_STR);

                    if($stmt -> execute()){
                        $stmt = Conexion::conectar()->prepare("UPDATE venta_cabecera c SET 
                                                                c.Cliente=:Nombres
                                                                WHERE c.Cliente=:nombre");
        
                        $stmt -> bindParam(":Nombres",$Nombres,PDO::PARAM_STR);
                        $stmt -> bindParam(":nombre",$nombreCliente,PDO::PARAM_STR);

                        if($stmt -> execute()){
                            return "OK";
                        } else {
                            return "ERROR";
                        }

                    } else {
                        return "ERROR";
                    }

                } else {
                    return "ERROR";
                }

            }

        }

        // $nombre = Conexion::conectar()->prepare("SELECT cn.Nombres FROM clientes_nombre cn where cn.id_cliente=:senal");

        // $nombre -> bindParam(":senal",$senal,PDO::PARAM_STR);

        // $nombre->execute();

        // $resultado = $nombre->fetch(PDO::FETCH_ASSOC);

        // if ($resultado) {

        //     $nombreCliente = $resultado['Nombres'];

        //     if($senal == 0){
        //         $stmt = Conexion::conectar()->prepare(" INSERT INTO clientes_nombre (id_cliente, Nombres, Identificacion, Direccion, Razon)
        //         VALUES ((SELECT COALESCE(MAX(cn.id_cliente), 0) + 1 FROM clientes_nombre cn), :Nombres, :Identificacion, :Direccion, :Razon);");

        //         $stmt -> bindParam(":Nombres",$Nombres,PDO::PARAM_STR);
        //         $stmt -> bindParam(":Razon",$Telefono,PDO::PARAM_STR);
        //         $stmt -> bindParam(":Identificacion",$Identificacion,PDO::PARAM_STR);
        //         $stmt -> bindParam(":Direccion",$Direccion,PDO::PARAM_STR);

        //         if($stmt -> execute()){
        //             return "OK";
        //         } else {
        //             return "ERROR";
        //         }
                
        //     }else{
        //         $stmt = Conexion::conectar()->prepare("UPDATE clientes_nombre cn SET 
        //                                                     cn.Nombres=:Nombres,
        //                                                     cn.Razon=:Razon,
        //                                                     cn.Direccion=:Direccion,
        //                                                     cn.Identificacion = :Identificacion 
        //                                                     WHERE cn.id_cliente=:senal");

        //         $stmt -> bindParam(":Nombres",$Nombres,PDO::PARAM_STR);
        //         $stmt -> bindParam(":Razon",$Telefono,PDO::PARAM_STR);
        //         $stmt -> bindParam(":Identificacion",$Identificacion,PDO::PARAM_STR);
        //         $stmt -> bindParam(":Direccion",$Direccion,PDO::PARAM_STR);
        //         $stmt -> bindParam(":senal",$senal,PDO::PARAM_STR);

        //         if($stmt -> execute()){
        //             $stmt = Conexion::conectar()->prepare("UPDATE cliente_producto c SET 
        //                                                     c.id_cliente=:Nombres
        //                                                     WHERE c.id_cliente=:nombre");

        //             $stmt -> bindParam(":Nombres",$Nombres,PDO::PARAM_STR);
        //             $stmt -> bindParam(":nombre",$nombreCliente,PDO::PARAM_STR);

        //             if($stmt -> execute()){
        //                 $stmt = Conexion::conectar()->prepare("UPDATE venta_cabecera c SET 
        //                                                         c.Cliente=:Nombres
        //                                                         WHERE c.Cliente=:nombre");
        
        //                 $stmt -> bindParam(":Nombres",$Nombres,PDO::PARAM_STR);
        //                 $stmt -> bindParam(":nombre",$nombreCliente,PDO::PARAM_STR);

        //                 if($stmt -> execute()){
        //                     return "OK";
        //                 } else {
        //                     return "ERROR";
        //                 }

        //             } else {
        //                 return "ERROR";
        //             }

        //         } else {
        //             return "ERROR";
        //         }
                
        //     }
            
            
        // }
    }

    static public function mdlDarCliente($idCliente){

        $stmt = Conexion::conectar()->prepare("SELECT 
                                                c.Nombres
                                            FROM clientes_nombre c WHERE c.id_cliente = :idCliente");

        $stmt -> bindParam(":idCliente",$idCliente,PDO::PARAM_INT);
        $stmt -> execute();

        return $stmt->fetchAll();
    }

    static public function mdlEliminarHistorial($NombreCliente){

        $stmt = Conexion::conectar()->prepare("DELETE FROM cliente_producto WHERE id_cliente = :NombreCliente");

        $stmt -> bindParam(":NombreCliente",$NombreCliente,PDO::PARAM_STR);

        if($stmt -> execute()){
            return "ok";
        }

    }

    static public function mdlDarBoleta($NombreCliente){

        $stmt = Conexion::conectar()->prepare("SELECT  `nro_boleta` FROM `venta_cabecera` WHERE `Cliente` = :NombreCliente");

        $stmt -> bindParam(":NombreCliente",$NombreCliente,PDO::PARAM_STR);

        $stmt -> execute();

        return $stmt->fetchAll();
    }

    static public function mdlEliminarProductos($idBoleta,$Comentario){

        $stmt = Conexion::conectar()->prepare(" INSERT INTO `eliminada_cabecera`(`id_boleta`, `nro_boleta`, `Cliente`, `descripcion`, `subtotal`, `igv`, 
                                                        `total_venta`, `Estado`, `fecha_venta`, `fecha_salida`, `fecha_entrega`,`fecha_regreso`, 
                                                        `mensajero`, `deuda`, `Vuelto`, `Dinero_Dado`, `registro`, `Persona_Dinero`, `Tipo_pago`, `Comentario`) 
                                                SELECT  vc.id_boleta, vc.nro_boleta, vc.Cliente, vc.descripcion, vc.subtotal, vc.igv, vc.total_venta, vc.Estado, vc.fecha_venta, 
                                                vc.fecha_salida, vc.fecha_entrega, vc.fecha_regreso, vc.mensajero, vc.deuda, vc.Vuelto, vc.Dinero_Dado, vc.registro, 
                                                vc.Persona_Dinero, vc.Tipo_pago ,:Comentario as Comentario
                                                FROM venta_cabecera vc WHERE vc.nro_boleta = :idBoleta;");

        $stmt -> bindParam(":idBoleta",$idBoleta,PDO::PARAM_STR);
        $stmt -> bindParam(":Comentario",$Comentario,PDO::PARAM_STR);

        if($stmt -> execute()){

            $stmt = Conexion::conectar()->prepare(" INSERT INTO `eliminada_detalle`(`id`, `nro_boleta`, `codigo_producto`, `cantidad`, `medida`, `total_venta`, `fecha_venta`) 
                                                    SELECT vd.id, vd.nro_boleta, vd.codigo_producto, vd.cantidad, vd.medida, vd.total_venta, vd.fecha_venta 
                                                    FROM venta_detalle vd WHERE vd.nro_boleta =:idBoleta;");

            $stmt -> bindParam(":idBoleta",$idBoleta,PDO::PARAM_STR);

            if($stmt -> execute()){

                $stmt = Conexion::conectar()->prepare("DELETE FROM venta_cabecera WHERE nro_boleta = :idBoleta");

                $stmt -> bindParam(":idBoleta",$idBoleta,PDO::PARAM_STR);

                if($stmt -> execute()){

                    $stmt = Conexion::conectar()->prepare("DELETE FROM venta_detalle WHERE nro_boleta = :idBoleta");

                    $stmt -> bindParam(":idBoleta",$idBoleta,PDO::PARAM_STR);

                    if($stmt -> execute()){

                        return "ok";
            
                    }

                }
    
            }

        }

    }

    static public function mdlEliminarProductosCompra($idBoleta){

        $stmt = Conexion::conectar()->prepare("DELETE FROM compra_cabecera WHERE nro_boleta = :idBoleta");

        $stmt -> bindParam(":idBoleta",$idBoleta,PDO::PARAM_STR);

        if($stmt -> execute()){

            $stmt = Conexion::conectar()->prepare("DELETE FROM compra_detalle WHERE nro_boleta = :idBoleta");

            $stmt -> bindParam(":idBoleta",$idBoleta,PDO::PARAM_STR);

            if($stmt -> execute()){

                return "ok";
    
            }

        }

    }

    static public function mdlEliminarCliente($idCliente){

        $stmt = Conexion::conectar()->prepare("DELETE FROM clientes_nombre WHERE id_cliente = :idCliente");
        $stmt->bindParam(":idCliente", $idCliente, PDO::PARAM_INT);
        $stmt->execute();
        
        // Recuperar todas las filas restantes después de eliminar
        $stmt = Conexion::conectar()->prepare("SELECT * FROM clientes_nombre");
        $stmt->execute();
        $filasRestantes = $stmt->fetchAll();

        // Recorrer las filas restantes y actualizar el número de id_cliente
        foreach ($filasRestantes as $indice => $fila) {
            // El índice + 1 se usará como nuevo número id_cliente
            $nuevoID = $indice + 1;

            // Actualizar la columna id_cliente con el nuevo número
            $stmt = Conexion::conectar()->prepare("UPDATE clientes_nombre SET id_cliente = :nuevoID WHERE Nombres = :nombre");
            $stmt->bindParam(":nuevoID", $nuevoID, PDO::PARAM_INT);
            $stmt->bindParam(":nombre", $fila['Nombres'], PDO::PARAM_STR);
            $stmt->execute();
        }

        // Devolver las filas actualizadas si es necesario
        return $filasRestantes;

    }

    static public function mdlCambiarDatos($numero,$RazonSocial,$RazonComercial,$Identificacion,$Direccion,$Telefono,$Detalles,$Correo,$Cuenta){

            $nombre = Conexion::conectar()->prepare("SELECT cn.Nombres FROM clientes_nombre cn where cn.id_cliente=:numero");

            $nombre -> bindParam(":numero",$numero,PDO::PARAM_STR);
    
            $nombre->execute();
    
            $resultado = $nombre->fetch(PDO::FETCH_ASSOC);

            if ($resultado) {

                $nombreCliente = $resultado['Nombres'];
                
                $stmt = Conexion::conectar()->prepare("UPDATE clientes_nombre SET   Nombres= :RazonComercial
                                                                            ,Razon= :RazonSocial
                                                                            ,Identificacion= :Identificacion
                                                                            ,Direccion= :Direccion
                                                                            ,Telefono= :Telefono 
                                                                            ,Detalle= :Detalles 
                                                                            ,Correo= :Correo 
                                                                            ,Tipo= :Cuenta 
                                                                            
                                                                            WHERE id_cliente = :numero");

                $stmt -> bindParam(":numero",$numero,PDO::PARAM_STR);
                $stmt -> bindParam(":RazonSocial",$RazonSocial,PDO::PARAM_STR);
                $stmt -> bindParam(":RazonComercial",$RazonComercial,PDO::PARAM_STR);
                $stmt -> bindParam(":Identificacion",$Identificacion,PDO::PARAM_STR);
                $stmt -> bindParam(":Direccion",$Direccion,PDO::PARAM_STR);
                $stmt -> bindParam(":Telefono",$Telefono,PDO::PARAM_STR);
                $stmt -> bindParam(":Detalles",$Detalles,PDO::PARAM_STR);
                $stmt -> bindParam(":Correo",$Correo,PDO::PARAM_STR);
                $stmt -> bindParam(":Cuenta",$Cuenta,PDO::PARAM_STR);

                if($stmt -> execute()){
                    $stmt = Conexion::conectar()->prepare("UPDATE cliente_producto c SET 
                                                            c.id_cliente=:RazonComercial
                                                            WHERE c.id_cliente=:nombre");

                    $stmt -> bindParam(":RazonComercial",$RazonComercial,PDO::PARAM_STR);
                    $stmt -> bindParam(":nombre",$nombreCliente,PDO::PARAM_STR);

                    if($stmt -> execute()){
                        $stmt = Conexion::conectar()->prepare("UPDATE venta_cabecera c SET 
                                                                c.Cliente=:RazonComercial
                                                                WHERE c.Cliente=:nombre");
        
                        $stmt -> bindParam(":RazonComercial",$RazonComercial,PDO::PARAM_STR);
                        $stmt -> bindParam(":nombre",$nombreCliente,PDO::PARAM_STR);

                        if($stmt -> execute()){

                            $stmt2 = Conexion::conectar()->prepare("UPDATE compra_cabecera co SET co.Proveedor=:RazonComercial WHERE co.Proveedor=:nombre");
                            $stmt2->bindParam(':RazonComercial', $RazonComercial,PDO::PARAM_STR);
                            $stmt2->bindParam(':nombre', $nombreCliente,PDO::PARAM_STR);


                            if($stmt2 -> execute()){
                                return "OK";
                            } else {
                                return "ERROR";
                            }

                        } else {
                            return "ERROR";
                        }

                    } else {
                        return "ERROR";
                    }

                } else {
                    return "ERROR";
                }

            }
    }

    static public function mdlVerRepetido($nombre,$Ident,$Direccion){

        $caso = 0;

        $stmt = Conexion::conectar()->prepare("SELECT * FROM `clientes_nombre` WHERE `Nombres` = :nombre");

        $stmt -> bindParam(":nombre",$nombre,PDO::PARAM_STR);
        $stmt->execute();
        $Clientes_iguales = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (count($Clientes_iguales) > 0) {
            $caso = $caso + 1 ; // Incrementar $caso si hay resultados
        }

        $stmt2 = Conexion::conectar()->prepare("SELECT * FROM `clientes_nombre` WHERE `Identificacion` = :Ident");

        $stmt2 -> bindParam(":Ident",$Ident,PDO::PARAM_STR);
        $stmt2->execute();
        $Clientes_iguales2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);

        if (count($Clientes_iguales2) > 0) {
            $caso = $caso + 2 ; // Incrementar $caso si hay resultados
        }

        $stmt3 = Conexion::conectar()->prepare("SELECT * FROM `clientes_nombre` WHERE `Direccion` = :Direccion");

        $stmt3 -> bindParam(":Direccion",$Direccion,PDO::PARAM_STR);
        $stmt3 ->execute();
        $Clientes_iguales3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);

        if (count($Clientes_iguales3) > 0) {
            $caso = $caso + 4 ; // Incrementar $caso si hay resultados
        }

        return $caso;
    }

    static public function mdlActualizarCliente($table, $data, $id, $nameId,$imagen){        

        $set = "";

        foreach ($data as $key => $value) {
            
            $set .= $key." = :".$key.",";
                
        }

        $set = substr($set, 0, -1);

        //var_dump($set);

        $stmt = Conexion::conectar()->prepare("UPDATE $table SET $set WHERE $nameId = :$nameId");

        foreach ($data as $key => $value) {
            
            $stmt->bindParam(":".$key, $data[$key], PDO::PARAM_STR);
            
        }		

        $stmt->bindParam(":".$nameId, $id, PDO::PARAM_INT);

        if($stmt->execute()){

            //GUARDAMOS LA IMAGEN EN LA CARPETA
            if ($imagen) {
                $guardarImagen = new ClientesModelo();
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

    static public function mdlListarClientes(){

        $stmt = Conexion::conectar()->prepare("SELECT `id_cliente`, `Nombres`, `Razon`, `Identificacion`, `Direccion`, `Telefono`, `Detalle`, `Correo`, `Tipo`, `Catalogo`, `Perfil` FROM `clientes_nombre` WHERE 1");

        $stmt -> execute();

        $clientes = $stmt->fetchAll();

        $ClientesData = array();

        foreach($clientes as $cliente){
            $Identificacion = $cliente["Identificacion"];
            $Nombres = $cliente["Nombres"];
            $Razon = $cliente["Razon"];

            $data["id"] = $cliente["id_cliente"];
            $data["value"] = $Nombres;
            $data["label"] = '
            <a href = "javascript:void(0);" class = "d-flex" style = "width:100% !important; ">
                <div class = "d-flex ml-4 flex-column">
                    <span class = "text-sm"> Identificacion: ' .$Identificacion .'/ - / Razon: '. $Razon . '</span>
                    <span class = "text-sm"> Cliente: <strong> ' .$Nombres . '</strong></span>
                </div>
            </a>
            ';

            array_push($ClientesData, $data);
        }

        return $ClientesData;

    }
}

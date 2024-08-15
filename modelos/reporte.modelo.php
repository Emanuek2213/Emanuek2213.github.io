<?php

require_once "conexion.php";

class ReporteModelo{

    static public function mdlGuardarReporte($Agente,$Cuenta,$Monto,$Fecha,$Diferencia){
        
        $stmt = Conexion::conectar()->prepare("INSERT INTO arqueo_caja(Agente, Cuenta, Monto, Fecha, Diferencia) 
                                                                VALUES  (:Agente, :Cuenta, :Monto, :Fecha,:Diferencia)");
        
        $stmt -> bindParam(":Diferencia", $Diferencia , PDO::PARAM_STR);
        $stmt -> bindParam(":Monto", $Monto , PDO::PARAM_STR);
        $stmt -> bindParam(":Fecha", $Fecha , PDO::PARAM_STR);
        $stmt -> bindParam(":Agente", $Agente , PDO::PARAM_STR);
        $stmt -> bindParam(":Cuenta", $Cuenta , PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            return "error";

        }

        
    
    }

    static public function mdlColumnasExcel(){
        
        $stmt = Conexion::conectar()->prepare("SELECT DISTINCT CONCAT(Agente, ' ', Cuenta) AS Concatenacion
                                                FROM arqueo_caja
                                                ORDER BY Concatenacion ASC;"); 

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    
    }

    static public function mdlFilasExcel(){
        
        $stmt = Conexion::conectar()->prepare("SELECT DISTINCT Fecha
                                                FROM arqueo_caja
                                                ORDER BY Fecha ASC;"); 

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    
    }

    static public function mdlRellenoExcel($Agente,$Cuenta,$Fecha){
        
        $stmt = Conexion::conectar()->prepare("SELECT Monto
                                                FROM arqueo_caja
                                                WHERE Fecha = :Fecha AND Agente = :Agente AND Cuenta = :Cuenta ");
                                                
        $stmt -> bindParam(":Fecha", $Fecha , PDO::PARAM_STR);
        $stmt -> bindParam(":Agente", $Agente , PDO::PARAM_STR);
        $stmt -> bindParam(":Cuenta", $Cuenta , PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    
    }
    
    static public function mdlConsultaNumero($tipo){
        
        $stmt = Conexion::conectar()->prepare("SELECT `id_ultimo`, `tipo`, `serie`, `numero` FROM `numeros_nubefact` WHERE `tipo` = :tipo;");
                                                
        $stmt -> bindParam(":tipo", $tipo , PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    
    }

    static public function mdlAumentarNumero($tipo){
        
        $stmt = Conexion::conectar()->prepare("UPDATE `numeros_nubefact` SET `numero`= `numero`+ 1 WHERE `tipo` = :tipo;");
                                                
        $stmt -> bindParam(":tipo", $tipo , PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            return "error";

        }
    
    }

    static public function mdlCambiarNumero($tipo,$numero){
        
        $stmt = Conexion::conectar()->prepare("UPDATE `numeros_nubefact` SET `numero`= :numero WHERE `tipo` = :tipo;");
                                                
        $stmt -> bindParam(":tipo", $tipo , PDO::PARAM_STR);
        $stmt -> bindParam(":numero", $numero , PDO::PARAM_STR);


        if($stmt->execute()){

            return "ok";

        }else{

            return "error";

        }
    
    }

    static public function mdlRegistrarFactura($nro_boleta,$numero_factura,$link){
        
        $stmt = Conexion::conectar()->prepare("UPDATE `venta_cabecera` SET `numero_factura`= :numero_factura,`link`= :link WHERE `nro_boleta` = :nro_boleta;");
                                                
        $stmt -> bindParam(":nro_boleta", $nro_boleta , PDO::PARAM_STR);
        $stmt -> bindParam(":numero_factura", $numero_factura , PDO::PARAM_STR);
        $stmt -> bindParam(":link", $link , PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            return "error";

        }
    
    }

    static public function mdlConsultarFactura($nro_boleta){
        
        $stmt = Conexion::conectar()->prepare("SELECT  `numero_factura`, `link` FROM `venta_cabecera` WHERE `nro_boleta` = :nro_boleta;");
                                                
        $stmt -> bindParam(":nro_boleta", $nro_boleta , PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    
    }

    static public function mdlConsultarDNI($Nombres){
        
        $stmt = Conexion::conectar()->prepare("SELECT `id_cliente`, `Nombres`, `Razon`, `Identificacion`, `Direccion`, `Telefono`, `Detalle`, `Correo`, `Tipo`, `Catalogo`, `Perfil` FROM `clientes_nombre` WHERE `Nombres` = :Nombres;");
                                                
        $stmt -> bindParam(":Nombres", $Nombres , PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    
    }
}
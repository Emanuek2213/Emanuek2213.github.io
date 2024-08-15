<?php

require_once "../modelos/reporte.modelo.php";

class ReporteControlador{

    static public function ctrGuardarReporte($Agente,$Cuenta,$Monto,$Fecha,$Diferencia){
        $TotalComision = ReporteModelo::mdlGuardarReporte($Agente,$Cuenta,$Monto,$Fecha,$Diferencia);
        return $TotalComision;
    }

    static public function ctrColumnasExcel(){
        $TotalComision = ReporteModelo::mdlColumnasExcel();
        return $TotalComision;
    }

    static public function ctrFilasExcel(){
        $TotalComision = ReporteModelo::mdlFilasExcel();
        return $TotalComision;
    }

    static public function ctrRellenoExcel($Agente,$Cuenta,$Fecha){
        $TotalComision = ReporteModelo::mdlRellenoExcel($Agente,$Cuenta,$Fecha);
        return $TotalComision;
    }

    static public function ctrConsultaNumero($tipo){
        $TotalComision = ReporteModelo::mdlConsultaNumero($tipo);
        return $TotalComision;
    }

    static public function ctrAumentarNumero($tipo){
        $TotalComision = ReporteModelo::mdlAumentarNumero($tipo);
        return $TotalComision;
    }

    static public function ctrCambiarNumero($tipo,$numero){
        $TotalComision = ReporteModelo::mdlCambiarNumero($tipo,$numero);
        return $TotalComision;
    }

    static public function ctrRegistrarFactura($nro_boleta,$numero_factura,$link){
        $TotalComision = ReporteModelo::mdlRegistrarFactura($nro_boleta,$numero_factura,$link);
        return $TotalComision;
    }

    static public function ctrConsultarFactura($nro_boleta){
        $TotalComision = ReporteModelo::mdlConsultarFactura($nro_boleta);
        return $TotalComision;
    }

    static public function ctrConsultarDNI($Nombres){
        $TotalComision = ReporteModelo::mdlConsultarDNI($Nombres);
        return $TotalComision;
    }
    
}
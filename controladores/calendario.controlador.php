<?php

require_once "../modelos/calendario.modelo.php";

class CalendarioControlador{

    static public function ctrListarDeudas(){
        $TotalComision = CalendarioModelo::mdlListarDeudas();
        return $TotalComision;
    }

    static public function ctrListarAmortiguaciones(){
        $TotalComision = CalendarioModelo::mdlListarAmortiguaciones();
        return $TotalComision;
    }

    static public function ctrRegistrarDeuda($Deudor,$Monto,$Deuda,$Estado,$fecha,$tipo_accion){
        $TotalComision = CalendarioModelo::mdlRegistrarDeuda($Deudor,$Monto,$Deuda,$Estado,$fecha,$tipo_accion);
        return $TotalComision;
    }

    static public function ctrListarEventos(){
        $TotalComision = CalendarioModelo::mdlListarEventos();
        return $TotalComision;
    }
    
}
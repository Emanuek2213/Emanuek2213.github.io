<?php
require_once "../modelos/carga_descarga.modelo.php";
require_once "../vendor/autoload.php";


class CargaDescargaControlador{

    static public function ctrCargaMasivaVentas($fileProductos){
        
        $respuesta = CargaDescargaModelo::mdlCargaMasivaVentas($fileProductos);
        return $respuesta;
    }

    static public function ctrDescarga($ventas_hasta,$ventas_desde){
    
        $carga_descarga = CargaDescargaModelo::mdlDescarga($ventas_hasta,$ventas_desde);
    
        return $carga_descarga;
    
    }
    static public function ctrDescarga2($ventas_hasta,$ventas_desde){
    
        $carga_descarga = CargaDescargaModelo::mdlDescarga2($ventas_hasta,$ventas_desde);
    
        return $carga_descarga;
    
    }

    static public function ctrBorrar($ventas_hasta,$ventas_desde){
    
        $carga_descarga = CargaDescargaModelo::mdlBorrar($ventas_hasta,$ventas_desde);
    
        return $carga_descarga;
    
    }

    static public function ctrCargarDetalles(){
    
        $carga_descarga = CargaDescargaModelo::mdlCargarDetalles();
    
        return $carga_descarga;
    
    }

}
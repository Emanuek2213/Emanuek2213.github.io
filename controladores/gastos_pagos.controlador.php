<?php

class GastosControlador{

    static public function ctrObtenerNroBoleta(){
        
        $nroBoleta = GastosModelo::mdlObtenerNroBoleta();

        return $nroBoleta;

    }

    static public function ctrListarGastos($fechaDesde, $fechaHasta){

        $ventas = GastosModelo::mdlListarGastos($fechaDesde,$fechaHasta);

        return $ventas;

    }

    static public function ctrRegistrarGastos($datos,$nro_boleta,$total_venta,$descripcion_venta,$Cliente,$Estado){
        
        $productos = GastosModelo::mdlRegistrarGastos($datos,$nro_boleta,$total_venta,$descripcion_venta,$Cliente,$Estado);

        return $productos;

    }

}
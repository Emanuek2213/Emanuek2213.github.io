<?php

class RegistrosControlador{

    static public function ctrRegistrarVenta($datos,$nro_boleta,$total_venta,$descripcion_venta,$Cliente,$Estado){
        
        $productos = RegistrosModelo::mdlRegistrarVenta($datos,$nro_boleta,$total_venta,$descripcion_venta,$Cliente,$Estado);

        return $productos;

    }

    static public function ctrObtenerNroBoleta(){
        
        $nroBoleta = RegistrosModelo::mdlObtenerNroBoleta();

        return $nroBoleta;

    }
    
    static public function ctrListarBoletas()
    {
        $detalle_venta = RegistrosModelo::mdlListarBoletas();

        return $detalle_venta;
    }

    static public function ctrListarStock()
    {
        $detalle_venta = RegistrosModelo::mdlListarStock();

        return $detalle_venta;
    }

    static public function ctrListarBoletas2()
    {
        $detalle_venta = RegistrosModelo::mdlListarBoletas2();

        return $detalle_venta;
    }

    static public function ctrCambiarStock($nombre,$fardos,$millares,$cajas,$cientos,$docenas,$paquetes,$unidades)
    {
        $detalle_venta = RegistrosModelo::mdlCambiarStock($nombre,$fardos,$millares,$cajas,$cientos,$docenas,$paquetes,$unidades);

        return $detalle_venta;
    }

    static public function ctrCambiarDatosBoleta($datos,$nro_boleta)
    {
        $detalle_venta = RegistrosModelo::mdlCambiarDatosBoleta($datos,$nro_boleta);

        return $detalle_venta;
    }

    static public function ctrListarVentas_2($fechaDesde, $fechaHasta){

        $ventas = RegistrosModelo::mdlListarVentas_2($fechaDesde,$fechaHasta);

        return $ventas;
    }

    static public function ctrGetDatosProducto($codigoProducto){

        $ventas = RegistrosModelo::mdlGetDatosProducto($codigoProducto);

        return $ventas;
    }

    static public function ctrDarDatosBoleta($id_boleta)
    {
        $detalle_venta = RegistrosModelo::mdlDarDatosBoleta($id_boleta);

        return $detalle_venta;
    }

    static public function ctrDarClienteBoleta($nro_boleta)
    {
        $detalle_venta = RegistrosModelo::mdlDarClienteBoleta($nro_boleta);

        return $detalle_venta;
    }

    static public function ctrObtenerDetalleVenta($nro_boleta)
    {
        $detalle_venta = RegistrosModelo::mdlObtenerDetalleVenta($nro_boleta);

        return $detalle_venta;
    }

}
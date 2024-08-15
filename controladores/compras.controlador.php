<?php

class ComprasControlador{

    static public function ctrListarEstadoBoletaxCliente($nombre_cliente)
    {
        $detalle_venta = ComprasModelo::mdlListarEstadoBoletaxCliente($nombre_cliente);

        return $detalle_venta;
    }

    static public function ctrListarEstadoBoleta()
    {
        $detalle_venta = ComprasModelo::mdlListarEstadoBoleta();

        return $detalle_venta;
    }

    static public function ctrCambiarDetallesCompra($nro_boleta,$Proveedor,$fecha_compra,$mensajero,$Tipo_pago,$nro_documento,$tipo_documento,$tipo_dni,$comentario,$fecha_salida,$fecha_regreso,$fecha_pago)
    {
        $detalle_venta = ComprasModelo::mdlCambiarDetallesCompra($nro_boleta,$Proveedor,$fecha_compra,$mensajero,$Tipo_pago,$nro_documento,$tipo_documento,$tipo_dni,$comentario,$fecha_salida,$fecha_regreso,$fecha_pago);

        return $detalle_venta;
    }

    static public function ctrDarDatosBoletaCompra($id_boleta)
    {
        $detalle_venta = ComprasModelo::mdlDarDatosBoletaCompra($id_boleta);

        return $detalle_venta;
    }

    static public function ctrEliminarProductoVenta($id_boleta,$cod_producto)
    {
        $detalle_venta = ComprasModelo::mdlEliminarProductoVenta($id_boleta,$cod_producto);

        return $detalle_venta;
    }

    static public function ctrCambiarDatosBoleta($datos,$nro_boleta)
    {
        $detalle_venta = ComprasModelo::mdlCambiarDatosBoleta($datos,$nro_boleta);

        return $detalle_venta;
    }

    static public function ctrDarClienteBoleta($nro_boleta)
    {
        $detalle_venta = ComprasModelo::mdlDarClienteBoleta($nro_boleta);

        return $detalle_venta;
    }

    static public function ctrdarFechaDeudas()
    {
        $detalle_venta = ComprasModelo::mdldarFechaDeudas();

        return $detalle_venta;
    }

    static public function ctrlistarCompras()
    {
        $detalle_venta = ComprasModelo::mdllistarCompras();

        return $detalle_venta;
    }

    static public function ctrlistarComprasCredito()
    {
        $detalle_venta = ComprasModelo::mdllistarComprasCredito();

        return $detalle_venta;
    }

    static public function ctrCambiarEstados($nro_boleta)
    {
        $detalle_venta = ComprasModelo::mdlCambiarEstados($nro_boleta);

        return $detalle_venta;
    }

    static public function ctrCambiarEstados2($nro_boleta)
    {
        $detalle_venta = ComprasModelo::mdlCambiarEstados2($nro_boleta);

        return $detalle_venta;
    }

    static public function ctrListarCotiza($nro_boleta)
    {
        $detalle_venta = ComprasModelo::mdlListarCotiza($nro_boleta);

        return $detalle_venta;
    }

    static public function ctrListarFotos($nro_boleta)
    {
        $detalle_venta = ComprasModelo::mdlListarFotos($nro_boleta);

        return $detalle_venta;
    }

    static public function ctrRegistrarFotos($table, $data, $id, $nameId,$imagen){

        $registroProducto = ComprasModelo::mdlRegistrarFotos($table, $data, $id, $nameId,$imagen);

        return $registroProducto;
    }

    static public function ctrDarNombreFoto($id_compra_foto)
    {
        $detalle_venta = ComprasModelo::mdlDarNombreFoto($id_compra_foto);

        return $detalle_venta;
    }

    static public function ctrEliminarFoto($id_compra_foto)
    {
        $detalle_venta = ComprasModelo::mdlEliminarFoto($id_compra_foto);

        return $detalle_venta;
    }

    static public function ctrAñadirCuota($nro_boleta,$fecha_cotiza,$monto,$detalles)
    {
        $detalle_venta = ComprasModelo::mdlAñadirCuota($nro_boleta,$fecha_cotiza,$monto,$detalles);

        return $detalle_venta;
    }

}
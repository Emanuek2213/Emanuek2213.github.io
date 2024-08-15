<?php


class VentaClientesControlador{
    /*===================================================================
    Analiza si el producto esta dentro del historial del cliente
    ====================================================================*/
    static public function ctrListarNombreClientes($dni, $codigo){

        $Analisis = VentaClientesModelo::mdlListarNombreClientes($dni, $codigo);

       return $Analisis;
    }

    /*===================================================================
    Añade nuevo producto al historial del cliente
    ====================================================================*/
    static public function ctrAñadirProducto($dni, $codigo){

        $AñadirProducto = VentaClientesModelo::mdlAñadirProducto($dni, $codigo);

        return $AñadirProducto;
    }

    /*===================================================================
    Lista los productos por cliente
    ====================================================================*/
    static public function ctrListarProducto($dni){

        $Lista = VentaClientesModelo::mdlListarProducto($dni);

        return $Lista;
    }
}

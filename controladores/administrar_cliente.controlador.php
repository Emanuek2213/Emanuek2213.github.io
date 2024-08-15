<?php


class AdminstrarClienteControlador{
    /*===================================================================
    Analiza si el producto esta dentro del historial del cliente
    ====================================================================*/
    static public function ctrAnalizarProducto(){

        $Analisis = AdminstrarClienteModelo::mdlAnalizarProducto();

       return $Analisis;
    }

    static public function ctrVerDuplicado($id, $dni){

        $Analisis = AdminstrarClienteModelo::mdlVerDuplicado($id, $dni);

       return $Analisis;
    }

    static public function ctrAgregarProducto($id, $dni){

        $Analisis = AdminstrarClienteModelo::mdlAgregarProducto($id, $dni);

       return $Analisis;
    }

    static public function ctrEliminarProducto($id, $dni){

        $Analisis = AdminstrarClienteModelo::mdlEliminarProducto($id, $dni);

       return $Analisis;
    }

}
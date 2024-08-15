<?php
require_once "../modelos/catalogos.modelo.php";
require_once "../vendor/autoload.php";


class CatalogosControlador{

    static public function ctrCargaMasivaProductos($fileProductos){
        
        $respuesta = CatalogosModelo::mdlCargaMasivaProductos($fileProductos);
        return $respuesta;
    }
}
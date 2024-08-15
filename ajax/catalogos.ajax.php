<?php

require_once "../controladores/catalogos.controlador.php";
require_once "../modelos/catalogos.modelo.php";

require_once "../vendor/autoload.php";

class ajaxCatalogos{

    public $fileProductos;

    public function ajaxCargaMasivaProductos(){

        $respuesta = CatalogosControlador::ctrCargaMasivaProductos($this->fileProductos);
        var_dump($respuesta);
        if($respuesta['totalCatalogos'] > 0 && $respuesta['totalBotones'] > 0){
            $accion = 1;
        } else{
            $accion = 0;
        }

        echo ($accion);
    }

}

if(isset($_FILES)){
    $archivo_productos = new ajaxCatalogos();
    $archivo_productos-> fileProductos = $_FILES['fileProductos'];
    $archivo_productos -> ajaxCargaMasivaProductos();
}
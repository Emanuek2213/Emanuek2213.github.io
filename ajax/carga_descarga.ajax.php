<?php

require_once "../controladores/carga_descarga.controlador.php";
require_once "../modelos/carga_descarga.modelo.php";

require_once "../vendor/autoload.php";

class ajaxCargaDescarga{

    public $fileProductos;

    

    public function ajaxDescarga($ventas_hasta,$ventas_desde){
    
        $carga_descarga = CargaDescargaControlador::ctrDescarga($ventas_hasta,$ventas_desde);
    
        echo json_encode($carga_descarga);
        
    
    }
    public function ajaxDescarga2($ventas_hasta,$ventas_desde){
    
        $carga_descarga = CargaDescargaControlador::ctrDescarga2($ventas_hasta,$ventas_desde);
    
        echo json_encode($carga_descarga);
        
    
    }

    public function ajaxBorrar($ventas_hasta,$ventas_desde){
    
        $carga_descarga = CargaDescargaControlador::ctrBorrar($ventas_hasta,$ventas_desde);
    
        echo json_encode($carga_descarga);
        
    
    }

    public function ajaxCargarDetalles(){
    
        $carga_descarga = CargaDescargaControlador::ctrCargarDetalles();
    
        echo json_encode($carga_descarga);
        
    
    }

    public function ajaxCargaMasivaVentas(){

        $respuesta = CargaDescargaControlador::ctrCargaMasivaVentas($this->fileProductos);
        //var_dump($respuesta);
        if($respuesta["ventas_cabecera"] > 0 && $respuesta["ventas_detalle"] > 0){
            $accion = 1;
        } else{
            $accion = 0;
        }

        echo ($accion);
    }


}

if(isset($_POST['accion']) && $_POST['accion'] == 1){ // parametro para listar carga_descarga

    $carga_descarga = new ajaxCargaDescarga();
    $carga_descarga -> ajaxDescarga($_POST['ventas_hasta'],$_POST['ventas_desde']);
    
}else if(isset($_POST['accion']) && $_POST['accion'] == 2){ // parametro para listar carga_descarga

    $carga_descarga = new ajaxCargaDescarga();
    $carga_descarga -> ajaxDescarga2($_POST['ventas_hasta'],$_POST['ventas_desde']);
    
}else if(isset($_POST['accion']) && $_POST['accion'] == 3){ // parametro para listar carga_descarga

    $carga_descarga = new ajaxCargaDescarga();
    $carga_descarga -> ajaxBorrar($_POST['ventas_hasta'],$_POST['ventas_desde']);
    
}else if(isset($_POST['accion']) && $_POST['accion'] == 4){ // parametro para listar carga_descarga

    $carga_descarga = new ajaxCargaDescarga();
    $carga_descarga -> ajaxCargarDetalles();
    
}else if(isset($_FILES)){
    $archivo_productos = new ajaxCargaDescarga();
    $archivo_productos-> fileProductos = $_FILES['fileProductos'];
    $archivo_productos -> ajaxCargaMasivaVentas();
}
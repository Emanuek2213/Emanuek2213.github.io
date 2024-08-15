<?php

require_once "../controladores/registros.controlador.php";
require_once "../modelos/registros.modelo.php";

class AjaxRegistros{

    public function ajaxRegistrarVenta($datos,$nro_boleta,$total_venta, $descripcion_venta,$Cliente,$Estado){

        $registroVenta = RegistrosControlador::ctrRegistrarVenta($datos,$nro_boleta,$total_venta, $descripcion_venta,$Cliente,$Estado);
        echo json_encode($registroVenta,JSON_UNESCAPED_UNICODE);

    }

    public function ajaxObtenerNroBoleta(){

        $nroBoleta = RegistrosControlador::ctrObtenerNroBoleta();

        echo json_encode($nroBoleta,JSON_UNESCAPED_UNICODE);

    }

    public function ajaxListarBoletas(){

        $respuestas = RegistrosControlador::ctrListarBoletas();  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxListarStock(){

        $respuestas = RegistrosControlador::ctrListarStock();  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxListarBoletas2(){

        $respuestas = RegistrosControlador::ctrListarBoletas2();  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxCambiarStock($nombre,$fardos,$millares,$cajas,$cientos,$docenas,$paquetes,$unidades){

        $respuestas = RegistrosControlador::ctrCambiarStock($nombre,$fardos,$millares,$cajas,$cientos,$docenas,$paquetes,$unidades);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxCambiarDatosBoleta($datos,$nro_boleta){

        $respuestas = RegistrosControlador::ctrCambiarDatosBoleta($datos,$nro_boleta);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxListarVentas_2($fechaDesde, $fechaHasta){

        $ventas = RegistrosControlador::ctrListarVentas_2($fechaDesde, $fechaHasta);  

        echo json_encode($ventas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxGetDatosProducto($codigoProducto){

        $ventas = RegistrosControlador::ctrGetDatosProducto($codigoProducto);  

        echo json_encode($ventas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxDarDatosBoleta($id_boleta){

        $respuestas = RegistrosControlador::ctrDarDatosBoleta($id_boleta);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxDarClienteBoleta($nro_boleta){

        $respuestas = RegistrosControlador::ctrDarClienteBoleta($nro_boleta);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

}

if(isset($_POST["accion"]) && $_POST["accion"] == 1){
	
	$nroBoleta = new AjaxRegistros();
    $nroBoleta -> ajaxObtenerNroBoleta();
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 2 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxRegistros();
    $ventas -> ajaxListarStock();

}else if(isset($_POST["accion"]) && $_POST["accion"] == 4 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxRegistros();
    $ventas -> ajaxListarBoletas();

}else if(isset($_POST["accion"]) && $_POST["accion"] == 5 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxRegistros();
    $ventas -> ajaxListarBoletas2();

}else if(isset($_POST["accion"]) && $_POST["accion"] == 6 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxRegistros();
    $ventas -> ajaxCambiarStock($_POST["nombre"],$_POST["fardos"],$_POST["millares"],$_POST["cajas"],$_POST["cientos"],$_POST["docenas"],
                                $_POST["paquetes"],$_POST["unidades"]);

}else if(isset($_POST["accion"]) && $_POST["accion"] == 7 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxRegistros();
    $ventas -> ajaxGetDatosProducto($_POST["codigo_producto"]);

}else if(isset($_POST["accion"]) && $_POST["accion"] == 9 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
  
   $ventas = new AjaxRegistros();
   $ventas -> ajaxDarDatosBoleta($_POST["id_boleta"]);

}else if(isset($_POST["accion"]) && $_POST["accion"] == 10 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
  
   $ventas = new AjaxRegistros();
   $ventas -> ajaxCambiarDatosBoleta($_POST["arr"],$_POST['nro_boleta']);

}else if(isset($_POST["accion"]) && $_POST["accion"] == 12 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxRegistros();
    $ventas -> ajaxDarClienteBoleta($_POST['nro_boleta']);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 18 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
  
   $ventas = new AjaxRegistros();
   $ventas -> ajaxListarVentas_2($_POST["fechaDesde"],$_POST["fechaHasta"] );
   
}else{
    	if((isset($_POST["arr"]))){			

            $registrar = new AjaxRegistros();
            $registrar -> ajaxRegistrarVenta($_POST["arr"],$_POST['nro_boleta'],$_POST['total_venta'],$_POST['descripcion_venta'],$_POST['Cliente'],$_POST['Estado']);

       	}
}

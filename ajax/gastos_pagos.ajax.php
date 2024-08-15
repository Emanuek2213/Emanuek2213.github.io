<?php

require_once "../controladores/gastos_pagos.controlador.php";
require_once "../modelos/gastos_pagos.modelo.php";

class AjaxGastos{

    public function ajaxObtenerNroBoleta(){

        $nroBoleta = GastosControlador::ctrObtenerNroBoleta();

        echo json_encode($nroBoleta,JSON_UNESCAPED_UNICODE);

    }

    public function ajaxListarGastos($fechaDesde, $fechaHasta){

        $ventas = GastosControlador::ctrListarGastos($fechaDesde, $fechaHasta);  

        echo json_encode($ventas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxRegistrarGastos($datos,$nro_boleta,$total_venta, $descripcion_venta,$Cliente,$Estado){

        $registroVenta = GastosControlador::ctrRegistrarGastos($datos,$nro_boleta,$total_venta, $descripcion_venta,$Cliente,$Estado);
        echo json_encode($registroVenta,JSON_UNESCAPED_UNICODE);

    }

}


if(isset($_POST["accion"]) && $_POST["accion"] == 18 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
   $ventas = new AjaxGastos();
   $ventas -> ajaxListarGastos($_POST["fechaDesde"],$_POST["fechaHasta"] );

}else if(isset($_POST["accion"]) && $_POST["accion"] == 1){
	
	$nroBoleta = new AjaxGastos();
    $nroBoleta -> ajaxObtenerNroBoleta();
	
}else{
     
	if((isset($_POST["arr"]))){
		
		$registrar = new AjaxGastos();
        if($_POST["seleccion"] == 1){
         
            $registrar -> ajaxRegistrarGastos($_POST["arr"],$_POST['nro_boleta'],$_POST['total_venta'],$_POST['descripcion_venta'],$_POST['Cliente'],$_POST['Estado']);

        }
		
	}
 }
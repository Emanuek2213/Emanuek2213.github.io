<?php

require_once "../controladores/reporte.controlador.php";
require_once "../modelos/reporte.modelo.php";
require_once "../vendor/autoload.php";

class AjaxReporte{
    public function getGuardarReporte($Agente,$Cuenta,$Monto,$Fecha,$Diferencia){
        $TotalComision = ReporteControlador::ctrGuardarReporte($Agente,$Cuenta,$Monto,$Fecha,$Diferencia);
        echo json_encode($TotalComision);
    }

    public function getColumnasExcel(){
        $TotalComision = ReporteControlador::ctrColumnasExcel();
        echo json_encode($TotalComision);
    }

    public function getFilasExcel(){
        $TotalComision = ReporteControlador::ctrFilasExcel();
        echo json_encode($TotalComision);
    }

    public function getRellenoExcel($Agente,$Cuenta,$Fecha){
        $TotalComision = ReporteControlador::ctrRellenoExcel($Agente,$Cuenta,$Fecha);
        echo json_encode($TotalComision);
    }

    public function getConsultaNumero($tipo){
        $TotalComision = ReporteControlador::ctrConsultaNumero($tipo);
        echo json_encode($TotalComision);
    }

    public function getAumentarNumero($tipo){
        $TotalComision = ReporteControlador::ctrAumentarNumero($tipo);
        echo json_encode($TotalComision);
    }

    public function getCambiarNumero($tipo,$numero){
        $TotalComision = ReporteControlador::ctrCambiarNumero($tipo,$numero);
        echo json_encode($TotalComision);
    }

    public function getRegistrarFactura($nro_boleta,$numero_factura,$link){
        $TotalComision = ReporteControlador::ctrRegistrarFactura($nro_boleta,$numero_factura,$link);
        echo json_encode($TotalComision);
    }

    public function getConsultarFactura($nro_boleta){
        $TotalComision = ReporteControlador::ctrConsultarFactura($nro_boleta);
        echo json_encode($TotalComision);
    }

    public function getConsultarDNI($Nombres){
        $TotalComision = ReporteControlador::ctrConsultarDNI($Nombres);
        echo json_encode($TotalComision);
    }
    
}

if(isset($_POST['accion']) && $_POST['accion'] == 1){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxReporte();
    $tablaRegistroAgente -> getGuardarReporte($_POST['Agente'],$_POST['Cuenta'],$_POST['Monto'],$_POST['Fecha'],$_POST['Diferencia']);

}else if(isset($_POST['accion']) && $_POST['accion'] == 2){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxReporte();
    $tablaRegistroAgente -> getColumnasExcel();

}else if(isset($_POST['accion']) && $_POST['accion'] == 3){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxReporte();
    $tablaRegistroAgente -> getFilasExcel();

}else if(isset($_POST['accion']) && $_POST['accion'] == 4){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxReporte();
    $tablaRegistroAgente -> getRellenoExcel($_POST['Agente'],$_POST['Cuenta'],$_POST['Fecha']);

}else if(isset($_POST['accion']) && $_POST['accion'] == 5){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxReporte();
    $tablaRegistroAgente -> getConsultaNumero($_POST['tipo']);

}else if(isset($_POST['accion']) && $_POST['accion'] == 6){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxReporte();
    $tablaRegistroAgente -> getAumentarNumero($_POST['tipo']);

}else if(isset($_POST['accion']) && $_POST['accion'] == 7){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxReporte();
    $tablaRegistroAgente -> getCambiarNumero($_POST['tipo'],$_POST['numero']);

}else if(isset($_POST['accion']) && $_POST['accion'] == 8){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxReporte();
    $tablaRegistroAgente -> getRegistrarFactura($_POST['nro_boleta'],$_POST['numero_factura'],$_POST['link']);

}else if(isset($_POST['accion']) && $_POST['accion'] == 9){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxReporte();
    $tablaRegistroAgente -> getConsultarFactura($_POST['nro_boleta']);

}else if(isset($_POST['accion']) && $_POST['accion'] == 10){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxReporte();
    $tablaRegistroAgente -> getConsultarDNI($_POST['Nombres']);

}
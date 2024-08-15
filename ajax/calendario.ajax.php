<?php

require_once "../controladores/calendario.controlador.php";
require_once "../modelos/calendario.modelo.php";
require_once "../vendor/autoload.php";

class AjaxCalendario{
    public function getListarDeudas(){
        $TotalComision = CalendarioControlador::ctrListarDeudas();
        echo json_encode($TotalComision);
    }

    public function getListarAmortiguaciones(){
        $TotalComision = CalendarioControlador::ctrListarAmortiguaciones();
        echo json_encode($TotalComision);
    }

    public function getRegistrarDeuda($Deudor,$Monto,$Deuda,$Estado,$fecha,$tipo_accion){
        $TotalComision = CalendarioControlador::ctrRegistrarDeuda($Deudor,$Monto,$Deuda,$Estado,$fecha,$tipo_accion);
        echo json_encode($TotalComision);
    }

    public function getListarEventos(){
        $TotalComision = CalendarioControlador::ctrListarEventos();
        echo json_encode($TotalComision);
    }
    
}

if(isset($_POST['accion']) && $_POST['accion'] == 1){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxCalendario();
    $tablaRegistroAgente -> getListarDeudas();

}else if(isset($_POST['accion']) && $_POST['accion'] == 2){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxCalendario();
    $tablaRegistroAgente -> getListarAmortiguaciones();

}else if(isset($_POST['accion']) && $_POST['accion'] == 3){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxCalendario();
    $tablaRegistroAgente -> getRegistrarDeuda($_POST['Deudor'],$_POST['Monto'],$_POST['Deuda'],$_POST['Estado'],$_POST['fecha'],$_POST['tipo_accion']);

}else if(isset($_POST['accion']) && $_POST['accion'] == 4){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxCalendario();
    $tablaRegistroAgente -> getListarEventos();

}
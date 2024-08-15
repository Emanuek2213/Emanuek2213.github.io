<?php

require_once "../controladores/cuadre_caja.controlador.php";
require_once "../modelos/cuadre_caja.modelo.php";
require_once "../vendor/autoload.php";

class AjaxCuadre{
    public function getListarCuentas(){
        $TotalComision = CuadreControlador::ctrListarCuentas();
        echo json_encode($TotalComision);
    }

    public function getListarIngresos(){
        $TotalComision = CuadreControlador::ctrListarIngresos();
        echo json_encode($TotalComision);
    }

    public function getListarGanancias(){
        $TotalComision = CuadreControlador::ctrListarGanancias();
        echo json_encode($TotalComision);
    }

    public function getListarIngresos2(){
        $TotalComision = CuadreControlador::ctrListarIngresos2();
        echo json_encode($TotalComision);
    }

    public function getListarEdicionCuentas(){
        $TotalComision = CuadreControlador::ctrListarEdicionCuentas();
        echo json_encode($TotalComision);
    }

    public function getEditarCuenta($idCuenta,$Nombre,$Banco){
        $TotalComision = CuadreControlador::ctrEditarCuenta($idCuenta,$Nombre,$Banco);
        echo json_encode($TotalComision);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    public function getmatrizDatosCuadre($matrizDatosCuadre){
        $TotalComision = CuadreControlador::ctrmatrizDatosCuadre($matrizDatosCuadre);
        echo json_encode($TotalComision);
    }

    public function getmatrizDatosIngresos($matrizDatosIngresos){
        $TotalComision = CuadreControlador::ctrmatrizDatosIngresos($matrizDatosIngresos);
        echo json_encode($TotalComision);
    }

    public function getmatrizDatosSalidas($matrizDatosSalidas){
        $TotalComision = CuadreControlador::ctrmatrizDatosSalidas($matrizDatosSalidas);
        echo json_encode($TotalComision);
    }

    public function getmatrizDatosGanancias($matrizDatosGanancias){
        $TotalComision = CuadreControlador::ctrmatrizDatosGanancias($matrizDatosGanancias);
        echo json_encode($TotalComision);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function getmatrizDatosFechaCuadre($matrizDatosCuadre , $fecha){
        $TotalComision = CuadreControlador::ctrmatrizDatosFechaCuadre($matrizDatosCuadre , $fecha);
        echo json_encode($TotalComision);
    }

    public function getmatrizDatosFechaIngresos($matrizDatosIngresos , $fecha){
        $TotalComision = CuadreControlador::ctrmatrizDatosFechaIngresos($matrizDatosIngresos , $fecha);
        echo json_encode($TotalComision);
    }

    public function getmatrizDatosFechaSalidas($matrizDatosSalidas , $fecha){
        $TotalComision = CuadreControlador::ctrmatrizDatosFechaSalidas($matrizDatosSalidas , $fecha);
        echo json_encode($TotalComision);
    }

    public function getmatrizDatosFechaGanancias($matrizDatosGanancias , $fecha){
        $TotalComision = CuadreControlador::ctrmatrizDatosFechaGanancias($matrizDatosGanancias , $fecha);
        echo json_encode($TotalComision);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function getDarCuadreFecha($fecha){
        $TotalComision = CuadreControlador::ctrDarCuadreFecha($fecha);
        echo json_encode($TotalComision);
    }

    public function getDarSalidasFecha($fecha){
        $TotalComision = CuadreControlador::ctrDarSalidasFecha($fecha);
        echo json_encode($TotalComision);
    }

    public function getDarIngresosFecha($fecha){
        $TotalComision = CuadreControlador::ctrDarIngresosFecha($fecha);
        echo json_encode($TotalComision);
    }

    public function getDarGananciasFecha($fecha){
        $TotalComision = CuadreControlador::ctrDarGananciasFecha($fecha);
        echo json_encode($TotalComision);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function getDarSalidasFechaAyer($fecha){
        $TotalComision = CuadreControlador::ctrDarSalidasFechaAyer($fecha);
        echo json_encode($TotalComision);
    }

    public function getDarIngresosFechaAyer($fecha){
        $TotalComision = CuadreControlador::ctrDarIngresosFechaAyer($fecha);
        echo json_encode($TotalComision);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function getDarGananciasMes(){
        $TotalComision = CuadreControlador::ctrDarGananciasMes();
        echo json_encode($TotalComision);
    }

    public function getDarSalidasMes(){
        $TotalComision = CuadreControlador::ctrDarSalidasMes();
        echo json_encode($TotalComision);
    }

    public function getDarIngresosMes(){
        $TotalComision = CuadreControlador::ctrDarIngresosMes();
        echo json_encode($TotalComision);
    }
    
}

if(isset($_POST['accion']) && $_POST['accion'] == 1){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxCuadre();
    $tablaRegistroAgente -> getListarCuentas();

}else if(isset($_POST['accion']) && $_POST['accion'] == 2){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxCuadre();
    $tablaRegistroAgente -> getListarIngresos();

}else if(isset($_POST['accion']) && $_POST['accion'] == 3){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxCuadre();
    $tablaRegistroAgente -> getListarIngresos2();

}else if(isset($_POST['accion']) && $_POST['accion'] == 4){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxCuadre();
    $tablaRegistroAgente -> getmatrizDatosCuadre($_POST['matrizDatosCuadre']);

}else if(isset($_POST['accion']) && $_POST['accion'] == 5){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxCuadre();
    $tablaRegistroAgente -> getmatrizDatosIngresos($_POST['matrizDatosIngresos']);

}else if(isset($_POST['accion']) && $_POST['accion'] == 6){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxCuadre();
    $tablaRegistroAgente -> getmatrizDatosSalidas($_POST['matrizDatosSalidas']);

}else if(isset($_POST['accion']) && $_POST['accion'] == 7){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxCuadre();
    $tablaRegistroAgente -> getDarCuadreFecha($_POST['fecha']);

}else if(isset($_POST['accion']) && $_POST['accion'] == 8){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxCuadre();
    $tablaRegistroAgente -> getDarIngresosFecha($_POST['fecha']);

}else if(isset($_POST['accion']) && $_POST['accion'] == 9){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxCuadre();
    $tablaRegistroAgente -> getDarSalidasFecha($_POST['fecha']);

}else if(isset($_POST['accion']) && $_POST['accion'] == 10){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxCuadre();
    $tablaRegistroAgente -> getListarGanancias();

}else if(isset($_POST['accion']) && $_POST['accion'] == 11){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxCuadre();
    $tablaRegistroAgente -> getmatrizDatosGanancias($_POST['matrizDatosGanancias']);

}else if(isset($_POST['accion']) && $_POST['accion'] == 12){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxCuadre();
    $tablaRegistroAgente -> getDarGananciasFecha($_POST['fecha']);

}else if(isset($_POST['accion']) && $_POST['accion'] == 13){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxCuadre();
    $tablaRegistroAgente -> getmatrizDatosFechaCuadre($_POST['matrizDatosCuadre'], $_POST['fecha']);

}else if(isset($_POST['accion']) && $_POST['accion'] == 14){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxCuadre();
    $tablaRegistroAgente -> getmatrizDatosFechaIngresos($_POST['matrizDatosIngresos'], $_POST['fecha']);

}else if(isset($_POST['accion']) && $_POST['accion'] == 15){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxCuadre();
    $tablaRegistroAgente -> getmatrizDatosFechaSalidas($_POST['matrizDatosSalidas'], $_POST['fecha']);

}else if(isset($_POST['accion']) && $_POST['accion'] == 16){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxCuadre();
    $tablaRegistroAgente -> getmatrizDatosFechaGanancias($_POST['matrizDatosGanancias'], $_POST['fecha']);

}else if(isset($_POST['accion']) && $_POST['accion'] == 17){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxCuadre();
    $tablaRegistroAgente -> getListarEdicionCuentas();

}else if(isset($_POST['accion']) && $_POST['accion'] == 18){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxCuadre();
    $tablaRegistroAgente -> getEditarCuenta($_POST['idCuenta'], $_POST['Nombre'], $_POST['Banco']);

}else if(isset($_POST['accion']) && $_POST['accion'] == 19){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxCuadre();
    $tablaRegistroAgente -> getDarGananciasMes();

}else if(isset($_POST['accion']) && $_POST['accion'] == 20){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxCuadre();
    $tablaRegistroAgente -> getDarSalidasMes();

}else if(isset($_POST['accion']) && $_POST['accion'] == 21){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxCuadre();
    $tablaRegistroAgente -> getDarIngresosMes();

}else if(isset($_POST['accion']) && $_POST['accion'] == 22){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxCuadre();
    $tablaRegistroAgente -> getDarIngresosFechaAyer($_POST['fecha']);

}else if(isset($_POST['accion']) && $_POST['accion'] == 23){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxCuadre();
    $tablaRegistroAgente -> getDarSalidasFechaAyer($_POST['fecha']);

}
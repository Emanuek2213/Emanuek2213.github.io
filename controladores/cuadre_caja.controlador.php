<?php

require_once "../modelos/cuadre_caja.modelo.php";

class CuadreControlador{

    static public function ctrListarCuentas(){
        $TotalComision = CuadreModelo::mdlListarCuentas();
        return $TotalComision;
    }

    static public function ctrListarGanancias(){
        $TotalComision = CuadreModelo::mdlListarGanancias();
        return $TotalComision;
    }

    static public function ctrListarIngresos(){
        $TotalComision = CuadreModelo::mdlListarIngresos();
        return $TotalComision;
    }

    static public function ctrListarIngresos2(){
        $TotalComision = CuadreModelo::mdlListarIngresos2();
        return $TotalComision;
    }

    static public function ctrListarEdicionCuentas(){
        $TotalComision = CuadreModelo::mdlListarEdicionCuentas();
        return $TotalComision;
    }

    static public function ctrEditarCuenta($idCuenta,$Nombre,$Banco){
        $TotalComision = CuadreModelo::mdlEditarCuenta($idCuenta,$Nombre,$Banco);
        return $TotalComision;
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////

    static public function ctrmatrizDatosCuadre($matrizDatosCuadre){
        $TotalComision = CuadreModelo::mdlmatrizDatosCuadre($matrizDatosCuadre);
        return $TotalComision;
    }
    
    static public function ctrmatrizDatosIngresos($matrizDatosIngresos){
        $TotalComision = CuadreModelo::mdlmatrizDatosIngresos($matrizDatosIngresos);
        return $TotalComision;
    }

    static public function ctrmatrizDatosSalidas($matrizDatosSalidas){
        $TotalComision = CuadreModelo::mdlmatrizDatosSalidas($matrizDatosSalidas);
        return $TotalComision;
    }

    static public function ctrmatrizDatosGanancias($matrizDatosGanancias){
        $TotalComision = CuadreModelo::mdlmatrizDatosGanancias($matrizDatosGanancias);
        return $TotalComision;
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////

    static public function ctrmatrizDatosFechaCuadre($matrizDatosCuadre , $fecha){
        $TotalComision = CuadreModelo::mdlmatrizDatosFechaCuadre($matrizDatosCuadre , $fecha);
        return $TotalComision;
    }
    
    static public function ctrmatrizDatosFechaIngresos($matrizDatosIngresos , $fecha){
        $TotalComision = CuadreModelo::mdlmatrizDatosFechaIngresos($matrizDatosIngresos , $fecha);
        return $TotalComision;
    }

    static public function ctrmatrizDatosFechaSalidas($matrizDatosSalidas , $fecha){
        $TotalComision = CuadreModelo::mdlmatrizDatosFechaSalidas($matrizDatosSalidas , $fecha);
        return $TotalComision;
    }

    static public function ctrmatrizDatosFechaGanancias($matrizDatosGanancias , $fecha){
        $TotalComision = CuadreModelo::mdlmatrizDatosFechaGanancias($matrizDatosGanancias , $fecha);
        return $TotalComision;
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////

    static public function ctrDarCuadreFecha($fecha){
        $TotalComision = CuadreModelo::mdlDarCuadreFecha($fecha);
        return $TotalComision;
    }

    static public function ctrDarSalidasFecha($fecha){
        $TotalComision = CuadreModelo::mdlDarSalidasFecha($fecha);
        return $TotalComision;
    }

    static public function ctrDarIngresosFecha($fecha){
        $TotalComision = CuadreModelo::mdlDarIngresosFecha($fecha);
        return $TotalComision;
    }

    static public function ctrDarGananciasFecha($fecha){
        $TotalComision = CuadreModelo::mdlDarGananciasFecha($fecha);
        return $TotalComision;
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////

    static public function ctrDarSalidasFechaAyer($fecha){
        $TotalComision = CuadreModelo::mdlDarSalidasFechaAyer($fecha);
        return $TotalComision;
    }

    static public function ctrDarIngresosFechaAyer($fecha){
        $TotalComision = CuadreModelo::mdlDarIngresosFechaAyer($fecha);
        return $TotalComision;
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////

    static public function ctrDarGananciasMes(){
        $TotalComision = CuadreModelo::mdlDarGananciasMes();
        return $TotalComision;
    }

    static public function ctrDarSalidasMes(){
        $TotalComision = CuadreModelo::mdlDarSalidasMes();
        return $TotalComision;
    }

    static public function ctrDarIngresosMes(){
        $TotalComision = CuadreModelo::mdlDarIngresosMes();
        return $TotalComision;
    }

}
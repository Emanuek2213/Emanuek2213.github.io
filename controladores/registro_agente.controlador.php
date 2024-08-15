<?php

require_once "../modelos/registro_agente.modelo.php";

class RegistroAgenteControlador{


    static public function ctrTablaRegistroAgente(){

        $TablaRegistroAgente = RegistroAgenteModelo::mdlTablaRegistroAgente();
        return $TablaRegistroAgente;
    }

    static public function ctrTablaRegistroAgente_2(){

        $TablaRegistroAgente = RegistroAgenteModelo::mdlTablaRegistroAgente_2();
        return $TablaRegistroAgente;
    }

    static public function ctrTablaRegistroAgente_3($fecha_eleccion){

        $TablaRegistroAgente = RegistroAgenteModelo::mdlTablaRegistroAgente_3($fecha_eleccion);
        return $TablaRegistroAgente;
    }

    static public function ctrTablaEdicionesAgente($fecha_eleccion){

        $TablaRegistroAgente = RegistroAgenteModelo::mdlTablaEdicionesAgente($fecha_eleccion);
        return $TablaRegistroAgente;
    }

    static public function ctrTablaEdicionesAgenteHoy(){

        $TablaRegistroAgente = RegistroAgenteModelo::mdlTablaEdicionesAgenteHoy();
        return $TablaRegistroAgente;
    }

    static public function ctrSumaMovimiento(){

        $SumaMovimiento = RegistroAgenteModelo::mdlSumaMovimiento();

        //var_dump($SumaMovimiento);
        return $SumaMovimiento;
    }

    static public function ctrRegistrarMovimiento($tipo, $monto, $comision, $Agente, $nombre,$cuenta,$codigo,$usuario){

        $RegistrarMovimiento = RegistroAgenteModelo::mdlRegistrarMovimiento($tipo, $monto, $comision, $Agente, $nombre,$cuenta,$codigo,$usuario);

        //var_dump($SumaMovimiento);
        return $RegistrarMovimiento;
    }

    static public function ctrSumaDinero(){

        $SumaDinero = RegistroAgenteModelo::mdlSumaDinero();
        return $SumaDinero;
    }

    static public function ctrCuentasCredito(){

        $CuentasCredito = RegistroAgenteModelo::mdlCuentasCredito();
        return $CuentasCredito;
    }

    static public function ctrSumaCredito(){

        $SumaCredito = RegistroAgenteModelo::mdlSumaCredito();
        return $SumaCredito;
    }

    static public function ctrEliminarRegistro($table, $id, $nameId, $motivo)
    {
        $respuesta = RegistroAgenteModelo::mdlEliminarRegistro($table, $id, $nameId, $motivo);
        
        return $respuesta;
    }

    static public function ctrTablaRegistroTransferencia(){

        $TablaRegistroTransferencia = RegistroAgenteModelo::mdlTablaRegistroTransferencia();
        return $TablaRegistroTransferencia;
    }

    static public function ctrEliminarTransferencia($table, $id, $nameId)
    {
        $respuesta = RegistroAgenteModelo::mdlEliminarTransferencia($table, $id, $nameId);
        
        return $respuesta;
    }
   

    static public function ctrRegistrarTransferencia($AgenteD, $CuentaD, $AgenteR, $CuentaR, $Transferencia, $Descripcion){

        $RegistrarTransferencia = RegistroAgenteModelo::mdlRegistrarTransferencia($AgenteD, $CuentaD, $AgenteR, $CuentaR, $Transferencia, $Descripcion);

        //var_dump($SumaTransferencia);
        return $RegistrarTransferencia;
    }

    static public function ctrTotalComision(){

        $TotalComision = RegistroAgenteModelo::mdlTotalComision();
        return $TotalComision;
    }

    static public function ctrCambiarCredito($agente, $credito, $cuenta){

        $CambiarCredito = RegistroAgenteModelo::mdlCambiarCredito($agente, $credito, $cuenta);

        //var_dump($SumaTransferencia);
        return $CambiarCredito;
    }

    static public function ctrTotalComisionHoy(){

        $TotalComision = RegistroAgenteModelo::mdlTotalComisionHoy();
        return $TotalComision;
    }

    static public function ctrAgregarCuenta($agente, $cuenta, $monto){

        $TotalComision = RegistroAgenteModelo::mdlAgregarCuenta($agente, $cuenta, $monto);
        return $TotalComision;
    }

    static public function ctrMovimentosHoy(){

        $TotalComision = RegistroAgenteModelo::mdlMovimentosHoy();
        return $TotalComision;
    }

    static public function ctrListarAgentes(){

        $TotalComision = RegistroAgenteModelo::mdlListarAgentes();
        return $TotalComision;
    }

    static public function ctrListarAgentes_solo(){

        $TotalComision = RegistroAgenteModelo::mdlListarAgentes_solo();
        return $TotalComision;
    }

    static public function ctrListarCuentasxAgente($idAgente){

        $TotalComision = RegistroAgenteModelo::mdlListarCuentasxAgente($idAgente);
        return $TotalComision;
    }


    static public function ctrListarCuentasxAgentexNumero($idAgente){

        $TotalComision = RegistroAgenteModelo::mdlListarCuentasxAgentexNumero($idAgente);
        return $TotalComision;
    }

    static public function ctrRegistrarRetiro($codigo,$monto,$comision,$tipo,$Agente,$cuenta,$nombre,$usuario,$detalles){

        $TotalComision = RegistroAgenteModelo::mdlRegistrarRetiro($codigo,$monto,$comision,$tipo,$Agente,$cuenta,$nombre,$usuario,$detalles);
        return $TotalComision;
    }

    static public function ctrRegistrarDeposito($codigo,$monto,$comision,$tipo,$Agente,$cuenta,$nombre,$usuario,$detalles){

        $TotalComision = RegistroAgenteModelo::mdlRegistrarDeposito($codigo,$monto,$comision,$tipo,$Agente,$cuenta,$nombre,$usuario,$detalles);
        return $TotalComision;
    }

    static public function ctrRegistrarServicio($codigo,$monto,$comision,$tipo,$Agente,$cuenta,$nombre,$usuario,$detalles){

        $TotalComision = RegistroAgenteModelo::mdlRegistrarServicio($codigo,$monto,$comision,$tipo,$Agente,$cuenta,$nombre,$usuario,$detalles);
        return $TotalComision;
    }

    static public function ctrIngresarNuevosCuentas($Agente,$Nombre,$Credito){

        $TotalComision = RegistroAgenteModelo::mdlIngresarNuevosCuentas($Agente,$Nombre,$Credito);
        return $TotalComision;
    }

    static public function ctrEliminarCuenta($Agente,$Nombre,$id){

        $TotalComision = RegistroAgenteModelo::mdlEliminarCuenta($Agente,$Nombre,$id);
        return $TotalComision;
    }

    static public function ctrEditarCuenta($Agente,$Nombre,$Credito,$id,$diferencia,$banco_antes,$cuenta_antes,$monto_antes,$Usuario){

        $TotalComision = RegistroAgenteModelo::mdlEditarCuenta($Agente,$Nombre,$Credito,$id,$diferencia,$banco_antes,$cuenta_antes,$monto_antes,$Usuario);
        return $TotalComision;
    }

    static public function ctrListarPrestamos(){

        $TotalComision = RegistroAgenteModelo::mdlListarPrestamos();
        return $TotalComision;
    }

    static public function ctrTrasferenciasHoy(){

        $TotalComision = RegistroAgenteModelo::mdlTrasferenciasHoy();
        return $TotalComision;
    }

    static public function ctrListadoAcciones(){

        $TotalComision = RegistroAgenteModelo::mdlListadoAcciones();
        return $TotalComision;
    }

    static public function ctrListadoEdicionCuenta(){

        $TotalComision = RegistroAgenteModelo::mdlListadoEdicionCuenta();
        return $TotalComision;
    }

    static public function ctrListadoMontos(){

        $TotalComision = RegistroAgenteModelo::mdlListadoMontos();
        return $TotalComision;
    }

    static public function ctrGuardarPrestamo($persona,$solicitado,$movimiento,$banco,$agente){

        $TotalComision = RegistroAgenteModelo::mdlGuardarPrestamo($persona,$solicitado,$movimiento,$banco,$agente);
        return $TotalComision;
    }
}
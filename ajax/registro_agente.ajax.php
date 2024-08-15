<?php

require_once "../controladores/registro_agente.controlador.php";
require_once "../modelos/registro_agente.modelo.php";
require_once "../vendor/autoload.php";

class AjaxRegistroAgente{
    public $deposito;
    public $retiro;
    public $comision;
    public $Agente;
    public $nombre;

    public function getTablaRegistroAgente(){
        $tablaRegistroAgente = RegistroAgenteControlador::ctrTablaRegistroAgente();
        echo json_encode($tablaRegistroAgente);
    }

    public function getTablaRegistroAgente_2(){
        $tablaRegistroAgente = RegistroAgenteControlador::ctrTablaRegistroAgente_2();
        echo json_encode($tablaRegistroAgente);
    }

    public function getTablaRegistroAgente_3($fecha_eleccion){
        $tablaRegistroAgente = RegistroAgenteControlador::ctrTablaRegistroAgente_3($fecha_eleccion);
        echo json_encode($tablaRegistroAgente);
    }

    public function getTablaEdicionesAgente($fecha_eleccion){
        $tablaRegistroAgente = RegistroAgenteControlador::ctrTablaEdicionesAgente($fecha_eleccion);
        echo json_encode($tablaRegistroAgente);
    }

    public function getTablaEdicionesAgenteHoy(){
        $tablaRegistroAgente = RegistroAgenteControlador::ctrTablaEdicionesAgenteHoy();
        echo json_encode($tablaRegistroAgente);
    }

    public function getSumaMovimiento(){
        $SumaMovimiento = RegistroAgenteControlador::ctrSumaMovimiento();
        echo json_encode($SumaMovimiento);
        return $SumaMovimiento;
    }

    public function getRegistrarMovimiento(){
        $RegistrarMovimiento = RegistroAgenteControlador::ctrRegistrarMovimiento($this ->tipo, $this ->monto, $this ->comision, $this ->Agente, $this ->nombre,$this->cuenta, $this-> codigo,$this->usuario);
        echo json_encode($RegistrarMovimiento);
        return $RegistrarMovimiento;
    }

    public function getSumaDinero(){
        $SumaDinero = RegistroAgenteControlador::ctrSumaDinero();
        echo json_encode($SumaDinero);
        return $SumaDinero;
        //var_dump("EN REGISTRO AJAX: ", $SumaDinero);
    }

    public function getCuentasCredito(){
        $CuentasCredito = RegistroAgenteControlador::ctrCuentasCredito();
        echo json_encode($CuentasCredito);
        //var_dump("EN REGISTRO AJAX: ", $CuentasCredito);
    }

    public function getSumaCredito(){
        $SumaCredito = RegistroAgenteControlador::ctrSumaCredito();
        echo json_encode($SumaCredito);
        //var_dump("EN REGISTRO AJAX: ", $SumaCredito);
    }

    public function getEliminarRegistro(){

        $table = "registro_agente"; 
        $id = $_POST["fecha_hora"]; 
        $nameId = "fecha_hora";
        $motivo = $_POST["motivo"]; 

        $respuesta = RegistroAgenteControlador::ctrEliminarRegistro($table, $id, $nameId, $motivo);

        echo json_encode($respuesta);
    }

    public function getTablaRegistroTransferencia(){
        $tablaRegistroTransferencia = RegistroAgenteControlador::ctrTablaRegistroTransferencia();
        echo json_encode($tablaRegistroTransferencia);
    }

    public function getEliminarTransferencia(){

        $table = "registro_transferencia"; 
        $id = $_POST["fecha_hora"]; 
        $nameId = "fecha_hora";

        $respuesta = RegistroAgenteControlador::ctrEliminarTransferencia($table, $id, $nameId);

        echo json_encode($respuesta);
    }

    public function getRegistrarTransferencia(){
        $RegistrarTransferencia = RegistroAgenteControlador::ctrRegistrarTransferencia($this ->AgenteD, $this ->CuentaD, $this ->AgenteR, $this ->CuentaR,
                                                                                        $this->Transferencia, $this -> Descripcion);
        echo json_encode($RegistrarTransferencia);
        return $RegistrarTransferencia;
    }
    
    public function getTotalComision(){
        $TotalComision = RegistroAgenteControlador::ctrTotalComision();
        echo json_encode($TotalComision);
        //var_dump("EN REGISTRO AJAX: ", $CuentasCredito);
    }

    public function getCambiarCredito(){
        $CambiarCredito = RegistroAgenteControlador::ctrCambiarCredito($this ->agente, $this ->credito, $this ->cuenta);
        echo json_encode($CambiarCredito);
        return $CambiarCredito;
    }

    public function getTotalComisionHoy(){
        $TotalComision = RegistroAgenteControlador::ctrTotalComisionHoy();
        echo json_encode($TotalComision);
        //var_dump("EN REGISTRO AJAX: ", $CuentasCredito);
    }

    public function getAgregarCuenta($agente, $cuenta, $monto){
        $TotalComision = RegistroAgenteControlador::ctrAgregarCuenta($agente, $cuenta, $monto);
        echo json_encode($TotalComision);
        //var_dump("EN REGISTRO AJAX: ", $CuentasCredito);
    }

    public function getTrasferenciasHoy(){
        $TotalComision = RegistroAgenteControlador::ctrTrasferenciasHoy();
        echo json_encode($TotalComision);
        //var_dump("EN REGISTRO AJAX: ", $CuentasCredito);
    }

    public function getListadoAcciones(){
        $TotalComision = RegistroAgenteControlador::ctrListadoAcciones();
        echo json_encode($TotalComision);
        //var_dump("EN REGISTRO AJAX: ", $CuentasCredito);
    }

    public function getListadoEdicionCuenta(){
        $TotalComision = RegistroAgenteControlador::ctrListadoEdicionCuenta();
        echo json_encode($TotalComision);
        //var_dump("EN REGISTRO AJAX: ", $CuentasCredito);
    }

    public function getListadoMontos(){
        $TotalComision = RegistroAgenteControlador::ctrListadoMontos();
        echo json_encode($TotalComision);
        //var_dump("EN REGISTRO AJAX: ", $CuentasCredito);
    }

    public function getMovimentosHoy(){
        $TotalComision = RegistroAgenteControlador::ctrMovimentosHoy();
        echo json_encode($TotalComision);
        //var_dump("EN REGISTRO AJAX: ", $CuentasCredito);
    }

    public function getListarPrestamos(){
        $TotalComision = RegistroAgenteControlador::ctrListarPrestamos();
        echo json_encode($TotalComision);
        //var_dump("EN REGISTRO AJAX: ", $CuentasCredito);
    }

    public function getGuardarPrestamo($persona,$solicitado,$movimiento,$banco,$agente){
        $TotalComision = RegistroAgenteControlador::ctrGuardarPrestamo($persona,$solicitado,$movimiento,$banco,$agente);
        echo json_encode($TotalComision);
        //var_dump("EN REGISTRO AJAX: ", $CuentasCredito);
    }

    public function getListarAgentes(){
        $TotalComision = RegistroAgenteControlador::ctrListarAgentes();
        echo json_encode($TotalComision);
        //var_dump("EN REGISTRO AJAX: ", $CuentasCredito);
    }

    public function getListarAgentes_solo(){
        $TotalComision = RegistroAgenteControlador::ctrListarAgentes_solo();
        echo json_encode($TotalComision);
        //var_dump("EN REGISTRO AJAX: ", $CuentasCredito);
    }

    public function getListarCuentasxAgente($idAgente){
        $TotalComision = RegistroAgenteControlador::ctrListarCuentasxAgente($idAgente);
        echo json_encode($TotalComision);
        //var_dump("EN REGISTRO AJAX: ", $CuentasCredito);
    }

    public function getListarCuentasxAgentexNumero($idAgente){
        $TotalComision = RegistroAgenteControlador::ctrListarCuentasxAgentexNumero($idAgente);
        echo json_encode($TotalComision);
        //var_dump("EN REGISTRO AJAX: ", $CuentasCredito);
    }

    public function getRegistrarRetiro($codigo,$monto,$comision,$tipo,$Agente,$cuenta,$nombre,$usuario,$detalles){
        $TotalComision = RegistroAgenteControlador::ctrRegistrarRetiro($codigo,$monto,$comision,$tipo,$Agente,$cuenta,$nombre,$usuario,$detalles);
        echo json_encode($TotalComision);
        //var_dump("EN REGISTRO AJAX: ", $CuentasCredito);
    }

    public function getRegistrarDeposito($codigo,$monto,$comision,$tipo,$Agente,$cuenta,$nombre,$usuario,$detalles){
        $TotalComision = RegistroAgenteControlador::ctrRegistrarDeposito($codigo,$monto,$comision,$tipo,$Agente,$cuenta,$nombre,$usuario,$detalles);
        echo json_encode($TotalComision);
        //var_dump("EN REGISTRO AJAX: ", $CuentasCredito);
    }

    public function getRegistrarServicio($codigo,$monto,$comision,$tipo,$Agente,$cuenta,$nombre,$usuario,$detalles){
        $TotalComision = RegistroAgenteControlador::ctrRegistrarServicio($codigo,$monto,$comision,$tipo,$Agente,$cuenta,$nombre,$usuario,$detalles);
        echo json_encode($TotalComision);
        //var_dump("EN REGISTRO AJAX: ", $CuentasCredito);
    }

    public function getIngresarNuevosCuentas($Agente,$Nombre,$Credito){
        $TotalComision = RegistroAgenteControlador::ctrIngresarNuevosCuentas($Agente,$Nombre,$Credito);
        echo json_encode($TotalComision);
        //var_dump("EN REGISTRO AJAX: ", $CuentasCredito);
    }

    public function gerEliminarCuenta($Agente,$Nombre,$id){
        $TotalComision = RegistroAgenteControlador::ctrEliminarCuenta($Agente,$Nombre,$id);
        echo json_encode($TotalComision);
        //var_dump("EN REGISTRO AJAX: ", $CuentasCredito);
    }

    public function getEditarCuenta($Agente,$Nombre,$Credito,$id,$diferencia,$banco_antes,$cuenta_antes,$monto_antes,$Usuario){
        $TotalComision = RegistroAgenteControlador::ctrEditarCuenta($Agente,$Nombre,$Credito,$id,$diferencia,$banco_antes,$cuenta_antes,$monto_antes,$Usuario);
        echo json_encode($TotalComision);
        //var_dump("EN REGISTRO AJAX: ", $CuentasCredito);
    }
}

if(isset($_POST['accion']) && $_POST['accion'] == 1){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxRegistroAgente();
    $tablaRegistroAgente -> getTablaRegistroAgente();

}else if(isset($_POST['accion']) && $_POST['accion'] == 2){ //Ejecutar function ventas del mes (Grafico de Barras)

    $SumaMovimiento = new AjaxRegistroAgente();
    $SumaMovimiento -> getSumaMovimiento();

}else if(isset($_POST['accion']) && $_POST['accion'] == 3){ //Ejecutar function ventas del mes (Grafico de Barras)

    $RegistrarMovimiento = new AjaxRegistroAgente();
    $RegistrarMovimiento -> tipo = $_POST["tipo"];
    $RegistrarMovimiento -> monto= $_POST["monto"];
    $RegistrarMovimiento -> comision = $_POST["comision"];
    $RegistrarMovimiento -> Agente = $_POST["Agente"];
    $RegistrarMovimiento -> cuenta = $_POST["cuenta"];
    $RegistrarMovimiento -> nombre = $_POST["nombre"];
    $RegistrarMovimiento -> codigo = $_POST["codigo"];
    $RegistrarMovimiento -> usuario = $_POST["usuario"];
    $RegistrarMovimiento -> getRegistrarMovimiento();

}else if(isset($_POST['accion']) && $_POST['accion'] == 4){ //Ejecutar function ventas del mes (Grafico de Barras)

    $SumaDinero = new AjaxRegistroAgente();
    $SumaDinero -> getSumaDinero();

}else if(isset($_POST['accion']) && $_POST['accion'] == 5){ //Ejecutar function ventas del mes (Grafico de Barras)

    $CuentasCredito = new AjaxRegistroAgente();
    $CuentasCredito -> getCuentasCredito();

}else if(isset($_POST['accion']) && $_POST['accion'] == 6){ //Ejecutar function ventas del mes (Grafico de Barras)

    $SumaCredito = new AjaxRegistroAgente();
    $SumaCredito -> getSumaCredito();

}else if(isset($_POST['accion']) && $_POST['accion'] == 7){// ACCION PARA ELIMINAR UN Registro

    $eliminarRegistro = new AjaxRegistroAgente();
    $eliminarRegistro -> getEliminarRegistro();

}else if(isset($_POST['accion']) && $_POST['accion'] == 8){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroTransferencia = new AjaxRegistroAgente();
    $tablaRegistroTransferencia -> getTablaRegistroTransferencia();

}else if(isset($_POST['accion']) && $_POST['accion'] == 9){// ACCION PARA ELIMINAR UN Registro

    $eliminarTransferencia = new AjaxRegistroAgente();
    $eliminarTransferencia -> getEliminarTransferencia();

}else if(isset($_POST['accion']) && $_POST['accion'] == 10){ //Ejecutar function ventas del mes (Grafico de Barras)

    $RegistrarTransferencia = new AjaxRegistroAgente();
    $RegistrarTransferencia -> AgenteD = $_POST["AgenteD"];
    $RegistrarTransferencia -> CuentaD= $_POST["CuentaD"];
    $RegistrarTransferencia -> AgenteR = $_POST["AgenteR"];
    $RegistrarTransferencia -> CuentaR = $_POST["CuentaR"];
    $RegistrarTransferencia -> Transferencia = $_POST["Transferencia"];
    $RegistrarTransferencia -> Descripcion = $_POST["Descripcion"];
    $RegistrarTransferencia -> getRegistrarTransferencia();

}else if(isset($_POST['accion']) && $_POST['accion'] == 12){ //Ejecutar function ventas del mes (Grafico de Barras)

    $CambiarCredito = new AjaxRegistroAgente();
    $CambiarCredito -> credito = $_POST["credito"];
    $CambiarCredito -> agente= $_POST["agente"];
    $CambiarCredito -> cuenta = $_POST["cuenta"];
    $CambiarCredito -> getCambiarCredito();

}else if(isset($_POST['accion']) && $_POST['accion'] == 11){ //Ejecutar function ventas del mes (Grafico de Barras)

    $TotalComision = new AjaxRegistroAgente();
    $TotalComision -> getTotalComision();

}else if(isset($_POST['accion']) && $_POST['accion'] == 13){ //Ejecutar function ventas del mes (Grafico de Barras)

    $TotalComision = new AjaxRegistroAgente();
    $TotalComision -> getTotalComisionHoy();

}else if(isset($_POST['accion']) && $_POST['accion'] == 14){ //Ejecutar function ventas del mes (Grafico de Barras)

    $TotalComision = new AjaxRegistroAgente();
    $TotalComision -> getAgregarCuenta($_POST['agente'],$_POST['cuenta'],$_POST['monto']);

}else if(isset($_POST['accion']) && $_POST['accion'] == 15){ //Ejecutar function ventas del mes (Grafico de Barras)

    $TotalComision = new AjaxRegistroAgente();
    $TotalComision -> getTrasferenciasHoy();

}else if(isset($_POST['accion']) && $_POST['accion'] == 16){ //Ejecutar function ventas del mes (Grafico de Barras)

    $TotalComision = new AjaxRegistroAgente();
    $TotalComision -> getMovimentosHoy();

}else if(isset($_POST['accion']) && $_POST['accion'] == 17){ //Ejecutar function ventas del mes (Grafico de Barras)

    $TotalComision = new AjaxRegistroAgente();
    $TotalComision -> getListarPrestamos();

}else if(isset($_POST['accion']) && $_POST['accion'] == 18){ //Ejecutar function ventas del mes (Grafico de Barras)

    $TotalComision = new AjaxRegistroAgente();
    $TotalComision -> getGuardarPrestamo($_POST['persona'],$_POST['solicitado'],$_POST['movimiento'],$_POST['banco'],$_POST['agente']);

}else if(isset($_POST['accion']) && $_POST['accion'] == 19){ //Ejecutar function ventas del mes (Grafico de Barras)

    $TotalComision = new AjaxRegistroAgente();
    $TotalComision -> getListarAgentes();

}else if(isset($_POST['accion']) && $_POST['accion'] == 20){ //Ejecutar function ventas del mes (Grafico de Barras)

    $TotalComision = new AjaxRegistroAgente();
    $TotalComision -> getListarCuentasxAgente($_POST['idAgente']);

}else if(isset($_POST['accion']) && $_POST['accion'] == 21){ //Ejecutar function ventas del mes (Grafico de Barras)

    $TotalComision = new AjaxRegistroAgente();
    $TotalComision -> getListarAgentes_solo();

}else if(isset($_POST['accion']) && $_POST['accion'] == 22){ //Ejecutar function ventas del mes (Grafico de Barras)

    $TotalComision = new AjaxRegistroAgente();
    $TotalComision -> getListadoAcciones();

}else if(isset($_POST['accion']) && $_POST['accion'] == 23){ //Ejecutar function ventas del mes (Grafico de Barras)

    $TotalComision = new AjaxRegistroAgente();
    $TotalComision -> getListadoMontos();

}else if(isset($_POST['accion']) && $_POST['accion'] == 24){ //Ejecutar function ventas del mes (Grafico de Barras)

    $TotalComision = new AjaxRegistroAgente();
    

    if(isset($_POST['eleccion']) && $_POST['eleccion'] == 1){
        $TotalComision -> getRegistrarRetiro($_POST['codigo'],$_POST['monto'],$_POST['comision'],$_POST['tipo'],$_POST['Agente'],$_POST['cuenta'],$_POST['nombre'],$_POST['usuario'],$_POST['detalles']);
    }else if(isset($_POST['eleccion']) && $_POST['eleccion'] == 2){
        $TotalComision -> getRegistrarDeposito($_POST['codigo'],$_POST['monto'],$_POST['comision'],$_POST['tipo'],$_POST['Agente'],$_POST['cuenta'],$_POST['nombre'],$_POST['usuario'],$_POST['detalles']);
    }else if(isset($_POST['eleccion']) && $_POST['eleccion'] == 3){
        $TotalComision -> getRegistrarServicio($_POST['codigo'],$_POST['monto'],$_POST['comision'],$_POST['tipo'],$_POST['Agente'],$_POST['cuenta'],$_POST['nombre'],$_POST['usuario'],$_POST['detalles']);
    }
    

}else if(isset($_POST['accion']) && $_POST['accion'] == 25){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxRegistroAgente();
    $tablaRegistroAgente -> getTablaRegistroAgente_2();

}else if(isset($_POST['accion']) && $_POST['accion'] == 26){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxRegistroAgente();
    $tablaRegistroAgente -> getTablaRegistroAgente_3($_POST['fecha_eleccion']);

}else if(isset($_POST['accion']) && $_POST['accion'] == 27){ //Ejecutar function ventas del mes (Grafico de Barras)

    $TotalComision = new AjaxRegistroAgente();
    $TotalComision -> getListarCuentasxAgentexNumero($_POST['idAgente']);

}else if(isset($_POST['accion']) && $_POST['accion'] == 28){ //Ejecutar function ventas del mes (Grafico de Barras)

    $TotalComision = new AjaxRegistroAgente();
    $TotalComision -> getListadoEdicionCuenta();

}else if(isset($_POST['accion']) && $_POST['accion'] == 29){ //Ejecutar function ventas del mes (Grafico de Barras)

    $TotalComision = new AjaxRegistroAgente();
    $TotalComision -> getIngresarNuevosCuentas($_POST['Agente'],$_POST['Nombre'],$_POST['Credito']);

}else if(isset($_POST['accion']) && $_POST['accion'] == 30){ //Ejecutar function ventas del mes (Grafico de Barras)

    $TotalComision = new AjaxRegistroAgente();
    $TotalComision -> gerEliminarCuenta($_POST['Agente'],$_POST['Nombre'],$_POST['id']);

}else if(isset($_POST['accion']) && $_POST['accion'] == 31){ //Ejecutar function ventas del mes (Grafico de Barras)

    $TotalComision = new AjaxRegistroAgente();
    $TotalComision -> getEditarCuenta($_POST['Agente'],$_POST['Nombre'],$_POST['Credito'],$_POST['id'],$_POST['diferencia'],$_POST['banco_antes'],$_POST['cuenta_antes'],$_POST['monto_antes'],$_POST['Usuario']);

}else if(isset($_POST['accion']) && $_POST['accion'] == 32){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxRegistroAgente();
    $tablaRegistroAgente -> getTablaEdicionesAgente($_POST['fecha_eleccion']);

}else if(isset($_POST['accion']) && $_POST['accion'] == 33){ //Ejecutar function ventas del mes (Grafico de Barras)

    $tablaRegistroAgente = new AjaxRegistroAgente();
    $tablaRegistroAgente -> getTablaEdicionesAgenteHoy();

}else{

    $tablaRegistroAgente = new AjaxRegistroAgente();
    $tablaRegistroAgente -> getTablaRegistroAgente();
}
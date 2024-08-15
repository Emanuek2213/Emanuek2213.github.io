<?php
    require_once "../controladores/administrar_cliente.controlador.php";
    require_once "../modelos/administrar_cliente.modelo.php";

    require_once "../vendor/autoload.php";


class ajaxAdminstrarCliente{

    /*===================================================================
    Analiza si el producto esta dentro del historial del cliente
    ====================================================================*/
    public function ajaxAnalizarProducto(){

        $Analisis = AdminstrarClienteControlador::ctrAnalizarProducto();

        echo json_encode($Analisis);
    }

    public function ajaxVerDuplicado($id, $dni){

        $Analisis = AdminstrarClienteControlador::ctrVerDuplicado($id, $dni);

        echo json_encode($Analisis);
    }

    public function ajaxAgregarProducto($id, $dni){

        $Analisis = AdminstrarClienteControlador::ctrAgregarProducto($id, $dni);

        echo json_encode($Analisis);
    }

    public function ajaxEliminarProducto($id, $dni){

        $Analisis = AdminstrarClienteControlador::ctrEliminarProducto($id, $dni);

        echo json_encode($Analisis);
    }

}

if(isset($_POST["accion"]) && $_POST["accion"] == 1){  // TRAER LISTADO DE PRODUCTOS PARA EL AUTOCOMPLETE

    $Analisis = new ajaxAdminstrarCliente();
    $Analisis -> ajaxAnalizarProducto();

}else if(isset($_POST["accion"]) && $_POST["accion"] == 2){  // TRAER LISTADO DE PRODUCTOS PARA EL AUTOCOMPLETE

    $Analisis = new ajaxAdminstrarCliente();
    $Analisis -> ajaxVerDuplicado($_POST["id"],$_POST["dni"]);

}else if(isset($_POST["accion"]) && $_POST["accion"] == 3){  // TRAER LISTADO DE PRODUCTOS PARA EL AUTOCOMPLETE

    $Analisis = new ajaxAdminstrarCliente();
    $Analisis -> ajaxAgregarProducto($_POST["id"],$_POST["dni"]);

}else if(isset($_POST["accion"]) && $_POST["accion"] == 4){  // TRAER LISTADO DE PRODUCTOS PARA EL AUTOCOMPLETE

    $Analisis = new ajaxAdminstrarCliente();
    $Analisis -> ajaxEliminarProducto($_POST["id"],$_POST["dni"]);

}
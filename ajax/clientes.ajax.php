<?php

require_once "../controladores/clientes.controlador.php";
require_once "../modelos/clientes.modelo.php";

require_once "../vendor/autoload.php";


class ajaxClientes{

    /*===================================================================
    LISTAR NOMBRE DE PRODUCTOS PARA INPUT DE AUTO COMPLETADO
    ====================================================================*/
    public function ajaxListarNombreClientes(){

        $NombreClientes = ClientesControlador::ctrListarNombreClientes();

        echo json_encode($NombreClientes);
    }

    public function ajaxDarClientes(){
        $NombreClientes = ClientesControlador::ctrDarClientes();

        echo json_encode($NombreClientes);
    }

    public function ajaxBuscarCliente($idCliente){
        $NombreClientes = ClientesControlador::ctrBuscarCliente($idCliente);

        echo json_encode($NombreClientes);
    }

    public function ajaxBuscarClientexProveedor($Proveedor){
        $NombreClientes = ClientesControlador::ctrBuscarClientexProveedor($Proveedor);

        echo json_encode($NombreClientes);
    }

    public function ajaxActualizarTable($senal, $Nombres, $Telefono, $Identificacion, $Direccion, $Tipo){
        $NewTable = ClientesControlador::ctrActualizarTable($senal, $Nombres, $Telefono, $Identificacion, $Direccion, $Tipo);

        echo json_encode($NewTable);
    }

    public function ajaxDarCliente($idCliente){
        $NombreClientes = ClientesControlador::ctrDarCliente($idCliente);

        echo json_encode($NombreClientes);
    }

    public function ajaxEliminarHistorial($NombreCliente){
        $NombreClientes = ClientesControlador::ctrEliminarHistorial($NombreCliente);

        echo json_encode($NombreClientes);
    }

    public function ajaxDarBoleta($NombreCliente){
        $NombreClientes = ClientesControlador::ctrDarBoleta($NombreCliente);

        echo json_encode($NombreClientes);
    }

    public function ajaxEliminarProductos($idBoleta,$Comentario){
        $NombreClientes = ClientesControlador::ctrEliminarProductos($idBoleta,$Comentario);

        echo json_encode($NombreClientes);
    }

    public function ajaxEliminarProductosCompra($idBoleta){
        $NombreClientes = ClientesControlador::ctrEliminarProductosCompra($idBoleta);

        echo json_encode($NombreClientes);
    }

    public function ajaxEliminarCliente($idCliente){
        $NombreClientes = ClientesControlador::ctrEliminarCliente($idCliente);

        echo json_encode($NombreClientes);
    }

    public function ajaxCambiarDatos($numero,$RazonSocial,$RazonComercial,$Identificacion,$Direccion,$Telefono,$Detalles,$Correo,$Cuenta){
        $NombreClientes = ClientesControlador::ctrCambiarDatos($numero,$RazonSocial,$RazonComercial,$Identificacion,$Direccion,$Telefono,$Detalles,$Correo,$Cuenta);

        echo json_encode($NombreClientes);
    }

    public function ajaxVerRepetido($nombre,$Ident,$Direccion){
        $NombreClientes = ClientesControlador::ctrVerRepetido($nombre,$Ident,$Direccion);

        echo json_encode($NombreClientes);
    }

    public function ajaxActualizarCliente($data,$imagen = null){
        
        $table = "clientes_nombre";
        $id = $_POST["codigo"];
        $nameId = "id_cliente";

        $respuesta = ClientesControlador::ctrActualizarCliente($table, $data, $id, $nameId,$imagen);

        echo json_encode($respuesta);
    }

    public function ajaxListarClientes(){

        $NombreClientes = ClientesControlador::ctrListarClientes();

        echo json_encode($NombreClientes);
    }

    public function ajaxDarProveedores(){
        $NombreClientes = ClientesControlador::ctrDarProveedores();

        echo json_encode($NombreClientes);
    }

}

if(isset($_POST["accion"]) && $_POST["accion"] == 1){  // TRAER LISTADO DE PRODUCTOS PARA EL AUTOCOMPLETE

    $nombreClientes = new ajaxClientes();
    $nombreClientes -> ajaxListarNombreClientes();

} else if(isset($_POST["accion"]) && $_POST["accion"] == 2){  // TRAER LISTADO DE PRODUCTOS PARA EL AUTOCOMPLETE

    $nombreClientes = new ajaxClientes();
    $nombreClientes -> ajaxDarClientes();

}else if(isset($_POST["accion"]) && $_POST["accion"] == 3){  // TRAER LISTADO DE PRODUCTOS PARA EL AUTOCOMPLETE

    $nombreClientes = new ajaxClientes();
    $nombreClientes -> ajaxBuscarCliente($_POST["idCliente"]);

}else if(isset($_POST["accion"]) && $_POST["accion"] == 4){  // TRAER LISTADO DE PRODUCTOS PARA EL AUTOCOMPLETE

    $NewTable = new ajaxClientes();
    $NewTable -> ajaxActualizarTable($_POST["senal"],$_POST["Nombres"], $_POST["Telefono"], $_POST["Identificacion"], $_POST["Direccion"], $_POST["Tipo"]);

}else if(isset($_POST["accion"]) && $_POST["accion"] == 5){  // TRAER LISTADO DE PRODUCTOS PARA EL AUTOCOMPLETE

    $NewTable = new ajaxClientes();
    $NewTable -> ajaxDarCliente($_POST["idCliente"]);

}else if(isset($_POST["accion"]) && $_POST["accion"] == 6){  // TRAER LISTADO DE PRODUCTOS PARA EL AUTOCOMPLETE

    $NewTable = new ajaxClientes();
    $NewTable -> ajaxEliminarHistorial($_POST["NombreCliente"]);

}else if(isset($_POST["accion"]) && $_POST["accion"] == 7){  // TRAER LISTADO DE PRODUCTOS PARA EL AUTOCOMPLETE

    $NewTable = new ajaxClientes();
    $NewTable -> ajaxDarBoleta($_POST["NombreCliente"]);

}else if(isset($_POST["accion"]) && $_POST["accion"] == 8){  // TRAER LISTADO DE PRODUCTOS PARA EL AUTOCOMPLETE

    $NewTable = new ajaxClientes();
    $NewTable -> ajaxEliminarProductos($_POST["idBoleta"],$_POST["Comentario"]);

}else if(isset($_POST["accion"]) && $_POST["accion"] == 9){  // TRAER LISTADO DE PRODUCTOS PARA EL AUTOCOMPLETE

    $NewTable = new ajaxClientes();
    $NewTable -> ajaxEliminarCliente($_POST["idCliente"]);

}else if(isset($_POST["accion"]) && $_POST["accion"] == 10){  // TRAER LISTADO DE PRODUCTOS PARA EL AUTOCOMPLETE

    $NewTable = new ajaxClientes();
    $NewTable -> ajaxCambiarDatos($_POST["numero"],$_POST["RazonSocial"],$_POST["RazonComercial"],$_POST["Identificacion"],$_POST["Direccion"],$_POST["Telefono"],$_POST["Detalles"],$_POST["Correo"],$_POST["Cuenta"]);

}else if(isset($_POST["accion"]) && $_POST["accion"] == 11){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $imagen = array(); // Inicializar la variable $imagen

    if(isset($_FILES["archivo"]["name"])){

        $imagen["ubicacionTemporal"] = $_FILES["archivo"]["tmp_name"][0];

        $info = new SplFileInfo($_FILES["archivo"]["name"][0]);

        $imagen["nuevoNombre"]= sprintf("%s_%d.%s",uniqid(),rand(100,999),$info->getExtension());

        $imagen["folder"] = '../vistas/assets/imagenes/Clientes/';

        $actualizarProducto = new ajaxClientes();
        $data = array(
            
            "Perfil" =>  $imagen["nuevoNombre"]
        );
        $actualizarProducto -> ajaxActualizarCliente($data,$imagen);

    } else {
        $actualizarProducto = new ajaxClientes();
        $data = array(
            
            "Perfil" =>  $imagen["nuevoNombre"]
            
        );
        $actualizarProducto -> ajaxActualizarCliente($data);
    }
    
} else if(isset($_POST["accion"]) && $_POST["accion"] == 12){  // TRAER LISTADO DE PRODUCTOS PARA EL AUTOCOMPLETE

    $NewTable = new ajaxClientes();
    $NewTable -> ajaxVerRepetido($_POST["nombre"],$_POST["Ident"],$_POST["Direccion"]);

} else if(isset($_POST["accion"]) && $_POST["accion"] == 13){  // TRAER LISTADO DE PRODUCTOS PARA EL AUTOCOMPLETE

    $NombreClientes = new ajaxClientes();
    $NombreClientes -> ajaxListarClientes();

} else if(isset($_POST["accion"]) && $_POST["accion"] == 14){  // TRAER LISTADO DE PRODUCTOS PARA EL AUTOCOMPLETE

    $nombreClientes = new ajaxClientes();
    $nombreClientes -> ajaxDarProveedores();

}else if(isset($_POST["accion"]) && $_POST["accion"] == 15){  // TRAER LISTADO DE PRODUCTOS PARA EL AUTOCOMPLETE

    $nombreClientes = new ajaxClientes();
    $nombreClientes -> ajaxBuscarClientexProveedor($_POST["Proveedor"]);

}else if(isset($_POST["accion"]) && $_POST["accion"] == 16){  // TRAER LISTADO DE PRODUCTOS PARA EL AUTOCOMPLETE

    $NewTable = new ajaxClientes();
    $NewTable -> ajaxEliminarProductosCompra($_POST["idBoleta"]);

}
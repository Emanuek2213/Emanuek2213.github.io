<?php
require_once "../modelos/clientes.modelo.php";
require_once "../vendor/autoload.php";


class ClientesControlador{
    /*===================================================================
    LISTAR NOMBRE DE PRODUCTOS PARA INPUT DE AUTO COMPLETADO
    ====================================================================*/
    static public function ctrListarNombreClientes(){

        $Clientes = ClientesModelo::mdlListarNombreClientes();
        
        return $Clientes;
    }

    static public function ctrDarClientes(){

        $Clientes = ClientesModelo::mdlDarClientes();
        
        return $Clientes;
    }
    static public function ctrBuscarCliente($idCliente){

        $Clientes = ClientesModelo::mdlBuscarCliente($idCliente);
        
        return $Clientes;
    }

    static public function ctrBuscarClientexProveedor($Proveedor){

        $Proveedor = ClientesModelo::mdlBuscarClientexProveedor($Proveedor);
        
        return $Proveedor;
    }

    static public function ctrActualizarTable($senal, $Nombres, $Telefono, $Identificacion, $Direccion, $Tipo){

        $NewTable = ClientesModelo::mdlActualizarTable($senal, $Nombres, $Telefono, $Identificacion, $Direccion, $Tipo);
        
        return $NewTable;
    }

    static public function ctrDarCliente($idCliente){

        $Clientes = ClientesModelo::mdlDarCliente($idCliente);
        
        return $Clientes;
    }

    static public function ctrEliminarHistorial($NombreCliente){

        $Clientes = ClientesModelo::mdlEliminarHistorial($NombreCliente);
        
        return $Clientes;
    }

    static public function ctrDarBoleta($NombreCliente){

        $Clientes = ClientesModelo::mdlDarBoleta($NombreCliente);
        
        return $Clientes;
    }

    static public function ctrEliminarProductos($idBoleta,$Comentario){

        $Clientes = ClientesModelo::mdlEliminarProductos($idBoleta,$Comentario);
        
        return $Clientes;
    }

    static public function ctrEliminarProductosCompra($idBoleta){

        $Clientes = ClientesModelo::mdlEliminarProductosCompra($idBoleta);
        
        return $Clientes;
    }

    static public function ctrEliminarCliente($idCliente){

        $Clientes = ClientesModelo::mdlEliminarCliente($idCliente);
        
        return $Clientes;
    }

    static public function ctrCambiarDatos($numero,$RazonSocial,$RazonComercial,$Identificacion,$Direccion,$Telefono,$Detalles,$Correo,$Cuenta){

        $Clientes = ClientesModelo::mdlCambiarDatos($numero,$RazonSocial,$RazonComercial,$Identificacion,$Direccion,$Telefono,$Detalles,$Correo,$Cuenta);
        
        return $Clientes;
    }

    static public function ctrVerRepetido($nombre,$Ident,$Direccion){

        $Clientes = ClientesModelo::mdlVerRepetido($nombre,$Ident,$Direccion);
        
        return $Clientes;
    }

    static public function ctrActualizarCliente($table, $data, $id, $nameId,$imagen){

        $registroProducto = ClientesModelo::mdlActualizarCliente($table, $data, $id, $nameId,$imagen);

        return $registroProducto;
    }

    static public function ctrListarClientes(){

        $producto = ClientesModelo::mdlListarClientes();
        
        return $producto;
    }

    static public function ctrDarProveedores(){

        $Clientes = ClientesModelo::mdlDarProveedores();
        
        return $Clientes;
    }
    
}
<?php
require_once "../modelos/productos.modelo.php";
require_once "../vendor/autoload.php";


class ProductosControlador{

    static public function ctrCargaMasivaProductos($fileProductos){
        
        $respuesta = ProductosModelo::mdlCargaMasivaProductos($fileProductos);
        return $respuesta;
    }

    static public function ctrListarProductos(){
    
        $productos = ProductosModelo::mdlListarProductos();
    
        return $productos;
    
    }

    static public function ctrListarProductosNuevo(){
    
        $productos = ProductosModelo::mdlListarProductosNuevo();
    
        return $productos;
    
    }

    static public function ctrRegistrarProducto($table, $data, $id, $nameId,$imagen){

        $registroProducto = ProductosModelo::mdlRegistrarProducto($table, $data, $id, $nameId,$imagen);

        return $registroProducto;
    }

    static public function ctrActualizarStock($table, $data, $id, $nameId){
        
        $respuesta = ProductosModelo::mdlActualizarInformacion($table, $data, $id, $nameId);
        
        return $respuesta;
    }

    static public function ctrActualizarProducto($table, $data, $id, $nameId,$imagen){
        
        $respuesta = ProductosModelo::mdlActualizarInformacion($table, $data, $id, $nameId,$imagen);
        
        return $respuesta;
    }

    static public function ctrEliminarProducto($table, $id, $nameId)
    {
        $respuesta = ProductosModelo::mdlEliminarInformacion($table, $id, $nameId);
        
        return $respuesta;
    }

    /*===================================================================
    LISTAR NOMBRE DE PRODUCTOS PARA INPUT DE AUTO COMPLETADO
    ====================================================================*/
    static public function ctrListarNombreProductos(){

        $producto = ProductosModelo::mdlListarNombreProductos();
        
        return $producto;
    }

    /*===================================================================
    BUSCAR PRODUCTO POR SU CODIGO DE BARRAS
    ====================================================================*/
    static public function ctrGetDatosProducto($codigo_producto){
            
        $producto = ProductosModelo::mdlGetDatosProducto($codigo_producto);

        return $producto;

    }

    static public function ctrVerificaStockProducto($codigo_producto, $cantidad_a_comprar,$medida){
            
        $producto = ProductosModelo::mdlVerificaStockProducto($codigo_producto, $cantidad_a_comprar,$medida);

        return $producto;

    }

    /*===================================================================
    LISTAR NOMBRE DE PRODUCTOS x CLIENTES PARA INPUT DE AUTO COMPLETADO
    ====================================================================*/
    static public function ctrListarNombreProductosxClientes($dni){

        $productoClientes = ProductosModelo::mdlListarNombreProductosxClientes($dni);
        
        return $productoClientes;
    }
    
    static public function ctrListarProductos2(){
    
        $productos = ProductosModelo::mdlListarProductos2();
    
        return $productos;
    
    }

    static public function ctrListarxCliente( $id_cliente){
    
        $productos = ProductosModelo::mdlListarxCliente( $id_cliente);
    
        return $productos;
    
    }

    static public function ctrListarProductos3(){
    
        $productos = ProductosModelo::mdlListarProductos3();
    
        return $productos;
    
    }

    static public function ctrListarProductosxClientes($id_cliente){
    
        $productos = ProductosModelo::mdlListarProductosxClientes($id_cliente);
    
        return $productos;
    
    }

    static public function ctrGetDatosProductoxCliente($codigo_producto,$dni){
            
        $producto = ProductosModelo::mdlGetDatosProductoxCliente($codigo_producto,$dni);

        return $producto;

    }

    static public function ctrVerificarProductoCliente($codigo_producto,$dni){
            
        $producto = ProductosModelo::mdlVerificarProductoCliente($codigo_producto,$dni);

        return $producto;

    }

    static public function ctrAñadirProductoCliente($codigo_producto,$dni){
            
        $producto = ProductosModelo::mdlAñadirProductoCliente($codigo_producto,$dni);

        return $producto;

    }

    static public function ctrCambiarPrecioCliente($codigo_producto,$dni,$opcion,$precio){
            
        $producto = ProductosModelo::mdlCambiarPrecioCliente($codigo_producto,$dni,$opcion,$precio);

        return $producto;

    }

    static public function ctrDarDatosProducto($codigo_producto){
            
        $producto = ProductosModelo::mdlDarDatosProducto($codigo_producto);

        return $producto;

    }

    static public function ctrEditarProducto($codigo,$descripcion,$precio_unidad,$precio_paquete,$precio_docena,$precio_ciento,$precio_millar,$precio_caja,$precio_fardo,$precio_plancha,$precio_unidad_2,$precio_paquete_2,$precio_docena_2,$precio_ciento_2,$precio_millar_2,$precio_caja_2,$precio_fardo_2,$precio_plancha_2,$cantidad_ciento,$cantidad_millar,$cantidad_caja,$cantidad_fardo,$cantidad_plancha,$stock,$min_stock,$direccion,$id_categoria_producto){
            
        $producto = ProductosModelo::mdlEditarProducto($codigo,$descripcion,$precio_unidad,$precio_paquete,$precio_docena,$precio_ciento,$precio_millar,$precio_caja,$precio_fardo,$precio_plancha,$precio_unidad_2,$precio_paquete_2,$precio_docena_2,$precio_ciento_2,$precio_millar_2,$precio_caja_2,$precio_fardo_2,$precio_plancha_2,$cantidad_ciento,$cantidad_millar,$cantidad_caja,$cantidad_fardo,$cantidad_plancha,$stock,$min_stock,$direccion,$id_categoria_producto);

        return $producto;

    }

    static public function ctrListarNombreProductosClientes($id_cliente){

        $producto = ProductosModelo::mdlListarNombreProductosClientes($id_cliente);
        
        return $producto;
    }

    static public function ctrGetDatosProductoCliente($codigo_producto,$id_cliente){

        $producto = ProductosModelo::mdlGetDatosProductoCliente($codigo_producto,$id_cliente);
        
        return $producto;
    }

    static public function ctrRegistrarProductoSinImagen($table, $data, $id, $nameId){

        $registroProducto = ProductosModelo::mdlRegistrarProductoSinImagen($table, $data, $id, $nameId);

        return $registroProducto;
    }

    static public function ctrActualizarProductoSinImagen($table, $data, $id, $nameId){
        
        $respuesta = ProductosModelo::mdlActualizarInformacionSinImagen($table, $data, $id, $nameId);
        
        return $respuesta;
    }

    static public function ctrCodigoRepetido($codigo){

        $producto = ProductosModelo::mdlCodigoRepetido($codigo);
        
        return $producto;
    }

    static public function ctrDarPrecio($codigo){

        $producto = ProductosModelo::mdlDarPrecio($codigo);
        
        return $producto;
    }

    static public function ctrConteoProductos(){

        $producto = ProductosModelo::mdlConteoProductos();
        
        return $producto;
    }

    static public function ctrListarPreciosCantidades(){
    
        $productos = ProductosModelo::mdlListarPreciosCantidades();
    
        return $productos;
    
    }
    
    static public function ctrListarPreciosCompletosCantidades($codigo_producto){
    
        $productos = ProductosModelo::mdlListarPreciosCompletosCantidades($codigo_producto);
    
        return $productos;
    
    }

    static public function ctrRegistrarProductoNuevo($table, $data, $id, $nameId,$imagen){

        $registroProducto = ProductosModelo::mdlRegistrarProductoNuevo($table, $data, $id, $nameId,$imagen);

        return $registroProducto;
    }

    static public function ctrRegistrarProductoNuevoSinImagen($table, $data, $id, $nameId){

        $registroProducto = ProductosModelo::mdlRegistrarProductoNuevoSinImagen($table, $data, $id, $nameId);

        return $registroProducto;
    }

    static public function ctrActualizarProductoNuevo($table, $data, $id, $nameId,$imagen){

        $registroProducto = ProductosModelo::mdlActualizarProductoNuevo($table, $data, $id, $nameId,$imagen);

        return $registroProducto;
    }

    static public function ctrActualizarProductoNuevoSinImagen($table, $data, $id, $nameId){

        $registroProducto = ProductosModelo::mdlActualizarProductoNuevoSinImagen($table, $data, $id, $nameId);

        return $registroProducto;
    }
}
<?php

require_once "../controladores/productos.controlador.php";
require_once "../modelos/productos.modelo.php";

require_once "../vendor/autoload.php";

class ajaxProductos{

    public $fileProductos;

    public $codigo_producto;
    public $id_categoria_producto;
    public $descripcion_producto;
    public $precio_compra_producto;
    public $medida;
    public $precio_venta_producto;
    public $precio_venta_producto_paquete;
    public $precio_venta_producto_docena;
    public $precio_venta_producto_ciento;
    public $precio_venta_producto_millar;
    public $precio_venta_producto_caja;
    public $precio_venta_producto_fardo;
    public $utilidad;
    public $cantidad_millar;
    public $cantidad_docena;
    public $cantidad_fardo;
    public $cantidad_caja;
    public $stock_producto;
    public $minimo_stock_producto;
    public $ventas_producto;
    public $cantidad_a_comprar;

    public function ajaxCargaMasivaProductos(){

        $respuesta = ProductosControlador::ctrCargaMasivaProductos($this->fileProductos);
        var_dump($respuesta);
        if($respuesta['totalCategorias'] > 0 && $respuesta['totalProductos'] > 0){
            $accion = 1;
        } else{
            $accion = 0;
        }

        echo ($accion);
    }

    public function ajaxListarProductos(){
    
        $productos = ProductosControlador::ctrListarProductos();
    
        echo json_encode($productos);
    
    }

    public function ajaxListarProductosNuevo(){
    
        $productos = ProductosControlador::ctrListarProductosNuevo();
    
        echo json_encode($productos);
    
    }

    public function ajaxRegistrarProducto($data,$imagen = null){
        
        $table = "productos";
        $id = $_POST["codigo_producto"];
        $nameId = "codigo_producto";
        $producto = ProductosControlador::ctrRegistrarProducto($table, $data, $id, $nameId,$imagen);

        echo json_encode($producto);
    }

    public function ajaxActualizarStock($data){

        $table = "productos";
        $id = $_POST["codigo_producto"];
        $nameId = "codigo_producto";

        $respuesta = ProductosControlador::ctrActualizarStock($table, $data, $id, $nameId);

        echo json_encode($respuesta);
    }

    public function ajaxActualizarProducto($data,$imagen = null){
        
        $table = "productos";
        $id = $_POST["codigo_producto"];
        $nameId = "codigo_producto";

        $respuesta = ProductosControlador::ctrActualizarProducto($table, $data, $id, $nameId,$imagen);

        echo json_encode($respuesta);
    }

    public function ajaxEliminarProducto(){

        $table = "productos"; 
        $id = $_POST["codigo_producto"]; 
        $nameId = "codigo_producto";

        $respuesta = ProductosControlador::ctrEliminarProducto($table, $id, $nameId);

        echo json_encode($respuesta);
    }

    /*===================================================================
    LISTAR NOMBRE DE PRODUCTOS PARA INPUT DE AUTO COMPLETADO
    ====================================================================*/
    public function ajaxListarNombreProductos(){

        $NombreProductos = ProductosControlador::ctrListarNombreProductos();

        echo json_encode($NombreProductos);
    }

    /*===================================================================
    BUSCAR PRODUCTO POR SU CODIGO DE BARRAS
    ====================================================================*/
    public function ajaxGetDatosProducto(){
        
        $producto = ProductosControlador::ctrGetDatosProducto($this->codigo_producto);

        echo json_encode($producto);
    }

    public function ajaxGetDatosProductoxCliente($codigo_producto,$dni){
        
        $producto = ProductosControlador::ctrGetDatosProductoxCliente($codigo_producto,$dni);

        echo json_encode($producto);
    }

    public function ajaxVerificaStockProducto(){
        
        $producto = ProductosControlador::ctrVerificaStockProducto($this->codigo_producto, $this->cantidad_a_comprar,$this->medida);

        echo json_encode($producto);
    }

    /*===================================================================
    LISTAR NOMBRE DE PRODUCTOS x CLIENTES PARA INPUT DE AUTO COMPLETADO
    ====================================================================*/
    public function ajaxListarNombreProductosxClientes($dni){

        $NombreProductosxClientes = ProductosControlador::ctrListarNombreProductosxClientes($dni);

        echo json_encode($NombreProductosxClientes);
    }

    public function ajaxListarProductos2(){
    
        $productos2 = ProductosControlador::ctrListarProductos2();
    
        echo json_encode($productos2);
    
    }

    public function ajaxListarxCliente( $id_cliente){
    
        $productos2 = ProductosControlador::ctrListarxCliente( $id_cliente);
    
        echo json_encode($productos2);
    
    }

    public function ajaxListarProductos3(){
    
        $productos3 = ProductosControlador::ctrListarProductos3();
    
        echo json_encode($productos3);
    
    }

    public function ajaxListarProductosxClientes($id_cliente){
    
        $productos3 = ProductosControlador::ctrListarProductosxClientes($id_cliente);
    
        echo json_encode($productos3);
    
    }

    public function ajaxVerificarProductoCliente($codigo_producto,$dni){
    
        $productos3 = ProductosControlador::ctrVerificarProductoCliente($codigo_producto,$dni);
    
        echo json_encode($productos3);
    
    }

    public function ajaxAñadirProductoCliente($codigo_producto,$dni){
    
        $productos3 = ProductosControlador::ctrAñadirProductoCliente($codigo_producto,$dni);
    
        echo json_encode($productos3);
    
    }

    public function ajaxCambiarPrecioCliente($codigo_producto,$dni,$opcion,$precio){
    
        $productos3 = ProductosControlador::ctrCambiarPrecioCliente($codigo_producto,$dni,$opcion,$precio);
    
        echo json_encode($productos3);
    
    }

    public function ajaxDarDatosProducto($codigo_producto){
    
        $productos3 = ProductosControlador::ctrDarDatosProducto($codigo_producto);
    
        echo json_encode($productos3);
    
    }

    public function ajaxEditarProducto($codigo,$descripcion,$precio_unidad,$precio_paquete,$precio_docena,$precio_ciento,$precio_millar,$precio_caja,$precio_fardo,$precio_plancha,$precio_unidad_2,$precio_paquete_2,$precio_docena_2,$precio_ciento_2,$precio_millar_2,$precio_caja_2,$precio_fardo_2,$precio_plancha_2,$cantidad_ciento,$cantidad_millar,$cantidad_caja,$cantidad_fardo,$cantidad_plancha,$stock,$min_stock,$direccion,$id_categoria_producto){
    
        $productos3 = ProductosControlador::ctrEditarProducto($codigo,$descripcion,$precio_unidad,$precio_paquete,$precio_docena,$precio_ciento,$precio_millar,$precio_caja,$precio_fardo,$precio_plancha,$precio_unidad_2,$precio_paquete_2,$precio_docena_2,$precio_ciento_2,$precio_millar_2,$precio_caja_2,$precio_fardo_2,$precio_plancha_2,$cantidad_ciento,$cantidad_millar,$cantidad_caja,$cantidad_fardo,$cantidad_plancha,$stock,$min_stock,$direccion,$id_categoria_producto);
    
        echo json_encode($productos3);
    
    }

    public function ajaxListarNombreProductosClientes($id_cliente){

        $NombreProductos = ProductosControlador::ctrListarNombreProductosClientes($id_cliente);

        echo json_encode($NombreProductos);
    }

    public function ajaxGetDatosProductoCliente($codigo_producto,$id_cliente){
        
        $producto = ProductosControlador::ctrGetDatosProductoCliente($codigo_producto,$id_cliente);

        echo json_encode($producto);
    }

    public function ajaxRegistrarProductoSinImagen($data){
        
        $table = "productos";
        $id = $_POST["codigo_producto"];
        $nameId = "codigo_producto";
        $producto = ProductosControlador::ctrRegistrarProductoSinImagen($table, $data, $id, $nameId);

        echo json_encode($producto);
    }


    public function ajaxActualizarProductoSinImagen($data){
        
        $table = "productos";
        $id = $_POST["codigo_producto"];
        $nameId = "codigo_producto";

        $respuesta = ProductosControlador::ctrActualizarProductoSinImagen($table, $data, $id, $nameId);

        echo json_encode($respuesta);
    }

    public function ajaxCodigoRepetido($codigo){

        $NombreProductos = ProductosControlador::ctrCodigoRepetido($codigo);

        echo json_encode($NombreProductos);
    }

    public function ajaxDarPrecio($codigo){

        $NombreProductos = ProductosControlador::ctrDarPrecio($codigo);

        echo json_encode($NombreProductos);
    }

    public function ajaxConteoProductos(){

        $NombreProductos = ProductosControlador::ctrConteoProductos();

        echo json_encode($NombreProductos);
    }

    public function ajaxListarPreciosCantidades(){
    
        $productos = ProductosControlador::ctrListarPreciosCantidades();
    
        echo json_encode($productos);
    
    }

    public function ajaxRegistrarProductoNuevo($data,$imagen = null){
        
        $table = "productos";
        $id = $_POST["codigo_producto"];
        $nameId = "codigo_producto";
        $producto = ProductosControlador::ctrRegistrarProductoNuevo($table, $data, $id, $nameId,$imagen);

        echo json_encode($producto);
    }

    public function ajaxRegistrarProductoNuevoSinImagen($data){
        
        $table = "productos";
        $id = $_POST["codigo_producto"];
        $nameId = "codigo_producto";
        $producto = ProductosControlador::ctrRegistrarProductoNuevoSinImagen($table, $data, $id, $nameId);

        echo json_encode($producto);
    }

    public function ajaxActualizarProductoNuevo($data,$imagen = null){
        
        $table = "productos";
        $id = $_POST["codigo_producto"];
        $nameId = "codigo_producto";
        $producto = ProductosControlador::ctrActualizarProductoNuevo($table, $data, $id, $nameId,$imagen);

        echo json_encode($producto);
    }

    public function ajaxActualizarProductoNuevoSinImagen($data){
        
        $table = "productos";
        $id = $_POST["codigo_producto"];
        $nameId = "codigo_producto";
        $producto = ProductosControlador::ctrActualizarProductoNuevoSinImagen($table, $data, $id, $nameId);

        echo json_encode($producto);
    }

    public function ajaxListarPreciosCompletosCantidades($codigo_producto){
    
        $productos = ProductosControlador::ctrListarPreciosCompletosCantidades($codigo_producto);
    
        echo json_encode($productos);
    
    }
   
}

if(isset($_POST['accion']) && $_POST['accion'] == 1){ // parametro para listar productos

    $productos = new ajaxProductos();
    $productos -> ajaxListarProductos();
    
}else if(isset($_POST['accion']) && $_POST['accion'] == 2){ // parametro para registrar productos

    if(isset($_FILES["archivo"]["name"])){
        $imagen["ubicacionTemporal"] = $_FILES["archivo"]["tmp_name"][0];

        $info = new SplFileInfo($_FILES["archivo"]["name"][0]);

        $imagen["nuevoNombre"]= sprintf("%s_%d.%s",uniqid(),rand(100,999),$info->getExtension());

        $imagen["folder"] = '../vistas/assets/imagenes/productos/';

        $registrarProducto = new AjaxProductos();
        $data = array(
            "id_categoria_producto" => $_POST["id_categoria_producto"],
            "descripcion_producto" => $_POST["descripcion_producto"],
            "imagen_producto" =>  $imagen["nuevoNombre"],
            
            "precio_paquetito" => $_POST["precio_paquetito"],
            "precio_unidad" => $_POST["precio_unidad"],
            "precio_docena" => $_POST["precio_docena"],
            "precio_ciento" => $_POST["precio_ciento"],
            "precio_millar" => $_POST["precio_millar"],
            "precio_caja" => $_POST["precio_caja"],
            "precio_fardo" => $_POST["precio_fardo"],
            "cantidad_millar" => $_POST["cantidad_millar"],
            "cantidad_docena" => $_POST["cantidad_docena"],
            "cantidad_fardo" => $_POST["cantidad_fardo"],
            "cantidad_caja" => $_POST["cantidad_caja"],
    
            "precio_compra" => $_POST["precio_compra"],
            "utilidad" => $_POST["utilidad"],
            "stock_producto" => $_POST["stock_producto"],
            "minimo_stock_producto" => $_POST["minimo_stock_producto"],
            "direccion" => $_POST["direccion"],
        );
        $registrarProducto -> ajaxRegistrarProducto($data,$imagen);
    }else{
        $registrarProducto = new AjaxProductos();
        $data = array(
            "id_categoria_producto" => $_POST["id_categoria_producto"],
            "descripcion_producto" => $_POST["descripcion_producto"],
            "imagen_producto" =>  null,
            
            "precio_paquetito" => $_POST["precio_paquetito"],
            "precio_unidad" => $_POST["precio_unidad"],
            "precio_docena" => $_POST["precio_docena"],
            "precio_ciento" => $_POST["precio_ciento"],
            "precio_millar" => $_POST["precio_millar"],
            "precio_caja" => $_POST["precio_caja"],
            "precio_fardo" => $_POST["precio_fardo"],
            "cantidad_millar" => $_POST["cantidad_millar"],
            "cantidad_docena" => $_POST["cantidad_docena"],
            "cantidad_fardo" => $_POST["cantidad_fardo"],
            "cantidad_caja" => $_POST["cantidad_caja"],
    
            "precio_compra" => $_POST["precio_compra"],
            "utilidad" => $_POST["utilidad"],
            "stock_producto" => $_POST["stock_producto"],
            "minimo_stock_producto" => $_POST["minimo_stock_producto"],
            "direccion" => $_POST["direccion"],
        );
        $registrarProducto -> ajaxRegistrarProducto($data);
    }

   
    
}else if(isset($_POST['accion']) && $_POST['accion'] == 3){ // parametro para actualizazr stock del producto

    $actualizarStock = new ajaxProductos();

    $data = array(
        "stock_producto" => $_POST["nuevoStock"]
    );

    $actualizarStock -> ajaxActualizarStock($data);


}else if(isset($_POST['accion']) && $_POST['accion'] == 4){ // ACCION PARA ACTUALIZAR UN PRODUCTO
 
    
    if(isset($_FILES["archivo"]["name"])){
        $imagen["ubicacionTemporal"] = $_FILES["archivo"]["tmp_name"][0];

        $info = new SplFileInfo($_FILES["archivo"]["name"][0]);

        $imagen["nuevoNombre"]= sprintf("%s_%d.%s",uniqid(),rand(100,999),$info->getExtension());

        $imagen["folder"] = '../vistas/assets/imagenes/productos/';

        $actualizarProducto = new ajaxProductos();
        $data = array(
            "id_categoria_producto" => $_POST["id_categoria_producto"],
            "descripcion_producto" => $_POST["descripcion_producto"],
            "imagen_producto" =>  $imagen["nuevoNombre"],
            
            "precio_paquetito" => $_POST["precio_paquetito"],
            "precio_unidad" => $_POST["precio_unidad"],
            "precio_docena" => $_POST["precio_docena"],
            "precio_ciento" => $_POST["precio_ciento"],
            "precio_millar" => $_POST["precio_millar"],
            "precio_caja" => $_POST["precio_caja"],
            "precio_fardo" => $_POST["precio_fardo"],
            "cantidad_millar" => $_POST["cantidad_millar"],
            "cantidad_docena" => $_POST["cantidad_docena"],
            "cantidad_fardo" => $_POST["cantidad_fardo"],
            "cantidad_caja" => $_POST["cantidad_caja"],
    
            "precio_compra" => $_POST["precio_compra"],
            "utilidad" => $_POST["utilidad"],
            "stock_producto" => $_POST["stock_producto"],
            "minimo_stock_producto" => $_POST["minimo_stock_producto"],
            "direccion" => $_POST["direccion"],
        );
        $actualizarProducto -> ajaxActualizarProducto($data,$imagen);

    } else {
        $actualizarProducto = new ajaxProductos();
        $data = array(
            "id_categoria_producto" => $_POST["id_categoria_producto"],
            "descripcion_producto" => $_POST["descripcion_producto"],
            "imagen_producto" =>  "no_imagen",
            
            "precio_paquetito" => $_POST["precio_paquetito"],
            "precio_unidad" => $_POST["precio_unidad"],
            "precio_docena" => $_POST["precio_docena"],
            "precio_ciento" => $_POST["precio_ciento"],
            "precio_millar" => $_POST["precio_millar"],
            "precio_caja" => $_POST["precio_caja"],
            "precio_fardo" => $_POST["precio_fardo"],
            "cantidad_millar" => $_POST["cantidad_millar"],
            "cantidad_docena" => $_POST["cantidad_docena"],
            "cantidad_fardo" => $_POST["cantidad_fardo"],
            "cantidad_caja" => $_POST["cantidad_caja"],
    
            "precio_compra" => $_POST["precio_compra"],
            "utilidad" => $_POST["utilidad"],
            "stock_producto" => $_POST["stock_producto"],
            "minimo_stock_producto" => $_POST["minimo_stock_producto"],
            "direccion" => $_POST["direccion"],
        );
        $actualizarProducto -> ajaxActualizarProducto($data);
    }
    

}else if(isset($_POST['accion']) && $_POST['accion'] == 5){// ACCION PARA ELIMINAR UN PRODUCTO

    $eliminarProducto = new ajaxProductos();
    $eliminarProducto -> ajaxEliminarProducto();

}else if(isset($_POST["accion"]) && $_POST["accion"] == 6){  // TRAER LISTADO DE PRODUCTOS PARA EL AUTOCOMPLETE

    $nombreProductos = new AjaxProductos();
    $nombreProductos -> ajaxListarNombreProductos();

}else if(isset($_POST["accion"]) && $_POST["accion"] == 7){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $listaProducto = new AjaxProductos();

    $listaProducto -> codigo_producto = $_POST["codigo_producto"];
    
    $listaProducto -> ajaxGetDatosProducto();
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 8){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $VerificarStock = new AjaxProductos();

    $VerificarStock -> codigo_producto = $_POST["codigo_producto"];
    $VerificarStock -> cantidad_a_comprar = $_POST["cantidad_a_comprar"];
    $VerificarStock -> medida = $_POST["medida"];
    
    $VerificarStock -> ajaxVerificaStockProducto();
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 9){  // TRAER LISTADO DE PRODUCTOS PARA EL AUTOCOMPLETE

    $nombreProductos = new AjaxProductos();
    $nombreProductos -> ajaxListarNombreProductosxClientes($_POST["dni"]);

}else if(isset($_POST["accion"]) && $_POST["accion"] == 10){  // TRAER LISTADO DE PRODUCTOS PARA EL AUTOCOMPLETE

    $nombreProductos = new AjaxProductos();
    $nombreProductos -> ajaxListarProductos2();

}else if(isset($_POST["accion"]) && $_POST["accion"] == 11){  // TRAER LISTADO DE PRODUCTOS PARA EL AUTOCOMPLETE

    $nombreProductos = new AjaxProductos();
    $nombreProductos -> ajaxListarxCliente($_POST["id_cliente"]);

}else if(isset($_POST["accion"]) && $_POST["accion"] == 12){  // TRAER LISTADO DE PRODUCTOS PARA EL AUTOCOMPLETE

    $nombreProductos = new AjaxProductos();
    $nombreProductos -> ajaxListarProductos3();

}else if(isset($_POST["accion"]) && $_POST["accion"] == 13){  // TRAER LISTADO DE PRODUCTOS PARA EL AUTOCOMPLETE

    $nombreProductos = new AjaxProductos();
    $nombreProductos -> ajaxListarProductosxClientes($_POST["id_cliente"]);

}else if(isset($_POST["accion"]) && $_POST["accion"] == 14){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $listaProducto = new AjaxProductos();
    
    $listaProducto -> ajaxGetDatosProductoxCliente($_POST["codigo_producto"],$_POST["dni"]);
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 15){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $listaProducto = new AjaxProductos();
    
    $listaProducto -> ajaxVerificarProductoCliente($_POST["codigo_producto"],$_POST["dni"]);
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 16){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $listaProducto = new AjaxProductos();
    
    $listaProducto -> ajaxAñadirProductoCliente($_POST["codigo_producto"],$_POST["dni"]);
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 17){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $listaProducto = new AjaxProductos();
    
    $listaProducto -> ajaxCambiarPrecioCliente($_POST["codigo_producto"],$_POST["dni"],$_POST["opcion"],$_POST["precio"]);
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 18){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $listaProducto = new AjaxProductos();
    
    $listaProducto -> ajaxDarDatosProducto($_POST["codigo_producto"]);
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 19){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $listaProducto = new AjaxProductos();
    
    $listaProducto -> ajaxEditarProducto($_POST["codigo"],$_POST["descripcion"],$_POST["precio_unidad"],$_POST["precio_paquete"],$_POST["precio_docena"],$_POST["precio_ciento"],$_POST["precio_millar"],$_POST["precio_caja"],
    $_POST["precio_fardo"],$_POST["precio_plancha"],$_POST["precio_unidad_2"],$_POST["precio_paquete_2"],$_POST["precio_docena_2"],$_POST["precio_ciento_2"],$_POST["precio_millar_2"],$_POST["precio_caja_2"],
    $_POST["precio_fardo_2"],$_POST["precio_plancha_2"],$_POST["cantidad_ciento"],$_POST["cantidad_millar"],$_POST["cantidad_caja"],$_POST["cantidad_fardo"],$_POST["cantidad_plancha"],$_POST["stock"],$_POST["min_stock"],$_POST["direccion"],$_POST["id_categoria_producto"]);
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 20){  // TRAER LISTADO DE PRODUCTOS PARA EL AUTOCOMPLETE

    $nombreProductos = new AjaxProductos();
    $nombreProductos -> ajaxListarNombreProductosClientes($_POST["id_cliente"]);

}else if(isset($_POST["accion"]) && $_POST["accion"] == 21){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $listaProducto = new AjaxProductos();
    
    $listaProducto -> ajaxGetDatosProductoCliente($_POST["codigo_producto"],$_POST["id_cliente"]);
	
}else if(isset($_POST['accion']) && $_POST['accion'] == 22){ // parametro para registrar productos

    $registrarProducto = new AjaxProductos();
        $data = array(
            "id_categoria_producto" => $_POST["id_categoria_producto"],
            "descripcion_producto" => $_POST["descripcion_producto"],
            
            "precio_paquetito" => $_POST["precio_paquetito"],
            "precio_unidad" => $_POST["precio_unidad"],
            "precio_docena" => $_POST["precio_docena"],
            "precio_ciento" => $_POST["precio_ciento"],
            "precio_millar" => $_POST["precio_millar"],
            "precio_caja" => $_POST["precio_caja"],
            "precio_fardo" => $_POST["precio_fardo"],
            "cantidad_millar" => $_POST["cantidad_millar"],
            "cantidad_docena" => $_POST["cantidad_docena"],
            "cantidad_fardo" => $_POST["cantidad_fardo"],
            "cantidad_caja" => $_POST["cantidad_caja"],
    
            "precio_compra" => $_POST["precio_compra"],
            "utilidad" => $_POST["utilidad"],
            "stock_producto" => $_POST["stock_producto"],
            "minimo_stock_producto" => $_POST["minimo_stock_producto"],
            "direccion" => $_POST["direccion"],
        );
        $registrarProducto -> ajaxRegistrarProductoSinImagen($data);

   
    
}else if(isset($_POST['accion']) && $_POST['accion'] == 24){ // ACCION PARA ACTUALIZAR UN PRODUCTO
 
    
    $actualizarProducto = new ajaxProductos();
    $data = array(
        "id_categoria_producto" => $_POST["id_categoria_producto"],
        "descripcion_producto" => $_POST["descripcion_producto"],

        
        "precio_paquetito" => $_POST["precio_paquetito"],
        "precio_unidad" => $_POST["precio_unidad"],
        "precio_docena" => $_POST["precio_docena"],
        "precio_ciento" => $_POST["precio_ciento"],
        "precio_millar" => $_POST["precio_millar"],
        "precio_caja" => $_POST["precio_caja"],
        "precio_fardo" => $_POST["precio_fardo"],
        "cantidad_millar" => $_POST["cantidad_millar"],
        "cantidad_docena" => $_POST["cantidad_docena"],
        "cantidad_fardo" => $_POST["cantidad_fardo"],
        "cantidad_caja" => $_POST["cantidad_caja"],

        "precio_compra" => $_POST["precio_compra"],
        "utilidad" => $_POST["utilidad"],
        "stock_producto" => $_POST["stock_producto"],
        "minimo_stock_producto" => $_POST["minimo_stock_producto"],
        "direccion" => $_POST["direccion"],
    );
    $actualizarProducto -> ajaxActualizarProductoSinImagen($data);
    

}else if(isset($_POST["accion"]) && $_POST["accion"] == 25){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $listaProducto = new AjaxProductos();
    
    $listaProducto -> ajaxCodigoRepetido($_POST["codigo"]);
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 26){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $listaProducto = new AjaxProductos();
    
    $listaProducto -> ajaxDarPrecio($_POST["codigo"]);
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 27){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $listaProducto = new AjaxProductos();
    
    $listaProducto -> ajaxConteoProductos();
	
}else if(isset($_POST['accion']) && $_POST['accion'] == 30){ // parametro para listar productos

    $productos = new ajaxProductos();
    $productos -> ajaxListarProductosNuevo();
    
}else if(isset($_POST['accion']) && $_POST['accion'] == 31){ // parametro para listar productos

    $productos = new ajaxProductos();
    $productos -> ajaxListarPreciosCantidades();
    
}else if(isset($_POST['accion']) && $_POST['accion'] == 32){ // parametro para registrar productos

    if(isset($_FILES["archivo"]["name"])){
        
        $imagen["ubicacionTemporal"] = $_FILES["archivo"]["tmp_name"][0];

        $info = new SplFileInfo($_FILES["archivo"]["name"][0]);

        $imagen["nuevoNombre"]= sprintf("%s_%d.%s",uniqid(),rand(100,999),$info->getExtension());

        $imagen["folder"] = '../vistas/assets/imagenes/productos/';

        $registrarProducto = new AjaxProductos();
        $data = array(
            "id_categoria_producto" => $_POST["id_categoria_producto"],
            "descripcion_producto" => $_POST["descripcion_producto"],
            "imagen_producto" =>  $imagen["nuevoNombre"],
            
            "precio_paquetito" => $_POST["precio_paquetito"],
            "precio_unidad" => $_POST["precio_unidad"],
            "precio_docena" => $_POST["precio_docena"],
            "precio_ciento" => $_POST["precio_ciento"],
            "precio_millar" => $_POST["precio_millar"],
            "precio_caja" => $_POST["precio_caja"],
            "precio_fardo" => $_POST["precio_fardo"],
            "precio_plancha" => $_POST["precio_plancha"],

            "precio_paquetito_2" => $_POST["precio_paquetito_2"],
            "precio_unidad_2" => $_POST["precio_unidad_2"],
            "precio_docena_2" => $_POST["precio_docena_2"],
            "precio_ciento_2" => $_POST["precio_ciento_2"],
            "precio_millar_2" => $_POST["precio_millar_2"],
            "precio_caja_2" => $_POST["precio_caja_2"],
            "precio_fardo_2" => $_POST["precio_fardo_2"],
            "precio_plancha_2" => $_POST["precio_plancha_2"],

            "cantidad_millar" => $_POST["cantidad_millar"],
            "cantidad_fardo" => $_POST["cantidad_fardo"],
            "cantidad_caja" => $_POST["cantidad_caja"],
            "cantidad_ciento" => $_POST["cantidad_ciento"],
            "cantidad_plancha" => $_POST["cantidad_plancha"],
    
            "stock_producto" => $_POST["stock_producto"],
            "minimo_stock_producto" => $_POST["minimo_stock_producto"],
            "direccion" => $_POST["direccion"],
        );
        $registrarProducto -> ajaxRegistrarProductoNuevo($data,$imagen);
    }
    
}else if(isset($_POST['accion']) && $_POST['accion'] == 33){ // parametro para registrar productos

    
        
        $registrarProducto = new AjaxProductos();
        $data = array(
            "id_categoria_producto" => $_POST["id_categoria_producto"],
            "descripcion_producto" => $_POST["descripcion_producto"],
            
            "precio_paquetito" => $_POST["precio_paquetito"],
            "precio_unidad" => $_POST["precio_unidad"],
            "precio_docena" => $_POST["precio_docena"],
            "precio_ciento" => $_POST["precio_ciento"],
            "precio_millar" => $_POST["precio_millar"],
            "precio_caja" => $_POST["precio_caja"],
            "precio_fardo" => $_POST["precio_fardo"],
            "precio_plancha" => $_POST["precio_plancha"],

            "precio_paquetito_2" => $_POST["precio_paquetito_2"],
            "precio_unidad_2" => $_POST["precio_unidad_2"],
            "precio_docena_2" => $_POST["precio_docena_2"],
            "precio_ciento_2" => $_POST["precio_ciento_2"],
            "precio_millar_2" => $_POST["precio_millar_2"],
            "precio_caja_2" => $_POST["precio_caja_2"],
            "precio_fardo_2" => $_POST["precio_fardo_2"],
            "precio_plancha_2" => $_POST["precio_plancha_2"],

            "cantidad_millar" => $_POST["cantidad_millar"],
            "cantidad_fardo" => $_POST["cantidad_fardo"],
            "cantidad_caja" => $_POST["cantidad_caja"],
            "cantidad_ciento" => $_POST["cantidad_ciento"],
            "cantidad_plancha" => $_POST["cantidad_plancha"],
    
            "stock_producto" => $_POST["stock_producto"],
            "minimo_stock_producto" => $_POST["minimo_stock_producto"],
            "direccion" => $_POST["direccion"],
        );
        $registrarProducto -> ajaxRegistrarProductoNuevoSinImagen($data);
    
    
}else if(isset($_POST['accion']) && $_POST['accion'] == 34){ // parametro para registrar productos

    if(isset($_FILES["archivo"]["name"])){
        
        $imagen["ubicacionTemporal"] = $_FILES["archivo"]["tmp_name"][0];

        $info = new SplFileInfo($_FILES["archivo"]["name"][0]);

        $imagen["nuevoNombre"]= sprintf("%s_%d.%s",uniqid(),rand(100,999),$info->getExtension());

        $imagen["folder"] = '../vistas/assets/imagenes/productos/';

        $registrarProducto = new AjaxProductos();
        $data = array(
            "id_categoria_producto" => $_POST["id_categoria_producto"],
            "descripcion_producto" => $_POST["descripcion_producto"],
            "imagen_producto" =>  $imagen["nuevoNombre"],
            
            "precio_paquetito" => $_POST["precio_paquetito"],
            "precio_unidad" => $_POST["precio_unidad"],
            "precio_docena" => $_POST["precio_docena"],
            "precio_ciento" => $_POST["precio_ciento"],
            "precio_millar" => $_POST["precio_millar"],
            "precio_caja" => $_POST["precio_caja"],
            "precio_fardo" => $_POST["precio_fardo"],
            "precio_plancha" => $_POST["precio_plancha"],

            "precio_paquetito_2" => $_POST["precio_paquetito_2"],
            "precio_unidad_2" => $_POST["precio_unidad_2"],
            "precio_docena_2" => $_POST["precio_docena_2"],
            "precio_ciento_2" => $_POST["precio_ciento_2"],
            "precio_millar_2" => $_POST["precio_millar_2"],
            "precio_caja_2" => $_POST["precio_caja_2"],
            "precio_fardo_2" => $_POST["precio_fardo_2"],
            "precio_plancha_2" => $_POST["precio_plancha_2"],

            "cantidad_millar" => $_POST["cantidad_millar"],
            "cantidad_fardo" => $_POST["cantidad_fardo"],
            "cantidad_caja" => $_POST["cantidad_caja"],
            "cantidad_ciento" => $_POST["cantidad_ciento"],
            "cantidad_plancha" => $_POST["cantidad_plancha"],
    
            "stock_producto" => $_POST["stock_producto"],
            "minimo_stock_producto" => $_POST["minimo_stock_producto"],
            "direccion" => $_POST["direccion"],
        );
        $registrarProducto -> ajaxActualizarProductoNuevo($data,$imagen);
    }
    
}else if(isset($_POST['accion']) && $_POST['accion'] == 35){ // parametro para registrar productos

    
        
        $registrarProducto = new AjaxProductos();
        $data = array(
            "id_categoria_producto" => $_POST["id_categoria_producto"],
            "descripcion_producto" => $_POST["descripcion_producto"],
            
            "precio_paquetito" => $_POST["precio_paquetito"],
            "precio_unidad" => $_POST["precio_unidad"],
            "precio_docena" => $_POST["precio_docena"],
            "precio_ciento" => $_POST["precio_ciento"],
            "precio_millar" => $_POST["precio_millar"],
            "precio_caja" => $_POST["precio_caja"],
            "precio_fardo" => $_POST["precio_fardo"],
            "precio_plancha" => $_POST["precio_plancha"],

            "precio_paquetito_2" => $_POST["precio_paquetito_2"],
            "precio_unidad_2" => $_POST["precio_unidad_2"],
            "precio_docena_2" => $_POST["precio_docena_2"],
            "precio_ciento_2" => $_POST["precio_ciento_2"],
            "precio_millar_2" => $_POST["precio_millar_2"],
            "precio_caja_2" => $_POST["precio_caja_2"],
            "precio_fardo_2" => $_POST["precio_fardo_2"],
            "precio_plancha_2" => $_POST["precio_plancha_2"],

            "cantidad_millar" => $_POST["cantidad_millar"],
            "cantidad_fardo" => $_POST["cantidad_fardo"],
            "cantidad_caja" => $_POST["cantidad_caja"],
            "cantidad_ciento" => $_POST["cantidad_ciento"],
            "cantidad_plancha" => $_POST["cantidad_plancha"],
    
            "stock_producto" => $_POST["stock_producto"],
            "minimo_stock_producto" => $_POST["minimo_stock_producto"],
            "direccion" => $_POST["direccion"],
        );
        $registrarProducto -> ajaxActualizarProductoNuevoSinImagen($data);
    
    
}else if(isset($_POST['accion']) && $_POST['accion'] == 36){ // parametro para listar productos

    $productos = new ajaxProductos();
    $productos -> ajaxListarPreciosCompletosCantidades($_POST['codigo_producto']);
    
}else if(isset($_FILES)){
    $archivo_productos = new ajaxProductos();
    $archivo_productos-> fileProductos = $_FILES['fileProductos'];
    $archivo_productos -> ajaxCargaMasivaProductos();
}
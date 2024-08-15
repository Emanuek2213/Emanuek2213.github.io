<?php

require_once "../modelos/ventaRapida.modelo.php";

class ProductosVentaRapidaControlador{

    /*static public function ctrGetDatosDashboard(){

        $datos = DashboardModelo::mdlGetDatosDashboard();

        return $datos;
    }*/

    static public function ctrTablaVentaRapida(){

        $TablaVentaRapida = ProductosVentaRapidaModelo::mdlTablaVentaRapida();

        return $TablaVentaRapida;
    }

    static public function ctrProductosVentaRapida(){
    
        $productosVentaRapida = ProductosVentaRapidaModelo::mdlProductosVentaRapida();
    
        return $productosVentaRapida;
    
    }

    static public function ctrBuscarProductos(){
            
        $producto =  ProductosVentaRapidaModelo::mdlBuscarProductos();

        return $producto;

    }

    static public function ctrTablaModal($num_categoria){
            
        $producto =  ProductosVentaRapidaModelo::mdlTablaModal($num_categoria);

        return $producto;

    }    
    static public function ctrObtenerDetalleVenta($nro_boleta)
    {
        $detalle_venta = ProductosVentaRapidaModelo::mdlObtenerDetalleVenta($nro_boleta);

        return $detalle_venta;
    }
    
    static public function ctrMostrarIcono(){

        $modulos = ProductosVentaRapidaModelo::mdlMostrarIcono();

        return $modulos;

    }

    static public function ctrListarCategorias(){

        $modulos = ProductosVentaRapidaModelo::mdlListarCategorias();

        return $modulos;

    }

    static public function ctrListarBotones(){

        $modulos = ProductosVentaRapidaModelo::mdlListarBotones();

        return $modulos;

    }

    static public function ctrListarBotonesPopulares(){

        $modulos = ProductosVentaRapidaModelo::mdlListarBotonesPopulares();

        return $modulos;

    }

    static public function ctrMostrarColor(){

        $modulos = ProductosVentaRapidaModelo::mdlMostrarColor();

        return $modulos;

    }

    static public function ctrAgregarCatalogo($icono, $color){

        $modulos = ProductosVentaRapidaModelo::mdlAgregarCatalogo($icono, $color);

        return $modulos;

    }

    static public function ctrAgregarCatalogo_p2($id_color, $id_icono, $nombre, $descripcion){

        $modulos = ProductosVentaRapidaModelo::mdlAgregarCatalogo_p2($id_color, $id_icono, $nombre, $descripcion);

        return $modulos;

    }

    static public function ctrAgregarBoton($icono, $color, $padre){

        $modulos = ProductosVentaRapidaModelo::mdlAgregarBoton($icono, $color, $padre);

        return $modulos;

    }

    static public function ctrAgregarBoton_p2($id_color, $id_icono, $nombre, $descripcion, $id_padre){

        $modulos = ProductosVentaRapidaModelo::mdlAgregarBoton_p2($id_color, $id_icono, $nombre, $descripcion, $id_padre);

        return $modulos;

    }

    static public function ctrAgregarBotonPopular($icono, $color){

        $modulos = ProductosVentaRapidaModelo::mdlAgregarBotonPopular($icono, $color);

        return $modulos;

    }

    static public function ctrAgregarBotonPopular_p2($id_color, $id_icono, $nombre, $descripcion){

        $modulos = ProductosVentaRapidaModelo::mdlAgregarBotonPopular_p2($id_color, $id_icono, $nombre, $descripcion);

        return $modulos;

    }

    static public function ctrProductosNombre(){

        $modulos = ProductosVentaRapidaModelo::mdlProductosNombre();

        return $modulos;

    }

    static public function ctrListaBotonesCatalogo(){

        $modulos = ProductosVentaRapidaModelo::mdlListaBotonesCatalogo();

        return $modulos;

    }

    static public function ctrListaBotonesProductos($id_catologo){

        $modulos = ProductosVentaRapidaModelo::mdlListaBotonesProductos($id_catologo);

        return $modulos;

    }

    static public function ctrDarCodigoProducto($boton){

        $modulos = ProductosVentaRapidaModelo::mdlDarCodigoProducto($boton);

        return $modulos;

    }

    static public function ctrVerificaStockProducto($codigo_producto,$palabra,$numero){
            
        $producto = ProductosVentaRapidaModelo::mdlVerificaStockProducto($codigo_producto,$palabra,$numero);

        return $producto;

    }

    static public function ctrEliminarCatalogo($numero,$orden){
            
        $producto = ProductosVentaRapidaModelo::mdlEliminarCatalogo($numero,$orden);

        return $producto;

    }

    static public function ctrEliminarBoton($numero){
            
        $producto = ProductosVentaRapidaModelo::mdlEliminarBoton($numero);

        return $producto;

    }

    static public function ctrEliminarBotonPopulares($numero){
            
        $producto = ProductosVentaRapidaModelo::mdlEliminarBotonPopulares($numero);

        return $producto;

    }

    static public function ctrListaBotonesProductos_Popular(){

        $modulos = ProductosVentaRapidaModelo::mdlListaBotonesProductos_Popular();

        return $modulos;

    }

    static public function ctrdarOrdenBotones($id_catalogo){

        $modulos = ProductosVentaRapidaModelo::mdldarOrdenBotones($id_catalogo);

        return $modulos;

    }

    static public function ctrReordenarBotones($modulos_ordenados){

        $modulos = ProductosVentaRapidaModelo::mdlReordenarBotones($modulos_ordenados);

        return $modulos;

    }

    static public function ctrAgregarPorCategoria($categorias,$id_catalogo,$color_catalogo,$icono_catalogo){

        $modulos = ProductosVentaRapidaModelo::mdlAgregarPorCategoria($categorias,$id_catalogo,$color_catalogo,$icono_catalogo);

        return $modulos;

    }

    static public function ctrdarOrdenBotonesCatalogos(){

        $modulos = ProductosVentaRapidaModelo::mdldarOrdenBotonesCatalogos();

        return $modulos;

    }

    static public function ctrReordenarBotonesCatalogos($modulos_ordenados){

        $modulos = ProductosVentaRapidaModelo::mdlReordenarBotonesCatalogos($modulos_ordenados);

        return $modulos;

    }

    static public function ctrEditarBoton_p2($id_boton,$id_color, $id_icono, $nombre, $descripcion, $id_padre){

        $modulos = ProductosVentaRapidaModelo::mdlEditarBoton_p2($id_boton,$id_color, $id_icono, $nombre, $descripcion, $id_padre);

        return $modulos;

    }

    static public function ctrEditarBotonPopular_p2($id_boton,$id_color, $id_icono, $nombre, $descripcion){

        $modulos = ProductosVentaRapidaModelo::mdlEditarBotonPopular_p2($id_boton,$id_color, $id_icono, $nombre, $descripcion);

        return $modulos;

    }

    static public function ctrAgregarBotonCatalogo($icono, $color){

        $modulos = ProductosVentaRapidaModelo::mdlAgregarBotonCatalogo($icono, $color);

        return $modulos;

    }

    static public function ctrEditarBotonCatalogo_p2($id_boton,$id_color, $id_icono, $nombre, $descripcion){

        $modulos = ProductosVentaRapidaModelo::mdlEditarBotonCatalogo_p2($id_boton,$id_color, $id_icono, $nombre, $descripcion);

        return $modulos;

    }

    static public function ctrVerCatalogo($id_padre){

        $modulos = ProductosVentaRapidaModelo::mdlVerCatalogo($id_padre);

        return $modulos;

    }

    static public function ctrVerCatalogoPopulares(){

        $modulos = ProductosVentaRapidaModelo::mdlVerCatalogoPopulares();

        return $modulos;

    }
   
}
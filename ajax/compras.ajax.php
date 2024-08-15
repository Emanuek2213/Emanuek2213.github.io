<?php

require_once "../controladores/compras.controlador.php";
require_once "../modelos/compras.modelo.php";

class AjaxCompras{

    

    public function ajaxListarEstadoBoleta(){

        $respuestas = ComprasControlador::ctrListarEstadoBoleta();  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxCambiarDetallesCompra($nro_boleta,$Proveedor,$fecha_compra,$mensajero,$Tipo_pago,$nro_documento,$tipo_documento,$tipo_dni,$comentario,$fecha_salida,$fecha_regreso,$fecha_pago){

        $respuestas = ComprasControlador::ctrCambiarDetallesCompra($nro_boleta,$Proveedor,$fecha_compra,$mensajero,$Tipo_pago,$nro_documento,$tipo_documento,$tipo_dni,$comentario,$fecha_salida,$fecha_regreso,$fecha_pago);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxDarDatosBoletaCompra($id_boleta){

        $respuestas = ComprasControlador::ctrDarDatosBoletaCompra($id_boleta);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }
    public function ajaxEliminarProductoVenta($id_boleta,$cod_producto){

        $respuestas = ComprasControlador::ctrEliminarProductoVenta($id_boleta,$cod_producto);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxCambiarDatosBoleta($datos,$nro_boleta){

        $respuestas = ComprasControlador::ctrCambiarDatosBoleta($datos,$nro_boleta);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxDarClienteBoleta($nro_boleta){

        $respuestas = ComprasControlador::ctrDarClienteBoleta($nro_boleta);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxdarFechaDeudas(){

        $respuestas = ComprasControlador::ctrdarFechaDeudas();  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxlistarCompras(){

        $respuestas = ComprasControlador::ctrlistarCompras();  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxlistarComprasCredito(){

        $respuestas = ComprasControlador::ctrlistarComprasCredito();  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxCambiarEstados($nro_boleta){

        $respuestas = ComprasControlador::ctrCambiarEstados($nro_boleta);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxCambiarEstados2($nro_boleta){

        $respuestas = ComprasControlador::ctrCambiarEstados2($nro_boleta);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxListarCotiza($nro_boleta){

        $respuestas = ComprasControlador::ctrListarCotiza($nro_boleta);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxListarFotos($nro_boleta){

        $respuestas = ComprasControlador::ctrListarFotos($nro_boleta);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxRegistrarFotos($data,$imagen){
        
        $table = "compra_foto";
        $id = $_POST["id_compra_credito"];
        $nameId = "id_compra_credito";
        $producto = ComprasControlador::ctrRegistrarFotos($table, $data, $id, $nameId,$imagen);

        echo json_encode($producto);
    }

    public function ajaxDarNombreFoto($id_compra_foto){

        $respuestas = ComprasControlador::ctrDarNombreFoto($id_compra_foto);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxEliminarFoto($id_compra_foto){

        $respuestas = ComprasControlador::ctrEliminarFoto($id_compra_foto);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxAñadirCuota($nro_boleta,$fecha_cotiza,$monto,$detalles){

        $respuestas = ComprasControlador::ctrAñadirCuota($nro_boleta,$fecha_cotiza,$monto,$detalles);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

}

 if(isset($_POST["accion"]) && $_POST["accion"] == 9 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxCompras();
    $ventas -> ajaxDarDatosBoletaCompra($_POST["id_boleta"]);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 10 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxCompras();
    $ventas -> ajaxCambiarDatosBoleta($_POST["arr"],$_POST['nro_boleta']);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 12 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxCompras();
    $ventas -> ajaxDarClienteBoleta($_POST['nro_boleta']);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 15 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxCompras();
    $ventas -> ajaxListarEstadoBoleta();
 
 }else if(isset($_POST["accion"]) && $_POST["accion"] == 16 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
 
     $ventas = new AjaxCompras();
     $ventas -> ajaxCambiarDetallesCompra($_POST["nro_boleta"],$_POST["Proveedor"],$_POST["fecha_compra"],$_POST["mensajero"],$_POST["Tipo_pago"],$_POST["nro_documento"],$_POST["tipo_documento"],$_POST["tipo_dni"],$_POST["comentario"],$_POST["fecha_salida"],$_POST["fecha_regreso"],$_POST["fecha_pago"]);
 
 }else if(isset($_POST["accion"]) && $_POST["accion"] == 31 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
 
     $ventas = new AjaxCompras();
     $ventas -> ajaxEliminarProductoVenta($_POST['id_boleta'], $_POST['cod_producto']);
 
 }else if(isset($_POST["accion"]) && $_POST["accion"] == 32 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
 
    $ventas = new AjaxCompras();
    $ventas -> ajaxdarFechaDeudas();

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 1 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
 
    $ventas = new AjaxCompras();
    $ventas -> ajaxlistarCompras();

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 2 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
 
    $ventas = new AjaxCompras();
    $ventas -> ajaxlistarComprasCredito();

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 3 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxCompras();
    $ventas -> ajaxCambiarEstados($_POST['nro_boleta']);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 4 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxCompras();
    $ventas -> ajaxCambiarEstados2($_POST['nro_boleta']);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 5 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxCompras();
    $ventas -> ajaxListarCotiza($_POST['nro_boleta']);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 6 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxCompras();
    $ventas -> ajaxListarFotos($_POST['nro_boleta']);

 }else if(isset($_POST['accion']) && $_POST['accion'] == 7){ // parametro para registrar productos

    if(isset($_FILES["archivo"]["name"])){

        $imagen["ubicacionTemporal"] = $_FILES["archivo"]["tmp_name"][0];

        $info = new SplFileInfo($_FILES["archivo"]["name"][0]);

        $imagen["nuevoNombre"]= sprintf("%s_%d.%s",uniqid(),rand(100,999),$info->getExtension());

        $imagen["folder"] = '../vistas/assets/imagenes/cuotas/';

        $registrarProducto = new AjaxCompras();

        $data = array(

            "nro_boleta" => $_POST["nro_boleta"],
            "imagen" =>  $imagen["nuevoNombre"],

        );
        $registrarProducto -> ajaxRegistrarFotos($data,$imagen);

    }

   
 }else if(isset($_POST["accion"]) && $_POST["accion"] == 8 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxCompras();
    $ventas -> ajaxDarNombreFoto($_POST['id_compra_foto']);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 11 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxCompras();
    $ventas -> ajaxEliminarFoto($_POST['id_compra_foto']);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 13 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxCompras();
    $ventas -> ajaxAñadirCuota($_POST['nro_boleta'],$_POST['fecha_cotiza'],$_POST['monto'],$_POST['detalles']);

 }
<?php

class VentasControlador{

    static public function ctrObtenerNroBoleta(){
        
        $nroBoleta = VentasModelo::mdlObtenerNroBoleta();

        return $nroBoleta;

    }

    static public function ctrRegistrarVenta($datos,$nro_boleta,$total_venta,$descripcion_venta,$Cliente,$Estado){
        
        $productos = VentasModelo::mdlRegistrarVenta($datos,$nro_boleta,$total_venta,$descripcion_venta,$Cliente,$Estado);

        return $productos;

    }

    static public function ctrRegistrarVentaEsp($datos,$nro_boleta,$total_venta,$descripcion_venta,$Cliente,$Estado){
        
        $productos = VentasModelo::mdlRegistrarVentaEsp($datos,$nro_boleta,$total_venta,$descripcion_venta,$Cliente,$Estado);

        return $productos;

    }

    static public function ctrRegistrarCompraEsp($datos,$nro_boleta,$total_venta,$descripcion_venta,$Proveedor,$Estado,$Tipo_pago,$mensajero,$tipo_documento,$nro_documento,$tipo_dni,$comentario,$fecha_regreso,$fecha_salida){
        
        $productos = VentasModelo::mdlRegistrarCompraEsp($datos,$nro_boleta,$total_venta,$descripcion_venta,$Proveedor,$Estado,$Tipo_pago,$mensajero,$tipo_documento,$nro_documento,$tipo_dni,$comentario,$fecha_regreso,$fecha_salida);

        return $productos;

    }

    static public function ctrRegistrarCompraCotizaEsp($datos,$nro_boleta,$total_venta,$descripcion_venta,$Proveedor,$Estado,$Tipo_pago,$mensajero,$fecha_regreso,$fecha_salida){
        
        $productos = VentasModelo::mdlRegistrarCompraCotizaEsp($datos,$nro_boleta,$total_venta,$descripcion_venta,$Proveedor,$Estado,$Tipo_pago,$mensajero,$fecha_regreso,$fecha_salida);

        return $productos;

    }

    static public function ctrRegistrarCotizacion($datos,$nro_boleta,$total_venta,$descripcion_venta,$deuda,$Cliente,$Estado){
        
        $productos = VentasModelo::mdlRegistrarCotizacion($datos,$nro_boleta,$total_venta,$descripcion_venta,$deuda,$Cliente,$Estado);

        return $productos;

    }
    
    
    static public function ctrListarVentas($fechaDesde, $fechaHasta){

        $ventas = VentasModelo::mdlListarVentas($fechaDesde,$fechaHasta);

        return $ventas;
    }

    static public function ctrEliminarVenta($nroBoleta,$Comentario){

        $respuestas = VentasModelo::mdlEliminarVenta($nroBoleta,$Comentario);

        return $respuestas;
    }

    static public function ctrObtenerDetalleVenta($nro_boleta)
    {
        $detalle_venta = VentasModelo::mdlObtenerDetalleVenta($nro_boleta);

        return $detalle_venta;
    }

    static public function ctrObtenerDetalleVenta2($nro_boleta)
    {
        $detalle_venta = VentasModelo::mdlObtenerDetalleVenta2($nro_boleta);

        return $detalle_venta;
    }


    static public function ctrObtenerDetalleCotiza($nro_boleta)
    {
        $detalle_venta = VentasModelo::mdlObtenerDetalleCotiza($nro_boleta);

        return $detalle_venta;
    }

    static public function ctrObtenerDetalleCompra($nro_boleta)
    {
        $detalle_venta = VentasModelo::mdlObtenerDetalleCompra($nro_boleta);

        return $detalle_venta;
    }

    static public function ctrObtenerDetalleCotizacion($nro_boleta)
    {
        $detalle_venta = VentasModelo::mdlObtenerDetalleCotizacion($nro_boleta);

        return $detalle_venta;
    }

    static public function ctrListarBoletas()
    {
        $detalle_venta = VentasModelo::mdlListarBoletas();

        return $detalle_venta;
    }

    static public function ctrListarCompras()
    {
        $detalle_venta = VentasModelo::mdlListarCompras();

        return $detalle_venta;
    }

    static public function ctrListarBoletasIncompletas()
    {
        $detalle_venta = VentasModelo::mdlListarBoletasIncompletas();

        return $detalle_venta;
    }

    static public function ctrVaciarListaCopia()
    {
        $detalle_venta = VentasModelo::mdlVaciarListaCopia();

        return $detalle_venta;
    }

    static public function ctrAñadirListaCopia($codigo,$cantidad,$precio,$total)
    {
        $detalle_venta = VentasModelo::mdlAñadirListaCopia($codigo,$cantidad,$precio,$total);

        return $detalle_venta;
    }
    
    static public function ctrDarCopia()
    {
        $detalle_venta = VentasModelo::mdlDarCopia();

        return $detalle_venta;
    }

    static public function ctrDarDatosBoleta($id_boleta)
    {
        $detalle_venta = VentasModelo::mdlDarDatosBoleta($id_boleta);

        return $detalle_venta;
    }

    static public function ctrDarDatosCompras($id_boleta)
    {
        $detalle_venta = VentasModelo::mdlDarDatosCompras($id_boleta);

        return $detalle_venta;
    }

    static public function ctrCambiarDatosBoleta($datos,$nro_boleta)
    {
        $detalle_venta = VentasModelo::mdlCambiarDatosBoleta($datos,$nro_boleta);

        return $detalle_venta;
    }

    static public function ctrConfirmarBoleta($nro_boleta)
    {
        $detalle_venta = VentasModelo::mdlConfirmarBoleta($nro_boleta);

        return $detalle_venta;
    }

    static public function ctrObtenerDetalleFecha($nro_boleta)
    {
        $detalle_venta = VentasModelo::mdlObtenerDetalleFecha($nro_boleta);

        return $detalle_venta;
    }

    static public function ctrDarClienteBoleta($nro_boleta)
    {
        $detalle_venta = VentasModelo::mdlDarClienteBoleta($nro_boleta);

        return $detalle_venta;
    }

    static public function ctrListarProductosCliente($idCliente)
    {
        $detalle_venta = VentasModelo::mdlListarProductosCliente($idCliente);

        return $detalle_venta;
    }

    static public function ctrListarProductos()
    {
        $detalle_venta = VentasModelo::mdlListarProductos();

        return $detalle_venta;
    }

    static public function ctrListarEstadoBoleta()
    {
        $detalle_venta = VentasModelo::mdlListarEstadoBoleta();

        return $detalle_venta;
    }

    static public function ctrListarEstadoBoletaDeuda()
    {
        $detalle_venta = VentasModelo::mdlListarEstadoBoletaDeuda();

        return $detalle_venta;
    }

    static public function ctrDatosBoletaDeuda($nro_boleta)
    {
        $detalle_venta = VentasModelo::mdlDatosBoletaDeuda($nro_boleta);

        return $detalle_venta;
    }

    static public function ctrIngresarTempoDeuda($nro_boleta,$total_cobro,$hora_salida,$hora_regreso,$cobrador)
    {
        $detalle_venta = VentasModelo::mdlIngresarTempoDeuda($nro_boleta,$total_cobro,$hora_salida,$hora_regreso,$cobrador);

        return $detalle_venta;
    }

    static public function ctrVerificarRepetidos($nro_boleta,$total_cobro)
    {
        $detalle_venta = VentasModelo::mdlVerificarRepetidos($nro_boleta,$total_cobro);

        return $detalle_venta;
    }

    static public function ctrDarDatosCobros()
    {
        $detalle_venta = VentasModelo::mdlDarDatosCobros();

        return $detalle_venta;
    }

    static public function ctrCambiarHora($tiempo,$tiempo_estimado, $estado,$Boleta,$eleccion, $persona)
    {
        $detalle_venta = VentasModelo::mdlCambiarHora($tiempo,$tiempo_estimado, $estado,$Boleta,$eleccion, $persona);

        return $detalle_venta;
    }

    static public function ctrCambiarHora_2($tiempo,$tiempo_estimado, $estado,$Boleta,$eleccion, $persona,$Nueva_Deuda)
    {
        $detalle_venta = VentasModelo::mdlCambiarHora_2($tiempo,$tiempo_estimado, $estado,$Boleta,$eleccion, $persona,$Nueva_Deuda);

        return $detalle_venta;
    }

    static public function ctrAgregarRegistroPago($Boleta,$Amortiguacion,$Tipo_pago,$Persona_Dinero)
    {
        $detalle_venta = VentasModelo::mdlAgregarRegistroPago($Boleta,$Amortiguacion,$Tipo_pago,$Persona_Dinero);

        return $detalle_venta;
    }

    static public function ctrEliminarDeCliente($codigo, $medida, $cliente)
    {
        $detalle_venta = VentasModelo::mdlEliminarDeCliente($codigo, $medida, $cliente);

        return $detalle_venta;
    }

    static public function ctrListarVentas_2($fechaDesde, $fechaHasta,$opcion){

        $ventas = VentasModelo::mdlListarVentas_2($fechaDesde,$fechaHasta,$opcion);

        return $ventas;
    }

    static public function ctrListarEliminados_2($fechaDesde, $fechaHasta){

        $ventas = VentasModelo::mdlListarEliminados_2($fechaDesde, $fechaHasta);

        return $ventas;
    }

    static public function ctrComentarioCambio($Comentario, $nroBoleta){

        $ventas = VentasModelo::mdlComentarioCambio($Comentario, $nroBoleta);

        return $ventas;
    }

    static public function ctrMirarDedua($codigo){

        $ventas = VentasModelo::mdlMirarDedua($codigo);

        return $ventas;
    }

    static public function ctrCambiarDeuda($Boleta, $estado, $caso, $Amortiguacion, $Amortiguacion2, $Vuelto, $Tipo_pago, $Persona_Dinero){

        $ventas = VentasModelo::mdlCambiarDeuda($Boleta, $estado, $caso, $Amortiguacion, $Amortiguacion2, $Vuelto, $Tipo_pago, $Persona_Dinero);

        return $ventas;
    }

    static public function ctrcargarDeuda($nro_boleta){

        $ventas = VentasModelo::mdlcargarDeuda($nro_boleta);

        return $ventas;
    }

    static public function ctrConfirmarVuelto($nro_boleta, $Dinero_Dado){

        $ventas = VentasModelo::mdlConfirmarVuelto($nro_boleta, $Dinero_Dado);

        return $ventas;
    }

    static public function ctrVolverPedido($nro_boleta){

        $ventas = VentasModelo::mdlVolverPedido($nro_boleta);

        return $ventas;
    }

    static public function ctrVolverRegistro($nro_boleta){

        $ventas = VentasModelo::mdlVolverRegistro($nro_boleta);

        return $ventas;
    }

    static public function ctrVerificarEstados(){

        $ventas = VentasModelo::mdlVerificarEstados();

        return $ventas;
    }

    static public function ctrRegistrarMultiple($tiempo_estimado,$tiempo,$estado,$Boletas,$persona){

        $ventas = VentasModelo::mdlRegistrarMultiple($tiempo_estimado,$tiempo,$estado,$Boletas,$persona);

        return $ventas;
    }

    static public function ctrListarEstadoBoletaxCliente($nombre_cliente)
    {
        $detalle_venta = VentasModelo::mdlListarEstadoBoletaxCliente($nombre_cliente);

        return $detalle_venta;
    }

    static public function ctrListarEstadoBoletaxClienteTODAS($nombre_cliente)
    {
        $detalle_venta = VentasModelo::mdlListarEstadoBoletaxClienteTODAS($nombre_cliente);

        return $detalle_venta;
    }

    static public function ctrCancelarDeuda($nro_boleta,$Tipo_pago,$Persona_Dinero){

        $ventas = VentasModelo::mdlCancelarDeuda($nro_boleta,$Tipo_pago,$Persona_Dinero);

        return $ventas;
    }

    static public function ctrCambiarNombres($mensajero,$Persona_Dinero,$nro_boleta){

        $ventas = VentasModelo::mdlCambiarNombres($mensajero,$Persona_Dinero,$nro_boleta);

        return $ventas;
    }

    static public function ctrDarProveedorBoleta($nro_boleta)
    {
        $detalle_venta = VentasModelo::mdlDarProveedorBoleta($nro_boleta);

        return $detalle_venta;
    }

    static public function ctrDarInfoPersona($nro_boleta)
    {
        $detalle_venta = VentasModelo::mdlDarInfoPersona($nro_boleta);

        return $detalle_venta;
    }

    static public function ctrMostrarListaPago($nro_boleta)
    {
        $detalle_venta = VentasModelo::mdlMostrarListaPago($nro_boleta);

        return $detalle_venta;
    }

    static public function ctrRegistrarComoTicket($nro_boleta)
    {
        $detalle_venta = VentasModelo::mdlRegistrarComoTicket($nro_boleta);

        return $detalle_venta;
    }

    static public function ctrRegistrarComoBoleta($nro_boleta)
    {
        $detalle_venta = VentasModelo::mdlRegistrarComoBoleta($nro_boleta);

        return $detalle_venta;
    }

    static public function ctrRegistrarComoFactura($nro_boleta)
    {
        $detalle_venta = VentasModelo::mdlRegistrarComoFactura($nro_boleta);

        return $detalle_venta;
    }


    static public function ctrReiniciarEstadoVenta($nro_boleta)
    {
        $detalle_venta = VentasModelo::mdlReiniciarEstadoVenta($nro_boleta);

        return $detalle_venta;
    }

    static public function ctrRegistrarComoNota($nro_boleta)
    {
        $detalle_venta = VentasModelo::mdlRegistrarComoNota($nro_boleta);

        return $detalle_venta;
    }

    static public function ctrEliminarProductoVenta($id_boleta,$cod_producto)
    {
        $detalle_venta = VentasModelo::mdlEliminarProductoVenta($id_boleta,$cod_producto);

        return $detalle_venta;
    }

    static public function ctrVolverDeuda($nro_boleta)
    {
        $detalle_venta = VentasModelo::mdlVolverDeuda($nro_boleta);

        return $detalle_venta;
    }

    static public function ctrCambiarFechaImpresion($nro_boleta)
    {
        $detalle_venta = VentasModelo::mdlCambiarFechaImpresion($nro_boleta);

        return $detalle_venta;
    }

    static public function ctrListarFechaImpresion($nro_boleta)
    {
        $detalle_venta = VentasModelo::mdlListarFechaImpresion($nro_boleta);

        return $detalle_venta;
    }

    static public function ctrCambiarNombreCliente($nro_boleta, $id_cliente)
    {
        $detalle_venta = VentasModelo::mdlCambiarNombreCliente($nro_boleta, $id_cliente);

        return $detalle_venta;
    }

    static public function ctrCambiarDinero($idCliente, $nro_producto, $medida, $precio)
    {
        $detalle_venta = VentasModelo::mdlCambiarDinero($idCliente, $nro_producto, $medida, $precio);

        return $detalle_venta;
    }

    static public function ctrVerificarPopulares($nombre_cliente)
    {
        $detalle_venta = VentasModelo::mdlVerificarPopulares($nombre_cliente);

        return $detalle_venta;
    }

    static public function ctrEstadoVentas()
    {
        $detalle_venta = VentasModelo::mdlEstadoVentas();

        return $detalle_venta;
    }

    static public function ctrVentaEstadoActivo()
    {
        $detalle_venta = VentasModelo::mdlVentaEstadoActivo();

        return $detalle_venta;
    }

    static public function ctrVentaEstadoProceso()
    {
        $detalle_venta = VentasModelo::mdlVentaEstadoProceso();

        return $detalle_venta;
    }

    static public function ctrRegistrarNuevasHoras($nro_boleta,$fecha_salida,$fecha_regreso,$Estado,$mensajero)
    {
        $detalle_venta = VentasModelo::mdlRegistrarNuevasHoras($nro_boleta,$fecha_salida,$fecha_regreso,$Estado,$mensajero);

        return $detalle_venta;
    }

    static public function ctrRegistrarNuevosPagos($nro_boleta,$Monto,$Tipo_pago,$Persona_Dinero,$Estado,$Deuda,$vuelto)
    {
        $detalle_venta = VentasModelo::mdlRegistrarNuevosPagos($nro_boleta,$Monto,$Tipo_pago,$Persona_Dinero,$Estado,$Deuda,$vuelto);

        return $detalle_venta;
    }

    static public function ctrVolverEstado4($nro_boleta)
    {
        $detalle_venta = VentasModelo::mdlVolverEstado4($nro_boleta);

        return $detalle_venta;
    }


    static public function ctrRegistrarFechaVenta($nro_boleta, $fecha_venta)
    {
        $detalle_venta = VentasModelo::mdlRegistrarFechaVenta($nro_boleta, $fecha_venta);

        return $detalle_venta;
    }
    static public function ctrVolverRegistroPedido($nro_boleta)
    {
        $detalle_venta = VentasModelo::mdlVolverRegistroPedido($nro_boleta);

        return $detalle_venta;
    }
}
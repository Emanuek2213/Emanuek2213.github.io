<?php

require_once "../controladores/ventas.controlador.php";
require_once "../modelos/ventas.modelo.php";

class AjaxVentas{

    public function ajaxObtenerNroBoleta(){

        $nroBoleta = VentasControlador::ctrObtenerNroBoleta();

        echo json_encode($nroBoleta,JSON_UNESCAPED_UNICODE);

    }

    public function ajaxRegistrarVenta($datos,$nro_boleta,$total_venta, $descripcion_venta,$Cliente,$Estado){

        $registroVenta = VentasControlador::ctrRegistrarVenta($datos,$nro_boleta,$total_venta, $descripcion_venta,$Cliente,$Estado);
        echo json_encode($registroVenta,JSON_UNESCAPED_UNICODE);

    }

    public function ajaxRegistrarVentaEsp($datos,$nro_boleta,$total_venta,$descripcion_venta,$Cliente,$Estado){

        $registroVenta = VentasControlador::ctrRegistrarVentaEsp($datos,$nro_boleta,$total_venta,$descripcion_venta,$Cliente,$Estado);
        echo json_encode($registroVenta,JSON_UNESCAPED_UNICODE);

    }

    public function ajaxRegistrarCompraEsp($datos,$nro_boleta,$total_venta,$descripcion_venta,$Proveedor,$Estado,$Tipo_pago,$mensajero,$tipo_documento,$nro_documento,$tipo_dni,$comentario,$fecha_regreso,$fecha_salida){

        $registroVenta = VentasControlador::ctrRegistrarCompraEsp($datos,$nro_boleta,$total_venta,$descripcion_venta,$Proveedor,$Estado,$Tipo_pago,$mensajero,$tipo_documento,$nro_documento,$tipo_dni,$comentario,$fecha_regreso,$fecha_salida);
        echo json_encode($registroVenta,JSON_UNESCAPED_UNICODE);

    }

    public function ajaxRegistrarCompraCotizaEsp($datos,$nro_boleta,$total_venta,$descripcion_venta,$Proveedor,$Estado,$Tipo_pago,$mensajero,$fecha_regreso,$fecha_salida){

        $registroVenta = VentasControlador::ctrRegistrarCompraCotizaEsp($datos,$nro_boleta,$total_venta,$descripcion_venta,$Proveedor,$Estado,$Tipo_pago,$mensajero,$fecha_regreso,$fecha_salida);
        echo json_encode($registroVenta,JSON_UNESCAPED_UNICODE);

    }

    public function ajaxRegistrarCotizacion($datos,$nro_boleta,$total_venta, $descripcion_venta,$deuda,$Cliente,$Estado){

        $registroVenta = VentasControlador::ctrRegistrarCotizacion($datos,$nro_boleta,$total_venta, $descripcion_venta,$deuda,$Cliente,$Estado);
        echo json_encode($registroVenta,JSON_UNESCAPED_UNICODE);

    }

    public function ajaxListarVentas($fechaDesde, $fechaHasta){

        $ventas = VentasControlador::ctrListarVentas($fechaDesde, $fechaHasta);  

        echo json_encode($ventas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxEliminarVenta($nroBoleta,$Comentario){

        $respuestas = VentasControlador::ctrEliminarVenta($nroBoleta,$Comentario);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function AjaxGenerarTicketVenta($nro_boleta, $arrIndicador, $arrPrecios, $arrCliente)
    {

        require('../vistas/assets/plugins/fpdf/fpdf.php');

        $nuevoArray = explode(',', $arrIndicador);
        $nuevoArray2 = explode(',', $arrPrecios);

        $cantidad = count($nuevoArray) - 1;

        $DatosCliente = explode('/', $arrCliente);

        // echo '<script>console.log("hola "+  "' . $DatosCliente[0] . '"+" hola2"+ " - hola "+  "' . $DatosCliente[1] . '"+" hola2" + " - hola "+  "' . $DatosCliente[2] . '"+" hola2");</script>';
        $DatosCliente[0] = trim($DatosCliente[0]);

        if ($DatosCliente[0] === "VARIOS" ) {
            $altura_nombre = 0;
        } else {
           $altura_nombre = 20;
        }

        $altura = $cantidad * 15 + 130+ $altura_nombre;

        $pdf = new FPDF($orientation = 'P', $unit = 'mm', array(80, $altura));        
        $pdf->AddPage();        
        $pdf->setMargins(12,10,12);

        //nombre del negocio
        $pdf->SetY(4);

        $pdf->Rect(8,4,62, 6);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(55, 6, 'INVERSIONES JUSYBA SAC',0,0,'C');

        $pdf->Ln();
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(55, 4, "UBICANOS : JR AYACUCHO 1054 LIMA LIMA LIMA",0,0,'C');  
        
        
        $pdf->Ln();
        $pdf->Cell(55, 4, "PEDIDOS AL  014280771 - 980808623",0,0,'C'); 

        $pdf->Ln();
        $pdf->Cell(55, 4, "PLIN: 914959996 - YAPE:980837165",0,0,'C'); 
        
        $pdf->Ln();

        // Establecer la zona horaria a Perú
        date_default_timezone_set('America/Lima');

        $fechaHora = strftime('%d/%b/%Y %I:%M:%S %p');

        // Imprimir en el PDF
        $pdf->Cell(55, 4, utf8_decode($fechaHora), 0, 1, 'C');

        $pdf->Ln();

        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(55, 6, utf8_decode("BOLETA DE VENTA"),0,0,'C');

        $pdf->Ln();

        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(55, 6, utf8_decode("B001 - " .$nro_boleta),0,0,'C');

        $pdf->setMargins(5,10,5);

        $DatosCliente = explode('/', $arrCliente);

        // echo '<script>console.log("hola"+  "' . $DatosCliente[0] . '"+"hola2");</script>';
        $DatosCliente[0] = trim($DatosCliente[0]);

        if ($DatosCliente[0] === "VARIOS" ) {
            
        } else {
            $pdf->Rect(5,42, 71, 30);

            $pdf->Ln();
            $pdf->SetFont('Arial', 'B', 7);
            $pdf->SetX(5);
            $pdf->Cell(0, 6, "CLIENTE : ",0,0,'L');
            $pdf->Ln();
            $pdf->SetX(5);
            $pdf->SetFont('Arial', '', 7);
            $pdf->Cell(0, 6, utf8_decode(" - " .$DatosCliente[0]),0,0,'L');

            $pdf->Ln();
            $pdf->SetFont('Arial', 'B', 7);
            $pdf->SetX(5);
            $pdf->Cell(0, 6, "DNI o RUC: ",0,0,'L');
            $pdf->SetX(18);
            $pdf->SetFont('Arial', '', 7);
            $pdf->Cell(0, 6, utf8_decode("  " .$DatosCliente[1]),0,0,'L');

            $pdf->Ln();
            $pdf->SetFont('Arial', 'B', 7);
            $pdf->SetX(5);
            $pdf->Cell(0, 6, "DIRECCION : ",0,0,'L');
            $pdf->Ln();
            $pdf->SetX(5);
            $pdf->SetFont('Arial', '', 7);
            $pdf->Cell(0, 6, utf8_decode(" - " .$DatosCliente[2]),0,0,'L');
        }

        $pdf->Ln();
        $pdf->SetX(5);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(70, 4, utf8_decode("=========================================="),0,0,'C');
        $pdf->Ln();
        
        $pdf->SetX(5);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(5, 5, "#",0,0,'L');
        $pdf->Cell(17, 4, "Codigo.p" ,0,0,'L'); 
        $pdf->Cell(50, 4, "Descripcion producto",0,0,'L');

        $pdf->Ln();

        $pdf->SetX(5);
        $pdf->Cell(22, 4, "Cantidad" ,0,0,'L'); 
        $pdf->Cell(5, 4, "x",0,0,'L');
        $pdf->Cell(25, 4, "Precio", 0, 0, 'L');
        $pdf->Cell(8, 4,  "Total", 0, 0, "L");    

        
        $pdf->Ln();
        $pdf->SetX(5);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(70, 4, utf8_decode("=========================================="),0,0,'C');
        $pdf->Ln();

        
        $total = 0;
        
        $productos = VentasControlador::ctrObtenerDetalleVenta($nro_boleta);

        
        
        $nuevoArray = explode(',', $arrIndicador);
        $nuevoArray2 = explode(',', $arrPrecios);

        $cantidad = 0;

        foreach ($productos as $pro) {
            $pdf->SetX(5);
            $pdf->SetFont('Arial', '', 7);
            $pdf->Cell(3, 5, "#",0,0,'L');

            $pdf->Cell(20, 5, $pro["codigo_producto"],0,0,'L');
            
            $pdf->Cell(50, 5,  utf8_decode(strtoupper(substr($pro["descripcion_producto"], 0, 40))),0,0,'L');

            $pdf->Ln();

            $pdf->SetFont('Arial', '', 8);

            $pdf->SetX(5);

            $pdf->Cell(22, 5, $pro["cantidad"]. " ". $pro["medida"], 0, 0, 'L');
  
            $pdf->Cell(3, 5, "X", 0, 0, 'L');

            $pdf->Cell(25, 5, "S./ " . number_format($pro["precio_unitario_venta"], 2, ".", ","), 0, 0, 'L');
            
            $pdf->SetFont('Arial', 'B', 8);

            $pdf->Cell(30, 5,  "S./ " . number_format($pro["cantidad"] * $pro["precio_unitario_venta"], 2, ".", ","), 0, 0, "L");            

            $pdf->Ln();

            $pdf->SetFont('Arial', '', 8);

            $pdf->SetX(5);

            $pdf->Cell(70, 1, utf8_decode("-------------------------------------------------------------------------"),0,0,'C');

            $pdf->Ln();

            $total += $pro["cantidad"] * $pro["precio_unitario_venta"];
            $cantidad += 1;
                        
        }
        $pdf->SetX(5);
        $pdf->SetFont('Arial', 'B', 8);

        $pdf->Cell(70, 4, utf8_decode("=========================================="),0,0,'C');

        $pdf->SetFont('Arial', '', 8);
        $pdf->Ln();
        $pdf->Ln();

        $pdf->SetX(5);

        $posY = $pdf->GetY();

        $pdf->Rect(5,$posY - 1, 71, 18);

        $pdf->Cell(20, 4, "OP. GRAVADA:" );
        $pdf->SetFont('Arial', '', 7);
        $pdf->Cell(50, 4, "S./ ". ROUND($total*100/118,2),0, 0, 'R');
        $pdf->SetFont('Arial', '', 8);
        $pdf->Ln();

        $pdf->Cell(20, 4, "OP. INAFECTA:" );
        $pdf->SetFont('Arial', '', 7);
        $pdf->Cell(50, 4, "S./ ". ROUND(0.00,2),0, 0, 'R');
        $pdf->SetFont('Arial', '', 8);
        $pdf->Ln();

        $pdf->Cell(20, 4, "I.G.V.:" );
        $pdf->SetFont('Arial', '', 7);
        $pdf->Cell(50, 4, "S./ ". ROUND($total*18/118,2),0, 0, 'R');
        $pdf->SetFont('Arial', '', 8);
        $pdf->Ln();

        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(20, 4, "TOTAL A PAGAR: ");
        $pdf->Cell(50, 4, "S./ ". number_format($total,2,".",","),0, 0, 'R');
        $pdf->SetFont('Arial', '', 9);
        $pdf->Ln();
        $pdf->setMargins(50, 50, 50);
        $pdf->Output();
    }

    public function AjaxGenerarTicketVentaCompra($nro_boleta, $arrIndicador, $arrPrecios, $arrProveedor,$Texto_pago,$Mensajero)
    {
        require('../vistas/assets/plugins/fpdf/fpdf.php');
        $nuevoArray = explode(',', $arrIndicador);
        $nuevoArray2 = explode(',', $arrPrecios);

        $cantidad = count($nuevoArray) - 1;

        $DatosCliente = explode('/', $arrProveedor);

        // echo '<script>console.log("hola "+  "' . $DatosCliente[0] . '"+" hola2"+ " - hola "+  "' . $DatosCliente[1] . '"+" hola2" + " - hola "+  "' . $DatosCliente[2] . '"+" hola2");</script>';
        $DatosCliente[0] = trim($DatosCliente[0]);

        if ($DatosCliente[0] === "VARIOS" ) {
            $altura_nombre = 0;
        } else {
           $altura_nombre = 20;
        }

        $altura = $cantidad * 15 + 150+ $altura_nombre;

        $pdf = new FPDF($orientation = 'P', $unit = 'mm', array(80, $altura));        
        $pdf->AddPage();         
        $pdf->setMargins(10,10,10);

        //nombre del negocio
        $pdf->SetY(3);

        $pdf->Rect(9,3,62, 6);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60, 6, 'INVERSIONES JUSYBA SAC',0,0,'C');

        $pdf->Ln();
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(60, 4, "UBICANOS : JR AYACUCHO 1054 LIMA LIMA LIMA",0,0,'C');  
        
        
        $pdf->Ln();
        $pdf->Cell(60, 4, "PEDIDOS AL  014280771 - 980808623",0,0,'C'); 

        $pdf->Ln();
        $pdf->Cell(60, 4, "PLIN: 914959996 - YAPE:980837165",0,0,'C'); 
        
        $pdf->Ln();

        // Establecer la zona horaria a Perú
        date_default_timezone_set('America/Lima');

        $fechaHora = strftime('%d/%b/%Y %I:%M:%S %p');

        // Imprimir en el PDF
        $pdf->Cell(60, 4, utf8_decode($fechaHora), 0, 1, 'C');

        $pdf->Ln();

        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(60, 6, utf8_decode("BOLETA DE COMPRA"),0,0,'C');

        $pdf->Ln();

        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(60, 6, utf8_decode("B001 - " .$nro_boleta),0,0,'C');

        $pdf->setMargins(5,10,5);

        $DatosCliente = explode('/', $arrProveedor);

        // echo '<script>console.log("hola"+  "' . $DatosCliente[0] . '"+"hola2");</script>';
        $DatosCliente[0] = trim($DatosCliente[0]);

        $pdf->Rect(4,41, 71, 23);
        
        $pdf->Ln();
        $pdf->SetFont('Arial', 'B', 7);
        $pdf->SetX(5);
        $pdf->Cell(0, 6, "TIPO DE PAGO : ",0,0,'L');
        $pdf->Ln();
        $pdf->SetX(5);
        $pdf->Cell(0, 6, utf8_decode(" - " .$Texto_pago),0,0,'L');

        $pdf->Ln();
        $pdf->SetFont('Arial', 'B', 7);
        $pdf->SetX(5);
        $pdf->Cell(0, 6, "ENCARGADO DE RECOGER COMPRA : ",0,0,'L');
        $pdf->Ln();
        $pdf->SetX(5);
        $pdf->Cell(0, 6, utf8_decode(" - " .$Mensajero),0,0,'L');

        if ($DatosCliente[0] === "VARIOS" ) {
            
        } else {
            $pdf->Rect(4,66, 71, 28);

            $pdf->Ln();
            $pdf->SetFont('Arial', 'B', 7);
            $pdf->SetX(5);
            $pdf->Cell(0, 6, "PROVEEDOR : ",0,0,'L');
            $pdf->Ln();
            $pdf->SetX(5);
            $pdf->Cell(0, 6, utf8_decode(" - " .$DatosCliente[0]),0,0,'L');

            $pdf->Ln();
            $pdf->SetFont('Arial', 'B', 7);
            $pdf->SetX(5);
            $pdf->Cell(0, 6, "DNI : ",0,0,'L');
            $pdf->SetX(11);
            $pdf->Cell(0, 6, utf8_decode(" - " .$DatosCliente[1]),0,0,'L');

            $pdf->Ln();
            $pdf->SetFont('Arial', 'B', 7);
            $pdf->SetX(5);
            $pdf->Cell(0, 6, "DIRECCION : ",0,0,'L');
            $pdf->Ln();
            $pdf->SetX(5);
            $pdf->Cell(0, 6, utf8_decode(" - " .$DatosCliente[2]),0,0,'L');
        }

        $pdf->Ln();
        $pdf->SetX(2);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(75, 4, utf8_decode("============================================"),0,0,'C');
        $pdf->Ln();
        
        $pdf->SetX(3);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(5, 5, "#",0,0,'L');
        // $pdf->Cell(20, 4, "Codigo.p" ,0,0,'L'); 
        $pdf->Cell(70, 4, "Descripcion producto",0,0,'L');

        $pdf->Ln();

        $pdf->SetX(4);
        $pdf->Cell(15, 4, "Cantidad" ,0,0,'L'); 
        $pdf->Cell(5, 4, "x",0,0,'L');
        $pdf->Cell(40, 4, "Precio", 0, 0, 'L');
        $pdf->Cell(8, 4,  "Total", 0, 0, "L");    

        
        $pdf->Ln();
        $pdf->SetX(2);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(75, 4, utf8_decode("============================================"),0,0,'C');
        $pdf->Ln();

        
        $total = 0;
        
        $productos = VentasControlador::ctrObtenerDetalleVenta($nro_boleta);

        
        
        $nuevoArray = explode(',', $arrIndicador);
        $nuevoArray2 = explode(',', $arrPrecios);

        $cantidad = 0;

        foreach ($productos as $pro) {
            $pdf->SetX(3);
            $pdf->SetFont('Arial', '', 9);
            $pdf->Cell(3, 5, "#",0,0,'L');

            // $pdf->Cell(20, 5, $pro["codigo_producto"],0,0,'L');
            
            $pdf->Cell(70, 5,  utf8_decode(strtoupper(substr($pro["descripcion_producto"], 0, 40))),0,0,'L');

            $pdf->Ln();

            $pdf->SetFont('Arial', '', 8);

            $pdf->SetX(4);

            $pdf->Cell(22, 5, $pro["cantidad"]. " ". $pro["medida"], 0, 0, 'L');
  
            $pdf->Cell(3, 5, "X", 0, 0, 'L');

            $pdf->Cell(33, 5, "S./ " . number_format($pro["precio_unitario_venta"], 2, ".", ","), 0, 0, 'L');
            
            $pdf->SetFont('Arial', 'B', 8);

            $pdf->Cell(30, 5,  "S./ " . number_format($pro["cantidad"] * $pro["precio_unitario_venta"], 2, ".", ","), 0, 0, "L");            

            $pdf->Ln();

            $pdf->SetFont('Arial', '', 8);

            $pdf->Cell(70, 1, utf8_decode("-----------------------------------------------------------------------------"),0,0,'C');

            $pdf->Ln();

            $total += $pro["cantidad"] * $pro["precio_unitario_venta"];
            $cantidad += 1;
                        
        }
        $pdf->SetX(2);
        $pdf->SetFont('Arial', 'B', 8);

        $pdf->Cell(75, 4, utf8_decode("============================================"),0,0,'C');

        $pdf->SetFont('Arial', '', 8);
        $pdf->Ln();
        $pdf->Ln();

        $pdf->SetX(5);

        $posY = $pdf->GetY();

        $pdf->Rect(2,$posY - 1, 75, 18);

        $pdf->Cell(20, 4, "OP. GRAVADA:" );
        $pdf->SetFont('Arial', '', 7);
        $pdf->Cell(50, 4, "S./ ". ROUND($total*100/118,2),0, 0, 'R');
        $pdf->SetFont('Arial', '', 8);
        $pdf->Ln();

        $pdf->Cell(20, 4, "OP. INAFECTA:" );
        $pdf->SetFont('Arial', '', 7);
        $pdf->Cell(50, 4, "S./ ". ROUND(0.00,2),0, 0, 'R');
        $pdf->SetFont('Arial', '', 8);
        $pdf->Ln();

        $pdf->Cell(20, 4, "I.G.V.:" );
        $pdf->SetFont('Arial', '', 7);
        $pdf->Cell(50, 4, "S./ ". ROUND($total*18/118,2),0, 0, 'R');
        $pdf->SetFont('Arial', '', 8);
        $pdf->Ln();

        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(20, 4, "TOTAL A PAGAR: ");
        $pdf->Cell(50, 4, "S./ ". number_format($total,2,".",","),0, 0, 'R');
        $pdf->SetFont('Arial', '', 9);
        $pdf->Ln();
        $pdf->setMargins(50, 50, 50);
        $pdf->Output();
    }

    public function ajaxListarBoletas(){

        $respuestas = VentasControlador::ctrListarBoletas();  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxListarBoletasIncompletas(){

        $respuestas = VentasControlador::ctrListarBoletasIncompletas();  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxVaciarListaCopia(){

        $respuestas = VentasControlador::ctrVaciarListaCopia();  

        echo json_encode($respuestas);
        
    }

    public function ajaxAñadirListaCopia($codigo,$cantidad,$precio,$total){

        $respuestas = VentasControlador::ctrAñadirListaCopia($codigo,$cantidad,$precio,$total);  

        echo json_encode($respuestas);
        
    }

    public function ajaxDarCopia(){

        $respuestas = VentasControlador::ctrDarCopia();  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxDarDatosBoleta($id_boleta){

        $respuestas = VentasControlador::ctrDarDatosBoleta($id_boleta);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxDarDatosCompras($id_boleta){

        $respuestas = VentasControlador::ctrDarDatosCompras($id_boleta);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxCambiarDatosBoleta($datos,$nro_boleta){

        $respuestas = VentasControlador::ctrCambiarDatosBoleta($datos,$nro_boleta);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxConfirmarBoleta($nro_boleta){

        $respuestas = VentasControlador::ctrConfirmarBoleta($nro_boleta);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxDarClienteBoleta($nro_boleta){

        $respuestas = VentasControlador::ctrDarClienteBoleta($nro_boleta);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxListarProductosCliente($idCliente){

        $respuestas = VentasControlador::ctrListarProductosCliente($idCliente);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxListarProductos(){

        $respuestas = VentasControlador::ctrListarProductos();  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxListarEstadoBoleta(){

        $respuestas = VentasControlador::ctrListarEstadoBoleta();  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxListarEstadoBoletaDeuda(){

        $respuestas = VentasControlador::ctrListarEstadoBoletaDeuda();  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxDatosBoletaDeuda($nro_boleta){

        $respuestas = VentasControlador::ctrDatosBoletaDeuda($nro_boleta);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }
    

    public function ajaxIngresarTempoDeuda($nro_boleta,$total_cobro,$hora_salida,$hora_regreso,$cobrador){

        $respuestas = VentasControlador::ctrIngresarTempoDeuda($nro_boleta,$total_cobro,$hora_salida,$hora_regreso,$cobrador);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxVerificarRepetidos($nro_boleta,$total_cobro){

        $respuestas = VentasControlador::ctrVerificarRepetidos($nro_boleta,$total_cobro);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxDarDatosCobros(){

        $respuestas = VentasControlador::ctrDarDatosCobros();  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxCambiarHora($tiempo,$tiempo_estimado, $estado,$Boleta,$eleccion, $persona){

        $respuestas = VentasControlador::ctrCambiarHora($tiempo,$tiempo_estimado, $estado,$Boleta,$eleccion, $persona);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxCambiarHora_2($tiempo,$tiempo_estimado, $estado,$Boleta,$eleccion, $persona,$Nueva_Deuda){

        $respuestas = VentasControlador::ctrCambiarHora_2($tiempo,$tiempo_estimado, $estado,$Boleta,$eleccion, $persona,$Nueva_Deuda);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxAgregarRegistroPago($Boleta,$Amortiguacion,$Tipo_pago,$Persona_Dinero){

        $respuestas = VentasControlador::ctrAgregarRegistroPago($Boleta,$Amortiguacion,$Tipo_pago,$Persona_Dinero);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }


    public function ajaxEliminarDeCliente($codigo, $medida, $cliente){

        $respuestas = VentasControlador::ctrEliminarDeCliente($codigo, $medida, $cliente);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxListarVentas_2($fechaDesde, $fechaHasta,$opcion){

        $ventas = VentasControlador::ctrListarVentas_2($fechaDesde, $fechaHasta,$opcion);  

        echo json_encode($ventas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxListarEliminados_2($fechaDesde, $fechaHasta){

        $ventas = VentasControlador::ctrListarEliminados_2($fechaDesde, $fechaHasta);  

        echo json_encode($ventas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxComentarioCambio($Comentario, $nroBoleta){

        $ventas = VentasControlador::ctrComentarioCambio($Comentario, $nroBoleta);  

        echo json_encode($ventas,JSON_UNESCAPED_UNICODE);
        
    }
    

    public function ajaxMirarDedua($codigo){

        $ventas = VentasControlador::ctrMirarDedua($codigo);  

        echo json_encode($ventas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxCambiarDeuda($Boleta, $estado, $caso, $Amortiguacion, $Amortiguacion2, $Vuelto, $Tipo_pago, $Persona_Dinero){

        $ventas = VentasControlador::ctrCambiarDeuda($Boleta, $estado, $caso, $Amortiguacion, $Amortiguacion2, $Vuelto, $Tipo_pago, $Persona_Dinero);  

        echo json_encode($ventas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxcargarDeuda($nro_boleta){

        $ventas = VentasControlador::ctrcargarDeuda($nro_boleta);  

        echo json_encode($ventas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxConfirmarVuelto($nro_boleta , $Dinero_Dado){

        $ventas = VentasControlador::ctrConfirmarVuelto($nro_boleta, $Dinero_Dado);  

        echo json_encode($ventas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxVolverPedido($nro_boleta){

        $ventas = VentasControlador::ctrVolverPedido($nro_boleta);  

        echo json_encode($ventas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxVolverRegistro($nro_boleta){

        $ventas = VentasControlador::ctrVolverRegistro($nro_boleta);  

        echo json_encode($ventas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxVerificarEstados(){

        $ventas = VentasControlador::ctrVerificarEstados();  

        echo json_encode($ventas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxRegistrarMultiple($tiempo_estimado,$tiempo,$estado,$Boletas,$persona){

        $ventas = VentasControlador::ctrRegistrarMultiple($tiempo_estimado,$tiempo,$estado,$Boletas,$persona);  

        echo json_encode($ventas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxListarEstadoBoletaxClienteTODAS($nombre_cliente){

        $respuestas = VentasControlador::ctrListarEstadoBoletaxClienteTODAS($nombre_cliente);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxListarEstadoBoletaxCliente($nombre_cliente){

        $respuestas = VentasControlador::ctrListarEstadoBoletaxCliente($nombre_cliente);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxCancelarDeuda($nro_boleta,$Tipo_pago,$Persona_Dinero){

        $ventas = VentasControlador::ctrCancelarDeuda($nro_boleta,$Tipo_pago,$Persona_Dinero);  

        echo json_encode($ventas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxCambiarNombres($mensajero,$Persona_Dinero,$nro_boleta){

        $ventas = VentasControlador::ctrCambiarNombres($mensajero,$Persona_Dinero,$nro_boleta);  

        echo json_encode($ventas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxDarProveedorBoleta($nro_boleta){

        $respuestas = VentasControlador::ctrDarProveedorBoleta($nro_boleta);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxDarInfoPersona($nro_boleta){

        $respuestas = VentasControlador::ctrDarInfoPersona($nro_boleta);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxMostrarListaPago($nro_boleta){

        $respuestas = VentasControlador::ctrMostrarListaPago($nro_boleta);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxRegistrarComoTicket($nro_boleta){

        $respuestas = VentasControlador::ctrRegistrarComoTicket($nro_boleta);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxRegistrarComoBoleta($nro_boleta){

        $respuestas = VentasControlador::ctrRegistrarComoBoleta($nro_boleta);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxRegistrarComoFactura($nro_boleta){

        $respuestas = VentasControlador::ctrRegistrarComoFactura($nro_boleta);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxReiniciarEstadoVenta($nro_boleta){

        $respuestas = VentasControlador::ctrReiniciarEstadoVenta($nro_boleta);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxRegistrarComoNota($nro_boleta){

        $respuestas = VentasControlador::ctrRegistrarComoNota($nro_boleta);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxEliminarProductoVenta($id_boleta,$cod_producto){

        $respuestas = VentasControlador::ctrEliminarProductoVenta($id_boleta,$cod_producto);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxListarCompras(){

        $respuestas = VentasControlador::ctrListarCompras();  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxVolverDeuda($nro_boleta){

        $respuestas = VentasControlador::ctrVolverDeuda($nro_boleta);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxCambiarFechaImpresion($nro_boleta){

        $respuestas = VentasControlador::ctrCambiarFechaImpresion($nro_boleta);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxListarFechaImpresion($nro_boleta){

        $respuestas = VentasControlador::ctrListarFechaImpresion($nro_boleta);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxCambiarNombreCliente($nro_boleta, $id_cliente){

        $respuestas = VentasControlador::ctrCambiarNombreCliente($nro_boleta, $id_cliente);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxCambiarDinero($idCliente, $nro_producto, $medida, $precio){

        $respuestas = VentasControlador::ctrCambiarDinero($idCliente, $nro_producto, $medida, $precio);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxVerificarPopulares($nombre_cliente){

        $respuestas = VentasControlador::ctrVerificarPopulares($nombre_cliente);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxEstadoVentas(){

        $respuestas = VentasControlador::ctrEstadoVentas();  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxVentaEstadoActivo(){

        $respuestas = VentasControlador::ctrVentaEstadoActivo();  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxVentaEstadoProceso(){

        $respuestas = VentasControlador::ctrVentaEstadoProceso();  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxRegistrarNuevasHoras($nro_boleta,$fecha_salida,$fecha_regreso,$Estado,$mensajero){

        $respuestas = VentasControlador::ctrRegistrarNuevasHoras($nro_boleta,$fecha_salida,$fecha_regreso,$Estado,$mensajero);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxRegistrarNuevosPagos($nro_boleta,$Monto,$Tipo_pago,$Persona_Dinero,$Estado,$Deuda,$vuelto){

        $respuestas = VentasControlador::ctrRegistrarNuevosPagos($nro_boleta,$Monto,$Tipo_pago,$Persona_Dinero,$Estado,$Deuda,$vuelto);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxVolverEstado4($nro_boleta){

        $respuestas = VentasControlador::ctrVolverEstado4($nro_boleta);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxVolverRegistroPedido($nro_boleta){

        $respuestas = VentasControlador::ctrVolverRegistroPedido($nro_boleta);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }

    public function ajaxRegistrarFechaVenta($nro_boleta, $fecha_venta){

        $respuestas = VentasControlador::ctrRegistrarFechaVenta($nro_boleta, $fecha_venta);  

        echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
        
    }


}

if(isset($_POST["accion"]) && $_POST["accion"] == 1){
	
	$nroBoleta = new AjaxVentas();
    $nroBoleta -> ajaxObtenerNroBoleta();
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 2 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxListarVentas($_POST["fechaDesde"],$_POST["fechaHasta"] );

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 3 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxEliminarVenta($_POST["Boleta"],$_POST["Comentario"] );

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 4 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxListarBoletas();

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 5 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxListarBoletasIncompletas();

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 6 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxVaciarListaCopia();

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 7 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxAñadirListaCopia($_POST["codigo"],$_POST["cantidad"],$_POST["precio"],$_POST["total"]);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 8 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxDarCopia();

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 9 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxDarDatosBoleta($_POST["id_boleta"]);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 10 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxCambiarDatosBoleta($_POST["arr"],$_POST['nro_boleta']);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 11 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxConfirmarBoleta($_POST['nro_boleta']);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 12 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxDarClienteBoleta($_POST['nro_boleta']);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 13 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxListarProductosCliente($_POST['idCliente']);

}else if(isset($_POST["accion"]) && $_POST["accion"] == 14 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxListarProductos();

}else if(isset($_POST["accion"]) && $_POST["accion"] == 15 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxListarEstadoBoleta();

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 16 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxCambiarHora($_POST["tiempo"],$_POST["tiempo_estimado"],$_POST["estado"],$_POST["Boleta"], $_POST["eleccion"], $_POST["persona"]);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 17 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxEliminarDeCliente($_POST["codigo"],$_POST["medida"], $_POST["cliente"]);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 18 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxListarVentas_2($_POST["fechaDesde"],$_POST["fechaHasta"] ,$_POST["opcion"]);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 19 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxMirarDedua($_POST["codigo"]);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 20 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxCambiarDeuda($_POST["Boleta"],$_POST["estado"],$_POST["caso"],$_POST["Amortiguacion"],$_POST["Amortiguacion2"],$_POST["Vuelto"],$_POST["Tipo_pago"],$_POST["Persona_Dinero"]);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 21 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxcargarDeuda($_POST["nro_boleta"]);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 22 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxConfirmarVuelto($_POST["nro_boleta"],$_POST["Dinero_Dado"]);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 23 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxVolverPedido($_POST["nro_boleta"]);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 24 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxVolverRegistro($_POST["nro_boleta"]);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 25 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxVerificarEstados();

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 26 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxRegistrarMultiple($_POST["tiempo_estimado"],$_POST["tiempo"],$_POST["estado"],$_POST["Boletas"],$_POST["persona"]);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 27 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxListarEstadoBoletaxCliente($_POST["nombre_cliente"]);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 28 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxCancelarDeuda($_POST["nro_boleta"],$_POST["Tipo_pago"],$_POST["Persona_Dinero"]);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 29 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxCambiarNombres($_POST["mensajero"],$_POST["Persona_Dinero"],$_POST["nro_boleta"]);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 30 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxDarProveedorBoleta($_POST['nro_boleta']);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 31 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxEliminarProductoVenta($_POST['id_boleta'], $_POST['cod_producto']);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 32 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxListarCompras();

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 33 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxDarDatosCompras($_POST["id_boleta"]);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 34 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxListarEliminados_2($_POST["fechaDesde"],$_POST["fechaHasta"] );

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 35 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxComentarioCambio($_POST["Comentario"],$_POST["nroBoleta"] );

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 36 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxDarInfoPersona($_POST['nro_boleta']);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 37 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxMostrarListaPago($_POST['nro_boleta']);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 38 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxRegistrarComoNota($_POST['nro_boleta']);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 39 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxRegistrarComoBoleta($_POST['nro_boleta']);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 40 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxRegistrarComoTicket($_POST['nro_boleta']);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 41 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxListarEstadoBoletaDeuda();

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 42 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxDatosBoletaDeuda($_POST["nro_boleta"]);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 43 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxIngresarTempoDeuda($_POST["nro_boleta"],$_POST["total_cobro"],$_POST["hora_salida"],$_POST["hora_regreso"],$_POST["cobrador"]);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 44 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
    
    $ventas = new AjaxVentas();
    $ventas -> ajaxVerificarRepetidos($_POST["nro_boleta"],$_POST["total_cobro"]);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 45 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
    
    $ventas = new AjaxVentas();
    $ventas -> ajaxDarDatosCobros();

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 46 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
    
    $ventas = new AjaxVentas();
    $ventas -> ajaxVolverDeuda($_POST["nro_boleta"]);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 47 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
    
    $ventas = new AjaxVentas();
    $ventas -> ajaxCambiarFechaImpresion($_POST["nro_boleta"]);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 48 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
    
    $ventas = new AjaxVentas();
    $ventas -> ajaxListarFechaImpresion($_POST["nro_boleta"]);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 49 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
    
    $ventas = new AjaxVentas();
    $ventas -> ajaxCambiarNombreCliente($_POST["nro_boleta"],$_POST["id_cliente"]);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 50 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxRegistrarComoFactura($_POST['nro_boleta']);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 51 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxReiniciarEstadoVenta($_POST['nro_boleta']);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 52 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxCambiarDinero($_POST['idCliente'],$_POST['nro_producto'],$_POST['medida'],$_POST['precio']);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 53 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxVerificarPopulares($_POST['nombre_cliente']);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 54 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxEstadoVentas();

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 55 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxVentaEstadoActivo();

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 56 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxVentaEstadoProceso();

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 57 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxCambiarHora_2($_POST["tiempo"],$_POST["tiempo_estimado"],$_POST["estado"],$_POST["Boleta"], $_POST["eleccion"], $_POST["persona"], $_POST["Nueva_Deuda"]);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 58 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxAgregarRegistroPago($_POST["Boleta"],$_POST["Amortiguacion"],$_POST["Tipo_pago"], $_POST["Persona_Dinero"]);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 59 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxListarEstadoBoletaxClienteTODAS($_POST["nombre_cliente"]);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 60 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxRegistrarNuevasHoras($_POST["nro_boleta"],$_POST["fecha_salida"],$_POST["fecha_regreso"],$_POST["Estado"],$_POST["mensajero"]);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 61 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxRegistrarNuevosPagos($_POST["nro_boleta"],$_POST["Monto"],$_POST["Tipo_pago"],$_POST["Persona_Dinero"],$_POST["Estado"],$_POST["Deuda"],$_POST["vuelto"]);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 62 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxVolverEstado4($_POST["nro_boleta"]);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 63 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxVolverRegistroPedido($_POST["nro_boleta"]);

 }else if(isset($_POST["accion"]) && $_POST["accion"] == 64 ){ // LISTADO DE VENTAS POR RANGO DE FECHAS
   
    $ventas = new AjaxVentas();
    $ventas -> ajaxRegistrarFechaVenta($_POST["nro_boleta"],$_POST["fecha_venta"]);

 }else{
     
	if((isset($_POST["arr"]))){
		
		$registrar = new AjaxVentas();
        if($_POST["seleccion"] == 5){
            $registrar -> ajaxRegistrarCotizacion($_POST["arr"],$_POST['nro_boleta'],$_POST['total_venta'],$_POST['descripcion_venta'],$_POST['deuda'],$_POST['Cliente'],$_POST['Estado']);

        }else if($_POST["seleccion"] == 8){

            $registrar -> ajaxRegistrarVentaEsp($_POST["arr"],$_POST['nro_boleta'],$_POST['total_venta'],$_POST['descripcion_venta'],$_POST['Cliente'],$_POST['Estado']);

        }else if($_POST["seleccion"] == 9){

            $registrar -> ajaxRegistrarCompraEsp($_POST["arr"],$_POST['nro_boleta'],$_POST['total_venta'],$_POST['descripcion_venta'],$_POST['Proveedor'],$_POST['Estado'],$_POST['Tipo_pago'],
                                                $_POST['mensajero'],$_POST['tipo_documento'],$_POST['nro_documento'],$_POST['tipo_dni'],$_POST['comentario'],$_POST['fecha_regreso'],$_POST['fecha_salida']);
                                                
        }else if($_POST["seleccion"] == 10){

            $registrar -> ajaxRegistrarCompraCotizaEsp($_POST["arr"],$_POST['nro_boleta'],$_POST['total_venta'],$_POST['descripcion_venta'],$_POST['Proveedor'],$_POST['Estado'],$_POST['Tipo_pago'],
                                                $_POST['mensajero'],$_POST['fecha_regreso'],$_POST['fecha_salida']);
                                                
        }else{

            $registrar -> ajaxRegistrarVenta($_POST["arr"],$_POST['nro_boleta'],$_POST['total_venta'],$_POST['descripcion_venta'],$_POST['Cliente'],$_POST['Estado']);

        }
		
	}
 }
 if (isset($_GET["nro_boleta"]) && isset($_GET["arrIndicador"])&& isset($_GET["arrPrecios"])&& isset($_GET["arrCliente"])) {

    $ventas = new AjaxVentas;
    $ventas->AjaxGenerarTicketVenta($_GET["nro_boleta"], $_GET["arrIndicador"], $_GET["arrPrecios"] , $_GET["arrCliente"]);
 }

 if (isset($_GET["nro_boleta"]) && isset($_GET["arrIndicador"])&& isset($_GET["arrPrecios"])&& isset($_GET["arrProveedor"])) {

    $ventas = new AjaxVentas;
    $ventas->AjaxGenerarTicketVentaCompra($_GET["nro_boleta"], $_GET["arrIndicador"], $_GET["arrPrecios"] , $_GET["arrProveedor"], $_GET["Texto_pago"] , $_GET["Mensajero"]);
 }

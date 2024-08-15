<?php

require_once "../controladores/ventaRapida.controlador.php";
require_once "../controladores/ventas.controlador.php";
require_once "../modelos/ventaRapida.modelo.php";
require_once "../modelos/ventas.modelo.php";
require_once "../vendor/autoload.php";

class AjaxProductosVentaRapida{
    

    /*public function getDatosDashboard(){

        $datos = DashboardControlador::ctrGetDatosDashboard();

        echo json_encode($datos);
    }*/

    public function getTablaVentaRapida(){
        $TablaVentaRapida = ProductosVentaRapidaControlador::ctrTablaVentaRapida();
        echo json_encode($TablaVentaRapida);
    }
    
    public function getProductosVentaRapida(){
    
        $productosVentaRapida = ProductosVentaRapidaControlador::ctrProductosVentaRapida();
    
        echo json_encode($productosVentaRapida);
    
    }
    
    public function ajaxBuscarProductos(){
        
        $producto = ProductosVentaRapidaControlador::ctrBuscarProductos();
        echo json_encode($producto);
    }

    public function ajaxTablaModal(){
        
        $num_categoria = ProductosVentaRapidaControlador::ctrTablaModal($this->num_categoria);
        echo json_encode($num_categoria);

        return $num_categoria;
    }
    
    /*
    public function getProductosPocoStock(){
    
        $productosPocoStock = DashboardControlador::ctrProductosPocoStock();
    
        echo json_encode($productosPocoStock);
    
    }
    */
    public function AjaxGenerarTicketVenta($nro_boleta, $arrIndicador, $arrPrecios, $arrCliente)
    {

        $fecha = VentasControlador::ctrObtenerDetalleFecha($nro_boleta);

        $fecha_string = "";

        foreach ($fecha as $fec) {
            $fecha_venta = new DateTime($fec["fecha_venta"]);
            $fecha_string = $fecha_venta->format('d/M/Y - h:i:s A');
        }


        $nuevoArray = explode(',', $arrIndicador);
        $nuevoArray2 = explode(',', $arrPrecios);

        $cantidad = count($nuevoArray2);

        $DatosCliente = explode('/', $arrCliente);

        // echo '<script>console.log("hola "+  "' . $DatosCliente[0] . '"+" hola2"+ " - hola "+  "' . $DatosCliente[1] . '"+" hola2" + " - hola "+  "' . $DatosCliente[2] . '"+" hola2");</script>';
        $DatosCliente[0] = trim($DatosCliente[0]);

        if ($DatosCliente[0] === "VARIOS" ) {
            $altura_nombre = 0;
        } else {
           $altura_nombre = 20;
        }

        $altura = $cantidad * 16 + 130 + $altura_nombre;

        require('../vistas/assets/plugins/fpdf/fpdf.php');

        $pdf = new FPDF($orientation = 'P', $unit = 'mm', array(80, $altura));          
        $pdf->AddPage();        
        $pdf->setMargins(8,5,8);

        //nombre del negocio
        $pdf->SetFont('Arial', 'B', 12);

        $pdf->SetY(3);

        $pdf->Rect(10,3,62, 6);
        
        $pdf->Cell(65, 6, 'INVERSIONES JUSYBA SAC',0,0,'C');

        $pdf->Ln();
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(65, 4, "UBICANOS : JR AYACUCHO 1054 LIMA LIMA LIMA",0,0,'C');  
        
        
        $pdf->Ln();
        $pdf->Cell(65, 4, "PEDIDOS AL  014280771 - 980808623",0,0,'C'); 

        $pdf->Ln();
        $pdf->Cell(65, 4, "PLIN: 914959996 - YAPE:980837165",0,0,'C'); 
        
        $pdf->Ln();

        // Establecer la zona horaria a Perú
        date_default_timezone_set('America/Lima');

        $fechaHora = strftime('%d/%b/%Y %I:%M:%S %p');
        $pdf->SetFont('times', 'B',12);
        // Imprimir en el PDF
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(65, 4, utf8_decode("=========================================="),0,0,'C');
        $pdf->Ln();

        $pdf->SetFont('times', 'B',12);
        $pdf->Cell(65, 4, utf8_decode($fecha_string), 0, 1, 'C');
        $pdf->SetFont('times', 'B',7);
        $pdf->Cell(65, 4, "Impresion: ".utf8_decode($fechaHora), 0, 1, 'C');
        $pdf->setMargins(10,10,10);

        
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(65, 4, utf8_decode("=========================================="),0,0,'C');

        $pdf->Ln();

        $y = $pdf->GetY();

        $pdf->Rect(5, $y, 71, 12);

        $pdf->setMargins(8,10,8);

        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(60, 6, utf8_decode("TICKET DE VENTA"),0,0,'C');

        $pdf->Ln();

        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(60, 6, utf8_decode("T005 - " .$nro_boleta),0,0,'C');

        $pdf->setMargins(10,10,10);

        $pdf->Ln();
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(60, 4, utf8_decode("=========================================="),0,0,'C');

        $pdf->setMargins(8,10,8);

        $y = $pdf->GetY();

        if ($DatosCliente[0] === "VARIOS" ) {
            
        } else {
            
            $cant = 0;

            $pdf->Ln();
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->SetX(5);
            $pdf->Cell(0, 5, "CLIENTE : ",0,0,'L');
            $pdf->Ln();
            // $pdf->SetX(5);
            // $pdf->Cell(0, 5, utf8_decode(" - " .$DatosCliente[0]),0,0,'L');

            // $text = "EMANEL FARROÑAY TUPAC YUPANQUI, AVENINA TUPAC AMARU 2963";
            $text = $DatosCliente[0];
        
            // Dividir el texto en segmentos de longitud $maxLength
            $segments = str_split($text, 45);

            // Imprimir cada segmento en una nueva celda
            foreach ($segments as $index => $segment) {
                $pdf->SetX(5);
                $pdf->SetFont('Arial', '',8);
                $pdf->Cell(0, 5, utf8_decode($segment), 0, 1, 'L');
                $cant = $cant + 5;
            }

            $pdf->Rect(8,14 + $y, 64, 0);
            

            $pdf->SetFont('Arial', 'B', 8);
            $pdf->SetX(5);
            $pdf->Cell(0, 5, "DNI o RUC: ",0,0,'L');
            $pdf->SetX(20);
            $pdf->Cell(0, 5, utf8_decode("  " .$DatosCliente[1]),0,0,'L');

            $pdf->Ln();
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->SetX(5);
            $pdf->Cell(0, 5, "DIRECCION : ",0,0,'L');
            $pdf->Ln();
            $text_direccion = $DatosCliente[2];

            // Dividir el texto en segmentos de longitud $maxLength
            $segments = str_split($text_direccion, 45);

            $pdf->Rect(8,19 + $y, 64, 0);

            // Imprimir cada segmento en una nueva celda
            foreach ($segments as $index => $segment) {
                $pdf->SetX(5);
                $pdf->SetFont('Arial', '', 8);
                $pdf->Cell(0, 5, utf8_decode($segment), 0, 1, 'L');
                $cant = $cant + 5;
            }

            $pdf->SetFont('Arial', 'B', 8);

            $pdf->Cell(65, 4, utf8_decode("=========================================="),0,0,'C');
            

            $pdf->Rect(5, 3 + $y, 71, 16+ $cant);
        }
        
        $pdf->Ln();
        $pdf->SetX(5);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(5, 5, "#",0,0,'L');
        $pdf->Cell(50, 4, "Descripcion producto",0,0,'L');

        $pdf->Ln();

        $pdf->SetX(10);
        $pdf->Cell(15, 4, "Cantidad" ,0,0,'L'); 
        $pdf->Cell(5, 4, "x",0,0,'L');
        $pdf->Cell(30, 4, "Precio", 0, 0, 'L');
        $pdf->Cell(8, 4,  "Total", 0, 0, "L");       

        
        $pdf->Ln();
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(65, 4, utf8_decode("=========================================="),0,0,'C');
        $pdf->Ln();

        
        $total = 0;
        
        $productos = VentasControlador::ctrObtenerDetalleVenta($nro_boleta);


        foreach ($productos as $pro) {

            $pdf->SetX(5);

            $pdf->SetFont('Arial', '', 7);
            $pdf->Cell(5, 5, "#",0,0,'L');
            
            $pdf->Cell(50, 5,  utf8_decode(strtoupper(substr($pro["descripcion_producto"], 0, 40))),0,0,'L');

            $pdf->Ln();

            $pdf->SetFont('Arial', '', 8);

            $pdf->SetX(10);

            $pdf->Cell(22, 5, $pro["cantidad"]. " ". $pro["medida"], 0, 0, 'L');
  
            $pdf->Cell(3, 5, "X", 0, 0, 'L');

            $pdf->Cell(25, 5, "S./ " . number_format($pro["precio_unitario_venta"], 2, ".", ","), 0, 0, 'L');

            $pdf->SetFont('Arial', 'B', 8);

            $pdf->Cell(30, 5,  "S./ " . number_format($pro["cantidad"] * $pro["precio_unitario_venta"], 2, ".", ","), 0, 0, "L");            

            $pdf->Ln();

            $pdf->SetFont('Arial', '', 8);

            $pdf->Cell(65, 1, utf8_decode("---------------------------------------------------------------------------"),0,0,'C');

            $pdf->Ln();

            $total += $pro["cantidad"] * $pro["precio_unitario_venta"];
            $cantidad += 1;
                        
        }

        $pdf->SetFont('Arial', 'B', 8);

        $pdf->Cell(65, 4, utf8_decode("=========================================="),0,0,'C');

        // $pdf->SetFont('Arial', '', 8);
        // $pdf->Ln();
        // $pdf->Ln();
        // $pdf->Cell(20, 4, "OP. GRAVADA:" );
        // $pdf->SetFont('Arial', 'B', 8);
        // $pdf->Cell(50, 4, "S./ ". ROUND($total,2) - ROUND($total*0.18,2),0, 0, 'R');
        // $pdf->SetFont('Arial', '', 8);
        // $pdf->Ln();

        // $pdf->Cell(20, 4, "OP. INAFECTA:" );
        // $pdf->SetFont('Arial', 'B', 8);
        // $pdf->Cell(50, 4, "S./ ". ROUND(0.00,2),0, 0, 'R');
        // $pdf->SetFont('Arial', '', 8);
        // $pdf->Ln();
    
    
        // $pdf->Cell(20, 4, "I.G.V.:" );
        // $pdf->SetFont('Arial', 'B', 8);
        // $pdf->Cell(50, 4, "S./ ". ROUND($total*0.18,2),0, 0, 'R');
        // $pdf->SetFont('Arial', '', 8);
        $pdf->Ln();

        $pdf->SetX(5);

        $posY = $pdf->GetY();

        $pdf->Rect(5,$posY - 1, 71, 6);

        $pdf->Cell(20, 4, "TOTAL A PAGAR: ");
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(50, 4, "S./ ". number_format($total,2,".",","),0, 0, 'R');
        $pdf->SetFont('Arial', '', 8);
        $pdf->Ln();
        $pdf->setMargins(50, 50, 50);

        $pdf->Output();

        $pdf->print();
        
        

        
    }

    public function AjaxGenerarTicketVenta_2($nro_boleta, $arrIndicador, $arrPrecios, $arrProveedor , $Texto_pago,$Mensajero)
    {

        $nuevoArray = explode(',', $arrIndicador);
        $nuevoArray2 = explode(',', $arrPrecios);

        $cantidad = count($nuevoArray) - 1;

        $DatosCliente = explode('/', $arrProveedor);

        // echo '<script>console.log("hola de venta 2 "+  "' . $DatosCliente[0] . '"+" hola2"+ " - hola "+  "' . $DatosCliente[1] . '"+" hola2" + " - hola "+  "' . $DatosCliente[2] . '"+" hola2");</script>';
        $DatosCliente[0] = trim($DatosCliente[0]);

        if ($DatosCliente[0] === "VARIOS" ) {
            $altura = 0;
        } else {
           $altura = 30;

        }

        $altura = $cantidad * 12 + 130+ $altura;

        require('../vistas/assets/plugins/fpdf/fpdf.php');

        $pdf = new FPDF($orientation = 'P', $unit = 'mm', array(80, $altura));         
        $pdf->AddPage();        
        $pdf->setMargins(5,5,5);

        //nombre del negocio
        $pdf->SetFont('Arial', 'B', 12);

        $pdf->SetY(3);

        $pdf->Rect(9,3,62, 6);
        
        $pdf->Cell(70, 6, 'INVERSIONES JUSYBA SAC',0,0,'C');

        $pdf->Ln();
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(70, 4, "UBICANOS : JR AYACUCHO 1054 LIMA LIMA LIMA",0,0,'C');  
        
        
        $pdf->Ln();
        $pdf->Cell(70, 4, "PEDIDOS AL  014280771 - 980808623",0,0,'C'); 

        $pdf->Ln();
        $pdf->Cell(70, 4, "PLIN: 914959996 - YAPE:980837165",0,0,'C'); 
        
        $pdf->Ln();

        // Establecer la zona horaria a Perú
        date_default_timezone_set('America/Lima');

        $fechaHora = strftime('%d/%b/%Y %I:%M:%S %p');

        // Imprimir en el PDF
        $pdf->Cell(70, 4, utf8_decode($fechaHora), 0, 1, 'C');

        $pdf->Ln();

        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(70, 4, utf8_decode("TICKET DE COMPRAS"),0,0,'C');

        $pdf->Ln();

        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(70, 6, utf8_decode("T001 - " .$nro_boleta),0,0,'C');

        $pdf->setMargins(5,10,5);

        $DatosCliente = explode('/', $arrProveedor);

        // echo '<script>console.log("hola de venta 2 "+  "' . $DatosCliente[0] . '"+" hola2"+ " - hola "+  "' . $DatosCliente[1] . '"+" hola2" + " - hola "+  "' . $DatosCliente[2] . '"+" hola2");</script>';
        $DatosCliente[0] = trim($DatosCliente[0]);

        $pdf->Rect(4,39, 71, 23);
        
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
            $pdf->Rect(4,64, 71, 28);

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
        $pdf->SetFont('Arial', 'B', 8);

        $pdf->Cell(70, 4, utf8_decode("=========================================="),0,0,'C');
        $pdf->Ln();

        $pdf->SetX(5);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(5, 5, "#",0,0,'L');
        $pdf->Cell(50, 4, "Descripcion producto",0,0,'L');

        $pdf->Ln();

        $pdf->SetX(5);
        $pdf->Cell(15, 4, "Cantidad" ,0,0,'L'); 
        $pdf->Cell(5, 4, "x",0,0,'L');
        $pdf->Cell(30, 4, "Precio", 0, 0, 'L');
        $pdf->Cell(8, 4,  "Total", 0, 0, "L");       

        
        $pdf->Ln();
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(70, 4, utf8_decode("=========================================="),0,0,'C');
        $pdf->Ln();

        
        $total = 0;
        
        $productos = VentasControlador::ctrObtenerDetalleCompra($nro_boleta);

        
        
        $nuevoArray = explode(',', $arrIndicador);
        $nuevoArray2 = explode(',', $arrPrecios);

        $cantidad = count($nuevoArray) - 1;

        foreach ($productos as $pro) {

            $pdf->SetX(5);

            $pdf->SetFont('Arial', '', 7);
            $pdf->Cell(5, 5, "#",0,0,'L');
            
            $pdf->Cell(50, 5,  utf8_decode(strtoupper(substr($pro["descripcion_producto"], 0, 40))),0,0,'L');

            $pdf->Ln();

            $pdf->SetFont('Arial', '', 8);

            $pdf->SetX(5);

            $pdf->Cell(22, 5, $pro["cantidad"]. " ". $pro["medida"], 0, 0, 'L');
  
            $pdf->Cell(3, 5, "X", 0, 0, 'L');

            $pdf->Cell(25, 5, "S./ " . number_format($pro["precio_unitario_compra"], 2, ".", ","), 0, 0, 'L');

            $pdf->SetFont('Arial', 'B', 8);

            $pdf->Cell(30, 5,  "S./ " . number_format($pro["cantidad"] * $pro["precio_unitario_compra"], 2, ".", ","), 0, 0, "L");            

            $pdf->Ln();

            $pdf->SetFont('Arial', '', 8);

            $pdf->Cell(70, 1, utf8_decode("---------------------------------------------------------------------------"),0,0,'C');

            $pdf->Ln();

            $total += $pro["cantidad"] * $pro["precio_unitario_compra"];
            $cantidad += 1;
                        
        }

        $pdf->SetFont('Arial', 'B', 8);

        $pdf->Cell(70, 4, utf8_decode("=========================================="),0,0,'C');

        $pdf->Ln();

        $pdf->SetX(5);

        $posY = $pdf->GetY();

        $pdf->Rect(4,$posY - 1, 71, 6);

        $pdf->Cell(20, 4, "TOTAL A PAGAR: ");
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(50, 4, "S./ ". number_format($total,2,".",","),0, 0, 'R');
        $pdf->SetFont('Arial', '', 8);
        $pdf->Ln();
        $pdf->setMargins(50, 50, 50);

        $pdf->Output();

        $pdf->print();
        
        

        
    }

    public function ajaxMostrarIcono(){

        $modulos = ProductosVentaRapidaControlador::ctrMostrarIcono();

        echo json_encode ($modulos);
    }

    public function ajaxListarCategorias(){

        $modulos = ProductosVentaRapidaControlador::ctrListarCategorias();

        echo json_encode ($modulos);
    }

    public function ajaxListarBotones(){

        $modulos = ProductosVentaRapidaControlador::ctrListarBotones();

        echo json_encode ($modulos);
    }

    public function ajaxListarBotonesPopulares(){

        $modulos = ProductosVentaRapidaControlador::ctrListarBotonesPopulares();

        echo json_encode ($modulos);
    }

    public function ajaxMostrarColor(){

        $modulos = ProductosVentaRapidaControlador::ctrMostrarColor();

        echo json_encode ($modulos);
    }

    public function ajaxAgregarCatalogo($icono, $color){

        $modulos = ProductosVentaRapidaControlador::ctrAgregarCatalogo($icono, $color);

        echo json_encode ($modulos);
    }

    public function ajaxAgregarCatalogo_p2($id_color, $id_icono, $nombre, $descripcion){

        $modulos = ProductosVentaRapidaControlador::ctrAgregarCatalogo_p2($id_color, $id_icono, $nombre, $descripcion);

        echo json_encode ($modulos);
    }

    public function ajaxAgregarBoton($icono, $color, $padre){

        $modulos = ProductosVentaRapidaControlador::ctrAgregarBoton($icono, $color, $padre);

        echo json_encode ($modulos);
    }

    public function ajaxAgregarBoton_p2($id_color, $id_icono, $nombre, $descripcion, $id_padre){

        $modulos = ProductosVentaRapidaControlador::ctrAgregarBoton_p2($id_color, $id_icono, $nombre, $descripcion, $id_padre);

        echo json_encode ($modulos);
    }

    public function ajaxAgregarBotonPopular($icono, $color){

        $modulos = ProductosVentaRapidaControlador::ctrAgregarBotonPopular($icono, $color);

        echo json_encode ($modulos);
    }

    public function ajaxAgregarBotonPopular_p2($id_color, $id_icono, $nombre, $descripcion){

        $modulos = ProductosVentaRapidaControlador::ctrAgregarBotonPopular_p2($id_color, $id_icono, $nombre, $descripcion);

        echo json_encode ($modulos);
    }
    

    public function ajaxProductosNombre(){

        $modulos = ProductosVentaRapidaControlador::ctrProductosNombre();

        echo json_encode ($modulos);
    }

    public function ajaxListaBotonesCatalogo(){

        $modulos = ProductosVentaRapidaControlador::ctrListaBotonesCatalogo();

        echo json_encode ($modulos);
    }

    public function ajaxListaBotonesProductos($id_catologo){

        $modulos = ProductosVentaRapidaControlador::ctrListaBotonesProductos($id_catologo);

        echo json_encode ($modulos);
    }

    public function ajaxDarCodigoProducto($boton){

        $modulos = ProductosVentaRapidaControlador::ctrDarCodigoProducto($boton);

        echo json_encode ($modulos);
    }

    public function ajaxVerificaStockProducto($codigo_producto,$palabra,$numero){

        $modulos = ProductosVentaRapidaControlador::ctrVerificaStockProducto($codigo_producto,$palabra,$numero);

        echo json_encode ($modulos);
    }

    public function ajaxEliminarCatalogo($numero,$orden){

        $modulos = ProductosVentaRapidaControlador::ctrEliminarCatalogo($numero,$orden);

        echo json_encode ($modulos);
    }

    public function ajaxEliminarBoton($numero){

        $modulos = ProductosVentaRapidaControlador::ctrEliminarBoton($numero);

        echo json_encode ($modulos);
    }

    public function ajaxEliminarBotonPopulares($numero){

        $modulos = ProductosVentaRapidaControlador::ctrEliminarBotonPopulares($numero);

        echo json_encode ($modulos);
    }

    public function ajaxListaBotonesProductos_Popular(){

        $modulos = ProductosVentaRapidaControlador::ctrListaBotonesProductos_Popular();

        echo json_encode ($modulos);
    }

    public function ajaxdarOrdenBotones($id_catalogo){

        $modulos = ProductosVentaRapidaControlador::ctrdarOrdenBotones($id_catalogo);

        echo json_encode ($modulos);
    }

    public function ajaxReordenarBotones($modulos_ordenados){

        $modulos = ProductosVentaRapidaControlador::ctrReordenarBotones($modulos_ordenados);

        echo json_encode ($modulos);
    }

    public function ajaxAgregarPorCategoria($categorias,$id_catalogo,$color_catalogo,$icono_catalogo){

        $modulos = ProductosVentaRapidaControlador::ctrAgregarPorCategoria($categorias,$id_catalogo,$color_catalogo,$icono_catalogo);

        echo json_encode ($modulos);
    }

    public function ajaxdarOrdenBotonesCatalogos(){

        $modulos = ProductosVentaRapidaControlador::ctrdarOrdenBotonesCatalogos();

        echo json_encode ($modulos);
    }

    public function ajaxReordenarBotonesCatalogos($modulos_ordenados){

        $modulos = ProductosVentaRapidaControlador::ctrReordenarBotonesCatalogos($modulos_ordenados);

        echo json_encode ($modulos);
    }

    public function ajaxEditarBoton_p2($id_boton,$id_color, $id_icono, $nombre, $descripcion, $id_padre){

        $modulos = ProductosVentaRapidaControlador::ctrEditarBoton_p2($id_boton,$id_color, $id_icono, $nombre, $descripcion, $id_padre);

        echo json_encode ($modulos);
    }

    public function ajaxEditarBotonPopular_p2($id_boton,$id_color, $id_icono, $nombre, $descripcion){

        $modulos = ProductosVentaRapidaControlador::ctrEditarBotonPopular_p2($id_boton,$id_color, $id_icono, $nombre, $descripcion);

        echo json_encode ($modulos);
    }

    public function ajaxAgregarBotonCatalogo($icono, $color){

        $modulos = ProductosVentaRapidaControlador::ctrAgregarBotonCatalogo($icono, $color);

        echo json_encode ($modulos);
    }

    public function ajaxEditarBotonCatalogo_p2($id_boton,$id_color, $id_icono, $nombre, $descripcion){

        $modulos = ProductosVentaRapidaControlador::ctrEditarBotonCatalogo_p2($id_boton,$id_color, $id_icono, $nombre, $descripcion);

        echo json_encode ($modulos);
    }

    public function ajaxVerCatalogo($id_padre){

        $modulos = ProductosVentaRapidaControlador::ctrVerCatalogo($id_padre);

        echo json_encode ($modulos);
    }

    public function ajaxVerCatalogoPopulares(){

        $modulos = ProductosVentaRapidaControlador::ctrVerCatalogoPopulares();

        echo json_encode ($modulos);
    }
}


if(isset($_POST['accion']) && $_POST['accion'] == 1){ //Ejecutar function ventas del mes (Grafico de Barras)

    $TablaVentaRapida = new AjaxProductosVentaRapida();
    $TablaVentaRapida -> getTablaVentaRapida();

}else if(isset($_POST['accion']) && $_POST['accion'] == 2){ //Ejecutar function de productos mas vendidos

    $productosVentaRapida = new AjaxProductosVentaRapida();
    $productosVentaRapida -> getProductosVentaRapida();

}else if(isset($_POST["accion"]) && $_POST["accion"] == 3){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $listaProducto = new AjaxProductosVentaRapida();
    $listaProducto -> ajaxBuscarProductos();
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 4){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $Tablaxcategoria = new AjaxProductosVentaRapida();
    $Tablaxcategoria -> num_categoria = $_POST["num_categoria"];
    $Tablaxcategoria -> ajaxTablaModal();
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 5){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $Tablaxcategoria = new AjaxProductosVentaRapida();
    $Tablaxcategoria -> ajaxMostrarIcono();
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 6){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $Tablaxcategoria = new AjaxProductosVentaRapida();
    $Tablaxcategoria -> ajaxListarCategorias();
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 7){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $Tablaxcategoria = new AjaxProductosVentaRapida();
    $Tablaxcategoria -> ajaxListarBotones();
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 8){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $Tablaxcategoria = new AjaxProductosVentaRapida();
    $Tablaxcategoria -> ajaxMostrarColor();
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 9){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $Tablaxcategoria = new AjaxProductosVentaRapida();
    $Tablaxcategoria -> ajaxAgregarCatalogo($_POST["icono"] , $_POST["color"]);
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 10){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $Tablaxcategoria = new AjaxProductosVentaRapida();
    $Tablaxcategoria -> ajaxAgregarCatalogo_p2($_POST["id_color"] , $_POST["id_icono"], $_POST["nombre"] , $_POST["descripcion"]);
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 11){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $Tablaxcategoria = new AjaxProductosVentaRapida();
    $Tablaxcategoria -> ajaxAgregarBoton($_POST["icono"] , $_POST["color"], $_POST["padre"]);
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 12){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $Tablaxcategoria = new AjaxProductosVentaRapida();
    $Tablaxcategoria -> ajaxAgregarBoton_p2($_POST["id_color"] , $_POST["id_icono"], $_POST["nombre"] , $_POST["descripcion"], $_POST["id_padre"]);
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 13){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $Tablaxcategoria = new AjaxProductosVentaRapida();
    $Tablaxcategoria -> ajaxProductosNombre();
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 14){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $Tablaxcategoria = new AjaxProductosVentaRapida();
    $Tablaxcategoria -> ajaxListaBotonesCatalogo();
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 15){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $Tablaxcategoria = new AjaxProductosVentaRapida();
    $Tablaxcategoria -> ajaxListaBotonesProductos($_POST["id_catologo"]);
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 16){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $Tablaxcategoria = new AjaxProductosVentaRapida();
    $Tablaxcategoria -> ajaxDarCodigoProducto($_POST["boton"]);
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 17){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $VerificarStock = new AjaxProductosVentaRapida();
    $VerificarStock -> ajaxVerificaStockProducto($_POST["codigo_producto"],$_POST["palabra"],$_POST["numero"]);
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 18){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $VerificarStock = new AjaxProductosVentaRapida();
    $VerificarStock -> ajaxEliminarCatalogo($_POST["numero"],$_POST["orden"]);
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 19){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $VerificarStock = new AjaxProductosVentaRapida();
    $VerificarStock -> ajaxEliminarBoton($_POST["numero"]);
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 20){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $Tablaxcategoria = new AjaxProductosVentaRapida();
    $Tablaxcategoria -> ajaxListaBotonesProductos_Popular();
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 21){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $Tablaxcategoria = new AjaxProductosVentaRapida();
    $Tablaxcategoria -> ajaxdarOrdenBotones($_POST["id_catalogo"]);
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 22){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $Tablaxcategoria = new AjaxProductosVentaRapida();
    $Tablaxcategoria -> ajaxReordenarBotones($_POST["modulos"]);
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 23){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $Tablaxcategoria = new AjaxProductosVentaRapida();
    $Tablaxcategoria -> ajaxAgregarPorCategoria($_POST["categorias"],$_POST["id_catalogo"],$_POST["color_catalogo"],$_POST["icono_catalogo"]);
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 24){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $Tablaxcategoria = new AjaxProductosVentaRapida();
    $Tablaxcategoria -> ajaxdarOrdenBotonesCatalogos();
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 25){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $Tablaxcategoria = new AjaxProductosVentaRapida();
    $Tablaxcategoria -> ajaxReordenarBotonesCatalogos($_POST["modulos"]);
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 26){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $Tablaxcategoria = new AjaxProductosVentaRapida();
    $Tablaxcategoria -> ajaxEditarBoton_p2($_POST["id_boton"] ,$_POST["id_color"] , $_POST["id_icono"], $_POST["nombre"] , $_POST["descripcion"], $_POST["id_padre"]);
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 27){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $Tablaxcategoria = new AjaxProductosVentaRapida();
    $Tablaxcategoria -> ajaxAgregarBotonCatalogo($_POST["icono"] , $_POST["color"]);
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 28){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $Tablaxcategoria = new AjaxProductosVentaRapida();
    $Tablaxcategoria -> ajaxEditarBotonCatalogo_p2($_POST["id_boton"] ,$_POST["id_color"] , $_POST["id_icono"], $_POST["nombre"] , $_POST["descripcion"]);
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 29){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $Tablaxcategoria = new AjaxProductosVentaRapida();
    $Tablaxcategoria -> ajaxVerCatalogo($_POST["id_padre"]);
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 30){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $Tablaxcategoria = new AjaxProductosVentaRapida();
    $Tablaxcategoria -> ajaxListarBotonesPopulares();
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 31){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $VerificarStock = new AjaxProductosVentaRapida();
    $VerificarStock -> ajaxEliminarBoton($_POST["numero"]);
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 32){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $Tablaxcategoria = new AjaxProductosVentaRapida();
    $Tablaxcategoria -> ajaxVerCatalogoPopulares();
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 33){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $Tablaxcategoria = new AjaxProductosVentaRapida();
    $Tablaxcategoria -> ajaxAgregarBotonPopular($_POST["icono"] , $_POST["color"]);
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 34){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $Tablaxcategoria = new AjaxProductosVentaRapida();
    $Tablaxcategoria -> ajaxAgregarBotonPopular_p2($_POST["id_color"] , $_POST["id_icono"], $_POST["nombre"] , $_POST["descripcion"]);
	
}else if(isset($_POST["accion"]) && $_POST["accion"] == 35){ // OBTENER DATOS DE UN PRODUCTO POR SU CODIGO

    $Tablaxcategoria = new AjaxProductosVentaRapida();
    $Tablaxcategoria -> ajaxEditarBotonPopular_p2($_POST["id_boton"] ,$_POST["id_color"] , $_POST["id_icono"], $_POST["nombre"] , $_POST["descripcion"]);
	
}
if (isset($_GET["nro_boleta"]) && isset($_GET["arrIndicador"])&& isset($_GET["arrPrecios"]) && isset($_GET["arrCliente"])) {

    $ventas = new AjaxProductosVentaRapida();
    $ventas->AjaxGenerarTicketVenta($_GET["nro_boleta"], $_GET["arrIndicador"], $_GET["arrPrecios"], $_GET["arrCliente"]);

} else if (isset($_GET["nro_boleta"]) && isset($_GET["arrIndicador"])&& isset($_GET["arrPrecios"]) && isset($_GET["arrProveedor"]) && isset($_GET["Texto_pago"])&& isset($_GET["Mensajero"])) {

    $ventas = new AjaxProductosVentaRapida();
    $ventas->AjaxGenerarTicketVenta_2($_GET["nro_boleta"], $_GET["arrIndicador"], $_GET["arrPrecios"], $_GET["arrProveedor"], $_GET["Texto_pago"], $_GET["Mensajero"]);

}


<?php

    require_once "../controladores/ventas.controlador.php";
    require_once "../modelos/ventas.modelo.php";
    require_once "../vendor/autoload.php";

class ajaxVentaImpresion{

    public function AjaxGenerarImpresionCompra($nro_Boletas,$ventas_desde,$ventas_hasta)
    {
        require('../vistas/assets/plugins/fpdf/fpdf.php');

        $pdf = new FPDF($orientation = 'L', $unit = 'mm', 'A4');

        // Calcular cuántas filas caben en una página
        $boletas_array = explode(",", $nro_Boletas);

        // Calcular cuántas filas caben en una página
        $rowsPerPage = 24; // Este número depende de la configuración de tu documento

        // Dividir los datos en grupos de acuerdo a ese número de filas
        $chunks = array_chunk($boletas_array, $rowsPerPage);

        $ultimo_chunk = end($chunks); // Obtener el último chunk
        $numero_datos_ultimo_chunk = count($ultimo_chunk); // Contar el número de elementos en el último chunk
        $bajar = 7 * $numero_datos_ultimo_chunk;

        foreach ($chunks as $chunk) {
            $pdf->AddPage();
            $pdf->SetMargins(5, 5, 5);

            $this->generarNotaVentaCompra($pdf, $chunk, 4, 4,$ventas_desde,$ventas_hasta);
            
            // Agregar un salto de página al final de cada grupo
            
        }
        
        $this->generarSumatoria($pdf, $nro_Boletas, 4, $bajar + 40);

        // $pdf->AddPage();
        // $pdf->SetMargins(5, 5, 5);

        // // Generar la primera nota de venta
        // $this->generarNotaVentaCompra($pdf, $nro_Boletas, 4, 4);

        $pdf->Output();

        
    }
    
    
    private function generarNotaVentaCompra($pdf, $chunk,$x,$y,$ventas_desde,$ventas_hasta)
    {   
        $pdf->SetXY($x, $y);
        
        // Título
        $pdf->SetFont('Arial', 'B', 24);
        $pdf->Rect($x+ 194, $pdf->GetY(), 90, 10);
        
        $posX = $pdf->GetX();
        $posY = $pdf->GetY();

        $pdf->SetFont('Arial', 'B', 30);
        $pdf->Cell(0, 10, 'INVERSIONES JUSYBA SAC', 0, 1, 'L');

        // Restaurar la posición original después de escribir el texto "INVERSIONES JUSYBA SAC"
        $pdf->SetXY($x-1, $posY + 12); // Sumar 10 para dar un espacio entre el texto y el rectángulo

        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, 'FECHA DE IMPRESION: ' . date('d/m/Y'), 0, 1, 'L');
        $pdf->SetXY($x+200, $posY + 13);
        $pdf->SetFont('Arial', '', 12);
        date_default_timezone_set('America/Lima');
        $pdf->Cell(0, 6, "desde ".$ventas_desde." hasta ".$ventas_hasta, 0, 1, 'L');
        

        // Posicionar el texto "NOTA DE VENTA" dentro del rectángulo
        $pdf->SetFont('Arial', 'B', 20);
        $pdf->SetXY(107, $posY); // Utilizar la posición original de Y del rectángulo
        $pdf->Text($x+ 200, $posY +8, 'REPORTE DE VENTAS');

        $pdf->SetXY($x, $posY + 27);

        $cantidad_filas_1 = 6;
        $fill = false;

        // $datos_array = explode(",", $chunk);

        $pdf->SetFont('Times', 'B', 10);
        
        $pdf->Cell(20, 7, "Codigo" ,    1, 0, 'C', $fill);
        
        $pdf->Cell(65, 7, "Cliente" ,   1, 0, 'L', $fill);

        $pdf->Cell(20, 7, "Monto" ,     1, 0, 'C', $fill);

        $pdf->Cell(20, 7, "Deuda" ,     1, 0, 'C', $fill);

        $pdf->Cell(25, 7, "Repartidor" ,    1, 0, 'C', $fill);

        $pdf->Cell(35, 7, "Tiempo" ,      1, 0, 'C', $fill);

        $pdf->Cell(35, 7, "Cobrador" ,    1, 0, 'C', $fill);

        $pdf->Cell(25, 7, "Modo Pago" ,      1, 0, 'C', $fill);

        

        // $pdf->Cell(60, 7, "Hora de salida y Hora de regreso" ,      1, 0, 'C', $fill);

        $pdf->Cell(25, 7, "Fecha" ,      1, 0, 'C', $fill);
        $pdf->Cell(15, 7, "Serie" ,      1, 0, 'C', $fill);

        foreach($chunk as $datos) {

            if ($fill) {
                $pdf->SetFillColor(205, 205, 205); // Color gris claro para filas impares
            } else {
                $pdf->SetFillColor(255, 255, 255); // Color blanco para filas pares
            }

            $datos_sub = explode("/", $datos);
            $filas = array_chunk($datos_sub, 3);

            $nro_boleta = $filas[0][0]; 

            $productos = VentasControlador::ctrObtenerDetalleVenta2($nro_boleta);

            foreach ($productos as $pro) {

                $cliente = str_replace('Ñ', 'N', $pro["Cliente"]); // Reemplazar Ñ por N

                $posicionGuion = strpos($cliente, '-');

                if ($posicionGuion !== false && $posicionGuion > 0) {
                    $palabraRecortada = trim(substr($cliente, 0, $posicionGuion));
                } else {
                    // Si no se encuentra un guion (-) o está en la primera posición, mantener la palabra sin cambios
                    $palabraRecortada = $cliente;

                    // Limitar la longitud de la palabra a 40 caracteres
                    if (strlen($palabraRecortada) > 40) {
                        $palabraRecortada = substr($palabraRecortada, 0, 40);
                    }
                }

                
                $partes = explode('-', $cliente);

                if (count($partes) >= 2) {
                    // Eliminar espacios en blanco al principio y al final de la segunda palabra
                    $segundaPalabra = ' - '.trim($partes[1]);
                } else {
                    // Si no hay al menos dos partes, devolver una cadena vacía
                    $segundaPalabra = '';
                }

                if($pro["tipo_venta"] === "FACTURA"){
                    $pdf->SetTextColor(255, 0, 0); // Establece el color del texto a rojo (RGB: 255, 0, 0)
                }else if($pro["tipo_venta"] === "BOLETA"){
                    $pdf->SetTextColor(128, 0, 128); // Establece el color del texto a rojo (RGB: 255, 0, 0)
                }else if($pro["tipo_venta"] === "NOTA DE VENTA"){
                    $pdf->SetTextColor(0, 0, 255); // Establece el color del texto a rojo (RGB: 255, 0, 0)
                }else if($pro["tipo_venta"] === "TICKET"){
                    $pdf->SetTextColor(0, 100, 0); // Establece el color del texto a rojo (RGB: 255, 0, 0)
                }else{
                    $pdf->SetTextColor(0, 100, 0);
                }

                $pdf->SetXY($x, $posY + $cantidad_filas_1 + 30);

                $pdf->SetFont('Times', 'B', 10);
                
                $pdf->Cell(20, 6, $nro_boleta , 0, 0, 'C', $fill);

                $pdf->SetFont('Times', 'B', 9);
                
                

                
                $pdf->Cell(65, 6, trim($palabraRecortada) . "\n" . $segundaPalabra, 0, 0, 'L', $fill);
                
                
                $pdf->SetFont('Times', 'B', 9.5);
    
                $pdf->Cell(20, 6, 'S/. ' . number_format($pro["total_venta"], 2), 0, 0, 'C', $fill);

                $pdf->Cell(20, 6,'S/. ' . number_format($pro["deuda"], 2), 0, 0, 'C', $fill);

                $pdf->Cell(25, 6, $pro["mensajero"], 0, 0, 'L', $fill);

                
                $tiempo1 = $pro["fecha_salida"];
                $tiempo2 = $pro["fecha_regreso"];

                // Convertir los tiempos a un formato que PHP pueda entender
                $tiempo1_timestamp = strtotime($tiempo1);
                $tiempo2_timestamp = strtotime($tiempo2);

                // Calcular la diferencia en segundos
                $diferencia_segundos = abs($tiempo2_timestamp - $tiempo1_timestamp);

                // Calcular la diferencia en minutos
                $diferencia_minutos = floor($diferencia_segundos / 60);

                // Calcular la diferencia en horas
                $diferencia_horas = floor($diferencia_minutos / 60);

                if ($diferencia_minutos < 1) {
                    $pdf->Cell(35, 6, "Inmediata", 0, 0, 'L', $fill);
                } elseif ($diferencia_horas < 1) {
                    $pdf->Cell(35, 6, $diferencia_minutos . " min.", 0, 0, 'L', $fill);
                } else {
                    $diferencia =  $diferencia_minutos -  $diferencia_horas * 60;
                    $pdf->Cell(35, 6, $diferencia_horas . " hrs y ". $diferencia." min.", 0, 0, 'L', $fill);
                }

                $pdf->Cell(35, 6, $pro["Persona_Dinero"], 0, 0, 'L', $fill);

                $pdf->Cell(25, 6, $pro["Tipo_pago"], 0, 0, 'L', $fill);

                

                $fecha = explode(' ', $pro["fecha_salida"]);

                $hora1 = explode(' ', $pro["fecha_salida"]);
                $hora2 = explode(' ', $pro["fecha_regreso"]);

                $pdf->SetFont('Times', '', 10);

                $hora1_12h = date("h:i:s A", strtotime($hora1[1]));
                $hora2_12h = date("h:i:s A", strtotime($hora2[1]));

                // $pdf->Cell(60, 6, "Desde  ".$hora1_12h."  hasta las  ".$hora2_12h, 0, 0, 'C', $fill);

                $pdf->Cell(25, 6, $fecha[0], 0, 0, 'C', $fill);

                $serie = "TICKET";
                if($pro["tipo_venta"] === "FACTURA"){
                    $serie = "F-".$pro["numero_factura"];
                }else if($pro["tipo_venta"] === "BOLETA"){
                    $serie = "B-".$pro["numero_factura"];
                }else if($pro["tipo_venta"] === "NOTA DE VENTA"){
                    $serie = "NOTA";
                }

                $pdf->Cell(15, 6, $serie , 0, 0, 'C', $fill);

                $pdf->SetTextColor(0, 0, 0); // Restablece el color del texto a negro (opcional, si deseas volver a negro para el siguiente contenido)
                            
            }
            
            $cantidad_filas_1 += 6;
            $fill = !$fill; // Alternar el color de fondo para la siguiente fila

        }

        
    }

    private function generarSumatoria($pdf, $nro_Boletas, $x,$y){

        $boletas_array = explode(",", $nro_Boletas);

        $total_ventas = 0;

        $total_deudas = 0;

        $numero_ventas = 0;

        $pdf->SetXY($x, $y);

        foreach($boletas_array as $datos) {

            $datos_sub = explode("/", $datos);
            $filas = array_chunk($datos_sub, 3);

            $nro_boleta = $filas[0][0]; 

            $productos = VentasControlador::ctrObtenerDetalleVenta2($nro_boleta);

            foreach ($productos as $pro) {
                
                $total_ventas += $pro["total_venta"];

                $total_deudas += $pro["deuda"];        
            }

            $numero_ventas += 1;

        }

        $pdf->SetFont('Times', 'B', 10);

        $pdf->Cell(25, 7, "Sumatoria" , 1, 0, 'C');

        $pdf->Cell(45, 7, "Cantidad de Ventas : $numero_ventas " , 1, 0, 'C');

        $pdf->Cell(45, 7, 'Suma Ventas: S/. ' . number_format($total_ventas, 2), 1, 0, 'C');

        $pdf->Cell(45, 7,'Suma Deudas: S/. ' . number_format($total_deudas, 2), 1, 0, 'C');


    }

}


if (isset($_GET["nro_Boletas"]) && isset($_GET["ventas_desde"]) && isset($_GET["ventas_hasta"])) {

    $ventas = new ajaxVentaImpresion;
    $ventas->AjaxGenerarImpresionCompra($_GET["nro_Boletas"],$_GET["ventas_desde"],$_GET["ventas_hasta"]);
 }

<?php
    require_once "../controladores/registros.controlador.php";
    require_once "../modelos/registros.modelo.php";
    require_once "../vendor/autoload.php";

    

class ajaxSolicitudNota{


    public function AjaxGenerarNotaVenta($nro_boleta, $arrIndicador, $arrPrecios , $arrCliente)
    {
        require('../vistas/assets/plugins/fpdf/fpdf.php');

        $pdf = new FPDF($orientation = 'L', $unit = 'mm', 'A4');
        

        $pdf->AddPage();
        $pdf->SetMargins(5, 5, 5);

        // Generar la primera nota de venta
        $this->generarNotaVenta($pdf, $nro_boleta, $arrIndicador, $arrPrecios,$arrCliente, 4, 4);

        // Generar la segunda nota de venta en la nueva página
        $this->generarNotaVenta($pdf, $nro_boleta, $arrIndicador, $arrPrecios, $arrCliente, 152, 4);

        $pdf->Output();

        
    }

    private function generarNotaVenta($pdf, $nro_boleta, $arrIndicador, $arrPrecios,$arrCliente, $x, $y)
    {   
        $pdf->SetXY($x, $y);
        
        // Título
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Rect($x+ 103, $pdf->GetY(), 38, 16);
        
        $posX = $pdf->GetX();
        $posY = $pdf->GetY();

        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 10, 'INVERSIONES JUSYBA SAC', 0, 1, 'L');

        // Restaurar la posición original después de escribir el texto "INVERSIONES JUSYBA SAC"
        $pdf->SetXY($x-1, $posY + 10); // Sumar 10 para dar un espacio entre el texto y el rectángulo

        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(0, 4, 'JR AYACUCHO 1054 - AL FRENTE DE LA GALERIA EL ZAPATON', 0, 1, 'L');
        $pdf->SetXY($x-1, $posY + 14);
        $pdf->Cell(0, 4, 'PEDIDOS AL 014280771 - 980808623 - YAPE 980837165 // PLIN 914959996 ', 0, 1, 'L');
        $pdf->SetXY($x-1, $posY + 18);
        $pdf->Cell(0, 4, 'FECHA DE EMISION: ' . date('d/m/Y'), 0, 1, 'L');
        $pdf->SetXY($x+104, $posY + 18);
        $pdf->SetFont('Arial', '', 9);
        date_default_timezone_set('America/Lima');
        $pdf->Cell(0, 4, date('d/M/Y h:i:s A'), 0, 1, 'L');

        // Posicionar el texto "NOTA DE VENTA" dentro del rectángulo
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->SetXY(107, $posY); // Utilizar la posición original de Y del rectángulo
        $pdf->Text($x+ 105, $posY + 6, 'NOTA DE VENTA');
        $pdf->Text($x + 107, $posY + 13, '0001-'.$nro_boleta);

        $pdf->SetXY($x, $posY + 23);

        $DatosCliente = explode('/', $arrCliente);
        
        $pdf->SetFont('Arial', '', 9);
        $pdf->Rect($x+0, $pdf->GetY(), 141, 14);
        $pdf->Text($x+3, $posY + 27, 'Sr(es) : ');
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Text($x+15, $posY + 27, utf8_decode(strtoupper($DatosCliente[0])));
        $pdf->SetFont('Arial', '', 9);
        $pdf->Text($x+3, $posY + 31, 'RUC : ');
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Text($x+13, $posY + 31, $DatosCliente[1]);
        $pdf->SetFont('Arial', '', 9);
        $pdf->Text($x+3, $posY + 35, 'Direccion : ');
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Text($x+19, $posY + 35, utf8_decode(strtoupper($DatosCliente[2])));

        // Rectángulo
        
        $pdf->SetXY($x, $posY + 38);

        // Tabla de productos
        // Ajusta el encabezado de la tabla
        $pdf->SetFont('Arial', 'B', 9); 
        
        $pdf->Cell(4, 6,'N', 1, 0, 'C');
        $pdf->Cell(12, 6, 'Cant', 1, 0, 'C');
        $pdf->Cell(14, 6, 'UM', 1, 0, 'C');
        $pdf->Cell(10, 6, 'Id', 1, 0, 'C');
        $pdf->Cell(65, 6, 'Descripcion', 1, 0, 'L');
        $pdf->Cell(17, 6, 'Precio', 1, 0, 'L');
        $pdf->Cell(19, 6, 'Total', 1, 1, 'L');

        $productos = RegistrosControlador::ctrObtenerDetalleVenta($nro_boleta);

        $nuevoArray = explode(',', $arrIndicador);
        $nuevoArray2 = explode(',', $arrPrecios);

        $cantidad = count($nuevoArray) - 1;
        $numero = 1;
        $cantidad_filas = 6;
        $suma_total = 0;

        $pdf->SetFont('Arial', '', 7);
        $fill = false; // Variable para alternar colores de fila

        foreach ($productos as $pro) {
            // Cambiar el color de fondo para filas impares y pares
            if ($fill) {
                $pdf->SetFillColor(205, 205, 205); // Color gris claro para filas impares
            } else {
                $pdf->SetFillColor(255, 255, 255); // Color blanco para filas pares
            }

            

            $text = $pro["medida"];

            if($text === " Paquetitos" || $text === "Paquetitos"){
                $text = "Paquete";
            }

            $pdf->SetXY($x, $posY + $cantidad_filas + 38);
            $pdf->SetFont('Times', 'B', 10);
            $pdf->Cell(4, 5, $numero, 1, 0, 'L', $fill);
            $pdf->SetFont('Times', '', 10);
            $pdf->Cell(12, 5, number_format($pro["cantidad"],2), 1, 0, 'C', $fill);
            $pdf->Cell(14, 5, $text, 1, 0, 'C', $fill);
            $pdf->SetFont('Times', '', 9);
            $pdf->Cell(10, 5, substr($pro["codigo_producto"], -5), 1, 0, 'C', $fill);
            
            $pdf->Cell(65, 5, utf8_decode(substr($pro["descripcion_producto"], 0, 35)), 1, 0, 'L', $fill);
            $pdf->SetFont('Times', '', 9);
            $pdf->Cell(17, 5, "S./ " . number_format($pro["precio_unitario_venta"], 2), 1, 0, 'L', $fill);
            $pdf->Cell(19, 5, "S./ " . number_format($pro["cantidad"] * $pro["precio_unitario_venta"], 2), 1, 1, 'L', $fill);
            $cantidad_filas += 5;
            $numero += 1;
            $cantidad += -1;

            $suma_total += $pro["cantidad"] * $pro["precio_unitario_venta"];
            $fill = !$fill; // Alternar el color de fondo para la siguiente fila
        }

        

        $unidades = array('', 'UN', 'DOS', 'TRES', 'CUATRO', 'CINCO', 'SEIS', 'SIETE', 'OCHO', 'NUEVE');
        $decenas = array('', 'DIEZ', 'VEINTE', 'TREINTA', 'CUARENTA', 'CINCUENTA', 'SESENTA', 'SETENTA', 'OCHENTA', 'NOVENTA');
        $unid_dec = array('ONCE', 'DOCE', 'TRECE', 'CATORCE', 'QUINCE', 'DIECISEIS', 'DIECISIETE', 'DISECIOCHO', 'DIECINUEVE');
        $centenas = array('', 'CIENTO', 'DOSCIENTOS', 'TRESCIENTOS', 'CUATROCIENTOS', 'QUINIENTOS', 'SEISCIENTOS', 'SETECIENTOS', 'OCHOCIENTOS', 'NOVECIENTOS');
        $miles = array('', 'MIL', 'DOS MIL', 'TRES MIL', 'CUATRO MIL', 'CINCO MIL', 'SEIS MIL', 'SIETE MIL', 'OCHO MIL', 'NUEVE MIL', 'DIEZ MIL');
        $centavos = array('CERO', 'DIEZ', 'VEINITE', 'TREINTA', 'CUARENTA', 'CINCUENTA', 'SESENTA', 'SETENTA', 'OCHENTA', 'NOVENTA');

        
        $texto = '';
    
        // Verificar si el número tiene decimales
        $partes = explode('.', round($suma_total, 1));
        $entero = (int)$partes[0];
        $decimal = isset($partes[1]) ? $partes[1] : 0;

        // Convertir $decimal a entero si no está vacío
        if (!empty($decimal)) {
            $decimal = (int)$decimal;
        }
    

    
         // Convertir la parte entera a texto
         if ($entero >= 0 && $entero <= 9) {
            $texto .= $unidades[$entero];
        } elseif ($entero >= 11 && $entero <= 19) {
            $texto .= $unid_dec[$entero - 11];
        } elseif ($entero >= 20 && $entero <= 29) {
            $texto .= $decenas[2] . ' ' . $unidades[$entero - 20];
        } elseif ($entero >= 30 && $entero <= 99) {
            $decena = (int)($entero / 10);
            $unidad = $entero % 10;
            $texto .= $decenas[$decena];
            if ($unidad > 0) {
                $texto .= ' Y ' . $unidades[$unidad];
            }
        } elseif ($entero >= 100 && $entero <= 999) {
            $centena = (int)($entero / 100);
            $resto = $entero % 100;
            $texto .= $centenas[$centena];
            if ($resto > 0) {
                $texto .= ' ' . $miles[$resto / 1000];
                $texto .= ' ' . $centenas[($resto % 100) / 100];
                $texto .= ' ' . $decenas[($resto % 100) / 10];
                $texto .= ' ' . $unidades[$resto % 10];
            }
        } elseif ($entero >= 1000 && $entero <= 9999) {
            $mil = (int)($entero / 1000);
            $resto = $entero % 1000;
            $texto .= $miles[$mil];
            if ($resto > 0) {
                $texto .= ' ' . $centenas[$resto / 100];
                $texto .= ' ' . $decenas[($resto % 100) / 10];
                $texto .= ' ' . $unidades[$resto % 10];
            }
        } elseif ($entero >= 10000 && $entero <= 20000) {
            $diezmil = (int)($entero / 10000);
            $resto = $entero % 10000;
            $texto .= 'DIEZ MIL';
            if ($resto > 0) {
                $texto .= ' ' . $centenas[$resto / 100];
                $texto .= ' ' . $decenas[($resto % 100) / 10];
                $texto .= ' ' . $unidades[$resto % 10];
            }
        }
    
        // Convertir la parte decimal a texto
        $texto .= ' SOLES';
        if ($decimal > 0) {
            $texto .= ' CON ' .  $centavos[$decimal]  . ' CENTIMOS';
        }

        
        
        $pdf->SetXY($x, 191);


       
        $pdf->SetFillColor(220);
        $pdf->Rect($x , $pdf->GetY(), 141, 15, 'F');
        $pdf->Rect($x , $pdf->GetY(), 141, 15);
        

        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Text($x + 3,  195, 'SON : '. $texto);
        $pdf->Text($x + 106,  199, 'TOTAL : S./ '. number_format($suma_total,2));

        $pdf->SetFont('Arial', 'I', 8);
        $pdf->Text($x + 3,  203, 'UNA VEZ SALIDA LA MERCADERIA NO HAY LUGAR A RECLAMO...');
        
        
        
    }

}

if (isset($_GET["nro_boleta"]) && isset($_GET["arrIndicador"])&& isset($_GET["arrPrecios"])) {

    $ventas = new ajaxSolicitudNota();
    $ventas->AjaxGenerarNotaVenta($_GET["nro_boleta"], $_GET["arrIndicador"], $_GET["arrPrecios"], $_GET["arrCliente"]);
}
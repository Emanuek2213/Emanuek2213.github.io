<?php
    require_once "../vendor/autoload.php";

    

class ajaxImprimirCuadre{

    public function AjaxGenerarCuadre($Datex_1, $Datex_2, $Datex_3 , $Datex_4, $Datex_5, $FechaBusqueda)
    {   
        define('FPDF_FONTPATH', '../vistas/assets/plugins/fpdf/font/');

        //  require('../vistas/assets/plugins/fpdf/makefont/makefont.php');

        //  MakeFont('c:\\Windows\\Fonts\\GILSANUB.ttf','cp1252');

        require('../vistas/assets/plugins/fpdf/fpdf.php');

        $pdf = new FPDF($orientation = 'P', $unit = 'mm', 'A4');
        


        $pdf->AddFont('frank','','FRAHV.php');
        $pdf->AddFont('GILSANUB','','GILSANUB.php');
        //$pdf->AddFont('frank','','franklin-gothic-heavy-regular.php');
        $pdf->AddPage();
        $pdf->SetMargins(5, 5, 5);
        
        // Generar la primera nota de venta
        $this->generarNotaVenta($pdf, $Datex_1, $Datex_2, $Datex_3,$Datex_4, $Datex_5, $FechaBusqueda, 4, 4);

        $pdf->Output();

        
    }

    private function generarNotaVenta($pdf, $Datex_1, $Datex_2, $Datex_3,$Datex_4, $Datex_5, $FechaBusqueda, $x, $y)
    {   
        $pdf->SetXY($x, $y);
        
        // Título
        $pdf->SetFont('Arial', 'B', 24);
        $pdf->Rect($x+ 152, $pdf->GetY(), 50, 27);
        
        $posX = $pdf->GetX();
        $posY = $pdf->GetY();

        $pdf->SetFont('Arial', 'B', 30);
        $pdf->Cell(0, 10, 'INVERSIONES JUSYBA SAC', 0, 1, 'L');

        // Restaurar la posición original después de escribir el texto "INVERSIONES JUSYBA SAC"
        $pdf->SetXY($x-1, $posY + 12); // Sumar 10 para dar un espacio entre el texto y el rectángulo

        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, 'JR AYACUCHO 1054 - AL FRENTE DE LA GALERIA EL ZAPATON', 0, 1, 'L');
        $pdf->SetXY($x-1, $posY + 18);
        $pdf->Cell(0, 10, 'PEDIDOS AL  014280771 - 980808623 - YAPE 980837165 // PLIN 914959996 ', 0, 1, 'L');
        $pdf->SetXY($x-1, $posY + 24);
        $pdf->Cell(0, 10, 'FECHA DE EMISION: ' . date('d/m/Y'), 0, 1, 'L');
        $pdf->SetXY($x+152, $posY + 28);
        $pdf->SetFont('Arial', '', 12);
        date_default_timezone_set('America/Lima');
        $pdf->Cell(0, 6, date('d/M/Y h:i:s A'), 0, 1, 'L');

        // Posicionar el texto "NOTA DE VENTA" dentro del rectángulo
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->SetXY(107, $posY); // Utilizar la posición original de Y del rectángulo
        $pdf->Text($x+ 165, $posY + 7, 'Nota del');
        $pdf->Text($x+ 154, $posY + 15, 'Cuadreo Caja del');
        $pdf->Text($x + 157, $posY + 23, 'Dia :'.$FechaBusqueda);

        $posY = $pdf->GetY() + 35;

        $pdf->Rect($x-1, $posY, 205, 30);

        $datos_5 = explode(",", $Datex_5);

        $pdf->SetFont('Arial', 'B', 13);

        $pdf->Text($x+ 1, $posY + 6,    '- Total de Cuentas del dia Anterior : '.$datos_5[0]);
        $pdf->Text($x+ 1, $posY + 13,   '- Diferencial de Hoy con Ayer : '.$datos_5[1]);
        $pdf->Text($x+ 1, $posY + 20,   '- Total de Ingresos del dia Anterior : '.$datos_5[2]);
        $pdf->Text($x+ 1, $posY + 27,   '- Total de Salidas del dia Anterior : '.$datos_5[3]);
        $pdf->Text($x+ 150, $posY + 7,  '- Dia : '.$FechaBusqueda);

        $posY = $pdf->GetY() + 30;

        $x = $x-1;

        ///////////////////////////////////////////////////////////////////////////////////////////

        $cantidad_filas_1 = 6;
        $fill = false;
        $sumatoria_1 = 0;

        $pdf->SetFont('Arial', 'B', 12); 

        $pdf->SetXY($x, $posY + 45);
        
        $pdf->Cell(10, 6,'N', 1, 0, 'C');
        $pdf->Cell(55, 6, 'Nombre', 1, 0, 'C');
        $pdf->Cell(25, 6, 'Credito', 1, 0, 'C');

        // Suponiendo que $Datex_1 es una cadena que representa una matriz en formato de texto
        $datos_array = explode(",", $Datex_1);

        foreach($datos_array as $datos) {

            if ($fill) {
                $pdf->SetFillColor(205, 205, 205); // Color gris claro para filas impares
            } else {
                $pdf->SetFillColor(255, 255, 255); // Color blanco para filas pares
            }

            $datos_sub = explode("/", $datos);

            $filas = array_chunk($datos_sub, 3);

            $pdf->SetXY($x, $posY + $cantidad_filas_1 + 45);
            $pdf->SetFont('Times', '', 9.5);
            $pdf->Cell(10, 6, $filas[0][0] , 1, 0, 'C', $fill);
            $pdf->Cell(55, 6,  $filas[0][1], 1, 0, 'C', $fill);
            $pdf->Cell(25, 6, "S/.".$filas[0][2] , 1, 0, 'C', $fill);

            $cantidad_filas_1 += 6;
            $sumatoria_1 += $filas[0][2];

            $fill = !$fill; // Alternar el color de fondo para la siguiente fila

        }

        $pdf->SetFont('Arial', 'B', 12); 

        $pdf->SetXY($x, $posY + 38);

        $pdf->Cell(90, 6,'Credito de Cuentas : S/.'.$sumatoria_1, 1, 0, 'C');

        ///////////////////////////////////////////////////////////////////////////////////////////

        $cantidad_filas_2 = 6;
        $fill_2 = false;
        $numero = 1;
        $sumatoria_2 = 0;

        $pdf->SetXY($x + 95, $posY + 45);
        
        $pdf->Cell(10, 6,'N', 1, 0, 'C');
        $pdf->Cell(35, 6, 'Nombre', 1, 0, 'C');
        $pdf->Cell(20, 6, 'Credito', 1, 0, 'C');
        $pdf->Cell(45, 6, 'Detalles', 1, 0, 'C');

        $datos_array_2 = explode(",", $Datex_2);

        foreach($datos_array_2 as $datos_2) {

            if ($fill_2) {
                $pdf->SetFillColor(205, 205, 205); // Color gris claro para filas impares
            } else {
                $pdf->SetFillColor(255, 255, 255); // Color blanco para filas pares
            }

            $datos_sub = explode("/", $datos_2);

            $filas = array_chunk($datos_sub, 2);

            $pdf->SetXY($x + 95, $posY + $cantidad_filas_2 + 45);
            $pdf->SetFont('Times', '', 9.5);
            $pdf->Cell(10, 6, $numero , 1, 0, 'C', $fill_2);
            $pdf->Cell(35, 6, "INGRESOS ".$numero , 1, 0, 'C', $fill_2);
            $pdf->Cell(20, 6, "S/.".$filas[0][0], 1, 0, 'C', $fill_2);
            $pdf->Cell(45, 6, $filas[0][1] , 1, 0, 'C', $fill_2);

            $cantidad_filas_2 += 6;
            $numero += 1;
            $sumatoria_2 += $filas[0][0];

            $fill_2 = !$fill_2; // Alternar el color de fondo para la siguiente fila

        }

        $pdf->SetFont('Arial', 'B', 12); 

        $pdf->SetXY($x + 95, $posY + 38);

        $pdf->Cell(110, 6,'Ingresos de Cuentas : S/.'.$sumatoria_2, 1, 0, 'C');

        ///////////////////////////////////////////////////////////////////////////////////////////

        $pdf->SetXY($x + 95, $posY + 58 + $cantidad_filas_2);
        $pdf->Cell(10, 6,'N', 1, 0, 'C');
        $pdf->Cell(35, 6, 'Nombre', 1, 0, 'C');
        $pdf->Cell(20, 6, 'Credito', 1, 0, 'C');
        $pdf->Cell(45, 6, 'Detalles', 1, 0, 'C');


        $cantidad_filas_3 = 6;
        $fill_3 = false;
        $numero = 1;
        $sumatoria_3 = 0;

        $datos_array_3 = explode(",", $Datex_3);

        foreach($datos_array_3 as $datos_3) {

            if ($fill_3) {
                $pdf->SetFillColor(205, 205, 205); // Color gris claro para filas impares
            } else {
                $pdf->SetFillColor(255, 255, 255); // Color blanco para filas pares
            }

            $datos_sub = explode("/", $datos_3);

            $filas = array_chunk($datos_sub, 2);

            $pdf->SetXY($x + 95, $posY + $cantidad_filas_2 + 58 + $cantidad_filas_3);
            $pdf->SetFont('Times', '', 9.5);
            $pdf->Cell(10, 6, $numero , 1, 0, 'C', $fill_3);
            $pdf->Cell(35, 6, "SALIDAS ".$numero , 1, 0, 'C', $fill_3);
            $pdf->Cell(20, 6, "S/.".$filas[0][0], 1, 0, 'C', $fill_3);
            $pdf->Cell(45, 6, $filas[0][1] , 1, 0, 'C', $fill_3);

            $cantidad_filas_3 += 6;
            $numero += 1;
            $sumatoria_3 += $filas[0][0];

            $fill_3 = !$fill_3; // Alternar el color de fondo para la siguiente fila

        }

        $pdf->SetFont('Arial', 'B', 12);

        $pdf->SetXY($x + 95, $posY + 50 + $cantidad_filas_2);

        $pdf->Cell(110, 6,'Salidas de Cuentas : S/.'.$sumatoria_3, 1, 0, 'C');

        ///////////////////////////////////////////////////////////////////////////////////////////

        $pdf->SetXY($x + 95, $posY + 70 + $cantidad_filas_2 + $cantidad_filas_3);
        $pdf->Cell(10, 6,'N', 1, 0, 'C');
        $pdf->Cell(35, 6, 'Nombre', 1, 0, 'C');
        $pdf->Cell(20, 6, 'Credito', 1, 0, 'C');
        $pdf->Cell(45, 6, 'Detalles', 1, 0, 'C');


        $cantidad_filas_4 = 6;
        $fill_4 = false;
        $numero = 1;
        $sumatoria_4 = 0;

        $datos_array_4 = explode(",", $Datex_4);

        foreach($datos_array_4 as $datos_4) {

            if ($fill_4) {
                $pdf->SetFillColor(205, 205, 205); // Color gris claro para filas impares
            } else {
                $pdf->SetFillColor(255, 255, 255); // Color blanco para filas pares
            }

            $datos_sub = explode("/", $datos_4);

            $filas = array_chunk($datos_sub, 2);

            $pdf->SetXY($x + 95, $posY + $cantidad_filas_2 + $cantidad_filas_3 + 70 + $cantidad_filas_4);
            $pdf->SetFont('Times', '', 9.5);
            $pdf->Cell(10, 6, $numero , 1, 0, 'C', $fill_4);
            $pdf->Cell(35, 6, "SALIDAS ".$numero , 1, 0, 'C', $fill_4);
            $pdf->Cell(20, 6, "S/.".$filas[0][0], 1, 0, 'C', $fill_4);
            $pdf->Cell(45, 6, $filas[0][1] , 1, 0, 'C', $fill_4);

            $cantidad_filas_4 += 6;
            $numero += 1;
            $sumatoria_4 += $filas[0][0];

            $fill_4 = !$fill_4; // Alternar el color de fondo para la siguiente fila

        }

        $pdf->SetFont('Arial', 'B', 12);

        $pdf->SetXY($x + 95, $posY + 62 + $cantidad_filas_2 + $cantidad_filas_3);

        $pdf->Cell(110, 6,'Ganancias del dia : S/.'.$sumatoria_4, 1, 0, 'C');
        
    }

}

if (isset($_GET["Datex_1"]) && isset($_GET["Datex_2"])&& isset($_GET["Datex_3"])&& isset($_GET["Datex_4"])&& isset($_GET["Datex_5"])&& isset($_GET["FechaBusqueda"])) {

    $ventas = new ajaxImprimirCuadre();
    $ventas->AjaxGenerarCuadre($_GET["Datex_1"], $_GET["Datex_2"], $_GET["Datex_3"], $_GET["Datex_4"], $_GET["Datex_5"], $_GET["FechaBusqueda"]);
}
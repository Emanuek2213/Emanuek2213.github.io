<?php

require_once "../controladores/registros.controlador.php";
require_once "../modelos/registros.modelo.php";
require_once "../vendor/autoload.php";
require_once "../libs/phpqrcode/qrlib.php";
require_once "../controladores/ventas_cliente.controlador.php";
require_once "../modelos/ventas_cliente.modelo.php";
require_once "../controladores/ventas.controlador.php";
require_once "../modelos/ventas.modelo.php";

class AjaxSolicitudFactura{

    public function AjaxGenerarFacturaVenta($nro_boleta, $arrIndicador, $arrPrecios, $arrCliente,$linkQR,$factura)
    {
        $fecha = VentasControlador::ctrObtenerDetalleFecha($nro_boleta);

        $fecha_string = "";

        foreach ($fecha as $fec) {
            $fecha_venta = new DateTime($fec["fecha_venta"]);
            $fecha_string = $fecha_venta->format('d/M/Y - h:i:s A');
        }

        $nuevoArray = explode(',', $arrIndicador);
        $nuevoArray2 = explode(',', $arrPrecios);

        $cantidad = count($nuevoArray) - 1;

        $DatosCliente = explode('/', $arrCliente);

        if ($DatosCliente[0] === "VARIOS" ) {
            $aumento = 0;
        } else {
            $aumento = 40;
        }

        // echo '<script>console.log("hola "+  "' . $DatosCliente[0] . '"+" hola2"+ " - hola "+  "' . $DatosCliente[1] . '"+" hola2" + " - hola "+  "' . $DatosCliente[2] . '"+" hola2");</script>';
        $DatosCliente[0] = trim($DatosCliente[0]);

        $altura = $cantidad * 30 + 190 + $aumento;

        require('../vistas/assets/plugins/fpdf/fpdf.php');

        $pdf = new FPDF($orientation = 'P', $unit = 'mm', array(80, $altura));        
        $pdf->AddPage();        
        $pdf->setMargins(10,5,10);
        setlocale(LC_TIME, 'es_PE.UTF-8');
        date_default_timezone_set('America/Lima');
        // Obtener la fecha y hora formateada con las abreviaturas de los meses en español
        $fechaHora = strftime('%d/%b/%Y - %I:%M:%S %p');

        

        $pdf->SetY(2);
        //nombre del negocio
        $pdf->SetFont('Times', 'B', 12);
        $pdf->Cell(60, 4, "FECHA: ".utf8_decode($fecha_string),0,0,'C'); 
        $pdf->Ln();
        $pdf->SetFont('times', 'B',7);
        $pdf->Cell(60,4,"Fecha de impresion: ". utf8_decode($fechaHora),0,0,'C');

        $pdf->SetY(10);
        $pdf->Rect(5, $pdf->GetY(), 70, 25);
        $pdf->SetFont('Times', 'B', 12);
        $pdf->Cell(60, 5, 'INVERSIONES JUSYBA SAC',0,0,'C');

        $pdf->Ln();
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(60, 5, "JR AYACUCHO 1054, LIMA /LIMA /LIMA",0,0,'C');  
        
        

        $pdf->Rect(5, $pdf->GetY() + 10, 70, 0);
        $pdf->Rect(5, $pdf->GetY() + 4, 70, 0);
        $pdf->Ln();
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(60, 5, "RUC : 20517794792",0,0,'C');  
        
        $pdf->Ln();
        $pdf->Cell(60, 5, "Telefono : 014280771 - 980808623",0,0,'C'); 

        $pdf->Ln();
        $pdf->Cell(60, 5, "PLIN: 914959996 - YAPE: 980837165",0,0,'C'); 
        
        
        $y = $pdf->GetY();


        $pdf->setMargins(10,10,10);

        if ($DatosCliente[0] === "VARIOS" ) {
            $pdf->Ln();
        } else {
            $cant = 0;
            $pdf->Ln();
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->Cell(60, 4, utf8_decode("=========================================="),0,0,'C');
            $pdf->Ln();
            $pdf->SetFont('Times', 'B', 8);
            $pdf->SetX(5);
            $pdf->Cell(0, 4, "Razon Social : ",0,0,'L');
            $pdf->Ln();
            
            $pdf->SetX(5);
            $pdf->SetFont('Times', '', 6.5);
            $pdf->Cell(0, 4, " - ", 0, 0, 'L');

            // $text = "EMANEL FARROÑAY TUPAC YUPANQUI, AVENINA TUPAC AMARU 2963";
            $text = $DatosCliente[0];
        
            // Dividir el texto en segmentos de longitud $maxLength
            $segments = str_split($text, 45);

            // Imprimir cada segmento en una nueva celda
            foreach ($segments as $index => $segment) {
                $pdf->SetX(7);
                $pdf->SetFont('Times', '',8);
                $pdf->Cell(0, 4, utf8_decode($segment), 0, 1, 'L');
                $cant = $cant + 4;
            }
            $pdf->SetFont('Times', 'B',8);
            $pdf->SetX(5);
            $pdf->Cell(0, 4, "RUC :   ",0,0,'L');
            $pdf->SetX(13);
            $pdf->SetFont('Times', '',8);
            $pdf->Cell(0, 4, utf8_decode("   " .$DatosCliente[1]),0,0,'L');

            // $text = "EMANEL FARROÑAY TUPAC YUPANQUI, AVENINA TUPAC AMARU 2963";
            $pdf->Ln();
            $pdf->SetFont('Times', 'B', 8);
            $pdf->SetX(5);
            $pdf->Cell(0, 4, "DIRECCION : ",0,0,'L');
            $pdf->Ln();
            $pdf->SetX(5);
            $pdf->SetFont('Times', '', 8);
            $pdf->Cell(0, 4, " - ", 0, 0, 'L');

            $pdf->Rect(8,$y + 13+$cant, 64, 0);
            $pdf->Rect(8,$y + 17+$cant, 64, 0);

            $text_direccion = $DatosCliente[2];

            // Dividir el texto en segmentos de longitud $maxLength
            $segments = str_split($text_direccion, 45);

            // Imprimir cada segmento en una nueva celda
            foreach ($segments as $index => $segment) {
                $pdf->SetX(7);
                $pdf->SetFont('Times', '', 8);
                $pdf->Cell(0, 4, utf8_decode($segment), 0, 1, 'L');
                $cant = $cant + 4;
            }

            
            // $pdf->SetX(5);
            // $pdf->SetFont('Times', '', 6.5);
            // $pdf->Cell(0, 4, utf8_decode(" - " .$DatosCliente[2]),0,0,'L');

            $pdf->Rect(5,$y + 8, 70, 13+$cant);    
        }

        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(60, 4, utf8_decode("=========================================="),0,0,'C');
        $pdf->Ln();

        $pdf->Rect( 15, $pdf->GetY(), 50, 12);

        $pdf->SetFont('Times', 'B', 10);
        $pdf->Cell(60, 6, utf8_decode("FACTURA ELECTRONICA"),0,0,'C');

        $pdf->Ln();

        $pdf->SetFont('Times', 'B', 12);
        $pdf->Cell(60, 6, utf8_decode("F001 - " .$factura),0,0,'C');

        $pdf->setMargins(5,10,5);

        $pdf->Ln();
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(70, 4, utf8_decode("=========================================="),0,0,'C');
        $pdf->Ln();


        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(5, 5, "#",0,0,'L');
        $pdf->Cell(20, 4, "Codigo.p" ,0,0,'L'); 
        $pdf->Cell(50, 4, "Descripcion producto",0,0,'L');

        $pdf->Ln();

        $pdf->SetX(10);
        $pdf->Cell(15, 4, "Cantidad" ,0,0,'L'); 
        $pdf->Cell(5, 4, "x",0,0,'L');
        $pdf->Cell(30, 4, "Precio", 0, 0, 'L');
        $pdf->Cell(8, 4,  "S/. Total", 0, 0, "L");       

        
        $pdf->Ln();
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(70, 4, utf8_decode("=========================================="),0,0,'C');
        $pdf->Ln();

        
        $total = 0;
        
        $productos = VentasControlador::ctrObtenerDetalleVenta($nro_boleta);

        

        foreach ($productos as $pro) {

            // $pdf->SetFont('Arial', 'B', 6.5);
            // $pdf->Cell(2, 4, "#",0,0,'L');

            // $pdf->Cell(16, 4, $pro["codigo_producto"],0,0,'L');

            $pdf->SetFont('Arial', '', 8.5);
            
            $pdf->Cell(70, 4,  "- ".utf8_decode(strtoupper(substr($pro["descripcion_producto"], 0, 40))),0,0,'L');

            $pdf->Ln();

            $pdf->SetFont('Arial', '', 8);

            $pdf->SetX(10);

            $pdf->Cell(22, 4, $pro["cantidad"]. " ". $pro["medida"], 0, 0, 'L');
  
            $pdf->Cell(3, 4, "X", 0, 0, 'L');

            $pdf->Cell(25, 4, "S./ " . number_format($pro["precio_unitario_venta"], 2, ".", ","), 0, 0, 'L');

            $pdf->SetFont('Arial', 'B', 8);

            $pdf->Cell(30, 4,  "S./ " . number_format($pro["cantidad"] * $pro["precio_unitario_venta"], 2, ".", ","), 0, 0, "L");            

            $pdf->Ln();

            $pdf->SetFont('Arial', '', 8);

            $pdf->Cell(70, 1, utf8_decode("--------------------------------------------------------------------------"),0,0,'C');

            $pdf->Ln();

            $total += $pro["cantidad"] * $pro["precio_unitario_venta"];
            $cantidad += 1;
                        
        }


        $unidades = array('', 'UN', 'DOS', 'TRES', 'CUATRO', 'CINCO', 'SEIS', 'SIETE', 'OCHO', 'NUEVE');
        $decenas = array('', 'DIEZ', 'VEINTE', 'TREINTA', 'CUARENTA', 'CINCUENTA', 'SESENTA', 'SETENTA', 'OCHENTA', 'NOVENTA');
        $unid_dec = array('ONCE', 'DOCE', 'TRECE', 'CATORCE', 'QUINCE', 'DIECISEIS', 'DIECISIETE', 'DISECIOCHO', 'DIECINUEVE');
        $centenas = array('', 'CIENTO', 'DOSCIENTOS', 'TRESCIENTOS', 'CUATROCIENTOS', 'QUINIENTOS', 'SEISCIENTOS', 'SETECIENTOS', 'OCHOCIENTOS', 'NOVECIENTOS');
        $miles = array('', 'MIL', 'DOS MIL', 'TRES MIL', 'CUATRO MIL', 'CINCO MIL', 'SEIS MIL', 'SIETE MIL', 'OCHO MIL', 'NUEVE MIL', 'DIEZ MIL');
        $centavos = array('CERO', 'DIEZ', 'VEINITE', 'TREINTA', 'CUARENTA', 'CINCUENTA', 'SESENTA', 'SETENTA', 'OCHENTA', 'NOVENTA');

        
        $texto = '';
    
        // Verificar si el número tiene decimales
        $partes = explode('.', round($total, 1));
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
        }elseif ($entero == 100) {
            $texto .= " CIEN ";
        }elseif ($entero > 100 && $entero <= 999) {
            $centena = (int)($entero / 100);
            $resto = $entero % 100;
            $texto .= $centenas[$centena];
            if ($resto > 0) {
                if ($resto >= 0 && $resto <= 9) {
                    $texto .= ' ' .$unidades[$resto];
                } elseif ($resto >= 11 && $resto <= 19) {
                    $texto .= ' ' .$unid_dec[$resto - 11];
                } elseif ($resto >= 20 && $resto <= 29) {
                    $texto .= ' ' .$decenas[2] . ' ' . $unidades[$resto - 20];
                } elseif ($resto >= 30 && $resto <= 99) {
                    $decena = (int)($resto / 10);
                    $unidad = $resto % 10;
                    $texto .= $decenas[$decena];
                    if ($unidad > 0) {
                        $texto .= ' Y ' . $unidades[$unidad];
                    }
                }
            }
        } elseif ($entero >= 1000 && $entero <= 9999) {
            $mil = (int)($entero / 1000);
            $resto_1 = $entero % 1000;
            $texto .= $miles[$mil];
            if ($resto_1 > 0) {
                $centena = (int)($resto_1 / 100);
                $resto_2 = $resto_1 % 100;
                $texto .= ' ' .$centenas[$centena];

                if ($resto_2){

                    if ($resto_2 >= 0 && $resto_2 <= 9) {
                        $texto .= ' ' .$unidades[$resto_2];
                    } elseif ($resto_2 >= 11 && $resto_2 <= 19) {
                        $texto .= ' ' .$unid_dec[$resto_2 - 11];
                    } elseif ($resto_2 >= 20 && $resto_2 <= 29) {
                        $texto .= ' ' .$decenas[2] . ' ' . $unidades[$resto_2 - 20];
                    } elseif ($resto_2 >= 30 && $resto_2 <= 99) {
                        $decena = (int)($resto_2 / 10);
                        $unidad = $resto_2 % 10;
                        $texto .= ' ' .$decenas[$decena];
                        if ($unidad > 0) {
                            $texto .= ' Y ' . $unidades[$unidad];
                        }
                    }

                }
                
            }
        } elseif ($entero >= 10000 && $entero <= 99999) {
            $miles = (int)($entero / 1000);

            if ($miles >= 0 && $miles <= 9) {
                $texto .= ' ' .$unidades[$miles];
            } elseif ($miles >= 11 && $miles <= 19) {
                $texto .= ' ' .$unid_dec[$miles - 11];
            } elseif ($miles >= 20 && $miles <= 29) {
                $texto .= $decenas[2] . ' ' . $unidades[$miles - 20];
            } elseif ($miles >= 30 && $miles <= 99) {
                $decena = (int)($miles / 10);
                $unidad = $miles % 10;
                $texto .= $decenas[$decena];
                if ($unidad > 0) {
                    $texto .= ' Y ' . $unidades[$unidad];
                }
            }
            $texto .=' MIL';
            $resto = $entero % 1000;
            if ($resto > 0) {
                $texto .=' CON ';
                $centena = (int)($resto / 100);
                $texto .= $centenas[$centena];
                $resto_2 = $resto % 100;

                if ($resto_2 >= 0 && $resto_2 <= 9) {
                    $texto .= ' ' .$unidades[$resto_2];
                } elseif ($resto_2 >= 11 && $resto_2 <= 19) {
                    $texto .= ' ' .$unid_dec[$resto_2 - 11];
                } elseif ($resto_2 >= 20 && $resto_2 <= 29) {
                    $texto .= ' ' .$decenas[2] . ' ' . $unidades[$resto_2 - 20];
                } elseif ($resto_2 >= 30 && $resto_2 <= 99) {
                    $decena = (int)($resto_2 / 10);
                    $unidad = $resto_2 % 10;
                    $texto .= ' ' .$decenas[$decena];
                    if ($unidad > 0) {
                        $texto .= ' Y ' . $unidades[$unidad];
                    }
                }
            }
        }
    
        // Convertir la parte decimal a texto
        $texto .= ' SOLES';
        if ($decimal > 0) {
            $texto .= ' CON ' .  $centavos[$decimal]  . ' CENTIMOS';
        }

        $pdf->SetFont('Arial', 'B', 8);

        $pdf->Cell(70, 2, utf8_decode("=========================================="),0,0,'C');

        $pdf->Ln();
        $pdf->SetFont('Arial', '', 7);
        $pdf->Cell(20, 4, "OP. GRAVADA:" );
        $pdf->SetFont('Arial', '', 7);
        $pdf->Cell(50, 4, "S./ ". ROUND($total*100/118,2),0, 0, 'R');
        $pdf->SetFont('Arial', '', 7);
        $pdf->Ln();

        $pdf->Cell(20, 4, "OP. INAFECTA:" );
        $pdf->SetFont('Arial', '', 7);
        $pdf->Cell(50, 4, "S./ ". ROUND(0.00,2),0, 0, 'R');
        $pdf->SetFont('Arial', '', 7);
        $pdf->Ln();

        $pdf->Cell(20, 4, "I.G.V.:" );
        $pdf->SetFont('Arial', '', 7);
        $pdf->Cell(50, 4, "S./ ". ROUND($total*18/118,2),0, 0, 'R');
        $pdf->SetFont('Arial', '', 8);
        $pdf->Ln();

        $pdf->SetFont('Arial', '', 9);
        $pdf->Cell(20, 4, "TOTAL A PAGAR: ");
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(50, 4, "S./ ". number_format($total,2,".",","),0, 0, 'R');
        $pdf->SetFont('Arial', '', 9);
        $pdf->Ln();

        $pdf->SetFont('Arial', '', 9);
        $pdf->Cell(70, 2, utf8_decode("-----------------------------------------------------------------"),0,0,'C');
        $pdf->Ln();

        $pdf->SetFont('Arial', '', 8.5);
        $pdf->Cell(20, 4, "TOTAL EN TEXTO: ");
        $pdf->Ln();

        $text_numero = $texto;
        $cant_n = 0;
        // Dividir el texto en segmentos de longitud $maxLength
        $segments = str_split($text_numero, 38);

        // Imprimir cada segmento en una nueva celda
        foreach ($segments as $index => $segment) {
            $pdf->SetX(5);
            $pdf->SetFont('Arial', 'B', 8.5);
            $pdf->Cell(0, 4, utf8_decode($segment), 0, 1, 'L');
            $cant_n = $cant_n + 4;
        }

        $pdf->SetFont('Arial', 'B', 8);

        $pdf->Cell(70, 4, utf8_decode("=========================================="),0,0,'C');

        $pdf->Ln();
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(70,4, utf8_decode("link: nuvefact.com"),0,0,'C');
        $pdf->Ln();

        $posY = $pdf->GetY();
        $posX = $pdf->GetX();

        $pdf->Rect(20, $pdf->GetY(), 42, 42);

         // Generar el enlace para el código QR
         $link = $linkQR; // Reemplaza este enlace con el que deseas convertir en QR

         // Generar el código QR y guardarlo en un archivo temporal
         $tempDir = sys_get_temp_dir();
         $qrFile = $tempDir . '/qr_code.png';
         QRcode::png($link, $qrFile);
 
         // Añadir el QR al PDF (definiendo coordenadas $x e $y)
         $x = 21; // Ajusta según sea necesario
         $y = 45; // Ajusta según sea necesario
         $pdf->Image($qrFile, $x, $posY+1, 40, 40);
 
         // Eliminar el archivo temporal
         unlink($qrFile);

         $posY = $pdf->GetY();
 
         

        $pdf->setMargins(50, 50, 50);

        $pdf->Output();
    }
}


if (isset($_GET["nro_boleta"]) && isset($_GET["arrIndicador"])&& isset($_GET["arrPrecios"]) && isset($_GET["arrCliente"]) && isset($_GET["linkQR"]) && isset($_GET["factura"])) {

    $ventas = new AjaxSolicitudFactura;
    $ventas->AjaxGenerarFacturaVenta($_GET["nro_boleta"], $_GET["arrIndicador"], $_GET["arrPrecios"], $_GET["arrCliente"], $_GET["linkQR"], $_GET["factura"]);
}
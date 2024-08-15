<?php
    require_once "../controladores/ventas_cliente.controlador.php";
    require_once "../modelos/ventas_cliente.modelo.php";
    require_once "../controladores/ventas.controlador.php";
    require_once "../modelos/ventas.modelo.php";
    require_once "../vendor/autoload.php";
    require_once "../libs/phpqrcode/qrlib.php";
    

class ajaxVentaClientes{

    /*===================================================================
    Analiza si el producto esta dentro del historial del cliente
    ====================================================================*/
    public function ajaxAnalizarProducto($id_cliente, $codigo){

        $Analisis = VentaClientesControlador::ctrListarNombreClientes($id_cliente,$codigo);

        echo json_encode($Analisis);
    }

    /*===================================================================
    Añade nuevo producto al historial del cliente
    ====================================================================*/
    public function ajaxAñadirProducto($id_cliente, $codigo){

        $AñadirProducto = VentaClientesControlador::ctrAñadirProducto($id_cliente, $codigo);

        echo json_encode($AñadirProducto);
    }

    public function ajaxListarProducto($id_cliente){

        $Lista = VentaClientesControlador::ctrListarProducto($id_cliente);

        echo json_encode($Lista);
    }

    public function AjaxGenerarNotaVenta($nro_boleta, $arrIndicador, $arrPrecios , $arrCliente)
    {   
        define('FPDF_FONTPATH', '../vistas/assets/plugins/fpdf/font/');

        //  require('../vistas/assets/plugins/fpdf/makefont/makefont.php');

        //  MakeFont('c:\\Windows\\Fonts\\GILSANUB.ttf','cp1252');

        require('../vistas/assets/plugins/fpdf/fpdf.php');

        $pdf = new FPDF($orientation = 'L', $unit = 'mm', 'A4');
        


        $pdf->AddFont('frank','','FRAHV.php');
        $pdf->AddFont('GILSANUB','','GILSANUB.php');
        //$pdf->AddFont('frank','','franklin-gothic-heavy-regular.php');
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

        $fecha = VentasControlador::ctrObtenerDetalleFecha($nro_boleta);
        date_default_timezone_set('America/Lima');
        $fecha_string = "";

        foreach ($fecha as $fec) {
            $fecha_venta = new DateTime($fec["fecha_venta"]);
            $fecha_string = $fecha_venta->format('d/M/Y - h:i:s A');
        }

        $pdf->SetXY($x, $y);
        
        // Título
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Rect($x+ 103, $pdf->GetY(), 38, 16);

        $pdf->Rect($x+ 50.5, $pdf->GetY() + 14, 48, 7.5);
        
        $posX = $pdf->GetX();
        $posY = $pdf->GetY();

        $pdf->SetFont('frank', '', 16);
        $pdf->Cell(0, 10, 'INVERSIONES JUSYBA SAC', 0, 1, 'L');

        // Restaurar la posición original después de escribir el texto "INVERSIONES JUSYBA SAC"
        $pdf->SetXY($x-1, $posY + 10); // Sumar 10 para dar un espacio entre el texto y el rectángulo

        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(0, 4, 'JR AYACUCHO 1054 - AL FRENTE DE LA GALERIA EL ZAPATON', 0, 1, 'L');
        $pdf->SetXY($x-1, $posY + 14);
        $pdf->Cell(0, 4, 'PEDIDOS AL 014280771 - 980808623 - YAPE 980837165 // PLIN 914959996 ', 0, 1, 'L');
        $pdf->SetXY($x-1, $posY + 18);
        $pdf->Cell(0, 4, 'FECHA DE EMISION: ' . date('d/m/Y'), 0, 1, 'L');
        $pdf->SetXY($x+55, $posY + 18);
        $pdf->Cell(0, 4, 'HITLER TICLIA VILLOSLADA', 0, 1, 'L');
        $pdf->SetXY($x+99, $posY + 18);
        $pdf->SetFont('times', 'B', 11);
        

        // Obtener la fecha y hora formateada con las abreviaturas de los meses en español
        $fechaHora = strftime('%d/%b/%Y %I:%M:%S %p');

        // Imprimir en el PDF
        $pdf->Cell(0, 4, utf8_decode($fecha_string), 0, 1, 'L');
        

        // Posicionar el texto "NOTA DE VENTA" dentro del rectángulo
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->SetXY(107, $posY); // Utilizar la posición original de Y del rectángulo
        $pdf->Text($x+ 105, $posY + 6, 'NOTA DE VENTA');
        $pdf->Text($x + 107, $posY + 13, '0004-'.$nro_boleta);

        $pdf->SetXY($x, $posY + 23);

        $DatosCliente = explode('/', $arrCliente);
        
        $pdf->SetFont('Arial', '', 8);
        $pdf->Rect($x+0, $pdf->GetY() - 1, 141, 15);

        $pdf->Text($x+3, $posY + 26, 'Nombre : ');
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Text($x+19, $posY + 26, utf8_decode(strtoupper($DatosCliente[0])));

        $pdf->SetFont('Arial', '', 8);
        $pdf->Text($x+3, $posY + 29.5, 'N.RUC : ');
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Text($x+19, $posY + 29.5, $DatosCliente[1]);

        $pdf->SetFont('Arial', '', 8);
        $pdf->Text($x+3, $posY + 33, 'Direccion : ');
        // $pdf->SetFont('Arial', 'B', 9);
        // $pdf->Text($x+17, $posY + 35, utf8_decode(strtoupper($DatosCliente[2])));

        // Definir la posición inicial y máxima longitud para el texto
        $maxWidth = 120;

        // Configurar la fuente para la primera línea

        // Obtener el texto y dividirlo en palabras
        $texto = utf8_decode(strtoupper($DatosCliente[2]));
        $palabras = explode(' ', $texto);

        // Inicializar variables para las líneas
        $linea1 = '';
        $linea2 = '';

        // Iterar sobre las palabras
        foreach ($palabras as $palabra) {
            // Concatenar palabras a la primera línea si no excede la longitud máxima
            if ($pdf->GetStringWidth($linea1 . ' ' . $palabra) <= $maxWidth) {
                $linea1 .= ($linea1 === '') ? $palabra : ' ' . $palabra;
                $TAMA = 9;
            } else {
                // Si excede la longitud máxima, agregar la palabra a la segunda línea
                $linea2 .= ($linea2 === '') ? $palabra : ' ' . $palabra;
                $TAMA = 7;
            }
        }

        // Imprimir las líneas en el PDF
        $pdf->SetFont('Arial', 'B', $TAMA);
        $pdf->Text($x+19, $posY + 33, utf8_decode($linea1));
        $pdf->SetFont('Arial', 'B', $TAMA); // Cambiar la fuente para la segunda línea si es necesario
        $pdf->Text($x+19, $posY + 36, utf8_decode($linea2));

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

        $productos = VentasControlador::ctrObtenerDetalleVenta($nro_boleta);

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
            $pdf->SetFont('Times', 'B', 8);
            $pdf->Cell(4, 5, $numero, 1, 0, 'C', $fill);
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

        // // Generar el enlace para el código QR
        // $link = 'https://www.nubefact.com/see_invoice/10951bdd-9e27-4edd-b72d-c5082919ddc0.pdf'; // Reemplaza este enlace con el que deseas convertir en QR

        // // Generar el código QR y guardarlo en un archivo temporal
        // $tempDir = sys_get_temp_dir();
        // $qrFile = $tempDir . '/qr_code.png';
        // QRcode::png($link, $qrFile);

        // // Añadir el QR al PDF
        // $pdf->Image($qrFile, $x, $y + 100, 30, 30);

        // // Eliminar el archivo temporal
        // unlink($qrFile);

        // Ajustar la posición para seguir con el contenido adicional
        $pdf->SetXY($x, $y + 38);
        
        $pdf->SetXY($x, 191);      
        $pdf->SetFillColor(220);
        $pdf->Rect($x , $pdf->GetY(), 141, 15, 'F');
        $pdf->Rect($x , $pdf->GetY(), 141, 15);
        

        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Text($x + 3,  195, 'SON : '. $texto);
        $pdf->Text($x + 106,  199, 'TOTAL : S./ '. number_format($suma_total,2));

        $pdf->SetFont('Arial', 'I', 8);
        $pdf->Text($x + 3,  203, 'UNA VEZ SALIDA LA MERCADERIA NO HAY LUGAR A RECLAMO...');
        $pdf->SetFont('times', 'B',7);
        $pdf->Text($x + 98, 3, "Fecha impresion: ".utf8_decode($fechaHora), 0, 1, 'C');
        
        
        
    }

    public function AjaxGenerarNotaVentaCompra($nro_boleta, $arrIndicador, $arrPrecios , $arrProveedor)
    {   
        define('FPDF_FONTPATH', '../vistas/assets/plugins/fpdf/font/');

        //  require('../vistas/assets/plugins/fpdf/makefont/makefont.php');

        //  MakeFont('c:\\Windows\\Fonts\\GILSANUB.ttf','cp1252');

        require('../vistas/assets/plugins/fpdf/fpdf.php');

        $pdf = new FPDF($orientation = 'L', $unit = 'mm', 'A4');
        


        $pdf->AddFont('frank','','FRAHV.php');
        $pdf->AddFont('GILSANUB','','GILSANUB.php');
        //$pdf->AddFont('frank','','franklin-gothic-heavy-regular.php');
        $pdf->AddPage();
        $pdf->SetMargins(5, 5, 5);
        
        // Generar la primera nota de venta
        $this->generarNotaVentaCompra($pdf, $nro_boleta, $arrIndicador, $arrPrecios,$arrProveedor, 4, 4);

        // Generar la segunda nota de venta en la nueva página
        $this->generarNotaVentaCompra($pdf, $nro_boleta, $arrIndicador, $arrPrecios, $arrProveedor, 152, 4);

        $pdf->Output();

        
    }

    private function generarNotaVentaCompra($pdf, $nro_boleta, $arrIndicador, $arrPrecios,$arrProveedor, $x, $y)
    {   
        $pdf->SetXY($x, $y);
        
        // Título
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Rect($x+ 103, $pdf->GetY(), 38, 16);
        
        $posX = $pdf->GetX();
        $posY = $pdf->GetY();

        $pdf->SetFont('frank', '', 16);
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

        // Obtener la fecha y hora formateada con las abreviaturas de los meses en español
        $fechaHora = strftime('%d/%b/%Y %I:%M:%S %p');

        // Imprimir en el PDF
        $pdf->Cell(0, 4, utf8_decode($fechaHora), 0, 1, 'L');

        // Posicionar el texto "NOTA DE VENTA" dentro del rectángulo
        $pdf->SetFont('Arial', 'B', 11);
        $pdf->SetXY(107, $posY); // Utilizar la posición original de Y del rectángulo
        $pdf->Text($x+ 104, $posY + 6, 'NOTA DE COMPRA');
        $pdf->Text($x + 109, $posY + 13, '0001-'.$nro_boleta);

        $pdf->SetXY($x, $posY + 23);

        $DatosCliente = explode('/', $arrProveedor);
        
        $pdf->SetFont('Arial', '', 8);
        $pdf->Rect($x+0, $pdf->GetY() - 1, 141, 15);

        $pdf->Text($x+3, $posY + 26, 'Nombre : ');
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Text($x+19, $posY + 26, utf8_decode(strtoupper($DatosCliente[0])));

        $pdf->SetFont('Arial', '', 8);
        $pdf->Text($x+3, $posY + 29.5, 'N°RUC : ');
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Text($x+19, $posY + 29.5, $DatosCliente[1]);

        $pdf->SetFont('Arial', '', 8);
        $pdf->Text($x+3, $posY + 33, 'Direccion : ');
        // $pdf->SetFont('Arial', 'B', 9);
        // $pdf->Text($x+17, $posY + 35, utf8_decode(strtoupper($DatosCliente[2])));

        // Definir la posición inicial y máxima longitud para el texto
        $maxWidth = 120;

        // Configurar la fuente para la primera línea

        // Obtener el texto y dividirlo en palabras
        $texto = utf8_decode(strtoupper($DatosCliente[2]));
        $palabras = explode(' ', $texto);

        // Inicializar variables para las líneas
        $linea1 = '';
        $linea2 = '';

        // Iterar sobre las palabras
        foreach ($palabras as $palabra) {
            // Concatenar palabras a la primera línea si no excede la longitud máxima
            if ($pdf->GetStringWidth($linea1 . ' ' . $palabra) <= $maxWidth) {
                $linea1 .= ($linea1 === '') ? $palabra : ' ' . $palabra;
                $TAMA = 9;
            } else {
                // Si excede la longitud máxima, agregar la palabra a la segunda línea
                $linea2 .= ($linea2 === '') ? $palabra : ' ' . $palabra;
                $TAMA = 7;
            }
        }

        // Imprimir las líneas en el PDF
        $pdf->SetFont('Arial', 'B', $TAMA);
        $pdf->Text($x+19, $posY + 33, utf8_decode($linea1));
        $pdf->SetFont('Arial', 'B', $TAMA); // Cambiar la fuente para la segunda línea si es necesario
        $pdf->Text($x+19, $posY + 36, utf8_decode($linea2));

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

        $productos = VentasControlador::ctrObtenerDetalleVenta($nro_boleta);

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
            $pdf->SetFont('Times', 'B', 8);
            $pdf->Cell(4, 5, $numero, 1, 0, 'C', $fill);
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

if(isset($_POST["accion"]) && $_POST["accion"] == 1){  // TRAER LISTADO DE PRODUCTOS PARA EL AUTOCOMPLETE

    $Analisis = new ajaxVentaClientes();
    $Analisis -> ajaxAnalizarProducto($_POST["id_cliente"], $_POST["codigo"]);

} else if(isset($_POST["accion"]) && $_POST["accion"] == 2){  // TRAER LISTADO DE PRODUCTOS PARA EL AUTOCOMPLETE

    $AñadirProducto = new ajaxVentaClientes();
    $AñadirProducto -> ajaxAñadirProducto($_POST["id_cliente"], $_POST["codigo"]);

}else if(isset($_POST["accion"]) && $_POST["accion"] == 3){  // TRAER LISTADO DE PRODUCTOS PARA EL AUTOCOMPLETE

    $AñadirProducto = new ajaxVentaClientes();
    $AñadirProducto -> ajaxListarProducto($_POST["dni"]);

}
if (isset($_GET["nro_boleta"]) && isset($_GET["arrIndicador"])&& isset($_GET["arrPrecios"])&& isset($_GET["arrCliente"])) {

    $ventas = new ajaxVentaClientes();
    $ventas->AjaxGenerarNotaVenta($_GET["nro_boleta"], $_GET["arrIndicador"], $_GET["arrPrecios"], $_GET["arrCliente"]);
}
if (isset($_GET["nro_boleta"]) && isset($_GET["arrIndicador"])&& isset($_GET["arrPrecios"])&& isset($_GET["arrProveedor"])) {

    $ventas = new ajaxVentaClientes();
    $ventas->AjaxGenerarNotaVentaCompra($_GET["nro_boleta"], $_GET["arrIndicador"], $_GET["arrPrecios"], $_GET["arrProveedor"]);
}
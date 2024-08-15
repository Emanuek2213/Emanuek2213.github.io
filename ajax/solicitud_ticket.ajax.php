
<?php

require_once "../controladores/registros.controlador.php";
require_once "../modelos/registros.modelo.php";

class AjaxSolicitudTicket{

    public function AjaxGenerarTicketVenta($nro_boleta, $arrIndicador, $arrPrecios)
    {   

        $nuevoArray = explode(',', $arrIndicador);
        $nuevoArray2 = explode(',', $arrPrecios);

        $cantidad = count($nuevoArray) - 1;

        $altura = $cantidad * 10 + 120;

        require('../vistas/assets/plugins/fpdf/fpdf.php');

        $pdf = new FPDF($orientation = 'P', $unit = 'mm', array(80, $altura));        
        $pdf->AddPage();        
        $pdf->setMargins(10,10,10);

        //nombre del negocio
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60, 6, 'INVERSIONES JUSYBA SAC',0,0,'C');

        $pdf->Ln();
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(60, 6, "UBICANOS : JR AYACUCHO 1054 LIMA LIMA LIMA",0,0,'C');  
        
        
        $pdf->Ln();
        $pdf->Cell(60, 6, "PEDIDOS AL  014280771 - 980808623",0,0,'C'); 

        $pdf->Ln();
        $pdf->Cell(60, 6, "PLIN: 914959996 - YAPE:980837165",0,0,'C'); 
        
        $pdf->Ln();

        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(60, 6, utf8_decode("TICKET DE VENTA"),0,0,'C');

        $pdf->Ln();

        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(60, 6, utf8_decode("T005 - " .$nro_boleta),0,0,'C');

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
        $pdf->Cell(8, 4,  "Total", 0, 0, "L");       

        
        $pdf->Ln();
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(70, 4, utf8_decode("=========================================="),0,0,'C');
        $pdf->Ln();

        
        $total = 0;
        
        $productos = RegistrosControlador::ctrObtenerDetalleVenta($nro_boleta);

        
        
        

        foreach ($productos as $pro) {

            $pdf->SetFont('Arial', '', 7);
            $pdf->Cell(5, 5, "#",0,0,'L');

            $pdf->Cell(20, 5, $pro["codigo_producto"],0,0,'L');
            
            $pdf->Cell(50, 5,  utf8_decode(strtoupper(substr($pro["descripcion_producto"], 0, 40))),0,0,'L');

            $pdf->Ln();

            $pdf->SetFont('Arial', '', 8);

            $pdf->SetX(10);

            $pdf->Cell(22, 5, $pro["cantidad"]. " ". $pro["medida"], 0, 0, 'L');
  
            $pdf->Cell(3, 5, "X", 0, 0, 'L');

            $pdf->Cell(25, 5, "S./ " . number_format($pro["precio_unitario_venta"], 2, ".", ","), 0, 0, 'L');

            $pdf->Cell(30, 5,  "S./ " . number_format($pro["cantidad"] * $pro["precio_unitario_venta"], 2, ".", ","), 0, 0, "L");            

            $pdf->Ln();

            $total += $pro["cantidad"] * $pro["precio_unitario_venta"];
            $cantidad += 1;
                        
        }

        $pdf->SetFont('Arial', 'B', 8);

        $pdf->Cell(70, 4, utf8_decode("=========================================="),0,0,'C');

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

        $pdf->Cell(20, 4, "TOTAL A PAGAR: ");
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(50, 4, "S./ ". number_format($total,2,".",","),0, 0, 'R');
        $pdf->SetFont('Arial', '', 8);
        $pdf->Ln();
        $pdf->setMargins(50, 50, 50);
        $pdf->Output();
    }

}


if (isset($_GET["nro_boleta"]) && isset($_GET["arrIndicador"])&& isset($_GET["arrPrecios"])) {

    $ventas = new AjaxSolicitudTicket;
    $ventas->AjaxGenerarTicketVenta($_GET["nro_boleta"], $_GET["arrIndicador"], $_GET["arrPrecios"]);
}
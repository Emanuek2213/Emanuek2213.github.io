<?php


class ajaxVentaFactura{

    
    
    public function AjaxGenerarfactura($nro_boleta, $arrIndicador, $arrPrecios , $arrCliente)
    {

        // Imprimir el número de boleta
        echo $nro_boleta. "<br>";
        
        $DatosIndicador = explode(',', $arrIndicador);

        $DatosPrecios = explode(',', $arrPrecios);

        $longitudIndicador = count($DatosIndicador);

        $longitudPrecios = count($DatosPrecios);

        // Imprimir elementos de $DatosIndicador
        echo "Elementos de DatosIndicador: <br>";
        for ($i = 0; $i < $longitudIndicador; $i++) {
            echo $DatosIndicador[$i] . "<br>";
        }

        // Imprimir elementos de $DatosPrecios
        echo "Elementos de DatosPrecios: <br>";
        for ($i = 0; $i < $longitudPrecios; $i++) {
            echo $DatosPrecios[$i] . "<br>";
        }

    }

}

if (isset($_GET["nro_boleta"]) && isset($_GET["arrIndicador"])&& isset($_GET["arrPrecios"])) {

$ventas = new ajaxVentaFactura();
$ventas->AjaxGenerarfactura($_GET["nro_boleta"], $_GET["arrIndicador"], $_GET["arrPrecios"], $_GET["arrCliente"]);
}
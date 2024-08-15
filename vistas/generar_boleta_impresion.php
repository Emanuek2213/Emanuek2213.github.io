<?php

if(isset($_GET["nro_boleta"]) && isset($_GET["arrIndicador"]) && isset($_GET["arrPrecios"])&& isset($_GET["arrCliente"])&& isset($_GET["linkQR"])&& isset($_GET["factura"])){
    $nro_boleta = $_GET["nro_boleta"];
    $arrIndicador = $_GET["arrIndicador"];
    $arrPrecios = $_GET["arrPrecios"];
    $arrCliente = $_GET["arrCliente"];
    $linkQR = $_GET["linkQR"];
    $factura = $_GET["factura"];
    echo '<script>';
    echo 'console.log(' . json_encode($arrCliente) . ');';
    echo '</script>';

}


?>

<main>
    <div class="container-fluid vh-100">
        <iframe src="<?php echo "http://192.168.1.41/market-pos/ajax/solicitud_boleta.php?nro_boleta=".$nro_boleta."&arrIndicador=".$arrIndicador."&arrPrecios=".$arrPrecios."&arrCliente=".urlencode($arrCliente)."&linkQR=".$linkQR."&factura=".$factura?>" frameborder="0" height="100%" width="100%">

        </iframe>
    </div>
</main>
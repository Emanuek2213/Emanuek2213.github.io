<?php

if(isset($_GET["nro_boleta"]) && isset($_GET["arrIndicador"]) && isset($_GET["arrPrecios"])){
    $nro_boleta = $_GET["nro_boleta"];
    $arrIndicador = $_GET["arrIndicador"];
    $arrPrecios = $_GET["arrPrecios"];
    echo '<script>';
    echo 'console.log(' . json_encode($arrIndicador) . ');';
    echo '</script>';
}

?>

<main>
    <div class="container-fluid vh-100">
        <iframe src="<?php echo "http://192.168.1.41/market-pos/ajax/solicitud.ajax.php?nro_boleta=".$nro_boleta."&arrIndicador=".$arrIndicador."&arrPrecios=".$arrPrecios?>" frameborder="0" height="100%" width="100%">

        </iframe>
    </div>
</main>
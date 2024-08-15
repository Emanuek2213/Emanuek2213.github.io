<?php

if(isset($_GET["nro_Boletas"]) && isset($_GET["ventas_desde"]) && isset($_GET["ventas_hasta"])){
    $nro_Boletas = $_GET["nro_Boletas"];
    $ventas_desde = $_GET["ventas_desde"];
    $ventas_hasta = $_GET["ventas_hasta"];
    echo '<script>';
    echo 'console.log(' . json_encode($nro_Boletas) . ');';
    echo '</script>';
}


?>

<main>
    <div class="container-fluid vh-100">
        <iframe src="<?php echo "http://192.168.1.41/market-pos/ajax/ventas_impresion.ajax.php?nro_Boletas=".$nro_Boletas."&ventas_desde=".$ventas_desde."&ventas_hasta=".$ventas_hasta?>" frameborder="0" height="100%" width="100%">
            
        </iframe>
    </div>
</main>
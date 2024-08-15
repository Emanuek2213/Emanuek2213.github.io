<?php

if(isset($_GET["Datex_1"]) && isset($_GET["Datex_2"]) && isset($_GET["Datex_3"])&& isset($_GET["Datex_4"])&& isset($_GET["Datex_5"])){
    $Datex_1 = $_GET["Datex_1"];
    $Datex_2 = $_GET["Datex_2"];
    $Datex_3 = $_GET["Datex_3"];
    $Datex_4 = $_GET["Datex_4"];
    $Datex_5 = $_GET["Datex_5"];
    $FechaBusqueda = $_GET["FechaBusqueda"];
    echo '<script>';
    echo 'console.log(' . json_encode($Datex_1) . ');';
    echo '</script>';
}

?>
<meta charset="UTF-8">
<main>
    <div class="container-fluid vh-100">
        <iframe src="<?php echo "http://192.168.1.41/market-pos/ajax/generar_cuadre.ajax.php?Datex_1=".$Datex_1."&Datex_2=".$Datex_2."&Datex_3=".$Datex_3."&Datex_4=". $Datex_4."&Datex_5=". $Datex_5."&FechaBusqueda=". $FechaBusqueda?>" frameborder="0" height="100%" width="100%">

        </iframe>
    </div>
</main>
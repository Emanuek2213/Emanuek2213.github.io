<?php
// proxy.php

// URL de la API de NubeFact
$url = 'https://api.nubefact.com/ultimo_numero_factura';

// Inicializar cURL
$ch = curl_init($url);

// Configurar opciones de cURL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization: Bearer "5ad6fc9119c84bf28c78adbabb757c45a60b59a703c54eb3802c3138fb8cdeaf"',
    'Content-Type: application/json'
));

// Ejecutar solicitud y obtener respuesta
$response = curl_exec($ch);

// Manejar errores de cURL
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}

// Cerrar cURL
curl_close($ch);

// Devolver respuesta
header('Content-Type: application/json');
echo $response;
?>
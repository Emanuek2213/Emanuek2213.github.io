<?php
// Obtener los datos enviados desde JavaScript
$input = file_get_contents('php://input');
$data = json_decode($input, true);

// Verificar si los datos fueron recibidos correctamente
if ($data) {
    // Configurar la URL de la API de Nubefact y los headers de autenticación
    $url = 'https://api.nubefact.com/api/v1/b7066011-0230-42ad-93d5-4232a42cb753';
    $headers = array(
        'Authorization: Token token="5ad6fc9119c84bf28c78adbabb757c45a60b59a703c54eb3802c3138fb8cdeaf"',
        'Content-Type: application/json'
    );

    // Inicializar cURL
    $ch = curl_init($url);

    // Configurar cURL
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    // Ejecutar la petición
    $response = curl_exec($ch);

    // Verificar si hubo algún error
    if (curl_errno($ch)) {
        $error_msg = curl_error($ch);
    }

    // Cerrar cURL
    curl_close($ch);

    // Decodificar la respuesta
    $responseData = json_decode($response, true);

    // Verificar la respuesta
    if (isset($responseData['errors'])) {
        echo json_encode(array("error" => $responseData['errors']));
    } else {
        echo json_encode(array("success" => "Factura registrada correctamente.", "data" => $responseData));
    }
} else {
    echo json_encode(array("error" => "No se recibieron datos."));
}
?>
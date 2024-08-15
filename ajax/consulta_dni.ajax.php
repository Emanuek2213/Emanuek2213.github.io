<?php
// Datos
$token = 'apis-token-9250.NEffo2zUep6Y-D6Wkz4iumZABL74j2HO';
$dni = $_POST["dni"];

// Iniciar llamada a API
$curl = curl_init();

// Buscar dni
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.apis.net.pe/v2/reniec/dni?numero=' . $dni,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 2,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Referer: https://apis.net.pe/consulta-dni-api',
    'Authorization: Bearer ' . $token
  ),
));

$response = curl_exec($curl);

curl_close($curl);

// Verifica si curl_exec devolvió un error
if ($response === false) {
    $error = curl_error($curl);
    echo json_encode(['success' => false, 'message' => 'Curl error: ' . $error]);
    exit;
}

// Decodificar la respuesta JSON
$persona = json_decode($response, true); // Decodifica como un array asociativo

// Verifica si el RUC existe en el registro
if (isset($persona['success']) && !$persona['success']) {
    // El RUC no existe en el registro
    echo json_encode(1);
} else {
    // El RUC existe, devuelve los datos de la persona
    header('Content-Type: application/json');
    echo json_encode($persona);
}
?>
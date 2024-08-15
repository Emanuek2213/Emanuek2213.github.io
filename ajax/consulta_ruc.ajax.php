<?php
// Datos
$token = 'apis-token-9250.NEffo2zUep6Y-D6Wkz4iumZABL74j2HO';
$ruc = '20517794792';

$ruc = $_POST["ruc"];

// Iniciar llamada a API
$curl = curl_init();

// Buscar ruc sunat
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.apis.net.pe/v2/sunat/ruc?numero=' . $ruc,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Referer: http://apis.net.pe/api-ruc',
    'Authorization: Bearer ' . $token
  ),
));

$response = curl_exec($curl);

// curl_close($curl);
// // Datos de empresas según padron reducido
// $empresa = json_decode($response);
// echo json_decode($empresa);

// $response = curl_exec($curl);

curl_close($curl);

// Verifica si curl_exec devolvió un error
if ($response === false) {
    $error = curl_error($curl);
    echo json_encode(['success' => false, 'message' => 'Curl error: ' . $error]);
    exit;
}

// Decodificar la respuesta JSON
$empresa = json_decode($response, true); // Decodifica como un array asociativo

// Verifica si el RUC existe en el registro
if (isset($empresa['success']) && !$empresa['success']) {
    // El RUC no existe en el registro
    echo json_encode(1);
} else {
    // El RUC existe, devuelve los datos de la empresa
    header('Content-Type: application/json');
    echo json_encode($empresa);
}

?>
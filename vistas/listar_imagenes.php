<?php
// Ruta de la carpeta de imágenes
$carpeta = $_GET['carpeta'];
$ruta = "C:\\xampp\\htdocs\\market-pos\\vistas\\assets\\imagenes\\$carpeta";

// Obtener la lista de archivos en la carpeta
$archivos = scandir($ruta);
$imagenes = array_filter($archivos, function($archivo) {
    return preg_match('/\.(jpg|jpeg|png|gif)$/i', $archivo);
});

// Devolver la lista de imágenes en formato JSON
header('Content-Type: application/json');
echo json_encode(['imagenes' => $imagenes]);
?>
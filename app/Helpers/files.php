<?php
function getJsonData($fileName) {
    $ruta = resource_path('data') . "/$fileName.json";

    if (!file_exists($ruta)) {
        return 'No existe el archivo';
    }

    $jsonData = json_decode(file_get_contents($ruta), true);

    return $jsonData;
}

<?php


// Recibir el cuerpo de la petición.
$input = @file_get_contents("php://input");
// Parsear el contenido como JSON.


file_put_contents(
    'registro.log',
    json_encode($input) . PHP_EOL,
    FILE_APPEND
);

// Usar los datos del Webhooks para alguna acción.

// Responder
http_response_code(200);


?>
<?php

/* Crea funciones para leer y escribir en un archivo JSON. Usa estas funciones para implementar un libro de visitas simple donde los usuarios puedan dejar mensajes */


$archivo = 'visitas.json';

function leerArchivo(string $archivo): array
{
    if (!file_exists($archivo) || filesize($archivo == 0)) {
        file_put_contents($archivo, '[]');
    }

    return json_decode(file_get_contents($archivo), true);
}


function escribirArchivo(string $archivo): void
{
    $contenido = leerArchivo($archivo);

    $autor = readline('Indique su nombre: ');
    $mensaje =  readline('Deje su mensaje: ');

    if (isset($autor) && isset($mensaje)) {
        $contenido[] = [
            'autor' => $autor,
            'mensaje' => $mensaje
        ];

        file_put_contents($archivo, json_encode($contenido));
    }
}


escribirArchivo($archivo);

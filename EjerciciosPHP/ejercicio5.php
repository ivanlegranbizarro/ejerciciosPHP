<?php

/* Crea funciones p ara leer y escrivir en un archivo JSON. Usa estas funciones para implementar un libro de visitas simple donde los usuarios puedan dejar mensajes */


$archivo = 'archivo.json';

function leerMensaje($archivo): array
{
    $mensajes = file_get_contents($archivo);
    $json = json_decode($mensajes);

    return $json;
}

function escribirMensaje(string $archivo): void
{
    if (!file_exists($archivo) || filesize($archivo) == 0) {
        file_put_contents($archivo, '[]');
    }

    $usuario = readline("Ingresa tu nombre: ");
    $mensaje = readline("Ingresa tu mensaje: ");

    $json = leerMensaje($archivo);
    $json[] = [
        'usuario' => $usuario,
        'mensaje' => $mensaje
    ];

    file_put_contents($archivo, json_encode($json));
}



escribirMensaje($archivo);

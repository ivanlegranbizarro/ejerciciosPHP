<?php
/* Implementa funciones para hashear una contraseña y verificar una contraseña contra un hash almacenado usando las funciones password_hash() y password_verify() de PHP. */


function hashearPassword(string $password): string
{
    return password_hash($password, PASSWORD_DEFAULT);
}


function verificarPassword(string $passwordHaseado): bool
{
    $passwordAlmacenado = 'contraseña';
    return password_verify($passwordHaseado, $passwordAlmacenado);
}

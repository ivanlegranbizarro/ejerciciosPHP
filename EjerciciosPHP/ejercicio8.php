<?php
/* Escribe un script para conectar a una base de datos MYSQL y realizar una consulta SELECT para obtener y mostrar información de usuarios */

$username = "root";
$password = "";
$dsn = "mysql:host=localhost;dbname=ejerciciosphp";


try {
    $conn = new PDO("$dsn", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare('SELECT * from usuarios');
    $stmt->execute();

    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $resultado;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

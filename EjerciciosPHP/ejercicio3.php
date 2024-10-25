<?php

/* Implementa un sistema de login básico que establezca una cookie con el nombre del usuario al iniciar sesión correctamente.
Muestra un saludo personalizado en visitas posteriores usando la coockie. */

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $username = $_POST["username"];
    $password = $_POST["password"];
}

if ($username == 'username' && $password == 'password') {
    setcookie("username", $username, time() + (86400 * 30), "/");
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

if (isset($_COOKIE["username"])) {
    echo "Hi {$_COOKIE['username']}";
} else {
    echo 'Aún no sabemos quién eres';
}

?>

<form method="post">
    <label for="username">Username</label>
    <br />
    <input type="text" name="username" />
    <label for="password">Password</label>
    <br />
    <input type="password" name="password" />
    <br />
    <input type="submit" value="Login" />
</form>

<?php

/*Crea un formulario de registro que guarde los datos del usuario (nombre, correo electrónico) en una sesión*/
/*muestra un mensaje de bienvenida con los datos del usuario al registrarse correctamente.*/

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['user_name'] = $_POST['name'];
    $_SESSION['user_email'] = $_POST['email'];
}

if ($_SESSION['user_name'] && $_SESSION['user_email']) {
    echo "Tú eres el usuario llamado {$_SESSION['user_name']} y tu correo es: {$_SESSION['user_email']}";
}


?>

<form method="post" accept-charset="utf-8">
    <label>Nombre</label>
    <br />
    <input type="text" name="name" />
    <br />
    <label>Email</label>
    <br />
    <input type="email" name="email" />
    <br />
    <input type="submit" value="Register">
</form>

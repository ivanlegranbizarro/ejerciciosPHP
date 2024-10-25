# 20 Ejercicios de PHP para Desarrolladores Junior con Soluciones

## 1. Calculadora Simple con Formulario

Crea un formulario con dos entradas numéricas y un menú desplegable para operaciones (suma, resta, multiplicación, división). Procesa el formulario con PHP y muestra el resultado.

Solución:
```php
<!-- calculadora.php -->
<form method="POST" action="">
    <input type="number" name="num1" required>
    <select name="operacion">
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="multiplicacion">Multiplicación</option>
        <option value="division">División</option>
    </select>
    <input type="number" name="num2" required>
    <input type="submit" value="Calcular">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];
    $resultado = 0;

    switch ($operacion) {
        case 'suma':
            $resultado = $num1 + $num2;
            break;
        case 'resta':
            $resultado = $num1 - $num2;
            break;
        case 'multiplicacion':
            $resultado = $num1 * $num2;
            break;
        case 'division':
            $resultado = $num2 != 0 ? $num1 / $num2 : "Error: División por cero";
            break;
    }

    echo "Resultado: $resultado";
}
?>
```

## 2. Registro de Usuario con Sesión

Crea un formulario de registro que guarde los datos del usuario (nombre de usuario, correo electrónico) en una sesión. Muestra un mensaje de bienvenida con los datos del usuario al registrarse correctamente.

Solución:
```php
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['email'] = $_POST['email'];
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}

if (isset($_SESSION['username']) && isset($_SESSION['email'])) {
    echo "Bienvenido, {$_SESSION['username']}! Tu correo es: {$_SESSION['email']}";
} else {
?>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Nombre de usuario" required>
        <input type="email" name="email" placeholder="Correo electrónico" required>
        <input type="submit" value="Registrar">
    </form>
<?php
}
?>
```

## 3. Sistema de Login con Cookies

Implementa un sistema de login básico que establezca una cookie con el nombre del usuario al iniciar sesión correctamente. Muestra un saludo personalizado en visitas posteriores usando la cookie.

Solución:
```php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Aquí deberías verificar las credenciales contra una base de datos
    if ($username === "usuario" && $password === "contraseña") {
        setcookie("user", $username, time() + (86400 * 30), "/"); // 30 días
        header("Location: ".$_SERVER['PHP_SELF']);
        exit();
    }
}

if (isset($_COOKIE['user'])) {
    echo "Bienvenido de nuevo, {$_COOKIE['user']}!";
} else {
?>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Nombre de usuario" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <input type="submit" value="Iniciar sesión">
    </form>
<?php
}
?>
```

## 4. Subida y Visualización de Archivos

Crea un formulario para subir un archivo de imagen. Guarda el archivo subido en un directorio y muéstralo en la página junto con su tamaño de archivo.

Solución:
```php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Verificar si el archivo es una imagen real
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "El archivo no es una imagen.";
        $uploadOk = 0;
    }

    // Subir el archivo
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "La imagen ". basename( $_FILES["fileToUpload"]["name"]). " ha sido subida.";
            echo "<br>Tamaño del archivo: " . filesize($target_file) . " bytes";
            echo "<br><img src='$target_file' width='200'>";
        } else {
            echo "Hubo un error al subir el archivo.";
        }
    }
}
?>

<form action="" method="post" enctype="multipart/form-data">
    Selecciona una imagen para subir:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Subir Imagen" name="submit">
</form>
```

## 5. Leer y Escribir en Archivo JSON

Crea funciones para leer y escribir en un archivo JSON. Usa estas funciones para implementar un libro de visitas simple donde los usuarios puedan dejar mensajes.

Solución:
```php
<?php
function leerMensajes() {
    $archivo = 'mensajes.json';
    if (file_exists($archivo)) {
        $json = file_get_contents($archivo);
        return json_decode($json, true);
    }
    return [];
}

function escribirMensaje($nombre, $mensaje) {
    $mensajes = leerMensajes();
    $mensajes[] = ['nombre' => $nombre, 'mensaje' => $mensaje, 'fecha' => date('Y-m-d H:i:s')];
    $json = json_encode($mensajes);
    file_put_contents('mensajes.json', $json);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    escribirMensaje($_POST['nombre'], $_POST['mensaje']);
}

$mensajes = leerMensajes();
?>

<form method="POST" action="">
    <input type="text" name="nombre" placeholder="Tu nombre" required>
    <textarea name="mensaje" placeholder="Tu mensaje" required></textarea>
    <input type="submit" value="Enviar mensaje">
</form>

<h2>Mensajes:</h2>
<?php foreach ($mensajes as $mensaje): ?>
    <p><strong><?= htmlspecialchars($mensaje['nombre']) ?>:</strong> 
       <?= htmlspecialchars($mensaje['mensaje']) ?> 
       <em>(<?= $mensaje['fecha'] ?>)</em></p>
<?php endforeach; ?>
```

## 6. Manipulación de Arrays con foreach

Escribe una función que tome un array de números, use un bucle foreach para elevar al cuadrado cada número y devuelva el array modificado.

Solución:
```php
<?php
function elevarAlCuadrado($numeros) {
    $resultado = [];
    foreach ($numeros as $numero) {
        $resultado[] = $numero * $numero;
    }
    return $resultado;
}

$numerosOriginales = [1, 2, 3, 4, 5];
$numerosCuadrados = elevarAlCuadrado($numerosOriginales);

echo "Números originales: " . implode(", ", $numerosOriginales) . "<br>";
echo "Números al cuadrado: " . implode(", ", $numerosCuadrados);
?>
```

## 7. Clase Simple de Producto

Crea una clase Producto con propiedades como nombre, precio y cantidad. Implementa métodos para calcular el valor total y mostrar la información del producto.

Solución:
```php
<?php
class Producto {
    private $nombre;
    private $precio;
    private $cantidad;

    public function __construct($nombre, $precio, $cantidad) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->cantidad = $cantidad;
    }

    public function calcularValorTotal() {
        return $this->precio * $this->cantidad;
    }

    public function mostrarInformacion() {
        return "Producto: {$this->nombre}, Precio: {$this->precio}€, Cantidad: {$this->cantidad}";
    }
}

$producto = new Producto("Laptop", 999.99, 2);
echo $producto->mostrarInformacion() . "<br>";
echo "Valor total: " . $producto->calcularValorTotal() . "€";
?>
```

## 8. Conexión a Base de Datos y Consulta

Escribe un script para conectar a una base de datos MySQL y realizar una consulta SELECT para obtener y mostrar información de usuarios.

Solución:
```php
<?php
$servername = "localhost";
$username = "usuario";
$password = "contraseña";
$dbname = "mi_base_de_datos";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT id, nombre, email FROM usuarios");
    $stmt->execute();

    $resultado = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach($stmt->fetchAll() as $fila) {
        echo "ID: " . $fila["id"]. " - Nombre: " . $fila["nombre"]. " - Email: " . $fila["email"]. "<br>";
    }
} catch(PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
$conn = null;
?>
```

## 9. Hash y Verificación de Contraseñas

Implementa funciones para hashear una contraseña y verificar una contraseña contra un hash almacenado usando las funciones password_hash() y password_verify() de PHP.

Solución:
```php
<?php
function hashearContraseña($contraseña) {
    return password_hash($contraseña, PASSWORD_DEFAULT);
}

function verificarContraseña($contraseña, $hash) {
    return password_verify($contraseña, $hash);
}

// Ejemplo de uso
$contraseña = "miContraseñaSegura123";
$hashAlmacenado = hashearContraseña($contraseña);

echo "Hash almacenado: " . $hashAlmacenado . "<br>";

$contraseñaIngresada = "miContraseñaSegura123";
if (verificarContraseña($contraseñaIngresada, $hashAlmacenado)) {
    echo "La contraseña es correcta";
} else {
    echo "La contraseña es incorrecta";
}
?>
```

## 10. Validación y Envío de Correo Electrónico

Crea un formulario para enviar correos electrónicos. Valida la dirección de correo electrónico usando la función filter_var() de PHP y usa la función mail() para enviar un correo de prueba.

Solución:
```php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = "From: webmaster@example.com";

    if (filter_var($to, FILTER_VALIDATE_EMAIL)) {
        if (mail($to, $subject, $message, $headers)) {
            echo "Correo enviado con éxito a $to";
        } else {
            echo "Error al enviar el correo";
        }
    } else {
        echo "Dirección de correo electrónico no válida";
    }
}
?>

<form method="POST" action="">
    <input type="email" name="email" placeholder="Correo electrónico" required>
    <input type="text" name="subject" placeholder="Asunto" required>
    <textarea name="message" placeholder="Mensaje" required></textarea>
    <input type="submit" value="Enviar correo">
</form>
```

## 11. Manipulación de Fechas y Horas

Escribe un script que muestre la fecha y hora actual en diferentes formatos y calcule la diferencia entre dos fechas.

Solución:
```php
<?php
// Mostrar fecha y hora actual en diferentes formatos
echo "Fecha y hora actual: " . date("Y-m-d H:i:s") . "<br>";
echo "Formato personalizado: " . date("l, d \de F \de Y, h:i A") . "<br>";

// Calcular diferencia entre dos fechas
$fecha1 = new DateTime('2023-01-01');
$fecha2 = new DateTime('2023-12-31');
$diferencia = $fecha1->diff($fecha2);

echo "Diferencia entre el 1 de enero y el 31 de diciembre de 2023:<br>";
echo $diferencia->format('%y años, %m meses, %d días');
?>
```

## 12. Manejo de Archivos CSV

Crea funciones para leer y escribir en un archivo CSV. Usa estas funciones para implementar un sistema simple de gestión de contactos.

Solución:
```php
<?php
function leerCSV($archivo) {
    $contactos = [];
    if (($gestor = fopen($archivo, "r")) !== FALSE) {
        while (($datos = fgetcsv($gestor, 1000, ",")) !== FALSE) {
            $contactos[] = $datos;
        }
        fclose($gestor);
    }
    return $contactos;
}

function escribirCSV($archivo, $contacto) {
    $gestor = fopen($archivo, "a");
    fputcsv($gestor, $contacto);
    fclose($gestor);
}

$archivoCSV = "contactos.csv";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nuevoContacto = [$_POST['nombre'], $_POST['email'], $_POST['telefono']];
    escribirCSV($archivoCSV, $nuevoContacto);
}

$contactos
```

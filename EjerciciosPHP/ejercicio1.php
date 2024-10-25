<?php
/* Crea un formulario con dos entradas numéricas y un menú desplegable para operaciones (suma, resta, multiplicación y división). Procesa el formulario y muestra el resultado de la operación elegida. */

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    $result = match ($operation) {
        'add' => $num1 + $num2,
        'sub' => $num1 - $num2,
        'mul' => $num1 * $num2,
        'div' => $num1 / $num2 != 0 ? $num1 / $num2 : throw new Exception('División por cero'),
        default => throw new Exception('Operación no válida'),
    };

    echo "El resultado de $num1 $operation $num2 es $result";
}

?>

<form method="post">
    <input type="number" name="num1">
    <br />
    <select name="operation">
        <option value="">Selecciona una operación</option>
        <option value="add">Suma</option>
        <option value="sub">Resta</option>
        <option value="mul">Multiplicación</option>
        <option value="div">División</option>
    </select>
    <br />
    <input type="number" name="num2">
    <br />
    <input type="submit" value="Calcular" />
</form>

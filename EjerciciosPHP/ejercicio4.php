<?php
// Crea un formulario para subir un archivo de imagen. Guarad el archivo subido en un directorio y muéstralo en la página junto con su tamaño de archivo

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $target_dir = 'uploads/';
    $target_file = $target_dir . basename($_FILES['file']['name']);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES['file']['tmp_name']);
    $check !== false ? $uploadOk = 1 : $uploadOk = 0;

    if ($uploadOk = 1) {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
            echo 'La imagen ' . basename($_FILES['file']['name']) . ' ha sido subida.';
            echo '<br>Tamaño del archivo: ' . filesize($target_file) . ' bytes';
            echo '<br><img src="' . $target_file . '" width="200">';
        } else {
            echo 'Hubo un error al subir la imagen. Por favor, pruebe de nuevo.';
        }
    }
}


?>

<form method="post" enctype="multipart/form-data">
    <label for="photo">Photo</label>
    <br />
    <input type="file" name="photo" />
    <br />
    <input type="submit" value="Upload" />
</form>

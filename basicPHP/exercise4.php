<?php
// 4. Create a simple HTML form and accept the user name and display the name through PHP echo statement.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
}

echo '<h1>' . $name . '</h1>';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercise4</title>
</head>

<body>
    <form method="post">
        <input type="text" name="name" />
        <input type="submit" value="Submit" />
    </form>
</body>

</html>

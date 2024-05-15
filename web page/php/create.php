<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_combinacion = $_POST['id_combinacion'];
    $url = $_POST['url'];

    $sql = "INSERT INTO imagenes (id_combinacion, url) VALUES ('$id_combinacion', '$url')";

    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Agregar Nueva Imagen</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Agregar Nueva Imagen</h1>
    <form method="post" action="">
        <label for="id_combinacion">ID Combinación:</label>
        <input type="number" id="id_combinacion" name="id_combinacion" required><br>
        <label for="url">URL:</label>
        <input type="text" id="url" name="url" required><br>
        <input type="submit" value="Agregar">
    </form>
    <a href="index.php">Volver</a>
</body>
</html>

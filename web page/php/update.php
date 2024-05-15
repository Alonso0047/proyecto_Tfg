<?php
include 'config.php';

$id = $_GET['id'];
$sql = "SELECT * FROM imagenes WHERE id_imagen='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_combinacion = $_POST['id_combinacion'];
    $url = $_POST['url'];

    $sql = "UPDATE imagenes SET id_combinacion='$id_combinacion', url='$url' WHERE id_imagen='$id'";

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
    <title>Actualizar Imagen</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Actualizar Imagen</h1>
    <form method="post" action="">
        <label for="id_combinacion">ID Combinación:</label>
        <input type="number" id="id_combinacion" name="id_combinacion" value="<?php echo $row['id_combinacion']; ?>" required><br>
        <label for="url">URL:</label>
        <input type="text" id="url" name="url" value="<?php echo $row['url']; ?>" required><br>
        <input type="submit" value="Actualizar">
    </form>
    <a href="index.php">Volver</a>
</body>
</html>

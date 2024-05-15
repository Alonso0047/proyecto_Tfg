<?php
include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD de Imágenes</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Listado de Imágenes</h1>
    <a href="create.php">Agregar Nueva Imagen</a>
    <table>
        <tr>
            <th>ID Imagen</th>
            <th>ID Combinación</th>
            <th>URL</th>
            <th>Acciones</th>
        </tr>
        <?php
        $sql = "SELECT * FROM imagenes";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id_imagen']}</td>
                        <td>{$row['id_combinacion']}</td>
                        <td>{$row['url']}</td>
                        <td>
                            <a href='update.php?id={$row['id_imagen']}'>Editar</a>
                            <a href='delete.php?id={$row['id_imagen']}'>Eliminar</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No hay imágenes</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>


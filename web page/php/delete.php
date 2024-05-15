<?php
include 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM imagenes WHERE id_imagen='$id'";

if ($conn->query($sql) === TRUE) {
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

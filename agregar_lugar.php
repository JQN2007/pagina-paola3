<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];

$sql = "INSERT INTO lugares (nombre, descripcion, categoria)
        VALUES ('$nombre', '$descripcion', '$categoria')";

if ($conn->query($sql) === TRUE) {
    echo "OK";
} else {
    echo "ERROR: " . $conn->error;
}

$conn->close();
?>
